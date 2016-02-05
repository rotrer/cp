<?php 
  $thisCat = get_category(get_query_var('cat')); 
  $id_singles = '';
?>
<?php if ($thisCat->term_id == 47) { $id_singles = 'flex'; ?>
<script>
  $(document).ready(function(){
    $('#flex').flexImages();
  });
</script>
<?php }elseif ($thisCat->term_id == 39) { $id_singles = 'portadas'; ?>
<?php } ?>
<section class="container">
    <div class="row">
      <header class="title">
         <h3> Archivos</h3>
        <h1><?php echo $thisCat->name; ?></h1>
   
      </header>
      <div id="<?php echo $id_singles; ?>">
        <?php 
        query_posts( array('cat' => $thisCat->term_id, 'post_type' => 'archivos') ); 
        if ( have_posts() ) while ( have_posts() ) : the_post();
          $imagen_destacada = get_field('imagen_destacada');
          $photo_featured = $imagen_destacada["sizes"]["galeria-thumbx"];
          $photo_width = $imagen_destacada["sizes"]["galeria-thumbx-width"];
          $photo_height = $imagen_destacada["sizes"]["galeria-thumbx-height"];
        ?>
        <div class="item col-md-4" data-w="<?php echo $photo_width; ?>" data-h="<?php echo $photo_height; ?>">
          <div class="archive-cat">
            <a href="<?php the_permalink(); ?>"><img  src="<?php echo $photo_featured; ?>"> 
              <!-- descripcion imagen -->
              <div class="description">
                <h2><?php the_title(); ?></h2>
              </div>
            </a>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
</section>