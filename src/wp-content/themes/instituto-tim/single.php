<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
    <?php html::part('loop-single', get_post_type()); ?>

<?php endwhile; ?>
<?php else : ?>
	
    <div class="row">
	    <div <?php post_class( 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-md-offset-1' );?>>
	        <h1 class="entry-title"><?php _e('Erro 404', 'institutotim'); ?></h1>
	        <div class="entry-content">
	            <p><?php _e('A página solicitada não existe ou está fora do ar temporariamente', 'institutotim');?></p>
	        </div>
	    </div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
