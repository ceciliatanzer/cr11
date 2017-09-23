<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toTheMoonAndBack
 */

?>

	</div><!-- #content -->

	
	   <footer class="blog-footer">

     <p> &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>

     <p>

       <a href="#" style="color:back !important ;">Back to top</a>

     </p>

   </footer>

   <?php wp_footer(); ?>



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

 </body>

</html>
