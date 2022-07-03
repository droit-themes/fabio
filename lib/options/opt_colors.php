<?php
/**
 * Theme Scheme Colors Options
 */
Redux::set_section('fabio_opt', array(
    'title'     => esc_html__( 'Color Scheme', 'fabio' ),
    'id'        => 'color_scheme_opt',
    'icon'      => 'dashicons dashicons-admin-appearance',
    'fields'    => array(
        array(
            'id'          => 'theme_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Theme Color', 'fabio' ),
            'output_variables' => true,
            'default' => '#54a2fa'
        ),
        array(
            'id'          => 'theme_body_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Body Color', 'fabio' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_link_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Link Color', 'fabio' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_hover_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Link Hover Color', 'fabio' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_title_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Title Color', 'fabio' ),
            'output_variables' => true,
        ),

    )
));