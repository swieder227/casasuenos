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
						Welcome to the spa in Casa del los Sueños. Our tranquil spa gives is nestled with a gorgeous brick-arched ceiling and smooth wooden flooring. With an eye on promoting true pampering and special attention we offer a select range of massage and acupuncture treatments. This serene and exclusive environment will have you relaxed as our well-trained and skilled therapists work to pamper you.
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
