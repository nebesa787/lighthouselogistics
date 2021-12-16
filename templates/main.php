<?php

/*

Template Name: Главная

*/

get_header();?>



<?php if (have_rows('slider')): ?>

    <div id="slider-wrap">

        <div id="slider">



            <?php while (have_rows('slider')):the_row();

                $image = get_sub_field('image'); ?>

                <div class="item">

                    <div class="item-in">

                        <?php echo '<img src="' . $image['url'] . '" alt="' . $image['title'] . '">'; ?>

                        <div class="text-wrap">

                            <div class="container">

                                <div class="text">

                                    <p class="year"><?php the_sub_field('year'); ?></p>

                                    <p class="title"><?php the_sub_field('model'); ?></p>

                                    <p class="price"><?php the_sub_field('price'); ?></p>

                                    <?php the_sub_field('description'); ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>



        </div>

        <div class="slider-nav">

            <button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i>

            </button>

            <button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i>

            </button>

        </div>

    </div>

<?php endif; ?>



<main>

    <?php

    $new_arrivals = get_field('new_arrivals');

    if ($new_arrivals):?>

        <div class="container">

            <p class="h1"><?php the_field('title_new_arrivals'); ?></p>

            <div class="row products">



                <?php foreach ($new_arrivals as $id): ?>

                    <div class="item col-md-4 col-xs-6">

                        <div class="image">



                            <?php $nalichie = get_the_terms($id, 'pa_nalichie');

                            if ($nalichie):

                                echo '<div class="mark gray"><span>' . $nalichie[0]->name . '</span> </div>';

                            endif; ?>



                            <a href="<?php echo get_the_permalink($id); ?>">

                                <?php if (has_post_thumbnail($id)):

                                    echo get_the_post_thumbnail($id, 'main_catalog');

                                else:

                                    echo sprintf('<img src="%s" alt="%s" height="257px" width="360px" />', esc_url(wc_placeholder_img_src()), esc_html__('Awaiting product image', 'woocommerce'));

                                endif; ?>



                            </a>

                        </div>

                        <div class="info">

                            <div class="top-info">

                                <a href="<?php echo get_the_permalink($id); ?>"

                                   class="h2"><?php echo get_the_title($id); ?></a>

                                <div class="price">

                                    <?php $_product = wc_get_product( $id );

                                    echo '<span>$ '.$_product->get_price().'</span>'?>

                                </div>

                            </div>



                            <?php

                            $probeg = get_the_terms($id, 'pa_probeg');

                            $korobka = get_the_terms($id, 'pa_korobka');

                            $obem = get_the_terms($id, 'pa_obem');

                            $privod = get_the_terms($id, 'pa_privod');

                            $tiptopliva = get_the_terms($id, 'pa_tip-topliva');

                            $god = get_the_terms($id, 'pa_god');

                            if ($probeg || $korobka || $obem || $privod || $tiptopliva || $god):?>

                                <div class="bottom-info">

                                    <div class="characteristics">

                                        <?php if ($probeg):

                                            echo '<p><img src="' . get_template_directory_uri() . '/images/i-road.svg" alt="">' . $probeg[0]->name . '</p>';

                                        endif;

                                        if ($korobka):

                                            echo '<p><img src="' . get_template_directory_uri() . '/images/i-gear.svg" alt="">' . $korobka[0]->name . '</p>';

                                        endif;

                                        if ($obem):

                                            echo '<p><img src="' . get_template_directory_uri() . '/images/i-engine.svg" alt="">' . $obem[0]->name . '</p>';

                                        endif;

                                        if ($privod):

                                            echo '<p><img src="' . get_template_directory_uri() . '/images/i-wheel.svg" alt="">' . $privod[0]->name . '</p>';

                                        endif;

                                        if ($tiptopliva):

                                            echo '<p><img src="' . get_template_directory_uri() . '/images/i-gas.svg" alt="">' . $tiptopliva[0]->name . '</p>';

                                        endif;

                                        if ($god):

                                            echo '<p><img src="' . get_template_directory_uri() . '/images/i-calendar.svg" alt="">' . $god[0]->name . '</p>';

                                        endif; ?>

                                    </div>

                                </div>

                            <?php endif; ?>



                        </div>

                    </div>

                <?php endforeach; ?>



            </div>



            <?php $catalog = get_field('catalog');

            if ($catalog):

                echo '<div class="text-center"><a href="' . $catalog . '" class="btn btn-wide">' . pll__('More cars') . '</a></div>';

            endif; ?>



        </div>

    <?php endif; ?>

</main>


<section class="main-selection-car" style="    margin-left: -20%; margin-right: -20%;">
		
					<div class="selection-body">
						<div class="container">
							<p class="h2" style="color:#FFFFFF;">Закажи себе авто из США с выгодой до -40% от рынка Украины</p>
							<?php echo do_shortcode('[contact-form-7 id="36219" title="Закажи"]');?>
							<p style="color:#FFFFFF; text-align:center;">Интересует конкретная модель или автомобиль, заполни форму и наши специалисты подберут лучший вариант</p>
						</div>
					</div>
				</section>
				<?php /*

<section class="main-selection-car">

    <div class="selection-head">

        <div class="container">

            <p class="h1"><?php echo pll__('Picking up a car'); ?></p>

            <p><?php echo pll__('Fill out the form, and we will pick up for you several options for Auto, according to your preferences'); ?></p>

        </div>

    </div>

    <div class="selection-body">

        <div class="container">

            <?php current_form(208); ?>

        </div>

    </div>

</section>

*/?>



<?php if (have_rows('how_working')): ?>

    <section class="main-how-work">

        <div class="container">

            <p class="h1"><?php the_field('title_how_working'); ?></p>



            <div class="items">

                <?php $i = 1;

                while (have_rows('how_working')):the_row(); ?>

                    <div class="item">

                        <div class="number">

                            <?php echo '<span>' . $i . '</span>';

                            $icon = get_sub_field('icon');

                            echo '<img src="' . $icon['sizes']['icon_76'] . '" alt="' . $icon['title'] . '">'; ?>

                        </div>

                        <p class="h3"><?php the_sub_field('title'); ?></p>

                        <?php if (have_rows('description')): ?>

                            <ul>

                                <?php while (have_rows('description')):the_row();

                                    echo '<li>' . get_sub_field('text') . '</li>';

                                endwhile; ?>

                            </ul>

                        <?php endif; ?>

                    </div>

                    <?php $i++;

                endwhile; ?>

            </div>

        </div>

    </section>

<?php endif; ?>



<?php $video = get_field('video_why');

if (have_rows('causes') || $video): ?>

    <section class="main-why">

        <div class="container">

            <p class="h1"><?php the_field('title_why'); ?></p>



            <div class="row">

                <?php if ($video):

                    echo '<div class="video-box col-md-6 col-xs-12">' . $video . '</div>';

                endif;



                if (have_rows('causes')): ?>

                    <div class="text-box col-md-12 col-xs-12">



                        <?php while (have_rows('causes')):the_row(); ?>

                            <div class="box">

                                <?php $icon = get_sub_field('icon');

                                echo '<img src="' . $icon['sizes']['icon_40'] . '" alt="' . $icon['title'] . '">'; ?>

                                <p class="h3"><?php the_sub_field('title') ?></p>

                                <?php the_sub_field('description'); ?>

                            </div>

                        <?php endwhile; ?>



                    </div>

                <?php endif; ?>

            </div>



        </div>

    </section>

<?php endif; ?>


<?php if (have_rows('faq')): ?>

    <section class="main-how-work">

        <div class="container">

            <p class="h1"><?php the_field('title_faq'); ?></p>



            <div class="items">

                <?php $i = 1;

                while (have_rows('faq')):the_row(); ?>

                    <div class="item">

                        <div class="number">

                            <?php echo '<span>' . $i . '</span>';

                            $icon = get_sub_field('icon');

                            echo '<img src="' . $icon['sizes']['icon_76'] . '" alt="' . $icon['title'] . '">'; ?>

                        </div>

                        <p class="h3"><?php the_sub_field('title'); ?></p>

                        <?php if (have_rows('description')): ?>

                            <ul>

                                <?php while (have_rows('description')):the_row();

                                    echo '<li>' . get_sub_field('text') . '</li>';

                                endwhile; ?>

                            </ul>

                        <?php endif; ?>

                    </div>

                    <?php $i++;

                endwhile; ?>

            </div>

        </div>

    </section>

<?php endif; ?>


<?php if (have_rows('reviews')): ?>

    <section class="main-reviews">

        <div class="container">

            <p class="h1"><?php the_field('title_reviews'); ?></p>



            <div class="review-carousel">

                <?php while (have_rows('reviews')):the_row();

                    $img_auto = get_sub_field('img_auto');

                    $avatar = get_sub_field('avatar'); ?>

                    <div class="item">

                        <div class="image">

                            <?php echo '<img src="' . $img_auto['sizes']['medium'] . '" alt="' . $img_auto['title'] . '">'; ?>

                        </div>

                        <div class="info">

                            <div class="top-info">

                                <div class="photo">

                                    <?php echo '<img src="' . $avatar['sizes']['icon_76'] . '" alt="' . $avatar['title'] . '">'; ?>

                                </div>

                                <div>

                                    <p class="name"><?php the_sub_field('name'); ?></p>

                                    <p class="city"><?php the_sub_field('city'); ?></p>

                                </div>

                            </div>

                            <div class="text">

                                <?php the_sub_field('review'); ?>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            </div>

            <div class="slider-nav">

                <button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i>

                </button>

                <button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i>

                </button>

            </div>

        </div>

    </section>

<?php endif; ?>



<?php if (have_rows('auctions')): ?>

    <section class="main-auctions">

        <div class="container">

            <p class="h1"><?php the_field('title_auctions'); ?></p>

            <div class="auctions-carousel">



                <?php while (have_rows('auctions')):the_row();

                    $logo = get_sub_field('logo');

                    $link = get_sub_field('link');?>

                    <div class="item">

                        <div class="image">

                            <?php echo '<a href="'.$link.'"><img src="' . $logo['sizes']['icon_190'] . '" alt="' . $logo['title'] . '"></a>'; ?>

                        </div>

                        <?php echo '<a href="'.$link.'" class="h4">'.get_sub_field('name').'</a>';?>

                        <div class="text"><?php the_sub_field('description');?></div>

                    </div>

                <?php endwhile; ?>



            </div>

            <div class="slider-nav">

                <button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i>

                </button>

                <button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i>

                </button>

            </div>

        </div>

    </section>

<?php endif; ?>



<?php get_template_part('template-parts/text-bottom'); ?>



<?php get_footer(); ?>

