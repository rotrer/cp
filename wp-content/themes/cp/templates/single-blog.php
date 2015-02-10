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
						
						<?php the_content(); ?>
					</div>

				</article>
				<div class="comments">
					<?php if ( get_comments() ) : ?>
						<h2 class="comments-title">
							<p>Cantidad de comentarios <?php echo get_comments_number() ?></p>
						</h2>

						<ol class="comment-list">
							<?php
								wp_list_comments( array(
									'style'       => 'ul',
								), get_comments() );
							?>
						</ol><!-- .comment-list -->

					<?php endif; // have_comments() ?>

					<?php
						// If comments are closed and there are comments, let's leave a little note, shall we?
						if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
					?>
						<p class="no-comments">Comentarios cerrardos</p>
					<?php endif; ?>

					<?php
						$fields =  array(

						  'author' =>
						    '<p class="comment-form-author"><label for="author">Nombre</label> ' .
						    ( $req ? '<span class="required">*</span>' : '' ) .
						    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						    '" size="30"' . $aria_req . ' /></p>',

						  'email' =>
						    '<p class="comment-form-email"><label for="email">Email</label> ' .
						    ( $req ? '<span class="required">*</span>' : '' ) .
						    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						    '" size="30"' . $aria_req . ' /></p>',
						);
						$args = array(
						  'id_form'           => 'commentform',
						  'id_submit'         => 'submit',
						  'title_reply'       => __( 'Leave a Reply' ),
						  'title_reply_to'    => __( 'Leave a Reply to %s' ),
						  'cancel_reply_link' => __( 'Cancel Reply' ),
						  'label_submit'      => __( 'Post Comment' ),

						  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">Comentario
						  	</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
						    '</textarea></p>',

						  'must_log_in' => '',

						  'logged_in_as' => '<p class="logged-in-as">' .
						    sprintf(
						    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
						      admin_url( 'profile.php' ),
						      $user_identity,
						      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
						    ) . '</p>',

						  'comment_notes_before' => '<p class="comment-notes">' .
						    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
						    '</p>',

						  'comment_notes_after' => '',

						  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
						);
						comment_form($args);
					?>
				</div>
				<div class ="eleven columns u-pull-right readmore-social">
					<div class="pagination">
					<?php
						echo get_previous_post_link('%link', 'Anterior');
						echo get_next_post_link('%link', 'Siguiente');
					?>
					</div>
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