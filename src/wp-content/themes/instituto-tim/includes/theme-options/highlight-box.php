<?php
add_action('admin_menu', 'add_highlight_box');
function add_highlight_box() {
    add_menu_page('Caixa destaque', 'Caixa destaque', 'manage_options', 'functions','highlight_box_custom');
}

function highlight_box_custom () {?>
<div class="wrap">
    <div id="icon-generic" class="icon32"><br /></div><h2>Caixa destaque</h2>

    <form method="post" action="options.php">
    <?php wp_nonce_field('update-options') ?>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="title_highlight_box">Título</label></th>
                <td><input name="title_highlight_box" type="text" id="title_highlight_box" value="<?php echo get_option('title_highlight_box'); ?>" class="regular-text" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="text_highlight_box">Texto</label></th>
                <td>
                    <textarea id="text_highlight_box" name="text_highlight_box" cols="33" rows="3"><?php echo get_option('text_highlight_box'); ?></textarea><br>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="rela_highlight_box">Relacinonar com alguma página</label></th>
                <?php $selected_rela_page = get_option('rela_highlight_box'); ?>
                <td><?php wp_dropdown_pages(array('name' => 'rela_highlight_box', 'selected' => $selected_rela_page)); ?></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Salvar alterações"  />
        </p>
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="title_highlight_box,rela_highlight_box,text_highlight_box" />
    </form>
</div>

<?php }?>
