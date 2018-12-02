<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="UTF-8">
	<title>| <?php bloginfo("description"); ?> | - <?php bloginfo("name");?>!</title>

	<meta name="author" content="CrossFood">

	<meta name="robots" content="index, follow"/>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="//crossfood.od.ua/wp-content/themes/crossfood/src/css/style.css?ver_1.48">

	<link rel="shortcut icon" href="//crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon.ico">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="header header_background" itemscope itemtype="http://schema.org/WPHeader"
    data-bg-src="//www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/backgrounds/header-background.jpg?ver_1.01">
		<div class="wrapper header_position">

			<div class="header-menu">

				<nav id="header-menu" class="menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu('primary'); ?>
				</nav>

			</div>

			<div class="header_content-position">
				

				<div class="header-title">

					<div class="title-1 header__title-1_pos">
						<div data-bg-src="//www.crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/logo-main.svg" class="title-1__img header__title-1__img-pos"></div>
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