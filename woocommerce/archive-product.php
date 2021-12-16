<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>

<main>
    <div class="catalog">
        <div class="page-head">
            <div class="container">

                <h1><?php woocommerce_page_title() ?></h1>

                <?php dynamic_sidebar('head_product'); ?>

                <?php get_template_part('inc/breadcrumbs'); ?>

            </div>
        </div>
        <div class="container">
            <div class="row sm-padding">

                <?php do_action('woocommerce_sidebar'); ?>

                <div class="col-md-8">
                    <div class="white-box catalog-head">
                        <p class="title"><?php echo pll__('Cars from America'); ?></p>
                        <div class="sort white-form">
                            <?php do_action('woocommerce_catalog_ordering'); ?>
                        </div>
                    </div>

                    <?php if (have_posts()) : ?>

                        <div class="product-list">

                            <?php while (have_posts()) : the_post(); ?>

                                <?php wc_get_template_part('content', 'product'); ?>

                            <?php endwhile; ?>

                        <?php
                        /**
                         * woocommerce_after_shop_loop hook.
                         *
                         * @hooked woocommerce_pagination - 10
                         */
                        do_action('woocommerce_after_shop_loop');
                        ?>

                        </div>
                    <?php else: ?>

                        <?php
                        /**
                         * woocommerce_no_products_found hook.
                         *
                         * @hooked wc_no_products_found - 10
                         */
                        do_action('woocommerce_no_products_found');
                        ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</main>

<?php  get_template_part('template-parts/text-bottom');?>

<?php get_footer('shop'); ?>
