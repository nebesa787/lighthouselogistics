<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
global $product;
?>
<div id="product-<?php the_ID(); ?>" class="product-single">
    <div class="page-head">
        <div class="container">

            <?php the_title('<h1>', '</h1>'); ?>

            <?php dynamic_sidebar('head_product'); ?>

            <?php get_template_part('inc/breadcrumbs'); ?>

        </div>
    </div>
    <div class="container">
        <div class="box-wrap row">
            <div class="left-prod col-md-8">

                <div class="box title">
                    <div class="title-left">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-car.svg" alt="">
                        </div>

                        <?php the_title('<p class="h2">', '</p>'); ?>

                    </div>

                    <?php do_action('woocommerce_single_product_price'); ?>

                </div>

                <?php do_action('woocommerce_single_product_image'); ?>

                <?php $video = get_field('video');
                if (!empty(get_the_content()) || $video):?>
                    <div class="box tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php if (!empty(get_the_content())): ?>
                                <li role="presentation" class="active">
                                    <a href="#tab-1" aria-controls="tab-1" role="tab"
                                       data-toggle="tab"><?php echo pll__('Information') ?></a>
                                </li>
                            <?php endif;
                            if ($video): ?>
                                <li role="presentation" <?php if(empty(get_the_content())) echo 'class="active"'?>>
                                    <a href="#tab-2" aria-controls="tab-2" role="tab"
                                       data-toggle="tab"><?php echo pll__('Video'); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div class="tab-content">
                            <?php if (!empty(get_the_content())): ?>
                                <div role="tabpanel" class="tab-pane active" id="tab-1">
                                    <div class="scroll">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endif;
                            if ($video): ?>
                                <div role="tabpanel" class="tab-pane <?php if(empty(get_the_content())) echo 'active'?>" id="tab-2">
                                    <?php echo $video ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div id="calculators" class="row sm-padding" data-availability="<?php the_field('availability'); ?>" >
                    <div class="col-xs-6">

                        <?php get_template_part('inc/calc/product-delivery'); ?>

                    </div>
                    <div class="col-xs-6">

                        <?php get_template_part('inc/calc/product-customs');?>

                    </div>

                </div>
                <div class="box calc">
                    <div class="result total-result">
                        <p><?php echo pll__('The total amount you spent on the acquisition is:'); ?></p>
                        <p id="totalCost" class="orange value"></p>
                    </div>

                </div>

                <div class="box">
                    <div class="head"><?php echo pll__('Contact us')?></div>
                    <div class="box-body">
                        <div class="white-form">
                            <?php current_form(180)?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="right-prod col-md-4">
                <div class="box r1">

                    <div class="specification">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-car.svg" alt="">
                        </div>
                        <p><strong><?php echo pll__('Specification');?></strong></p>
                        <p><?php echo pll__('Vehicle Specification');?></p>
                        <a href="#" class="btn" data-toggle="modal" data-target="#order-form"><?php echo pll__('To order');?></a>
                    </div>

                    <?php do_action( 'woocommerce_product_additional_information', $product ); ?>

                </div>

                <div class="box">
                    <div class="head"><?php echo pll__('Suggest your price')?></div>
                    <div class="box-body">
                        <div class="white-form">
                            <?php current_form(179)?>
                        </div>
                    </div>
                </div>

                <div class="box price-message">
                    <div class="box-body">
                        <a href="#" class="btn btn-white" data-toggle="modal" data-target="#price-reduction-form"><?php echo pll__('Report a price reduction')?></a>
                    </div>
                </div>

                <?php do_action('woocommerce_single_product_upsell');?>

            </div>
        </div>
    </div>

</div><!-- #product-<?php the_ID(); ?> -->

<?php $thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true); ?>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Product",
"url": "<?php the_permalink();?>",
"image": "<?php echo $thumb_url[0];?>",
"description": "<?php echo get_the_content();?>",
"name": "<?php the_title();?>",
"offers": {
"@type": "Offer",
"availability": "https://schema.org/InStock",
"price": "<?php echo $product->regular_price; ?>",
"priceCurrency": "USD"
}
}
</script>