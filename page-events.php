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
          <div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Weddings & Events' )->ID) ?>">weddings</a></div>
          <div class="toptab font-sacramento active"><a href="#">events</a></div>
        </div>
      </div>
    </div>

    <main id="main" class="site-main" role="main">

      <div class="casa-row casa-row--nopad clear">
        <div class="casa-col casa-col--text casa-col--100p">
          <p class="body-text body-text-title">WE OFFER</p>
          <ul class="body-text body-text-2col body-text--events">
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
        </div>
        <div class="pattern-overlay pattern-overlay-topextra pattern-overlay-right pattern-overlay-floral"></div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
