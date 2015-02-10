<?php
/**
 * Template for displaying Category Archive pages
 *
 */
get_header();
	if ( in_category( array(2, 3, 4, 5, 6) ) ) {
		include TEMPLATEPATH . '/templates/single-blog.php';
	} elseif ( in_category( array(8, 12, 15) ) ) {
		include TEMPLATEPATH . '/templates/single-galerias.php';
	}
get_footer();
