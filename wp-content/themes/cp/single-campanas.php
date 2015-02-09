<?php
/**
 * Template post types "campanas, editorial, portadas"
 *
 */
get_header();
	$catgories = get_the_category();
	$filterCat = array();
	foreach ($catgories as $key => $cat) {
		if ( $cat->category_parent > 0 ) {
			$filterCat[] = $cat->term_id;
		}
	}
?>

	<!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="slider" class="slider-pro gallery">
				<div class="sp-slides">

				<?php query_posts( array('post_type' => 'campanas',  'category__in' => $filterCat) ); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php
					$photo = get_field('foto_grande_galeria');
					$thumbs[] = ( isset( get_field('foto_pequena_galeria') && !empty( get_field('foto_pequena_galeria') ) ) ? get_field('foto_pequena_galeria') : $photo['sizes']['galeria-small'];
				?>
            <div class="sp-slide">
                <img class="sp-image" src="" data-src="<?php echo $photo['sizes']['galeria-normal-medium'] ?>" data-small="<?php echo $photo['sizes']['galeria-small'] ?>" data-medium="<?php echo $photo['sizes']['galeria-normal-medium'] ?>" data-large="<?php echo $photo['sizes']['galeria-large'] ?>" data-retina="<?php echo $photo['sizes']['galeria-large'] ?>" />
            </div>
   			<?php endwhile; wp_reset_query(); ?>

   			</div>

        <div class="sp-thumbnails">
        <?php foreach ($thumbs as $key => $thumb) { ?>
            <img class="sp-thumbnail" src="<?php echo $thumb ?>"/>
        <?php } ?>
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
            width: 800,
            height:500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: true,
            shuffle: false,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false,
            //autoHeight:true,
            imageScaleMode:'contain',
            //centerImage:false,
        });
    });
    </script>
<?php

get_footer();
