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
	register_sidebar(
		/* main sidebar required by theme */
		array(
			'name'			=> __('Main Sidebar', 'rastashaven'),
			'id'  			=> 'sidebar-1',
			'description' 	=> ' Themes required sidebar',
			'class'			=>'main_sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			)
	);
	register_sidebar(
		array(
			'name'			=> __(' Posts ', 'rastashaven'),
			'id'  			=> 'sidebar-2',
			'description' 	=> ' the single posts  sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			)
	);
	register_sidebar(
		array(
			'name'			=> __('Header', 'rastashaven'),
			'id'  			=> 'sidebar-3',
			'description' 	=> ' The Header Sidebar',
			'class'			=> 'header_sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			)
	);
	register_sidebar(
		array(
			'name'			=> __('Footer Sidebar', 'rastashaven'),
			'id'  			=> 'sidebar-4',
			'description' 	=> ' The footer Sidebar',
			'class'			=> 'footer_sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
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


