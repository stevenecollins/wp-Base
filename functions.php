<?php

/**
 * This file adds functions to the myBase WordPress theme.
 *
 * @package myBase
 * @author  WP Engine
 * @license GNU General Public License v2 or later
 * @link    https://myBasewp.com/
 */

if (!function_exists('myBase_setup')) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function myBase_setup()
	{

		// Make theme available for translation.
		load_theme_textdomain('myBase', get_template_directory() . '/languages');

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support('core-block-patterns');
	}
}
add_action('after_setup_theme', 'myBase_setup');

// Enqueue style sheet.
add_action('wp_enqueue_scripts', 'myBase_enqueue_style_sheet');
function myBase_enqueue_style_sheet()
{

	wp_enqueue_style('myBase', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function myBase_register_block_styles()
{

	$block_styles = array(
		'core/columns' => array(
			'columns-reverse' => __('Reverse', 'myBase'),
		),
		'core/group' => array(
			'shadow-light' => __('Shadow', 'myBase'),
			'shadow-solid' => __('Solid', 'myBase'),
		),
		'core/image' => array(
			'shadow-light' => __('Shadow', 'myBase'),
			'shadow-solid' => __('Solid', 'myBase'),
		),
		'core/list' => array(
			'no-disc' => __('No Disc', 'myBase'),
		),
		'core/navigation-link' => array(
			'outline' => __('Outline', 'myBase'),
		),
		'core/quote' => array(
			'shadow-light' => __('Shadow', 'myBase'),
			'shadow-solid' => __('Solid', 'myBase'),
		),
		'core/social-links' => array(
			'outline' => __('Outline', 'myBase'),
		),
	);

	foreach ($block_styles as $block => $styles) {
		foreach ($styles as $style_name => $style_label) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action('init', 'myBase_register_block_styles');

/**
 * Register block pattern categories.
 *
 * @since 1.0.4
 */
function myBase_register_block_pattern_categories()
{

	register_block_pattern_category(
		'page',
		array(
			'label'       => __('Page', 'myBase'),
			'description' => __('Create a full page with multiple patterns that are grouped together.', 'myBase'),
		)
	);
	register_block_pattern_category(
		'pricing',
		array(
			'label'       => __('Pricing', 'myBase'),
			'description' => __('Compare features for your digital products or service plans.', 'myBase'),
		)
	);
}

add_action('init', 'myBase_register_block_pattern_categories');
