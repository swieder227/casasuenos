<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="page-header">
					<br><br><br><br><br>
					<p class="body-text-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'casasuenos' ); ?></p>
				</header><!-- .page-header -->

				<div class="page-content">
					<a href="www.casasuenos.com"><?php _e( 'Return to the home page', 'casasuenos' ); ?></a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
