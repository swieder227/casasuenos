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

    <div class="page-topimg page-topimg--contact">
      <div class="toptabs-contain">
        <div class="toptabs">
          <div class="toptab font-sacramento active"><a href="#">contact</a></div>
        </div>
      </div>
    </div>

    <main id="main" class="site-main" role="main">

      <div class="border-wave"></div>
  
      <div class="casa-row casa-row--nopad">
        <div class="casa-col casa-col--text casa-col--100p">
          <?php echo do_shortcode( '[contact-form-7 id="1787" title="Contact form 1"]' ) ?>    
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
