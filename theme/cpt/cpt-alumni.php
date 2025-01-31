<?php

// Register Custom Post Type Alumni
// Post Type Key: Alumni
function create_alumni_cpt() {

    $labels = array(
        'name' => _x( 'Alumnies', 'Post Type General Name', 'lp3i-theme' ),
        'singular_name' => _x( 'Alumni', 'Post Type Singular Name', 'lp3i-theme' ),
        'menu_name' => _x( 'Alumnies', 'Admin Menu text', 'lp3i-theme' ),
        'name_admin_bar' => _x( 'Alumni', 'Add New on Toolbar', 'lp3i-theme' ),
        'archives' => __( 'Alumni', 'lp3i-theme' ),
        'attributes' => __( 'Alumni', 'lp3i-theme' ),
        'parent_item_colon' => __( 'Alumni', 'lp3i-theme' ),
        'all_items' => __( 'All Alumnies', 'lp3i-theme' ),
        'add_new_item' => __( 'Add New Alumni', 'lp3i-theme' ),
        'add_new' => __( 'Add New', 'lp3i-theme' ),
        'new_item' => __( 'New Alumni', 'lp3i-theme' ),
        'edit_item' => __( 'Edit Alumni', 'lp3i-theme' ),
        'update_item' => __( 'Update Alumni', 'lp3i-theme' ),
        'view_item' => __( 'View Alumni', 'lp3i-theme' ),
        'view_items' => __( 'View Alumnies', 'lp3i-theme' ),
        'search_items' => __( 'Search Alumni', 'lp3i-theme' ),
        'not_found' => __( 'Not found', 'lp3i-theme' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'lp3i-theme' ),
        'featured_image' => __( 'Featured Image', 'lp3i-theme' ),
        'set_featured_image' => __( 'Set featured image', 'lp3i-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'lp3i-theme' ),
        'use_featured_image' => __( 'Use as featured image', 'lp3i-theme' ),
        'insert_into_item' => __( 'Insert into Alumni', 'lp3i-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Alumni', 'lp3i-theme' ),
        'items_list' => __( 'Alumnies list', 'lp3i-theme' ),
        'items_list_navigation' => __( 'Alumnies list navigation', 'lp3i-theme' ),
        'filter_items_list' => __( 'Filter Alumnies list', 'lp3i-theme' ),
    );
    
    $args = array(
        'label' => __( 'Alumni', 'lp3i-theme' ),
        'description' => __( 'alumni posts', 'lp3i-theme' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
     //   'show_in_rest' => true,
    );
    
    register_post_type( 'alumni', $args );

}
add_action( 'init', 'create_alumni_cpt', 0 );

