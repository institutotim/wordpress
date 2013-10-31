<?php
add_action('admin_menu', 'add_text_copyright_footer');
function add_text_copyright_footer() {
    add_menu_page('Copyright', 'Copyright', 'manage_options', 'add_text_copyright_footer','add_text_copyright_footer_custom');
}

function add_text_copyright_footer_custom () {
?>
<div class="wrap">
    <div id="icon-generic" class="icon32"><br /></div><h2>Copyright</h2>

    <form method="post" action="options.php">
    <?php wp_nonce_field('update-options') ?>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="text_copyright_footer">Copyright Texto</label></th>
                <td><input name="text_copyright_footer" type="text" id="text_copyright_footer" value="<?php echo get_option('text_copyright_footer'); ?>" class="regular-text" /></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Salvar alterações"  />
        </p>
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="text_copyright_footer" />
    </form>
</div>

<?php }?>
