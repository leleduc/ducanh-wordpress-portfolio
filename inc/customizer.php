<?php

/**
 * Ducanh Portfolio Theme Customizer
 *
 * @package Ducanh_Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ducanh_portfolio_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ducanh_portfolio_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ducanh_portfolio_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_section('contact_section', array(
		'title' => __('Contact Section', 'ducanh-portfolio'),
		'description' => __('Thong tin lien he', 'ducanh-portfolio'),
		'priority' => 30,
	));
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_name', 'Name', 'contact_section');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_title', 'Title', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_address', 'Address', 'contact_section', 'textarea');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_email', 'Email', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_linkedin', 'Linkedin', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_facebook', 'Facebook', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_github', 'Github', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_youtube', 'Youtube', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_about_me', 'About', 'contact_section', 'textarea');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_cv', 'Resume', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_video', 'Video', 'contact_section', 'text');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_hero_img', 'Hero Image', 'contact_section');
	ducanh_portfolio_customize_add_input($wp_customize, 'contact_author_img', 'Author Image', 'contact_section');
}
add_action('customize_register', 'ducanh_portfolio_customize_register');

/**
 * Add input content to Contact Section.
 *
 * @return wp_customize
 */
function ducanh_portfolio_customize_add_input($wp_customize, $input_id, $input_name, $section_id, $input_type = 'text')
{
	$wp_customize->add_setting($input_id, array(
		'default' => '',
	));
	$wp_customize->add_control($input_id, array(
		'label' => __($input_name, 'ducanh-portfolio'),
		'setting' => $input_id,
		'type' => $input_type,
		'section' => $section_id,
	));
	return $wp_customize;
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ducanh_portfolio_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ducanh_portfolio_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ducanh_portfolio_customize_preview_js()
{
	wp_enqueue_script('ducanh-portfolio-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'ducanh_portfolio_customize_preview_js');
