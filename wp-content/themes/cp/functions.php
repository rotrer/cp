<?php
/*
*  Mobile Detect
*/

require get_template_directory() . '/Mobile_Detect.php';
$detect = new Mobile_Detect;
$is_mobile = ($detect->isMobile()) ? true : false;

//Set Client ID FB
if (strstr($_SERVER['HTTP_HOST'], '.app') || strstr($_SERVER['HTTP_HOST'], 'localhost:8888')) {
  define(CLIENT_ID, "1494358724206970");
} elseif (strstr($_SERVER['HTTP_HOST'], 'dev.lcasesoria.cl')) {
  define(CLIENT_ID, "735516033250253");
} else {
  define(CLIENT_ID, "1067212079997859");
}

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

}

// Add post formats
// http://codex.wordpress.org/Post_Formats
// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));
// add_theme_support('post-formats');

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
}
add_theme_support( 'post-thumbnails' ); 

add_action( 'init', 'register_add_image_size_cp' );


add_filter('jpeg_quality', function($arg){return 100;});

function my_custom_featured_image_column_image( $image ) {
    if ( !has_post_thumbnail() )
    {
      $imagen_destacada = get_field('imagen_destacada');
      $photo_featured = $imagen_destacada["url"];
      return $photo_featured;
    }
}
add_filter( 'featured_image_column_default_image', 'my_custom_featured_image_column_image' );


function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
