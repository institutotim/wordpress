<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- IE Compatibility modes -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php
            /* Print the <title> tag based on what is being viewed. */
            global $page, $paged;

            wp_title( '-', true, 'right' );

            // Add the blog name.
            bloginfo( 'name' );

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " - $site_description";

            // Add a page number if necessary:
            if ( $paged >= 2 || $page >= 2 )
                echo ' - ' . sprintf( __( 'Page %s', 'institutotim' ), max( $paged, $page ) );
        ?></title>

<!--       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
<!--       <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
<!--       <link href="https://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">-->
       <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->

        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie8.css">
        <![endif]-->
        <?php wp_head(); ?>

    </head>
<body <?php body_class(); ?>>




    <!-- NAVBAR PORTAL TIM START -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/institutotim.css">
    <!--<link href="https://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">-->


    <div class="section navbar-overtop-tim">
      <div class="container ">
        <div class="row">
          <!--<div class="col-lg-12">-->
            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
              <a href="http://tim.com.br/" target="_blank">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_header_portal_tim.png" title="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 hidden-lg visible-xs" >
              <a href="http://tim.com.br">
	              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_top_header_institutotim.png" title="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
           </div>
          <!--</div>-->
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 navbar-overtop-tim-en-pt">

<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
<a href="<?php echo get_blog_details(2)->siteurl; ?>">English</a>

<?php } else { ?>
<a href="<?php echo get_blog_details(1)->siteurl; ?>">Português</a>

<?php } ?>




              <!--<a href="https://en.institutotim.org.br" class="">English Version</a>-->
            </div>

        </div>
      </div>
    </div>
    <!-- NAVBAR PORTAL TIM END -->
    <!-- NAVBAR MENU START -->
    <div class="section navbar-maintop-tim">
      <div class="container">
        <div class="row row-eq-height">
          <div class="col-lg-5 menu-fixed-bottom-left hidden-xs">
<!--            <div class="col-md-8 menu-fixed-bottom-left">-->
              <a href="<?php bloginfo( 'url'); ?>">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_header_institutotim.png" class="img-responsive"></a>
            <!--</div>-->
            
            <div class="col-md-4 menu-fixed-bottom-right" > 
            </div>
          </div>

            <div class="col-lg-7">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="search">
                      <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                         <input type="search" class="search" placeholder="<?php echo esc_attr_x( 'O que você procura?', 'placeholder' ) ?>"
                       value="<?php echo get_search_query() ?>" name="s"
                       title="<?php echo esc_attr_x( 'O que você procura?', 'label' ) ?>" />
                         <span class="icon"><i class="fa fa-search"></i></span>
                   </form>
                    
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right social">
                      <!--<a href="#"><i class="fa fa-at fa-fw fa-lg text-inverse"></i></a>
                      <a href="#"><i class="fa fa-facebook fa-fw fa-lg text-inverse"></i></a>
                      <a href="#"><i class="fa fa-fw fa-lg fa-youtube-play text-inverse"></i></a>
                      <a href="#"><i class="fa fa-flickr fa-fw fa-lg hub text-inverse"></i></a>-->
                </div>
              </div>

      <div class="row">
          <nav class="navbar navbar-default border-top">
            <div class="container-fluid">

                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
   	                  <span class="icon-bar"></span>
           	          <span class="icon-bar"></span>
                   	  <span class="icon-bar"></span>
                  </button> 

           <div id="navbar" class="navbar-collapse collapse #navbar" aria-expanded="false">

          <?php
                  wp_nav_menu( array(
                          'menu'              => 'header',
                          'depth'             => 2,
                          'container'         => 'div',
//                'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav navbar-right',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                        );
                  ?>
            </div>
          </nav>
      </div>

          </div>	<!-- /.navbar-collapse -->
        
        </div><!-- /.container-fluid -->
    <!-- NAVBAR MENU END -->

    </header>

    <div class="container">
        <div class="col-lg-offset-1 col-lg-10 col-md-12">
            <nav id="main-nav" class="row hidden-xs hidden-sm">
                <div class="col-lg-12 col-md-12">
                  <!-- OLD MENU -- >
                   <!-- <?php wp_nav_menu( array( 'theme_location' => 'header', 'items_wrap' => '<ul class="clearfix textcenter">%3$s</ul>', 'container' => '', 'fallback_cb' => '', 'depth' => 2 ) ); ?>-->
                </div>
            </nav>

            <section id="main-section">

            <div class="main-navbar visible-xs visible-sm">
            <!--  <?php wp_nav_menu( array( 'theme_location' => 'header', 'items_wrap' => '<ul class="clearfix">%3$s</ul>', 'container' => '', 'fallback_cb' => '', 'depth' => 2 ) ); ?>-->
            </div>

