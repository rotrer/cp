<!-- Content <div class="container section">
  <div class="row">
    <div class=" twelve column">-->

    <?php $thisCat = get_category(get_query_var('cat')); ?>
    <section class="container">
    <div class="row">
      <header class="title">
      <h2>ARCHIVOS</h2>
      </header>
        <?php 
        query_posts( array('cat' => $thisCat->term_id, 'post_type' => 'archivos') ); 
        if ( have_posts() ) while ( have_posts() ) : the_post();
        ?>
        <?php $photo = get_field('foto_grande_galeria'); ?>



        <div class="col-md-4 " data-w="<?php echo $photo['width'] ?>" data-h="<?php echo $photo['height'] ?>">
          <div class="archive-cat">
          <a href="<?php the_permalink(); ?>"><img  src="<?php echo $photo['url'] ?>"> 

            <!-- descripcion imagen --> 
           <div class="description"><h3>Descripcion</h3></div></a>
            </div>
        </div>


        <?php endwhile; wp_reset_query(); ?>


   </div>
  </div>

  <!--  </div>
  </div>
</div>--> 