<?php
/**
 * Template post types "campanas, editorial, portadas"
 *
 */
get_header();
$count_photos = 0;
?>
<!--
Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     <section class="container section">
        <div class="row">
            <div class="col-md-12">
            <header class="title">
                <?php
                    $category_name = '';
                    $categories = get_the_category();
                    if ($categories) foreach ($categories as $key => $category) {
                        if ($category->parent != 0) {
                            $category_name = $category->name;
                        }
                    }
                ?>
                <h3> Archivos</h3>
                <h1>
                   <?php echo $category_name; ?> <?php the_title(); ?>
                </h1>
          
                </header>

                <div id="full-container" class="slider-carusel">
                    <div id="slider" class="slider-pro gallery">
                		<div class="sp-slides">
                			<?php
                				$gallery = get_field('galeria_all');
                			?>
                            <?php if($gallery) foreach ($gallery as $key => $photo) { ?>
                            <div class="sp-slide">
                                <img class="sp-image" src="" 
                                    data-src="<?php echo $photo["url"]; ?>" 
                                    data-small="<?php echo $photo['sizes']["galeria-thumbx"]; ?>" 
                                    data-medium="<?php echo $photo['sizes']['medium']; ?>" 
                                    data-large="<?php echo $photo["url"]; ?>" 
                                    data-retina="<?php echo $photo["url"]; ?>" />
                            </div>
                   			<?php $count_photos++; } ?>

                   		</div>

                        <?php if( $count_photos > 1 ) { ?>
                        <div class="sp-thumbnails">
                        <?php if($gallery) foreach ($gallery as $key => $photo) { ?>
                            <img class="sp-thumbnail" src="<?php echo $photo["sizes"]["thumbnail"] ?>"/>
                        <?php } ?>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
    <div class ="blog_content readmore-social">
        <div class="pagination">
        <?php
            echo get_previous_post_link('%link', 'Anterior');
            echo get_next_post_link('%link', 'Siguiente');
        ?>
        </div>
    </div>
    
    <!-- Content -->
    <!-- <div class="container section">
        <div class="row">
            <div class=" twelve column">
                <h3>Comentarios</h3>
            </div>
        </div>
    </div> -->
	<script type="text/javascript">
    $(document).ready(function($) {
        $('#slider').sliderPro({
            width: '100%',
            height:650,
            fade: true,
            arrows: <?php echo ($count_photos > 1) ? 'true' : 'false'; ?>,
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
            startSlide: 0,
            //centerImage:false,
        });
    });
    </script>
<?php

get_footer();







