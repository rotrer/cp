<?php
/**
 * Template for displaying Category Archive pages
 *
 */
get_header();
	if ( in_category( array(2,3,4,5,6) ) ) {
		include TEMPLATEPATH . '/templates/blog.php';
	}
get_footer();
