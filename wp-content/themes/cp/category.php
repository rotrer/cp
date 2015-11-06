<?php
/**
 * Template for displaying Category Archive pages
 *
 */
get_header();
  $thisCat = get_category(get_query_var('cat'));
	if ( in_category( array(2,3,4,5,6) ) ) {
		include TEMPLATEPATH . '/templates/category-blog.php';
	} elseif ( $thisCat->parent == 36 ) {
    include TEMPLATEPATH . '/templates/category-galerias.php';
  }
get_footer();
