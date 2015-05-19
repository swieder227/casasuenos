<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package casasuenos
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container-fluid" role="main">

		<!--

		<?php

			// Get Pages, sort by order
			$pages = get_pages( array('sort_column' => 'menu_order'));
			foreach ($pages as $page_data) {

				// ACF Object (advanced custom fields)
				$fields = get_fields($page_data);
				// Boolean to show/hide on index.php
				if($fields['show_on_home_page']){

					// Get content
					$page_title = $page_data->post_title;
					$page_home_title = $fields['home_title'];
					$page_home_paragraph = $fields['home_paragraph'];
					$page_home_anchor = $fields['home_button'];
					$page_url = get_permalink($page_data->ID);

					// div#title view with content.
					echo "<div id=".$page_title." class='home-row'>";
						echo "<div class='home-bg'></div>";
						echo "<div class='home-col'>";
							// Titles. h2{1st word} + h3{rest of string}
							echo "<h2 class='home-header2 font-sacramento'>".explode(' ',trim($page_home_title))[0]."</h2>";
							if(strstr($page_home_title," "))
							echo "<h3 class='home-header3'>".strstr($page_home_title," ")."</h3>";
							echo "<p>".$page_home_paragraph."</p>";
							if($page_home_anchor)
								echo "<a class='home-anchor font-sacramento' href='".$page_url."'>".$page_home_anchor."</a>";
						echo "</div>";
					echo "</div>";

				}

			}

		?>

		-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
