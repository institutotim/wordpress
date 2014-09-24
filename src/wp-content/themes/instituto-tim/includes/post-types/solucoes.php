<?php
// Dê um Find Replace (CASE SENSITIVE!) em _POST_TYPE_ pelo nome do seu post type

class solucoes
{
    const NAME = 'Soluções';
    const MENU_NAME = 'Soluções';

    /**
     * alug do post type: deve conter somente minúscula
     * @var string
     */
    protected static $post_type;

    static function init()
    {
        // o solucoes do post type
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
                'name' => _x(self::NAME, 'post type general name', 'solucoes'),
                'singular_name' => _x('Soluções', 'post type singular name', 'solucoes'),
                'add_new' => _x('Adicionar Novo', 'image', 'solucoes'),
                'add_new_item' => __('Adicionar novo(a) Soluções', 'solucoes'),
                'edit_item' => __('Editar Soluções', 'solucoes'),
                'new_item' => __('Novo Soluções', 'solucoes'),
                'view_item' => __('Ver Soluções', 'solucoes'),
                'search_items' => __('Search Soluções', 'solucoes'),
                'not_found' => __('Nenhum Solução Encontrado', 'solucoes'),
                'not_found_in_trash' => __('Nenhum Solução na Lixeira', 'solucoes'),
                'parent_item_colon' => ''
            ),
            'public' => true,
            'rewrite' => array('slug' => __('solucoes', 'institutotim')),
            'capability_type' => 'post',
            'hierarchical' => true,
            'map_meta_cap ' => true,
            'menu_position' => 6,
            'has_archive' => true, //se precisar de arquivo
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'page-attributes',
		'excerpt'
            ),
            //'taxonomies' => array('taxonomia')
            )
        );
    }

    static function register_taxonomies()
    {
        // se for usar, descomentar //'taxonomies' => array('taxonomia') do post type (logo acima)

        $labels = array(
            'name' => _x('Taxonomias', 'taxonomy general name', 'solucoes'),
            'singular_name' => _x('Taxonomia', 'taxonomy singular name', 'solucoes'),
            'search_items' => __('Search Taxonomias', 'solucoes'),
            'all_items' => __('All Taxonomias', 'solucoes'),
            'parent_item' => __('Parent Taxonomia', 'solucoes'),
            'parent_item_colon' => __('Parent Taxonomia:', 'solucoes'),
            'edit_item' => __('Edit Taxonomia', 'solucoes'),
            'update_item' => __('Update Taxonomia', 'solucoes'),
            'add_new_item' => __('Add New Taxonomia', 'solucoes'),
            'new_item_name' => __('New Taxonomia Name', 'solucoes'),
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
solucoes::init();
