<?php
Redux::set_section('fabio_opt', array(
	'title'     => esc_html__( 'Blog', 'fabio' ),
	'id'        => 'blog_page_opt',
	'icon'      => 'dashicons dashicons-admin-post',
));


/**
 * Blog Archive Settings
 */
Redux::set_section('fabio_opt', array(
    'title'         => esc_html__( 'Blog Archive', 'fabio' ),
    'id'            => 'blog_archive_settings_opt',
    'icon'          => '',
    'subsection'    => true,
    'fields'        => array(

        array(
            'id'       => 'blog_layout',
            'type'     => 'image_select',
            'title'    => __('Blog Layout', 'fabio'),
            'subtitle' => __('Select your blog Layout', 'fabio'),
            'options'  => array(
                'full'      => array(
                    'alt'   => '1 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
                'left'      => array(
                    'alt'   => '2 Column Left',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right'      => array(
                    'alt'    => '2 Column Right',
                    'img'    => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'right'
        ),

        array(
            'id' => 'read_more_text_button',
            'title'    => __('Read More Button Text', 'fabio'),
            'type' => 'text',
            'default' => 'Read More'
        ),
    )
));


/**
 * Blog Single Post
 */
Redux::set_section('fabio_opt', array(
	'title'         => esc_html__( 'Single Post', 'fabio' ),
	'id'            => 'blog_single_post_settings_opt',
	'icon'          => '',
    'subsection'    => true,
	'fields'        => array(

        array(
            'id'        => 'display_blog_share',
            'type'      => 'button_set',
            'title'     => esc_html__('Display Social Share?', 'fabio'),
            'options'   => array(
                'yes'   => 'Yes',
                'no'    => 'No',
            ),
            'default'   => 'no'
        ),
	)
));

