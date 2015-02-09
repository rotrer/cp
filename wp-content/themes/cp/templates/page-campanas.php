<?php /* Template name: Campañas */ ?>
<?php get_header(); ?>
<!-- Content -->
<div class="container section">
  <div class="row">
    <div class=" twelve column">
      <h2>Campañas</h2>
      <div id="demo1" class="flex-images">
      	<?php query_posts( array('post_type' => 'campanas') ); ?>
      	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	<?php $photo = get_field('foto_grande_galeria'); ?>
      	<div class="item" data-w="<?php echo $photo['width'] ?>" data-h="<?php echo $photo['height'] ?>">
        	<a href="<?php the_permalink(); ?>"><img  src="<?php echo $photo['url'] ?>"></a>
        </div>

        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>