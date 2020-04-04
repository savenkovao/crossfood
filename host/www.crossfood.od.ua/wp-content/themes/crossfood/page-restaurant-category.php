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
        Ресторан
      </h1>
      <?php the_content(); ?>

      <?php echo do_shortcode('[product_categories ids="128, 129, 130, 131"]') ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
