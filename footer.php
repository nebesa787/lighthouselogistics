<div id="subscribe">

    <div class="container">

        <div class="subscribe-wrap row">

            <div class="col-md-12 col-xs-12">

                <p class="h3"><a href="https://www.boschservice.kiev.ua/remont-posle-dtp.htm"><span><img src="<?php echo get_template_directory_uri(); ?>/images/bosch_logo.png" alt="<?php echo pll__('Sign up to receive the best offers'); ?>" style="height:57px;"></span> <?php echo pll__('Sign up to receive the best offers'); ?></a></p>

            </div>

            <?php //dynamic_sidebar('subscribe'); ?>

        </div>

    </div>

</div>



<footer id="footer">

    <div class="container">

        <div class="row">



            <div class="item col-md-5 col-sm-4">

                <div class="logo">

                    <a href="<?php echo esc_url(home_url('/')) ?>">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">

                    </a>

                </div>

                <?php if (have_rows('social', 'options')): ?>

                    <div class="social-network">

                        <ul>

                            <?php while (have_rows('social', 'options')):the_row();

                                $icon = get_sub_field('icon');

                                $link = get_sub_field('link');

                                echo '<li><a href="' . $link . '" taget="_blank"><i class="fa ' . $icon . '" aria-hidden="true"></i></a></li>';

                            endwhile; ?>

                        </ul>

                    </div>

                <?php endif; ?>

            </div>



            <div class="item menu-bottom col-md-3 col-sm-3">

                <?php if (has_nav_menu('footer-menu')):

                    wp_nav_menu(array(

                        'theme_location' => 'footer-menu',

                        'menu_class' => '',

                        'container' => 'nav',

                    ));

                endif; ?>

            </div>



            <div class="item contacts col-md-4 col-sm-5">

                <?php $address = get_field('address_footer', 'options');

                if ($address):

                    echo '<p class="address">' . $address . '</p>';

                endif;

                if (have_rows('phones_footer', 'options')):

                    while (have_rows('phones_footer', 'options')):the_row();

                        $phone = get_sub_field('phone');

                        $vowels = array("(", ")", " ", "-");

                        $int_phone = str_replace($vowels, "", $phone);

                        echo '<p class="tel"><a href="tel:' . $int_phone . '">' . $phone . '</a></p>';

                    endwhile;

                endif; ?>

            </div>



        </div>

    </div>



    <div class="footer-bottom">

        <div class="container">

            <div class="items row">

                <div class="item col-md-5">
<?php /*
                    <a rel="nofollow" href="/" target="_blank"><?php echo pll__('Website development'); ?></a>



                    <a rel="nofollow" href="/" target="_blank" class="created">

                        <svg version="1.1" id="trendline-logo" xmlns="http://www.w3.org/2000/svg"

                             x="0px" y="0px" viewBox="0 0 539.8 166.2"

                             style="enable-background:new 0 0 539.8 166.2;" xml:space="preserve">

                    <g class="packman">

                        <g class="static">

                            <polygon class="st2" points="72.4,2.6 142.4,42.2 73.1,81.8 	"/>

                            <polygon class="st2" points="72.4,2.6 3,43.5 73.1,81.8 	"/>

                            <polygon class="st2" points="3,43.5 3.8,124 73.1,81.8 	"/>

                            <polygon class="st2" points="73,81.8 143.1,122.7 73.8,163.6 73,81.8 	"/>

                            <polygon class="st2" points="73.1,81.8 3.8,124 73.9,163.6 	"/>

                            <polygon class="st3" points="141.5,56.7 97.5,82.1 142,105.7 130.6,81.3"/>

                        </g>

                        <g class="hover">

                            <polygon class="item-1 st4" points="72.4,2.6 142.4,42.2 73.1,81.8"/>

                            <polygon class="item-2 st4" points="72.4,2.6 3,43.5 73.1,81.8"/>

                            <polygon class="item-3 st4" points="3,43.5 3.8,124 73.1,81.8"/>

                            <polygon class="item-4 st4" points="73.1,81.8 3.8,124 73.9,163.6"/>

                            <polygon class="item-5 st4" points="73,81.8 143.1,122.7 73.8,163.6 73,81.8 	"/>

                        </g>

                    </g>

                            <g>

                                <g>

                                    <path class="st6" d="M425.5,107.5c0,1-0.5,1.4-1.4,1.4h-30.4c-0.9,0-1.4-0.5-1.4-1.4V53.2c0-0.9,0.5-1.4,1.4-1.4



									c0.9,0,1.4,0.5,1.4,1.4V106h29C425,106,425.5,106.5,425.5,107.5z"/>

                                    <path class="st6" d="M436.4,107.5c0,0.9-0.5,1.4-1.4,1.4c-0.9,0-1.4-0.5-1.4-1.4V53.2c0-0.9,0.5-1.4,1.4-1.4



									c0.9,0,1.4,0.5,1.4,1.4V107.5z"/>

                                    <path class="st6" d="M494,107.5c0,0.9-0.5,1.4-1.5,1.4c-0.4,0-0.9-0.2-1.3-0.7l-39.8-50.9v50.2c0,0.9-0.5,1.4-1.4,1.4



									c-0.9,0-1.4-0.5-1.4-1.4V53.2c0-0.9,0.5-1.4,1.4-1.4c0.4,0,0.8,0.2,1.2,0.7l39.9,50.8V53.2c0-0.9,0.5-1.4,1.4-1.4



									c0.9,0,1.4,0.5,1.4,1.4V107.5z"/>

                                    <path class="st6" d="M539.3,107.5c0,1-0.5,1.4-1.4,1.4h-30.4c-0.9,0-1.4-0.5-1.4-1.4V53.2c0-0.9,0.5-1.4,1.4-1.4h30.4



									c0.9,0,1.4,0.5,1.4,1.4c0,1-0.5,1.4-1.4,1.4h-29v24.2h22.9c0.9,0,1.4,0.5,1.4,1.4c0,1-0.5,1.4-1.4,1.4H509V106h29



									C538.9,106,539.3,106.5,539.3,107.5z"/>

                                </g>

                                <g>

                                    <path class="st6" d="M151.1,50.6h28.1l0.4,0.4v4.8l-0.4,0.4h-10.8l-0.3,0.3V107c0,0.5-0.1,0.7-0.4,0.8h-5l-0.3-0.3V56.9l-0.1-0.7



									h-11.1c-0.3-0.1-0.4-0.4-0.4-0.8v-4C150.8,50.9,150.9,50.6,151.1,50.6z"/>

                                    <path class="st6" d="M189.4,50.6h18.2c7.6,0,13.2,3.4,16.8,10.2c1.1,2.7,1.6,5.4,1.6,8.1c0,4.8-1.9,9.1-5.6,13.2



									c-2.9,2.2-5.4,3.2-7.6,3.2l-0.5,0.1c0,0.4,3.8,6.5,11.4,18.4c1.4,2.2,2,3.4,2,3.6l-0.3,0.3h-6.2c-0.5-0.4-3-4.3-7.6-12



									c-6.2-9.9-9.3-15-9.3-15.3l0.3-0.3h4.5c5.8,0,9.7-2.2,11.7-6.6c0.7-1.6,1.1-3.2,1.1-4.7V68c0-4.5-2.3-8-6.9-10.5



									c-2.3-0.8-4.9-1.2-8-1.2h-10l-0.1,0.7v50.6l-0.3,0.3h-5c-0.3-0.1-0.4-0.4-0.4-0.8V51.4C189,50.9,189.2,50.6,189.4,50.6z"/>

                                    <path class="st6" d="M235.5,50.6h29.3l0.3,0.3V56l-0.3,0.3h-23.8l-0.1,0.7v19l0.4,0.4h23.6l0.3,0.3v5.1l-0.3,0.3h-23.8l-0.1,0.7



									v19.1l0.1,0.7h23.8l0.3,0.3v4.8l-0.3,0.3h-29.3c-0.3-0.1-0.4-0.4-0.4-0.8V51.4C235.1,50.9,235.3,50.6,235.5,50.6z"/>

                                    <path class="st6" d="M274.3,50.6h6.4c0.7,0.7,4,5.9,10,15.7l21.3,33.8V51.4c0.1-0.5,0.2-0.8,0.4-0.8h4.6l0.4,0.4v56.3l-0.4,0.4



									h-6.4c-0.5-0.4-3.5-5.1-8.9-14.1l-22.2-35.2h-0.1v49l-0.4,0.4h-4.6c-0.3-0.1-0.4-0.4-0.4-0.8V51.4C274,50.9,274.1,50.6,274.3,50.6



									z"/>

                                    <path class="st6" d="M327.1,50.6h17.2c13.9,0,23.1,6.5,27.5,19.6c0.8,2.9,1.2,5.7,1.2,8.3v1.3c0,9.6-4,17.4-12.1,23.4



									c-4.7,3-9.9,4.4-15.6,4.4h-18.3c-0.3-0.1-0.4-0.4-0.4-0.8V51.4C326.8,50.9,326.9,50.6,327.1,50.6z M332.6,56.3l-0.1,0.7v44.8



									l0.1,0.7h11.1c10.8,0,17.7-3.9,20.9-11.8c1.6-3.4,2.4-7.1,2.4-11.2c0-8.4-3.1-15-9.4-19.8c-3.5-2.2-8.1-3.4-13.7-3.4H332.6z"/>

                                </g>

                                <g>

                                    <path class="st6" d="M167.5,144.9c-0.2,0.9-0.5,1.8-1.2,2.7c-0.5,0.8-1.3,1.4-2.2,1.9c-1.5,0.8-3.3,1.3-5.1,1.3



									c-3.1,0-6.5-1.2-8.3-3.9l-0.1-0.1l2.4-2.2c1.4,2.9,6.3,4.1,9.2,2.3c1.1-0.6,1.7-1.4,1.7-2.3c0.1-0.9-0.3-1.8-1.2-2.6



									c-2.2-2-5.9-1.4-9-3.7c-1.4-1.3-2.1-2.9-2-4.5c0.2-1.7,1.3-3.1,3-4.1c1.3-0.7,2.9-1.2,4.4-1.2c0.4,0,0.4,0,1.1,0.1



									c2,0.2,3.8,1,5.1,2.1c0.5,0.4,0.8,0.9,1.2,1.4l-2.3,2.1c-1-1.5-2.9-2.6-5.2-2.6c-1,0-1.9,0.2-2.6,0.6c-0.8,0.5-1.3,1.1-1.3,1.8



									c-0.1,0.7,0.2,1.4,0.8,2c2.6,2,6.3,1.5,9,3.7c0.8,0.7,1.3,1.5,1.7,2.3C167.5,143,167.6,143.9,167.5,144.9z"/>

                                    <path class="st6" d="M184.8,150.8c-6,0-10.5-4.5-10.5-10v-9.2h-3.6v-3.1h3.6v-10h3.2v10h7.3v3.1h-7.3v9.2c0,3.7,3.1,6.8,7.3,6.8



									V150.8z"/>

                                    <path class="st6" d="M188,128.5h3.2V142c0,3.4,2.7,6.1,6.1,6.1c3.4,0,6.1-2.7,6.1-6.1v-13.5h3.2v22.3h-3.2v-1.9



									c-1.6,1.4-3.8,2.3-6.1,2.3c-5.1,0-9.3-4.1-9.3-9.2V128.5z"/>

                                    <path class="st6" d="M213.1,147.9c-2.2-2.1-3.4-5-3.4-8c0-3,1.2-5.9,3.4-8c2.1-2.1,5-3.4,8-3.4c3.1,0,6.2,1.3,8.3,3.6V115h3.2



									v35.8h-3.2v-3.1l-0.2,0.2c-2.1,2.1-5,3.3-8.1,3.3C218.1,151.2,215.2,150,213.1,147.9z M212.9,139.9c0,4.5,3.7,8.2,8.2,8.2



									c4.6,0,8.3-3.7,8.3-8.2v-0.4c-0.2-4.3-3.8-7.9-8.3-7.9C216.6,131.6,212.9,135.4,212.9,139.9z"/>

                                    <path class="st6" d="M235.8,122.9c0-1.2,1-2.1,2.1-2.1c1.2,0,2.2,0.9,2.2,2.1c0,1.2-1,2.1-2.2,2.1



									C236.7,125.1,235.8,124.1,235.8,122.9z M236.4,128.5h3.2v22.3h-3.2V128.5z"/>

                                    <path class="st6" d="M246.6,147.8c-2.2-2.1-3.4-5-3.4-8c0-3,1.2-5.9,3.4-8c2.1-2.1,5-3.4,8-3.4c3.1,0,5.9,1.2,8.1,3.4



									c2.2,2.1,3.4,5,3.4,8c0,3-1.2,5.9-3.4,8c-2.2,2.1-5,3.4-8.1,3.4C251.6,151.2,248.7,150,246.6,147.8z M246.4,139.9



									c0,4.5,3.7,8.2,8.2,8.2c4.6,0,8.3-3.7,8.3-8.2c0-4.6-3.7-8.2-8.3-8.2C250.1,131.6,246.4,135.3,246.4,139.9z"/>

                                </g>

                            </g>

                  </svg>

                    </a>
*/?>
                </div>
                <?php if (get_locale() == 'ru_RU'):
                    $id = 371;
                else:
                    $id = 573;
                endif;?>
                <div class="item col-md-3 sitemap"><a href="<?php echo get_the_permalink($id) ?>"><?php echo get_the_title($id); ?></a>

                </div>

                <div class="item col-md-4 copy">

                    <a href="<?php echo esc_url(home_url('/')) ?>">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-gray.svg" alt="logo">

                    </a><?php echo pll__('Copyright © 2017 LighthouseLogistics. All rights reserved.'); ?>

                </div>

            </div>

        </div>

    </div>



</footer>



</div> <!--end #wraper-->

<a href="#" id="up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>



<?php get_template_part('inc/popups'); ?>

<script>

	var callBackForm = document.querySelector('#wpcf7-f40-o2');

	var contactUsProd = document.querySelector('#wpcf7-f180-p496-o1');

	var youPriceProd = document.querySelector('#wpcf7-f179-p496-o2');

	if(callBackForm){
		callBackForm.addEventListener( 'wpcf7mailsent', function( event ) {
			ga('send', 'event', 'Knopka', 'ObratnyZvonok');
			gtag('event', 'send', {'event_category': 'ObratnyZvonok', 'event_action': 'Knopka'});  
		}, false );
	};

	if(contactUsProd){
	  contactUsProd.addEventListener( 'wpcf7mailsent', function( event ) {
		ga('send', 'event', 'Knopka', 'SvyzjitesSNami');
	  }, false );
	};

	if(youPriceProd){
	  youPriceProd.addEventListener( 'wpcf7mailsent', function( event ) {
		ga('send', 'event', 'Knopka', 'SvoyaCena');
	  }, false );
	};

</script>


<?php wp_footer(); ?>

</body>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym(54321399, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54321399" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</html>