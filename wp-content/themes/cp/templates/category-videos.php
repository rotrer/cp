<?php 
  $thisCat = get_category(get_query_var('cat')); 
  $id_singles = '';
?>
<section class="container">
    <div class="row">
      <header class="title">
         
        <h1><?php echo $thisCat->name; ?></h1>
           <nav class="breadcrum">
          <a href="<?php echo get_category_link(36); ?>">Archivos</a>
        </nav>
   
      </header>
      <div id="<?php echo $id_singles; ?>">
        <?php 
        query_posts( array('cat' => $thisCat->term_id, 'post_type' => 'archivos') ); 
        if ( have_posts() ) while ( have_posts() ) : the_post();
          $id_video_youtube = get_field('id_video_youtube');
        ?>
        <div class="item col-xs-6 col-sm-6 col-md-6 " data-w="<?php echo $photo_width; ?>" data-h="<?php echo $photo_height; ?>">
          <div class="archive-cat">
            <iframe width="100%" height="229" src="https://www.youtube.com/embed/<?php echo $id_video_youtube; ?>?showinfo=0&iv_load_policy=3&nologo=1"  showinfo="0" frameborder="0" color="#414141" allowfullscreen ></iframe>
            <div class="description-video">
              <h2><?php the_title(); ?></h2>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
</section>