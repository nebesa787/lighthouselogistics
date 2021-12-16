<?php
/**
 * The template for displaying product content within up-sells
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product; ?>
<div class="item">
    <div class="image">
        <a href="<?php the_permalink();?>">

            <?php if (has_post_thumbnail()):
                the_post_thumbnail('shop_thumbnail_min');
            else:
                echo sprintf('<img src="%s" alt="%s" height="80px" width="80px" />', esc_url(wc_placeholder_img_src()), esc_html__('Awaiting product image', 'woocommerce'));
            endif; ?>

        </a>
    </div>
    <div class="info">
        <div class="h4">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </div>
        <?php do_action('woocommerce_single_product_price');?>
    </div>
</div>