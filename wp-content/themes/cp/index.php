<?php get_header(); ?>
	<div id="slider" class="slider-pro">
        <div class="sp-slides">
        <?php if ( get_field('fotos_slider_home', 'options') ) foreach (get_field('fotos_slider_home', 'options') as $key => $item) { ?>
            <div class="sp-slide">
                <img src="<?php echo $item['foto_slider_h']; ?>">
            </div>
        <?php } ?>
        </div>
    </div>

    <!-- Content -->
    <div class="container section">

        <div class="row">
            <div class="eight columns">
                <h3>Reciente</h3>
                <?php query_posts( array('category__in' => '2', 'post_status' => 'publish', 'posts_per_page' => 10, 'order' => 'DESC') ); ?>
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <article class="postlist">
                    <div class="four columns">

                     <a href="<?php the_permalink() ?>">
                        <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
                        <img src="<?php if ( has_post_thumbnail() ) echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="" >
                     </a> 

                    </div>
                    <div class="eight columns">

                        <h2><a href="<?php the_permalink() ?>" ><?php the_title() ?></a> </h2>

                        <?php the_excerpt() ?>
                    </div>

                </article>
                <?php endwhile; wp_reset_query(); ?>
            </div>

            <div class="four  columns">
            		<?php get_sidebar(); ?>
            </div>
        </div>

    </div>
	

<?php get_footer(); ?>