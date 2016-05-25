<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php
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
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--   <meta http-equiv="Cache-Control" content="max-age= 172800" forua= true /> -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/jquery.flex-images.css">
  <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.png" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/sliderpro-min.js"></script>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flex-images.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.lazyload.js"></script>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/scripts.js"></script>
  <?php wp_head(); ?>
  <script>
  $('#flex').flexImages({ rowHeight: 320, maxRows: 8, truncate: true });
  </script>
</head>
  <body <?php body_class(); ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=<?php echo CLIENT_ID; ?>";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <header class="navbar-wrapper">
    <div class="container">
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo( 'siteurl' ); ?>">
            <h1>CAROLINA PARSONS</h1>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
          <?php
          $defaults = array(
          'theme_location'  => 'header-menu',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'nav navbar-nav',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'imageScaleMode'  => 'contain', 
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
          </div>
        </div>
      </nav>
    </div>
  </header>