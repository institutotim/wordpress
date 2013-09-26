<?php get_header(); ?>

<div <?php post_class( 'col-lg-10', 'col-lg-offset-1' );?>>

    <header class="page-header">
        <h1 class="page-title"><?php printf( __( 'Resultados da busca por "%s"', 'institutotim' ), get_search_query() ); ?></h1>
    </header>

    <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>

        <?php html::part('loop'); ?>

    <?php endwhile; ?>
    <?php else : ?>
        <p>Nenhum resultado encontrado. Por favor, realize uma nova busca.</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
