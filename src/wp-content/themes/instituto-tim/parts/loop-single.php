<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'col-lg-10', 'col-lg-offset-1') );?>>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-content">

        <?php the_content(); ?>

    </div>
</article>

<!--/////////////////////////////////////////////////////// Comments //////////////////////////////////////////////////////-->

    <?php comments_template(); ?>
