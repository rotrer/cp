
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
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style-min.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.png" />

    <!-- JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!--<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/libs/jquery-1.11.0.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/sliderpro-min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/responsive-nav.min.js"></script>

    <!-- Adaptative images
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>


    <?php if ( is_home() ) { ?>
    <script type="text/javascript">
    $(document).ready(function($) {
        $('#slider').sliderPro({
            width: '500px',
            height: '500px',
            aspectRatio: 1,
            visibleSize: '100%',
            //forceSize: 'fullWidth'
            slideDistance :0,   
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
               <?php

                $defaults = array(
                    'theme_location'  => 'header-menu',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_nav_menu( $defaults );

            ?>
        </nav>

        </header>

    </div>

    </div> 
