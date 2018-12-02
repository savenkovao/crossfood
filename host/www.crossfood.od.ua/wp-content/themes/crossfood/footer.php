<section id="forms">


    <?php $posts = get_posts("category_name=forms&orderby=date&numberposts=1"); ?>
    <?php if ($posts) : ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>

            <?php the_content(); ?>

        <?php endforeach; else: ?>

      <p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

        <?php
        wp_reset_postdata();
    endif; ?>

</section>

<footer class="footer">
  <div class="wrapper footer_position">
    <div class="footer-content">

      <div class="tagline-block footer-tagline-block">

          <?php if (!is_front_page()) { ?>
        <a href="/">
            <?php } ?>

          <div class="tagline-block__img-cont footer-tagline-block__img-cont"
               data-bg-src="//www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/logo-main.svg"></div>
          <div class="footer-tagline-block__header-cont">
            <h3 class="footer-tagline-block__header"><?php bloginfo("name"); ?></h3>
          </div>
          <div class="tagline-block__text-cont footer-tagline-block__text-cont">
            <p class="tagline-block__text footer-tagline-block__text">
                <?php $post = get_post($post_id = 222);
                echo $post->post_content; ?>
            </p>
          </div>
            <?php if (!is_front_page()) { ?>
        </a>
      <?php } ?>
      </div>

      <div class="contact-block footer-contact-block">
        <div class="footer-contact-block__text-cont">
          <p class="contact-block__text footer-contact-block__text">
              <?php $post = get_post($post_id = 230);
              echo $post->post_content; ?>
          </p>
        </div>
        <div class="footer-contact-block__link-cont">
            <?php $post = get_post($post_id = 224);
            echo $post->post_content; ?>
        </div>
        <div class="footer-contact-block__tel-cont">
            <?php $post = get_post($post_id = 233);
            echo $post->post_content; ?>
        </div>
        <div class="footer-contact-block__btn-cont">
          <button data-meta-node data-target="form_1" data-action="activate"
                  class="button button_bordered-dark footer-button-btn">Связаться с нами
          </button>
        </div>

      </div>
    </div>
  </div>
</footer>


<!-- Facebook Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if(f.fbq) return;
    n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments);
    };
    if(!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s);
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '250533495468251');
  fbq('track', 'PageView');
  fbq('track', 'ViewContent');
  fbq('track', 'InitiateCheckout');
  fbq('track', 'Purchase', {value : '0.00', currency : 'USD'});
  fbq('track', 'Lead');
</script>
<noscript>
  <img height="1" width="1"
       src="https://www.facebook.com/tr?id=250533495468251&ev=PageView
	&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97004051-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('js', new Date());

  gtag('config', 'UA-97004051-1');
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function (d, w, c) {
    (w[c] = w[c] || []).push(function () {
      try {
        w.yaCounter44057639 = new Ya.Metrika({
          id : 44057639,
          clickmap : true,
          trackLinks : true,
          accurateTrackBounce : true,
          webvisor : true,
          trackHash : true
        });
      } catch (e) {
      }
    });

    var n = d.getElementsByTagName('script')[0],
      s = d.createElement('script'),
      f = function () {
        n.parentNode.insertBefore(s, n);
      };
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'https://mc.yandex.ru/metrika/watch.js';

    if(w.opera == '[object Opera]') {
      d.addEventListener('DOMContentLoaded', f, false);
    } else {
      f();
    }
  })(document, window, 'yandex_metrika_callbacks');
</script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/44057639" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>
</body>
</html>