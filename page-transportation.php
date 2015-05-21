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
					<div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Rooms' )->ID) ?>">rooms</a></div>
					<div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Amenities' )->ID) ?>">amenities</a></div>
					<div class="toptab font-sacramento active"><a href="<?php echo get_permalink(get_page_by_title( 'Transportation' )->ID) ?>">transportation</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<?php $fields = get_fields(get_page_by_title( 'Transportation' )->ID); ?>

			<div class="body-text body-text--trans">
				<div class="casa-col--text casa-col--70p">
					<p class="body-text body-text-sm">Round trip transportation to Casa de los Sueños can be arranged for your convenience. We offer both Gold and Platinum Class transport options. These options are available as an add-on when you make your reservation. You may also contact us for details or to add it them at a later date.</p>
					<p class="body-text body-text-title">Round Trip Gold Transportation</p>
					<p class="body-text body-text-sm">Upon arrival to the Cancun International airport, our Gold transportation guests will be greeted by a travel agent holding a place card with their name.
						Guests will be transported directly to the Ferry, where the agent will give you round trip tickets.  Please put these tickets in a safe place, for your return trip. The trip over to the island is only 15 minutes.<br/>
						<br/>Once you arrive, the taxi promenade is accessible to the left of the Ferry Terminal. You simply need to walk over and indicate to the driver that their destination is “Casa de Los Sueños”,  the drivers know the location. Our hotel will pay this fee once you arrive. The same procedure is followed for your for return trip.</p>
					<p class="body-text body-text-subtitle">Gold Round Trip Transportation: <?php echo $fields['gold_round_price']?>
					<br>
						Gold One Way Transportation: <?php echo $fields['gold_single_price']?></p>
					<p class="body-text body-text-title">Round Trip Platinum Transportation</p>
					<p class="body-text body-text-sm">At Cancun airport, our Platinum Transportation Guests will be greeted by a travel agent holding a place card with their name. They will proceed to a private yacht where they will be transported in first class style directly to the pier of Casa de los Sueños.
					This service may be refunded and altered to Gold Transportation during inclement weather.</p>
					<p class="body-text body-text-subtitle">Platinum Round Trip Transportation: <?php echo $fields['platinum_price']?></p>
				</div>
				<div class="pattern-overlay pattern-overlay-topextra pattern-overlay-right pattern-overlay-floral"></div>
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
