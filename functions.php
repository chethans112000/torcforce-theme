<?php
function tacforce_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tacforce'),
    ));
}

add_action('after_setup_theme', 'tacforce_setup');

function tacforce_scripts() {
    // Enqueue styles
    wp_enqueue_style('tacforce-style', get_template_directory_uri() . '/style.css');

    // Enqueue scripts
    wp_enqueue_script('tacforce-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'tacforce_scripts');
?>