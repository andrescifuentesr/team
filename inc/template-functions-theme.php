<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package loulou
 */

//-------------------------------------------------  
//function shortcode
//-------------------------------------------------

function apply_now_shortcode( $atts, $content = null ) {
	return '
		<div class="block__apply block__apply--content"><a href="https://emecw.gis.lu.se/apply/?lot=TEAM" class="bt_apply" target="_blank">' . $content . '</a></div>';
}
add_shortcode( 'button_apply', 'apply_now_shortcode' );
//[button_apply]


/**
 * Register Socail Menu
 */
add_action( 'init', 'footer_register_nav_menus' );

function footer_register_nav_menus() {
	register_nav_menu( 'footer', __( 'Footer Menu', 'georgette' ) );
}


// //-------------------------------------------------  
// //function custome Image
// //-------------------------------------------------
// if ( function_exists( 'add_image_size' ) ) {
//     add_image_size( 'imgPresse', 250, 350, false );
// }