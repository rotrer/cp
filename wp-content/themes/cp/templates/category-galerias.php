<?php get_header(); ?>
<!-- Content <div class="container section">
  <div class="row">
    <div class=" twelve column">-->

    <div id="full-container" >
      <div  id="collage" class="flex-images">
        <?php 
        $thisCat = get_category(get_query_var('cat'));
        query_posts( array('cat' => $thisCat->term_id) ); 
        if ( have_posts() ) while ( have_posts() ) : the_post();
        ?>
        <?php $photo = get_field('foto_grande_galeria'); ?>
        <div class="item" data-w="<?php echo $photo['width'] ?>" data-h="<?php echo $photo['height'] ?>">
          <a href="<?php the_permalink(); ?>"><img  src="<?php echo $photo['url'] ?>"> 

            <!-- descripcion imagen --> 
           <div class="description"><h3>Descripcion</h3></div></a>

        </div>


        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>

  <!--  </div>
  </div>
</div>--> 
<?php get_footer(); ?>