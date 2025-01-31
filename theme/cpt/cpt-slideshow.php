<?php 

// Register Custom Post Type Slideshow
// Post Type Key: Slideshow
function create_slideshow_cpt() {

    $labels = array(
        'name' => _x( 'Slideshows', 'Post Type General Name', 'lp3i-theme' ),
        'singular_name' => _x( 'Slideshow', 'Post Type Singular Name', 'lp3i-theme' ),
        'menu_name' => _x( 'Slideshows', 'Admin Menu text', 'lp3i-theme' ),
        'name_admin_bar' => _x( 'Slideshow', 'Add New on Toolbar', 'lp3i-theme' ),
        'archives' => __( 'Slideshow', 'lp3i-theme' ),
        'attributes' => __( 'Slideshow', 'lp3i-theme' ),
        'parent_item_colon' => __( 'Slideshow', 'lp3i-theme' ),
        'all_items' => __( 'All Slideshows', 'lp3i-theme' ),
        'add_new_item' => __( 'Add New Slideshow', 'lp3i-theme' ),
        'add_new' => __( 'Add New', 'lp3i-theme' ),
        'new_item' => __( 'New Slideshow', 'lp3i-theme' ),
        'edit_item' => __( 'Edit Slideshow', 'lp3i-theme' ),
        'update_item' => __( 'Update Slideshow', 'lp3i-theme' ),
        'view_item' => __( 'View Slideshow', 'lp3i-theme' ),
        'view_items' => __( 'View Slideshows', 'lp3i-theme' ),
        'search_items' => __( 'Search Slideshow', 'lp3i-theme' ),
        'not_found' => __( 'Not found', 'lp3i-theme' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'lp3i-theme' ),
        'featured_image' => __( 'Featured Image', 'lp3i-theme' ),
        'set_featured_image' => __( 'Set featured image', 'lp3i-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'lp3i-theme' ),
        'use_featured_image' => __( 'Use as featured image', 'lp3i-theme' ),
        'insert_into_item' => __( 'Insert into Slideshow', 'lp3i-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Slideshow', 'lp3i-theme' ),
        'items_list' => __( 'Slideshows list', 'lp3i-theme' ),
        'items_list_navigation' => __( 'Slideshows list navigation', 'lp3i-theme' ),
        'filter_items_list' => __( 'Filter Slideshows list', 'lp3i-theme' ),
    );
    
    $args = array(
        'label' => __( 'Slideshow', 'lp3i-theme' ),
        'description' => __( 'Slideshow', 'lp3i-theme' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('slide-category'),
        'hierarchical' => false,
		'show_in_graphql' => true,
		'graphql_single_name' => 'slideshow',
		 'graphql_plural_name' => 'slideshows',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 5,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    
    register_post_type( 'slideshow', $args );

}
add_action( 'init', 'create_slideshow_cpt', 0 );


// Register Taxonomy Slide Category
// Taxonomy Key: slide-category
function create_slide_category_tax() {
	$labels = array(
		'name'              => _x( 'Slide Categories', 'taxonomy general name', 'lp3i-theme' ),
		'singular_name'     => _x( 'Slide Category', 'taxonomy singular name', 'lp3i-theme' ),
		'search_items'      => __( 'Search Slide Categories', 'lp3i-theme' ),
		'all_items'         => __( 'All Slide Categories', 'lp3i-theme' ),
		'parent_item'       => __( 'Parent Slide Category', 'lp3i-theme' ),
		'parent_item_colon' => __( 'Parent Slide Category:', 'lp3i-theme' ),
		'edit_item'         => __( 'Edit Slide Category', 'lp3i-theme' ),
		'update_item'       => __( 'Update Slide Category', 'lp3i-theme' ),
		'add_new_item'      => __( 'Add New Slide Category', 'lp3i-theme' ),
		'new_item_name'     => __( 'New Slide Category Name', 'lp3i-theme' ),
		'menu_name'         => __( 'Slide Category', 'lp3i-theme' ),
	);
    
	$args = array(
		'labels' => $labels,
		'description' => __( 'category for slideshoiw', 'lp3i-theme' ),
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
	register_taxonomy( 'slide-category', array('slideshow'), $args );

}
add_action( 'init', 'create_slide_category_tax' );

// membuat fungsi taksomoni term ada si admin slideshow

// Tambahkan kolom "Terms" pada halaman admin manager slideshow
function add_terms_column($columns) {
    $columns['slide-category'] = 'Category';
    return $columns;
  }
  add_filter('manage_edit-slideshow_columns', 'add_terms_column');
  
  // Tampilkan konten pada kolom "Terms"
  function display_terms_column($column, $post_id) {
    if ($column == 'slide-category') {
      $terms = get_the_terms($post_id, 'slide-category');
      if ($terms) {
        foreach ($terms as $term) {
          echo $term->name . ', ';
        }
      } else {
        echo '-';
      }
    }
  }
  add_action('manage_slideshow_posts_custom_column', 'display_terms_column', 10, 2);