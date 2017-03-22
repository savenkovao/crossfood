	<footer class="footer">
		<div class="wrapper footer_position">
			<div class="footer-content">

				<div class="tagline-block footer-tagline-block">
					<div class="tagline-block__img-cont footer-tagline-block__img-cont"></div>
					<div class="footer-tagline-block__header-cont">
						<h3 class="footer-tagline-block__header"><?php bloginfo("name"); ?></h3>
					</div>
					<div class="tagline-block__text-cont footer-tagline-block__text-cont">
						<p class="tagline-block__text footer-tagline-block__text">
							<?php $post = get_post($post_id = 222); echo $post->post_content; ?>
						</p>
					</div>
				</div>

				<div class="contact-block footer-contact-block">
					<div class="footer-contact-block__text-cont">
						<p class="contact-block__text footer-contact-block__text">
							<?php $post = get_post($post_id = 230); echo $post->post_content; ?>
						</p>
					</div>
					<div class="footer-contact-block__link-cont">
						<?php $post = get_post($post_id = 224); echo $post->post_content; ?>
					</div>
					<div class="footer-contact-block__tel-cont">
							<?php $post = get_post($post_id = 233); echo $post->post_content; ?>
					</div>
					<div class="footer-contact-block__btn-cont">
						<button data-meta-node data-target="form_1" data-action="activate" class="button button_bordered-dark footer-button-btn">Связаться с нами</button>
					</div>

				</div>
			</div>
		</div>
	</footer>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/js/main.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/js/bootstrap.js"></script>

	<!-- scroll -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#header-menu").on("click","a", function (event) {
				event.preventDefault();
				var id = $(this).attr('href'),
				top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 1500);
			});
		});
	</script>
	
	<?php wp_footer(); ?>	
</body>
</html>