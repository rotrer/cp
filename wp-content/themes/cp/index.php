<?php get_header(); ?>

	<!-- Carousel
	    ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="<?php bloginfo( 'template_directory' ); ?>/images/bigimg2.jpg" alt="First slide">
	        </div>
	      </div>
	    </div>
	<!-- /.carousel -->
		<!-- Content -->
		<div class="container section">
			<div class="row">
				<section class="post-list col-md-8">
					<?php query_posts( array('category__in' => '2', 'post_status' => 'publish', 'posts_per_page' => 10, 'order' => 'DESC') ); ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article class="post-content">

							<header class="post-title">
								<h2><a href="<?php the_permalink() ?>" ><?php the_title() ?></a> </h2>
							</header>
						
							<div class="post-img">
								 <a href="<?php the_permalink() ?>"><?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>

									<img src="<?php if ( has_post_thumbnail() ) echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="" >
								 </a> 
							</div>
					
						<div class="post-entry">
							<?php the_excerpt() ?>
						</div>
					</article>
					<div class="deco1"></div>
					<?php endwhile; wp_reset_query(); ?>
				</section>
				<aside class="col-md-4">
						<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
<?php get_footer(); ?>