<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package toTheMoonAndBack
 */

get_header(); ?>

	
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			echo "<div id=\"containerThree\" class=\"row\">"; // Open Container Three
			/* Start the Loop */
			echo "<div id=\"containerFour\" class= \"col-sm-10 col-sm-offset-1\">"; //open container four
			echo "<div id=\"containerFour\" class= \"row sideRow\">"; //open container nine
			while ( have_posts() ) : the_post();

				if(has_post_thumbnail()) :

				echo "<div id=\"containerEight\" class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">"; //Open Container ten
				echo "<div id=\"containerFive\" class=\"row\">"; // Open Container five
				echo "<div id=\"containerEight\" class=\"col-sm-12\">"; //Open Container eight
				echo "<span class=\"img-responsive\">";
				echo "<a href=\"". get_permalink() ."\">";
				the_post_thumbnail();
				echo "</a>";
				echo "</span>";
				echo "</div>"; // Close Container eight

				echo "</div>"; // Close Container five
endif;
				// echo "<div id=\"containerSix\" class=\"row\">"; // Open Container six
				echo "<div id=\"containerTherteen\"class=\"row\">"; // container 13
				echo "<div class=\"col-sm-12\"id=\"containerfourteen\">"; // col Text 14
				echo "<h1 style=\"font-size:15pt !important;
				color:DarkRed !important;
				font-family: 'Passion One', cursive !important \">";
				echo "<a href=\"". get_permalink() ."\">";

				the_title();
				echo "</a>";
				echo "</h1>";
				echo "</div>";// col close 14
				echo "</div>"; // con close 13

				// echo "</div>"; // Close Container six
				// echo "<div id=\"containerSeven\" class=\"row\">"; // Open Container seven
				echo "<div class=\"row\">"; // row 11
				echo "<div class=\"col-sm-12 excerptText\">"; // col 12
				the_excerpt();
				echo "</div>"; // close Col 12
				echo "</div>"; // close Row 11
				echo "<a href=\"". get_permalink() ."\">more...</a>";

				// echo "</div>"; // Close Container seven
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

					echo "</div>"; // close container Ten

			endwhile;
			echo "</div>"; // close container nine
			echo "</div>"; // Close Container four


			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 
		echo "</div>"; 
?>


<?php
//get_sidebar();
get_footer();
