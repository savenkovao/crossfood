<?php get_header('common') ?>
<script>
  window.CONFIG = {
    page: 'single'
  };
</script>

<section>
  <div class="wrapper">
    <div class="post-cont">
      <h1 class="post-title">Все продукты</h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php get_footer() ?>
