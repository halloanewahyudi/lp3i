<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

get_header();
?>

<section id="primary">
	<main id="main" class="template-clean">
		<div class="container">

			<?php if (have_posts()) : ?>

				<header class="page-header">
					<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
				</header><!-- .page-header -->

				<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 lg:gap-10">
					<?php
					// Start the Loop.
					while (have_posts()) :
						the_post();
						get_template_part('template-parts/content/content', 'excerpt');

					// End the loop.
					endwhile;
					?>
				</div>
			<?php

				// Previous/next page navigation.
				lp3i_the_posts_navigation();

			else :

				// If no content, include the "No posts found" template.
				get_template_part('template-parts/content/content', 'none');

			endif;
			?>
		</div>
	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
