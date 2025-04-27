<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// Add custom post type header
function cs_add_post_type_partner() {
    $labels = array(
        'name' => 'Partners',
        'singular_name' => 'Partners',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Partner',
        'edit_item' => 'Edit Partner',
        'new_item' => 'New Partner',
        'all_items' => 'Partners',
        'view_item' => 'View Partner',
        'search_items' => 'Search Partners',
        'not_found' => 'No headers found',
        'not_found_in_trash' => 'No partner found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Partners'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'partner'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 9,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => array('title', 'author', 'thumbnail', 'custom-fields', 'excerpt', 'comments')
    );
    register_post_type('partner', $args);
}
add_action('init', 'cs_add_post_type_partner');