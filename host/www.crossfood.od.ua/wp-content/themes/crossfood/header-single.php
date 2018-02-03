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
		    box-shadow: 0 0 4px rgba(0,0,0,.14), 0 0 20px rgba(0,0,0,.28);
		}

		.header-menu_scrolled .menu{
		    max-width: 1200px;
		    margin: 0 auto;
		    width: 100%;
		}

		.header-menu_scrolled .menu li a{
			font-size: 1.8em;
		}

		.close-btn_f-pos {
			z-index: 2;
		}
		
		.notation-text {
		    font-size: 12px;
		    text-align: center;
		    color: #707070;
		    line-height: 1.5;
		    padding: 5px;
		}
		
		@media only screen and (min-width:768px){
			.header-menu_scrolled{
				display: block;
			}
		}

		.header-menu_scrolled .menu .menu-item::before {
		    top: -18px;
		}
		.footer-tagline-block a,
		.footer-tagline-block a:hover,
		.footer-tagline-block a:active {
			text-decoration: none
		}
	</style>

	<?php if(is_404()) { ?>
		<style>
			.error-block {
		    max-width: 1200px;
		    width: 100%;
		    margin: 0 auto;
		    user-select: none;
		    padding: 0 15px;    
		    margin-top: 30px;
			}

			.error-h1 {
				font-size: 50px;
		    text-align: center;
		    color: #272929;
		    margin-bottom: 25px;
			}

			.error-h1 span {
				font-size: 80px;
				font-weight: 600;
				color: #6b9e3d;
			}

			.error-descr {
				margin-bottom: 15px;
				text-align: center;
		    font-size: 16px;
		    font-weight: 600;
		    color: #b1b1b1;
		    text-transform: uppercase;
			}
			.error-link {
		    margin-bottom: 25px;
				text-align: center;
				
			}
			.error-link a {
		    font-size: 14px;
		    font-weight: 600;
		    color: #6b9e3d;
		    text-transform: uppercase;
			}
			.error-link a:hover,
			.error-link a:active, {
				color: #6b9e3d;
			}

			.error-img {
		    text-align: center;
		    margin: 0 auto;
		    max-width: 120px;
			}

			@media only screen and (min-width:768px){
				.error-block {
			    margin-top: 0; 
				}
				.error-img {
					max-width: 180px;
				}
				.error-link {
					margin-bottom: 50px;
				}
			}

			.error-img svg {
				width: 100%
			}
		</style>
	<?php } ?>



	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="header">
		<div class="wrapper header_position_single">

			<div class="header-menu">

				<nav class="menu-sp">
					<div class="back-cont">
						<a href="http://crossfood.od.ua/">На главную</a>
					</div>

					<div class="logo-cont">
					</div>
				</nav>

			</div>
		</div>
	</header>