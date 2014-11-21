<?php
/**
 * fairy functions and definitions
 *
 * @package fairy
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'fairy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fairy_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fairy, use a find and replace
	 * to change 'fairy' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'fairy', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fairy' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fairy_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // fairy_setup
add_action( 'after_setup_theme', 'fairy_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fairy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fairy' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'fairy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fairy_scripts() {
	wp_enqueue_style( 'fairy-style', get_stylesheet_uri() );
 	//load JS
	wp_enqueue_script( 'fairy-customizer',get_template_directory_uri() . '/js/customizer.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'fairy-custom', get_template_directory_uri() . '/js/custom.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-ga', get_template_directory_uri() . '/js/ga.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-jquery-1.7.2.min', get_template_directory_uri() . '/js/jquery-1.7.2.min.js',  array(), '20141107', true );
	wp_enqueue_script( 'fairy-jQuery.BlackAndWhite.min',get_template_directory_uri() . '/js/jQuery.BlackAndWhite.min.js', array(), '20120206', true );
	wp_enqueue_script( 'fairy-jquery.easing-1.3.min',get_template_directory_uri() . '/js/jquery.easing-1.3.min.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-jquery.flexslider-min',get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-jquery.isotope.min',get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-jquery.jcarousel.min',get_template_directory_uri() . '/js/jquery.jcarousel.min.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-jquery.touchSwipe.min',get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-navigation',get_template_directory_uri() . '/js/navigation.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-respond.min',get_template_directory_uri() . '/js/respond.min.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-selectivizr-min',get_template_directory_uri() . '/js/selectivizr-min.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-skip-link-focus-fix',get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141107', true );
	wp_enqueue_script( 'fairy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	//load flexslider,googlefont,style CSS
	wp_enqueue_style( 'flexslider' ,get_template_directory_uri()."/css/flexslider.css");
	wp_enqueue_style('googlefont',get_template_directory_uri()."/css/googlefont.css");
	wp_enqueue_style('mystyle',get_template_directory_uri()."/css/mystyle.css");

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fairy_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load options framework
 */
if (!function_exists('optionsframework_init')){
	  define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri().'/inc/');
	    require_once dirname(__FILE__).'/inc/options-framework.php';
}
include_once('myfunctions.php');