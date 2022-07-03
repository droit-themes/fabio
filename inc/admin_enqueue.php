<?php 
/**
 * fabio admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'fabio_admin_enqueues');

function fabio_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if ( $screen->base == 'toplevel_page_fabio_options' ) {
            wp_enqueue_style( 'fabio-redux-style', fabio_CSS.'/redux-style.css' );
        }
    }
    
}
