<?php
/**
 * Theme basic setup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Sets up correct menu locations.
 */
function uds_divi_wp_setup() {

	// Register the correct nav menus.
	register_nav_menus(
		array(
			'primary' => __( 'Main Menu', 'uds-divi-theme' ),
			'footer' => __( 'Footer Menu', 'uds-divi-theme' ),
			'social-media' => __( 'Social Media Menu', 'uds-divi-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'uds_divi_wp_setup' );

/**
 * Remove the default menu locations from Divi parent.
 */
function uds_divi_remove_parent_theme_menu_locations() {
	unregister_nav_menu( 'primary-menu' );
	unregister_nav_menu( 'secondary-menu' );
	unregister_nav_menu( 'footer-menu' );
}
add_action( 'after_setup_theme', 'uds_divi_remove_parent_theme_menu_locations', 20 );


add_filter( 'excerpt_more', 'uds_wp_custom_excerpt_more' );

if ( ! function_exists( 'uds_wp_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function uds_wp_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'uds_wp_all_excerpts_get_more_link' );

if ( ! function_exists( 'uds_wp_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function uds_wp_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...]<p><a class="btn btn-secondary understrap-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __(
				'Read More...',
				'uds-wordpress-theme'
			) . '</a></p>';
		}
		return $post_excerpt;
	}
}
