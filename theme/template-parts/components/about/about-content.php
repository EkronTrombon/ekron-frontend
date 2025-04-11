<?php
$text_position = get_field('about_content_text_position');
$heading = get_field('about_content_heading');
$info = get_field('about_content_info');
$left_image = get_field('about_content_left_image');
$right_image = get_field('about_content_right_image');
?>
<section class="bg-site-black py-16 md:py-24">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-5">
        <h2 class="h2 text-site-white <?php if ($text_position == 'left') : ?>order-1<?php else : ?>order-2<?php endif; ?>"><?= $heading; ?></h2>
        <div class="text-xl text-site-white <?php if ($text_position == 'left') : ?>order-2<?php else : ?>order-1<?php endif; ?>"><?= $info; ?></div>
        <img src="<?= $left_image['url']; ?>" alt="Left Image" class="rounded-lg w-full h-full object-cover order-3" />
        <img src="<?= $right_image['url']; ?>" alt="Right Image" class="rounded-lg w-full h-full object-cover order-4" />
    </div>
</section>