<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light" role="navigation" aria-label="main navigation">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?= home_url('/'); ?>">
            <?php if (get_theme_mod('upload_site_logo')) : ?>
                <img src="<?= get_theme_mod('upload_site_logo'); ?>" alt="<?= esc_attr(get_bloginfo('name', 'display')); ?>" class="brand-image">
            <?php else :
                bloginfo('name');
            endif; ?>
        </a>
        <?php if (has_nav_menu('primary_navigation')) :
            wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'depth' => 1,
                'container_id' => 'navbarSupportedContent',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'menu_class' => 'navbar-nav mr-auto',
                'fallback_cb' => 'BS_Navwalker::fallback',
                'walker' => new BS_Navwalker()
            ]);
        endif; ?>
    </div>
</nav>