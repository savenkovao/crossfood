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

<section>
  <div class="wrapper">


    <div class="post-cont">
      <h1 class="post-title"><?php the_title(); ?></h1>

        <?php
          if (has_post_thumbnail()) {
              $thumb_id = get_post_thumbnail_id();
              $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

              echo '<img class="news-item__img" src="' . $thumb_url[0] . '"  alt="Кроссфуд. Правильное питание - это просто" />';
          } else {
              echo '<img class="news-item__img" src="' . get_bloginfo('template_directory') . '/src/img/cnt/cuisine/custom.jpg' . '"  alt="Кроссфуд. Правильное питание - это просто" />';
          }
        ?>
        <br>
<br>
      <div class="post-auth">
        <p>Автор: <?php echo get_post_meta(get_the_ID(), 'news_author', 1); ?></p>

        <p><?php the_modified_date(); ?></p>
      </div>

        <?php the_content(); ?>

        <?php  $global_id = get_the_ID(); ?>

        <?php wp_reset_postdata(); ?>


        <br>
        <br>


        <?php if (get_post_meta(get_the_ID(), 'desserts_cal', 1)): ?>
          <div>Калории - <?php echo get_post_meta(get_the_ID(), 'desserts_cal', 1); ?></div>
        <?php endif; ?>

        <?php if (get_post_meta(get_the_ID(), 'desserts_prot', 1)): ?>
          <div>Белки - <?php echo get_post_meta(get_the_ID(), 'desserts_prot', 1); ?> г</div>
        <?php endif; ?>

        <?php if (get_post_meta(get_the_ID(), 'desserts_fat', 1)): ?>
          <div>Жиры - <?php echo get_post_meta(get_the_ID(), 'desserts_fat', 1); ?> г</div>
        <?php endif; ?>

        <?php if (get_post_meta(get_the_ID(), 'desserts_car', 1)): ?>
          <div>Углеводы - <?php echo get_post_meta(get_the_ID(), 'desserts_car', 1); ?> г</div>
        <?php endif; ?>
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
