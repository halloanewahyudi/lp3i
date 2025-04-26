<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

?>
<div x-data="{show:false}">
	<header id="masthead" class="bg-primary text-white py-2 ">
		<div class="container">
			<div class="flex justify-between items-center max-h-20 ">
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
					<a href="whatsapp://send?phone=+628123456789" class="text-white text-2xl"><i class="bi bi-whatsapp"></i> </a>
					<button id="btn-search " @click="show = !show"><i class="bi bi-search text-2xl"></i></button>
					<button id="btn-menu" class="lg:hidden text-2xl"> <i class="bi bi-list"></i> </button>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="bg-secondary py-2 h-screen flex flex-col justify-center items-center fixed top-0 left-0 w-full z-[1000]" x-show="show" x-intersect="show = true" x-intersect:leave="show = false" :class="show ? 'fade-up opacity-100' : 'opacity-0' ">
		<button class="text-3xl absolute top-2 right-2 text-light" @click="show = false"><i class="bi bi-x-circle"></i></button>
		<div class="max-w-[600px] w-full relative ">
			<!-- input search -->
			<div id="input-search" class="w-full">
				<form class="relative" role="search" method="get" action="<?php echo home_url('/'); ?>">
					<input type="search" name="s" placeholder="Cari di sini..." class=" w-full py-2 px-6 rounded-full border border-light focus:outline-none focus:ring-2 ring-light ring-offset-2 text-light placeholder:text-light" />
				</form>
			</div>
		</div>
	</div>

	<?php if (!is_front_page()): ?>
		<div class="bg-gradient-to-r from-primary via-secondary to-tertiary py-1">
			<div class="container">
				<?php custom_breadcrumb(); ?>
			</div>
		</div>
	<?php endif; ?>

</div>