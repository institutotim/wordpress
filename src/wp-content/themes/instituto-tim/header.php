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
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/less/main.less">
        <!--[if lt IE 8]><link rel="stylesheet" href="<?php get_stylesheet_directory_uri(); ?>/css/ie.css" type="text/css" media="screen,projection"><![endif]-->
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
        
    </head>

<body <?php body_class(); ?>>

    <div class="container">
        <div class="col-lg-offset-1 col-lg-10">
            <header id="main-header">
                <div id="brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instituto-tim.png" class="col-lg-12"/>
                </div>
                
                <div id="goto-tim">
                    <a href="http://www.tim.com.br">Visite o site da tim</a>
                </div>

                <div id="search">
                    <form class="form-horizontal">
                        <input type="search" class="form-control" placeholder="O que você procura?"/>
                        <input type="submit" value="OK"/>
                    </form>
                </div>                
            </header>
            
            <nav id="main-nav" class="row">
                <div class="col-lg-12 col-md-12">
                    <?php wp_nav_menu( array( 'theme_location' => 'header', 'items_wrap' => '<ul class="clearfix textcenter">%3$s</ul>', 'container' => '', 'fallback_cb' => '', 'depth' => 2 ) ); ?>
                </div>
            </nav>

            <section id="main-section">
