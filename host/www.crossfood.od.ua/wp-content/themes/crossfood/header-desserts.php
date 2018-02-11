<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="UTF-8">

    <title>| Десерты | - <?php bloginfo("name");?>!</title>

		


	<meta name="description" content="<?php echo get_post_meta( get_the_ID(), 'news_description', 1); ?>">
	<meta name="author" content="CrossFood">

	<meta name="robots" content="index, follow"/>

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/css/style.css?ver_1.47">


	<link rel="shortcut icon" href="http://crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/favicon/favicon.ico">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="header">
        <div class="desserts-banner"></div>
		<div class="wrapper header_position_single">

			<div class="header-menu">

				<nav class="menu-sp">
					<div class="back-cont">
						<a href="http://crossfood.od.ua/">На главную</a>
					</div>
				</nav>

			</div>
		</div>
	</header>