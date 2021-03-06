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
<!-- Favicon : http://realfavicongenerator.net/ -->
<link rel="apple-touch-icon" sizes="57x57" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="http://casasuenos.com/wp-content/themes/casasuenos/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="http://casasuenos.com/wp-content/themes/casasuenos/favicons/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<script>
	/* Test for flexbox supprt. If found, add class to DOM */
	if( document.documentElement.style &&
		document.documentElement.style.flex != undefined ||
		document.documentElement.style.webkitFlex != undefined ||
		document.documentElement.style.mozFlex != undefined ||
		document.documentElement.style.msFlex != undefined ||
		document.documentElement.style.oFlex != undefined ||
		document.documentElement.style.boxDirection != undefined ){
		document.documentElement.className += "supportsFlexbox";
	}
</script>
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
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'menu-all-pages-container') ); ?>
				<!-- Additional Buttons -->
				<div class="header-btn-extra header-btn-reservations font-sacramento"><a class="dash-sides" href="http://hotel1599.openhotel.com/results.cfm"><?php _e( 'reservations', 'casasuenos' );?></a></div>
				<div class="header-btn-extra header-btn-rooms font-sacramento"><a class="dash-sides" href="<?php echo get_permalink(getLocalePageID( 'rooms' )) ?>"><?php _e( 'rooms', 'casasuenos' );?></a></div>
				<a class="header-special-btn" href="https://parque.webconnex.com/NewYearsEve?utm_source=casadelossuenos&utm_medium=Website&utm_campaign=CasaButtonClicks"></a>
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
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu-sticky', 'container_class' => 'menu-all-pages-container menu-all-pages-container--'.get_locale() ) ); ?>
		</div>
	</div>
	<!-- #stickyhead -->

	<div id="content" class="site-content">
