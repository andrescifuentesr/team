<?php if ( has_nav_menu( 'footer' ) ) {

	wp_nav_menu(
		array(
			'theme_location'  => 'footer',
			'container'       => 'div',
			'container_id'    => 'menu-footer',
			'container_class' => 'menu-footer',
			'menu_id'         => 'menu-footer-items',
			'menu_class'      => 'menu-items clearfix',
			'depth'           => 1,
			'link_before'     => '',
			'link_after'      => '',
			'fallback_cb'     => '',
		)
	);

} ?>