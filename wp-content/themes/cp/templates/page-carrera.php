<?php /* Template name: Carrera */ ?>
<?php get_header(); ?>
<div class="container section">
  <div class="row">
    <div class="six columns">
      <h3><?php the_title(); ?></h3>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>