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
								echo "<span class='body-text'>";
								echo $fields["tier_".$i."_paragraph"];
								echo "</span>";	
								// Price
								echo "<p class='body-text body-text-subtitle'>";
								echo $fields["tier_".$i."_name"]." price: ".$fields["tier_".$i."_price"];
								echo "</p>";	
							echo "</span>";
						}
					?>
				</div>
				<!-- <div class="casa-col casa-col--text casa-col--weddingcontent">
					<p class="body-text body-text-title">WEDDINGS</p>
					<p class="body-text">
						Located on the gorgeous Caribbean, Casa del los Sueños is a perfect location for your beautiful, memorable wedding. 
						Our luxurious villa and spectacular carefree tropical location give brides the best of both worlds. Our villa can accommodate both casual and formal weddings.
						<br/><br/>
						At Casa de los Sueños, we specialize in destination weddings and will work closely with you to create your perfect day. 
						Whether you prefer sunset cocktails with a Spanish guitar or you want to dance the night away under the stars with a DJ, we are here to help create your ideal wedding. 
						Our on-site wedding coordinator speaks perfect English, allowing you to communicate with confidence and detail.
						<br/><br/>
						Casa de los Sueños requires a minimum two-day hotel rental for weddings from April 15th to December 15th.
						 Weddings in high-season, from December 15th to April 15th require a one-week rental in the hotel.
					</p>
					<p class="body-text body-text-title">WE OFFER</p>
					<ul class="body-text body-text--amen body-text--wedlist">
						<li>Hotel</li>
						<li>Restaurant</li>
						<li>Gorgeous tropical setting</li>
						<li>House for private events</li>
						<li>Excellent service</li>
						<li>First class food</li>
						<li>Custom cocktails</li>
						<li>Wedding Planner</li>
						<li>Minister services</li>
						<li>Variety of entertainment options</li>
						<li>Wedding decor/flowers/cake</li>
						<li>Professional Photography &amp; Video</li>
						<li>Wedding Packages</li>
					</ul>
					<p class="body-text body-text-title">EVENTS</p>
					<p class="body-text">
						Casa de los Sueños is an incredible location to stage your special event. We can cater to a host of different occasions such as: conferences, speaking events, fundraisers, special dinners, family reunions, yoga retreats, and more. Our beautiful tropical locale and attentive staff will enhance your special event and thrill your guests. Isla Mujeres also offers a variety of activities for your guests to enjoy in their downtime.
					</p>
				</div> -->
				<div class="casa-col casa-col--text casa-col--weddingform">
					<?php echo do_shortcode( '[contact-form-7 id="1787" title="Contact form 1"]' ) ?>
					<!-- <p class="body-text">
						US  877-372-3993<br>
						MX  (+52) 998-888-0370<br>
						weddings@casasuenos.com<br>
						reservations@casasuenos.com<br>
					</p> -->
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
