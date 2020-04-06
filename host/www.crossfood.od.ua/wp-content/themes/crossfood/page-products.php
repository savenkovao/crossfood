<?php get_header('common') ?>
<script>
  window.CONFIG = {
    page: 'single'
  };
</script>

<section>
  <div class="wrapper">
    <div class="products-cont">
      <h1 class="post-title">
        Наши продукты
      </h1>
      <?php the_content(); ?>

      <?php echo do_shortcode('[product_categories ids="133, 134"]') ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
