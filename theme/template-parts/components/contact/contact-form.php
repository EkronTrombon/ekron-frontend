<section class="relative bg-site-black pb-16 md:pb-24">
    <div class="container flex flex-col md:flex-row justify-between items-start gap-10 md:gap-[120px]">
        <div class="w-full md:w-1/2">
            <h2 class="h2 text-white">Don't let your vision wait, let's work together!</h2>
            <div class="mt-10 w-fit">
                <?php get_template_part('template-parts/components/social'); ?>
            </div>
        </div>
        <div class="w-full md:w-1/2">
            <div class="contact-form">
                <?= do_shortcode('[contact-form-7 id="197eb68" title="Contact Form"]'); ?>
            </div>
        </div>
        <div class="absolute bottom-0 flex justify-center w-full">
            <img class="w-fit object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/EKR_Homepage_Shape.png" alt="Background Shape">
        </div>
</section>