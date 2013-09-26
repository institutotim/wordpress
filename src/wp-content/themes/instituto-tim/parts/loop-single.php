<div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class( array('post-entry', 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-sm-12') );?>>
        <div class="page-header top">
            <h1 class="entry-title top"><?php the_title(); ?></h1>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
</div>

<div class="row">
    <?php comments_template(); ?>
</div>
