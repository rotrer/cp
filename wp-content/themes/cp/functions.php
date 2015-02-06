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