<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Bangers' rel='stylesheet' type='text/css'>
	</head>
	<body <?php body_class(); ?>>
	  <!-- nav -->
		<a href="#" id="menu-toggle">
			<div class="hamburger">
				<div class="meat"></div>
			</div>
		</a>
		<a href="#" id="menu-toggle-bar">
			<h1>Steve Barman</h1>
		</a>
		<nav class="main-nav" role="navigation">
      <div class="nav-icon">
        <a href="/">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/steve-icon.jpg">
        </a>
      </div>
			<?php html5blank_nav(); ?>
		</nav>

		<!-- /nav -->
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					

			</header>
			<!-- /header -->
