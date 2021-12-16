<?php get_header(); ?>
    <main>
        <div class="page-head">
            <div class="container">
                <?php the_title('<h1>', '</h1>');
                get_template_part('inc/breadcrumbs'); ?>
            </div>
        </div>
        <div class="single-page">

            <?php $thumbnail = get_field('big_image');
            if ($thumbnail): ?>

                <div class="image-full">

                    <?php echo '<img src="' . $thumbnail['url'] . '" alt="' . get_the_title() . '">'; ?>

                </div>

            <?php endif; ?>

            <div class="container">

                <?php echo '<time class="date" datetime="' . get_the_date('Y-m-d') . '">' . get_the_date('d.m.y') . '</time>'; ?>

                <div class="article">
                    <?php while (have_posts()):the_post();
                        the_content();
                    endwhile; ?>
                </div>
                <ul class="nav-single-page col-xs-12">
                    <?php $prev = pll__('Previous');
                    $next = pll__('Next');
                    $cat = get_the_category();
                    $cat_id = $cat[0]->term_id;
                    $cat_link = get_category_link($cat_id); ?>

                    <li class="prev-news">
                        <?php previous_post_link('%link', '' . $prev . '', true) ?>
                    </li>
                    <li class="all-news">
                        <?php echo '<a class="btn btn-md" href="' . $cat_link . '">' . pll__('All news') . '</a>'; ?>
                    </li>
                    <li class="next-news">
                        <?php next_post_link('%link', '' . $next . '', true) ?>
                    </li>

                </ul>

                <?php $query_news = new WP_Query(array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                ));
                if ($query_news->have_posts()):?>
                    <div class="related-news">
                        <p class="h1"><?php echo pll__('Other news'); ?></p>
                        <div class="items row">

                            <?php while ($query_news->have_posts()): $query_news->the_post();

                                get_template_part('template-parts/other-news');

                            endwhile; ?>

                        </div>
                    </div>
                <?php endif;

                theme_sidebar('slogan');?>

            </div>
        </div>
    </main>

<?php theme_sidebar('contact_phone'); ?>

<?php get_template_part('template-parts/text-bottom'); ?>

<?php get_footer(); ?>