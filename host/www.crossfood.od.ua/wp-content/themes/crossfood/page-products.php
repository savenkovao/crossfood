<?php get_header('product-category') ?>
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

      <div class="descript m-b-35">
        Вы можете заказать безопасную доставку отдельных блюд из нашего 
        <strong class="descript__highlited text-green">Ресторана</strong> <br>
        или продуктов и полуфабрикатов из нашего <strong class="descript__highlited text-green">Магазина</strong>.
      </div>

      <?php the_content(); ?>

      <?php echo do_shortcode('[product_categories ids="133, 134"]') ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
