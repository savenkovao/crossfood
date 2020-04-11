<?php get_header('product-category') ?>
<script>
  window.CONFIG = {
    page: 'single'
  };
</script>

<section>
  <div class="wrapper">
    <div class="post-cont woocommerce m-t-60">
      <h1 class="post-title">Оплата</h1>
      
      <div class="m-b-30">
        Вернуться: 
        <a class="link" href="/products/restaurant">Ресторан</a>, 
        <a class="link" href="/products/magazin">Магазин</a>,
        <a class="link" href="/cart">Корзина</a>
      </div>

      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
