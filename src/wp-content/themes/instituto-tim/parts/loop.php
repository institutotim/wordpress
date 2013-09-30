<article class="post-structure-of-list post-entry">
    <div class="row padding-content-list-posts">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?php 
                if( get_the_post_thumbnail() ) :
                    echo the_post_thumbnail( array('254', 180) );
                else :
                    echo '<img src="'.get_stylesheet_directory_uri().'/img/default-thumbnail.png" alt="">';
                endif;
            ?>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <h1 class="entry-title top"><a href="<?php the_permalink();?>" title="<?php echo get_the_title();?>"><?php the_title();?></a></h1>
            <?php $post_ID = get_the_ID(); ?>
            <?php the_excerpt();?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="global-open-description-post-here">

            <div class="open-description-post-here icon-plus"></div>
            
                <ul class="description-post-here clearfix">
                    <li class="list-category">
                        <b>Categorias:</b><br />
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                        <span>Categorie</span>
                    </li>
                    <li><b>Autor:</b> Gutierri Barboza</li>
                    <li><b>Em:</b> 12/12/2012</li>
                </ul>
        </div>
    </div>
</article>
