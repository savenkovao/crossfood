<?php get_header('common') ?>
<script>
  window.CONFIG = {
    page: 'single'
  };
</script>

<section>
  <div class="wrapper">
    <div class="post-cont">
      <h1 class="post-title">Оплата</h1>
      
      <div class="m-b-30">
        Вернуться: 
        <a href="/products/restaurant">Ресторан</a>, 
        <a href="/products/magazin">Магазин</a>
      </div>

      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
