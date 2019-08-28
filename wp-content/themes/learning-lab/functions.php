<?php
/**
 * artcraft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artcraft
 */

if ( ! function_exists( 'artcraft_setup' ) ) :
function artcraft_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );
	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'artcraft' ),
	) );
	// Switch default core markup for search form, comment form, and comments
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'artcraft_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function artcraft_widgets_init() {
//	register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar', 'artcraft' ),
//		'id'            => 'artcraft-sidebar',
//		'description'   => esc_html__( 'Add widgets here.', 'artcraft' ),
//		'before_widget' => '<section id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );
//}
//add_action( 'widgets_init', 'artcraft_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function artcraft_scripts() {

	wp_enqueue_style( 'artcraft-font',  get_stylesheet_directory_uri()  . '/fonts/Axiforma/font.css' );
	wp_enqueue_style( 'artcraft-bootstrap',  get_stylesheet_directory_uri()  . '/css/libs/bootstrap.min.css' );
	wp_enqueue_style( 'artcraft-fancybox',  get_stylesheet_directory_uri()  . '/css/libs/jquery.fancybox.min.css' );
	wp_enqueue_style( 'artcraft-carousel',  get_stylesheet_directory_uri()  . '/css/libs/owl.carousel.min.css' );
	wp_enqueue_style( 'artcraft-style',  get_stylesheet_directory_uri()  . '/css/style.css?v=1.4' );
	wp_enqueue_style( 'artcraft-style-media',  get_stylesheet_directory_uri()  . '/css/style-media.css?v=1.4' );

	wp_enqueue_script( 'artcraft-jquery', get_template_directory_uri() . '/js/libs/jquery-3.3.1.min.js', [], '', true );
	wp_enqueue_script( 'artcraft-bootstrap', get_template_directory_uri() . '/js/libs/bootstrap.min.js', [], '', true );
	wp_enqueue_script( 'artcraft-fancybox', get_template_directory_uri() . '/js/libs/jquery.fancybox.min.js', [], '', true );
	wp_enqueue_script( 'artcraft-inputmask', get_template_directory_uri() . '/js/libs/jquery.inputmask.min.js', [], '', true );
	wp_enqueue_script( 'artcraft-carousel', get_template_directory_uri() . '/js/libs/owl.carousel.min.js', [], '', true );
	wp_enqueue_script( 'artcraft-main', get_template_directory_uri() . '/js/main.min.js?v=1.1', [], '', true );


    wp_localize_script( 'artcraft-script', 'myajax',
        [
            'url' => admin_url( 'admin-ajax.php' ),
            'template' => get_template_directory_uri()
        ]
    );
}
add_action( 'wp_enqueue_scripts', 'artcraft_scripts' );

/**
 * Load custom functions
 */
require get_template_directory() . '/includes/custom-functions.php';
