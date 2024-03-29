<?php

global $themePrefix;
global $themeUri;

$themePrefix = 'nichirica';

$themeUri = get_template_directory_uri() . '/assets';

$themeVersion = '1.2.2';

if ( ! defined( 'THEME_URI' ) ) {
  // Replace the version number of the theme on each release.
  define( 'THEME_URI', get_template_directory_uri()  );
}

if ( ! defined( 'DOMAIN_CURRENT' ) ) {
  // Replace the version number of the theme on each release.
  define( 'DOMAIN_CURRENT', get_site_url());
}


/**
 * Nichirica functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nichirica
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
function nichirica_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Nichirica, use a find and replace
		* to change 'nichirica' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nichirica', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nichirica' ),
			'menu-2' => esc_html__( 'Menu About Sub', 'nichirica' ),
			'menu-3' => esc_html__( 'Menu Recruitment Sub', 'nichirica' ),
			'menu-4' => esc_html__( 'Menu Product Sub', 'nichirica' ),
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
			'nichirica_custom_background_args',
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
add_action( 'after_setup_theme', 'nichirica_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nichirica_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nichirica_content_width', 640 );
}
add_action( 'after_setup_theme', 'nichirica_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nichirica_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nichirica' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nichirica' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nichirica_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nichirica_scripts() {
//	wp_enqueue_style( 'nichirica-style', get_stylesheet_uri(), array(), _S_VERSION );
//	wp_style_add_data( 'nichirica-style', 'rtl', 'replace' );
//
//	wp_enqueue_script( 'nichirica-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
//
//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
  global $themeUri, $themeVersion, $themePrefix;
  wp_enqueue_style( $themePrefix . '-bootstrap', $themeUri . "/css/bootstrap.min.css", array(), $themeVersion );
  wp_enqueue_style( $themePrefix . '-swiper-bundle', $themeUri . "/css/swiper-bundle.min.css", array(), $themeVersion );
  wp_enqueue_style( $themePrefix . '-app', $themeUri . "/css/app.css", array(), $themeVersion );
  wp_enqueue_style( $themePrefix . '-custom', $themeUri . "/css/custom.css", array(), $themeVersion );

  wp_enqueue_script( $themePrefix . '-jquery', $themeUri . "/js/jquery.js", array(), $themeVersion, true );
  wp_enqueue_script( $themePrefix . '-bootstrap.bundle.min', $themeUri . "/js/bootstrap.bundle.min.js", array(), $themeVersion, true );
  wp_enqueue_script( $themePrefix . '-jquery.validate.min.js', $themeUri . "/js/jquery.validate.min.js", array(), $themeVersion, true );
  wp_enqueue_script( $themePrefix . '-swiper-bundle', $themeUri . "/js/swiper-bundle.min.js", array(), $themeVersion, true );
  wp_enqueue_script( $themePrefix . '-main', $themeUri . "/js/main.js", array(), $themeVersion, true );

}
add_action( 'wp_enqueue_scripts', 'nichirica_scripts' );

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


add_shortcode('custom-language-switcher', 'trpc_custom_language_switcher', 10);
function trpc_custom_language_switcher(){
  // Check whether TranslatePress can run on the current path or not. If the path is excluded from translation, trp_allow_tp_to_run will be false
  if ( apply_filters( 'trp_allow_tp_to_run', true ) ){
    $languages = trp_custom_language_switcher();
    $html = "<ul data-no-translation>";
    foreach ($languages as $name => $item) {
      $html .= "<li style='list-style-image: url({$item['flag_link']})'>";
      $html .= "<a href='{$item['current_page_url']}'>";
      $html .= "<span>{$item['language_name']}</span></a></li>";
    }
    $html .= "</ul>";
    return $html;
  }
}
