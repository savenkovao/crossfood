<?php get_header('desserts') ?>

    <script>
        window.CONFIG = {
            page: 'desserts'
        }
    </script>


	<section class="how-it-works">
		<div class="wrapper how-it-works_position how-it-works_dd">
			<div>
				<p class="descript">
            <?php $post = get_post($post_id = 3090); echo $post->post_content; ?>
				</p>
			</div>
		</div>
	</section>

	<section id="dd" class="dd_background desserts_background">
		<div class="dd_position wrapper">


			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Ресторан Crossfood</h3>
			</div>

				
			<div class="dd-block">
				<div class="main-carousel-cont">
					<div id="carousel" class="carousel dd__carousel">
                        <?php $posts = get_posts ("category_name=desserts&orderby=date&numberposts=25");
                                    $i = 0;
                        ?>
                        <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                            <div class="tab-block__tab-item item <?php echo $i == 0 ? 'active' : ''; ?>">
                                <div class="cuisine__item dd__item">

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
                                            <ul class="cuisine__item-text-calories">
                                                <li><u class="cuisine__item-text-highlited"><?php echo get_post_meta( get_the_ID(), 'desserts_cal', 1); ?></u></li>
                                                <li>Белки - <?php echo get_post_meta( get_the_ID(), 'desserts_prot', 1); ?> г</li>
                                                <li>Жиры - <?php echo get_post_meta( get_the_ID(), 'desserts_fat', 1); ?> г</li>
                                                <li>Углеводы - <?php echo get_post_meta( get_the_ID(), 'desserts_car', 1); ?> г</li>

                                            </ul>
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
                                            <span class="cuisine__item-price-text" data-cuisine-qount="5"><span><?php echo get_post_meta( get_the_ID(), 'desserts_price', 1); ?></span>
                                        </div>

                  <div class="subscribe__button-cnt dd__button-cnt">
                      <button class="button button_bordered subscribe__button-btn" data-meta-node="" data-target="form_3" data-action="activate">Заказать</button>
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
				</div>
			</div>

			

<!--			<div class="cuisine-notation_position dd-notation_position">-->
<!--				<div class="cuisine-notation dd-notation">-->
<!--					<div class="subscribe__button-cnt">-->
<!--						<button class="button button_bordered subscribe__button-btn" data-meta-node="" data-target="form_3" data-action="activate">Заказать</button>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->



		</div>
	</section>


<?php get_footer() ?>