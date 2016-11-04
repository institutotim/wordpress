<?php

/*
 * Flame and includes the JavaScript file,
 * responsible for sending the data via AJAX
 */
add_action('wp_print_scripts', 'form_modular');
function form_modular() {
    wp_enqueue_script('form', get_stylesheet_directory_uri().'/includes/form/form.js', array('jquery'));

    wp_enqueue_style('form', get_stylesheet_directory_uri().'/includes/form/css/form.css');

    wp_localize_script('form', 'formvars', array (
        'ajaxurl' => admin_url('admin-ajax.php'),
        'successMessage' => __('Formulário enviado com sucesso!', 'institutotim')
        )
    );
}

/*
 * Proccess Data
 */
function form_process () {
    if ( isset($_GET['send']) ) :
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !wp_verify_nonce($_REQUEST['_csrf_contact'], 'contact'))
            exit();

        $validation = new Validator();

        $struct = array(
            'sucesso' => true,
            'error_messages' => array(),
            'fields' => array()
        );

        $formID = $_GET['formID'];
        $emailMsg = '';

        foreach ($_GET as $fieldname => $fieldvalue) :
            if (array_key_exists($fieldname, $validation->fields_rules[$formID])) :
                $valid = $validation->validate_field($formID, $fieldname, $fieldvalue);
                if ($valid === true) :
                    $struct['fields'][$fieldname] = $fieldvalue;
                    $emailMsg .= $fieldname . ': ' . $fieldvalue . "\n\n";
                else :
                    $struct['sucesso'] = false;
                    $struct['error_messages'][$fieldname] = $valid;
                endif;
            endif;
        endforeach;

        //Callback with the value chain ready for use
        if ( $struct['sucesso'] ) :

            //Values of ADMIN
            $opcoes = get_option( 'congeladoform' );

            if ( is_array($opcoes) && isset($opcoes[$formID]) && is_array($opcoes[$formID])  && isset($opcoes[$formID]['email']) && !empty($opcoes[$formID]['email'])) :
                $emailTo = $opcoes[$formID]['email'];
            else :
                $emailTo = get_option('admin_email');
            endif;

            if ( is_array($opcoes) && isset($opcoes[$formID]) && is_array($opcoes[$formID])  && isset($opcoes[$formID]['assunto']) && !empty($opcoes[$formID]['assunto'])) :
                $subjectTo = $opcoes[$_GET['formID']]['assunto'];
            else :
                $subjectTo = "Email recebido de Assinaturas";
            endif;

            $struct['sucesso'] = wp_mail($emailTo, $subjectTo, $emailMsg);

            if (!$struct['sucesso']) :
                $struct['error_messages']['general'] = 'Falha ao enviar o email';
            endif;

        endif;
        //returns true and clears the form in JS
        print json_encode($struct);
    else :
        header("HTTP/1.1 400 Bad Request");
    endif;
    die;
}
add_action('wp_ajax_form_process', 'form_process');
add_action('wp_ajax_nopriv_form_process', 'form_process');
