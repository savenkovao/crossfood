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
	<link rel="stylesheet" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/css/style.css?ver_1.43">


	<link rel="shortcut icon" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon.ico">

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