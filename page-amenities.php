<?php
/**
 * Template Name: Amenities Page
 *
 * The template for displaying all pages.
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--amen">
			<div class="toptabs-contain">
				<div class="toptabs">
					<div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Rooms' )->ID) ?>">rooms</a></div>
					<div class="toptab font-sacramento active"><a href="<?php echo get_permalink(get_page_by_title( 'Amenities' )->ID) ?>">amenities</a></div>
					<div class="toptab font-sacramento"><a href="<?php echo get_permalink(get_page_by_title( 'Transportation' )->ID) ?>">transportation</a></div>
				</div>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div class="body-text body-text-sm body-text--amen">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
				<div class="pattern-overlay pattern-overlay-topextra pattern-overlay-right pattern-overlay-floral"></div>
			</div>

			<div class="border-wave"></div>
			<!-- Reserve Now -->
			<div class="casa-row clear reserve--amen">
				<div class="casa-col--bg"></div>
				<div class="casa-col--text casa-col--right casa-col--pattern-yellow">
					<p class="header-reserve-now"><a href="">Reserve<br/>Now</a></p>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
