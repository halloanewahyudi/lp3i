<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="mb-10 rounded-xl overflow-hidden h-[300px]">
<?php lp3i_post_thumbnail('full'); ?>
</div>


	<header class="entry-header mb-5">
	<?php if ( ! is_page() ) : ?>
			<div class="entry-meta text-sm mb-3 text-secondary">
				<div class="flex items-center gap-2">
					<i class="bi bi-calendar3"></i>
					<?php // lp3i_entry_meta();
              lp3i_posted_on(); ?> <br>
				</div>
				<div class="flex items-center gap-2">
				<i class="bi bi-person-circle"></i>
				<?php lp3i_posted_by(); ?>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( '<h1 class="text-3xl lg:text-4xl font-bold mb-3">', '</h1>' ); ?>

	
	</header><!-- .entry-header -->

	

	<div <?php lp3i_content_class(  ); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'lp3i' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'lp3i' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lp3i_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->
