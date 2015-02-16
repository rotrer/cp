<?php
/**
 * Template for displaying Category Archive pages
 *
 */
get_header();
	#obtener post type del post
  $post_type = get_post_type( $post->ID );
	if ( in_category( array(2, 3, 4, 5, 6) ) ) {
		include TEMPLATEPATH . '/templates/single-blog.php';
	} elseif ( in_category( array(8, 12, 15) ) || in_array( $post_type, array('campanas', 'editorial', 'portadas') ) ) {
		include TEMPLATEPATH . '/templates/single-galerias.php';
	}
get_footer();
