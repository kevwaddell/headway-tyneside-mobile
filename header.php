<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="top-nav nav-closed">
	<?php wp_nav_menu(array( 'container' => '', 'theme_location' => 'top_bar_menu', 'menu_class'  => 'list-unstyled','fallback_cb' => false ) ); ?>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<a class="logo" href="<?php echo get_option('home'); ?>/"><span class="sr-only"><?php bloginfo('name'); ?></span></a>
		<button id="main-nav-btn" class="btn btn-default"><i class="fa fa-bars"></i><span class="sr-only">Main navigation</span></button>
	</header><!-- #masthead -->
	
	<div id="primary" class="content-area nav-closed">