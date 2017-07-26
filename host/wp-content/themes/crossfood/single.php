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
				$thumb_url_def = get_bloginfo('template_directory') . '/src/img/dsg/backgrounds/news-thumbnail.jpg';
			?>

			style="background-image: url( <?php echo has_post_thumbnail() ? $thumb_url[0] : $thumb_url_def; ?> )"
		></div>
	
		<div class="post-cont">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<div class="post-auth">
				<p>Автор: <?php echo get_post_meta( get_the_ID(), 'news_author', 1); ?></p>
				
				<p><?php the_date( ); ?></p>
			</div>
	
	
  		<?php the_content(); ?>
  		<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

