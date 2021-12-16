<?php
/**
 * The template for displaying product content within loops
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<div class="item">
    <div class="image">
        <a href="<?php the_permalink(); ?>">
       <?php if (has_post_thumbnail()):
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'shop_catalog', true);?>
        <img src="<?php echo $thumb_url[0];?>" alt="<?php echo get_the_title();?>">
            <?php 
            else:
                echo sprintf('<img src="%s" alt="%s" height="197px" width="272px" />', esc_url(wc_placeholder_img_src()), esc_html__('Awaiting product image', 'woocommerce'));
            endif; ?>

        </a>
    </div>
    <div class="info">
        <div class="info-head">
            <div>
                <strong class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
                <?php $nalichie = get_the_terms($product->id, 'pa_nalichie');
                if ($nalichie):
                    echo '<p>' . $nalichie[0]->name . '</p>';
                endif; ?>
            </div>
            <?php do_action('woocommerce_single_product_price'); ?>
        </div>
        <?php
        $probeg = get_the_terms($product->id, 'pa_probeg');
        $korobka = get_the_terms($product->id, 'pa_korobka');
        $obem = get_the_terms($product->id, 'pa_obem');
        $privod = get_the_terms($product->id, 'pa_privod');
        $tiptopliva = get_the_terms($product->id, 'pa_tip-topliva');
        $god = get_the_terms($product->id, 'pa_god');
        if ($probeg || $korobka || $obem || $privod || $tiptopliva || $god):?>
            <div class="bottom-info">
                <div class="characteristics">
                    <?php if ($probeg):
                        echo '<p><img src="' . get_template_directory_uri() . '/images/i-road.svg" alt="">' . $probeg[0]->name . '</p>';
                    endif;
                    if ($korobka):
                        echo '<p><img src="' . get_template_directory_uri() . '/images/i-gear.svg" alt="">' . $korobka[0]->name . '</p>';
                    endif;
                    if ($obem):
                        echo '<p><img src="' . get_template_directory_uri() . '/images/i-engine.svg" alt="">' . $obem[0]->name . '</p>';
                    endif;
                    if ($privod):
                        echo '<p><img src="' . get_template_directory_uri() . '/images/i-wheel.svg" alt="">' . $privod[0]->name . '</p>';
                    endif;
                    if ($tiptopliva):
                        echo '<p><img src="' . get_template_directory_uri() . '/images/i-gas.svg" alt="">' . $tiptopliva[0]->name . '</p>';
                    endif;
                    if ($god):
                        echo '<p><img src="' . get_template_directory_uri() . '/images/i-calendar.svg" alt="">' . $god[0]->name . '</p>';
                    endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-sm"><?php echo pll__('Details'); ?></a>

    </div>
</div>

