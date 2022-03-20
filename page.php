<?php get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                <?php get_template_part('template-parts/content', 'page'); ?>
            <?php endwhile;
        else : ?> <?php endif; ?>
    </main>
    <p>SINGULAR</p>
</div>

<?php get_sidebar('page'); ?>

<?php get_footer(); ?>