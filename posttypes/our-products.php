<?php
error_reporting(E_ALL ^ E_WARNING);

function cs_add_post_type_our_product() {
    $labels = array(
        'name' => _x('Products', 'Post type general name', CSCORE_NAME),
        'singular_name' => _x('Pro Products', 'Post type singular name', CSCORE_NAME),
        'add_new' => _x('Add New Product', 'Product Item', CSCORE_NAME),
        'add_new_item' => __('Add New Product', CSCORE_NAME),
        'edit_item' => __('Edit Product', CSCORE_NAME),
        'new_item' => __('New Product', CSCORE_NAME),
        'all_items' => __('All products', CSCORE_NAME),
        'view_item' => __('View', CSCORE_NAME),
        'search_items' => __('Search', CSCORE_NAME),
        'not_found' => __('No products found.', CSCORE_NAME),
        'not_found_in_trash' => __('No products found.', CSCORE_NAME),
        'parent_item_colon' => '',
        'menu_name' => 'Products'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-networking',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt', 'comments')
    );
    register_post_type('ourproducts', $args);
    register_taxonomy(
        'productscategory', array('ourproducts'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Product Categories',
            'add_new_item' =>
            'Add New Category',
            'parent_item' => 'Parent Category'),
        'query_var' => true,
        'rewrite' => array('slug' => 'productscategory')
        )
    );
}
add_action('init', 'cs_add_post_type_our_product');