<?php
/**
 * UDS Divi Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uds-divi
 */

add_action( 'wp_enqueue_scripts', 'uds_divi_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function divi_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'divi-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'uds-divi-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'divi-style' )
	);

}

/* Remove reference to parent stylesheet to prevent it from loading twice. */
function uds_divi_unhook_parent_style() {

    wp_dequeue_style( 'divi-style' );
    wp_deregister_style( 'divi-style' );

  }
add_action( 'wp_enqueue_scripts', 'uds_divi_unhook_parent_style', 20 );

function uds_divi_enqueue_scripts() {

    $the_theme     = wp_get_theme();
    $theme_version = $the_theme->get( 'Version' );

    $child_css_version = $theme_version . '.' . filemtime( get_stylesheet_directory().'/style.css');

    wp_register_style( 'divi', get_template_directory_uri() . '/style.css');
    wp_register_style( 'asudivi', get_stylesheet_uri(), array(), $child_css_version );

    wp_enqueue_style( 'divi' );
    wp_enqueue_style( 'asudivi' );

}
add_action( 'wp_enqueue_scripts', 'asuwp_enqueue_scripts' );
