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


//-------------------------------------------------  
// Register Footer Menu
//-------------------------------------------------
add_action( 'init', 'footer_register_nav_menus' );

function footer_register_nav_menus() {
	register_nav_menu( 'footer', __( 'Footer Menu', 'georgette' ) );
}



/**
 * Remove [...] string using Filters
 */

function new_excerpt_more( $more ) {
	return '... <div class="block__read-more"><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">See More</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Control Excerpt Length using Filters
function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//======================
//fx menuicons styles
//======================
function add_menu_icons_styles(){
?>
 
<style>

#menu-posts-university .wp-menu-image:before {
	content: "\f118";
}
#menu-posts-partner .wp-menu-image:before {
	content: "\f307";
}
#menu-posts-new .wp-menu-image:before {
	content: "\f488";
}

</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );


//==================================================================
//fx for adding .current-menu-parent to custom post type (univ)
//==================================================================
 
add_filter( 'nav_menu_css_class', 'nav_parent_class', 10, 2 );

function nav_parent_class( $classes, $item ) {
	$cpt_name = 'university';
	$parent_slug = 'community';

	if ( $cpt_name == get_post_type() && ! is_admin() ) {
		global $wpdb;

		// remove any active classes from nav (blog is usually gets the currept_page_parent class on cpt single pages/posts)
		$classes = array_filter($classes, ($class == 'current_page_item' || $class == 'current_page_parent' || $class == 'current_page_ancestor'  || $class == 'current-menu-item' ? false : true ));

		// get page info
		// - we really just want the post_name so it cane be compared to the post type slug
		$page = get_page_by_title( $item->title, OBJECT, 'page' );

		// check if slug matches post_name
		if( $page->post_name == $parent_slug ) {
			$classes[] = 'current-menu-parent';
		}

	}

	return $classes;
}

//-------------------------------------------------  
// Yoast plugin Filter
//-------------------------------------------------
//Make sure the SEO box is at the very bottom of the post edit screen
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');



// //-------------------------------------------------  
// //function custome Image
// //-------------------------------------------------
// if ( function_exists( 'add_image_size' ) ) {
//     add_image_size( 'imgPresse', 250, 350, false );
// }