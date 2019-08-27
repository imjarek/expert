jQuery(document).ready(function() {

  var Common = function()
  {
    var raiseError = function (data, message = 'Произошла ошибка'){
      if (data.errors) {
        for (mess in data.errors) {
          message += '\r\n' + data.errors[mess];
        }
      }
      alert(message);
    }
    return {
      raiseError: raiseError
    }
  }
  var screenSaver = (function (){
    var show = function () {
      var i = 0;
      var classNames = ['one', 'two', 'three'];
      setInterval(function (){
        var el =$('.fitness');
        el.removeClass(classNames[0]);
        classNames.unshift(classNames.splice(-1, 1)[0]);
        el.addClass(classNames[0]);
      }, 10000);
    }

    return {
      show: show
    };

  })();

  var licenceGallery = (function (){
    var init = function (){
      var modal = document.getElementById('myModal');

      var images = $('img#myImg');
      var modalImg = document.getElementById("lic_modal");
      var captionText = document.getElementById("caption");

      images.each(function (i, image) {
        image.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
      });

      var span = document.getElementsByClassName("close")[0];
      if (span) {
        span.onclick = function () {
          modal.style.display = "none";
        }
      }
    }
    return { init: init }
  })();

  var shoppingCart = (function (){
    var init = function(){
      $('.to-shopping-cart-btn').click(function(el){
        $(this).prop('disabled', true);
        if ($(this).hasClass('btn-success')) {
          window.location.href = 'https://' + window.location.hostname + '/cart';
        };
        addToCart($(this).data('id'), $(this));
      });

      $('#make-order-btn').click(function(el){
        let ids = [];
        $(this).prop('disabled', true);

        $('.shopping-cart :input[type=checkbox]').each(function(i){
          if ($(this).data('id') > 0) {
            ids.push($(this).data('id'));
          }
        });
        if (ids.length < 1) {
          return alert("Отметьте желаемые курсы галочкой");
        }

        makeOrder(ids, $(this));
      });
    }

    var makeOrder = function(ids){

      var username = $('#make-order-form').find('input[name="first_name"]').val(),
        email = $('#make-order-form').find('input[name="email"]').val(),
        phone = $('#make-order-form').find('input[name="phone"]').val();


      if (!username || !email || !phone) {
        return alert('Вы не указали E-mail или Имя');
      }
      $.ajax({
        url: '/order/create',
        type: "POST",
        data: { course_ids: ids, username: username, email: email, phone: phone },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response){

          if (response.order_uuid) {
            window.location.href = 'http://' + window.location.hostname + '/order/success/' + response.order_uuid;
          } else {
            alert('Произошла ошибка! Заказ не создан. Свяжитесь с технической поддержкой');
          }
          console.log(response);
        },
        error: function (response){
          Common.raiseError(response.responseJSON);
        }
      });
    };
    var addToCart = function (itemId, btn){

      $.ajax({
        url: '/cart/add',
        type: "POST",
        data: { itemId: itemId},
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response){
          btn.text('В корзине');
          btn.removeClass('btn-info').addClass('btn-success');
          console.log(response);
        }
      });
    }
    return { init:init }
  })();

  screenSaver.show();
  licenceGallery.init();
  shoppingCart.init();

  Common = Common();

});



