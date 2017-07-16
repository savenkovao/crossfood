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
  		<?php the_content(); ?>

			<p><?php echo get_post_meta( get_the_ID(), 'news_author', 1); ?></p>
			<?php the_date( ); ?>

			<?php get_footer(); ?>
		</div>
	</div>

