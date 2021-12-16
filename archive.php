<?php get_header(); ?>
    <main>
        <div class="page-head">
            <div class="container">
                <h1><?php single_cat_title() ?></h1>
                <?php get_template_part('inc/breadcrumbs'); ?>
            </div>
        </div>

        <div class="container">
            <div class="news-list">

                <?php while (have_posts()):the_post();
                    get_template_part('template-parts/content-archive');
                endwhile; ?>

            </div>

            <?php the_posts_pagination(array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_text' => '',
                'next_text' => '',
            )); ?>

            <?php theme_sidebar('slogan'); ?>

        </div>
    </main>

<?php theme_sidebar('contact_phone'); ?>

<?php
$paged = get_query_var('paged');
if ($paged == 0):
    get_template_part('template-parts/text-bottom');
endif; ?>

<?php get_footer(); ?>