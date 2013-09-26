<div class="row">
    <article class="col-lg-10 col-lg-offset-1 post-structure-of-list post-entry">
        <div class="col-lg-4 thumbnail_post">
            <?php 
                if( get_the_post_thumbnail() ) :
                    echo the_post_thumbnail( array('254', 180) );
                else :
                    echo '<img src="http://192.168.0.82/instituto-tim/wp-content/themes/instituto-tim/img/default-thumbnail.png" alt="">';
                endif;
            ?>
        </div>
        <div class="col-lg-8">
            <h1 class="entry-title top"><a href="<?php the_permalink();?>" title="<?php echo get_the_title();?>"><?php the_title();?></a></h1>
            <?php $post_ID = get_the_ID(); ?>
            <?php the_excerpt();?>
        </div>
    </article>
</div>
