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
                <article class="postlist">
                    <div class="four columns">

                     <a href="">   <img src="<?php bloginfo( 'template_directory' ); ?>/content/thumb1.jpg"></a> 

                    </div>
                    <div class="eight columns">

                        <h2><a href="" >Sed diam nonummy nibh euismod tincidunt aut laoreet dolore magna aliquam</a> </h2>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&nbsp;olutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                    </div>

                </article>
                <article class="postlist">
                    <div class="four columns">
                       <a href=""> <img src="<?php bloginfo( 'template_directory' ); ?>/content/thumb2.jpg"></a> 
                    </div>
                    <div class="eight columns">

                        <h2><a href="">Sed diam nonummy nibh euismod tincidunt aut laoreet dolore magna aliquam </a></h2>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>

                </article>
                <article class="postlist">
                    <div class="four columns">
                       <a href=""> <img src="<?php bloginfo( 'template_directory' ); ?>/content/thumb1.jpg"></a> 
                    </div>
                    <div class="eight columns">

                        <h2><a href=""> Sed diam nonummy nibh euismod tincidunt aut laoreet dolore magna aliquam</a></h2>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                    </div>

                </article>

                <a href=""></a>
            </div>

            <div class="four  columns">
            		<?php get_sidebar(); ?>
            </div>
        </div>

    </div>
	

<?php get_footer(); ?>