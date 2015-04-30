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

		<div class="page-topimg page-topimg--rooms"></div>

		<main id="main" class="site-main" role="main">




			<?php
				/*
				* Iterate over the fields, and create a div.room-content foreach
				*/

				// ACF Object (advanced custom fields)
				$fields = get_fields($rooms_data->ID);

				// Helper Functions to get title
				function get_room_title($index){
					if($index == 1){
							return "<span class='font-sacramento'>Presidential</span>&nbsp;&nbsp;SUITE";
					} elseif ($index == 2) {
							return "<span class='font-sacramento'>Serenity Jacuuzzi</span>&nbsp;&nbsp;SUITE";
					} elseif ($index == 3) {
							return "<span class='font-sacramento'>Ocean View</span>&nbsp;&nbsp;KING SUITES";
					} elseif ($index == 4) {
							return "<span class='font-sacramento'>Ocean View</span>&nbsp;&nbsp;VILLA DOUBLE";
					} elseif ($index == 5) {
							return "<span class='font-sacramento'>Economy</span>&nbsp;&nbsp;VILLA KING";
					} elseif ($index == 6) {
							return "<span class='font-sacramento'>Economy</span>&nbsp;&nbsp;VILLA DOUBLE";
					}
				}

				// Loop, iterating through the fields data into the PHP template
				for($x = 1; $x <= 6; $x++){

					echo "<div class='border-wave'></div>";
					echo "
					<!-- .casa-row -->
					<div id='room-".$x."' class='room-content casa-row clear'>
						<div class='casa-col--bg casa-col--40p'></div>
						<div class='casa-col--text casa-col--right casa-col--60p'>
							<div class='room-title'>
								".get_room_title($x)."
							</div>
							<div class='room-btn btn-cta'><a href='#'>Reserve&nbsp;Now</a></div>
							<p class='room-paragraph'>
								".$fields["room_".$x."_paragraph"]."
							</p>
							<div class='room-pricing'>
								<div class='room-row'>
									<div class='room-price-col'><b>RATES</b></div>
									<div class='room-price-col'><b>REGULAR SEASON</b></div>
									<div class='room-price-col'><b>HOLIDAY 12/22&nbsp;-&nbsp;1/4</b></div>
								</div>
								<div class='room-row'>
									<div class='room-price-col'>".$fields["room_".$x."_date_1"]."</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_1_pricereg"]." USD</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_1_priceholiday"]." USD</div>
								</div>
								<div class='room-row'>
									<div class='room-price-col'>".$fields["room_".$x."_date_2"]."</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_2_pricereg"]." USD</div>
									<div class='room-price-col'>$".$fields["room_".$x."_date_2_priceholiday"]." USD</div>
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
			<div class="casa-row clear" id="rooms-reserve">
				<div class="casa-col--bg"></div>
				<div class="casa-col--text casa-col--right casa-col--pattern-yellow">
					<h2 class="home-header2 font-sacramento">Reserve<br/>Now</h2>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
