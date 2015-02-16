<?php /* Template name: Contacto */ ?>


<?php get_header(); ?>


<div class="container section">

        <div class="row">
            <div class="six columns">
                <h3>Contacto</h3>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>


	</div>

	<div class="six columns"></div>
	</div>

<?php get_footer(); ?>