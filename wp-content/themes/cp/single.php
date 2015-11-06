<?php
/**
 * Template for displaying Category Archive pages
 *
 */
get_header();
	#obtener post type del post
  $post_type = get_post_type( $post->ID );
  $thisCat = get_category(get_query_var('cat'));
	if ( in_category( array(2, 3, 4, 5, 6) ) ) {
		include TEMPLATEPATH . '/templates/single-blog.php';
	} elseif ( $thisCat->parent == 36 || in_array( $post_type, array('archivos') ) ) {
		include TEMPLATEPATH . '/templates/single-galerias.php';
	}
get_footer();
