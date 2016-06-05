<?php

// https://codex.wordpress.org/Function_Reference/flush_rewrite_rules
flush_rewrite_rules(true);

/**
 * Andrew Ringler 2016 functions and definitions
 *
 * @package Andrew Ringler 2016
 */
$VERSION = '0.5.4';

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'andrewringler_profile_2013_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function andrewringler_profile_2013_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Andrew Profile Theme 2013, use a find and replace
	 * to change 'andrewringler_profile_2013' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'andrewringler_profile_2013', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// fixed-height images for home-page, CSS size is ###x200
	// larger sizes are for srcset and sizes responsive images
	add_image_size('home-200x200',9999,200,false);
	add_image_size('home-400x400',9999,400,false);
	add_image_size('home-800x800',9999,800,false);
	add_image_size('home-1000x1000',9999,1000,false);	

	// post images, non-square
	add_image_size('post-image-150w',150,9999,false);
	add_image_size('post-image-300w',300,9999,false);
	add_image_size('post-image-600w',600,9999,false);
	add_image_size('post-image-1200w',1200,9999,false);

	/* 
	 * Increase JPEG compression
	 * since we have some large file resolutions, set JPEG compression
	 * to 80, this only applies to thumbnails, not original images uploaded
	 */
	add_filter('jpeg_quality', create_function( '', 'return 80;' ));

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary', 'andrewringler_profile_2013' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // andrewringler_profile_2013_setup
add_action( 'after_setup_theme', 'andrewringler_profile_2013_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function andrewringler_profile_2013_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'andrewringler_profile_2013_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'andrewringler_profile_2013_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function andrewringler_profile_2013_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'andrewringler_profile_2013' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'andrewringler_profile_2013_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function andrewringler_profile_2013_scripts() {
	global $VERSION;

	wp_enqueue_style( 'andrewringler_profile_2013-style', get_stylesheet_uri(), $VERSION);

	wp_enqueue_script( 'andrewringler_profile_2013-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'andrewringler_profile_2013-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'andrewringler_profile_2013-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	if( is_home()) {
		wp_enqueue_script( 'andrewringler_profile_2015-p5js-lib', get_template_directory_uri() . '/js/p5.min.js', array(), '20150122', true );
		wp_enqueue_script( 'andrewringler_profile_2015-squares-p5js', get_template_directory_uri() . '/js/sketch.js', array(), '20150122', true );
	}

}
add_action( 'wp_enqueue_scripts', 'andrewringler_profile_2013_scripts' );

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








/* Advanced Custom Fields
 * https://www.advancedcustomfields.com
 * https://www.advancedcustomfields.com/resources/including-acf-in-a-plugin-theme/
 */
//  // 1. customize ACF path
// add_filter('acf/settings/path', 'my_acf_settings_path');
// function my_acf_settings_path( $path ) { 
//     $path = get_stylesheet_directory() . '/acf/';    
//     return $path;    
// }
//  
// // 2. customize ACF dir
// add_filter('acf/settings/dir', 'my_acf_settings_dir');
// function my_acf_settings_dir( $dir ) {
//     $dir = get_stylesheet_directory_uri() . '/acf/';    
//     return $dir;    
// }
//  
// // 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');
// 
// // 4. Include ACF
// include_once( get_stylesheet_directory() . '/acf/acf.php' );

 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-page',
		'title' => 'Home Page',
		'fields' => array (
			array (
				'key' => 'field_57517a994fd46',
				'label' => 'Square Image',
				'name' => 'homepage_squareimage',
				'type' => 'image',
				'instructions' => 'Should be a square image with a high resolution',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_okhome',
		'title' => 'OKHome',
		'fields' => array (
			array (
				'key' => 'field_575197c7aee86',
				'label' => 'Short Title',
				'name' => 'home_shorttitle',
				'type' => 'text',
				'instructions' => 'A short title for display on the homepage',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
