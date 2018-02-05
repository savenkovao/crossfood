<?php get_header() ?>
    <script>
        window.CONFIG = {
            page: 'home'
        }
    </script>

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
					
					

					<img class="steps__img-desktop" src="http://www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/steps.png" alt="Crossfood - как это работает">
					<img class="steps__img-mobile" src="http://www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/steps-mobile.png" alt="Crossfood - как это работает">

					<?php $post = get_post($post_id = 27); echo $post->post_content; ?>
				</div>

				<?php $post = get_post($post_id = 669); echo $post->post_content; ?>
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

	<section class="subscribe subscribe_background">
		<div class="wrapper subscribe_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Планы подписок</h3>	
			</div>

			<div class="tab-block subscribe_tab-block-pos">

				<div  id="subscribe" class="tab-block__navigation">
					<div data-action="data-subscribe" data-identifier="stand" data-meta-node class="tab-block__nav-button subscribe__nav-button active">
						<span>Стандарт</span>
					</div>

					<div data-action="data-subscribe" data-identifier="fit" data-meta-node class="tab-block__nav-button subscribe__nav-button">
						<span>Фитнес</span>
					</div>

					<div data-action="data-subscribe" data-identifier="prem" data-meta-node class="tab-block__nav-button subscribe__nav-button">
						<span>Премиум</span>
					</div>
					<div data-action="data-subscribe" data-identifier="veg" data-meta-node class="tab-block__nav-button subscribe__nav-button">
						<span>Без Мяса</span>
					</div>

				</div>

				<div id="subscribe-items" class="tab-block__tabs subscribe_tabs-position">
					<div data-subscribe="stand" class="tab-block__tab-item">
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 1614); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>

						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 1616); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 1618); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 1621); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>
					</div>

					<div data-subscribe="fit" class="tab-block__tab-item" style="display: none;">
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 105); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>

						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 107); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 109); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 111); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>
					</div>

					<div data-subscribe="prem" class="tab-block__tab-item" style="display: none;" >
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 353); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 355); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 357); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>						

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 359); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>
					</div>

					<div data-subscribe="veg" class="tab-block__tab-item" style="display: none;" >
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 361); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 363); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 365); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>						

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 367); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>
					</div>

				</div>	

			</div>
		</div>
	</section>

	<section id="menu" class="cuisine cuisine_background">
		<div class="wrapper cuisine_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Наше меню</h3>
			</div>

			<div class="tab-block cuisine-block_position">

				<div id="cuisine-week" class="tab-block__navigation cuisine-block__navigation_pos">
					<div data-identifier="mo" data-meta-node class="tab-block__nav-button cuisine-block__button active">

						<span class="cuisine-block__button-desktop">Понедельник</span>
						<span  class="cuisine-block__button-mobile">Пн</span>

					</div>
					<div data-identifier="tu" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Вторник</span>
						<span  class="cuisine-block__button-mobile">Вт</span>

					</div>
					<div data-identifier="we" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Среда</span>
						<span  class="cuisine-block__button-mobile">Ср</span>

					</div>
					<div data-identifier="th" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Четверг</span>
						<span  class="cuisine-block__button-mobile">Чт</span>

					</div>
					<div data-identifier="fr" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Пятница</span>
						<span  class="cuisine-block__button-mobile">Пт</span>

					</div>
					<div data-identifier="sa" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Суббота</span>
						<span  class="cuisine-block__button-mobile">Сб</span>

					</div>
					<div data-identifier="su" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Воскресенье</span>
						<span  class="cuisine-block__button-mobile">Вс</span>

					</div>
				</div>
					
				<div id="all-cuisines" class="tab-block__tabs cuisine__tabs-position">

			
					<!-- stand-1-xxx-yy -->
					
					<div class="tab-block__tab-item">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1376); echo $post->post_content; ?>
						</div>
					</div>

				</div>
			</div><!-- 

			 --><div class="cuisine-notation_position">
				<p class="cuisine-notation">
					
					<?php $post = get_post($post_id = 195); echo $post->post_content; ?>

				</p>
				<p class="notation-text">
					Данное меню предоставлено в ознакомительных ценах, возможно внесение изменений.
				</p>
			</div>
			
		</div>
	</section>


    <section id="desserts-drinks"  class="desserts-drinks desserts-drinks_position wrapper" style="display: none;">
        <div class="desserts-drink-container">
            <p class="descript">
                <?php $post = get_post($post_id = 3098); echo $post->post_content; ?>
            </p>
        </div>

        <div class="desserts-drink-content">
            <div class="desserts-drinks__item desserts-drinks__desserts-block">
                <div class="title-3">
                    <h3 class="title-3__h3 title-3__h3_dark hr-line">Десерты</h3>
                </div>

                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ipsa quis similique sit
                    tenetur. At atque aut distinctio dolore impedit nam natus nihil numquam reprehenderit voluptate.
                    Asperiores ea laudantium velit.
                </div>
            </div>

            <div class="desserts-drinks__item desserts-drinks__drinks-block">
                <div class="title-3">
                    <h3 class="title-3__h3 title-3__h3_dark hr-line">Напитки</h3>
                </div>

                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cum, delectus dignissimos
                    eligendi error, eveniet fugit impedit iste neque non omnis placeat quam quod repellendus repudiandae
                    sed temporibus tenetur ullam!
                </div>
            </div>
        </div>


    </section>


	<section id="news" class="news news_position wrapper">
		<div class="title-3">
			<h3 class="title-3__h3 title-3__h3_dark hr-line">Статьи</h3>	
		</div>
		<div class="news-block">
			<div class="main-carousel-cont">
				<div id="carousel" class="carousel slide" data-interval="false">	

					<div class="carousel-inner">

						<?php $posts = get_posts ("category_name=news&orderby=date&numberposts=3"); 
									$i = 0;
						?> 
						<?php if ($posts) : ?>
						<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
								
							<div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
								<div class="news-item">

								<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
								?>
				
									<div class="news-item__img-cont">


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
		
									<div class="news-item__descr-cont">
										<div class="news-item__title-cont">
											<h4  class="news-item__title"><?php the_title(); ?></h4>
										</div>
				
										<div class="news-item__req-cont">
											<p class="news-item__author">Автор: <?php echo get_post_meta( get_the_ID(), 'news_author', 1); ?></p>
											<p class="news-item__date"><?php the_modified_date(); ?></p>
										</div>
				
										<div class="news-item__txt-cont">
											<div  class="news-item__txt"><?php the_excerpt(); ?></div>
										</div>
				
				
										<div class="news-item__read-cont">
											<a href="<?php the_permalink() ?>" class="button button_filled news__button-btn">Читать дальше</a>
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
					
					<a href="#carousel" class="left carousel-control main-carousel__control news__carousel-arrow" data-slide="prev">
					</a>
					<a href="#carousel" class="right carousel-control main-carousel__control news__carousel-arrow" data-slide="next">
					</a>
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