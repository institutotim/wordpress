<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!'); ?>
<?php if(post_password_required()) return; ?>
<?php
// add a microid to all the comments
function comment_add_microid($classes) {

    $c_email = get_comment_author_email();
    $c_url = get_comment_author_url();

    if (!empty($c_email) && !empty($c_url)) :

        $microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$c_email).sha1($c_url));
        $classes[] = $microid;

    endif;

        return $classes;

}

add_filter('comment_class','comment_add_microid');
?>

<?php if ('open' == $post->comment_status) : ?>

    <div <?php post_class( array( 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-md-offset-1') );?>>
        <h3 class="entry-title title-post-line"><?php _e( 'Comments', 'institutotim' )?> (<?php comments_number('0','1', __('%','institutotim') );?>)</h3>

        <?php wp_list_comments( array( 'callback' => 'comments_tim_clear' ) ); ?>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>

            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <nav class="comments-nav">
                        <div class="alignleft"><?php previous_comments_link( __( '&laquo; Older Comments', 'institutotim' ) ); ?></div>
                        <div class="alignright"><?php next_comments_link( __( 'Newer Comments &raquo;', 'institutotim' ) ); ?></div>
                    </nav>
                </div>
            </div>

        <?php endif; ?>

        <?php if(get_option('comment_registration') && !$user_ID) : ?>

            <p><?php printf( __( 'You must be %sloggedin%s to post a comment.', 'institutotim'), "<a href='" . get_option('siteurl') . "/wp-login.php?redirect_to=" . urlencode(get_permalink()) ."'>", "</a>" ); ?></p>

        <?php else : ?>
            <div id="respond">
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="form-comentario" class="clearfix">
                    <?php comment_id_fields(); ?>
                    <?php if($user_ID) : ?>

                        <p><?php _e('Logged in as', 'institutotim'); ?> <a href="<?php print get_option('siteurl'); ?>/wp-admin/profile.php"><?php print $user_identity; ?></a>. <a href="<?php print get_option('siteurl'); ?>/wp-login.php?action=logout" title="Logout">Logout &raquo;</a></p>

                    <?php else : ?>
                    
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="author"><?php _e('Nome', 'institutotim');?> <span>(*)</span>:</label>
                                <input class="form-control" name="author" control="author" id="author" value="<?php echo $comment_author; ?>" size="22" type="text" />
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="email"><?php _e('Email', 'institutotim');?> <span>(*)</span>:</label>
                                <input class="form-control" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" type="text" />
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="url"><?php _e('WebSite', 'institutotim');?>:</label>
                                <input class="form-control" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" type="text" />
                            </div>
                        </div>

                    <?php endif; ?>

                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="comment"><?php _e('Comentário', 'institutotim');?>:</label>
                                <textarea class="form-control" name="comment" id="comment" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
                                <input name="submit" id="submit" tabindex="5" class="btn btn-info" value="Enviar comentário" type="submit" />
                                <?php cancel_comment_reply_link( __('cancel', 'institutotim') ); ?>
                            </div>
                        </div>

                </form>
            </div>
        <?php endif; ?>

    </div>

<?php endif; //OPEN COMMENTS ?>
