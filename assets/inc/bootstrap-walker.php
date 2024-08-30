<?php

class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {

function start_lvl( &$output, $depth = 0, $args = null ) {
$indent = str_repeat("\t", $depth);
$submenu = ($depth > 0) ? ' sub-menu' : '';
$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $indent = ( $depth ) ? str_repeat("\t", $depth) : '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'nav-item';
    if ($args->walker->has_children) {
    $classes[] = 'dropdown';
    }
    $classes[] = 'menu-item-' . $item->ID;
    if (in_array('current-menu-item', $classes)) {
    $classes[] = 'active';
    }
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';
    $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
    $output .= $indent . '<li' . $id . $class_names .'>';
        $atts = array();
        $atts['title'] = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel'] = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href'] = ! empty( $item->url ) ? $item->url : '';
        $atts['class'] = 'nav-link';
        if ($depth > 0) {
        $atts['class'] = 'dropdown-item';
        }
        if ($item->current) {
        $atts['class'] .= ' active';
        }
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
        if ( ! empty( $value ) ) {
        $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        $attributes .= ' ' . $attr . '="' . $value . '"';
        }
        }
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) .
            $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
            }

            function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
            if ( !$element )
            return;
            $id_field = $this->db_fields['id'];
            if ( is_object( $args[0] ) )
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
            parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
            }
            }