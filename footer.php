	<footer class="footer">
		<div class="wrapper footer_position">
			<div class="footer-content">

				<div class="tagline-block footer-tagline-block">
					<div class="tagline-block__img-cont footer-tagline-block__img-cont"></div>
					<div class="footer-tagline-block__header-cont">
						<h3 class="footer-tagline-block__header">CrossFood</h3>
					</div>
					<div class="tagline-block__text-cont footer-tagline-block__text-cont">
						<p class="tagline-block__text footer-tagline-block__text">Готовим пока ты спишь, доставляем каждое утро!</p>
					</div>
				</div>

				<div class="contact-block footer-contact-block">
					<div class="footer-contact-block__text-cont">
						<p class="contact-block__text footer-contact-block__text">Мы в социальных сетях</p>
					</div>
					<div class="footer-contact-block__link-cont">
						<a href="https://vk.com/crossfood_od" class="contact-block__link footer-contact-block__link footer-contact-block__link-1" target="blank"></a>
						<a href="https://www.instagram.com/crossfood_od/" class="contact-block__link footer-contact-block__link footer-contact-block__link-2" target="blank"></a>
						<a href="https://www.facebook.com/crossfood.od/" class="contact-block__link footer-contact-block__link footer-contact-block__link-3" target="blank"></a>
					</div>
					<div class="footer-contact-block__tel-cont">
						<p class="contact-block__tel footer-contact-block__tel">+380732088048</p>
					</div>
					<div class="footer-contact-block__btn-cont">
						<button class="button button_bordered-dark footer-button-btn">Связаться с нами</button>
					</div>

				</div>
			</div>
		</div>

		<input type="checkbox">lorem ipsumdvfd fvj
	</footer>	


	<script src="<?php bloginfo("template_url"); ?>/src/js/main.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo("template_url"); ?>/src/js/bootstrap.js"></script>

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

</body>
</html>