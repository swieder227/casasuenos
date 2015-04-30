<?php
/**
 * Template Name: Static Front Page
 *
 * The default home page
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<?php
		$url_rooms = get_permalink(get_page_by_title( 'Rooms' )->ID);
		$url_activities = get_permalink(get_page_by_title( 'Activities' )->ID);
		$url_dining = get_permalink(get_page_by_title( 'Dining' )->ID);
	?>

	<div id="primary" class="content-area">

		<div class="page-topimg"></div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>
			<div class="casa-row casa-row--nopad clear" id="home-welcome">
	        <div class="casa-row-bg"></div>
	        <div class="casa-col clear">
	            <h2 class="home-header2 font-sacramento">&mdash;&nbsp;Welcome&nbsp;&mdash;</h2>
	            <p class="home-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
	            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
	            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
	            aliquip ex ea commodo consequat.</p>
	        </div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-rooms">
	        <div class="casa-row-bg"></div>
	        <div class="casa-col casa-col--right casa-col--solid-blue clear">
	            <h2 class="home-header2 font-sacramento">Tropical</h2>
							<h3 class="home-header3">Dreams</h3>
							<p class="home-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
	            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
	            ad minim veniam, quis nostrud .</p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_rooms ?>">click to reserve</a>
	        </div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-activities">
	        <div class="casa-row-bg"></div>
	        <div class="casa-col casa-col--pattern-yellow clear">
	            <h2 class="home-header2 font-sacramento">Paradise</h2>
	            <h3 class="home-header3">Awaits</h3>
	            <p class="home-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
	            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud .</p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_activities ?>">click for adventure</a>
	        </div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-dining">
	        <div class="casa-row-bg"></div>
	        <div class="casa-col casa-col--right casa-col--pattern-blue clear">
	            <h2 class="home-header2 font-sacramento">Indulge</h2>
	            <h3 class="home-header3">In Taste</h3>
	            <p class="home-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud .</p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_dining ?>">see more</a>
	        </div>
	    </div>
	    <div class="border-wave"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

