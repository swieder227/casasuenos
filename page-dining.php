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
						<b><?php _e( 'Black Cat BBQ', 'casasuenos' );?></b>
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
							<span class="font-sacramento">Breakfast</span>&nbsp;
						</div>
						<p class="room-paragraph">
							<?php _e( 'is served until noon in paradise. Enjoy the morning and take in the breathtaking Caribbean waters that stretch from our rustic pier towards the shores of Cancún. A delectable breakfast menu that mixes local classics with strong seafood influences.', 'casasuenos' );?>
						</p>
						<div class="dining-pricing">
							<div class="room-row room-row--header">
								<?php _e( 'Served Daily:  8:00AM - NOON', 'casasuenos' );?>
							</div>
							<!-- <div class="room-row room-row--header">
								<?php _e( 'Brunch:  8:00AM - 4:00PM', 'casasuenos' );?>
							</div> -->
						</div>
						<a target="_blank" class="btn-cta btn-cta--din-standalone" href="http://casasuenos.com/wp-content/themes/casasuenos/pdfs/ParqueSuenos_Brunch_Menu.pdf"><?php _e( 'Menu', 'casasuenos;')?></a>
					</div>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining3 casa-row--nopad">
			    <div class="room-content casa-row clear">
					<div class="casa-col--bg casa-col--40p"></div>
					<div class="casa-col--text casa-col--right casa-col--60p">
						<div class="room-title">
							<span class="font-sacramento">Black Cat BBQ</span>
						</div>
						<p class="room-paragraph">
							<?php _e( 'brings gourmet BBQ to the island. Our brisket, chicken, pork, and ribs are exquisitely smoked with zapote logs, giving each plate a rich, local flair. Rounded out with locally-sourced seafood and generous dinner salads. Black Cat is the top spot to enjoy the evening ocean and lifestyle on the southern end of the island.', 'casasuenos' );?>
						</p>
						<div class="dining-pricing">
							<div class="room-row room-row--header">
								<?php _e( 'Open Daily:  11:00 AM - 9:00 PM', 'casasuenos' );?>
							</div>
						</div>
						<a class="btn-cta btn-cta--din-standalone" href="http://casasuenos.com/wp-content/themes/casasuenos/pdfs/Black_Cat_BBQ_and_Seafood_Grill.pdf"><?php _e( 'Menu', 'casasuenos;')?></a>
					</div>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining4 casa-row--nopad">
			    <div class="room-content casa-row clear">
					<div class="casa-col--bg casa-col--40p"></div>
					<div class="casa-col--text casa-col--right casa-col--60p">
						<div class="room-title">
							<span class="font-sacramento">Sunset Pier</span>
						</div>
						<p class="room-paragraph">
							<?php _e( 'For a truly special experience, inquire about our sunset pier dinners. Available after 5pm at the end of our pier, enjoy a private evening of romance and a menu custom tailored to your desires. Reservations highly recommended.', 'casasuenos' );?>
						</p>
						<div class="dining-pricing">
							<div class="room-row room-row--header">
								<?php _e( 'Open Daily:  5:00 PM - 9:00 PM', 'casasuenos' );?>
							</div>
						</div>
						<!--a class="btn-cta btn-cta--din-standalone" href=""><?php _e( 'Menu', 'casasuenos;')?></a-->
					</div>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining5">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--40p casa-col--minh20 casa-col--pattern-blue clear">
			        <h2 class="home-header2 font-sacramento pdf-link"><?php _e( 'Ocean View Dining', 'casasuenos' );?></h2>
			    </div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
