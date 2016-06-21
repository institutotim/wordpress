<?php
class Validator {
    public $fields_rules = array();
    
    function Validator() {
        global $congeladoForm;
        $this->fields_rules = $congeladoForm->forms;
    }
    
    /**
    * Return 'true' if field is valid, an error message if field is invalid
    * or 'null' if field is not recognized
    *
    * @param String $s the step
    * @param String $f the field
    * @param String $v the values ...
    */
    function validate_field($s, $f, $v) {
        $args_v = array_slice(func_get_args(), 2);

        if(isset($this->fields_rules[$s]) && isset($this->fields_rules[$s][$f])) {
            foreach($this->fields_rules[$s][$f] as $function) {
                $result = call_user_func_array(array($this, $function), $args_v);

                if($result !== true) {
                    return $result;
                }
            }
            return true;
        }
        return null;
    }

    /** @return true if field is require and false otherwise */
    function is_required_field($s, $f) {
        return isset($this->fields_rules[$s])
               && isset($this->fields_rules[$s][$f])
               && in_array('not_empty',($this->fields_rules[$s][$f]));
    }

    /** Return true if parameter is not empty or a message otherwise */
    static function not_empty($v) {
        if(!isset($v) || empty($v)) {
            return __('Este campo não pode ser vazio', 'institutotim');
        }
        return true;
    }

    /** Return true if supplied email is valid or give an error message otherwise */
    static function is_valid_email($e) {
        if(filter_var($e, FILTER_VALIDATE_EMAIL) === $e) {
            return true;
        }
        return __('O email não tem um formato válido', 'institutotim');
    }

    static function is_a_valid_phone($p) {
        if(empty($p) || preg_match('/^\(\d\d\) \d{6,9}$/', $p)) {
            return true;
        }
        return __('O número do telefone é invalido', 'institutotim');
    }
};
?>
