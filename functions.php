<?php
// Add theme support
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

// Register custom image sizes
add_image_size('post-thumbnail', 400, 300, false);
add_image_size('post-thumbnail', 600, 400, false);
add_image_size('post-thumbnail', 300, 200, false);


// Register menus
register_nav_menus(array(
    'primary' => __('Primary Menu', 'basic-theme'),
));

// Enqueue styles and scripts
/*
function basic_theme_scripts() {
    wp_enqueue_style('basic-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'basic_theme_scripts');

function enqueue_bootstrap_css() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_css' );

function enqueue_bootstrap_js() {
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_js' );
*/

// register widgets
// Register sidebar
function basic_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'basic-theme'),
        'id'            => 'blog-sidebar',
        'description'   => __('Widgets in this area will be shown on all blog pages.', 'basic-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'basic_theme_widgets_init');


// Enqueue styles and scripts
function basic_theme_scripts() {
    wp_enqueue_style('basic-theme-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'basic_theme_scripts');

?>