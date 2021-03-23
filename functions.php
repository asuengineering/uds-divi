<?php
/**
 * UDS Divi Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uds-divi
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$uds_wp_includes = array(
	'/enqueue.php',                       		 // Enqueues the correct child theme files.
	'/setup.php',								 // Theme setup options.
	'/class-wp-social-media-walker.php',         // Load custom WordPress nav walker for footer Social Media menu wdiget.
	'/customizer.php',                           // Customizer additions.
	'/render-partials.php',                      // Rendering methods for certain customizer-controlled items.
	'/wp-custom-menu.php',                       // Load custom menu builder functions.
);

foreach ( $uds_wp_includes as $file ) {
	require_once get_stylesheet_directory() . '/inc' . $file;
}


// Misc functions. These need a home eventually.
if ( ! function_exists( 'uds_wp_body_attributes' ) ) {
	/**
	 * Displays the attributes for the body element.
	 */
	function uds_wp_body_attributes() {
		/**
		 * Filters the body attributes.
		 *
		 * @param array $atts An associative array of attributes.
		 */
		$atts = array_unique( apply_filters( 'uds_wp_body_attributes', $atts = array() ) );
		if ( ! is_array( $atts ) || empty( $atts ) ) {
			return;
		}
		$attributes = '';
		foreach ( $atts as $name => $value ) {
			if ( $value ) {
				$attributes .= sanitize_key( $name ) . '="' . esc_attr( $value ) . '" ';
			} else {
				$attributes .= sanitize_key( $name ) . ' ';
			}
		}
		echo trim( $attributes ); // phpcs:ignore WordPress.Security.EscapeOutput
	}
}
