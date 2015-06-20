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
		$url_rooms = get_permalink(getLocalePageID( 'rooms' ));
		$url_activities = get_permalink(getLocalePageID( 'activities' ));
		$url_dining = get_permalink(getLocalePageID( 'dining' ));
	?>

	<div id="primary" class="content-area">

		<div class="page-topimg"></div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>
			<div class="casa-row casa-row--nopad clear" id="home-welcome">
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--60p clear">
	            <h2 class="home-header2 font-sacramento">&mdash;&nbsp;<?php _e( 'Welcome', 'casasuenos' );?>&nbsp;&mdash;</h2>
	            <p class="home-paragraph"><?php _e( 'Breathtaking views and an inviting atmosphere are the hallmarks of this beautiful boutique hotel. With a warm and attentive staff, Casa de los Sueños will strive to discover and fulfill your every need and wish.', 'casasuenos' );?></p>
	        </div>
	        <div class="pattern-overlay pattern-overlay-top pattern-overlay-left pattern-overlay-turtle"></div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-rooms">
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--right casa-col--solid-blue clear">
	            <h2 class="home-header2 font-sacramento"><?php _e('Tropical', 'casasuenos' );?></h2>
					<h3 class="home-header3"><?php _e('Dreams', 'casasuenos' );?></h3>
					<p class="home-paragraph"><?php _e('From the moment you walk through the door, Casa de los Sueños radiates tranquility, peace and a sense of “home.” With nine ocean view suites and a Presidential Suite, 
					Casa de los Sueños is the answer to a dream vacation, whether you are planning a family reunion, a destination wedding in Mexico, or an exclusive and relaxing retreat.', 'casasuenos' );?></p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_rooms ?>"><?php _e('click to reserve', 'casasuenos' );?></a>
	        </div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-activities">
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--pattern-yellow clear">
	            <h2 class="home-header2 font-sacramento"><?php _e('Paradise', 'casasuenos' );?></h2>
	            <h3 class="home-header3"><?php _e('Awaits', 'casasuenos' );?></h3>
	            <p class="home-paragraph"><?php _e('Located on Isla Mujeres, Casa de los Sueños offers a range of activities in our secluded location for you to enjoy, and is an ideal base camp from which to explore the beautiful and authentic community located on the island.', 'casasuenos' );?></p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_activities ?>"><?php _e('click for adventure', 'casasuenos' );?></a>
	        </div>
	        <div class="pattern-overlay pattern-overlay-topextra pattern-overlay-zextra pattern-overlay-right pattern-overlay-floral"></div>
	    </div>
	    <div class="border-wave"></div>
	    <div class="casa-row clear" id="home-dining">
	        <div class="casa-col--bg"></div>
	        <div class="casa-col--text casa-col--right casa-col--pattern-blue clear">
	            <h2 class="home-header2 font-sacramento"><?php _e('Indulge', 'casasuenos' );?></h2>
	            <h3 class="home-header3"><?php _e('In Taste', 'casasuenos' );?></h3>
	            <p class="home-paragraph"><?php _e('The top spot to enjoy the evening. Casa de los Sueños provides a sanctuary on the southern end of the island. Home of two great restaurants, featuring fresh ingredients, local music, and happy hour specials.', 'casasuenos' );?></p>
	            <a class="home-anchor font-sacramento" href="<?php echo $url_dining ?>"><?php _e('see more', 'casasuenos' );?></a>
	        </div>
	    </div>
	    <div class="border-wave"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

