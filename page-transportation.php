<?php
/**
 * Template Name: Transportation Page
 *
 * The template for displaying all pages.
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--trans">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-sacramento"><a href="<?php echo get_permalink('1727') ?>">rooms</a></div>
					<div class="toptab font-sacramento"><a href="<?php echo get_permalink('1776') ?>">amenities</a></div>
					<div class="toptab font-sacramento active"><a href="<?php echo get_permalink('1778') ?>">transportation</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div class="body-text body-text--trans">
				<div class="casa-col--text casa-col--70p">
					<p class="body-text body-text-sm">Round trip transportation to Casa de los Sueños can be arranged for your convenience. We offer both Gold and Platinum Class transport options. These options are available as an add-on when you make your reservation. You may also contact us for details or to add it them at a later date.</p>
					<p class="body-text body-text-title">Round Trip Gold Transportation</p>
					<p class="body-text body-text-sm">Upon arrival to the Cancun International airport, our Gold transportation guests will be greeted by a travel agent holding a place card with their name.
						Guests will be transported directly to the Ferry, where the agent will give you round trip tickets.  Please put these tickets in a safe place, for your return trip.  The trip over is 15 minutes.<br/><br/>Once you arrive, the taxi station is next door, the guests simply need to walk over and indicate to the driver that their destination is "Casa de Los Sueños",  the drivers know the location.  Our hotel will pay this fee once you arrive.   The same procedure  is followed for your for return trip.</p>
					<p class="body-text body-text-subtitle">Gold Round Trip Transportation: $100 USD per person
					<br>
						Gold One Way Transportation: $75 USD per person</p>
					<p class="body-text body-text-title">Round Trip Platinum Transportation</p>
					<p class="body-text body-text-sm">At Cancun airport, our Platinum Transportation Guests will be greeted by a travel agent holding a place card with their name. They will proceed to a private yacht where they will be transported in first class style directly to the pier of Casa de los Sueños.</p>
					<p class="body-text body-text-subtitle">Platinum Round Trip Transportation:  $800 USD round trip</p>
				</div>
			</div>

			<div class="border-wave"></div>
			<!-- Reserve Now -->
			<div class="casa-row clear reserve--trans">
				<div class="casa-col--bg"></div>
				<div class="casa-col--text casa-col--right casa-col--pattern-yellow">
					<p class="header-reserve-now"><a href="">Reserve<br/>Now</a></p>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
