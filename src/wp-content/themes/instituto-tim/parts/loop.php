<div class="row">
    <article class="col-lg-10 col-lg-offset-1 post-structure-of-list post-entry">
        <div class="col-lg-4 thumbnail_post"><?php the_post_thumbnail( array('254', 180) );?></div>
        <div class="col-lg-8">
            <h1 class="entry-title top"><a href="<?php the_permalink();?>" title="<?php echo get_the_title();?>"><?php the_title();?></a></h1>
            <?php $post_ID = get_the_ID(); ?>
            <?php the_excerpt();?>
        </div>
    </article>
</div>
