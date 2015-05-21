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
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--70p clear">
	            <h2 class="home-header2 font-sacramento">&mdash;&nbsp;Welcome&nbsp;&mdash;</h2>
	            <p class="home-paragraph"><?php _e( 'Breathtaking views and an inviting atmosphere are the hallmarks of this beautiful boutique hotel.
	            	With a warm and attentive staff, Casa de los Sueños will strive to discover and fulfill your every need and wish.', 'casasuenos' );?></p>
	        </div>
	        <div class="pattern-overlay pattern-overlay-top pattern-overlay-left pattern-overlay-turtle"></div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-rooms">
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--right casa-col--solid-blue clear">
	            <h2 class="home-header2 font-sacramento">Tropical</h2>
							<h3 class="home-header3">Dreams</h3>
							<p class="home-paragraph">From the moment you walk through the door, Casa de los Sueños radiates tranquility, peace and a sense of “home.” With nine ocean view suites and a Presidential Suite, 
							Casa de los Sueños is the answer to a dream vacation, whether you are planning a family reunion, a destination wedding in Mexico, or an exclusive and relaxing retreat.</p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_rooms ?>">click to reserve</a>
	        </div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-activities">
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--pattern-yellow clear">
	            <h2 class="home-header2 font-sacramento">Paradise</h2>
	            <h3 class="home-header3">Awaits</h3>
	            <p class="home-paragraph">Located on Isla Mujeres, Casa de los Sueños offers a range of activities in our secluded location for you to enjoy, 
	            and is an ideal base camp from which to explore the beautiful and authentic community located on the island.</p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_activities ?>">click for adventure</a>
	        </div>
	        <div class="pattern-overlay pattern-overlay-topextra pattern-overlay-zextra pattern-overlay-right pattern-overlay-floral"></div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-dining">
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--right casa-col--pattern-blue clear">
	            <h2 class="home-header2 font-sacramento">Indulge</h2>
	            <h3 class="home-header3">In Taste</h3>
	            <p class="home-paragraph">The top spot to enjoy the evening. Casa de los Sueños provides a sanctuary on the southern end of the island. 
	            Home of two great restaurants, featuring fresh ingredients, local music, and happy hour specials.</p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_dining ?>">see more</a>
	        </div>
	    </div>
	    <div class="border-wave"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

