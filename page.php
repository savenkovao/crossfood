<?php get_header() ?>

	<section class="how-it-works">
		<div class="wrapper  how-it-works_position">
			
			<div>
				<p class="descript">
					
						<?php $post = get_post($post_id = 25); echo $post->post_content; ?>

				</p>
			</div>				

			<div id="how-it-works" class="title-3 how-it-works_title-3-position">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Как это работает</h3>	
			</div>	

			<div class="how-it-works_steps-pos">
				<div class="steps">
					
					<?php $post = get_post($post_id = 27); echo $post->post_content; ?>

					<img class="steps__img-desktop" src="<?php echo esc_url( get_template_directory_uri()) ?>/src/img/dsg/steps.png" alt="Crossfood - как это работает">
					<img class="steps__img-mobile" src="<?php echo esc_url( get_template_directory_uri())?>/src/img/dsg/steps-mobile.png" alt="Crossfood - как это работает">
				</div>
			</div>
			
		</div>
	</section>

	<section id="advantages" class="advantages advantages_background">
		<div class="wrapper advantages_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Преимущества</h3>	
			</div>

			<div class="advantage-block advantages_advantage-block-pos">
				<div class="advantage-block__item"> 
						<?php $post = get_post($post_id = 46); echo $post->post_content; ?>
				</div>
			</div>


		</div>
	</section>


	<section id="our-team" class="our-team">
		<div class="wrapper our-team_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Наша команда</h3>	
			</div>

			<div id="team-slider" class="team-block our-team_team-block-pos">

				<div data-action="sl" data-meta-node class="team-block__item sl">					

					<?php $post = get_post($post_id = 53); echo $post->post_content; ?>
											
				</div>

				<div data-action="ml" data-meta-node class="team-block__item ml">

					<?php $post = get_post($post_id = 55); echo $post->post_content; ?>
											
				</div>

				<div data-action="l" data-meta-node class="team-block__item l">

					<?php $post = get_post($post_id = 57); echo $post->post_content; ?>
						
				</div>

				<div data-action="mr" data-meta-node class="team-block__item mr">					

					<?php $post = get_post($post_id = 59); echo $post->post_content; ?>
					
				</div>
				
				<div data-action="sr" data-meta-node class="team-block__item sr">

					<?php $post = get_post($post_id = 61); echo $post->post_content; ?>
					
				</div>

			</div>
		</div>
	</section>


	<section class="subscribe subscribe_background">
		<div class="wrapper subscribe_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Планы подписок</h3>	
			</div>

			<div class="tab-block subscribe_tab-block-pos">

				<div  id="subscribe" class="tab-block__navigation">
					<div data-action="data-subscribe" data-identifier="fit" data-meta-node data-highlight="subscribe__nav-button_active" class="tab-block__nav-button subscribe__nav-button subscribe__nav-button_active">Fitnes</div>
					<div data-action="data-subscribe" data-identifier="prem" data-meta-node data-highlight="subscribe__nav-button_active" class="tab-block__nav-button subscribe__nav-button">Premium</div>
				</div>

				<div id="subscribe-items" class="tab-block__tabs subscribe_tabs-position">
					
					<div data-subscribe="fit" class="tab-block__tab-item">
						
						<div data-identifier="sl" data-meta-node data-highlight="subscribe__item-active" class="subscribe__item subscribe__item-col-2 subscribe__item-active">
							
							<?php $post = get_post($post_id = 105); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>

						</div>
						<div data-identifier="pow" data-meta-node data-highlight="subscribe__item-active" class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 107); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

					</div>

					<div data-subscribe="prem" class="tab-block__tab-item disable" >
						
						<div data-identifier="reg" data-meta-node data-highlight="subscribe__item-active" class="subscribe__item subscribe__item-col-2 subscribe__item-active">
							
							<?php $post = get_post($post_id = 109); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="veg" data-meta-node data-highlight="subscribe__item-active" class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 111); echo $post->post_content; ?>						

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

					</div>

				</div>	

			</div>
		</div>
	</section>

	<section class="cuisine cuisine_background">
		<div class="wrapper cuisine_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Наше меню</h3>	
			</div>

			<div class="tab-block cuisine-block_position">

				<div id="cuisine-week" class="tab-block__navigation cuisine-block__navigation_pos">
					<div data-identifier="mo" data-meta-node data-highlight="cuisine-block__button_active" class="tab-block__nav-button cuisine-block__button cuisine-block__button_active">

						<span class="cuisine-block__button-desktop">Понедельник</span>
						<span  class="cuisine-block__button-mobile">Пн</span>

					</div>
					<div data-identifier="tu" data-meta-node data-highlight="cuisine-block__button_active" class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Вторинк</span>
						<span  class="cuisine-block__button-mobile">Вт</span>

					</div>
					<div data-identifier="we" data-meta-node data-highlight="cuisine-block__button_active" class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Среда</span>
						<span  class="cuisine-block__button-mobile">Ср</span>

					</div>
					<div data-identifier="th" data-meta-node data-highlight="cuisine-block__button_active" class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Четверг</span>
						<span  class="cuisine-block__button-mobile">Чт</span>

					</div>
					<div data-identifier="fr" data-meta-node data-highlight="cuisine-block__button_active" class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Пятница</span>
						<span  class="cuisine-block__button-mobile">Пт</span>

					</div>
					<div data-identifier="sa" data-meta-node data-highlight="cuisine-block__button_active" class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Суббота</span>
						<span  class="cuisine-block__button-mobile">Сб</span>

					</div>
					<div data-identifier="su" data-meta-node data-highlight="cuisine-block__button_active" class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Воскресенье</span>
						<span  class="cuisine-block__button-mobile">Вс</span>

					</div>
				</div>
					
				<div id="cuisines_3_5" class="tab-block__3-5-cuisines">
					<span data-action="data-cuisine-qount" data-identifier="3" data-meta-node data-highlight="tab-block__3-5-cuisines_active" class="tab-block__3-cuisines">3 блюда</span>
					<span> / </span>
					<span data-action="data-cuisine-qount" data-identifier="5" data-meta-node data-highlight="tab-block__3-5-cuisines_active" class="tab-block__5-cuisines tab-block__3-5-cuisines_active">5 блюд</span>
				</div>

				<div id="all-cuisines" class="tab-block__tabs cuisine__tabs-position">



				

						<div id="fit-sl-mo" class="tab-block__tab-item">
							<div class="cuisine__item">
								
								<?php $post = get_post($post_id = 130); echo $post->post_content; ?>	

							</div>
						</div>

						<div id="fit-sl-tu" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 134); echo $post->post_content; ?>

							</div>
						</div>

						<div id="fit-sl-we" class="tab-block__tab-item disable">
							<div class="cuisine__item">
								
								<?php $post = get_post($post_id = 139); echo $post->post_content; ?>

							</div>
						</div>

						<div id="fit-sl-th" class="tab-block__tab-item disable">
							<div class="cuisine__item">
								
								<?php $post = get_post($post_id = 141); echo $post->post_content; ?>

							</div>
						</div>

						<div id="fit-sl-fr" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 143); echo $post->post_content; ?>

							</div>
						</div>

						<div id="fit-sl-sa" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 145); echo $post->post_content; ?>								

							</div>
						</div>

						<div id="fit-sl-su" class="tab-block__tab-item disable">
							<div class="cuisine__item">
								
								<?php $post = get_post($post_id = 147); echo $post->post_content; ?>	

							</div>
						</div>

						<div id="fit-pow-mo" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 150); echo $post->post_content; ?>	

							</div>
						</div>

						<div id="fit-pow-tu" class="tab-block__tab-item disable">
							<div class="cuisine__item">
								
								<?php $post = get_post($post_id = 152); echo $post->post_content; ?>	

							</div>
						</div>

						<div id="fit-pow-we" class="tab-block__tab-item disable">
							<div class="cuisine__item">
								
								<?php $post = get_post($post_id = 154); echo $post->post_content; ?>	

							</div>
						</div>

						<div id="fit-pow-th" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 156); echo $post->post_content; ?>

							</div>
						</div>

						<div id="fit-pow-fr" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 158); echo $post->post_content; ?>

							</div>
						</div>

						<div id="fit-pow-sa" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 160); echo $post->post_content; ?>

							</div>
						</div>

						<div id="fit-pow-su" class="tab-block__tab-item disable">
							<div class="cuisine__item">
								
								<?php $post = get_post($post_id = 162); echo $post->post_content; ?>

							</div>
						</div>


						<div id="prem-reg-mo" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 164); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-reg-tu" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 166); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-reg-we" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 168); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-reg-th" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 170); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-reg-fr" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 172); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-reg-sa" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 174); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-reg-su" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 176); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-veg-mo" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 178); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-veg-tu" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 180); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-veg-we" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 182); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-veg-th" class="tab-block__tab-item disable">
							<div class="cuisine__item">

									<?php $post = get_post($post_id = 184); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-veg-fr" class="tab-block__tab-item disable">
							<div class="cuisine__item">+

								<?php $post = get_post($post_id = 186); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-veg-sa" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 189); echo $post->post_content; ?>

							</div>
						</div>

						<div id="prem-veg-su" class="tab-block__tab-item disable">
							<div class="cuisine__item">

								<?php $post = get_post($post_id = 191); echo $post->post_content; ?>

							</div>
						</div>
	
				</div>

			</div><!-- 

			 --><div class="cuisine-notation_position">
				<p class="cuisine-notation">
					
					<?php $post = get_post($post_id = 195); echo $post->post_content; ?>

				</p>
			</div>
			
		</div>
	</section>

<!-- 	<section class="our-video">
		<div class="wrapper">
			
		</div>
	</section>


	<section id="discount" class="discount">
		<div class="wrapper">
			
		</div>
	</section> -->


	<section class="reviews reviews_background">
		<div class="wrapper reviews_position">
			<div id="reviews" class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Отзывы</h3>	
			</div>
			
			<div id="reviews-slider" data-slides-onpage="3" class="slider reviews-slider">
				
				<?php $post = get_post($post_id = 200); echo $post->post_content; ?>
				
				<div id="reviews-slider-nav-arw">
					<div data-action="left" data-meta-node class="slider__arrow  slider_arrow-left reviews-slider__arrow reviews-slider__arrow-left"></div>
					<div data-action="right" data-meta-node class="slider__arrow  slider_arrow-right reviews-slider__arrow reviews-slider__arrow-right"></div>
				</div>
					
				<div id="reviews-slider-nav-btn" class="slider__btn-nav reviews-slider__btn-nav"></div>
			</div>



			<div class="reviews-hashtag-block">
				<?php $post = get_post($post_id = 215); echo $post->post_content; ?>
			</div>
			
			
		</div>
	</section>

	<section id="forms">

		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>

	</section>

	<?php get_footer() ?>