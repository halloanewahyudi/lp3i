<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

?>

<header id="masthead" class="bg-primary text-slate-50 py-2.5 relative h-[70px]">
	<div class="container">
		<div class="flex justify-between items-center gap-5">
			<div class="">
				<?php if (has_custom_logo()):
					the_custom_logo();
				else: ?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php endif; ?>
			</div> <!-- end site logo -->

			<nav  id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'lp3i'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="nav-icon flex items-center gap-4">

			</div>
		</div>
	</div>
	<div class="search-bar bg-secondary">
 <div class="container">
 <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
 <label>
 <span class="screen-reader-text">Search for:</span>
 </div>
	</div>
</header><!-- #masthead -->
