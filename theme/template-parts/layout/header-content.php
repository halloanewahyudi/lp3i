<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

?>

<header id="masthead" class="bg-primary text-white py-2">
	<div class="container">
		<div class="flex justify-between items-center">
			<div>
				<?php if (has_custom_logo()): echo get_custom_logo();
				else :
					bloginfo('name');
				endif; ?>
			</div>
			<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'lp3i'); ?>">

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
         <div class="flex items-center gap-4">
			<a href="whatsapp://send?phone=+628123456789" class="text-white"><i class="bi bi-whatsapp"></i> </a>
			<button id="btn-search"><i class="bi bi-search"></i></button>
		 </div>
		</div>
	</div>
</header><!-- #masthead -->
<?php 
if(!is_home(  ) && !is_front_page(  )):?>
<div class="bg-gradient-to-r from-primary via-secondary to-tertiary py-1">
	<div class="container">
	<?php custom_breadcrumb(); ?>
	</div>
</div>
<?php endif; ?>



