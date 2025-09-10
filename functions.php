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
    wp_enqueue_script('tacforce-mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), null, true);
    wp_enqueue_script('tacforce-gallery-filter', get_template_directory_uri() . '/assets/js/gallery-filter.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'tacforce_scripts');

// Register 'products' custom post type and 'product_category' taxonomy
function torcforce_register_products() {
    $labels = array(
        'name'               => _x('Products', 'post type general name', 'torcforce-theme'),
        'singular_name'      => _x('Product', 'post type singular name', 'torcforce-theme'),
        'menu_name'          => _x('Products', 'admin menu', 'torcforce-theme'),
        'name_admin_bar'     => _x('Product', 'add new on admin bar', 'torcforce-theme'),
        'add_new'            => _x('Add New', 'product', 'torcforce-theme'),
        'add_new_item'       => __('Add New Product', 'torcforce-theme'),
        'new_item'           => __('New Product', 'torcforce-theme'),
        'edit_item'          => __('Edit Product', 'torcforce-theme'),
        'view_item'          => __('View Product', 'torcforce-theme'),
        'all_items'          => __('All Products', 'torcforce-theme'),
        'search_items'       => __('Search Products', 'torcforce-theme'),
        'parent_item_colon'  => __('Parent Products:', 'torcforce-theme'),
        'not_found'          => __('No products found.', 'torcforce-theme'),
        'not_found_in_trash' => __('No products found in Trash.', 'torcforce-theme')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'products'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-hammer',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('products', $args);

    // Register product category taxonomy
    $tax_labels = array(
        'name'              => _x('Product Categories', 'taxonomy general name', 'torcforce-theme'),
        'singular_name'     => _x('Product Category', 'taxonomy singular name', 'torcforce-theme'),
        'search_items'      => __('Search Product Categories', 'torcforce-theme'),
        'all_items'         => __('All Product Categories', 'torcforce-theme'),
        'parent_item'       => __('Parent Product Category', 'torcforce-theme'),
        'parent_item_colon' => __('Parent Product Category:', 'torcforce-theme'),
        'edit_item'         => __('Edit Product Category', 'torcforce-theme'),
        'update_item'       => __('Update Product Category', 'torcforce-theme'),
        'add_new_item'      => __('Add New Product Category', 'torcforce-theme'),
        'new_item_name'     => __('New Product Category Name', 'torcforce-theme'),
        'menu_name'         => __('Product Categories', 'torcforce-theme'),
    );

    register_taxonomy('product_category', array('products'), array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'product-category'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'torcforce_register_products');



?>


