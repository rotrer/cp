<?php $thisCat = get_category(get_query_var('cat')); ?>
<section class="container">
    <div class="row">
      <header class="title">
        <h2>ARCHIVOS</h2>
        <h3><?php echo $thisCat->name; ?></h3>
      </header>
      <div id="flex">
        <?php 
        query_posts( array('cat' => $thisCat->term_id, 'post_type' => 'archivos') ); 
        if ( have_posts() ) while ( have_posts() ) : the_post();
          $imagen_destacada = get_field('imagen_destacada');
          global $is_mobile;
          if ($is_mobile) {
            $photo_featured = $imagen_destacada["sizes"]["galeria-thumbx"];
            $photo_width = $imagen_destacada["sizes"]["galeria-thumbx-width"];
            $photo_height = $imagen_destacada["sizes"]["galeria-thumbx-height"];
          } else {
            $photo_featured = $imagen_destacada["url"];
            $photo_width = $imagen_destacada["width"];
            $photo_height = $imagen_destacada["height"];
          }
        ?>
        <div class="item col-md-4" data-w="<?php echo $photo_width; ?>" data-h="<?php echo $photo_height; ?>">
          <div class="archive-cat">
            <a href="<?php the_permalink(); ?>"><img  src="<?php echo $photo_featured; ?>"> 
              <!-- descripcion imagen -->
              <div class="description">
                <h3><?php the_title(); ?></h3>
              </div>
            </a>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
</section>
<?php if ($thisCat->term_id == 47) { ?>
<script>
  $(document).ready(function(){
    $('#flex').flexImages();
  });
</script>
<?php } ?>