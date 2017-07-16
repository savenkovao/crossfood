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

<section>
	<div class="wrapper">
	
		<div class="post-thumb" 
	
			<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
				echo $thumb_url[0];
			?>
			style="background-image: url( <?php echo $thumb_url[0] ?> )"
		></div>
	
		<div class="post-cont">
			<div class="post-auth">				
				<p>Автор: <?php echo get_post_meta( get_the_ID(), 'news_author', 1); ?></p>
				
				<p><?php the_date( ); ?></p>
			</div>
	
	
  		<?php the_content(); ?>
		</div>
	</div>
</section>

	<section id="forms">

		<?php $posts = get_posts ("ID=200&numberposts=1"); ?> 
		<?php if ($posts) : ?>
		<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
			
			<?php the_content(); ?>

		<?php endforeach; else:	?>
		<?php 
		endif; ?>

	</section>



<?php get_footer(); ?>

