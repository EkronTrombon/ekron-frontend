<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ekron-frontend
 */

?>

<?php
if (! is_front_page()) {
	get_template_part('template-parts/components/interior-banner');
} else {
	get_template_part('template-parts/components/homepage/hero-banner');
	get_template_part('template-parts/components/homepage/about');
	get_template_part('template-parts/components/homepage/projects-grid');
}

if (is_page('contact')) {
	get_template_part('template-parts/components/contact/contact-form');
}
if (is_page('about')) {
	get_template_part('template-parts/components/about/about-content');
}
?>