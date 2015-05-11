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
					<div class="toptab font-sacramento active"><a href="#">activities</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div class="casa-row casa-row--nopad">
				<div class="casa-col casa-col--text clear casa-col--100p">
					<p class="body-text body-text--active">
						Welcome to the spa in Casa del los Sueños. Our beautiful, peaceful spa gives you the special attention and treatment you deserve. With the concept of promoting true pampering and special attention in a beautiful and peaceful atmosphere, we are proud to give you an opportunity to immerse yourself our enchanting treatments. Our spa offers a serene and exclusive environment for a wide range of relaxing and rejuvenating treatments. Our well trained and skilled therapists will leave you with another memorable experience of Isla Mujeres, where you can experience fabulous delights for the mind, body and spirit.
					</p>
					<p class="body-text body-text--active">
						<?php
							$fields = get_fields( get_page( get_page_by_title( 'Activities' ) ) );
							$email = $fields['email_contact'];
						?>
						<b>For reservations:</b> <?php echo "<a class='' href='$email' target='_blank'>$email</a>" ?>
					</p>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--active1">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--pattern-brightyellow clear">
			        <h2 class="home-header2 font-sacramento">Bikes</h2>
			        <p class="home-paragraph">Grab one of the Casa bikes and explore the island.</p>
			    </div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--active2">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--right casa-col--pattern-blue clear">
			        <h2 class="home-header2 font-sacramento">Pool</h2>
			        <p class="home-paragraph">Swim or relax by our gorgeous infinity pool, just for guests.</p>
			    </div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--active3">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--pattern-yellow clear">
			        <h2 class="home-header2 font-sacramento">Parque<span class="home-header2-sm">de los</span>Suenos</h2>
			        <p class="home-paragraph">Ready for some fun? The Casa’s adventurous-side is Parque de los Suenos. Located on the lower part of the property, head to the Parque for island adventure.</p>
			        <a class="home-anchor font-sacramento" href="#">see more</a>
			    </div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
