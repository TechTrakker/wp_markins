<?php
// Linkage of files
function my_theme_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue styles conditionally for About and Contact pages
    if (is_page_template('about.php')) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
    }
    if (is_page_template('contact.php')) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/contact.css');
    }

    // Enqueue JavaScript files
    wp_enqueue_script('carousel-script', get_template_directory_uri() . '/javascript/carousel.js', array(), null, true);
    wp_enqueue_script('feedback-form', get_template_directory_uri() . '/javascript/contact.js', array('jquery'), null, true);
    wp_enqueue_script('join-forms', get_template_directory_uri() . '/javascript/about.js', array('jquery'), null, true);

    // Localize scripts for AJAX
    wp_localize_script('feedback-form', 'my_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// Menu registration
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => 'Top Menu'
        )
    );
}
add_action('init', 'register_my_menus');

// Theme setup for page templates and other features
function my_theme_setup() {
    add_theme_support('page-templates');
    add_theme_support('post-thumbnails'); // Example for enabling featured images
    add_theme_support('title-tag'); // Let WordPress manage the document title
}
add_action('after_setup_theme', 'my_theme_setup');
?>
