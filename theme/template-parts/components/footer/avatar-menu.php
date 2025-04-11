<div class="bg-primary py-16 md:py-24">
    <div class="container flex flex-col justify-between items-center gap-5">
        <img class="rounded-full hover:scale-125 hover:cursor-pointer hover:transition-transform hover:ease-in-out hover:duration-300" src="<?php echo get_template_directory_uri(); ?>/assets/images/GC_Avatar_Xabier_Round.png" alt="Ekron Avatar" width="160">
        <nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'ekron'); ?>">
            <?php
            wp_nav_menu(
                array(
                    'menu'        => 'Avatar Menu',
                    'menu_class'     => 'avatar-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
                )
            );
            ?>
        </nav>
    </div>
</div>