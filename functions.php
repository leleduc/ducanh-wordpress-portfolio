<?php

global $theme_prefix, $theme_uri;
$theme_prefix = 'ducanh_portfolio';
$theme_uri = get_template_directory_uri() . '/assets';
$theme_dir = get_template_directory();

/**
 * Ducanh Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ducanh_Portfolio
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ducanh_portfolio_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Ducanh Portfolio, use a find and replace
		* to change 'ducanh-portfolio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('ducanh-portfolio', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'ducanh-portfolio'),
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
			'ducanh_portfolio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'ducanh_portfolio_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ducanh_portfolio_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ducanh_portfolio_content_width', 640);
}
add_action('after_setup_theme', 'ducanh_portfolio_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ducanh_portfolio_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'ducanh-portfolio'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'ducanh-portfolio'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'ducanh_portfolio_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ducanh_portfolio_scripts()
{
	wp_enqueue_style('ducanh-portfolio-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_style('wp-block-library-css', get_template_directory_uri() . '/css/style.min.css', array(), rand(111, 9999), 'all');
	wp_enqueue_style('classic-theme-styles-css', get_template_directory_uri() . '/css/classic-themes.min.css', array(), rand(111, 9999), 'all');
	wp_enqueue_style('contact-form-7-css', get_template_directory_uri() . '/css/styles.css', array(), rand(111, 9999), 'all');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), rand(111, 9999), 'all');
	wp_enqueue_style("animate-css", get_template_directory_uri() . "/css/animate.css", rand(111, 9999), 'all');
	wp_enqueue_style("barfiller-css", get_template_directory_uri() . "/css/barfiller.css", rand(111, 9999), 'all');
	wp_enqueue_style("fancy-box-css", get_template_directory_uri() . "/css/fancy-box.min.css", rand(111, 9999), 'all');
	wp_enqueue_style("flaticon-css", get_template_directory_uri() . "/css/flaticon.css", rand(111, 9999), 'all');
	wp_enqueue_style("line-awesome-css", get_template_directory_uri() . "/css/line-awesome.min.css", rand(111, 9999), 'all');
	wp_enqueue_style("magnific-popup-css", get_template_directory_uri() . "/css/magnific-popup.css", rand(111, 9999), 'all');
	wp_enqueue_style("nice-select-css", get_template_directory_uri() . "/css/nice-select.css", rand(111, 9999), 'all');
	wp_enqueue_style("owl-carousel-css", get_template_directory_uri() . "/css/owl.carousel.css", rand(111, 9999), 'all');
	wp_enqueue_style("owl-theme-default-css", get_template_directory_uri() . "/css/owl.theme.default.css", rand(111, 9999), 'all');
	wp_enqueue_style("responsive-css", get_template_directory_uri() . "/css/responsive.css", rand(111, 9999), 'all');
	wp_enqueue_style("proview-style-css", get_template_directory_uri() . "/css/style.css", rand(111, 9999), 'all');

	wp_style_add_data('ducanh-portfolio-style', 'rtl', 'replace');

	wp_enqueue_script('ducanh-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// wp_enqueue_script('concatemoji',    get_template_directory_uri() . "/js/wp-emoji-release.min.js", array(), _S_VERSION, true);
	// wp_enqueue_script('jquery-core-js', get_template_directory_uri() . "/js/jquery.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script('jquery-migrate-js', get_template_directory_uri() . "/js/jquery-migrate.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("contact-form-7-js", get_template_directory_uri() . "/js/index.js", array(), _S_VERSION, true);
	wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/js/bootstrap.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("isotope-js", get_template_directory_uri() . "/js/isotope-3.0.6-min.js", array(), _S_VERSION, true);
	wp_enqueue_script("jquery-fancybox-js", get_template_directory_uri() . "/js/jquery-fancybox.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("jquery-barfiller-js", get_template_directory_uri() . "/js/jquery.barfiller.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("jquery-counterup-js", get_template_directory_uri() . "/js/jquery.counterup.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("jquery-easing-js", get_template_directory_uri() . "/js/jquery.easing.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("jquery-nice-select-js", get_template_directory_uri() . "/js/jquery.nice-select.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("jquery-sticky-js", get_template_directory_uri() . "/js/jquery.sticky.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("jquery-waypoints-js", get_template_directory_uri() . "/js/jquery.waypoints.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("magnific-popup-js", get_template_directory_uri() . "/js/magnific-popup.min.js", array(), _S_VERSION, true);
	wp_enqueue_script("owl-carousel-js", get_template_directory_uri() . "/js/owl.carousel.min.js", ['jquery'], _S_VERSION, true);
	wp_enqueue_script("popper-js", get_template_directory_uri() . "/js/popper.min.js", array(), _S_VERSION, true);
	wp_enqueue_script("wow-js", get_template_directory_uri() . "/js/wow.min.js", array(), _S_VERSION, true);
	wp_enqueue_script("proview-main-js", get_template_directory_uri() . "/js/main.js", array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ducanh_portfolio_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}



// // REMOVE WP EMOJI
// remove_action('wp_head', 'print_emoji_detection_script', 7);
// remove_action('wp_print_styles', 'print_emoji_styles');

// remove_action('admin_print_scripts', 'print_emoji_detection_script');
// remove_action('admin_print_styles', 'print_emoji_styles');
