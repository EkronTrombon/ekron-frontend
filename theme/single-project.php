<?php

/**
 * The template for displaying project details page
 */

$banner_heading = get_field('project_banner_heading');
$dark_mode = get_field('project_banner_dark_mode');
$background_image = get_field('project_banner_background_image');
$add_background_shape = get_field('project_banner_background_shape');

$text_position = get_field('project_detail_text_position');
$heading = get_field('project_detail_heading');
$info = get_field('project_detail_info');
$left_image = get_field('project_detail_left_image');
$right_image = get_field('project_detail_right_image');

get_header();

?>

<section class="relative <?php if ($dark_mode) : ?> bg-site-black <?php else : ?> bg-site-white <?php endif; ?>">
	<?php if ($background_image) : ?>
		<div class="absolute inset-0 flex justify-center w-full">
			<img class="w-fit object-cover" src="<?= $background_image['url']; ?>" alt="<?= $background_image['alt']; ?>">
		</div>
	<?php endif; ?>
	<div class="relative container flex justify-center items-center py-20 md:py-[200px]">
		<h1 class="h1 text-center <?php if ($dark_mode) : ?> text-site-white before:text-site-white after:text-site-white <?php else : ?> text-site-black before:text-site-black after:text-site-black <?php endif; ?>">
			<?php if ($banner_heading != '') : ?>
				<?= $banner_heading; ?>
			<?php else : ?>
				<?= the_title(); ?>
			<?php endif; ?>
		</h1>
	</div>
	<?php if ($add_background_shape) : ?>
		<div class="absolute bottom-0 flex justify-center w-full">
			<img class="w-fit object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/EKR_Homepage_Shape.png" alt="Background Shape">
		</div>
	<?php endif; ?>
</section>

<section class="bg-site-black py-16 md:py-24">
	<div class="container grid grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-5">
		<h2 class="h2 text-site-white <?php if ($text_position == 'left') : ?>order-1<?php else : ?>order-2<?php endif; ?>"><?= $heading; ?></h2>
		<div class="text-xl text-site-white <?php if ($text_position == 'left') : ?>order-2<?php else : ?>order-1<?php endif; ?>"><?= $info; ?></div>
		<img src="<?= $left_image['url']; ?>" alt="Left Image" class="rounded-lg w-full h-full object-cover order-3" />
		<img src="<?= $right_image['url']; ?>" alt="Right Image" class="rounded-lg w-full h-full object-cover order-4" />
	</div>
</section>

<?php
get_footer();
