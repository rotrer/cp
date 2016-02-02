
<!-- Content <div class="container section">
  <div class="row">
    <div class=" twelve column">-->


    <section class="container">
    <div class="row">
      <header class="title">
      <h2>ARCHIVOS</h2>
      </header>
        <?php 
        $categories = get_categories( array(
            'orderby' => 'name',
            'hide_empty' => 0,
            'parent'  => 36
        ) );
        if ( $categories ) foreach ($categories as $key => $category) {
        ?>
        <?php $photo = get_field('imagen_cat', $category); ?>



        <div class="col-md-4 " data-w="<?php echo $photo['width'] ?>" data-h="<?php echo $photo['height'] ?>">
          <div class="archive-cat">
          <a href="<?php echo get_category_link( $category->term_id ); ?>"><img  src="<?php echo $photo; ?>"> 

            <!-- descripcion imagen --> 
           <div class="description"><h3><?php echo $category->name; ?></h3></div></a>
            </div>
        </div>


        <?php } ?>


   </div>
  </section>

  <!--  </div>
  </div>
</div>--> 