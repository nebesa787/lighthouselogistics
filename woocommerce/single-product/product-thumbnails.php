<?php
/**
 * Single Product Thumbnails
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;

$attachment_ids = $product->get_gallery_image_ids();
if ( $attachment_ids && has_post_thumbnail() ) {
	$i=1;
	foreach ( $attachment_ids as $attachment_id ) {
		$attributes      = array(
			'title' => get_post_field('post_title', $attachment_id),
            'alt' => get_the_title().'-'.$i,

		);

		$html  = '<div class="item"><span>';
		$html .= wp_get_attachment_image( $attachment_id, 'shop_thumbnail', false, $attributes );
 		$html .= '</span></div>';

		echo  $html;
		$i++;
	}
}
