<?php get_header(); ?>

<style>
.navbar-overtop-tim {margin-top: -10px;}
</style>


<div class="page-header">
	<h1 class="page-title"><?php _e('Resultado da busca', 'institutotim');?></h1>
</div>

<div <?php post_class( 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-md-offset-1' );?>>
    <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>

        <?php html::part('loop'); ?>

    <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e('Nenhum resultado encontrado. Por favor, realize uma nova busca.', 'institutotim');?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
