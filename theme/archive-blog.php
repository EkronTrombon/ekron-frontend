<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ekron-frontend
 */

get_header();
?>

<section class="relative bg-site-black">
	<div class="relative container flex justify-center items-center py-20 md:py-[120px]">
		<h1 class="h1 text-site-white before:text-site-white after:text-site-white">blog</h1>
	</div>
	<div class="absolute bottom-0 flex justify-center w-full">
		<img class="w-fit object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/EKR_Homepage_Shape.png" alt="Background Shape">
	</div>
</section>

<section class="bg-quaternary py-16 md:py-24">
	<div class="container">
		<h2 class="h2 text-site-black text-center">My Projects</h2>
		<div class="mt-10 max-w-[720px] mx-auto text-site-black text-center">Our system is meticulously designed to tackle occasional transaction failures caused by issues such as insufficient funds or temporary glitches.</div>
		<?php if (have_posts()) : ?>
			<div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-5">
				<?php while (have_posts()) :
					the_post(); ?>
					<a href="<?= the_permalink(); ?>" class="relative">
						<?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover rounded-lg']); ?>
						<div class="absolute inset-0 m-32 bg-white opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 flex flex-col gap-5 items-center justify-center p-10 rounded-lg">
							<h3 class="h3 text-site-black"><?= get_the_title(); ?></h3>
							<div class="text-center text-site-black"><?= get_the_excerpt(); ?></div>
						</div>
					</a>
				<?php
				endwhile;
				ekron_the_posts_navigation();
				?>
			</div>
		<?php else :
			// If no content, include the "No posts found" template.
			get_template_part('template-parts/content/content', 'none');
		endif; ?>
	</div>
</section>
<section class="bg-site-black py-16 md:py-24">
	<div class="container flex flex-col md:flex-row justify-between items-center gap-10 md:gap-[120px]">
		<div class="w-full md:w-1/2">
			<h2 class="h2 text-white">About Me</h2>
			<p class="mt-10 text-white text-xl">Building exceptional websites tailored to your vision for 10+ years. Blending creativity and functionality to deliver stunning digital experiences.</p>
			<div class="mt-10">
				<a class="button button--primary " href="/about/">More About Me</a>
			</div>
		</div>
		<div class="w-full md:w-1/2">
			<img class="w-full object-cover rounded-xl" src="/wp-content/uploads/2025/04/EKR_Homepage_About.jpg" alt="<?= $image['alt']; ?>">
		</div>
	</div>
</section>

<?php
get_footer();
