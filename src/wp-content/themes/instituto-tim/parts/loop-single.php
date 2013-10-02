<div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class( array('post-entry', 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-sm-12') );?>>
        <div class="page-header top">
            <h1 class="entry-title top"><?php the_title(); ?></h1>
            <p><strong>Por:</strong> <?php the_author();?> <strong> em </strong> <?php the_date( 'd/m/Y' )?>  | <strong>Categorias: </strong> <?php the_category( ', ' );?> </p>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <?php if( get_the_tags() ) : ?>
            <div class="entry-content fild-tags">
                <strong>Tags:</strong>
                <?php the_tags( ' ', NULL ) ?>
            </div>
        <?php endif; ?>
    </article>
</div>

<div class="row">
    <?php comments_template(); ?>
</div>
