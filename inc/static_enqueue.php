<?php
/**
 * Enqueue site scripts and styles
 */
function fabio_scripts() {

  // for One Page
  if(is_page_template('one_page.php')){
	
	wp_enqueue_style( 'fabio-one-owlcarousel-min', get_theme_file_uri('/assets/css/onepage/owl.carousel.min.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-one-responsive', get_theme_file_uri('/assets/css/onepage/responsive.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-one-magnific', get_theme_file_uri('/assets/css/onepage/magnific-popup.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-one-pagepiling', get_theme_file_uri('/assets/css/onepage/jquery.pagepiling.min.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-one-style', get_theme_file_uri('/assets/css/onepage/style.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-one-swiper', get_theme_file_uri('/assets/css/onepage/swiper.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-one-slick', get_theme_file_uri('/assets/css/onepage/slick.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-one-fa', get_theme_file_uri('/assets/css/onepage/all.min.css'), array(), fabio_VERSION );

  }else{

	wp_enqueue_style( 'fabio-fonts', fabio_fonts_url() );
	wp_enqueue_style( 'mediaelementplayer', fabio_VEND . '/media-player/mediaelementplayer.css' );
	wp_enqueue_style( 'fontawesome', fabio_VEND . '/fontawesome-free-6.0.0-web/css/all.min.css' );
	wp_enqueue_style( 'icomoon-theme', fabio_VEND . '/icomoon/style.css' );
	wp_enqueue_style( 'nice-select', fabio_VEND . '/nice-select/nice-select.css' );
	wp_enqueue_style( 'fabio-main-style', get_theme_file_uri('/assets/css/style.min.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-custom-style', get_theme_file_uri('/assets/css/custom.css'), array(), fabio_VERSION );
	wp_enqueue_style( 'fabio-root', get_stylesheet_uri(), array(), fabio_VERSION );
    wp_style_add_data( 'fabio-root', 'rtl', 'replace' );
  }
  wp_enqueue_style( 'bootstrap', fabio_CSS . '/bootstrap.min.css' );

    /**
     * Enqueueing Scripts
     */
	
	if(is_page_template('one_page.php')){

		wp_enqueue_script( 'fabio-popper-min', get_theme_file_uri('/assets/js/onepage/popper.min.js'),  array('jquery'), fabio_VERSION, true );
		wp_enqueue_script( 'fabio-bootstrap-min', get_theme_file_uri('/assets/js/onepage/bootstrap.min.js'),  array('jquery'), '4.4.1', true );
		wp_enqueue_script( 'fabio-owlcarouselmin', get_theme_file_uri('/assets/js/onepage/owl.carousel.min.js'),  array('jquery'), '2.3.4', true );
		wp_enqueue_script( 'fabio-swiper', get_theme_file_uri('/assets/js/onepage/swiper.js'),  array('jquery'), '5.4.5', true );
		wp_enqueue_script( 'fabio-slider', get_theme_file_uri('/assets/js/onepage/slider.js'),  array('jquery'), fabio_VERSION, true );
		wp_enqueue_script( 'fabio-magnific-popup', get_theme_file_uri('/assets/js/onepage/jquery.magnific-popup.min.js'),  array('jquery'), '1.1.0', true );
		wp_enqueue_script( 'fabio-pagepiling', get_theme_file_uri('/assets/js/onepage/jquery.pagepiling.min.js'),  array('jquery'), '1.5.6', true );
		wp_enqueue_script( 'fabio-slick-min', get_theme_file_uri('/assets/js/onepage/slick.min.js'),  array('jquery'), fabio_VERSION, true );
		wp_enqueue_script( 'fabio-validate', get_theme_file_uri('/assets/js/onepage/jquery.validate.min.js'),  array('jquery'), '1.16.0', true );
		wp_enqueue_script( 'fabio-interface', get_theme_file_uri('/assets/js/onepage/interface.js'),  array('jquery'), fabio_VERSION, true );

	}else{
		wp_enqueue_script( 'mediaelement-and-player', fabio_VEND. '/media-player/mediaelement-and-player.min.js', array('jquery'), '4.2.6', true );
		wp_enqueue_script( 'parallaxie', fabio_VEND. '/parallax/parallaxie.js', array('jquery'), '0.5', true );
		wp_enqueue_script( 'nice-select', fabio_VEND. '/nice-select/jquery.nice-select.min.js', array('jquery'), '0.5', true );
		wp_enqueue_script( 'fabio-main-js', fabio_JS . '/main.js', array('jquery'), fabio_VERSION, true );
	}



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fabio_scripts' );