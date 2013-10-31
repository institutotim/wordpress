<?php function solucoes_wg (){ ?>

    <div class="solutions col-lg-12 col-md-12">
        <h1>Soluções</h1>
        <nav class="prev"><a href=""></a></nav>
        <div class="highlight-sidebar">
            <?php $solucoes_w = new WP_Query(array('post_type' => 'solucoes', 'post_per_page' => -1));?>
            <?php while( $solucoes_w->have_posts() ) : $solucoes_w->the_post();?>
                <article class="col-lg-12 col-md-12">
                    <div class="img-wrapper">
                        <img src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id($post->ID) ) ?>" class="img">
                    </div>
                    <h2 class="top"><?php the_title();?></h2>
                    <div class="excerpt"><a href="<?php the_permalink();?>"><?php the_excerpt();?></a></div>
                    <p><a href="<?php the_permalink();?>" class="more">Saiba mais...</a></p>
                </article>
            <?php endwhile;?>
        </div>
        <nav class="next"><a href=""></a></nav>
    </div>

<?php }?>

<?php wp_register_sidebar_widget(
    'solucoes_wg',        // your unique widget id
    'Soluções',          // widget name
    'solucoes_wg',  // callback function
    array(                  // options
        'description' => 'Todas as soluções apresentadas pela TIM'
    )
);
?>
