<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while (have_posts()) : the_post();?>
        <?php html::part('loop', ''); ?>
    <?php endwhile;?>
<?php else : ?>

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <h1 class="entry-title">Nada encontrado</h1>
            <div class="entry-content">
                <p>Não encontramos nada relacionado á "<b><i><?php echo get_search_query();?></i>"</b></p>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php get_footer(); ?>
