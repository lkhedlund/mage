<nav class="navbar container-fluid fixed-top navbar-expand-md" role="navigation" aria-label="main navigation">
    <div class="navbar-item drawer-toggle" data-drawer="main">
        <i class="icon-menu"></i>
    </div>
    <div class="navbar-brand">
        <a class="navbar-item" href="<?= home_url('/'); ?>">
            <?php if (get_theme_mod('upload_site_logo')) : ?>
                <img src="<?= get_theme_mod('upload_site_logo'); ?>" alt="<?= esc_attr(get_bloginfo('name', 'display')); ?>" class="brand-image">
            <?php else :
                bloginfo('name');
            endif; ?>
        </a>
    </div>
    <?php if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'depth' => 1,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => 'BS_Navwalker::fallback',
            'walker' => new BS_Navwalker()
        ]);
    endif; ?>
</nav>