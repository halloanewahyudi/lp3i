<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package lp3i
 */

get_header();
?>

	<section id="primary" class="template-clean pb-20">
		<main id="main" class="max-w-screen-md mx-auto">

		<?php if ( have_posts() ) : ?>

			<header class="page-header pt-16 text-center">
				<?php
				printf(
					/* translators: 1: search result title. 2: search term. */
					'<h1 class="page-title">%1$s <span>%2$s</span></h1>',
					esc_html__( 'Search results for:', 'lp3i' ),
					get_search_query()
				);
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
			 // Run the loop for the search to output the results.
				get_template_part( 'template-parts/content/content', 'search' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			lp3i_the_posts_navigation();

		else :

			// If no content is found, get the `content-none` template part.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
