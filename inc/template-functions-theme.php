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

// //Control Excerpt Length using Filters
// function custom_excerpt_length( $length ) {
// 	return 30;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Control Excerpt Length using Filters
// AND display links in Excerpt
function new_wp_trim_excerpt($text) {
	$raw_excerpt = $text;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text, '<a>');
		$excerpt_length = apply_filters('excerpt_length', 10);
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$words = preg_split('/(<a.*?a>)|\n|\r|\t|\s/', $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
		if ( count($words) > $excerpt_length ) {
			array_pop($words);
			$text = implode(' ', $words);
			$text = $text . $excerpt_more;
			} 
		else {
			$text = implode(' ', $words);
		}
	}
	return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');


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
 
add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2);
function current_type_nav_class($classes, $item) {
	// Get post_type for this post
	$post_type = get_query_var('post_type');

	// Go to Menus and add a menu class named: {custom-post-type}-menu-item
	// This adds a 'current_page_parent' class to the parent menu item
	//Add 'uniersity-menu-item' to parent by Admin Panel
	if( in_array( $post_type.'-menu-item', $classes ) )
		array_push($classes, 'current-menu-parent');

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


//-------------------------------------------------  
// We deregister wp-members.css
//-------------------------------------------------
function my_styles() {
  wp_deregister_style( 'wp-members' );
}

add_action( 'wp_print_styles', 'my_styles', 99 );

//-------------------------------------------------  
// We deregister the dashboard for subscribers
//-------------------------------------------------
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

// //-------------------------------------------------  
// //function custome Image
// //-------------------------------------------------
// if ( function_exists( 'add_image_size' ) ) {
//     add_image_size( 'imgPresse', 250, 350, false );
// }