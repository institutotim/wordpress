<?php function videos_wg (){ 
global $post;	
?>

    <div class="videos col-lg-12 col-md-12">
        <h1>Vídeos</h1>
        <nav class="prev"><a href=""></a></nav>
        <div class="highlight-sidebar">
            <?php $videos_w = new WP_Query(array('post_type' => 'videos_instituto', 'post_per_page' => -1));?>
            <?php while( $videos_w->have_posts() ) : $videos_w->the_post();?>
                <article class="col-lg-12 col-md-12"> 
					<div class="modal-video" data-videoUrl="<?php echo get_post_meta($post->ID, 'url_video_instituto', true); ?>" data-toggle="modal" data-target="#myModalVideo">
						<div class="img-wrapper">
							<img src="<?php html::videoThumbURL( get_post_meta($post->ID, 'url_video_instituto', true) );?>" class="img">
						</div>
					</div>
                    <h2 class="top modal-video" data-videoUrl="<?php echo get_post_meta($post->ID, 'url_video_instituto', true); ?>" data-toggle="modal" data-target="#myModalVideo"><?php the_title();?></h2>
                    <?php $excerpt_text = get_the_excerpt(); ?>
                    <div class="excerpt"><a href="#" data-toggle="modal" data-target="#myModalVideo"><?php echo wp_trim_words($excerpt_text, 21, ' [...]');?></a></div>
                    <p><a href="<?php the_permalink();?>" class="more">Saiba mais...</a></p>
                </article>
            <?php endwhile;?>
        </div>
        <nav class="next"><a href=""></a></nav>
    </div>

<!--MODAL-VIDEO-->
<div class="modal fade" id="myModalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog video-dialog">
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>

			<div class="modal-body">	
			</div>

		</div>
	</div>
</div>
<!--MODAL-VIDEO-->

<?php }

wp_register_sidebar_widget(
    'videos_wg',        // your unique widget id
    'Vídeos',          // widget name
    'videos_wg',  // callback function
    array(                  // options
        'description' => 'Todas os vídeos apresentados pela TIM'
    )
);
