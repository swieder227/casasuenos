<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package casasuenos
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'casasuenos' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-banner">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php bloginfo( 'name' ); ?>">
					<div class="site-logo"></div>
				</a>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- Hamburger -->
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="menu">
					<div></div>
					<div></div>
					<div></div>
				</button>
				<!-- Main Menu -->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'menu-all-pages-container menu-all-pages-container--'.get_locale() ) ); ?>
				<!-- Additional Buttons -->
				<div class="header-btn-extra header-btn-reservations font-sacramento"><a class="dash-sides" href="http://hotel1599.openhotel.com/results.cfm"><?php _e( 'reservations', 'casasuenos' );?></a></div>
				<div class="header-btn-extra header-btn-rooms font-sacramento"><a class="dash-sides" href="<?php echo get_permalink(getLocalePageID( 'rooms' )) ?>"><?php _e( 'rooms', 'casasuenos' );?></a></div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="stickyhead">
		<button class="menu-toggle menu-toggle-sticky">
			<div></div>
			<div></div>
			<div></div>
		</button>
		<div class="main-navigation main-navigation-sticky">
			<div class="sticky-btn-reservations dash-sides font-sacramento"><a href="http://hotel1599.openhotel.com/results.cfm"><?php _e( 'reservations', 'casasuenos' );?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu-sticky' ) ); ?>
		</div>
	</div>
	<!-- #stickyhead -->

	<div id="content" class="site-content">
