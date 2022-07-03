<?php
// Header Section
Redux::set_section( 'fabio_opt', array(
    'title'            => esc_html__( 'Shop Settings', 'fabio' ),
    'id'               => 'Woo_settings_opt',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-admin-page',
));


// Shop Page Layout 
Redux::set_section( 'fabio_opt', array(
    'title'            => esc_html__( 'Layout', 'fabio' ),
    'id'               => 'woo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
      
        array(
            'id'       => 'shop_layout',
            'type'     => 'image_select',
            'title'    => __('Shop Layout', 'fabio'), 
            'subtitle' => __('Select your shop Layout', 'fabio'),
            'options'  => array(
                'full'      => array(
                    'alt'   => 'Full Width',
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
                'left'      => array(
                    'alt'   => 'Left Sidebar',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right'      => array(
                    'alt'   => 'Right Sidebar',
                    'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'full'
        ),
    )
) );

// Shop Page Layout 
Redux::set_section( 'fabio_opt', array(
    'title'            => esc_html__( 'Single Product Layout', 'fabio' ),
    'id'               => 'woo_single_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
      
        array(
            'id'       => 'woo_single_layout',
            'type'     => 'image_select',
            'title'    => __('Single Layout', 'fabio'), 
            'subtitle' => __('Select your Single Prodcut Page Layout', 'fabio'),
            'options'  => array(
                'full'      => array(
                    'alt'   => 'Full Width',
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
                'left'      => array(
                    'alt'   => 'Left Sidebar',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right'      => array(
                    'alt'   => 'Right Sidebar',
                    'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'full'
        ),

        array(
            'title'         => esc_html__('Shop Single Banner Title', 'fabio'),
            'type'          => 'text',
            'id'            => 'shop_single_banner_title',
            'default'       => esc_html__('Product Details', 'fabio')
        ),
    )
) );