<?php
// Dê um Find Replace (CASE SENSITIVE!) em project pelo nome do seu post type 

class project
{
    const NAME = 'Projetos';
    const MENU_NAME = 'Projeto';

    /**
     * alug do post type: deve conter somente minúscula 
     * @var string
     */
    protected static $post_type;

    static function init()
    {
        // o slug do post type
        self::$post_type = strtolower(__CLASS__);

        add_action('init', array(self::$post_type, 'register'), 0);

        add_action( 'init', array(__CLASS__, 'register_taxonomies') ,10);
        //add_filter('menu_order', array(self::$post_type, 'change_menu_label'));
        //add_filter('custom_menu_order', array(self::$post_type, 'custom_menu_order'));
        //add_action('save_post',array(__CLASS__, 'on_save'));
    }

    static function register()
    {
        register_post_type(self::$post_type, array(
            'labels' => array(
                'name' => _x(self::NAME, 'post type general name', 'institutotim'),
                'singular_name' => _x('Projeto', 'post type singular name', 'institutotim'),
                'add_new' => _x('Adicionar Novo', 'image', 'institutotim'),
                'add_new_item' => __('Adicionar novo projeto', 'institutotim'),
                'edit_item' => __('Editar projeto', 'institutotim'),
                'new_item' => __('Novo projeto', 'institutotim'),
                'view_item' => __('Ver projeto', 'institutotim'),
                'search_items' => __('Search projetos', 'institutotim'),
                'not_found' => __('Nenhum projeto encontrado', 'institutotim'),
                'not_found_in_trash' => __('Nenhum projeto na lixeira', 'institutotim'),
                'parent_item_colon' => ''
            ),
            'public' => true,
            'rewrite' => array('slug' => 'project'),
            'capability_type' => 'post',
            'hierarchical' => false,
            'map_meta_cap ' => true,
            'menu_position' => 6,
            'has_archive' => true, //se precisar de arquivo
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'taxonomies' => array('projects_categories')
            )
        );
    }

    static function register_taxonomies()
    {
        // se for usar, descomentar //'taxonomies' => array('taxonomia') do post type (logo acima)

        $labels = array(
            'name' => _x('Categorias', 'taxonomy general name', 'institutotim'),
            'singular_name' => _x('Categoria', 'taxonomy singular name', 'institutotim'),
            'search_items' => __('Procurar categorias', 'institutotim'),
            'all_items' => __('Todas categorias', 'institutotim'),
            'parent_item' => __('Categoria pai', 'institutotim'),
            'parent_item_colon' => __('Categoria pai:', 'institutotim'),
            'edit_item' => __('Editar categoria', 'institutotim'),
            'update_item' => __('Atualizar categoria', 'institutotim'),
            'add_new_item' => __('Adicionar nova categoria', 'institutotim'),
            'new_item_name' => __('Nova categoria', 'institutotim'),
        );

        register_taxonomy('projects_categories', self::$post_type, array(
            'hierarchical' => true,
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
project::init();
