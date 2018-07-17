<?php

/*
WP Post Template: single-news template
Description: This is single-news post template
*/

if (is_single()) {
 	include(TEMPLATEPATH.'/header-single.php');
 } else {
 	include(TEMPLATEPATH.'/header.php');
 } 
?>
<script>
  window.CONFIG = {
    page: 'single'
  }
</script>

<section>
	<div class="wrapper">
	
		<div class="post-thumb" 
			style="background-image: url( <?php echo get_post_meta( get_the_ID(), 'news_banner', 1); ?> )"
		></div>
	
		<div class="post-cont">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<div class="post-auth">
				<p>Автор: <?php echo get_post_meta( get_the_ID(), 'news_author', 1); ?></p>
				
				<p><?php the_modified_date(); ?></p>
			</div>
			
  		<?php the_content(); ?>
	
			<?php $id = get_the_ID(); ?>

  		<?php wp_reset_postdata(); ?>

			<div class="recommend_posts">
				<h3>Похожие статьи: </h3>
					<?php $posts = get_posts ("category_name=news&orderby=date&numberposts=3"); 
								$i = 0;
					?> 
					<?php if ($posts) : ?>
					<?php 
						foreach ($posts as $post) : setup_postdata ($post);

						$current_id = get_the_ID();
						if($id == $current_id) :
					?>

						<div>
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</div>

					<?php endif; ?>

					<?php $i++; endforeach; else:	?>
						<p><?php _e('“Пока что нет похожих статей”'); ?></p>
					<?php 
						wp_reset_postdata();
					endif; ?>
			</div>
		</div>
		


	</div>
</section>

<?php get_footer(); ?>

