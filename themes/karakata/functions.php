<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */


if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_template_directory_uri() .'/build/css/style.min.css' );
	wp_enqueue_style( 'flickitycss', get_template_directory_uri() . '/build/css/flickity.css' );
	wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
	wp_enqueue_script( 'red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'flickityjs', get_template_directory_uri() . '/build/js/flickity.pkgd.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'frontjs', get_template_directory_uri() . '/build/js/front.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
	wp_enqueue_script( 'functions', get_template_directory_uri() . '/build/js/functions.min.js', array ( 'jquery' ), '', true);
	wp_enqueue_script( 'classes-navigation', get_template_directory_uri() . '/build/js/classes-navigation.min.js', array ( 'jquery' ), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script( 'functions', 'functionVars', array(
		'karakata_url' => esc_url_raw( rest_url() ),
		'karakata_nonce' => wp_create_nonce( 'wp_rest' ),
		'karakata_template_path' => get_template_directory_uri(),
	) );
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


// CUSTOM ADMIN LOGIN HEADER LOGO



// function my_custom_login_logo() {
//     echo '<style type="text/css">
// 	h1 a {background-image:url(http://localhost/karakata/wp-content/themes/2020/01/logo-black.png) !important; margin:0 auto;}
// 	</style>';
// }
// add_filter( 'login_head', 'my_custom_login_logo' );



function my_login_logo_one() { 
		?> 
		<style type="text/css"> 
		body.login div#login h1 a {
		background-image: url("http://localhost/karakata/wp-content/themes/2020/01/logo-black.png");  //Add your own logo image in this url 
		padding-bottom: 30px; 
		} 
		</style>
		<?php 
		} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );
		
register_meta('post', 'audio_testing', [
    'type'           => 'array',
    'description'    => 'should be the audio file...',
    'single'         => true,
	'show_in_rest' => array(
		'schema' => array(
			'type'  => 'array',
			'items' => array(
				'author' => 'string',
			),
		),
	),
]);

register_meta('post', 'test', [
    'type'           => 'string',
    'description'    => 'should be the audio file...',
    'single'         => true,
	'show_in_rest'   => true
]);
