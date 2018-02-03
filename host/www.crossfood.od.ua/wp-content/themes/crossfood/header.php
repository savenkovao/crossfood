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
		/* _________________________________________ */

		.loader {
		  position: absolute;
		  top: 0;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  background: rgba(255, 255, 255, .7);
		  z-index: 1010;
		  display: block;
		}
		.preloader {
		  background: #fff;
		  position: fixed;
		  z-index: 1010;
		}
		.spinner {
		  width: 40px;
		  height: 40px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translateX(-50%)translateY(-50%);
		}
		.double-bounce1, .double-bounce2 {
		  width: 100%;
		  height: 100%;
		  border-radius: 50%;
		  background-color: #333;
		  opacity: 0.6;
		  position: absolute;
		  top: 0;
		  left: 0;
		  -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
		  animation: sk-bounce 2.0s infinite ease-in-out;
		}
		.double-bounce2 {
		  -webkit-animation-delay: -1.0s;
		  animation-delay: -1.0s;
		}
		@-webkit-keyframes sk-bounce {
		  0%, 100% { -webkit-transform: scale(0.0) }
		  50% { -webkit-transform: scale(1.0) }
		}
		@keyframes sk-bounce {
		  0%, 100% {
		    transform: scale(0.0);
		    -webkit-transform: scale(0.0);
		  } 50% {
		      transform: scale(1.0);
		      -webkit-transform: scale(1.0);
		    }
		}

		/* _________________________________________ */
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