<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Team
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



/**
 * Remove [...] string using Filters
 */

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Control Excerpt Length using Filters
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



// //-------------------------------------------------  
// //function custome Image
// //-------------------------------------------------
// if ( function_exists( 'add_image_size' ) ) {
//     add_image_size( 'imgPresse', 250, 350, false );
// }