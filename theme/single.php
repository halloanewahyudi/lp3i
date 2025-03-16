<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lp3i
 */

get_header();
?>
<div class="template-clean">
	<section id="primary" class="py-20 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10 container">
		<div class="lg:col-span-3 ">
			<div class="sticky-on-scroll hidden lg:block">
				<div class=" rounded-xl bg-white shadow-2xl p-4 shrink-0 text-sm flex flex-col gap-4 w-[240px]">
					<div>
						<h4 class="text-lg font-medium">Kategori:</h4>
						<div class=" flex flex-wrap gap-1 max-w-[240px] text-sm ">
							<?php // echo get_the_category_list(', ');
							// exclude catrgory uncategorized
							$categories = get_the_category();
							foreach ($categories as $category) {
								if ($category->cat_name !== 'Uncategorized') {
									echo '<a href="' . get_category_link($category) . '">' . $category->cat_name . '</a>';
								}
							}

							?>
						</div>
					</div>
					<div>
						<h4 class="text-lg font-medium">Tags:</h4>
						<div class=" flex flex-wrap gap-1 max-w-[240px] text-sm ">
							<?php echo get_the_tag_list('', __(' ', 'lp3i')) ?>
						</div>
					</div>

					<?php get_template_part('template-parts/content/content', 'share');  ?>
				</div>

			</div>

		</div>
		<main id="main" class="lg:col-span-6">

			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content/content', 'single');

				if (is_singular('post')) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true">' . __('Next Post', 'lp3i') . '</span> ' .
								'<span class="sr-only">' . __('Next post:', 'lp3i') . '</span> <br/>' .
								'<span>%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __('Previous Post', 'lp3i') . '</span> ' .
								'<span class="sr-only">' . __('Previous post:', 'lp3i') . '</span> <br/>' .
								'<span>%title</span>',
						)
					);
				}

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if (comments_open() || get_comments_number()) {
					comments_template();
				}

			// End the loop.
			endwhile;
			?>

		</main><!-- #main -->
		<div class="sidebar lg:col-span-3">
			<?php get_template_part('template-parts/content/content', 'sidebar');  ?>
		</div>
	</section><!-- #primary -->
     <div id="end-sticky"></div>
	<?php get_template_part('template-parts/content/content', 'cta');  ?>
</div>
<?php
get_footer();
