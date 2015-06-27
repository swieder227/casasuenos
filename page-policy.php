<?php
/**
 * Template Name: Policy Page
 *
 * The template for displaying policies
 *
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="page-topimg page-topimg--policy">
			
		</div>

		<main id="main" class="site-main" role="main">

			<div class="border-wave"></div>

			<div id="rooms-accent" class="casa-row casa-row--nopad">
				<div class="casa-col--text casa-col--100p">
					<div class="body-text body-text-sm body-text-2col body-text--amen ">
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="pattern-overlay pattern-overlay-topextra pattern-overlay-right pattern-overlay-floral"></div>
			</div>

			<div class="border-wave"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
