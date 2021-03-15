<?php
/**
 * UDS Divi Theme Customizer
 * Remove native Divi menus that are replaced in this child theme.
 *
 * @package uds-wordpress-theme
 */

/* Hide sections from WordPress customizer */
function uds_divi_hide_customizer_sections( $wp_customize ) {

    $wp_customize->remove_panel( 'et_divi_header_panel'); // Header and Menus
	$wp_customize->remove_panel( 'et_divi_footer_panel'); // Footer
	$wp_customize->remove_panel( 'et_color_schemes'); // Color Schemes

}
add_action( 'customize_register', 'uds_divi_hide_customizer_sections', 30);
