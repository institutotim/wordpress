<div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class( array('post-entry', 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-sm-12') );?>>
        <div class="page-header top">
            <h1 class="entry-title top"><?php the_title(); ?></h1>
            <p><strong><?php _e('Por', 'institutotim');?>:</strong> <?php the_author();?> &nbsp;&nbsp;<strong><?php _e('Em', 'institutotim');?>:</strong> <?php the_date( 'd/m/Y' )?> &nbsp;&nbsp;<strong><?php _e('Categorias', 'institutotim');?>: </strong> <?php the_category( ', ' );?> </p>
			<?php html::part('share');?>
        </div>
        <div class="entry-content">
			<?php if ( get_post_type( $post ) == "videos_instituto" ) : ?>
		
				<?php echo html::getVideo( get_post_meta($post->ID, 'url_video_instituto', true), "100%", "500px" );?>

			<?php else : ?>

				<?php the_content(); ?>
			
			<?php endif; ?>
        </div>
        <?php if( get_the_tags() ) : ?>
            <div class="entry-content fild-tags">
                <strong><?php _e('Tags', 'institutotim');?>:</strong>
                <?php the_tags( ' ', NULL ) ?>
            </div>
        <?php endif; ?>
    </article>
</div>

<div class="row">
    <?php comments_template(); ?>
</div>
