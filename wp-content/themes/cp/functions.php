<?php
/*
*  Create an advanced sub page
*/

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Home',
	// 	'menu_title'	=> 'Home',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'SEO',
	// 	'menu_title'	=> 'SEO',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

}

add_theme_support('post-thumbnails');

// Add post formats
// http://codex.wordpress.org/Post_Formats
// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));
add_theme_support('post-formats');

/** 
 *
 *Theme functions
 * 
 */
function menus_register() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu Principal' ),
      // 'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'menus_register' );

// custom post campanas
function register_custom_post_type_campanas() {
	$args = array(
		'public'   => true,
		'label'    => 'Campañas',
		'menu_position' => 5,
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail'),
		'taxonomies' => array('category', 'post_tag')
	);
	register_post_type( 'campanas', $args );
}

add_action( 'init', 'register_custom_post_type_campanas' );

// custom post portadas
function register_custom_post_type_editorial() {
	$args = array(
		'public'   => true,
		'label'    => 'Editorial',
		'menu_position' => 5,
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail'),
		'taxonomies' => array('category', 'post_tag')
	);
	register_post_type( 'editorial', $args );
}

add_action( 'init', 'register_custom_post_type_editorial' );

// custom post portadas
function register_custom_post_type_portadas() {
	$args = array(
		'public'   => true,
		'label'    => 'Portadas',
		'menu_position' => 5,
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail'),
		'taxonomies' => array('category', 'post_tag')
	);
	register_post_type( 'portadas', $args );
}

add_action( 'init', 'register_custom_post_type_portadas' );

function register_add_image_size_cp() {
	add_image_size( 'galeria-normal-medium', 800);
	add_image_size( 'galeria-small', 226);
	add_image_size( 'galeria-large', 1500);
}
add_action( 'init', 'register_add_image_size_cp' );