<?php get_header('recipes') ?>

<script>
  window.CONFIG = {
    page : 'single'
  };
</script>

<section>
  <div class="post-thumb"
        style="background-image: url(//www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/backgrounds/recipes-page-bg.jpg?ver_1.01)">
    <div class="wrapper header_position_single">
      <div class="breadcrumbs breadcrumbs-white">
        <a href="/">Главная</a>
        <span>Рецепты</span>
      </div>
    </div>
  </div>
  
  <div class="wrapper">
    <div class="post-cont">

      <div class="title-3 p-t-30 m-b-60">
        <h1 class="title-3__h3 title-3__h3_dark hr-line">Рецепты</h3>
      </div>

      <div class="m-b-60">
        <p class="descript">
          Мы рады делиться нашими рецептами, чтобы как можно больше людей приобщались к правильному и вкусному питанию. <br>
          Так же вы можете заказать продуктовые корзину в Одессе по телефону: 
          <strong><a href="tel:+380932086048" class="text-green nowrap">+38(093)208-60-48</a></strong>
        </p>
      </div>

      <ul class="recipes-list">
        <?php $posts = get_posts("category_name=recipes&orderby=date&numberposts=100"); $i = 0; ?>
          <?php if ($posts) : ?>
          
          <?php foreach ($posts as $post) : setup_postdata($post); ?>

            <li class="m-b-15">
                <a href="<?php the_permalink() ?>" class="pallet pallet-recipe">
                  <div class="pallet-recipe-img"> 
                    <?php
                      if (has_post_thumbnail()) {
                          $thumb_id = get_post_thumbnail_id();
                          $alt = the_title();
                          $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

                          echo '<img itemprop="image" src="' . $thumb_url[0] . '"  alt="' . $alt . '" />';
                      } else {
                          echo '<img itemprop="image" src="' . get_bloginfo('template_directory') . '/src/img/cnt/cuisine/custom.jpg' . '"  alt="' . $alt . '" />';
                      }
                    ?>
                  </div>

                  <div class="pallet-recipe-content">
                    <h4 class="pallet-recipe-title"><?php the_title(); ?></h4>
                    
                    <p class="pallet-recipe-description">
                      <?php echo get_post_meta( get_the_ID(), 'news_description', 1); ?>
                      <br>
                      <br>
                      <!-- <span><?php echo get_post_meta( get_the_ID(), 'desserts_cal', 1); ?></span> -->
                    </p>
                  </div>
              </a>
            </div>

          <?php $i++; endforeach; else: ?>
            <p><?php _e('“Пока что нет рецептов”'); ?></p>
          <?php wp_reset_postdata(); endif; ?>
      </ul>
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
