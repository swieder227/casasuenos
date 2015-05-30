<?php
/**
 * Template Name: Wedding Page
 *
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--wed">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-sacramento active"><a href="#">weddings</a></div>
					<div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Events' )->ID) ?>">events</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div class="casa-row casa-row--nopad clear">
				<div class="casa-col casa-col--text casa-col--weddingcontent">
					<?php 
						$fields = get_fields(get_page_by_title( 'Weddings & Events' )->ID);

						//Intro paragraph
						echo "<span class='body-text'>";
						echo $fields["wedding_intro"];
						echo "</span>";	

						for ($i=1; $i <= 3; $i++) { 
							echo "<span class='body-text body-text-title'>";
							// Title
							echo $fields["tier_".$i."_name"];
								// Body
								echo "<p class='body-text'>Package includes</p>";
								
								echo "<span class='body-text'>";
								echo $fields["tier_".$i."_paragraph"];
								echo "</span>";	
								// Price
								echo "<p class='body-text body-text-subtitle'>";
								echo $fields["tier_".$i."_price"];
								echo "</p>";	
							echo "</span>";

							echo "<br>";
						}
					?>
					<p class="body-text">
						Send us a message right now, email us (<a href="weddings@casasuenos.com">weddings@casasuenos.com</a>) or call us, US Toll free 877-372-3993 or in Mexico at (+52) 998-888-0370 for more information.

						We look forward to hearing from you.
					</p>
				</div>
				<div class="casa-col casa-col--text casa-col--weddingform">
					<?php echo do_shortcode( '[contact-form-7 id="1787" title="Contact form 1"]' ) ?>
				</div>
			</div>
			<div class="border-wave"></div>
			<div class="casa-row clear casa-row--wed2">
			    <div class="casa-col--bg"></div>
			    <div class="casa-col--text casa-col--30p casa-col--right casa-col--pattern-yellow clear">
			        <h2 class="home-header2 font-sacramento">Call for Packages</h2>
			    </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
