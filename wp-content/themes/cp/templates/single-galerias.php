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
                            $category_id = $category->term_id;
                        }
                    }
                ?>
                
                <h1><?php the_title(); ?></h1>
                <nav class="breadcrum">
                  <a href="<?php echo get_category_link(36); ?>">Archivos</a>
                  <a href="<?php echo get_category_link($category_id); ?>"><?php echo $category_name; ?></a>
                </nav>
                </header>

                <div id="full-container" class="slider-carusel">
                    <div id="slider" class="slider-pro gallery">
                		<div class="sp-slides">
                			<?php
                				$gallery = get_field('galeria_all');
                			?>
                            <?php if($gallery) foreach ($gallery as $key => $photo) { ?>
                            <div class="sp-slide">
                                <img class="lazy sp-image" src="<?php bloginfo( 'template_directory' ); ?>/css/images/blank.gif" 
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
                <div>
                    <div class=" col-md-6">

                    <div class ="blog_content ">

                        <ul class="socialbuttons share">
                            <li class="facebook">
                                <a  href=""
                                        id="share_fb" 
                                        data-link="<?php the_permalink(); ?>" 
                                        data-title="<?php the_title(); ?>" 
                                        data-excerpt="<?php echo strip_tags(get_the_excerpt()); ?>" 
                                        data-picture="<?php echo $image; ?>" 
                                        target="_blank">Facebook</a>
                            </li>
                            <li class="twitter">
                                <a  href=""
                                        id="share_tw" 
                                        data-link="<?php the_permalink(); ?>" 
                                        data-title="<?php the_title(); ?>" 
                                        target="_blank">twitter</a>
                            </li>
                        </ul>

                    </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="pagination2">
                        <?php
                            echo get_previous_post_link('%link', 'Anterior');
                            echo get_next_post_link('%link', 'Siguiente');
                        ?>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
<?php endwhile; ?>
    

    
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
                            height:'400',
                            fade: true,
                            arrows: <?php echo ($count_photos > 1) ? 'true' : 'false'; ?>,
                            buttons: true,
                            fullScreen: true,
                            shuffle: false,
                            smallSize: 200,
                            mediumSize: 800,
                            largeSize: 1200,
                            thumbnailArrows: true,
                            autoplay: false,
                            //autoHeight:true,
                            imageScaleMode:'contain',
                            startSlide: 0,       
                            thumbnailWidth: 80,
                            thumbnailHeight: 100

                            //centerImage:false,
                        });

                        // instantiate fancybox when a link is clicked
                        $('#slider .sp-image').parent('a').on('click', function(event) {
                            event.preventDefault();

                            // check if the clicked link is also used in swiping the slider
                            // by checking if the link has the 'sp-swiping' class attached.
                            // if the slider is not being swiped, open the lightbox programmatically,
                            // at the correct index
                            if ($('#slider').hasClass('sp-swiping') === false) {
                                $.fancybox.open($('#slider .sp-image').parent('a'), {
                                    index: $(this).parents('.sp-slide').index()
                                });
                            }
                        });
                    }); 
                </script>

<?php

get_footer();







