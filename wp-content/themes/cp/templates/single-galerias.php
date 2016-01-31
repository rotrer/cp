<?php
/**
 * Template post types "campanas, editorial, portadas"
 *
 */
get_header();
    #Categorias asociadas al post
	$catgories = get_the_category();
	#filtro categorias
    $filter_cat = array();
	foreach ($catgories as $key => $cat) {
		if ( $cat->category_parent > 0 ) {
			$filter_cat[] = $cat->term_id;
		}
	}

    #obtener post type del post
    $post_type = get_post_type( $post->ID );
    #Current post id
    $post_id = $post->ID;
    $star_slide = 0;
    $count_photos = 0;
?>
<!--<div class="container section">
    <div class="row">
        <div class="twelve colummns">
        	Primary Page Layout
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
     <div class="container section">
        <div class="row">
            <div class="col-md-12">

                <div id="full-container" class="slider-carusel">
                    <div id="slider" class="slider-pro gallery">
                		<div class="sp-slides">

                			<?php query_posts( array('post_type' => 'archivos', 'category__in' => $filter_cat) ); ?>
                			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                			<?php
                				$photo = get_field('foto_grande_galeria');
                				$thumb = get_field('foto_pequena_galeria');
                				$thumbs[] = ( !empty( $thumb ) ) ? $thumb : $photo['sizes']['thumbnail'];

                                #Indice foto
                                if ($post->ID === $post_id) {
                                    $star_slide = $count_photos;
                                }
                                $count_photos++;
                			?>
                            <div class="sp-slide">
                                <img class="sp-image" src="" data-src="<?php echo $photo['sizes']['large'] ?>" data-small="<?php echo $photo['sizes']['thumbnail'] ?>" data-medium="<?php echo $photo['sizes']['medium'] ?>" data-large="<?php echo $photo['sizes']['large'] ?>" data-retina="<?php echo $photo['sizes']['large'] ?>" />
                            </div>
                   			<?php $i++; endwhile; wp_reset_query(); ?>

                   		</div>

                        <div class="sp-thumbnails">
                        <?php if( $thumbs ) foreach ($thumbs as $key => $thumb) { ?>
                            <img class="sp-thumbnail" src="<?php echo $thumb ?>"/>
                        <?php } ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class ="blog_content readmore-social">
        <div class="pagination">
        <?php
            echo get_previous_post_link('%link', 'Anterior');
            echo get_next_post_link('%link', 'Siguiente');
        ?>
        </div>
    </div>
<!--
        </div>
    </div>
</div> -->
    
    <!-- Content -->
    <div class="container section">
        <div class="row">
            <div class=" twelve column">
                <h3>Comentarios</h3>
            </div>
        </div>
    </div>
	<script type="text/javascript">
    $(document).ready(function($) {
        $('#slider').sliderPro({
            width: '100%',
            height:650,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: true,
            shuffle: false,
            smallSize: 226,
            mediumSize: 800,
            largeSize: 1600,
            thumbnailArrows: true,
            autoplay: false,
            //autoHeight:true,
            imageScaleMode:'contain',
            startSlide: <?php echo $star_slide; ?>,
            //centerImage:false,
        });
    });
    </script>
<?php

get_footer();







