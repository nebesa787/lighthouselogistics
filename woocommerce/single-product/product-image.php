<?php
/**
 * Single Product Image
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $post, $product;
$thumbnail_size = apply_filters('woocommerce_product_thumbnails_large_size', 'full');
$post_thumbnail_id = get_post_thumbnail_id($post->ID);
$full_size_image = wp_get_attachment_image_src($post_thumbnail_id, $thumbnail_size);

$attachment_ids = $product->get_gallery_image_ids();

?>

<?php if (has_post_thumbnail()): ?>
    <div class="box full-image">
        <div class="product-slider-for">
            <?php $attributes = array(
                'title' => get_post_field('post_title', $post_thumbnail_id),
                'alt' => get_the_title(),
            );

            $html = '<div  class="item"><a href="' . esc_url($full_size_image[0]) . '" class="fancybox" rel="prod-img"><span>';
            $html .= get_the_post_thumbnail($post->ID, 'shop_single', $attributes);
            $html .= '</span></a></div>';

            echo $html;

            if ($attachment_ids && has_post_thumbnail()):
                $i=1;
                foreach ($attachment_ids as $attachment_id):
                    $full_size_image = wp_get_attachment_image_src($attachment_id, 'full');
                    $attributes = array(
                        'title' => get_post_field('post_title', $attachment_id),
                        'alt' => get_the_title().'-'.$i,
                    );

                    $html = '<div class="item"><a href="' . esc_url($full_size_image[0]) . '" class="fancybox" rel="prod-img"><span>';
                    $html .= wp_get_attachment_image($attachment_id, 'shop_single', false, $attributes);
                    $html .= '</span></a></div>';

                    echo $html;
                    $i++;
                endforeach;
            endif; ?>

        </div>
        <div class="slider-nav">
            <button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
            <button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <div class="box additional-image">
        <div class="product-slider-nav">
            <?php $html = '<div  class="item"><span>';
            $alt_title = get_the_title();
            $html .= get_the_post_thumbnail($post->ID, 'shop_thumbnail', array('alt' => $alt_title,) );
            $html .= '</span></div>';

            echo $html;
            do_action('woocommerce_product_thumbnails'); ?>
        </div>
    </div>

    <div class="box additional-image">

        <?php $god_sing = get_the_terms($product->id, 'pa_god');
        $korobka_sing = get_the_terms($product->id, 'pa_korobka');
       // $kuzov_sing = get_the_terms($product->id, 'pa_kuzov');
        $marka_sing = get_the_terms($product->id, 'pa_marka');
        $model_sing = get_the_terms($product->id, 'pa_model');
        $nalichie_sing = get_the_terms($product->id, 'pa_nalichie');
        $obem_sing = get_the_terms($product->id, 'pa_obem');
        $privod_sing = get_the_terms($product->id, 'pa_privod');
        $probeg_sing = get_the_terms($product->id, 'pa_probeg');
        $tiptopliva_sing = get_the_terms($product->id, 'pa_tip-topliva');
        if(get_locale() == 'ru_RU'):?>
        <p class="desc_auto">В данный момент автомобиль <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> находится на Аукционе Copart в США. Купить Б/У <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> с пробегом <?php echo $probeg_sing[0]->name.' '. $god_sing[0]->name;?> года выпуска на аукционе в США <?php //echo $kuzov_sing[0]->name; ?> с объемом двигателя <?php echo $obem_sing[0]->name; ?> за <?php echo $product->get_price_html(); ?>. После покупки автомобиля <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> «<a href="https://americancars.in.ua/delivery/">Доставка авто из США в Украину</a> в Одесский порт» занимает до 2-х месяцев. Наш <a href="https://americancars.in.ua/rastamozhka/">онлайн калькулятор растаможки авто из США</a> поможет просчитать сколько стоит растаможка <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> из США В Украине. С компанией Lighthouse Logistics <a href="https://americancars.in.ua/">купить БУ авто из США под заказ с аукциона</a> просто и безопасно.<br></p>
        <?php else:?>
            <p class="desc_auto">Зараз автомобіль <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> знаходиться на Аукціоні Copart в США. Купити Б/В <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> з пробігом <?php echo $probeg_sing[0]->name.' '. $god_sing[0]->name;?> року випуску на аукціоні в США в  <?php //echo $kuzov_sing[0]->name; ?> з об'ємом двигуна <?php echo $obem_sing[0]->name; ?> за <?php echo $product->get_price_html(); ?>. Після покупки автомобіля <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> <a href="https://americancars.in.ua/uk/mapa-dostavki/">доставка авто з США в Україну</a> в Одеський порт» займає до 2-х місяців. Наш <a href="https://americancars.in.ua/uk/rozmitnennya/">онлайн калькулятор розмитнення авто з США</a> допоможе прорахувати скільки коштує розмитнення <?php echo $marka_sing[0]->name.' '. $model_sing[0]->name;?> з США В Україні. З компанією Lighthouse Logistics <a href="https://americancars.in.ua/uk/">купити авто з США під замовлення</a> з аукціону просто і безпечно.<br></p>
        <?php endif;?>
        </div>
<?php endif; ?>


