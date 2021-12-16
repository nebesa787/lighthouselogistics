<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="it-rating" content="it-rat-9ecacc46490115c96bc15b93f222cd65" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=cyrillic-ext" rel="stylesheet">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/logo_s.png" >
	<?/*
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MJL9G2P');</script>
	<!-- End Google Tag Manager -->
	*/?>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143273165-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-143273165-1');
	</script>


	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NMQRQTC');</script>
	<!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?/*
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJL9G2P"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	*/?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMQRQTC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


<div id="wrapper">

    <header id="header">
        <div class="bg-top"></div>
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')) ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
                </a>
            </div>
            <div class="header-right">
                <div class="top">
                     <div class="contacts">
                        <a href="" class="btn-contacts"></a>

                        <?php $phone = get_field('phone_head', 'options');
                        $vowels = array("(", ")", " ", "-");
                        $int_phone = str_replace($vowels, "", $phone);
                        if(get_locale() == 'ru_RU'):
                            $dilerLink = '<a href="https://americancars.in.ua/novosti/stat-dilerom/" class="link_diler">Стать дилером</a>';
                        else:
                            $dilerLink = '<a href="https://americancars.in.ua/novosti/stat-dilerom/" class="link_diler">Стать дилером</a>';
                        endif;
                        if ($phone):
                            //echo '<div class="contacts-wrap">'.$dilerLink.'<a href="tel:' . $int_phone . '">' . $phone . '</a> </div>';
                            echo '<div class="contacts-wrap"><a href="tel:' . $int_phone . '">' . $phone . '</a> </div>';
                        endif; ?>

                    </div>
                    <div class="search">
                        <div class="search-hidden">
                            <?php get_search_form(); ?>
                        </div>
                        <a href="" class="btn-search"></a>
                    </div>
                    <div class="language">
                        <ul>
                            <li class="active"><a href="#"><?php echo pll_current_language('name') ?></a>
                            </li>
                            <?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1, 'hide_current' => 1)); ?>
                        </ul>
                    </div>
                    <button id="toggle-menu-button-full" class="toggle-menu-button"><span></span>
                    </button>
                </div>

                <nav class="menu menu-top" id="nav">

                    <?php if (has_nav_menu('main-menu')):
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_class' => '',
                            'container' => false,
                        ));
                    endif; ?>

                    <a href="#" class="btn" data-toggle="modal"
                       data-target="#callback-form"><?php echo pll__('Back call'); ?></a>
                </nav>

            </div>
        </div>
    </header>