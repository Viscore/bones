<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="geo.region" content="AU-VIC" />
		<meta name="geo.placename" content="" />
		<meta name="geo.position" content="[LAT];[LNG]" />
		<meta name="ICBM" content="[LAT], [LNG]" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<!--[if lt IE 9]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/library/js/libs/modernizr.custom.min.js?ver=2.6.2'></script>
			<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/library/js/libs/respond.min.js?ver=1.1.0'></script>
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="container">
			<header class="header" role="banner">
				<div class="row">
					<div class="large-4 columns">
						<p id="logo" class="h1">
							<a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
						</p>
					</div><!-- Large 4 -->
					<div class="large-8 columns">
						<nav role="navigation">
							<?php viscore_main_nav(); ?>
						</nav>
					</div><!-- Large 8 -->
				</div><!-- Row -->
			</header><!-- Header -->