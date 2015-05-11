<?php
/**
 * Template Name: Spa Page
 *
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--spa">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-sacramento active"><a href="#">spa</a></div>
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
							$fields = get_fields( get_page( get_page_by_title( 'Spa' ) ) );
							$email = $fields['email_contact'];
						?>
						<b>For reservations:</b> <?php echo "<a class='' href='$email' target='_blank'>$email</a>" ?>
					</p>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--spa2">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--minh20 casa-col--pattern-blue clear">
			        <h2 class="home-header2 font-sacramento">Spa</h2>
			        <p class="body-col-btn"><a href="#">TREATMENT MENU</a></p>
			    </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
