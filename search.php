<?php get_header(); ?>

<main>
    <div class="search-page">
        <div class="page-head">
            <div class="container">

                <?php echo '<h1>' . pll__('Search results') . ': ' . get_search_query() . '</h1>';

                get_template_part('inc/breadcrumbs'); ?>

            </div>
        </div>
        <div class="container">
            <div class="search-result-form white-box white-form">
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" placeholder="<?php echo get_search_query(); ?>"
                           value="<?php echo get_search_query(); ?>" name="s"/>
                    <input type="submit" class="btn btn-sm" value="<?php echo pll__('Search'); ?>">
                </form>
            </div>

            <?php if (have_posts()) : ?>

                <div class="row sm-padding">

                    <div class="col-md-8 col-md-offset-2">

                        <div class="product-list">

                            <?php while (have_posts()) : the_post(); ?>

                                <?php wc_get_template_part('content', 'product'); ?>

                            <?php endwhile; ?>

                        </div>

                        <?php the_posts_pagination(array(
                            'end_size' => 1,
                            'mid_size' => 1,
                            'prev_text' => '',
                            'next_text' => '',
                        )); ?>

                    </div>
                </div>

            <?php else: ?>

                <div class="search-no-result text-wrap">
                    <p class="h1"><?php echo pll__('Nothing found on your request');?></p>
                    <ul>
                        <li><?php echo pll__('Check if the request is correct, if there are any typos, for example "BMW" instead of "BMV"');?></li>
                        <li><?php echo pll__('Try to enter a synonym or similar request');?></li>
                    </ul>
                </div>

            <?php endif; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>
