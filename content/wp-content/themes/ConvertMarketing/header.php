<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<!--




IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIII$$$$$$$$$7IMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIMMMMMMMMM$IMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIMMMMMMMMM$IMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIMMMMMMMMM$IMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIMMMMMMMMM$IMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIMMMMMMMMM$IMMMMMMMMIDMMMMMMMMIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
IIIIIIII!
IIIIII$
IIIII
III
I8
M







-->	

	<head>
	
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<script type="text/javascript" src="//use.typekit.net/vmx8kll.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
	<div class="mobile-top-bg show-for-small-only"></div>
	<div class="off-canvas-wrap">
		<div class="inner-wrap">
		
				<header class="header" role="banner">

					<div id="inner-header" class="">
<!--
						<div class="large-12 columns">
							<h1>
								<a href="<?php echo home_url(); ?>" rel="nofollow">
									<?php bloginfo('name'); ?>
								</a>
								<small>
									<?php  bloginfo('description'); ?>
								</small>
							</h1>
						</div>
-->

						 <?php get_template_part( 'partials/nav', 'offcanvas' ); ?>

						 <?php // get_template_part( 'partials/nav', 'topbar' ); ?>

						 <?php // get_template_part( 'partials/nav', 'offcanvas-sidebar' ); ?>

						<!-- You only need to use one of the above navigations.
							 Offcanvas-sidebar adds a sidebar to a "right" offcanavas menus. -->

					</div> <!-- end #inner-header -->

				</header> <!-- end header -->
			<div id="container">