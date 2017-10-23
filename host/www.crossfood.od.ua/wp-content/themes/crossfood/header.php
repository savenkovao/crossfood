<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="UTF-8">
	<title>| <?php bloginfo("description"); ?> | - <?php bloginfo("name");?>!</title>

	<meta name="author" content="CrossFood">

	<meta name="robots" content="index, follow"/>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/css/style.css?ver_1.39">


	<link rel="shortcut icon" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="56x57" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="59x60" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="71x72" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="75x76" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="113x114" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="119x120" href="http://crossfood.od.?ver_1.39ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="143x144" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="151x152" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="179x180" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="191x192"  href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon-16x16.png">
	<link rel="manifest" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/manifest.json">	
	<meta name="msapplication-TileColor" content="#ffffff">	
	<meta name="msapplication-TileImage" content="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/ms-icon-144x144.png">	
	<meta name="theme-color" content="#ffffff">

	<style>
		.header-menu {
			background-color: transparent;
			transition: background-color .3s;
		}

		.header-menu_scrolled {
				display: none;
		    position: fixed;
		    left: 0;
		    right: 0;
		    margin-left: -73px;
		    background-color: #fff;
		    z-index: 2;
		    padding: 18px 31px 18px 0;
		    top: 0px;
		}

		.header-menu_scrolled .menu{
	    max-width: 1200px;
	    margin: 0 auto;
	    width: 100%;
		}
		
		@media only screen and (min-width:768px){
			.header-menu_scrolled{
				display: block;
			}
		}

		.header-menu_scrolled .menu .menu-item::before {
		    top: -18px;
		}
	</style>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="header header_background" itemscope itemtype="http://schema.org/WPHeader">
		<div class="wrapper header_position">

			<div class="header-menu">

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