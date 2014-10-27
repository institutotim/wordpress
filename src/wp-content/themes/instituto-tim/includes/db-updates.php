<?php

if (congelado_db_update('db-update-1')) {
    // execute algum código aqui
    $projetos = $wpdb->get_col("SELECT ID FROM $wpdb->posts WHERE post_type = 'project'");
    foreach ($projetos as $pr)
        update_post_meta($pr, 'projeto_concluido', 'off');
}

?>
