<?php

// Register Custom Post Type mitra
// Post Type Key: mitra
function create_mitra_cpt() {

    $labels = array(
        'name' => _x( 'mitra', 'Post Type General Name', 'lp3i-theme' ),
        'singular_name' => _x( 'mitra', 'Post Type Singular Name', 'lp3i-theme' ),
        'menu_name' => _x( 'mitra', 'Admin Menu text', 'lp3i-theme' ),
        'name_admin_bar' => _x( 'mitra', 'Add New on Toolbar', 'lp3i-theme' ),
        'archives' => __( 'mitra', 'lp3i-theme' ),
        'attributes' => __( 'mitra', 'lp3i-theme' ),
        'parent_item_colon' => __( 'mitra', 'lp3i-theme' ),
        'all_items' => __( 'All mitra', 'lp3i-theme' ),
        'add_new_item' => __( 'Add New mitra', 'lp3i-theme' ),
        'add_new' => __( 'Add New', 'lp3i-theme' ),
        'new_item' => __( 'New mitra', 'lp3i-theme' ),
        'edit_item' => __( 'Edit mitra', 'lp3i-theme' ),
        'update_item' => __( 'Update mitra', 'lp3i-theme' ),
        'view_item' => __( 'View mitra', 'lp3i-theme' ),
        'view_items' => __( 'View mitra', 'lp3i-theme' ),
        'search_items' => __( 'Search mitra', 'lp3i-theme' ),
        'not_found' => __( 'Not found', 'lp3i-theme' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'lp3i-theme' ),
        'featured_image' => __( 'Featured Image', 'lp3i-theme' ),
        'set_featured_image' => __( 'Set featured image', 'lp3i-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'lp3i-theme' ),
        'use_featured_image' => __( 'Use as featured image', 'lp3i-theme' ),
        'insert_into_item' => __( 'Insert into mitra', 'lp3i-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this mitra', 'lp3i-theme' ),
        'items_list' => __( 'mitra list', 'lp3i-theme' ),
        'items_list_navigation' => __( 'mitra list navigation', 'lp3i-theme' ),
        'filter_items_list' => __( 'Filter mitra list', 'lp3i-theme' ),
    );
    
    $args = array(
        'label' => __( 'mitra', 'lp3i-theme' ),
        'description' => __( 'mitra posts', 'lp3i-theme' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-flag',
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
        'show_in_rest' => true,
    );
    
    register_post_type( 'mitra', $args );

}
add_action( 'init', 'create_mitra_cpt', 0 );
