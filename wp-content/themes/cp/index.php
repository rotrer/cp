<?php get_header(); ?>
<div class="container slider-home">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#slider-home"></li>
      <li class="" data-slide-to="1" data-target="#slider-home"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <img class="first-slide" src="<?php bloginfo( 'template_directory' ); ?>/images/img1.jpg" alt="First slide">
      </div>
      <div class="item ">
        <img class="first-slide" src="<?php bloginfo( 'template_directory' ); ?>/images/img2.jpg" alt="First slide">
      </div>
    </div>
    <a data-slide="prev" role="button" href="#myCarousel" class="left carousel-control">
      <span aria-hidden="true" class="sp-arrow sp-previous-arrow"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a data-slide="next" role="button" href="#myCarousel" class="right carousel-control">
      <span aria-hidden="true" class="sp-arrow sp-next-arrow"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container section">
  <div class="row">
    <section class="post-list home col-md-12">
    <?php $post_counter = 0; ?>
    <?php query_posts( array('category__in' => '2', 'post_status' => 'publish', 'posts_per_page' => 20, 'order' => 'ASC') ); ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php $post_counter++; ?>
    <article class="post-content">
      <header class="post-title">
        <h2><a href="<?php the_permalink() ?>" ><?php the_title() ?></a> </h2>
        <h4><?php echo get_the_date(); ?></h4>
      </header>
      <div class="post-img">
        <a href="<?php the_permalink() ?>"><?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
        <img src="<?php if ( has_post_thumbnail() ) echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="" >
        </a> 
      </div>
      <div class="post-entry">
        <?php the_excerpt() ?>
      </div>
      <footer class ="post-option">
        <div class="post-social">
          <a href="<?php the_permalink(); ?>">Comentarios <?php comments_number( '0' ); ?></a>
        </div>
        <div class="post-readmore">
          <a href="<?php the_permalink(); ?>">Continuar leyendo</a>
        </div>
      </footer>
    </article>
    <?php if ($post_counter < count( $posts )) { ?>
    <div class="deco1"></div>
    <?php } ?>
    <?php endwhile; wp_reset_query(); ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
