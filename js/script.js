$(document).ready(function() {

	$("#button-nav").click(function(){
		$(this).parent().toggleClass('active');
	})

	$('#toggle-menu-button-full').click(function(){
		$(this).toggleClass('active');
		$('#nav').toggleClass('active');
	})

	$("#header .language li.active").click(function(){
		$('#header .language').toggleClass('active');
		return false;
	})

	$("#header .search .btn-search").click(function(){
		$('#header .search').toggleClass('active');
		return false;
	})
	$("#header .contacts .btn-contacts").click(function(){
		$('#header .contacts').toggleClass('active');
		return false;
	})

	if ($(window).width() <= '992'){
		$(".sidebar-head").click(function(){
			$('#sidebar').toggleClass('active');
			$('#sidebar .sidebar-body').slideToggle();
			return false;
		})
	}

	/**/
	if ($(window).width() <= '992'){
		$offsetTop = 0;
	} else {
		$offsetTop = 140;
	}
	$(window).scroll(function (){
		if ($(this).scrollTop() > $offsetTop){
			$("body").addClass('sticky');
		} else{
			$("body").removeClass('sticky');
		}
	});

	/**/
	$('#slider').slick({
		infinite: true,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		arrows: true,
		dots: false,
		draggable: false,
		fade: true,
		speed: 2000,
		appendArrows: '#slider-wrap .slider-nav',
		prevArrow: $('#slider-wrap .slider-nav .slick-prev'),
		nextArrow: $('#slider-wrap .slider-nav .slick-next')
	});

	$('.auctions-carousel').slick({
		infinite: true,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 7000,
		arrows: true,
		dots: false,
		draggable: true,
		speed: 1000,
		appendArrows: '.main-auctions .slider-nav',
		prevArrow: $('.main-auctions .slider-nav .slick-prev'),
		nextArrow: $('.main-auctions .slider-nav .slick-next')
	});

	$('.review-carousel').slick({
		infinite: true,
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 7000,
		arrows: true,
		dots: false,
		draggable: true,
		fade: false,
		appendArrows: '.main-reviews .slider-nav',
		prevArrow: $('.main-reviews .slider-nav .slick-prev'),
		nextArrow: $('.main-reviews .slider-nav .slick-next'),
		responsive: [
			{
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 2
		      }
		    },
		    {
		      breakpoint: 620,
		      settings: {
		        slidesToShow: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1
		      }
		    }
		  ]
	});

	$('.product-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.product-slider-nav',
        appendArrows: '.full-image .slider-nav',
		prevArrow: $('.full-image .slider-nav .slick-prev'),
		nextArrow: $('.full-image .slider-nav .slick-next'),
		adaptiveHeight: true,
    });

    $('.product-slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.product-slider-for',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true
    });

	/**/
	jcf.setOptions('Select', {
		wrapNative: false,
		fakeDropInBody: false
	});
	jcf.replaceAll(); 

	jcf.destroy( '#sidebar select' );
	
	/**/
	$("#up").hide();
    $(window).scroll(function (){
	    if ($(this).scrollTop() > 800){
	      $("#up").fadeIn();
	    } else{
	      $("#up").fadeOut();
	    }
    });
    $("#up").click(function (){
	    $("body,html").animate({
	      scrollTop:0
	    }, 600);
	    return false;
    });

    /**/
    $(window).load(function(){
		$(".scroll").mCustomScrollbar({
			theme:"minimal",
			scrollInertia:400
		});
	});

	/**/
	$(".modal").on("show.bs.modal", function (e) {
		$(this).css('display','flex');
	});

	/* MAP DELIVERY */
	$("[data-number]").hover(function(){
		var linkNumber =  $(this).data("number");
		$(".map-delivery-wrap .line-last, .map-delivery-wrap .line-" + linkNumber).toggleClass('active');
		return false;
    });

});