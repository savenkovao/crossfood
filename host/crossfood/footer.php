	<section id="forms">


		<?php $posts = get_posts ("category_name=forms&orderby=date&numberposts=1"); ?> 
		<?php if ($posts) : ?>
		<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
			
			<?php the_content(); ?>

		<?php endforeach; else:	?>

			<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

		<?php 
			wp_reset_postdata();
		endif; ?>

	</section>

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



	<!-- scroll -->


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-97004051-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter44057639 = new Ya.Metrika({
	                    id:44057639,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true,
	                    trackHash:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/44057639" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	
	<?php wp_footer(); ?>	
</body>
</html>