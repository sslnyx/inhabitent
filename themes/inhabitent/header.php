<?php
/**
 * The header for our theme.
 *
 * @package inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/build/css/style.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeedsite">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="banner-wrap">
				<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="white-tent" src="<?php echo get_template_directory_uri();?>/img/logos/inhabitent-logo-tent.svg"/></a>
					
					<!-- <h1 class="site-title screen-reader-text"><a href=" -->
					<?php 
					// echo esc_url( home_url( '/' ) ); 
					?>
					<!-- " rel="home"> -->
					 <?php
						// bloginfo( 'name' ); 
						?>
					<!-- </a></h1> -->
					<!-- <p class="site-description"> -->
						<?php 
						// bloginfo( 'description' );
						 ?>
						 <!-- </p> -->
						 

				<div class="nav-menu">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> -->
						<?php
						//  esc_html( 'Primary Menu' ); 
						 ?>
						 <!-- </button> -->
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				
				<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
</div>
				

				</div>
				<!-- .site-branding -->			
</div> <!-- banner wrap-->
				
			</header><!-- #masthead -->

			<div id="content" class="site-content">
