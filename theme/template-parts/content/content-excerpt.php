<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="w-full h-[200px] rounded-xl overflow-hidden mb-3">
		<?php lp3i_post_thumbnail(); ?>
	</div>
	<div class="text-sm flex flex-col gap-2 ">
		<span> <i class="bi bi-calendar3"></i> <?php lp3i_posted_on(); ?> </span>
		<span> <i class="bi bi-person-circle"></i> <?php lp3i_posted_by(); ?></span>
	</div>


	<header class="entry-header">
		<?php
		if (is_sticky() && is_home() && ! is_paged()) {
			printf('%s', esc_html_x('Featured', 'post', 'lp3i'));
		}
		the_title(sprintf('<h2 class="entry-title text-lg font-normal"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
		?>
	</header><!-- .entry-header -->

</article><!-- #post-${ID} -->