<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!'); ?>
<?php if(post_password_required()) return; ?>
<?php
// add a microid to all the comments
function comment_add_microid($classes)
{
  $c_email = get_comment_author_email();
  $c_url = get_comment_author_url();
  if (!empty($c_email) && !empty($c_url)) {
    $microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$c_email).sha1($c_url));
    $classes[] = $microid;
  }
  return $classes;  
}

add_filter('comment_class','comment_add_microid');
?>

<div <?php post_class( array( 'col-lg-10', 'col-lg-offset-1') );?>>


<?php if ('open' == $post->comment_status) : ?>
    <h1 class="entry-title"><?php _e( 'Comments', 'institutotim' )?> (<?php comments_number('0','1', __('%','institutotim') );?>)</h1>

   
<?php endif; ?>


        <div class="comments clearfix">
            <img class="image-of-user" src="http://1.gravatar.com/avatar/1b3419a457dc543aefadfa474bb18889?s=56&r=pg&d=mm">
            <div class="content-of-comment">
                <h3><a href="#" target="_blank" title="Gutierri Barboza">Gutierri Barboza</a> <span>(15/09/2019 ás 14:21)</span></h3>
                <p>Eu poderia comentar um monte de coisas feias, apenas para ocupar espaço, mas não vou fazer isso, pelo menos não hoje. Um dia vou poder comentar o que eu quiser neste espaço, ai quando alguém tentar editar o comentário o WordPress vai bugar por completo</p>
            </div>
        </div>


        <div class="clear"></div>


        <form action="<?php bloginfo( 'url' ); ?>/wp-comments-post.php" method="post" id="form-comentario" class="clearfix">
        <?php if(get_option('comment_registration') && !$user_ID) : ?>
            
            <p><?php _e('Logged in as', 'institutotim'); ?> <a href="<?php print get_option('siteurl'); ?>/wp-admin/profile.php"><?php print $user_identity; ?></a>. <a href="<?php print get_option('siteurl'); ?>/wp-login.php?action=logout" title="Logout">Logout &raquo;</a></p>
            
            <label for="comment">Comentário:</label>
            <textarea name="comment" id="comment" cols="80" rows="10"></textarea>

            <input name="submit" id="submit" tabindex="5" class="btn btn-info" value="Enviar comentário" type="submit" />
            <input name="comment_post_ID" value="1" type="hidden">
        
        <?php else : ?>

        <label for="author">Nome <span>(*)</span>:</label>
        <input name="author" id="author" value="<?php echo $comment_author; ?>" size="22" value="<?php _e('name', 'institutotim'); ?>" type="text" />

        <label for="email">Email<span>(*)</span>:</label>
        <input name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" type="text" />

        <label for="url">WebSite:</label>
        <input name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" type="text" />

        <label for="comment">Comentário:</label>
        <textarea name="comment" id="comment" cols="80" rows="10"></textarea>

        <input name="submit" id="submit" tabindex="5" class="btn btn-info" value="Enviar comentário" type="submit" />
        <input name="comment_post_ID" value="1" type="hidden">
        
        <?php endif;?>
        
        </form>

</div>