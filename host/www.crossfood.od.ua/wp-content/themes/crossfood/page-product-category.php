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
        Магазин
      </h1>
      <?php the_content(); ?>

      <?php echo do_shortcode('[product_categories ids="125, 126, 127"]') ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
