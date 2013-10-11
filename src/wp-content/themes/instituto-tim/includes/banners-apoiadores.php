<?php
/*
Plugin Name: Banners de Apoiadores
Plugin URI: 
Description: Gerencia os banners de apoiadores do site
Author: hacklab
Version: 0.1 
Text Domain: wp-easy-data
*/

global $BannersApoiadores, $BannersApoiadoresObject;

class BannersApoiadores {

    public $model;
    public $positions;
    
    
    function BannersApoiadores() {
        
        global $BannersApoiadoresObject;
        
        $this->positions = array('Apoiadores' => 'apoiadores');
        
        $this->model = array(
 
            'fields' => array (
                array(
                    'name' => 'name',
                    'display_name' => 'Nome',
                    'type' => 'textfield',
                    'list_display' => true,
                    'description' => 'Nome do apoiador',
                    'default' => ''
                ),
                array(
                    'name' => 'image',
                    'display_name' => 'Imagem',
                    'type' => 'file',
                    'list_display' => true,
                    'description' => 'Imagem do banner',
                ),
                array(
                    'name' => 'url',
                    'display_name' => 'Link',
                    'type' => 'textfield',
                    'list_display' => true,
                    'description' => 'URL completa para ir quando clicar no banner (com http://)',
                    'default' => ''
                ),
                array(
                    'name' => 'posicao',
                    'display_name' => 'Posição',
                    'type' => 'select',
                    'list_display' => true,
                    'description' => 'Posição em que o banner aparece',
                    'values' => $this->positions
                ),
            ),
            'sortable' => true,
            'tableName' => 'apoiadores',
            'adminName' => 'Apoiadores'

        );
        
        if (class_exists('Wp_easy_data')) {
            $BannersApoiadoresObject = new Wp_easy_data($this->model, __FILE__);
        }
    
    }
    
    function get_items_by_position($position) {
    
        if (in_array($position, $this->positions)) {
        
            global $BannersApoiadoresObject;
            
            $items = $BannersApoiadoresObject->get_items("posicao='{$position}'");
            
            return $items;
            
        
        }
        
        return false;
    
    }
    
    function print_items_by_position($position) {
    
        $items = $this->get_items_by_position($position);
        
        if ($items) {
        
            foreach ($items as $item) {
                $title = esc_attr($item->info->nome);
                $imageLink = wp_get_attachment_url($item->info->image);
                echo "<li><a href='{$item->info->url}' class='logo' title='$title'><img src='{$imageLink}' alt='$title'/></a></li>";
            
            }
        
        }
    
    
    }
    

}

add_action('init', 'banners_apoiadores_init');

function banners_apoiadores_init() {
    global $BannersApoiadores;
    $BannersApoiadores = new BannersApoiadores();
}

