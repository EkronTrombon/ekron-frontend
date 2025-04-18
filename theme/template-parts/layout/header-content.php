<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ekron-frontend
 */

?>

<header id="masthead" class="bg-black text-white">
	<div class="container flex justify-between items-center px-5 md:px-0 py-10">
		<a href="/" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/EKR_Logo_Horizontal_White.svg" alt="Ekron Frontend Logo" width="180">
		</a>
		<nav class="hidden md:block" id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'ekron'); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav>
		<a href="/contact/" class="hidden md:block button button--primary">Contact</a>
		<div class="hamburger-menu-icon">
			<div x-data="{ open: false }" @click.outside="open = false">
				<button @click="open = ! open" class="md:hidden focus:outline-none">
					<svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
						<path x-show="!open" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
					</svg>
				</button>

				<div x-show="open"
					x-transition:enter="transition ease-out duration-300"
					x-transition:enter-start="opacity-0 transform translate-x-[-10px]"
					x-transition:enter-end="opacity-100 transform translate-x-0"
					x-transition:leave="transition ease-in duration-300"
					x-transition:leave-start="opacity-100 transform translate-x-0"
					x-transition:leave-end="opacity-0 transform translate-x-[-10px]"
					class="md:hidden fixed top-0 right-0 w-3/4 h-screen bg-site-grey shadow-md z-10 py-20 px-5">
					<div class="flex justify-between items-center mb-10 pb-5 border-b-2 border-site-black">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/EKR_Logo_Horizontal_Black.svg" alt="Ekron Frontend Logo" width="120">
						<button @click="open = ! open" class="md:hidden focus:outline-none">
							<svg class="w-8 h-8 fill-site-black" viewBox="0 0 24 24">
								<path x-show="open" fill-rule="evenodd" d="M18.27 17.27a1 1 0 0 1-1.41 1.41L12 13.41l-4.86 4.87a1 1 0 0 1-1.41-1.41L10.59 12 5.73 7.13a1 1 0 0 1 1.41-1.41L12 10.59l4.87-4.86a1 1 0 0 1 1.41 1.41L13.41 12l4.86 4.87z" />
							</svg>
						</button>
					</div>
					<?php
					wp_nav_menu(
						array(
							'menu'        => 'Mobile menu',
							'menu_class'     => 'mobile-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
					<div class="mt-5">
						<a href="/contact/" class="button button--hollow-black">Contact</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->