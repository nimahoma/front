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

    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );

    wp_enqueue_style( 'owl-default-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );

    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css' );

    wp_enqueue_style( 'saei-css', get_template_directory_uri() . '/assets/css/styles.css' );
    
    wp_enqueue_style( 'saeiTheme-style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true );

    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true );

    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true );

    wp_enqueue_script( 'saei-scripts-js', get_template_directory_uri() . '/assets/js/saei-scripts.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'saeiTheme_enqueue_styles' );

/* ADD THEME SUPPORT */
function saeiTheme_setup() {
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 150, 150, true ); 

    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'saeiTheme_setup' );

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
    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'saeiTheme' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown in the first column of the footer.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'saeiTheme' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown in the second column of the footer.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 3', 'saeiTheme' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'saeiTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

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
        'before_title'  => '<div class="sa-paragraph-box no-padding"><div class"title"><h4>',
        'after_title'   => '</h4></div></div>',
    ) );
}
add_action( 'widgets_init', 'saeiTheme_register_sidebar_widget' );

/* REGISTER RELATED JOBS WIDGET */
function saeiTheme_register_widgets() {
    register_widget( 'Saei_Related_Posts_Widget' );
}
add_action( 'widgets_init', 'saeiTheme_register_widgets' );