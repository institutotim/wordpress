<?php

include dirname(__FILE__).'/includes/congelado-functions.php';
include dirname(__FILE__).'/includes/html.class.php';
include dirname(__FILE__).'/includes/utils.class.php';
include dirname(__FILE__).'/includes/banners-apoiadores.php';
include dirname(__FILE__).'/includes/hacklab_post2home/hacklab_post2home.php';
// include dirname(__FILE__).'/includes/form.class.php';


/////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// CONTENT WIDTH   ///////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 980;

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////



add_action( 'after_setup_theme', 'institutotim_setup' );
function institutotim_setup() {

load_theme_textdomain('institutotim', get_template_directory() . '/languages' );
add_theme_support('automatic-feed-links');

/////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// POST THUMBNAILS   /////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

// POST THUMBNAILS
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 181, 121, true );

//REGISTRAR AQUI TODOS OS TAMANHOS UTILIZADOS NO LAYOUT
//add_image_size('nome',X,Y);
//add_image_size('nome2',X,Y);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// CUSTOM BACKGROUND  ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

// add_theme_support('custom-background');

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

}


/////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// CUSTOM HEADER  ////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

//include dirname(__FILE__).'/includes/custom-header.php';

//==================================================== Remove admin bar front end ===================================================//

remove_action('wp_footer','wp_admin_bar_render',1000);
function remove_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'remove_admin_bar');

//========================================================== Excerpt more ==========================================================//
/*
add_filter('utils_excerpt_more_link', 'institutotim_utils_excerpt_more',10,2);
function institutotim_utils_excerpt_more($more_link, $post){
return '<br /><br />[<a class="more-link" href="'. get_permalink($post->ID) . '">' . __('Continue reading &raquo;', 'institutotim') . '</a>]';
}

add_filter( 'excerpt_more', 'institutotim_auto_excerpt_more' );
function institutotim_auto_excerpt_more( $more ) {
global $post;
return '<br /><br />[<a class="more-link" href="'. get_permalink($post->ID) . '">' . __('Continue reading &raquo;', 'institutotim') . '</a>]';
}*/
function custom_excerpt_length( $length ) {
    return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//========================================================== Sidebars ==========================================================//

if(function_exists('register_sidebar')) {
// sidebar
register_sidebar( array(
    'name' =>  'Sidebar',
        'description' => __('Sidebar', 'institutotim'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content clearfix">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
}

//========================================================== Login screen ==========================================================//

function institutotim_custom_login_logo() {
	echo '
        <style type="text/css">
	        .login h1 a { background-image: url('. html::getImageUrl('logotipo.png') .'); width: 180px; height: 107px; background-size: auto; }
        </style>';
}
add_action('login_head', 'institutotim_custom_login_logo');

function new_headertitle($url){
    return get_bloginfo('sitetitle');
}
add_filter('login_headertitle','new_headertitle');

function custom_login_headerurl($url) {
    return home_url();

}
add_filter ('login_headerurl', 'custom_login_headerurl');

function favicon_wp_login () {
    echo '<link rel="shortcut icon" href="'.get_stylesheet_directory_uri().'/img/favicon.ico" type="image/x-icon" />';
}
add_action( 'login_enqueue_scripts', 'favicon_wp_login' );

//========================================================== Custom menus ==========================================================//

add_action( 'init', 'institutotim_custom_menus' );
function institutotim_custom_menus() {
    register_nav_menus( array(
        'header' => __('Menu Principal', 'institutotim'),
        'footer' => __('Menu do Rodapé', 'institutotim')
    ) );
}

//========================================================== Javascript & CSS ==========================================================//

add_action('wp_print_scripts', 'institutotim_addJS');
function institutotim_addJS() {
    if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-widget');

    wp_enqueue_script('congelado', get_stylesheet_directory_uri().'/js/congelado.js', array('jquery-ui-widget'));
    wp_enqueue_script('less_js', get_stylesheet_directory_uri().'/js/less-1.4.1.min.js', array('jquery'));
    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('cycle_js', get_stylesheet_directory_uri().'/js/jquery.cycle.all.js', array('jquery'));
    wp_enqueue_script('instituto_js', get_stylesheet_directory_uri().'/js/instituto.js', array('jquery'));
    wp_enqueue_script('respond_js', get_stylesheet_directory_uri().'/js/respond.min.js', array('jquery'));

    wp_localize_script('congelado', 'vars', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));

}


function doVideoInstituto()
{
	    //doSomeStuff
		$videoUrl = $_POST['videoUrl'];
		echo html::getVideo( $videoUrl, "100%", "375px" );

		die(); //Lembre sempre de finalizar a execução pois, caso contrario o wordpress retornará 0.
}
//Adiciona a funcao extra votos aos hooks ajax do WordPress.
add_action('wp_ajax_doVideoInstituto', 'doVideoInstituto');
add_action('wp_ajax_nopriv_doVideoInstituto', 'doVideoInstituto');

//=========================================================== Size Thumbnail ===========================================================//

add_image_size('destaque_high_light', 603, 300, true);

//========================================================== Comments single ==========================================================//

function comments_tim_clear( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
?>
    <div <?php comment_class( array('comments', 'clearfix') ); ?> id="comment-<?php comment_ID();?>">
        <?php echo get_avatar( $comment, '56' ); ?>
        <div class="content-of-comment">
            <h3><?php comment_author_link(); ?> <span>(<?php comment_date( get_option('date_format') ); ?> <?php _e('às', 'institutotim');?> <?php comment_date('H:i'); ?>)</span>
            </h3>
            <div class="text-comment"><?php comment_text(); ?></div>
        </div>

        <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Responder', 'institutotim' ), 'depth' => $depth, 'max_depth' => '4' ) ) ); ?>
    </div>

<?php
}

////// Tira Limite de projetos por página

add_action('pre_get_posts', function($query) {

    if ( ($query->is_post_type_archive('project') || $query->is_tax('projects_categories')) && $query->is_main_query() && !is_admin() ) {
        $query->set('meta_key', 'projeto_concluido');
        $query->set('meta_value', 'off');
        $query->set('posts_per_page', -1);
    }

});



