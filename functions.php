<?php
/**
 * Saei Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Saei Theme
 * @since Saei Theme 1.0
 */

 /* INCLUDE BOOTSTRAP WALKER */
require_once get_template_directory() . '/inc/bootstrap-walker.php';

/* INCLUDE CUSTOM RELATED POSTS */
require_once get_template_directory() . '/inc/related-posts-widget.php';

/* INCLUDE CUSTOM BREADCRUMBS */
require_once get_template_directory() . '/inc/breadcrumbs.php';

/* INCLUDE CUSTOM JOBS MODAL */
require_once get_template_directory() . '/inc/accordion-functions.php';

 /* INCLUDE STYLE SHEET */
function saeiTheme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/all.css' );

    wp_enqueue_style( 'saei-css', get_template_directory_uri() . '/assets/css/styles.css' );
    
    // Enqueue your theme's main stylesheet
    wp_enqueue_style( 'saeiTheme-style', get_stylesheet_uri() );
    
    // Enqueue Bootstrap JS (including Popper.js and Bootstrap bundle)
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'saeiTheme_enqueue_styles' );

 /* REGISTER HEADER */
function saeiTheme_custom_menu() {
    register_nav_menus(
        array(
            'saeiTheme-custom-menu' => __( 'Main Menu' ),
            'saeiTheme-custom-menu_2' => __( 'Secondary Menu' )
        )
    );
}
add_action( 'init', 'saeiTheme_custom_menu' );

/* REGISTER FOOTER WIDGETS */
function saeiTheme_register_footer_widgets() {
    // Register the first footer widget area
    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'saeiTheme' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown in the first column of the footer.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    // Register the second footer widget area
    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'saeiTheme' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown in the second column of the footer.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    // Register the third footer widget area
    register_sidebar( array(
        'name'          => __( 'Footer Column 3', 'saeiTheme' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    // Register the fourth footer widget area
    register_sidebar( array(
        'name'          => __( 'Footer Column 4', 'saeiTheme' ),
        'id'            => 'footer-4',
        'description'   => __( 'Widgets in this area will be shown in the fourth column of the footer.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'saeiTheme_register_footer_widgets' );

/* REGISTER SIDEBAR WIDGETS */
function saeiTheme_register_sidebar_widget() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'saeiTheme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown in the sidebar.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'saeiTheme_register_sidebar_widget' );