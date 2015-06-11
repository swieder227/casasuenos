<?php
/**
 * Template Name: Dining Page
 *
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--dining">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-sacramento active"><a href="<?php echo get_permalink(getLocalePageID( 'Dining' )) ?>"><?php _e( 'dining', 'casasuenos' );?></a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<?php
				$fields = get_fields();
			?>

			<div class="border-wave"></div>

			<div class="casa-row casa-row--nopad">
				<div class="pattern-overlay pattern-overlay-top pattern-overlay-right pattern-overlay-turtle"></div>
			</div>

			<div class="casa-row casa-row--nopad">
				<div class="casa-col casa-col--text clear casa-col--100p">
					<p class="body-text body-text--dining1">
						<?php _e( 'At Casa de los Sueños, we have two great restaurants:', 'casasuenos' );?>
					</p>
					<p class="body-text body-text--dining2">
						<b><?php _e( 'Parque de los Sueños Bar & Grill', 'casasuenos' );?></b>
						<br/>
						<b><?php _e( 'Rêves: Oceanfront Fusion Cusine.', 'casasuenos' );?></b>
					</p>
					<p class="body-text body-text--dining3">
						<?php _e( 'Happy Hour:', 'casasuenos' );?>
					</p>
					<p class="body-text body-text--dining4">
					<?php _e( 'Daily', 'casasuenos' );?> <?php echo $fields['happy_hour_start']."<span class='body-text-sm--dining'>PM</span> - ".$fields['happy_hour_end']."<span class='body-text-sm--dining'>PM</span>"?>
					<br/>
					<?php echo $fields['happy_hour_special'] ?>
					</p>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining2 casa-row--nopad">
			    <div class="room-content casa-row clear">
					<div class="casa-col--bg casa-col--40p"></div>
					<div class="casa-col--text casa-col--right casa-col--60p">
						<div class="room-title">
							<span class="font-sacramento">Parque de los Sueños</span>&nbsp;<?php _e( 'BAR &amp;&nbsp;GRILL', 'casasuenos' );?>
						</div>
						<p class="room-paragraph">
							<?php _e( 'provides the best breakfast and lunch on the island. Enjoy a meal and take in the breathtaking Caribbean waters that stretch from our rustic pier towards the shores of Cancún. A delectable brunch menu that mixes tapas plates, local classics, and traditional bar food with strong seafood influences.', 'casasuenos' );?>
						</p>
						<div class="dining-pricing">
							<div class="room-row room-row--header">
								<?php _e( 'Open Daily:  8:00AM - 4:00PM', 'casasuenos' );?>
							</div>
							<div class="room-row room-row--header">
								<?php _e( 'Brunch:  8:00AM - 4:00PM', 'casasuenos' );?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining3 casa-row--nopad">
			    <div class="room-content casa-row clear">
					<div class="casa-col--bg casa-col--40p"></div>
					<div class="casa-col--text casa-col--right casa-col--60p">
						<div class="room-title">
							<span class="font-sacramento">Rêves</span>
						</div>
						<p class="room-paragraph">
							<?php _e( 'is the newest culinary triumph of Ramon, the Head Chef for Casa de los Sueños. Sample incredible contemporary fusion plates with influences across the Caribbean, Yucatan, and beyond. Dishes are created with the finest ingredients, freshest seafood, and choicest cuts. The top spot to enjoy the evening ocean and lifestyle on the southern end of the island.', 'casasuenos' );?>
						</p>
						<div class="dining-pricing">
							<div class="room-row room-row--header">
								<?php _e( 'Open Daily:  5:00 PM - 10:00 PM', 'casasuenos' );?>
							</div>
							<div class="room-row room-row--header">
								<?php _e( 'Closed on Mondays during low season (May - Dec.)', 'casasuenos' );?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining4">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--40p casa-col--minh20 casa-col--pattern-blue clear">
			        <h2 class="home-header2 font-sacramento pdf-link"><a href="http://casasuenos.com/wp-content/themes/casasuenos/pdfs/Reves-Menus.pdf" target="_blank"><?php _e( 'Menus', 'casasuenos' );?></a></h2>
			    </div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
