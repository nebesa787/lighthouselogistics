<?php

//Отключаем стандартные стили woocommerce
add_filter('woocommerce_enqueue_styles', '__return_empty_array');
add_theme_support('woocommerce');

//Отключаем отзывы
add_filter('woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs)
{
    unset($tabs['reviews']);
    return $tabs;
}

// удаляем хуки
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_before_shop_loop', 'wc_print_notices', 10, 0);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0);

//Добавление в хуки
add_action('woocommerce_single_product_price', 'woocommerce_template_single_price', 5);
add_action('woocommerce_single_product_image', 'woocommerce_show_product_images', 5);
add_action('woocommerce_single_product_upsell', 'woocommerce_upsell_display', 5);
add_action('woocommerce_catalog_ordering', 'woocommerce_catalog_ordering', 5);

//редактируем сортировку
function custom_woocommerce_catalog_orderby($orderby)
{
    $orderby['date'] = pll__('The newest');
    $orderby['price'] = pll__('Ascending price');
    $orderby['price-desc'] = pll__('Descending price');
    unset($orderby["popularity"]);
    unset($orderby["rating"]);
    return $orderby;
}

add_filter("woocommerce_catalog_orderby", "custom_woocommerce_catalog_orderby", 20);
