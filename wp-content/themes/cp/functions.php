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

function register_add_image_size_cp() {
	add_image_size( 'galeria-thumbx', 450);
	// add_image_size( 'galeria-small', 226);
	// add_image_size( 'galeria-large', 1500);
}
add_action( 'init', 'register_add_image_size_cp' );


//Evitar creación de copias de imágenes
function ayudawp_quita_copias_imagenes( $sizes) {
        unset( $sizes['thumbnail']);
        unset( $sizes['medium']);
        unset( $sizes['large']);
        return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'ayudawp_quita_copias_imagenes');

add_filter('jpeg_quality', function($arg){return 100;});