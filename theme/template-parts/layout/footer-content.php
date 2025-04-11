<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ekron-frontend
 */

?>

<footer id="colophon" class="bg-black text-white">
	<?php get_template_part('template-parts/components/footer/avatar-menu'); ?>
	<?php get_template_part('template-parts/components/footer/email'); ?>
	<div class="container flex flex-col md:flex-row gap-5 justify-between items-center px-5 md:px-0 py-5 md:py-10">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/EKR_Logo_Horizontal_White.svg" alt="Ekron Frontend Logo" width="170">
		</div>
		<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'ekron'); ?>">
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
		<a href="/contact/" class="button button--primary">Contact</a>
	</div>

	<div class="container flex justify-between items-center py-5 border-t border-white px-5 md:px-0">
		<div>
			<a class="link link--primary" href="<?= esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
		</div>
		<?php get_template_part('template-parts/components/social'); ?>
	</div>

</footer><!-- #colophon -->