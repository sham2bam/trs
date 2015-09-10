<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Launchframe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@whiteboardis">

<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:description" content="">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory');?>/assets/dist/img/share-img.jpg">

<meta name="og:image" content="<?php bloginfo('template_directory');?>/assets/dist/img/og-share.jpg">
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:site_name" content="<?php the_title(); ?>">
<meta property="og:type" content="blog">
<meta property="og:description" content="">

<?php wp_head(); ?>
<script src="https://use.typekit.net/kpv4kbe.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>

<body <?php body_class(); ?>>

	<header class="site-header" role="banner">
		<div class="container">
			<div class="col-md-6">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
					<h1><?php bloginfo( 'name' ); ?></h1>
				</a>
			</div>
			<div class="col-md-6">
				<nav id="site-navigation" class="site-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->
  <div class="header-ghost"></div>
