<?php get_header('drinks') ?>

    <script>
        window.CONFIG = {
            page: 'drinks'
        }
    </script>


	<section class="how-it-works">
		<div class="wrapper how-it-works_position how-it-works_dd">
			<div>
				<p class="descript">
                    <?php $post = get_post($post_id = 3141); echo $post->post_content; ?>
				</p>
			</div>
		</div>
	</section>

	<section id="drinks" class="dd_background drinks_background"
           data-bg-src="//www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/backgrounds/drinks-bg.jpg?ver_1.01">
		<div class="dd_position wrapper">


			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Напитки</h3>
			</div>

				
			<div class="dd-block">
				<div class="main-carousel-cont">
					<div id="carousel" class="carousel slide" data-interval="false">	

						<div class="carousel-inner">

							<?php $posts = get_posts ("category_name=drinks&orderby=date&numberposts=25");
										$i = 0;
							?> 
							<?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
									
								<div class="tab-block__tab-item item <?php echo $i == 0 ? 'active' : ''; ?>">
									<div class="cuisine__item dd__item cuisine-drinks__item">

										<?php
											$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									?>

										<div class="cuisine__item-text-cont dd__item-text-cont">

											<h4 class="dd__title"><?php the_title(); ?></h4>


											<div data-cuisine-qount="5">
												<div class="cuisine__item-text-menu dd__item-text-menu">
												 	<?php the_content(); ?>
												</div>
											</div>
										</div>

										<div class="cuisine__item-img-cont">

											<div class="cuisine__item-img-block dd__item-img-block">

												<?php  
													if (has_post_thumbnail()) {
													  $thumb_id = get_post_thumbnail_id();
														$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

														echo '<img class="news-item__img" src="' . $thumb_url[0]  . '"  alt="Кроссфуд. Правильное питание - это просто" />';
													}
													else {
													    echo '<img class="news-item__img" src="' . get_bloginfo('template_directory') . '/src/img/cnt/cuisine/custom.jpg' . '"  alt="Кроссфуд. Правильное питание - это просто" />';
													}
												?>	
											</div>

											<div class="cuisine__item-price-block dd__item-price-block">
												<span class="cuisine__item-price-text" data-cuisine-qount="5"><span><?php echo get_post_meta( get_the_ID(), 'desserts_price', 1); ?></span> грн/500мл</span>
											</div>

                                            <div class="subscribe__button-cnt dd__button-cnt">
                                                <button class="button button_bordered subscribe__button-btn" data-meta-node="" data-target="form_4" data-action="activate">Заказать</button>
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
						
						<a href="#carousel" class="left carousel-control main-carousel__control dd__carousel-arrow" data-slide="prev">
						</a>
						<a href="#carousel" class="right carousel-control main-carousel__control dd__carousel-arrow" data-slide="next">
						</a>
					</div>
				</div>
			</div>

		</div>
	</section>

  <section class="familiar p-t-75">
    <p class="h3 text-center m-b-40">Обязательно ознакомьтесь с нашим меню вкусных и полезных
      <span class="bold text-green">десертов</span>!
    </p>

    <p class="h3 text-center m-b-40">
      <a class="button button_bordered header__button-btn pum-trigger" href="/desserts">Выбрать десерт</a>
    </p>
  </section>
<?php get_footer() ?>