<?php
/**
 * toTheMoonAndBack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package toTheMoonAndBack
 */

if ( ! function_exists( 'tothemoonandback_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tothemoonandback_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on toTheMoonAndBack, use a find and replace
		 * to change 'tothemoonandback' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tothemoonandback', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'tothemoonandback' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tothemoonandback_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tothemoonandback_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tothemoonandback_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tothemoonandback_content_width', 640 );
}
add_action( 'after_setup_theme', 'tothemoonandback_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tothemoonandback_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tothemoonandback' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tothemoonandback' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tothemoonandback_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tothemoonandback_scripts() {
	wp_enqueue_style( 'tothemoonandback-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tothemoonandback-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tothemoonandback-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tothemoonandback_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Widget - sidebar

function wpb_init_widgets(){

register_sidebar(array(

'name' => 'Sidebar',

'id' => 'sidebar',

'before_widget' => '<div class="sidebar-module">',

'after_widget' => '</div>',

'before_title' => '<h4>',

'after_title' => '</h4>'

));

}


add_action('widgets_init', 'wpb_init_widgets');
/* Add bootstrap support to the Wordpress theme*/
function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
 wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
 wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );



// Register Nav Walker class_alias

require_once('wp-bootstrap-navwalker.php');



//Theme Support

function wpb_theme_setup(){

//Nav Menus

register_nav_menus(array(

'primary' => __('Primary Menu')

));

}


add_action('after_setup_theme','wpb_theme_setup');



?>

