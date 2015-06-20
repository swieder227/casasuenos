<?php
/**
 * Template Name: Activities Page
 *
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--active">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-sacramento active"><a href="#"><?php _e('activities', 'casasuenos' );?></a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div class="casa-row casa-row--nopad">
				<div class="casa-col casa-col--text clear casa-col--100p">
					<p class="body-text body-text--active">
						<?php _e('Whether you feel like biking around the island or lounging by the pool, Casa de los Sueños offers a range of activities to ensure your visit with us is an extraordinary experience! We also offer hotel guests deeply discounted passes to our Parque located adjacent to the hotel with kayaking, paddle boarding, snorkeling, zip-line, slides, and more.', 'casasuenos' );?>
						<br/>
						<br/> 
						<?php _e('Isla Mujeres is a unique place; it is a small peaceful, island less than five miles long (8 km approx.) just a 20 minute boat ride from Cancun. This beautiful island combines the beauty of the Caribbean, the dense tropical jungle and the wonderful heritage of the Mayan civilization. It stands out as one of Mexico’s natural treasures, a truly delightful paradise on earth. Isla Mujeres has a lot to offer. You will find specialty,international, and regional restaurants, beaches, Caribbean shows, swimming with dolphins, swimming with whale sharks watching (May thru September), turtle refuge and much more. We encourage you to explore the beautiful tropical island around you.', 'casasuenos' );?>
					</p>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--active1">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--pattern-brightyellow clear">
			        <h2 class="home-header2 font-sacramento"><?php _e('Bikes', 'casasuenos' );?></h2>
			        <p class="home-paragraph home-paragraph-2"><?php _e('Grab one of the Casa’s bikes and explore the island. Each bike is equipped with a basket for your convenience and a bike lock will be provided by our concierge. A great way to tour the authentic island sites and exercise.', 'casasuenos' );?></p>
			    </div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--active2">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--right casa-col--pattern-blue clear">
			        <h2 class="home-header2 font-sacramento"><?php _e('Pool', 'casasuenos' );?></h2>
			        <p class="home-paragraph home-paragraph-2"><?php _e('Swim or relax by our gorgeous infinity pool, located in the main hotel on a stunning open-air terrace. This pool is reserved exclusively for hotel guests. Access to the main pool in the Parque, with swim-up bar and appetizer tables, is included as well.', 'casasuenos' );?></p>
			    </div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--active3">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--pattern-yellow clear">
			        <h2 class="home-header2 font-sacramento">Parque<span class="home-header2-sm">de los</span>Suenos</h2>
			        <p class="home-paragraph home-paragraph-2"><?php _e('Ready for some fun? The Casa’s adventurous-side is Parque de los Suenos. Located on the lower part of the property, head to the Parque for island adventure. All hotel guests can access the main pool, swim-up bar, and private deck without cost. A 50% discount to the Parque is available for those who wish to engage in other water activities.', 'casasuenos' );?></p>
			        <a class="home-anchor font-sacramento" href="http://parquesuenos.com/" target="_blank"><?php _e( 'see more', 'casasuenos' );?></a>
			    </div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
