<?php get_header('common') ?>
<script>
  window.CONFIG = {
    page: 'single'
  };
</script>

<style>
  .post-cont table p {
    margin-right: 5px;
  }
</style>

<section>
  <div class="wrapper">
    <div class="post-cont">
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div style="overflow-x: auto">
        <div style="min-width: 670px;">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>
