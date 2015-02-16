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
		} elseif ( $cat->term_id == 15 ) {#excepcion para filtro de portadas
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
 <div class="container section">
<div class="row">
<div class="twelve colummns">
	<!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="slider" class="slider-pro gallery">
		<div class="sp-slides">

			<?php query_posts( array('post_type' => $post_type, 'category__in' => $filter_cat) ); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php
				$photo = get_field('foto_grande_galeria');
				$thumb = get_field('foto_pequena_galeria');
				$thumbs[] = ( !empty( $thumb ) ) ? $thumb : $photo['sizes']['galeria-small'];

                #Indice foto
                if ($post->ID === $post_id) {
                    $star_slide = $count_photos;
                }
                $count_photos++;
			?>
            <div class="sp-slide">
                <img class="sp-image" src="" data-src="<?php echo $photo['sizes']['galeria-normal-medium'] ?>" data-small="<?php echo $photo['sizes']['galeria-small'] ?>" data-medium="<?php echo $photo['sizes']['galeria-normal-medium'] ?>" data-large="<?php echo $photo['sizes']['galeria-large'] ?>" data-retina="<?php echo $photo['sizes']['galeria-large'] ?>" />
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
            width: 1100,
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
