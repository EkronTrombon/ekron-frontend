<?php
$heading = get_field('homepage_hero_banner_heading');
$dark_mode = get_field('homepage_hero_banner_dark_mode');
$add_background_shape = get_field('homepage_hero_banner_add_background_shape');
?>
<section class="relative <?php if ($dark_mode) : ?> bg-site-black <?php else : ?> bg-site-white <?php endif; ?>">
    <div class="relative container flex justify-center items-center py-20 md:py-[200px]">
        <h1 class="h1 <?php if ($dark_mode) : ?> text-site-white before:text-site-white after:text-site-white <?php else : ?> text-site-black before:text-site-black after:text-site-black <?php endif; ?>"><?= $heading; ?></h1>
    </div>
    <?php if ($add_background_shape) : ?>
        <div class="absolute bottom-0 flex justify-center w-full">
            <img class="w-fit object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/EKR_Homepage_Shape.png" alt="Background Shape">
        </div>
    <?php endif; ?>
</section>