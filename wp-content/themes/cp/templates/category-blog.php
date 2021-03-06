<!-- Content -->
<section class="container section blog-interior">
  <div class="row">
    <div class="col-md-12">
      <header class="title category">
              <h1>Blog</h1>
          </header>
      <!--<?php $categories_blog = get_categories(array('parent' => 2, 'hide_empty' => 0)); ?>
        <nav>
           <ul class="menu-blog">
            <?php if ( $categories_blog ) foreach ($categories_blog as $key => $cat) { ?>
            <li><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name ?></a></li>
            <?php } ?>
          </ul>
        </nav>
        <div class="deco2"></div>-->
    </div>
    <section class="col-md-9 post-list">
      <?php $post_counter = 0; ?>
      <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php $post_counter++; ?>
      <article class="post-content">
        <header class="post-title">
          <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a> </h2>
          <h4><?php echo get_the_date(); ?></h4>
        </header>
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="post-img">
          <a href="<?php the_permalink(); ?>">
            <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
            <img src="<?php if ( has_post_thumbnail() ) echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
          </a> 
        </div>
        <div class="post-entry">
          <?php the_excerpt(); ?>
        </div>
        <?php } ?>
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
        <?php endwhile; ?>
      <?php else : ?>
      <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
          <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
          <?php get_search_form(); ?>
        </div><!-- .entry-content -->
      </article><!-- #post-0 -->
      <?php endif; ?>
    </section>
    <aside class="col-md-3">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</section>
