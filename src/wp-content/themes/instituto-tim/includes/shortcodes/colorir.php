<?php
    function colorido_texto (  $atts, $content = null ) {

            if (isset($atts['cor']) && $atts['cor'] != '') {

                return '<span style="color: '. $atts['cor'] .'"> '. $content .' </span>';

            } else {
                return $content;
            }


    }
    add_shortcode('colorido', 'colorido_texto');
?>
