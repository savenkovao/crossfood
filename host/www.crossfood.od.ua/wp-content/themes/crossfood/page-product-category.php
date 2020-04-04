<?php get_header('common') ?>
<script>
  window.CONFIG = {
    page: 'single'
  };
</script>

<section>
  <div class="wrapper">
    <div class="post-cont">
      <h1 class="post-title">Категории
      </h1>
      <?php the_content(); ?>

      <br>
      <br>
      <br>
      <?php echo do_shortcode('[product_categories]') ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
