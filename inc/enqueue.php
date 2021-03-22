<?php
/**
 * Enqueue assets into the child theme.
 *
 * @package uds-divi
 */

/**
 * Enqueue assets.
 **/
function uds_divi_enqueue_scripts() {

	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/style.css' );
	$child_css_version = $theme_version . '.' . filemtime( get_stylesheet_directory() . '/style.css' );

	wp_register_style( 'divi-style', get_template_directory_uri() . '/style.css', array(), $css_version );
	wp_register_style( 'uds-divi-style', get_stylesheet_directory_uri() . '/css/uds-divi.css', array( 'divi-style' ), $child_css_version );

	wp_enqueue_style( 'divi-style' );
	wp_enqueue_style( 'uds-divi-style' );

	wp_enqueue_script ( 'font-awesome-kit', 'https://kit.fontawesome.com/51b562cd96.js', array(), null, false );
	wp_script_add_data( 'font-awesome-kit', 'crossorigin', 'anonymous' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/src/js/bootstrap4/bootstrap.min.js', array('jquery'), null, false);
	wp_enqueue_script( 'asu-header', get_stylesheet_directory_uri() . '/node_modules/@asu-design-system/bootstrap4-theme/src/js/global-header.js', array('jquery', 'bootstrap'), null, false);
}
add_action( 'wp_enqueue_scripts', 'uds_divi_enqueue_scripts' );
