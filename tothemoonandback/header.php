<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toTheMoonAndBack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container-fluid" id="containerOne"> <!-- open ContainerOne -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Travel' ); ?></a>
	<div class="row" id="containerTwo"> <!-- open ContainerTwo -->
		<?php $imgUrl = get_template_directory_uri() . "/img/urlaub.jpg";
		echo "<header style=\" height:70vh; margin-bottom:5vh ;background-size:cover; background-image:url(".$imgUrl.")\" id=\"masthead\" class=\"site-header\" >";
		?>

<!-- <div id="page" class="site"> -->
		
 <nav class="blog-nav" style="background-color: #222222">

         <?php

           wp_nav_menu( array(

               'menu'              => 'primary',

               'theme_location'    => 'primary',

               'depth'             => 2,

               'container'         => 'div',

               'container_class'   => 'collapse navbar-collapse',

               'container_id'      => 'bs-example-navbar-collapse-1',

               'menu_class'        => 'nav navbar-nav',

               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

               'walker'            => new WP_Bootstrap_Navwalker())

           );

       ?>

       </nav>
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
