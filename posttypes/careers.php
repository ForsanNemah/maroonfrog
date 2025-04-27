<?php

function cs_add_post_type_career() {
    $labels = array(
        'name' => _x('Careers', 'Post type general name', CSCORE_NAME),
        'singular_name' => _x('Careers', 'Post type singular name', CSCORE_NAME),
        'add_new' => _x('Add New Career', 'Career Item', CSCORE_NAME),
        'add_new_item' => __('Add New Career', CSCORE_NAME),
        'edit_item' => __('Edit Career', CSCORE_NAME),
        'new_item' => __('New Career', CSCORE_NAME),
        'all_items' => __('All careers', CSCORE_NAME),
        'view_item' => __('View', CSCORE_NAME),
        'search_items' => __('Search', CSCORE_NAME),
        'not_found' => __('No careers found.', CSCORE_NAME),
        'not_found_in_trash' => __('No careers found.', CSCORE_NAME),
        'parent_item_colon' => '',
        'menu_name' => 'Careers'
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
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields')
    );
    register_post_type('careers', $args);
    register_taxonomy(
        'careerscategory', array('careers'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Career Categories',
            'add_new_item' =>
            'Add New Category',
            'parent_item' => 'Parent Category'),
        'query_var' => true,
        'rewrite' => array('slug' => 'careerscategory')
        )
    );
}
add_action('init', 'cs_add_post_type_career');