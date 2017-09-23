<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package toTheMoonAndBack
 */

get_header(); ?>


	<!-- <div id="primary" class="content-area"> -->
	<!--	<main id="main" class="site-main"> -->

		<?php
		echo "<div class=\"row mainRowPage\">";
		echo "<div class=\"col-sm-9 excerptText\">";
		while ( have_posts() ) : the_post();
			echo "<h1 style=\"font-size:25pt !important;
			color:blue !important;
			font-family: 'Passion One', cursive !important \">";
			the_title();
			echo "</h1>";
			if(has_post_thumbnail()) :
				echo "<div class=\"row\">";
				echo "<div class=\"col-sm-10\">";
				echo "<span class=\"img-responsive\" style=\"width:100% !important;\">";
				the_post_thumbnail();
				echo "</span>";
				echo "</div>";
				echo "</div>";
			endif;
			echo "<div style=\"font-size:12pt\">";
			the_content();
			echo "</div>";
			the_post_navigation();
		echo "</div>";
		get_sidebar();
		echo "</div>";
		echo "<div class=\"row\">";
		echo "<div class=\"col-sm-9\">";
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		echo "</div>";
		echo "</div>";
		endwhile; // End of the loop.

		?>

		<!-- </main> --><!-- #main -->
	<!-- </div> --><!-- #primary -->

<?php

get_footer();
