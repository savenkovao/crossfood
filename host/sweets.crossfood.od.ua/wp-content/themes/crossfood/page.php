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
					
					

					<img class="steps__img-desktop" src="<?php echo esc_url( get_template_directory_uri()) ?>/src/img/dsg/steps.png" alt="Crossfood - как это работает">
					<img class="steps__img-mobile" src="<?php echo esc_url( get_template_directory_uri())?>/src/img/dsg/steps-mobile.png" alt="Crossfood - как это работает">

					<?php $post = get_post($post_id = 27); echo $post->post_content; ?>
				</div>

				<?php $post = get_post($post_id = 669); echo $post->post_content; ?>
			</div>
			
		</div>
	</section>

	<section id="advantages" class="advantages advantages_background" style="display: none;">
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


	<section id="our-team" class="our-team" style="display: none;">
		<div class="wrapper our-team_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Наша команда</h3>	
			</div>

			<div id="team-slider" class="team-block our-team_team-block-pos">

				<div class="team-block__item"> 
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/cnt/team/item-1.jpg" alt="Мария Саввина - нутрициолог">					
					<ol>
						<li>Мария Саввина</li>
						<li>Фитнес-тренер, дипломированный спортивный нутрициолог</li>
					</ol>											
				</div>
				<div class="team-block__item"> 
					<img class=" team-b" src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/cnt/team/item-2.jpg" alt="Иван Воробьёв - шеф">
					<ol>
						<li>Иван Воробьёв</li>
						<li>Бренд-шеф, "зеленый" Шеф Одессы, эксперт здоровой кулинарии</li>
					</ol>					
				</div>
				<div class="team-block__item"> 					
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/cnt/team/item-3.jpg" alt="Ольга Янгичер - диетолог">
					<ol>
						<li>Ольга Янгичер</li>
						<li>Врач-диетолог, практик с 15 летним опытом и специалист в области спортивного питания</li>
					</ol>					
				</div>
			</div>


		</div>
	</section>


	<section id="desserts" class="desserts_background">
		<div class="desserts_position wrapper">


			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Десерты</h3>	
			</div>

				
			<div class="desserts-block">
				<div class="main-carousel-cont">
					<div id="carousel" class="carousel slide" data-interval="false">	

						<div class="carousel-inner">

							<?php $posts = get_posts ("category_name=desserts&orderby=date&numberposts=7"); 
										$i = 0;
							?> 
							<?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
									
								<div class="tab-block__tab-item item <?php echo $i == 0 ? 'active' : ''; ?>">
									<div class="cuisine__item desserts__item">

										<?php
											$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									?>

										<div class="cuisine__item-text-cont desserts__item-text-cont">

											<div class="desserts__title"><?php the_title(); ?></div>


											<div data-cuisine-qount="5">
												<div class="cuisine__item-text-menu desserts__item-text-menu">
												 	<?php the_content(); ?>
												</div>
												<ul class="cuisine__item-text-calories">
												 	<li><u class="cuisine__item-text-highlited"><?php echo get_post_meta( get_the_ID(), 'desserts_cal', 1); ?></u></li>
												 	<li>Белки - <?php echo get_post_meta( get_the_ID(), 'desserts_prot', 1); ?></li>
												 	<li>Жиры - <?php echo get_post_meta( get_the_ID(), 'desserts_fat', 1); ?></li>
												 	<li>Углеводы - <?php echo get_post_meta( get_the_ID(), 'desserts_car', 1); ?></li>
												 	
												</ul>
											</div>
										</div>

										<div class="cuisine__item-img-cont">

											<div class="cuisine__item-img-block desserts__item-img-block">

												<?php  
													if (has_post_thumbnail()) {
													  $thumb_id = get_post_thumbnail_id();
														$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

														echo '<img class="news-item__img" src="' . $thumb_url[0]  . '"  alt="Кроссфуд. Правильное питание - это просто" />';
													}
													else {
													    echo '<img class="news-item__img" src="' . get_bloginfo('template_directory') . '/src/img/dsg/backgrounds/news-thumbnail.jpg' . '"  alt="Кроссфуд. Правильное питание - это просто" />';
													}
												?>	
											</div>

											<div class="cuisine__item-price-block">
												<span class="cuisine__item-price-text" data-cuisine-qount="5"><span><?php echo get_post_meta( get_the_ID(), 'desserts_price', 1); ?></span> грн/100г.</span>
											</div>

										</div>


									</div>
								</div>

							<?php $i++; endforeach; else:	?>

								<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

							<?php 
								wp_reset_postdata();
							endif; ?>
						</div>
						
						<a href="#carousel" class="left carousel-control main-carousel__control desserts__carousel-arrow" data-slide="prev">
						</a>
						<a href="#carousel" class="right carousel-control main-carousel__control desserts__carousel-arrow" data-slide="next">
						</a>
					</div>
				</div>
			</div>

			

			<div class="cuisine-notation_position desserts-notation_position">
				<div class="cuisine-notation desserts-notation">
					<div class="subscribe__button-cnt">
						<button class="button button_bordered subscribe__button-btn" data-meta-node="" data-target="form_3" data-action="activate">Заказать</button>
					</div>
				</div>
			</div>



		</div>
	</section>


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



	<?php get_footer() ?>