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

       <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->

        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie8.css">
        <![endif]-->
        <?php wp_head(); ?>



<style>

#tim-container {
    width: 100%;
    margin: 0;
    padding: 0;
    background-color: #075aa5
}
.logo-it {
    background-color: #00427f;
    border-bottom: 2px solid #82b9e6
}
.menu-it {
    background-color: #075aa5;
}
.menu-fixed-bottom-left {
    left: 0;
    position: relative;
    top: 30px;
}
.navbar-overtop-tim-en-pt a {
    color: #82b9e6;
}
#mega-menu-wrap-header-1,
.box-it li,
.box-it,
.creditos,
.box-sz1 h2,
#searchbox input[type="text"] {
    font-family: 'TIMSansWeb', Fallback, times-new-roman
}


@media only screen and (min-width: 320px) {
    .container-2 {
        width: 320px
    }
    .nav-f {
        display: block;
        width: 320px;
        z-index: 9999;
        position: relative
    }
    .bar-primary {
        width: 305px;
        height: 27px;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 5px
    }
    .bar-secundary {
        width: 290px;
        margin-left: 9px;
        height: 56px
    }
    #mega-menu-wrap-header-1 .mega-menu-toggle {
        padding-top: 5px;
    }
    #mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item > a.mega-menu-link {
        color: #004279
    }
    #mega-menu-wrap-header-1 ul#mega-menu-header-1 {
        margin-top: 16px
    }
    .ltrad {
        margin-right: 15px
    }
    .mega-sub-menu {
        margin-top: 20px
    }
    .nav-it {
        padding-right: 15px
    }
    .home-first-section {
        margin-top: 10px
    }
    .menu-fixed-border-left {
        border-color: #075aa5
    }
    .rede-social,
    .logo-project,
    .nav-e,
    .logo2,
    #footer-tim {
        display: none
    }
    .menu-fixed-border-left {
        border-color: #155ea3;
        border-style: solid;
        border-width: 0 2px 0 0;
        top: 34px;
    }
    .rodape-mobile {
        width: 100%;
        background-color: #075aa5;
        height: 56px;
        color: #00a4e4;
        display: block;
        margin-top: 20px
    }
    /*.rodape-mobile {width:320px;background-color: #075aa5;height:56px;color:#00a4e4;display:block;margin-top:20px} */

    .rm-content {
        width: 290px;
        margin: 0 auto;
        padding-top: 18px
    }
    .rm-logo {
        width: 120px;
        float: left
    }
    .rm-logo img {
        width: 115px
    }
    .rm-creditos {
        width: 170px;
        float: right;
        font-family: 'TIMSansWeb', Fallback, times-new-roman;
        font-size: 7px;
        padding-top: 7px
    }
    #et-featured-posts {
        margin-top: 14px
    }
}
@media only screen and (min-width: 360px) {
    .container-2,
    .bar-primary,
    .bar-secundary {
        width: 360px
    }
    .nav-f {
        width: 340px
    }
    .bar-primary {
        padding-left: 25px
    }
    .bar-secundary {
        padding-left: 10px
    }
    .ltrad {
        margin-right: 8px
    }
    .rm-content {
        width: 300px
    }
    .rm-logo {
        width: 130px
    }
    .rm-creditos {
        width: 170px;
        padding-top: 8px
    }
}

@media only screen and (min-width: 600px) {
    .nav-f {
        display: block;
        width: 320px;
        z-index: 9999;
        position: relative
    }
    .rede-social,
    .logo-project,
    .nav-e,
    .logo2,
    #footer-tim {
        display: none
    }
    .rodape-mobile {
        width: 100%;
        background-color: #075aa5;
        height: 56px;
        color: #00a4e4;
        display: block;
        margin-top: 20px
    }
    .container-2 {
        width: 640px;
        margin: 0 auto
    }
    .logo-project img {
        width: 71px;
        z-index: 99999
    }
    .logo-project {
        display: block;
        width: 100px;
        float: left;
        margin-top: 7px;
        padding-left: 10px;
        z-index: 99999
    }
    .nav-e,
    .logo2 {
        display: block
    }
    .bar-primary,
    .bar-secundary {
        padding-left: 20px;
        width: 640px
    }
    .bar-secundary {
        height: 94px
    }
    .nav-it {
        padding-right: 0;
        border-top: 1px solid #00a4e4;
        height: 39px
    }
    #searchbox {
        width: 280px;
        margin-top: 11px;
        height: 38px;
        position: relative;
    }
    #searchbox input {
        outline: none
    }
    #searchbox input:focus::-webkit-input-placeholder {
        color: transparent
    }
    #searchbox input:focus:-moz-placeholder {
        color: transparent;
    }
    #searchbox input:focus::-moz-placeholder {
        color: transparent
    }
    #searchbox input[type="text"] {
        background-color: #fff;
        border: 0px;
        font-size: 12px;
        color: #666;
        padding: 8px;
        width: 260px;
        border: 1px solid #fff;
        border-radius: 4px;
        font-size: 12px;
        text-indent: -140px;
    }
    #searchbox input[type="text"]:focus {
        color: #000;
        text-indent: 0px
    }
    #button-submit {
        background: url(<?php echo get_template_directory_uri();
        ?>/imagens/searchicon.png) no-repeat;
        margin-left: -32px;
        border-width: 0px;
        width: 21px;
        height: 21px;
    }
    #mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item > a.mega-menu-link {
        color: #fff;
        font-size: 11px
    }
    #mega-menu-wrap-header-1 ul#mega-menu-header-1 {
        margin-top: 0
    }
    .logo2 {
        width: 188px;
        float: left;
        padding-right: 15px;
        z-index: 99999;
        height: 21px
    }
    .logo2 img {
        width: 188px;
        z-index: 99999
    }
    .nav-f {
        width: 430px;
        float: left;
        padding-left: 30px;
        display: block;
        z-index: 1;
        height: 90px
    }
    .nav-i {
        width: 402px;
        height: 55px;
        margin-top: -9px
    }
    .nav-e {
        width: 350px;
        float: left;
        padding-bottom: 0;
        padding-top: 0;
        height: 48px
    }
}
@media only screen and (min-width: 768px) {
    .container-2 {
        width: 768px
    }
    .bar-primary,
    .bar-secundary {
        padding-left: 30px;
        width: 768px
    }
    .bar-secundary {
        height: 94px
    }
    #searchbox {
        margin-top: 5px;
        height: 25px
    }
    .nav-f {
        width: 500px;
        padding-left: 46px
    }
    .logo-project {
        display: none
    }
    .nav-i {
        width: 402px;
        height: 57px;
        margin-top: 0
    }
    .nav-e {
        height: 35px;
        margin-top: 7px
    }
    #menu-menu-1 li {
        display: inline-block
    }
    .rodape-mobile {
        display: none
    }
    #et-featured-posts {
        margin-top: 0
    }
    .ltrad {
        margin-right: 15px
    }
    #mega-menu-wrap-header-1 #mega-menu-header-1 li.mega-menu-flyout.mega-menu-item-has-children > a.mega-menu-link::after,
    #mega-menu-wrap-header-1 #mega-menu-header-1 li.mega-menu-flyout li.mega-menu-item-has-children > a.mega-menu-link::after,
    #mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item-has-children > a.mega-menu-link::after {
        color: #00a4e4 !important
    }
    #mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item > a.mega-menu-link {
        font-size: 12px;
        height: 36px
    }
    #mega-menu-wrap-header-1 ul#mega-menu-header-1 {
        margin-top: 0
    }
    #footer-tim {
        display: block;
        width: 100%;
        background-color: #075aa5;
        margin-top: 30px;
        height: 240px;
        color: #00a4e4
    }
    #footer-tim ul {
        padding: 0
    }
    .footer-tim {
        width: 768px;
        height: 180px;
        font-size: 10pt;
        padding: 30px
    }
    .footer-links {
        margin-left: 0px
    }
    .footer-links li a {
        font-size: 13px;
        color: #fff;
        text-decoration: none;
        line-height: 0px;
        margin: 0;
        padding: 0
    }
    .footer-links a:hover {
        color: #00a4e4
    }
    .footer-links li,
    ul.rede-social {
        list-style: none;
    }
    .box-it {
        float: left
    }
    .box-it li {
        padding-top: 11px
    }
    .box-it li a {
        font-size: 9pt;
        color: #fff
    }
    .box-it li a:hover {
        color: #82b9e6
    }
    .creditos {
        width: 768px;
        height: 50px;
        text-align: center;
        padding-top: 25px;
        color: #00a4e4;
        font-size: 9pt;
        clear: both
    }
    .box-sz2,
    .box-sz2 img {
        width: 120px;
        text-align: center
    }
    .box-sz2 img {
        margin-top: 0px;
        margin-left: 15px
    }
    .box-sz1 {
        width: 140px;
        padding-left: 24px;
        padding-right: 15px
    }
    .box-sz1 h2 {
        font-family: 'TIMSansWebBold';
        font-size: 14px;
        margin-top: 0px;
        color: #00a4e4;
        text-transform: uppercase;
    }
    /*.footerborder-left {height: 150px;border-image: linear-gradient(to right, rgba(24, 86, 154, 1), rgba(1, 60, 125, 1)) 1 100% 1 100%;border-style: solid;border-width: 3px 0 3px 3px}*/
    /*.footerborder-left {height: 150px;background: url('<?php echo get_template_directory_uri(); ?>/imagens/separacao.png')no-repeat 0 0;}*/

    .footer-links2 {
        margin-left: 0px;
        margin-top: -7px
    }
    .footer-links2 li a {
        font-size: 15px;
        font-family: 'TIMSansWebBold';
        color: #00a4e4;
        text-decoration: none;
        line-height: 0px;
        margin: 0;
        padding: 0;
        text-transform: uppercase
    }
    .footer-links2 li a:hover {
        color: #fff
    }
    .footer-links2 li {
        list-style: none;
    }
    .footerborder-left {
        box-shadow: -1px 0 0 0 rgb(39, 100, 191);
        border-left: 1px solid #003b7b;
        height: 150px;
        -moz-box-shadow: -1px 0 0 0 rgb(39, 100, 191);
        -webkit-box-shadow: -1px 0 0 0 rgb(39, 100, 191)
    }
    #mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link {
        margin-top: 8px;
        line-height: 20px
    }
}
@media only screen and (min-width: 960px) {
    /*.footerborder-left {box-shadow: -1px 0 0 0 rgba(24, 86, 155, 1);border-left: 1px solid #003b7b;height: 150px;-webkit-box-shadow: -1px 0 0 0 #1a589c;-moz-box-shadow: -1px 0 0 0 #1a589c} */
    /*.footerborder-left {box-shadow: -1px 0 0 0 #1a589c;border-left: 1px solid #003b7b;}*/
    /*.footerborder-left {box-shadow: -1px 0 0 0 #00a4e4;border-left: 1px solid #003b7b;height: 150px;}*/

    .container-2 {
        width: 1170px;
        margin: 0 auto
    }
    .logo-project {
        display: block;
        width: 112px;
        padding-left: 15px;
        padding-top: 27px;
        margin-top: 0;
        height: 94px;
        z-index: 99999
    }
    .logo-project img {
        width: 112px;
        z-index: 99999
    }
    .menu-fixed-border-left {
        border-color: #155ea3;
        border-style: solid;
        border-width: 0 2px 0 0;
    }
    .menu-fixed-bottom-left {
        top: 34px;
    }
    .rede-social {
        width: 200px;
        float: right;
        display: block;
        font-size: 16pt
    }
    #mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item > a.mega-menu-link {
        font-size: 12px
    }
    #mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item > a.mega-menu-link {
        margin-right: 33px
    }
    .rede-social li {
        display: inline-block;
        padding: 10px 5px
    }
    .rede-social li a {
        color: #fff
    }
    .main {
        margin-top: 0px
    }
    .footer-tim,
    .creditos {
        width: 1024px
    }
    .footer-tim {
        height: 204px;
        font-size: 10pt;
        padding: 30px;
        margin: 0 auto
    }
    .creditos {
        font-size: 17px;
        height: 66px;
        margin: 0 auto;
        padding-top: 40px
    }

    .bar-primary,
    .bar-secundary {
        padding-right: 30px
    }
    #searchbox {
        width: 280px;
        margin-top: 5px;
        height: 25px
    }
    #searchbox input[type="text"] {
        background-color: #fff;
        border: 0px;
        font-size: 12px;
        padding: 8px;
        width: 260px
    }
    .logo2 {
        width: 188px;
        float: left;
        padding-right: 15px;
        z-index: 99999;
        height: 21px
    }
    .logo2 img {
        width: 188px;
        z-index: 99999
    }
    .nav-f {
        width: 730px;
        float: left;
        padding-left: 70px;
        display: block;
        z-index: 1;
        height: 90px
    }
    .nav-i {
        width: 402px;
        height: 48px;
        margin-top: 9px
    }
    .nav-e {
        width: 350px;
        float: left;
        padding-bottom: 0;
        padding-top: 0;
        height: 44px;
        margin-top: 0
    }
    .box-it li a {
        font-size: 17px;
        padding: 3px
    }
    #footer-tim {
        display: block;
        width: 100%;
        background-color: #075aa5;
        margin-top: 30px;
        height: 300px;
        color: #00a4e4
    }
    .box-sz1,
    .box-sz2 {
        width: 197px
    }
    .box-sz2 {
        width: 154px;
        padding-top: 0px
    }
    .box-sz1 h2 {
        font-size: 16px;
        text-transform: uppercase;
    }
    /*.box-sz2, .box-sz2 img {width:134px}*/

    .box-sz2 img {
        width: 134px
    }
    .box-sz2 img {
        margin-top: 0px;
        margin-left: 24px
    }
    .footer-links li a {
        color: #fff;
        text-decoration: none;
        line-height: 19px;
        margin: 0;
        padding: 0;
        font-size: 13px
    }
    /*.footerborder-left {height: 180px}*/

    .footer-links2 {
        margin-left: 0px;
        margin-top: -7px
    }
    .footer-links2 li a {
        font-size: 15px;
        font-family: 'TIMSansWebBold';
        color: #00a4e4;
        text-decoration: none;
        line-height: 0px;
        margin: 0;
        padding: 0;
        text-transform: uppercase
    }
    .footer-links2 li a:hover {
        color: #fff
    }
    .footer-links2 li {
        list-style: none;
    }
}

</style>




    </head>
<body <?php body_class(); ?>>


<div id="tim-container">

	<div class="logo-it">
		<div class="container-2 bar-primary">
			<a href="http://tim.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_portal_tim.png" title="Instituto TIM" alt="Instituto TIM" /></a>
<!--                <div class="ltrad"> --><span style="width:30px">&nbsp;</span>
                            <?php
                            $blog_id = get_current_blog_id();
                            if ( 1 == $blog_id ) {
                            ?>
                            <a href="<?php echo get_blog_details(2)->siteurl; ?>">English</a>
                            <?php } else { ?>
                            <a href="<?php echo get_blog_details(1)->siteurl; ?>">Português</a>
                            <?php } ?>
<!--                </div> -->

		</div>
	</div>

	<div class="menu-it">
		<div class="container-2 bar-secundary">
			<div class="logo2 menu-fixed-bottom-left menu-fixed-border-left">
				<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
			</div>

			<div class="logo-project">
				<!--<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_timfazciencia.png" alt="" title="" /></a>-->
			</div>

			<div class="nav-f">
                <div class="nav-i">
                    <div class="nav-e">
                        <form id="searchbox" method="get" action="/" autocomplete="off">
                            <input name="s" type="text" size="15" placeholder="<?php
                            $blog_id = get_current_blog_id();
                            if ( 1 == $blog_id ) {
                            ?>
                            O que você procura?
                            <?php } else { ?>
                            Search
                            <?php } ?>" title="O que você procura?" />
                            <input id="button-submit" type="submit" value=" "/>
                        </form>
                    </div>

                </div>
				<div class="nav-it">
					<?php wp_nav_menu( array( 'theme_location' => 'header-1' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>



    <div class="container">
        <div class="col-lg-offset-1 col-lg-10 col-md-12">

            <section id="main-section" style="clear:both;margin-top:30px;z-index:9">

