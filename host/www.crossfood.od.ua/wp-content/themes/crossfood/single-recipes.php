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

<section id="recipes" class="dd_background drinks_background"
           data-bg-src="//www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/backgrounds/recipes-bg.jpg?ver_1.01"
           itemscope itemtype="http://schema.org/Recipe">
    <meta itemprop="author" content="<?php echo get_post_meta(get_the_ID(), 'news_author', 1); ?>">
    <meta itemprop="recipeCategory" content="Основные блюда">
    <meta itemprop="keywords" content="Рецепт, здоровое питание">
    <meta itemprop="description" content="<?php echo get_post_meta( get_the_ID(), 'news_description', 1); ?>">

    <div class="wrapper header_position_single">
      <div class="breadcrumbs breadcrumbs-white">
        <a href="/">Главная</a>
        <a href="/recipes">Рецепты</a>
        <span><?php the_title(); ?></span>
      </div>
    </div>

		<div class="dd_position wrapper">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Рецепты</h3>
			</div>

				
			<div class="dd-block">
        <div class="tab-block__tab-item item <?php echo $i == 0 ? 'active' : ''; ?>">
            <div class="cuisine__item dd__item cuisine-drinks__item">

                <div class="cuisine__item-text-cont recipe__item-text-cont">
                    <h4 class="dd__title m-b-20" itemprop="name"><?php the_title(); ?></h4>

                    <div data-cuisine-qount="5">
                        <div class="cuisine__item-text-menu dd__item-text-menu" itemprop="recipeInstructions">
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

                          echo '<img class="news-item__img" itemprop="image" src="' . $thumb_url[0] . '"  alt="Кроссфуд. Правильное питание - это просто" />';
                      } else {
                          echo '<img class="news-item__img" itemprop="image" src="' . get_bloginfo('template_directory') . '/src/img/cnt/cuisine/custom.jpg' . '"  alt="Кроссфуд. Правильное питание - это просто" />';
                      }
                    ?>
                    
                    <div class="text-center" itemprop="nutrition" itemscope itemtype="http://schema.org/NutritionInformation">
                      <ul class="p m-t-30">
                        <li class="m-b-10">
                          <u class="cuisine__item-text-highlited" itemprop="calories">
                            <?php echo get_post_meta( get_the_ID(), 'desserts_cal', 1); ?>
                          </u>
                        </li>
                        <li itemprop="proteinContent">Белки - <?php echo get_post_meta( get_the_ID(), 'desserts_prot', 1); ?></li>
                        <li itemprop="fatContent">Жиры - <?php echo get_post_meta( get_the_ID(), 'desserts_fat', 1); ?></li>
                        <li itemprop="carbohydrateContent">Углеводы - <?php echo get_post_meta( get_the_ID(), 'desserts_car', 1); ?></li>
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
