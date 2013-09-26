<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>

    <?php html::part('loop', 'single'); ?>

<?php endwhile; ?>
<?php else : ?>
	
    <div class="row">
	    <div <?php post_class( 'col-lg-10', 'col-lg-offset-1' );?>>
	        <h1 class="entry-title">Erro 404</h1>
	        <div class="entry-content">
	            <p>A página solicitada não existe ou está fora do ar temporariamente</p>
	        </div>
	    </div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
