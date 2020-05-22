<?php

/* add scripts  */
function rastashaven_addscripts()
{
	# code...
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'rastashaven_addscripts');

#register nav menus
function rastashaven_register_nav_menus(){
	#
	register_nav_menus(array(
	'header_menu' => __('Header Menu'),
	'footer_menu' => __('Footer Menu'),
	)
	);
}
add_action('after_setup_theme', 'rastashaven_register_nav_menus');

// register sidebars
function rastashaven_register_sidebars(){
	 /* Register the 'primary' sidebar. */
	register_sidebar(array(
		'name'			=> __('Primary Sidebar', 'rastashaven'),
		'id'  			=> 'sidebar-1',
		'description' 	=> 'The Main sidebar'
		)
	);
}
add_action( 'widgets_init', 'rastashaven_register_sidebars' );


// add featured uimage support
add_theme_support( 'post-thumbnails');



// https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/
// declare woocommerce support
function rastashaven_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		     'thumbnail_image_width' => 150,
        'single_image_width'    => 300,
		)
	);
}
add_action( 'after_setup_theme', 'rastashaven_add_woocommerce_support' );


//enable the gallery 
function rastashaven_enable_gallery(){
	 add_theme_support( 'wc-product-gallery-zoom' );
	 add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'rastashaven_enable_gallery' );


