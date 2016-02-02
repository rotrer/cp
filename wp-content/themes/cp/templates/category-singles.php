<!-- Content <div class="container section">
  <div class="row">
    <div class=" twelve column">-->

    <?php $thisCat = get_category(get_query_var('cat')); ?>
    <section class="container">
    <div class="row">
      <header class="title">
      <h2>ARCHIVOS</h2>
      <h3><?php echo $thisCat->name; ?></h3>
      </header>
        <?php 
        query_posts( array('cat' => $thisCat->term_id, 'post_type' => 'archivos') ); 
        if ( have_posts() ) while ( have_posts() ) : the_post();
        ?>
        <?php 
          $imagen_destacada = get_field('imagen_destacada');
          global $is_mobile;
          if ($is_mobile) {
            $photo_featured = $imagen_destacada["sizes"]["galeria-thumbx"];
          } else {
            $photo_featured = $imagen_destacada["url"];
          }
        ?>
        <div class="col-md-4 ">
          <div class="archive-cat">
          <a href="<?php the_permalink(); ?>"><img  src="<?php echo $photo_featured; ?>"> 

            <!-- descripcion imagen --> 
           <div class="description"><h3><?php the_title(); ?></h3></div></a>
            </div>
        </div>


        <?php endwhile; wp_reset_query(); ?>


   </div>
  </section>

  <!--  </div>
  </div>
</div>--> 