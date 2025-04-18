<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ekron-frontend
 */

get_header();
?>
<section class="bg-site-black">
	<div class="container flex flex-col gap-10 justify-center items-center py-20 md:py-[120px]">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="Page not found Image" width="400">
		<p class="text-site-white"><?php esc_html_e('This page could not be found. It might have been removed or renamed, or it may never have existed.', 'ekron'); ?></p>
		<a href="/" class="button button--primary">Take me Home</a>
	</div>
</section>

<?php
get_footer();
