<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("name"); ?> - <?php bloginfo("description"); ?></title>

	<meta name="keywords" content="crossfood, cross, food, кросфуд, кроссфуд, кросс, крос, фуд, одесса, odessa, facebook, правильное, здоровое питание, рационы на весь день, просто, доставка">
	<meta name="description" content="Cross Food - это сервис по доставке 5-разового правильного питания. Все блюда сбалансированы по КБЖУ. Готовим пока Вы спите, доставляем каждое утро! Программы для похудения, набора массы, и просто сбалансированные ежедневные рационы">
	<meta name="author" content="CrossFood">

	<meta name="robots" content="index, follow"/>

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/css/style.css?ver_1.19">


	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="56x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="59x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="71x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="75x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="113x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="119x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="143x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="151x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="179x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="191x192"  href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/manifest.json">	
	<meta name="msapplication-TileColor" content="#ffffff">	
	<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/dsg/favicon/ms-icon-144x144.png">	
	<meta name="theme-color" content="#ffffff">

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '503333443201632'); // Insert your pixel ID here.
		fbq('track', 'PageView');
	</script>
	
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=503333443201632&ev=PageView&noscript=1"
	/></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="header header_background" itemscope itemtype="http://schema.org/WPHeader">
		<div class="wrapper header_position">

			<div class="header-menu">

			<!-- 	<div id="brgr-menu">
					<div  data-meta-node class="brgr-menu header-brgr-menu_pos">					
						<div id="brgr-menu-stick-1" class="brgr-menu__stick header-brgr-menu__stick stick-1"></div>
						<div id="brgr-menu-stick-2" class="brgr-menu__stick header-brgr-menu__stick stick-2"></div>
						<div id="brgr-menu-stick-3" class="brgr-menu__stick header-brgr-menu__stick stick-3"></div>
					</div>
				</div> -->

				<nav id="header-menu" class="menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu('primary'); ?>
				</nav>

			</div>

			<div class="header_content-position">
				

				<div class="header-title">

					<div class="title-1 header__title-1_pos">
						<div class="title-1__img header__title-1__img-pos"></div>
						<h1 class="title-1__h1 header__title-1__h1" itemprop="headline"><?php bloginfo("name"); ?></h1>
					</div>
				
					<div class="title-2 header__title-2_pos">
						<h2 class="title-2__h2 header__title-2__h2">
							<?php $post = get_post($post_id = 1443); echo $post->post_content; ?>							
						</h2>
					</div>

				</div>
				
				<div class="header__button-cnt">
					<button data-meta-node data-target="form_1" data-action="activate" class="button button_filled header__button-btn">Связаться с нами</button>
				</div>

				<div itemprop="description" hidden="true">
					<p >
						Cross Food - это сервис по доставке 5-разового правильного питания. Все блюда сбалансированы по КБЖУ. Готовим пока Вы спите, доставляем каждое утро! Программы для похудения, набора массы, и просто сбалансированные ежедневные рационы
					</p>
				</div>
				
			</div>
		</div>
	</header>

