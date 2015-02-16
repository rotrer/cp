<!-- Content -->
<div class="container section">

	<div class="row">
		<div class="eight columns">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<article class="postlist">
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="twelve columns blog_img">
						<a href="<?php the_permalink(); ?>">
							<?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
							<img src="<?php if ( has_post_thumbnail() ) echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
						</a> 
					</div>
					<?php } ?>
					<div class="eleven columns u-pull-right ">
						<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a> </h2>
						
						<?php the_excerpt(); ?>
					</div>

				</article>
				<div class ="eleven columns u-pull-right readmore-social">
					<span class="u-pull-right"><a href="<?php the_permalink(); ?>">Comentarios <?php comments_number( '0' ); ?></a></span><span class="u-pull-left readmore"><a href="<?php the_permalink(); ?>">Continuar leyendo</a></span>
				</div>
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
			
		</div>
		
		<aside class="four  columns">
			<h3>Categorías</h3>
			<?php $categories_blog = get_categories(array('parent' => 2, 'hide_empty' => 0)); ?>
			<ul>
				<?php if ( $categories_blog ) foreach ($categories_blog as $key => $cat) { ?>
				<li><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name ?></a></li>
				<?php } ?>
			</ul>

			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>