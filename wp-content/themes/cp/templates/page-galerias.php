<?php /* Template name: Galerías */ ?>
<?php get_header(); ?>
<!-- Content -->
<div class="container section">
  <div class="row">
    <div class=" twelve column">
      
      <div id="collage" class="flex-images">
        <?php 
        $type = '';
        if ( is_page('Campañas') ) {
          $type = 'campanas';
        } else if ( is_page('Editorial') ) {
          $type = 'editorial';
        } else if ( is_page('Portadas') ) {
          $type = 'portadas';
        }
        
        query_posts( array('post_type' => $type) ); 
        if ( have_posts() ) while ( have_posts() ) : the_post();
        ?>
        <?php $photo = get_field('foto_grande_galeria'); ?>
        <div class="item" data-w="<?php echo $photo['width'] ?>" data-h="<?php echo $photo['height'] ?>">
          <a href="<?php the_permalink(); ?>"><img  src="<?php echo $photo['url'] ?>"> 

            <!-- descripcion imagen --> 
           <div class="description"><h3>Descipcion</h3></div></a>

        </div>

        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>