<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package casasuenos
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<ul class="clear">
				<li>CASA de los Sueños</li>
				<li>Isla Mujeres, Mexico</li>
				<li>US Toll free 877-372-3993</li>
				<li>Mexico 998-888-0369</li>
				<li><a target="_blank" href="mailto:reservations@casasuenos.com">Reservations@casasuenos.com</a></li>
				<li><a target="_blank" href="<?php echo get_permalink(getLocalePageID('privacy')); ?>">Privacy Policy</a></li>
				<li class="fb-ico"><a target="_blank" href="https://www.facebook.com/CasaSuenos"><img src="http://casasuenos.com/wp-content/themes/casasuenos/imgs/ico-facebook.png" alt="Facebook"></a></li>
			</ul>

			<!--ul><?php pll_the_languages();?></ul-->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
