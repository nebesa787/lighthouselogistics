<?php
/**
 * Single Product Up-Sells
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>

    <div class="box">
        <div class="head"><?php echo pll__('Similar cars');?></div>
        <div class="box-body">
            <div class="related-product">

                <?php foreach ( $upsells as $upsell ) : ?>

                    <?php
                    $post_object = get_post( $upsell->get_id() );

                    setup_postdata( $GLOBALS['post'] =& $post_object );

                    wc_get_template_part( 'content', 'product-up-sells' ); ?>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

<?php endif;

wp_reset_postdata();
