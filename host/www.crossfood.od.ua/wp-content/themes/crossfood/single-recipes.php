<?php

/*
Template Post Type: post, 
WP Post Template: recipe template
Description: This is recipe post template
*/

if (is_single()) {
    include(TEMPLATEPATH.'/header-single.php');
} else {
    include(TEMPLATEPATH.'/header.php');
}
?>
<script>
  window.CONFIG = {
    page : 'single'
  };
</script>

<section id="drinks" class="dd_background drinks_background"
           data-bg-src="//www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/backgrounds/recipes-bg.jpg?ver_1.01">
		<div class="dd_position wrapper">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Рецепты</h3>
			</div>
				
			<div class="dd-block">
        <div class="tab-block__tab-item item <?php echo $i == 0 ? 'active' : ''; ?>">
            <div class="cuisine__item dd__item cuisine-drinks__item">

                <div class="cuisine__item-text-cont recipe__item-text-cont">
                    <h4 class="dd__title m-b-20"><?php the_title(); ?></h4>

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
                          $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

                          echo '<img class="news-item__img" src="' . $thumb_url[0] . '"  alt="Кроссфуд. Правильное питание - это просто" />';
                      } else {
                          echo '<img class="news-item__img" src="' . get_bloginfo('template_directory') . '/src/img/cnt/cuisine/custom.jpg' . '"  alt="Кроссфуд. Правильное питание - это просто" />';
                      }
                    ?>

                    <!-- <div class="post-auth">
                      <p>Автор: <?php echo get_post_meta(get_the_ID(), 'news_author', 1); ?></p>

                      <p><?php the_modified_date(); ?></p>
                    </div> -->
                    
                    <div class="text-center">
                      <ul class="p m-t-30">
                        <li class="m-b-10"><u class="cuisine__item-text-highlited"><?php echo get_post_meta( get_the_ID(), 'desserts_cal', 1); ?></u></li>
                        <li>Белки - <?php echo get_post_meta( get_the_ID(), 'desserts_prot', 1); ?></li>
                        <li>Жиры - <?php echo get_post_meta( get_the_ID(), 'desserts_fat', 1); ?></li>
                        <li>Углеводы - <?php echo get_post_meta( get_the_ID(), 'desserts_car', 1); ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
			</div>
		</div>
	</section>

<?php

if (is_single()) {
    include(TEMPLATEPATH . '/footer-single.php');
} else {
    include(TEMPLATEPATH . '/footer.php');
}
?>
