<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="UTF-8">
	
	<?php if (is_single()) { ?>
		 	<title>| <?php echo get_post_meta( get_the_ID(), 'news_title', 1); ?> | - <?php bloginfo("name");?>!</title>
	
	<?php } else if(is_404()) { ?>
			<title>| Доставка Правильного Здорового Питания в Одессе | - CrossFood!</title>
	<?php } ?>
		


	<meta name="description" content="<?php echo get_post_meta( get_the_ID(), 'news_description', 1); ?>">
	<meta name="author" content="CrossFood">

	<meta name="robots" content="index, follow"/>

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="//crossfood.od.ua/wp-content/themes/crossfood/src/css/style.css?ver_1.50">


	<link rel="shortcut icon" href="//crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon.ico">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5VBSRGR');</script>
  <!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VBSRGR"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<header class="header">
		<div class="wrapper header_position_single">

			<div class="header-menu">

				<nav class="menu-sp">
					<div class="back-cont">
						<a href="//crossfood.od.ua/">На главную</a>
					</div>

					<div class="logo-cont">
					</div>
				</nav>

			</div>
		</div>
	</header>