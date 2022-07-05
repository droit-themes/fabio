<?php 


class fabio_onepage_nav_walker extends Walker_Nav_Menu {

private $current_Item;

function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    if( $args->has_children ){
        $output .= "\n$indent<ul role=\"menu\" class=\"inner-submenu \">\n";
    }
}

function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $this->current_Item = $item;
    if (strcasecmp($item->attr_title, 'divider') == 0 && $depth === 1) {
        $output .= $indent . '<li role="presentation" class="divider"><a href="#" class="nav-link">' . esc_attr( $item->title ) . '</a>';
    } else if (strcasecmp($item->attr_title, 'dropdown-header') == 0 && $depth === 1) {
        $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
    } else if (strcasecmp($item->attr_title, 'disabled') == 0) {
        $output .= $indent . '<li role="presentation" class="disabled"><a href="#" class="nav-link">' . esc_attr( $item->title ) . '</a>';
    } else {

       $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $output .= $indent . '<li' . $value .' class="menu-item" >';



        $atts = array();
        $link_url = '#'.strtolower(str_replace(' ', '', $item->title));
        $data_ancare = strtolower(str_replace(' ', '', $item->title));
        $atts['title']  = ! empty( $item->title )   ? $item->title  : '';
        $atts['target'] = ! empty( $item->target )  ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn )     ? $item->xfn    : '';

        if(is_front_page()){
            $atts['href']   = ! empty( $item->url )     ? $link_url    : '';
        }else{
            $atts['href']   = ! empty( $item->url )     ? home_url().$link_url    : '';
        }
        $atts['data-menuanchor']   = ! empty( $data_ancare )     ? $data_ancare    : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;


        $item_output .= '<a'. $attributes .' class="nav-link" >';

        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

        $item_output .=  '</a>';


        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
    if ( !$element ) {
        return;
    }
    $id_field = $this->db_fields['id'];
    if ( is_object( $args[0] ) ) {
        $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
    }
    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
}


/**
 * Menu Fallback
 * =============
 * If this function is assigned to the wp_nav_menu's fallback_cb variable
 * and a manu has not been assigned to the theme location in the WordPress
 * menu manager the function with display nothing to a non-logged in user,
 * and will add a link to the WordPress menu manager if logged in as an admin.
 *
 * @param array $args passed from the wp_nav_menu function.
 *
 */
 public static function fallback( $args ) {
    if ( current_user_can( 'manage_options' ) ) {

        extract( $args );

        $fb_output = null;

        if ( $container ) {
            $fb_output = '<' . $container;

            if ( $container_id ) {
                $fb_output .= ' id="' . $container_id . '"';
            }

            if ( $container_class ) {
                $fb_output .= ' class="' . $container_class . '"';
            }

            $fb_output .= '>';
        }

        $fb_output .= '<ul';

        if ( $menu_id ) {
            $fb_output .= ' id="' . $menu_id . '"';
        }

        if ( $menu_class ) {
            $fb_output .= ' class="' . $menu_class . '"';
        }

        $fb_output	 .= '>';
        $fb_output	 .= '<li><a class="" href="' . admin_url( 'nav-menus.php' ) . '">'.esc_html__('Add a Menu','fabio').'</a></li>';
        $fb_output	 .= '</ul>';

        if ( $container ) {
            $fb_output .= '</' . $container . '>';
        }

        echo fabio_return( $fb_output );
    }
}
}
