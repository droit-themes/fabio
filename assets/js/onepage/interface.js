﻿jQuery(function () {
	'use strict';

    /*Slick*/
    jQuery('.slider-area').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                  breakpoint: 769,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 481,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
              ]
        });
        jQuery('.edu-slider-itmes').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 2,
			vertical: true,
            dots: true,
            arrows: true,
            autoplay: true,
            prevArrow:
			'<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
		    nextArrow:
			'<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
            autoplaySpeed: 2000
        });
        $('.product-item').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		fade: true,
		prevArrow:
			'<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
		nextArrow:
			'<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
		autoplaySpeed: 2000,
		asNavFor: '.product-lists',
	});
	$('.product-lists').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		infinite: true,
		centerMode: true,
		centerPadding: '100px',
		asNavFor: '.product-item',
		dots: false,
		responsive: true,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					centerMode: true,
					centerPadding: '50px',
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					centerPadding: '50px',
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					centerPadding: '30px',
					variableWidth: true,
				},
			},
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		],
	});
  	

        $('.testimonial_slider_items').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow:
                '<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
            autoplaySpeed: 2000,
            arrows: true,
        });

  	/* Window Load */
      jQuery(window).on('load',function(){
		jQuery('.loader').fadeOut(200);
        jQuery('.line').addClass('active');
	});


    /* Navbar scroll*/
    jQuery('.navbar-nav ul li a').on('click', function() {
        var target = $(this.hash);
        if (target.length) {
            $('html,body').animate({
                scrollTop: (target.offset().top)
            }, 1000);
            $('body').removeClass('menu-is-opened').addClass('menu-is-closed');
            return false;
        }
    });



    /* Full page scroll*/
    if (jQuery('#pagepiling').length > 0){

        jQuery('#pagepiling').pagepiling({
            scrollingSpeed: 280,
            navigation:false,
            menu: '.navbar-nav',
            anchors: ['home', 'testimonial', 'blog', 'experience',  'skills', 'product', 'contact'],
            afterRender: function(anchorLink, index){ 
              NavbarColor();

            },
            afterLoad: function(anchorLink, index){
                $('.pp-section .intro').removeClass('animate');
                $('.active .intro').addClass('animate');
                NavbarColor();
            }
        });

  

        function NavbarColor(){
         if (jQuery('.pp-section.active').hasClass('navbar-is-white')){
                $('.navbar-desctop').addClass('navbar-white');
                $('.progress-nav').addClass('progress-nav-white');
                $('.navbar-bottom').addClass('navbar-bottom-white');
            }
            else{
                $('.navbar-desctop').removeClass('navbar-white');
                $('.progress-nav').removeClass('progress-nav-white');
                $('.navbar-bottom').removeClass('navbar-bottom-white');
            }
        }
    }


    /* Navbar toggler */
    jQuery('.toggler').on('click',function(){
    	$('body').addClass('menu-is-open');
    });

    jQuery('.close, .click-capture').on('click',function(){
    	$('body').removeClass('menu-is-open');
    });


    /* Navbar mobile */
    jQuery('.navbar-nav-mobile li a').on('click', function(){
    	$('body').removeClass('menu-is-open');
    	$('.navbar-nav-mobile li a').removeClass('active');
    	$(this).addClass('active');
    });

    jQuery('.video-play-btn').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    
    // Testimonial Fix



    /* Change bacgkround on project section*/
    jQuery('.project-box').on('mouseover',function(){
        var index = $('.project-box').index(this);
        $('.bg-changer .section-bg').removeClass('active').eq(index).addClass('active');
    });


    /* Carousel experience*/
    $('.carousel-experience').owlCarousel({
        loop:true,
        margin:45,
        dots:true,
        nav:true,
        smartSpeed:1000,
        items:1
    });

    /* Carousel testimonials */
    $('.carousel-testimonials').owlCarousel({
	    loop:true,
	    margin:10,
        nav:true,
	    dots:false,
	    items:1
	});

    /* Send form */
	if ($('.js-ajax-form').length) {
		$('.js-ajax-form').each(function(){
			$(this).validate({
				errorClass: 'error',
			    submitHandler: function(form){
		        	$.ajax({
			            type: "POST",
			            url:"mail.php",
			            data: $(form).serialize(),
			            success: function() {
		                	$('#success-message').show();
		                },

		                error: function(){
		                	$('#error-message').show();
			            }
			        });
			    }
			});
		});
    }
    
    //fillbar js
	$.fn.rProgressbar = function (options) {
		options = $.extend(
			{
				percentage: null,
				ShowProgressCount: true,
				duration: 1000,
				borderRadius: '4px',
				width: '100%',
			},
			options
		);
		$.options = options;
		return this.each(function (index, el) {
			$(el).html(
				'<div class="progressbar"><div class="proggress"></div><div class="percentCount"></div></div>'
			);
			var lineProgressBarInit = function () {
				var progressFill = $(el).find('.proggress');
				var progressBar = $(el).find('.progressbar');
				progressFill.css({
					backgroundColor: options.fillBackgroundColor,
					height: options.height,
					borderRadius: options.borderRadius,
				});
				progressBar.css({
					width: options.width,
					backgroundColor: options.backgroundColor,
					borderRadius: options.borderRadius,
				});
				progressFill.animate(
					{ width: options.percentage + '%' },
					{
						step: function (x) {
							if (options.ShowProgressCount) {
								$(el)
									.find('.percentCount')
									.text(' ' + Math.round(x) + '%');
							}
						},
						duration: options.duration,
					}
				);
			};
			$(this).waypoint(lineProgressBarInit, {
				offset: '100%',
				triggerOnce: true,
			});
		});
	};
	//fillbar js
	$('.fillbar').each(function () {
		var t = $(this),
			a = $(this).data('percentage');
		t.rProgressbar({
			percentage: a,
		});
	});

    /* Change bacgkround on project section*/
    $('.dl_project_box').on('mouseover',function(){
        var index = $('.dl_project_box').index(this);
        $('.dl_bg_changer .dl_section_bg').removeClass('dl_active').eq(index).addClass('dl_active');
    });

    $("[data-bg-img]").each(function () {
        var bg = $(this).data("bg-img");
        $(this).css({
            "background": "no-repeat center/cover url(" + bg + ")",
        })
    })

    $("[data-bg-color]").each(function () {
        var bg_color = $(this).data("bg-color");
        $(this).css({
            "background-color": (bg_color)
        })
    })

});
