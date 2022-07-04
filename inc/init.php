<?php 


require fabio_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require fabio_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require fabio_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * fabio helper 
 */
require fabio_THEMEROOT_DIR . '/inc/helper.php';

/**
 * fabio comment area
*/
require fabio_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * fabio nav walker
*/
require fabio_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require fabio_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * fabio Enqueue 
 */

require fabio_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * fabio Admin Enqueue 
 */

require fabio_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * fabio breadcrumbs
 */

require fabio_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * fabio Tgm
 */
require fabio_THEMEROOT_DIR . '/inc/plugin_activation.php';


/**
 * fabio Demo import
 */
require fabio_THEMEROOT_DIR . '/inc/one_click_demo_config.php';


/**
 * fabio Demo import
 */
require fabio_THEMEROOT_DIR . '/inc/one-page-walker.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require fabio_THEMEROOT_DIR . '/inc/jetpack.php';
}

/**
 * WooCommerce functilly 
 */
if(class_exists('WooCommerce')) {
	require fabio_THEMEROOT_DIR . '/inc/woo/woocommerce.php';
}