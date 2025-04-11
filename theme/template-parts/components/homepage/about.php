<?php
$heading = get_field('homepage_about_heading');
$image = get_field('homepage_about_image');
$info = get_field('homepage_about_info');
$link = get_field('homepage_about_link');
?>

<section class="bg-primary py-16 md:py-24">
    <div class="container flex flex-col md:flex-row justify-between items-start gap-10 md:gap-[120px]">
        <div class="w-full md:w-2/3">
            <h2 class="h2 text-white"><?= $heading; ?></h2>
        </div>
        <div class="w-full md:w-1/3">
            <img class="w-full object-cover rounded-xl" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            <div class="mt-10 text-white"><?= $info; ?></div>
            <div class="mt-10">
                <a class="link link--bold link--white" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a>
            </div>
        </div>
    </div>
</section>