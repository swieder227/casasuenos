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
					<div class="toptab font-sacramento active"><a href="#"><?php _e( 'spa', 'casasuenos' );?></a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div class="casa-row casa-row--nopad">
				<div class="casa-col casa-col--text clear casa-col--100p">
					<p class="body-text body-text--active">
						<?php _e( 'Welcome to the spa in Casa del los Sueños. Our tranquil spa gives is nestled with a gorgeous brick-arched ceiling and smooth wooden flooring. With an eye on promoting true pampering and special attention we offer a select range of massage and acupuncture treatments. This serene and exclusive environment will have you relaxed as our well-trained and skilled therapists work to pamper you.', 'casasuenos' );?>
					</p>
					<p class="body-text body-text--active">
						<?php _e( 'Additional services such as facials, wraps, manicures, and pedicures can be scheduled upon request. Please contact the hotel concierge for more information.', 'casasuenos' );?>
					</p>
					<p class="body-text body-text--active">
						<?php
							$fields = get_fields();
							$email = $fields['email_contact'];
						?>
						<b><?php _e( 'For reservations', 'casasuenos' );?>:</b> <?php echo "<a class='' href='$email' target='_blank'>$email</a>" ?>
					</p>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--spa2">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--pattern-blue clear">
			        <h2 class="home-header2 font-sacramento pdf-link">
			        	<a href="http://casasuenos.com/wp-content/themes/casasuenos/pdfs/Spa-Menu.pdf" target="_blank"><?php _e( 'Spa Menu', 'casasuenos' );?></a>
		        	</h2>
			    </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
