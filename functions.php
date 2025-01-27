<?php
/**
 * gpc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gpc
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gpc_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on gpc, use a find and replace
		* to change 'gpc' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'gpc', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'gpc' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'gpc_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'gpc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gpc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gpc_content_width', 640 );
}
add_action( 'after_setup_theme', 'gpc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gpc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gpc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gpc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gpc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gpc_scripts() {
	//Styles
	wp_enqueue_style( 'gpc-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('gpc_fonts_css', get_template_directory_uri().'/assets/css/fonts.css',array(),'1.0');
	wp_enqueue_style('gpc_fa_css', get_template_directory_uri().'/assets/css/fa.css',array(),'1.0');
	wp_enqueue_style('gpc_header_css', get_template_directory_uri().'/assets/css/header.css',array(),'1.0');
	wp_enqueue_style('gpc_footer_css', get_template_directory_uri().'/assets/css/footer.css',array(),'1.0');
	wp_enqueue_style('gpc_home_css', get_template_directory_uri().'/assets/css/home.css',array(),'1.0');
	wp_enqueue_style('gpc_posts_css', get_template_directory_uri().'/assets/css/posts.css',array(),'1.0');
	wp_enqueue_style('gpc_main_css', get_template_directory_uri().'/assets/css/main.css',array(),'1.0');
	wp_enqueue_style('gpc_swiper_css',get_template_directory_uri().'/assets/swiper/swiper-bundle.min.css',array(),'1.0');

	//Scripts
	wp_enqueue_script( 'gpc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('gpc_header_script', get_template_directory_uri().'/assets/js/header_scripts.js', array(), _S_VERSION, true);
	wp_enqueue_script('gpc_swiper_script', get_template_directory_uri().'/assets/swiper/swiper-bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('gpc_main_script', get_template_directory_uri().'/assets/js/main_script.js', array(), _S_VERSION, true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gpc_scripts' );

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

function lang($textArm, $textEng) {
    $current_language = apply_filters('wpml_current_language', null);

    if ($current_language === 'hy') {
        return $textArm;
    }

    return $textEng;
}