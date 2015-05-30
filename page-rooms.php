<?php
/**
 * Template Name: Rooms Page
 *
 * The template for displaying all pages.
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--rooms">
			<div class="toptabs-contain">
				<div class="toptabs">
				<div class="toptab font-sacramento active"><a href="<?php echo get_permalink(get_page_by_title( 'Rooms' )->ID) ?>">rooms</a></div>
				<div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Amenities' )->ID) ?>">amenities</a></div>
				<div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Transportation' )->ID) ?>">transportation</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div id="rooms-accent" class="casa-row casa-row--nopad">
				<div class="casa-col--text casa-col--70p">
					<p class="body-text body-text--rooms">Enjoy serene and luxurious accommodations in each of our 10 rooms. At Casa de Los Sueños you will enjoy deluxe comforts in all our rooms, like premium linens and soaps, purified drinking water, and of course, our famous tropical island views. Please also check out our <a href="<?php echo get_permalink(get_page_by_title( 'Amenities' )->ID) ?>">Amenities & Service</a> link for a full list of our amenities and services that are available. Click here for airport <a href="<?php echo get_permalink(get_page_by_title( 'Transportation' )->ID) ?>">transportation</a> options.</p>
				</div>
				<div class="pattern-overlay pattern-overlay-topextra pattern-overlay-right pattern-overlay-floral"></div>
			</div>


			<?php
				/*
				* Iterate over the fields, and create a div.room-content foreach
				*/

				// ACF Object (advanced custom fields)
				$fields = get_fields($rooms_data->ID);

				// Helper Functions to get title
				function get_room_title($index){
					if($index == 1){
							return "<span class='font-sacramento'>Presidential</span>&nbsp; SUITE";
					} elseif ($index == 2) {
							return "<span class='font-sacramento'>Serenity Jacuuzzi</span>&nbsp; SUITE";
					} elseif ($index == 3) {
							return "<span class='font-sacramento'>Ocean View</span>&nbsp; KING&nbsp;SUITES";
					} elseif ($index == 4) {
							return "<span class='font-sacramento'>Ocean View</span>&nbsp; VILLA&nbsp;DOUBLE";
					} elseif ($index == 5) {
							return "<span class='font-sacramento'>Economy</span>&nbsp; VILLA&nbsp;KING";
					} elseif ($index == 6) {
							return "<span class='font-sacramento'>Economy</span>&nbsp; VILLA&nbsp;DOUBLE";
					} elseif ($index == 7) {
							return "<span class='font-sacramento'>Rent the Whole Casa</span>";
					}
				}

				// Loop, iterating through the fields data into the PHP template
				for($x = 1; $x <= 7; $x++){

					echo "<div class='border-wave'></div>";
					echo "
					<!-- .casa-row -->
					<div id='room-".$x."' class='room-content casa-row clear'>
						<div class='casa-col--bg casa-col--40p'></div>
						<div class='casa-col--text casa-col--right casa-col--60p'>
							<div class='room-title'>
								".get_room_title($x)."
							</div>";
					
					if($x == 7){
						echo "<div class='room-btn btn-cta'><a href='".get_permalink(get_page_by_title( 'Contact' )->ID)."'>Contact&nbsp;Us</a></div>";
					} else {
						echo "<div class='room-btn btn-cta'><a href='http://hotel1599.openhotel.com/results.cfm'>Reserve&nbsp;Now</a></div>";
					}
							
					echo	"<p class='room-paragraph'>
								".$fields["room_".$x."_paragraph"]."
							</p>
							<div class='room-pricing'>
								<div class='room-row room-row--header clear'>
									<div class='room-price-col'>RATES</div>
									<div class='room-price-col'>REGULAR SEASON</div>
									<div class='room-price-col'>HOLIDAY 12/22&nbsp;-&nbsp;1/4</div>
								</div>
								<div class='room-row clear'>
									<div class='room-price-col'>".$fields["room_".$x."_date_1"]."</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_1_pricereg"]." USD</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_1_priceholiday"]." USD</div>
								</div>
								<div class='room-row clear'>
									<div class='room-price-col'>".$fields["room_".$x."_date_2"]."</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_2_pricereg"]." USD</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_2_priceholiday"]." USD</div>
								</div>
								<div class='room-row clear'>
									<div class='room-fineprint'>All rooms subject to 19% tax</div>
								</div>
							</div>
						</div>
					</div>
					<!-- .casa-row -->
					";
				}

			?>

			<div class="border-wave"></div>
			<!-- Reserve Now -->
			<div class="casa-row clear reserve--rooms">
				<div class="casa-col--bg"></div>
				<div class="casa-col--text casa-col--right casa-col--pattern-yellow">
					<p class="header-reserve-now"><a href="">Reserve<br/>Now</a></p>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
