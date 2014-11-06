<?php
/*
 * Template Name: Formulário de Contato
 *
 */

?>
<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>

    <div class="row">
        <article id="post-<?php the_ID(); ?>" <?php post_class( array('post-entry', 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-sm-12') );?>>
            <div class="page-header top">
                <h1 class="entry-title top"><?php the_title(); ?></h1>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <form action="" id="formulario-contato" class="hl-form" method="post" role="form">

                <div id="error-general" class="hl-message-alert"></div>

                <div class="form-group article--content--form--content">
                    <div class="form--content--label">
                        <label for="name" ><?php _e('Nome completo', 'institutotim');?></label>
                        <div id="error-name" class="hl-error-alert"></div>
                    </div>
                    <input class="form-control" id="name" type="text" name="name" />
                </div>

                <div class="form-group article--content--form--content">
                    <div class="form--content--label">
                        <label for="email" ><?php _e('E-mail', 'institutotim');?></label>
                        <div id="error-email" class="hl-error-alert"></div>
                    </div>
                    <input class="form-control" id="email" type="email" name="email" />
                </div>

                <div class="form-group article--content--form--content">
                    <div class="form--content--label">
                        <label for="message" ><?php _e('Mensagem', 'institutotim');?></label>
                        <div id="error-message" class="hl-error-alert"></div>
                    </div>
                    <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                </div>

                <p class="textright">
                    <input class="btn btn-info" type="submit" class="hl-form-submit" value="Enviar" />
                </p>

            </form>


        </article>
    </div>

    <div class="row">
        <?php comments_template(); ?>
    </div>



<?php endwhile; ?>
<?php else : ?>

    <div <?php post_class( 'col-lg-10', 'col-lg-offset-1', 'col-md-10', 'col-md-offset-1' );?>>
        <h1 class="entry-title"><?php _e('Erro 404', 'institutotim'); ?></h1>
        <div class="entry-content">
            <p><?php _e('A página solicitada não existe ou está fora do ar temporariamente', 'institutotim');?></p>
        </div>
    </div>

<?php endif; ?>




<?php get_footer(); ?>
