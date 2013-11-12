<?php
// Dê um Find Replace (CASE SENSITIVE!) em _POST_TYPE_ pelo nome do seu post type 

class videos_instituto
{
    const NAME = 'Vídeos';
    const MENU_NAME = 'Vídeos';

    /**
     * alug do post type: deve conter somente minúscula 
     * @var string
     */
    protected static $post_type;

    static function init()
    {
        // o videos_instituto do post type
        self::$post_type = strtolower(__CLASS__);

        add_action('init', array(self::$post_type, 'register'), 0);

        //add_action( 'init', array(__CLASS__, 'register_taxonomies') ,10);
        //add_filter('menu_order', array(self::$post_type, 'change_menu_label'));
        //add_filter('custom_menu_order', array(self::$post_type, 'custom_menu_order'));
        //add_action('save_post',array(__CLASS__, 'on_save'));
    }

    static function register()
    {
        register_post_type(self::$post_type, array(
            'labels' => array(
                'name' => _x(self::NAME, 'post type general name', 'videos_instituto'),
                'singular_name' => _x('Vídeo', 'post type singular name', 'videos_instituto'),
                'add_new' => _x('Adicionar Novo', 'image', 'videos_instituto'),
                'add_new_item' => __('Adicionar novo Vídeo', 'videos_instituto'),
                'edit_item' => __('Editar Vídeo', 'videos_instituto'),
                'new_item' => __('Novo Vídeos', 'videos_instituto'),
                'view_item' => __('Ver Vídeos', 'videos_instituto'),
                'search_items' => __('Search Vídeos', 'videos_instituto'),
                'not_found' => __('Nenhum Vídeos Encontrado', 'videos_instituto'),
                'not_found_in_trash' => __('Nenhum Vídeo na Lixeira', 'videos_instituto'),
                'parent_item_colon' => ''
            ),
            'public' => true,
            'rewrite' => array('videos_instituto' => 'Vídeos'),
            'capability_type' => 'post',
            'hierarchical' => true,
            'map_meta_cap ' => true,
            'menu_position' => 6,
            'has_archive' => true, //se precisar de arquivo
			'supports' => array(
                'title',
				'excerpt',
				'url_videos_instituto',
                'page-attributes'
            ),
            //'taxonomies' => array('taxonomia')
            )
        );
    }

    static function register_taxonomies()
    {
        // se for usar, descomentar //'taxonomies' => array('taxonomia') do post type (logo acima)

        $labels = array(
            'name' => _x('Taxonomias', 'taxonomy general name', 'videos_instituto'),
            'singular_name' => _x('Taxonomia', 'taxonomy singular name', 'videos_instituto'),
            'search_items' => __('Search Taxonomias', 'videos_instituto'),
            'all_items' => __('All Taxonomias', 'videos_instituto'),
            'parent_item' => __('Parent Taxonomia', 'videos_instituto'),
            'parent_item_colon' => __('Parent Taxonomia:', 'videos_instituto'),
            'edit_item' => __('Edit Taxonomia', 'videos_instituto'),
            'update_item' => __('Update Taxonomia', 'videos_instituto'),
            'add_new_item' => __('Add New Taxonomia', 'videos_instituto'),
            'new_item_name' => __('New Taxonomia Name', 'videos_instituto'),
        );

        register_taxonomy('taxonomia', self::$post_type, array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            )
        );
    }

    static function change_menu_label($stuff)
    {
        global $menu, $submenu;
        foreach ($menu as $i => $mi) {
            if ($mi[0] == self::NAME) {
                $menu[$i][0] = self::MENU_NAME;
            }
        }
        return $stuff;
    }

    static function custom_menu_order()
    {
        return true;
    }

    /**
     * Chamado pelo hook save_post
     * @param int $post_id
     * @param object $post
     */
    static function on_save($post_id)
    {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;

        global $post;

        if ($post->post_type == self::$post_type) {
            // faça algo com o post 
        }
    }

}
videos_instituto::init();
