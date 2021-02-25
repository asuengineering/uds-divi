<?php
/**
 * UDS Divi Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uds-divi
 */

/**
 * Enqueue assets.
 **/
function uds_divi_enqueue_scripts() {

	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	$css_version = $theme_version . '.' . filemtime( get_template_directory_uri() . '/style.css' );
	$child_css_version = $theme_version . '.' . filemtime( get_stylesheet_directory() . '/style.css' );

	wp_register_style( 'divi-style', get_template_directory_uri() . '/style.css', array(), $css_version );
	wp_register_style( 'uds-divi-style', get_stylesheet_directory_uri() . '/css/uds-divi.css', array( 'divi-style' ), $child_css_version );

	wp_enqueue_style( 'divi-style' );
	wp_enqueue_style( 'uds-divi-style' );

}
add_action( 'wp_enqueue_scripts', 'uds_divi_enqueue_scripts' );
