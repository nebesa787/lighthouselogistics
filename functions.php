<?php



function setup()

{

    add_theme_support('woocommerce');

    add_theme_support('title-tag');



    add_theme_support('post-thumbnails');



    add_image_size('icon', 35, 9999, true);

    add_image_size('icon_76', 76, 9999, true);

    add_image_size('icon_40', 40, 9999, true);

    add_image_size('icon_190', 190, 9999, true);

    add_image_size('shop_thumbnail_min', 80, 80, true);

    add_image_size('main_catalog', 360, 257, true);



    register_nav_menus(array(

        'main-menu' => 'Основное',

        'footer-menu' => 'Footer',

    ));



    pll_register_string('Choose','Choose');

}



add_action('after_setup_theme', 'setup');



// Подключение сайдбара из подпапки темы

// Подключит файл 'theme-sidebars/sidebar.php' из папки текущей темы.

// Размещать в functions.php

function theme_sidebar($name = '')

{

    do_action('get_sidebar', $name);



    if ($name)

        $name = "-$name";



    locate_template("theme-sidebars/sidebar$name.php", true);

}

function widgets_init()

{

    register_sidebar(array(

        'name' => 'Слоган',

        'description' => 'Cквозной элемент. Отображается на страницах блога',

        'id' => 'slogan',

        'before_widget' => '<div class="info-text">',

        'after_widget' => '</div>',

        'before_title' => '<p class="h3">',

        'after_title' => '</p>',

    ));

    register_sidebar(array(

        'name' => 'Контактный телефон',

        'description' => 'Cквозной элемент. Отображается на страницах блога',

        'id' => 'contact_phone',

        'before_widget' => '<div class="phone-full-wrap">',

        'after_widget' => '</div>',

        'before_title' => '<p class="h3">',

        'after_title' => '</p>',

    ));

    register_sidebar(array(

        'name' => 'Шапка карточки товара и каталога',

        'description' => 'Cквозной элемент. Отображается на страницах продуктов и в каталоге',

        'id' => 'head_product',

        'before_widget' => '<div class="short-desc">',

        'after_widget' => '</div>',

        'before_title' => '<p>',

        'after_title' => '</p>',

    ));

    register_sidebar(array(

        'name' => 'Сайдбак каталока',

        'description' => 'Отображается в каталоге',

        'id' => 'sidebar_catalog',

        'before_widget' => '<div id="%1$s" class="widget %2$s">',

        'after_widget' => '</div>',

        'before_title' => '<p>',

        'after_title' => '</p>',

    ));

    register_sidebar(array(

        'name' => 'Subscribe',

        'id' => 'subscribe',

        'before_widget' => '<div class="col-md-6 col-xs-12">',

        'after_widget' => '</div>',

        'before_title' => '<p>',

        'after_title' => '</p>',

    ));



}

add_action('widgets_init', 'widgets_init');

function scripts()

{



    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');

    wp_enqueue_style('mCustomScrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css');

    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');

    wp_enqueue_style('jcf', get_template_directory_uri() . '/css/jcf.css');

    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css');



    wp_deregister_script('jquery');

    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');

    wp_enqueue_script('jquery');

    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);

    wp_enqueue_script('mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.min.js', array('jquery'), '', true);

    wp_enqueue_script('pace', get_template_directory_uri() . '/js/pace.min.js', array('jquery'), '', true);

    wp_enqueue_script('jcf', get_template_directory_uri() . '/js/jcf.js', array('jquery'), '', true);

    wp_enqueue_script('jcfselect', get_template_directory_uri() . '/js/jcf.select.js', array('jquery'), '', true);

    wp_enqueue_script('masked', get_template_directory_uri() . '/js/masked.js', array('jquery'), '', true);

    wp_enqueue_script('script_dev', get_template_directory_uri() . '/js/script_dev.js', array('jquery'), '', true);

    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);


    if (is_product()):
        wp_enqueue_script('calc', get_template_directory_uri() . '/inc/calc/js/product-calc.js', array('jquery'), '', true);

    endif;
    if(is_page_template('templates/customs.php')):
        wp_enqueue_script('customs', get_template_directory_uri() . '/inc/calc/js/customs.js', array('jquery'), '', true);
    endif;
    if(is_page_template('templates/delivery.php')):
        wp_enqueue_script('delivery', get_template_directory_uri() . '/inc/calc/js/delivery.js', array('jquery'), '', true);
    // wp_enqueue_script('calc', get_template_directory_uri() . '/inc/calc/js/product-calc.js', array('jquery'), '', true);
    endif;
	
	
	if(is_page_template('templates/podkluch.php')):
		wp_enqueue_script('delivery', get_template_directory_uri() . '/inc/calc/js/pod_kluch.js', array('jquery'), '', true);
    endif;



}

add_action('wp_enqueue_scripts', 'scripts');


function admin_style_backend()

{

    wp_enqueue_style('myadmin', get_stylesheet_directory_uri() . '/css/admin.css');

}



add_action('admin_enqueue_scripts', 'admin_style_backend');



function my_acf_init()

{



    acf_update_setting('google_api_key', 'AIzaSyAyPDxPiOp8rBprU5B_hdobbip3ps5KuOM');

}



add_action('acf/init', 'my_acf_init');



include 'inc/function-woo.php';



if (function_exists('acf_add_options_page')) {



    acf_add_options_page(array(
        'page_title' => 'Контакты',
        'menu_title' => 'Контакты',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => '50.1'
    ));

    acf_add_options_page(array(
        'page_title' => 'Настройки калькуляторов',
        'menu_title' => 'Настройки калькуляторов',
        'menu_slug' => 'calc-options',
        'redirect' => true,
        'position' => 59.1,
        'icon_url'=>'dashicons-forms'
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Кросс-курс',
        'menu_title' => 'Кросс-курс',
        'menu_slug' => 'currency',
        'capability' => 'edit_posts',
        'post_id' => 'currency',
        'icon_url' => 'dashicons-update',
        'parent_slug' => 'calc-options'
    ));


   acf_add_options_sub_page(array(
       'page_title' => 'Доставка',
       'menu_title' => 'Доставка',
       'menu_slug' => 'delivery',
       'capability' => 'edit_posts',
       'post_id' => 'delivery',
       'icon_url' => 'dashicons-email-alt',
       'parent_slug' => 'calc-options'
   ));

}





/*

 * удаляем пункт меню

 */

function remove_menus()

{

    remove_menu_page('edit-comments.php');          //Комментарии

}



add_action('admin_menu', 'remove_menus');



/*

 *  удаляет H2 из шаблона пагинации

 */

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);

function my_navigation_template($template, $class)

{

    return '<nav class="wp-pagenavi" role="navigation">%3$s</nav>';

}



// запрет обновления выборочных плагинов



function filter_plugin_updates($update)

{

    global $DISABLE_UPDATE; // см. wp-config.php

    if (!is_array($DISABLE_UPDATE) || count($DISABLE_UPDATE) == 0) {

        return $update;

    }

	if($update->response){

		foreach ($update->response as $name => $val) {

			foreach ($DISABLE_UPDATE as $plugin) {

				if (stripos($name, $plugin) !== false) {

					unset($update->response[$name]);

				}

			}

		}
    }

    return $update;

}



add_filter('site_transient_update_plugins', 'filter_plugin_updates');



/*
 * Add columns to dostavka post list
 */
function add_acf_columns ( $columns ) {
   return array_merge ( $columns, array ( 
        'city' => __ ( 'Город' ),
		'port' => __ ( 'Порт' ),
        'price' => __ ( 'Стоимость' ),
        'auction'   => __ ( 'Аукцион' )
        
   ) );
 }
 add_filter ( 'manage_dostavka_posts_columns', 'add_acf_columns' );
/*
 * Add columns to dostavka post list
 */
 function dostavka_custom_column ( $column, $post_id ) {
   switch ( $column ) {
      case 'price':
       echo get_post_meta ( $post_id, 'price', true );
       break;
	  case 'port':
       echo get_post_meta ( $post_id, 'port', true );
       break;
	  case 'city':
       echo get_post_meta ( $post_id, 'city', true );
       break;
      case 'auction':
       $auction = get_post_meta ( $post_id, 'auction', true );
	   $iii=0;
	   foreach($auction as $item_auction){
			$iii++;
			if($iii==2){
			print_R(' | ');
			}
			print_R($item_auction);
			
	   }
	   
       break;
   }
 }
 add_action ( 'manage_dostavka_posts_custom_column', 'dostavka_custom_column', 10, 3 );

 
add_action('wp_ajax_nopriv_do_ajax', 'our_ajax_function');
add_action('wp_ajax_do_ajax', 'our_ajax_function');
function our_ajax_function(){


     switch($_REQUEST['fn']){
          case 'get_cityArr':
               $output = ajax_get_cityArr();
          break;
          default:
              $output = 'No function specified, check your jQuery.ajax() call';
          break;

     }


         $output=json_encode($output);
        	
			$file = "/home/america4/public_html/wp-content/themes/lighthouselogistics/Price calc JSON/cityArr.php";

			$fp = fopen($file, "w+");
			fwrite($fp, $output);
			fclose($fp);
			
			

			
		
		 
		 
		 
        
} 




function ajax_get_cityArr()
{
    $args = array (
		'post_type'              => array( 'dostavka' ),
		'post_status'            => array( 'publish' ),
		'nopaging'               => true,
		'order'                  => 'ASC',
		'orderby'                => 'title',
	);

						
	$dostavka = new WP_Query( $args );
		$di=1;
		$city_array[] = 0;
		// The Loop
		if ( $dostavka->have_posts() ) {
			while ( $dostavka->have_posts() ) {
				
				$dostavka->the_post();
				$dostavka_city = get_field('city'); 			
				$dostavka_port = get_field('port'); 			
				$dostavka_price = get_field('price'); 			
				$dostavka_auction = get_field('auction'); 			
				
				$city_array[$di][0] = 'sn'.$di;	
				$city_array[$di][1] = $dostavka_city;	
				$city_array[$di][2] = $dostavka_port;	
				$city_array[$di][3] = (int) $dostavka_price;	
				$city_array[$di][4] = 0;
				$city_array[$di][5] = 0;
				$city_array[$di][6] = get_the_title();
				
				foreach($dostavka_auction as $item_auction){
					if($item_auction =='Copart') {$city_array[$di][4] = 1;	}
					if($item_auction =='IAAI') {$city_array[$di][5] = 1; }
				}
				
				$di++;
			}
		} 
		//wp_reset_postdata();
    
		if( count($city_array) ) {
			return $city_array;
		}
    return false;
}
 
 