<?php

// SUBSTITUA  _SLUG_ pelo slug do metabox

class projeto_concluido {

    protected static $metabox_config = array(
        'projetos_concluidos', // slug do metabox
        'Status do Projeto', // título do metabox
        'project', // array('post','page','etc'), // post types
        'side' // onde colocar o metabox
    );

    static function init() {
        add_action('add_meta_boxes', array(__CLASS__, 'addMetaBox'));
        add_action('save_post', array(__CLASS__, 'savePost'));
    }

    static function addMetaBox() {
        add_meta_box(
            self::$metabox_config[0],
            self::$metabox_config[1],
            array(__CLASS__, 'metabox'),
            self::$metabox_config[2],
            self::$metabox_config[3]

        );
    }


    static function filterValue($meta_key, $value){
        global $post;

        switch ($meta_key){
            default:
                return $value;
            break;
        }

    }

    static function metabox(){
        global $post;

        wp_nonce_field( 'save_'.__CLASS__, __CLASS__.'_noncename' );

        $metadata = get_metadata('post', $post->ID);
        ?>
        <label>Projeto Concluído? <input type="checkbox" name="projeto_concluido" <?php if ( $metadata["projeto_concluido"][0] === "on" ) echo 'checked="checked"'?> /></label>
        <?php
    }

    static function savePost($post_id) {
        // verify if this is an auto save routine.
        // If it is our form has not been submitted, so we dont want to do anything
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;

        // verify this came from the our screen and with proper authorization,
        // because save_post can be triggered at other times

        if (!wp_verify_nonce($_POST[__CLASS__.'_noncename'], 'save_'.__CLASS__))
            return;


        // Check permissions
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id))
                return;
        }
        else {
            if (!current_user_can('edit_post', $post_id))
                return;
        }

        // OK, we're authenticated: we need to find and save the data
        if(isset($_POST[ 'projeto_concluido' ])){
            update_post_meta($post_id, 'projeto_concluido', 'on');
        }
        if(!isset($_POST[ 'projeto_concluido' ])){
            update_post_meta($post_id, 'projeto_concluido', 'off');
        }
    }

}

projeto_concluido::init();
