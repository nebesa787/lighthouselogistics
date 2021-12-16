<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     3.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="characteristic">
    <table>
        <?php $god = get_the_terms($product->id, 'pa_god');
        $korobka = get_the_terms($product->id, 'pa_korobka');
        //$kuzov = get_the_terms($product->id, 'pa_kuzov');
        $marka = get_the_terms($product->id, 'pa_marka');
        $model = get_the_terms($product->id, 'pa_model');
        $nalichie = get_the_terms($product->id, 'pa_nalichie');
        $obem = get_the_terms($product->id, 'pa_obem');
        $privod = get_the_terms($product->id, 'pa_privod');
        $probeg = get_the_terms($product->id, 'pa_probeg');
        $tiptopliva = get_the_terms($product->id, 'pa_tip-topliva');
        $name_auction = get_the_terms($product->id, 'pa_auction');
        $city = get_the_terms($product->id, 'pa_city');
        $lot = get_the_terms($product->id, 'pa_lot');

        if ($nalichie): ?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-nalichie.svg" alt="">' . pll__('Наличие'); ?>
                </th>
                <td><a  rel="nofollow"  target="blank" style="color: #666666; text-decoration:none; cursor: auto;" href="https://copart.com/lot/<?php echo $lot[0]->name ?>"><?php echo $nalichie[0]->name ?></a></td>
            </tr>
        <?php endif;

        if ($marka):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-marka.svg" alt="">' . pll__('Марка'); ?>
                </th>
                <td><?php echo $marka[0]->name ?></td>
            </tr>
        <?php endif;

        if ($model):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-car.svg" alt="">' . pll__('Модель'); ?>
                </th>
                <td><?php echo $model[0]->name ?></td>
            </tr>
        <?php endif;

        if ($kuzov):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-cuzov.svg" alt="">' . pll__('Кузов'); ?>
                </th>
                <td><?php echo $kuzov[0]->name ?></td>
            </tr>
        <?php endif;

        if ($probeg):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-road.svg" alt="">' . pll__('Пробег'); ?>
                </th>
                <td><?php echo $probeg[0]->name ?></td>
            </tr>
        <?php endif;

        if ($tiptopliva):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-gas.svg" alt="">' . pll__('Тип топлива'); ?>
                </th>
                <td><?php echo $tiptopliva[0]->name ?></td>
            </tr>
        <?php endif;

        if ($obem):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-engine.svg" alt="">' . pll__('Объем'); ?>
                </th>
                <td><?php echo $obem[0]->name ?></td>
            </tr>
        <?php endif;

        if ($god):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-calendar.svg" alt="">' . pll__('Год'); ?>
                </th>
                <td id="date_year"><?php echo $god[0]->name ?></td>
            </tr>
        <?php endif;

        if ($korobka):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-gear.svg" alt="">' . pll__('Коробка'); ?>
                </th>
                <td><?php echo $korobka[0]->name ?></td>
            </tr>
        <?php endif;

        if ($privod):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-wheel.svg" alt="">' . pll__('Привод'); ?>
                </th>
                <td><?php echo $privod[0]->name ?></td>
            </tr>
        <?php endif;
		
		/*if ($name_auction):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-nalichie.svg" alt="">' . pll__('Название аукциона'); ?>
                </th>
                <td><?php echo $name_auction[0]->name ?></td>
            </tr>
        <?php endif;	
		*/
		
		if ($city):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-nalichie.svg" alt="">' . pll__('Город покупки'); ?>
                </th>
                <td><?php echo $city[0]->name ?></td>
            </tr>
        <?php endif;

        $vin = get_field('vin');
        if ($vin):?>
            <tr>
                <th>
                    <?php echo '<img src="' . get_template_directory_uri() . '/images/i-vin.svg" alt="">' . pll__('VIN'); ?>
                </th>
                <td><?php echo $vin ?></td>
            </tr>
        <?php endif; ?>
    </table>
</div>
