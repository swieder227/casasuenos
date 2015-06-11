<?php
/**
 * Template Name: Events Page
 *
 *
 *
 * @package casasuenos
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <div class="page-topimg page-topimg--events">
      <div class="toptabs-contain">
        <div class="toptabs">
          <div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Weddings & Events' )->ID) ?>"><?php _e( 'weddings', 'casasuenos' );?></a></div>
          <div class="toptab font-sacramento active"><a href="#"><?php _e( 'events', 'casasuenos' );?></a></div>
        </div>
      </div>
    </div>

    <main id="main" class="site-main" role="main">

      <div class="casa-row casa-row--nopad clear">
        <div class="casa-col casa-col--text casa-col--100p">
          <p class="body-text body-text-title"><?php _e( 'EVENTS', 'casasuenos' );?></p>
          <p class="body-text"><?php _e( 'Casa de los Sueños is an incredible location to stage your special event. We can cater to a host of different occasions such as: conferences, speaking events, fundraisers, special dinners, family reunions, yoga retreats, and more. Our beautiful tropical locale and attentive staff will enhance your special event and thrill your guests. Isla Mujeres also offers a variety of activities for your guests to enjoy in their downtime.', 'casasuenos' );?></p>
          <p class="body-text body-text-title"><?php _e( 'For any event Casa de los Suenos offers:', 'casasuenos' );?></p>
          <ul class="body-text body-text-2col body-text--events">
            <li><?php _e( 'Hotel', 'casasuenos' );?></li>
            <li><?php _e( 'Restaurant', 'casasuenos' );?></li>
            <li><?php _e( 'Excellent Service', 'casasuenos' );?></li>
            <li><?php _e( 'Upscale Food', 'casasuenos' );?></li>
            <li><?php _e( 'Custom Cocktails', 'casasuenos' );?></li>
            <li><?php _e( 'Wedding Planner', 'casasuenos' );?></li>
            <li><?php _e( 'Minister Services', 'casasuenos' );?></li>
            <li><?php _e( 'Variety of Entertainment Options', 'casasuenos' );?></li>
            <li><?php _e( 'Wedding Decor/Flowers/Cake', 'casasuenos' );?></li>
            <li><?php _e( 'Professional Photography', 'casasuenos' );?></li>
            <li><?php _e( 'Wedding Packages', 'casasuenos' );?></li>
          </ul>
          <p class="body-text"><?php _e( 'Send us a message right now, email us (<a href="mailto:reservations@casasuenos.com">reservations@casasuenos.com</a>) or call us, US Toll free 877-372-3993 or in Mexico at (+52) 998-888-0370 for more information.', 'casasuenos' );?></p>
        </div>
        <div class="pattern-overlay pattern-overlay-topextra pattern-overlay-right pattern-overlay-floral"></div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
