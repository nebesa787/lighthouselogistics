<?php

/*

Template Name: Под ключ

*/

get_header(); ?>



<main>



	<div class="delivery">

		<div class="page-head">

			<div class="container">

				<?php the_title('<h1>', '</h1>');

				get_template_part('inc/breadcrumbs'); ?>

			</div>

		</div>



		<div class="map-delivery">

			<div class="map-delivery-wrap">

				

            </div>

            <div class="map-delivery-bottom">
				<div class="container">
					<ul class="map-delivery-nav">
							<li><a data-number="1" href="#">Seattle - 40-45 дней</a></li>
							<li><a data-number="2" href="#">Los Angeles - 35-50 дней</a></li>
							<li><a data-number="3" href="#">Houston -  40 дней</a></li>
							<li><a data-number="4" href="#">Savannah - 35 дней</a></li>
							<li><a data-number="6" href="#">Newark - 35 дней</a></li>
                  	</ul>
                </div>
            </div>

		</div>



		<div class="container">

			<div class="article">

				<p class="h1">Калькулятор стоимости доставки авто из США</p>
				
				
				<div class="text">
					<h2>Легковые автомобили </h2>
					<p>Среди автомобилей представленных на рынке США наши клиенты чаще всего заказывают доставку авто таких марок: BMW, Mercedes-Benz, Audi, Toyota, KIA, Ford, Volkswagen, Mazda, Nissan, Honda, Mitsubushi, Chevrolet, Lexus, Opel.</p>
					<h2>Электромобили</h2>
					<p>С каждым днем популярность электромобилей в нашей стране растет. Несмотря на то, что стоимость покупки такого автомобиля может быть больше по сравнению с авто на ДВС, но при эксплуатации такие автомобили более экономичные. </p>
					<p>Также немаловажную роль играет, то что действие Закона 2245, согласно которому не нужно платить НДС и акцизный сбор, продлили до 2022 года, поэтому покупка электромобилей в этот период наиболее выгодная.</p>
					<p>Мы рекомендуем обратить свой выбор на такие торговые марки: Tesla, Nissan, Ford, BMW, Hyundai, KIA, Smart, Renault, Volkswagen, Opel.</p>

				</div>		
				
				
				
				<section class="main-selection-car" style="    margin-left: -20%; margin-right: -20%;">
		
					<div class="selection-body">
						<div class="container">
							<p class="h2" style="color:#FFFFFF;">Закажи себе авто из США с выгодой до -40% от рынка Украины</p>
							<?php echo do_shortcode('[contact-form-7 id="36219" title="Закажи"]');?>
							<p style="color:#FFFFFF; text-align:center;">Интересует конкретная модель или автомобиль, заполни форму и наши специалисты подберут лучший вариант</p>
						</div>
					</div>
				</section>
				
				<br>
				<br>
				
				
				<div class="text">
					<br>
					<h2>РАСЧЕТ СТОИМОСТИ</h2>
					<br>
				</div>		

                
				<?php get_template_part('inc/calc/pod_kluch'); ?>
				
				
				
				
				
				
				
				
				
                

            </div>

        </div>



        <div class="help-block">
			<div class="container">
				<p class="h1">Преимущества работы с Lighthouse Logistics</p>
				<div class="help-block-wrap">
					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon">
									<img src="https://americancars.in.ua/wp-content/uploads/2017/12/icon-help-1-1.svg" alt="icon-help-1">
								</div>
								<p class="h3">Выгодная доставка</p>
								<div class="text">
									<p>Компания оперирует 4 погрузочными терминалами, расположенными в ключевых портах Соединенных Штатов, что позволяет значительно экономить на доставке автомобилей.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon">
									<img src="https://americancars.in.ua/wp-content/uploads/2017/12/icon-help-2.svg" alt="icon-help-2">                                
								</div>
								<p class="h3">Без посредников</p>
								<div class="text">
									<p>Мы – логистическая компания, которая официально сотрудничает с аукционами в США. Благодаря этому мы можем предложить цены на автомобили и доставку от первого поставщика услуги.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon">
									<img src="https://americancars.in.ua/wp-content/uploads/2017/12/icon-help-3.svg" alt="icon-help-3">                                
								</div>
								<p class="h3">Гарантия качества</p>
								<div class="text">
									<p>Мы тщательно проверяем историю автомобиля перед его покупкой. С нами только качественные автомобили!</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon">
									<img src="https://americancars.in.ua/wp-content/uploads/2017/12/icon-help-4.svg" alt="icon-help-4">                               
								</div>
								<p class="h3">Цена на аукционе</p>
								<div class="text">
									<p>Доверив покупку авто профессионалам, вы получаете: самые низкие аукционные сборы и цены на доставку.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



    </div>

</main>



	




          <?php theme_sidebar('contact_phone'); ?>




      </div>



  </div>

</div>







<?php get_template_part('template-parts/text-bottom'); ?>



<?php get_footer(); ?>