$(function() {

	//Full Slider
	$('#full-slider').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    autoplaySpeed: 2000,
	});

	//Scroll menu
	$(".scroll-link>a").on("click", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href').replace('/', '');

        if (!$(id).offset()) {
        	return window.location.href = $(this).attr('href');
		}
        var top = $(id).offset().top;
            topScroll = top - 50;
        $('body,html').animate({scrollTop: topScroll}, 1500);
      	if ($(window).width() <= '1200'){  
        	closeMenu();
    	}
    });



	//Menu
	$("#mob-burger").click(function() {
        $(this).toggleClass("open"),
        $("#header-menu-js").toggleClass("open"),
        $(".mob-menu__bg").toggle()
    })
     $(window).on("load resize", function() {
		if ( "1450" >= $(window).width() ) {
			$(document).scroll(function() {
	        	200 < $(document).scrollTop() ? $(".header").addClass("h-fixed") : $(".header").removeClass("h-fixed")
	    	})
		};
    })

	var closeMenu = function() {
        $("#header-menu-js").removeClass("open");
        $(".mob-menu__bg").fadeOut();
    };

	//Reviews Slider
	$('.reviews__slider').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    autoplaySpeed: 2000,
	    adaptiveHeight: true,
	    fade: true,
		speed: 500,
	    prevArrow: $('#reviews .slidArrow-left'),
        nextArrow: $('#reviews .slidArrow-right'),
	});

	//Certificate
	$(".certificate__block").on("click", '.certificate__item', function () {
        var certificate = $(this).attr("data-cer");
		
        $(".certificate__item").removeClass("active");
        $(".certificate__img a").removeClass("active");
        $(".certificate__img a[data-image = " + certificate + "]").addClass("active");
        $(this).addClass("active");
		if ( "980" >= $(window).width() ) {
        	$('html, body').animate({scrollTop:$('.certificate__img').offset().top - 100}, 2000);
    	};
    });

	//Programs tab
	$(".programs__tab").on("click", '.programs__btn', function (e) {
		e.preventDefault();
        var tab = $(this).attr("data-tab");

        $('.programs__btn').removeClass("active");
        $('.programs__wrapper').removeClass("active");
        $(this).addClass("active");
		$(".programs__wrapper[data-content = " + tab + "]").addClass("active");
       
    });

	//Treiners slider
	 function Slider(){

	 	var bigSlid = $('.slider-1');
		var smallSlid = $('.slider-2');
	    bigSlid.slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
			// fade: true,
			// speed: 500,
	        arrows: false,
	        swipe:false,
	    });
	    smallSlid.slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        // fade: true,
			// speed: 500,
	        arrows: false,
	        initialSlide: 1,
	        swipe:false,
	    });

		$('#treiner .slidArrow-right').click(function(){
			bigSlid.slick("slickPrev");
			smallSlid.slick("slickPrev");
	    });
	    $('#treiner .slidArrow-left').click(function(){
			bigSlid.slick("slickNext");
			smallSlid.slick("slickNext");
		});
	 }
	 Slider();
	 // autoclick
	   setTimeout(function() { 
	    $('.slid-leftArrow').click();
	  }, 3000);

	//Question
	$('.question__list .accordion-item-js:eq(0)').addClass('open').find('.accordion-contant-js').slideDown();
	$('.question__list .accordion-item-js').click(function() {
	    var dropDown = $(this).closest('.accordion-item-js').toggleClass('open').find('.accordion-contant-js');
		
	    dropDown.stop(false, true).slideToggle();
	});

	//Popup
	$('.popup').magnificPopup({});
	$('.popup-img').magnificPopup({
	  type: 'image'
	});
	$('.close-popup').on( "click", function() {
	  $.magnificPopup.close();
	});

	//Wow
	 new WOW().init();

});
