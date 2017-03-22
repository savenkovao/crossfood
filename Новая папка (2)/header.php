<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>

	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/css/style.css">

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

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="header header_background">
		<div class="wrapper header_position">

			<div class="header-menu">



				<div id="brgr-menu">
					<div  data-meta-node class="brgr-menu header-brgr-menu_pos">					
						<div id="brgr-menu-stick-1" class="brgr-menu__stick header-brgr-menu__stick stick-1"></div>
						<div id="brgr-menu-stick-2" class="brgr-menu__stick header-brgr-menu__stick stick-2"></div>
						<div id="brgr-menu-stick-3" class="brgr-menu__stick header-brgr-menu__stick stick-3"></div>
					</div>
				</div>

				<div id="header-menu" class="menu">
					<ul class="menu__list">
						<li class="menu__item"><a href="#how-it-works" class="menu__link">Как это работает</a></li>
						<li class="menu__item"><a href="#advantages" class="menu__link">Преимущества</a></li>
						<li class="menu__item"><a href="#our-team" class="menu__link">Наша команда</a></li>
						<li class="menu__item"><a href="#subscribe" class="menu__link">Планы подписок</a></li>
<!-- 						<li class="menu__item"><a href="#discount" class="menu__link">Акции</a></li> -->
						<li class="menu__item"><a href="#reviews" class="menu__link">Отзывы</a></li>
					</ul>
				</div>
			</div>

			<div class="header_content-position">
				

				<div class="header-title">

					<div class="title-1 header__title-1_pos">
						<div class="title-1__img header__title-1__img-pos"></div>
						<h1 class="title-1__h1 header__title-1__h1"><?php bloginfo("name"); ?></h1>
					</div>
				
					<div class="title-2 header__title-2_pos">
						<h2 class="title-2__h2 header__title-2__h2"><?php bloginfo("description"); ?></h2>
					</div>

				</div>
				
				<div class="header__button-cnt">
					<button class="button button_filled header__button-btn">Связаться с нами</button>
				</div>
				
			</div>
		</div>
	</header>