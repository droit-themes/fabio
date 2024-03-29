<?php
/**
 * Theme Banner Settings
 */
Redux::set_section('fabio_opt', array(
    'title'            => esc_html__( 'Banner Setting', 'fabio' ),
    'id'               => 'banner_settings_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('fabio_opt', array(
    'title'            => esc_html__( 'Page Banner', 'fabio' ),
    'id'               => 'page_banner_opt',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'        => 'page_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Banner', 'fabio'),
            'subtitle'  => esc_html__('Show Hide Page Banner Globally ', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fabio'),
                'hide'  => esc_html__('Hide Banner', 'fabio'),
            ), 
            'default'   => 'show',
        ),

        array(
            'id'        => 'page_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Breadcrumb', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Title', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fabio'),
            'default'   => array(
                'url'   => fabio_IMAGES.'/blog/banner/blog_details_img.png',
            ),
            'required'  => array('page_banner_toggle', '=', 'show')

        ),
        array(
            'id'        => 'page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.page-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('page_banner_toggle', '=', 'show')
        ),
      )
));


// Blog Banner
Redux::set_section('fabio_opt', array(
    'title'            => esc_html__( 'Blog Banner', 'fabio' ),
    'id'               => 'blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Banner', 'fabio'),
            'subtitle'  => esc_html__('Show Hide Blog Banner Globally ', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fabio'),
                'hide'  => esc_html__('Hide Banner', 'fabio'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'is_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Title', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array( 
            'title'     => esc_html__('Blog title', 'fabio'),
            'id'        => 'blog_banner_title',
            'type'      => 'text',
            'default'   => 'Blog List',
            'required'  => array('is_blog_banner_title', '=' , 'show')
        ),

        array(
            'id'        => 'blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fabio'),
            'default'   => array(
                'url'   => fabio_IMAGES.'/blog/banner/blog_details_img.png',
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),
      )
));


// Single page Banner
Redux::set_section('fabio_opt', array(
    'title'            => esc_html__( 'Single Blog Banner', 'fabio' ),
    'id'               => 'single_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'single_blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Single Blog Banner', 'fabio'),
            'subtitle'  => esc_html__('Show Hide Banner Globally ', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fabio'),
                'hide'  => esc_html__('Hide Banner', 'fabio'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'single_blog_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_single_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'single_blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fabio'),
            'default'   => array(
                'url'   => fabio_IMAGES.'/blog/banner/blog_details_img.png',
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.blog-single-page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),
      )
));


//  Archive page Banner
Redux::set_section('fabio_opt', array(
    'title'            => esc_html__( 'Archive Banner', 'fabio' ),
    'id'               => 'archive_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'archive_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive  Banner', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fabio'),
                'hide'  => esc_html__('Hide Banner', 'fabio'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'archive_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_archive_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Title', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'archive_description',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Description', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'archive_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fabio'),
            'default'   => array(
                'url'   => fabio_IMAGES.'/blog/banner/blog_details_img.png',
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.search-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),
      )
));

// search page Banner
Redux::set_section('fabio_opt', array(
    'title'            => esc_html__( 'Search Banner', 'fabio' ),
    'id'               => 'search_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'search_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fabio'),
            'default'   => array(
                'url'   => fabio_IMAGES.'/blog/banner/blog_details_img.png',
            ),
        ),

        array(
            'id'        => 'search_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.archive-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
        ),
    )
));


// 404 Error page
Redux::set_section('fabio_opt', array(
    'title'            => esc_html__( '404 Banner', 'fabio' ),
    'id'               => 'error_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'error_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show 404  Banner', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fabio'),
                'hide'  => esc_html__('Hide Banner', 'fabio'),
            ),
            'default'   => 'show'
        ),

        array(
            'id'        => 'is_error_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ),
            'default'   => 'show',
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'title'         => esc_html__('404 Banner Title', 'fabio'),
            'type'          => 'text',
            'id'            => 'error_banner_title',
            'default'       => '404',
            'required'      => array('is_error_banner_title', '=', 'show')
        ),

        array(
            'id'        => 'error_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'fabio'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fabio'),
                'hide'  => esc_html__('Hide', 'fabio'),
            ),
            'default'   => 'show',
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'error_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fabio'),
            'default'   => array(
                'url'   => fabio_IMAGES.'/blog/banner/blog_details_img.png',
            ),
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => '404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('error_banner_toggle', '=', 'show')
        ),
    )
));

if(class_exists('WooCommerce')) {
    // Shop page banner settings 
    Redux::set_section('fabio_opt', array(
        'title'            => esc_html__( 'Shop', 'fabio' ),
        'id'               => 'shop_banner_opt',
        'icon'             => '',
        'subsection'       => true,
        'fields'           => array(
    
            array(
                'id'        => 'shop_banner_toggle',
                'type'      => 'button_set',
                'title'     => esc_html__('Show Shop Banner', 'fabio'),
                'options'   => array(
                    'show'  => esc_html__('Show Banner', 'fabio'),
                    'hide'  => esc_html__('Hide Banner', 'fabio'),
                ),
                'default'   => 'show'
            ),
    
            array(
                'id'        => 'is_shop_banner_title',
                'type'      => 'button_set',
                'title'     => esc_html__('Show Title', 'fabio'),
                'options'   => array(
                    'show'  => esc_html__('Show', 'fabio'),
                    'hide'  => esc_html__('Hide', 'fabio'),
                ),
                'default'   => 'show',
                'required'  => array('shop_banner_toggle', '=', 'show')
            ),
    
            array(
                'title'         => esc_html__('Shop Banner Title', 'fabio'),
                'type'          => 'text',
                'id'            => 'shop_banner_title',
                'default'       => esc_html__('Shop', 'fabio'),
                'required'      => array('is_error_banner_title', '=', 'show')
            ),
    
            array(
                'id'        => 'shop_banner_breadcrumb',
                'type'      => 'button_set',
                'title'     => esc_html__('Show Breadcrumb', 'fabio'),
                'options'   => array(
                    'show'  => esc_html__('Show', 'fabio'),
                    'hide'  => esc_html__('Hide', 'fabio'),
                ),
                'default'   => 'show',
                'required'  => array('error_banner_toggle', '=', 'show')
            ),
    
            array(
                'id'        => 'shop_banner_img_upload',
                'type'      => 'media',
                'title'     => __('Upload Banner', 'fabio'),
                'default'   => array(
                    'url'   => fabio_IMAGES.'/woocommerce/banner/banner.png',
                ),
                'required'  => array('error_banner_toggle', '=', 'show')
            ),
            array(
                'id'        => 'shop_banner_overly',
                'type'      => 'color_rgba',
                'title'     => 'Banner Overly Color',
                'mode'      => 'background',
                'output'    => array( '.blog_breadcrumbs_area_two.banner-404 .overlay_bg' ),
                'required'  => array('error_banner_toggle', '=', 'show')
            ),
        )
    ));
}