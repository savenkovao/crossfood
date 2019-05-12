<?php

/*
WP Post Template: single-news template
Description: This is single-news post template
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

<section>
  <div class="wrapper">

    <div class="post-thumb"
         style="background-image: url( <?php echo get_post_meta(get_the_ID(), 'news_banner', 1); ?> )"
    ></div>

    <div class="post-cont">
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-auth">
        <p>Автор: <?php echo get_post_meta(get_the_ID(), 'news_author', 1); ?></p>

        <p><?php the_modified_date(); ?></p>
      </div>

        <?php the_content(); ?>

        <?php  $global_id = get_the_ID(); ?>

        <?php wp_reset_postdata(); ?>

      <div class="recommend_posts">
        <h3>Похожие статьи: </h3>
          <?php $posts = get_posts("category_name=news&orderby=date&numberposts=3");
          $i = 0; ?>
          <?php if ($posts) : ?>
              <?php
              foreach ($posts as $post) : setup_postdata($post); ?>

                    <div>
                      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </div>

                  <?php $i++; endforeach; else: ?>
            <p><?php _e('“Пока что нет похожих статей”'); ?></p>
              <?php
              wp_reset_postdata();
          endif; ?>
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

<!--<ol class="carousel-review">
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-57-49.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-57-52.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-57-53.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-57-56.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-57-59.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-01.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-08.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-09.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-11.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-12.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-17.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-18.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-19.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-21.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-23.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-25.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-27.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-28.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
  <li>
    <img class="alignnone size-full wp-image-202" data-src="//crossfood.od.ua/wp-content/uploads/2019/04/photo_2019-04-17_22-58-30.jpg" alt="Отзыв покупателя" data-meta-node=""></li>
</ol>-->
<!--
Структура изображения в слайде
 	<li><img data-meta-node src="Путь к картинке" alt="Замещающий текст" class="Может быть пустым" /></li>
Все остальные атрибуты удалить.
-->