<?php

/*

Template Name: Контакты

*/

get_header(); ?>



<main>

    <div class="page-head">

        <div class="container">

            <?php the_title('<h1>', '</h1>');

            get_template_part('inc/breadcrumbs'); ?>

        </div>

    </div>

    <div class="contacts-page">

        <div class="container">

            <div class="row sm-padding">

                <div class="col-md-8">
					<div class="map" id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1269.5472535040205!2d30.486815258221743!3d50.476584301810966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cdbf3efd1d25%3A0x675c5971a6bb4a07!2z0JDQstGC0L4g0Lcg0L_RgNC-0LHRltCz0L7QvCDQtyDQkNC80LXRgNC40LrQuCDQstGW0LQgTGlnaHRob3VzZSBMb2dpc3RpY3M!5e0!3m2!1sru!2sua!4v1581249592053!5m2!1sru!2sua" width="100%" height="360" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>

				 <?php /*
                    <?php


                    if( have_rows('mapia') ):

                        ?>

                        <div class="map" id="map">
                            <?php while ( have_rows('mapia') ) : the_row(); 
                                $location = get_sub_field('map');?>
                                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>

                            <?php endwhile; ?>
                        </div>

                    <?php endif; ?>



                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAyPDxPiOp8rBprU5B_hdobbip3ps5KuOM"></script>

                    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>

*/?>

                    <div class="row contacts-info">



                        <?php $address = get_field('address');
                        $address_2 = get_field('address_2');

                        $email = get_field('email');

                        if ($address || $email):?>



                            <div class="col-md-6">

                                <?php if ($address || $address_2):

                                    echo '<p class="address">' . $address . '</p>';
                                    echo '<p class="address">' . $address_2 . '</p>';

                                endif;

                                if ($email):

                                    echo '<p class="email"><a href="mailto:' . $email . '">' . $email . '</a></p>';

                                endif; ?>

                            </div>



                        <?php endif;



                        if (have_rows('phones')): ?>



                            <div class="col-md-6">



                                <?php while (have_rows('phones')): the_row();

                                    $phone = get_sub_field('phone');

                                    $vowels = array("(", ")", " ", "-");

                                    $phone_int = str_replace($vowels, "", $phone);

                                    echo '<p class="tel"><a href="tel:' . $phone_int . '">' . $phone . ';</a></p>';

                                endwhile; ?>



                            </div>



                        <?php endif; ?>



                    </div>



                </div>

                <div class="col-md-4">



                    <div class="white-box">

                        <div class="head"><?php echo pll__('Contact us'); ?></div>

                        <div class="box-body row">

                            <div class="white-form">



                                <?php current_form(22); ?>



                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>

</main>


<section class="main-selection-car" >
		
		<div class="selection-body">
			<div class="container">
				<p class="h2" style="color:#FFFFFF;">Закажи себе авто из США с выгодой до -40% от рынка Украины</p>
				<?php echo do_shortcode('[contact-form-7 id="36219" title="Закажи"]');?>
				<p style="color:#FFFFFF; text-align:center;">Интересует конкретная модель или автомобиль, заполни форму и наши специалисты подберут лучший вариант</p>
			</div>
		</div>
	</section>



<?php get_template_part('template-parts/text-bottom'); ?>

<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "address": {
      "@type": "PostalAddress",
      "addressLocality": "<?php echo $address;?>"

  },
  "image" : "<?php echo get_home_url('/');?>/wp-content/themes/lighthouselogistics/images/logo.svg",
  "name": "Lighthouse Logistics",
  "telephone": "<?php echo $phone;?>",
  "email": "<?php echo $email;?>",
  "priceRange": "100"
}

</script>

<?php get_footer(); ?>