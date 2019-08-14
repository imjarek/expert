jQuery(document).ready(function() {

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
        addToCart($(this).data('id'));
      });
    }
    var addToCart = function (itemId){
      $.ajax({
        url: '/cart/add',
        type: "POST",
        data: { itemId: itemId},
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response){
          console.log(response);
        }
      });
    }
    return { init:init }
  })();

  screenSaver.show();
  licenceGallery.init();
  shoppingCart.init();

});



