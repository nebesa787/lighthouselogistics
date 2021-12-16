<?php
/*
Template Name: Растаможка
*/
get_header(); ?>

    <main>
        <div class="customs-clearing">

            <div class="page-head">
                <div class="container">

                    <?php get_template_part('inc/breadcrumbs');
                    the_title('<h1>', '</h1>');

                    while (have_posts()):the_post();
                        if (!empty(get_the_content())):
                            echo ' <div class="short-desc">';
                            the_content();
                            echo '</div>';
                        endif;
                    endwhile; ?>

                </div>
            </div>

            <?php $content = get_field('content');
            if ($content):?>
                <div class="container">
                    <div class="article">
                        <?php echo $content ?>

                    </div>
                </div>
            <?php endif; ?>
			
			<section class="main-selection-car" >
		
				<div class="selection-body">
					<div class="container">
						<p class="h2" style="color:#FFFFFF;">Закажи себе авто из США с выгодой до -40% от рынка Украины</p>
						<?php echo do_shortcode('[contact-form-7 id="36219" title="Закажи"]');?>
						<p style="color:#FFFFFF; text-align:center;">Интересует конкретная модель или автомобиль, заполни форму и наши специалисты подберут лучший вариант</p>
					</div>
				</div>
			</section>

            <?php get_template_part('template-parts/advantages-block');?>

            <div class="container calculation-container">
                <p class="h1"><?php the_field('title_calc');?></p>

                <?php get_template_part('inc/calc/customs');?>

            </div>
            <?php theme_sidebar('slogan'); ?>
        </div>
    </main>

<?php theme_sidebar('contact_phone'); ?>

<?php get_template_part('template-parts/text-bottom'); ?>

<?php get_footer(); ?>