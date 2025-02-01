<?php 

// Register Custom Post Type Program Study
// Post Type Key: Program Study
function create_program_study_cpt() {

    $labels = array(
        'name' => _x( 'Program Studies', 'Post Type General Name', 'lp3i-theme' ),
        'singular_name' => _x( 'Program Study', 'Post Type Singular Name', 'lp3i-theme' ),
        'menu_name' => _x( 'Program Studies', 'Admin Menu text', 'lp3i-theme' ),
        'name_admin_bar' => _x( 'Program Study', 'Add New on Toolbar', 'lp3i-theme' ),
        'archives' => __( 'Program Study', 'lp3i-theme' ),
        'attributes' => __( 'Program Study', 'lp3i-theme' ),
        'parent_item_colon' => __( 'Program Study', 'lp3i-theme' ),
        'all_items' => __( 'All Program Studies', 'lp3i-theme' ),
        'add_new_item' => __( 'Add New Program Study', 'lp3i-theme' ),
        'add_new' => __( 'Add New', 'lp3i-theme' ),
        'new_item' => __( 'New Program Study', 'lp3i-theme' ),
        'edit_item' => __( 'Edit Program Study', 'lp3i-theme' ),
        'update_item' => __( 'Update Program Study', 'lp3i-theme' ),
        'view_item' => __( 'View Program Study', 'lp3i-theme' ),
        'view_items' => __( 'View Program Studies', 'lp3i-theme' ),
        'search_items' => __( 'Search Program Study', 'lp3i-theme' ),
        'not_found' => __( 'Not found', 'lp3i-theme' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'lp3i-theme' ),
        'featured_image' => __( 'Featured Image', 'lp3i-theme' ),
        'set_featured_image' => __( 'Set featured image', 'lp3i-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'lp3i-theme' ),
        'use_featured_image' => __( 'Use as featured image', 'lp3i-theme' ),
        'insert_into_item' => __( 'Insert into Program Study', 'lp3i-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Program Study', 'lp3i-theme' ),
        'items_list' => __( 'Program Studies list', 'lp3i-theme' ),
        'items_list_navigation' => __( 'Program Studies list navigation', 'lp3i-theme' ),
        'filter_items_list' => __( 'Filter Program Studies list', 'lp3i-theme' ),
    );
    
    $args = array(
        'label' => __( 'Program Study', 'lp3i-theme' ),
        'description' => __( 'program study', 'lp3i-theme' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-book',
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
    
    register_post_type( 'program-study', $args );

}
add_action( 'init', 'create_program_study_cpt', 0 );


// Register Taxonomy Tribe
// Taxonomy Key: tribe
function create_tribe_tax() {
	$labels = array(
		'name'              => _x( 'Tribes', 'taxonomy general name', 'lp3i-theme' ),
		'singular_name'     => _x( 'Tribe', 'taxonomy singular name', 'lp3i-theme' ),
		'search_items'      => __( 'Search Tribes', 'lp3i-theme' ),
		'all_items'         => __( 'All Tribes', 'lp3i-theme' ),
		'parent_item'       => __( 'Parent Tribe', 'lp3i-theme' ),
		'parent_item_colon' => __( 'Parent Tribe:', 'lp3i-theme' ),
		'edit_item'         => __( 'Edit Tribe', 'lp3i-theme' ),
		'update_item'       => __( 'Update Tribe', 'lp3i-theme' ),
		'add_new_item'      => __( 'Add New Tribe', 'lp3i-theme' ),
		'new_item_name'     => __( 'New Tribe Name', 'lp3i-theme' ),
		'menu_name'         => __( 'Tribe', 'lp3i-theme' ),
	);
    
	$args = array(
		'labels' => $labels,
		'description' => __( 'category for program studi', 'lp3i-theme' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'tribe', array('program-study'), $args );

}
add_action( 'init', 'create_tribe_tax' );

