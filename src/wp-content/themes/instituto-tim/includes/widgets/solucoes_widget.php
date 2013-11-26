<?php function solucoes_wg (){ ?>

    <div class="solutions col-lg-12 col-md-12">
        <?php $solucoes_w = new WP_Query(array('post_type' => 'solucoes', 'post_per_page' => -1)); $num_of_items = intval($videos_w->found_posts); ?>
        <h1>Soluções</h1>
        <?php if ($num_of_items > 1): ?>
            <nav class="prev"><a href=""></a></nav>
        <?php endif; ?>
        <div class="highlight-sidebar">
            
            <?php while( $solucoes_w->have_posts() ) : $solucoes_w->the_post();?>
                <article class="col-lg-12 col-md-12">
                    <div class="img-wrapper">
                        <a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id($post->ID) ) ?>" class="img"></a>
                    </div>
                    <h2 class="top"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <?php $excerpt_text = get_the_excerpt(); ?>
                    <div class="excerpt"><a href="<?php the_permalink();?>"><?php echo wp_trim_words($excerpt_text, 21, ' [...]');?></a></div>
                    <p><a href="<?php the_permalink();?>" class="more">Saiba mais...</a></p>
                </article>
            <?php endwhile;?>
        </div>
        <?php if ($num_of_items > 1): ?>
            <nav class="next"><a href=""></a></nav>
        <?php endif; ?>
    </div>

<?php }

wp_register_sidebar_widget(
    'solucoes_wg',        // your unique widget id
    'Soluções',          // widget name
    'solucoes_wg',  // callback function
    array(                  // options
        'description' => 'Todas as soluções apresentadas pela TIM'
    )
);
