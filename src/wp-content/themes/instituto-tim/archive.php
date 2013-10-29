<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <h1 class="archive-title"><?php
                if ( is_day() ) :
                    printf( __( 'Arquivo diário: %s', 'institutotim' ), get_the_date() );
                elseif ( is_month() ) :
                    printf( __( 'Arquivo mensal: %s', 'institutotim' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'institutotim' ) ) );
                elseif ( is_year() ) :
                    printf( __( 'Arquivo anual: %s', 'institutotim' ), get_the_date( _x( 'Y', 'yearly archives date format', 'institutotim' ) ) );
                else :
                    _e( 'Arquivo', 'institutotim' );
                endif;
            ?></h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>
        <div class="row">        
            <div class="col-lg-12 col-md-12">
                <?php html::part('loop'); ?>
            </div>
        </div>
        <?php endwhile; ?>

        <?php html::part('pagination'); ?>

    <?php else : ?>
        
        <div class="page-header">
            <h1 class="entry-title">Erro 404</h1>
        </div>
        
        <div class="entry-content">
            <p>A página solicitada não existe ou está fora do ar temporariamente</p>
        </div>
        
    <?php endif; ?>

<?php get_footer(); ?>
