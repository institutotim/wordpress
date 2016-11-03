<?php
/*
 * "Inclusion of files"
 */
include('validation.php'); //Validation of values
include('process.php'); //Validation of values

class congeladoform {
    var $forms = array();

    protected $nameClass;
    protected $nameGroup;
    protected $options;

    public function CongeladoForm() {
        $this->nameClass = 'congeladoform';
        $this->nameGroup = 'congeladoform_group';

        add_action('admin_init', array( $this, 'optionsInit' ) );
        add_action('admin_menu', array( $this, 'register_admin_page' ) );
    }

    public function optionsInit(){
        register_setting( $this->nameGroup, $this->nameClass, array( $this, 'optionsValidation' ) );
    }

    public function register_form($formId, $formfields) {
        $this->forms[$formId] = $formfields;
    }

    public function optionsValidation($input) {
        return $input;
    }

    function register_admin_page() {
        //add_menu_page...
        add_submenu_page( 'options-general.php', 'Formulários', 'Formulários', 'manage_options', 'congeladoforms', array($this, 'admin_page') );
    }

    function admin_page() {
?>
    <div class="wrap">
        <h2><?php echo get_admin_page_title();?></h2>

        <form action="options.php" method="post">
            <?php
                settings_fields( $this->nameGroup );
                $this->options = get_option( $this->nameClass );
            ?>
                <table class="form-table">
                    <tbody>
                        <?php foreach ($this->forms as $key => $form) { ?>
                            <tr>
                                <th colspan="2" style="margin: 0; padding: 0;"><h3><?php echo ucwords(str_replace('-', ' ', $key )); ?></h3></th>
                            </tr>
                            <tr>
                                <th scope="row"><label for="email-<?php echo $key;?>">Email de destino</label></th>
                                <td><input type="text" id="email-<?php echo $key;?>" class="text" name="<?php echo $this->nameClass.'['.$key.'][email]'; ?>" value="<?php echo htmlspecialchars($this->options[$key]['email']); ?>" /></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="assunto-<?php echo $key;?>">Assunto do email</label></th>
                                <td><input type="text" id="assunto-<?php echo $key;?>" class="text" name="<?php echo $this->nameClass.'['.$key.'][assunto]'; ?>" value="<?php echo htmlspecialchars($this->options[$key]['assunto']); ?>" /></td>
                            </tr>
                        <?php }?>
                        <?php wp_nonce_field('contact', '_csrf_contact'); ?>
                    </tbody>
                </table>
            <?php submit_button(); ?>
        </form>


    </div>
<?php
    }

};

global $congeladoForm;
$congeladoForm = new CongeladoForm();

function register_congelado_form($formId, $formfields) {
    global $congeladoForm;
    $congeladoForm->register_form($formId, $formfields);
}


?>
