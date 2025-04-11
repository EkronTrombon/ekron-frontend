<?php
$heading = get_field('homepage_project_grid_heading');
$subheading = get_field('homepage_project_grid_subheading');
$projects = get_field('homepage_project_grid_projects');
$link = get_field('homepage_project_grid_link');
?>

<section class="bg-site-black py-16 md:py-24">
    <div class="container">
        <h2 class="h2 text-white text-center"><?= $heading; ?></h2>
        <div class="mt-10 max-w-[720px] mx-auto text-white text-center"><?= $subheading; ?></div>
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-5">
            <?php foreach ($projects as $project) : ?>
                <a href="<?= the_permalink($project->ID); ?>" class="relative">
                    <?= get_the_post_thumbnail($project->ID, 'full', ['class' => 'w-full h-full object-cover rounded-lg']); ?>
                    <div class="absolute inset-0 m-32 bg-white opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 flex flex-col gap-5 items-center justify-center p-10 rounded-lg">
                        <h3 class="h3 text-site-black"><?= get_the_title($project->ID); ?></h3>
                        <div class="text-center text-site-black"><?= get_the_excerpt($project->ID); ?></div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="mt-16 md:mt-24 flex flex-col items-center justify-center gap-5">
            <h3 class="h3 text-center text-white">Continue exploring my projects</h3>
            <a class="button button--hollow-white" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a>
        </div>
    </div>
</section>