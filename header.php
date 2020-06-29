<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <script src="https://kit.fontawesome.com/fae68bcb11.js" crossorigin="anonymous"></script>
    <link rel=“stylesheet” href=“https://use.typekit.net/vxn3zlv.css”>
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

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="row space-between-center p25 p020-mob" role="banner">
        <div class="row center-center">
          <div>
            <a class="hide-on-desk" href="">
              <i class="far fa-bars fa-2x purple"></i>
            </a>
          </div>
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logos/primary.svg" alt="LeaseXpert" />
          </a>
          <div class="row center-center hide-on-mob">
            <a class="secondary-btn-short nohover" href="">Learning Center</a>
            <a class="secondary-btn-short nohover" href="">Contact Us</a>
          </div>
        </div>
        <div class="row center-center">
          <a class="secondary-btn-short btn-border hide-on-mob" href="">Sign In</a>
          <div class="row center-center">
            <a class="primary-btn-short ml25 m0-mob" href="">Get Started<i class="far fa-angle-right"></i></a>
          </div>
        </div>

        <!-- nav
        <nav class="nav" role="navigation">
          <?php html5blank_nav(); ?>
        </nav>
        /nav -->

			</header>
			<!-- /header -->
