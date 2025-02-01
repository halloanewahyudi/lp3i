<?php

// Register Custom Post Type campus
// Post Type Key: campus
function create_campus_cpt() {

    $labels = array(
        'name' => _x( 'Campus', 'Post Type General Name', 'lp3i-theme' ),
        'singular_name' => _x( 'campus', 'Post Type Singular Name', 'lp3i-theme' ),
        'menu_name' => _x( 'Campus', 'Admin Menu text', 'lp3i-theme' ),
        'name_admin_bar' => _x( 'campus', 'Add New on Toolbar', 'lp3i-theme' ),
        'archives' => __( 'campus', 'lp3i-theme' ),
        'attributes' => __( 'campus', 'lp3i-theme' ),
        'parent_item_colon' => __( 'campus', 'lp3i-theme' ),
        'all_items' => __( 'All Campus', 'lp3i-theme' ),
        'add_new_item' => __( 'Add New campus', 'lp3i-theme' ),
        'add_new' => __( 'Add New', 'lp3i-theme' ),
        'new_item' => __( 'New campus', 'lp3i-theme' ),
        'edit_item' => __( 'Edit campus', 'lp3i-theme' ),
        'update_item' => __( 'Update campus', 'lp3i-theme' ),
        'view_item' => __( 'View campus', 'lp3i-theme' ),
        'view_items' => __( 'View Campus', 'lp3i-theme' ),
        'search_items' => __( 'Search campus', 'lp3i-theme' ),
        'not_found' => __( 'Not found', 'lp3i-theme' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'lp3i-theme' ),
        'featured_image' => __( 'Featured Image', 'lp3i-theme' ),
        'set_featured_image' => __( 'Set featured image', 'lp3i-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'lp3i-theme' ),
        'use_featured_image' => __( 'Use as featured image', 'lp3i-theme' ),
        'insert_into_item' => __( 'Insert into campus', 'lp3i-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this campus', 'lp3i-theme' ),
        'items_list' => __( 'Campus list', 'lp3i-theme' ),
        'items_list_navigation' => __( 'Campus list navigation', 'lp3i-theme' ),
        'filter_items_list' => __( 'Filter Campus list', 'lp3i-theme' ),
    );
    
    $args = array(
        'label' => __( 'Campus', 'lp3i-theme' ),
        'description' => __( 'campus posts', 'lp3i-theme' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail'),
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
    
    register_post_type( 'campus', $args );

}
add_action( 'init', 'create_campus_cpt', 0 );

// campus category

// Register Taxonomy Campus Category
// Taxonomy Key: campus_category
function create_campus_category_tax() {
	$labels = array(
		'name'              => _x( 'Campus Categories', 'taxonomy general name', 'lp3i' ),
		'singular_name'     => _x( 'Campus Category', 'taxonomy singular name', 'lp3i' ),
		'search_items'      => __( 'Search Campus Categories', 'lp3i' ),
		'all_items'         => __( 'All Campus Categories', 'lp3i' ),
		'parent_item'       => __( 'Parent Campus Category', 'lp3i' ),
		'parent_item_colon' => __( 'Parent Campus Category:', 'lp3i' ),
		'edit_item'         => __( 'Edit Campus Category', 'lp3i' ),
		'update_item'       => __( 'Update Campus Category', 'lp3i' ),
		'add_new_item'      => __( 'Add New Campus Category', 'lp3i' ),
		'new_item_name'     => __( 'New Campus Category Name', 'lp3i' ),
		'menu_name'         => __( 'Campus Category', 'lp3i' ),
	);
    
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'lp3i' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'campus_category', array('campus'), $args );

}
add_action( 'init', 'create_campus_category_tax' );

