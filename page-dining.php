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
					<div class="toptab font-sacramento active"><a href="<?php echo get_permalink(get_page_by_title( 'Dining' )->ID) ?>">dining</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<?php
				$fields = get_fields( get_page( get_page_by_title( 'Dining' ) ) );
			?>

			<div class="border-wave"></div>

			<div class="casa-row casa-row--nopad">
				<div class="casa-col casa-col--text clear casa-col--100p">
					<p class="body-text body-text--dining1">
						At Casa de los Sueños, we have two great restaurants:
					</p>
					<p class="body-text body-text--dining2">
						<b>Parque de los Sueños Bar &amp; Grill</b>
						<br/>
						<b>Rêves: Oceanfront Fusion Cusine.</b>
					</p>
					<p class="body-text body-text--dining3">
						Happy Hour:
					</p>
					<p class="body-text body-text--dining4">
					Daily <?php echo $fields['happy_hour_start']."<span class='body-text-sm--dining'>PM</span> - ".$fields['happy_hour_end']."<span class='body-text-sm--dining'>PM</span>"?>
					<br/>
					<?php echo $fields['happy_hour_special'] ?>
					</p>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining2">
			    <div class="room-content casa-row clear">
					<div class="casa-col--bg casa-col--40p"></div>
					<div class="casa-col--text casa-col--right casa-col--60p">
						<div class="room-title">
							<span class="font-sacramento">Parque de los Sueños</span>&nbsp;BAR &amp;&nbsp;GRILL
						</div>
						<p class="room-paragraph">
							provides the best breakfast and lunch on the island. Enjoy a meal and take in the breathtaking Caribbean waters that stretch from our rustic pier towards the shores of Cancún. A delectable brunch menu that mixes tapas plates, local classics, and traditional bar food with strong seafood influences. 
						</p>
						<div class="dining-pricing">
							<div class="room-row room-row--header">
								Open Daily:  8:00AM - 4:00PM
							</div>
							<div class="room-row room-row--header">
								Brunch:  8:00AM - 4:00PM
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining3">
			    <div class="room-content casa-row clear">
					<div class="casa-col--bg casa-col--40p"></div>
					<div class="casa-col--text casa-col--right casa-col--60p">
						<div class="room-title">
							<span class="font-sacramento">Rêves</span>
						</div>
						<p class="room-paragraph">
							is the newest culinary triumph of Ramon, the Head Chef for Casa de los Sueños. Sample incredible contemporary fusion plates with influences across the Caribbean, Yucatan, and beyond. Dishes are created with the finest ingredients, freshest seafood, and choicest cuts. The top spot to enjoy the evening ocean and lifestyle on the southern end of the island.
						</p>
						<div class="dining-pricing">
							<div class="room-row room-row--header">
								Open Daily:  5:00 PM - 10:00 PM
							</div>
							<div class="room-row room-row--header">
								Closed on Monays during low season (May - Dec.)
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--dining4">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--40p casa-col--pattern-blue clear">
			        <h2 class="home-header2 margin-b-0 font-sacramento">Menus</h2>
			        <p class="body-col-btn"><a href="#">APPETIZER</a></p>
			        <p class="body-col-btn"><a href="#">DINNER</a></p>
			        <p class="body-col-btn"><a href="#">DESSERTS</a></p>
			    </div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
