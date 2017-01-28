<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and main content div and a grid row
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<a class="sr-only" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="top" class="site-header" role="banner">
		<nav class="navbar navbar-inverse main-navigation" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="primary-menu" aria-expanded="false">
						<span class="sr-only"><?php esc_html_e( 'Toggle navigation', '_s' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<?php wp_nav_menu( array(
						'theme_location'    => 'primary',
						'menu'              => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
				); ?>
			</div>
		</nav>
	</header>

	<div class="container-fluid">
		<h2 class="lead"><?php bloginfo( 'description' ); ?></h2>
	</div>

	<div id="content" class="container-fluid">
		<div class="row">