<?php
/**
 * Template Name: Contact Page
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
          <div class="toptab font-sacramento active"><a href="#">contact</a></div>
        </div>
      </div>
    </div>

    <main id="main" class="site-main" role="main">

      <div class="border-wave"></div>
  
      <?php echo do_shortcode( '[contact-form-7 id="1787" title="Contact form 1"]' ) ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
