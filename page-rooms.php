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
				<div class="toptab font-sacramento active"><a href="<?php echo get_permalink(getLocalePageID( 'rooms' )) ?>"><?php _e( 'rooms', 'casasuenos' );?></a></div>
				<div class="toptab font-sacramento"><a href="<?php echo get_permalink(getLocalePageID( 'amenities' )) ?>"><?php _e( 'amenities', 'casasuenos' );?></a></div>
				<div class="toptab font-sacramento"><a href="<?php echo get_permalink(getLocalePageID( 'transportation' )) ?>"><?php _e( 'transportation', 'casasuenos' );?></a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div id="rooms-accent" class="casa-row casa-row--nopad">
				<div class="casa-col--text casa-col--70p">
					<?php 
						$url_amenities = get_permalink(getLocalePageID( "amenities" ));
						$url_transport = get_permalink(getLocalePageID( "transportation" ));
					?>
					<p class="body-text body-text--rooms">

					<?php _e( 'Enjoy serene and luxurious accommodations in each of our 10 rooms. At Casa de Los Sueños you will enjoy deluxe comforts in all our rooms, like premium linens and soaps, purified drinking water, and of course, our famous tropical island views.', 'casasuenos' );?> 

					<?php printf(__( 'Please also check out our <a href="%1$s">Amenities & Service</a> link for a full list of our amenities and services that are available. ', 'casasuenos' ), $url_amenities);?>

					<?php printf(__( 'Click here for airport <a href="%1$s">transportation</a> options.', 'casasuenos' ), $url_transport);?>

					</p>
				</div>
				<div class="pattern-overlay pattern-overlay-topextra pattern-overlay-right pattern-overlay-floral"></div>
			</div>


			<?php
				/*
				* Iterate over the fields, and create a div.room-content foreach
				*/

				// ACF Object (advanced custom fields)
				$fields = get_fields();

				// Helper Functions to get title
				function get_room_title($index){
					if($index == 1){
							return "<span class='font-sacramento'>".__('Presidential', 'casasuenos')."</span>&nbsp; ".__('SUITE', 'casasuenos');
					} elseif ($index == 2) {
							return "<span class='font-sacramento'>".__('Serenity Jacuuzzi', 'casasuenos')."</span>&nbsp; ".__('SUITE', 'casasuenos');
					} elseif ($index == 3) {
							return "<span class='font-sacramento'>".__('Ocean View', 'casasuenos')."</span>&nbsp; ".__('KING&nbsp;SUITES', 'casasuenos');
					} elseif ($index == 4) {
							return "<span class='font-sacramento'>".__('Ocean View', 'casasuenos')."</span>&nbsp; ".__('VILLA&nbsp;DOUBLE', 'casasuenos');
					} elseif ($index == 5) {
							return "<span class='font-sacramento'>".__('Economy', 'casasuenos')."</span>&nbsp; ".__('VILLA&nbsp;KING', 'casasuenos');
					} elseif ($index == 6) {
							return "<span class='font-sacramento'>".__('Economy', 'casasuenos')."</span>&nbsp; ".__('VILLA&nbsp;DOUBLE', 'casasuenos');
					} elseif ($index == 7) {
							return "<span class='font-sacramento'>".__('Rent the Whole Casa', 'casasuenos')."</span>";
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
						echo "<div class='room-btn btn-cta'><a href='".get_permalink(getLocalePageID( 'contact' ))."'>Contact&nbsp;Us</a></div>";
					} else {
						echo "<div class='room-btn btn-cta'><a target='_blank' href='http://hotel1599.openhotel.com/results.cfm'>Reserve&nbsp;Now</a></div>";
					}
							
					echo	"<p class='room-paragraph'>
								".$fields["room_".$x."_paragraph"]."
							</p>
							<div class='room-pricing'>
								<div class='room-row room-row--header clear'>
									<div class='room-price-col'>".__('RATES', 'casasuenos')."</div>
									<div class='room-price-col'>".__('REGULAR SEASON', 'casasuenos')."</div>
									<div class='room-price-col'>".__('HOLIDAY', 'casasuenos')." 12/22&nbsp;-&nbsp;1/4</div>
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
									<div class='room-fineprint'>".__( 'All rooms subject to 19% tax.', 'casasuenos' )."</div>
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
					<p class="header-reserve-now"><a target='_blank' href='http://hotel1599.openhotel.com/results.cfm'><?php _e( 'Reserve', 'casasuenos' );?><br/><?php _e( 'Now', 'casasuenos' );?></a></p>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
