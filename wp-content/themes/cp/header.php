<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

		?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 

    <!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
 
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style-min.css">

    <!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.png" />

    <!-- JS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!--<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/libs/jquery-1.11.0.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/sliderpro-min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/instafeed.min.js"></script>

    <!-- Adaptative images
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>


    <?php if ( is_home() ) { ?>
    <script type="text/javascript">
    $(document).ready(function($) {
        $('#slider').sliderPro({
            width: '490px',
            height: 500,
            aspectRatio: 1,
            visibleSize: '100%',
            forceSize: 'fullWidth'
        });

        // instantiate fancybox when a link is clicked
        $('#slider .sp-image').parent('a').on('click', function(event) {
            event.preventDefault();

            // check if the clicked link is also used in swiping the slider
            // by checking if the link has the 'sp-swiping' class attached.
            // if the slider is not being swiped, open the lightbox programmatically,
            // at the correct index
            if ($('#slider').hasClass('sp-swiping') === false) {
                $.fancybox.open($('#slider .sp-image').parent('a'), {
                    index: $(this).parents('.sp-slide').index()
                });
            }
        });
    });
    </script>
    <?php } ?>

    <?php if( is_home() || in_category( array(2,3,4,5,6) ) ) { ?>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.jstwitter.js"></script>
    <script type="text/javascript">
    $(function() {
        // start jqtweet!
        JQTWEET.loadTweets();
    });
    </script>
    <?php } ?>

    <!-- instanfeed-->
    <script type="text/javascript">
    // var feed = new Instafeed({
    //     get: 'carolinaparsons',
    //     tagName: 'carolinaparsons',
    //     user: 'carolinaparsons',
    //     clientId: '0f404326695b4f8cb29b0f45c49880af'
    // });
    // feed.run();
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Primary Page Layout
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="deco">
    <div class="container">
        <header class="row">
            <h1 class="logo"><a href="<?php bloginfo( 'siteurl' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/carolina_parsons.png"></a></h1>
            <nav class="nav-collapse">
                <?php wp_nav_menu( array('theme_location' => 'header-menu') ); ?>
            </nav>

        </header>

    </div>

    </div>