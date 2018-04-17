<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<?php if ($_SERVER['SERVER_NAME']=='www.headwaytyneside.com') { ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WRQV2XS');</script>
	<!-- End Google Tag Manager -->
	<?php } ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ($_SERVER['SERVER_NAME']=='www.headwaytyneside.com') { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRQV2XS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<?php } ?>
<div id="page" class="site">
	<div class="top-nav nav-closed">
	<?php wp_nav_menu(array( 'container' => '', 'theme_location' => 'top_bar_menu', 'menu_class'  => 'list-unstyled','fallback_cb' => false ) ); ?>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<a class="logo" href="<?php echo get_option('home'); ?>/"><span class="sr-only"><?php bloginfo('name'); ?></span></a>
		<button id="main-nav-btn" class="btn btn-default"><i class="fa fa-bars"></i><span class="sr-only">Main navigation</span></button>
	</header><!-- #masthead -->
	
	<div id="primary" class="content-area nav-closed">