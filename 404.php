<?php get_header(); ?>

<main>
    <div class="page-head page-404">
        <div class="container">
            <h1><?php echo pll__('Page not found');?></h1>

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <?php echo '<p>'.pll__('Unfortunately the page was not found.').'</p>';
                    echo '<p>'.pll__('Please check the correctness of the entered address.').'</p>';
                    echo '<p>'.pll__('Also you can go to the necessary section using the site menu or use the search.').'</p>';?>
                </div>
                <div class="col-lg-7 col-sm-6 text-center">
                    <p class="big">404</p>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>
