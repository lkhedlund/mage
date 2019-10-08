<?php get_header(); ?>
<div class="wrap" role="document">
    <main class="main">
        <?php include Mage\template_path(); ?>
    </main><!-- /.main -->
    <?php if (Mage\display_sidebar()) : ?>
        <aside class="sidebar">
            <?php get_sidebar() ?>
        </aside><!-- /.sidebar -->
    <?php endif; ?>
</div><!-- /.wrap -->
<?php get_footer(); ?>