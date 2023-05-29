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
include_once $theme_dir . '/inc/theme-support.php';

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
include_once $theme_dir . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
include_once $theme_dir . '/inc/scripts.php';


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

// Register shortcodes
include_once $theme_dir . '/inc/shortcodes.php';
