<?php
/**
 * lp3i functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lp3i
 */

if ( ! defined( 'LP3I_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'LP3I_VERSION', '0.1.0' );
}

if ( ! defined( 'LP3I_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `lp3i_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'LP3I_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'lp3i_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lp3i_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lp3i, use a find and replace
		 * to change 'lp3i' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lp3i', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/* logo */
		add_theme_support( 'custom-logo' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'lp3i' ),
				'menu-2' => __( 'Footer Menu', 'lp3i' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'lp3i_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lp3i_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'lp3i' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'lp3i' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lp3i_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lp3i_scripts() {
	wp_enqueue_style( 'lp3i-style', get_stylesheet_uri(), array(), LP3I_VERSION );
	wp_enqueue_style( 'lp3i-font', get_template_directory_uri() . '/fonts/font.css', array(), LP3I_VERSION ); 

	wp_enqueue_style( 'lp3i-style-tambahan', get_template_directory_uri() . '/css/tambahan.css', array(), LP3I_VERSION );

	wp_enqueue_style( 'lp3i-icons', get_template_directory_uri() . '/bootstrap-icons/font/bootstrap-icons.min.css', array(), LP3I_VERSION );

	wp_enqueue_style( 'lp3i-splide', get_template_directory_uri() . '/css/splide.min.css', array(), LP3I_VERSION );

	wp_enqueue_script( 'lp3i-script', get_template_directory_uri() . '/js/script.min.js', array(), LP3I_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lp3i_scripts' );

/**
 * Enqueue the block editor script.
 */
function lp3i_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'lp3i-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			LP3I_VERSION,
			true
		);
		wp_add_inline_script( 'lp3i-editor', "tailwindTypographyClasses = '" . esc_attr( LP3I_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'lp3i_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function lp3i_tinymce_add_class( $settings ) {
	$settings['body_class'] = LP3I_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'lp3i_tinymce_add_class' );

//disable gutenberg
add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );

// disable content editor on page 
/* function disable_editor_on_page() {
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'disable_editor_on_page'); */




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Component functions.
 */
require get_template_directory() . '/inc/template-components.php';




/**  create location list
 * =========================================*/

function create_location_list($term) {
	$args = array(
		'post_type' => 'campus',
		'posts_per_page' => -1,
		'post_status' => 'publish',
		 'tax_query' => array(
			array(
				'taxonomy' => 'campus_category',
				'field' => 'slug',
				'terms' => $term,
			)
		 )
	);
	return $args;

}


/** upload SVG
 * =========================================*/
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

/** bradcrumb
 * =========================================*/
function custom_breadcrumb() {
	
    if (is_front_page()) return; // Jangan tampilkan breadcrumb di halaman depan

    echo '<nav class="breadcrumb"><ul class="flex items-center text-sm">';
   
    // Home Link
    echo '<li><a href="' . home_url() . '">Home</a></li>';

	if (is_home() && get_option('page_for_posts')) {
        echo '<li> <span>Blog</span></li>';
    }


    if (is_category() || is_single()) {
        $category = get_the_category();
        if ($category) {
            $first_category = $category[0];
            echo '<li><a href="' . get_category_link($first_category->term_id) . '">' . $first_category->name . '</a></li>';
        }
        if (is_single()) {
            echo '<li>' . get_the_title() . '</li>';
        }
    } elseif (is_page()) {
        global $post;
        if ($post->post_parent) {
            $parents = array_reverse(get_post_ancestors($post->ID));
            foreach ($parents as $parent) {
                echo '<li><a href="' . get_permalink($parent) . '">' . get_the_title($parent) . '</a></li>';
            }
        }
        echo '<li>' . get_the_title() . '</li>';
    } elseif (is_archive()) {
        echo '<li>' . post_type_archive_title('', false) . '</li>';
    } elseif (is_search()) {
        echo '<li>Search results for: "' . get_search_query() . '"</li>';
    } elseif (is_404()) {
        echo '<li>404 - Not Found</li>';
    }

    echo '</ul></nav>';
}
