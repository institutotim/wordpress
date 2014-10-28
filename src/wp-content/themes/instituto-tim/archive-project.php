<?php get_header(); ?>
<div class="row">
    <div class="col-lg-8 col-md-8">
        <div id="projects">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"><h1 class="top"><?php _e('Projetos Instituto TIM', 'institutotim');?></h1></div>
                    </div>
                </div>
            </div>

            <nav id="secondary-nav" class="row">
                <ul class="clearfix">
                    <?php $terms = get_terms('projects_categories', array('hide_empty' => 0)); ?>
                    <?php foreach($terms as $term) :
                          $term_link = get_term_link( $term );
                    ?>
                        <li class="<?php echo $term->slug; ?>">
                            <a href="<?php echo $term_link;?>" class="btn btn-<?php echo $term->slug; ?> col-lg-12 col-mg-12" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $term->description; ?>">
                                <?php echo $term->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="row">
                <?php while( have_posts() ) : the_post(); ?>

                    <?php $project_categories = get_the_terms( $post->id, 'projects_categories'); ?>

                    <article id="project-<?php the_id() ?>" class="col-lg-4 col-md-4 col-sm-6">
                        <div class="img-wrapper shadow">
                            <span class="<?php foreach ($project_categories as $category) { echo $category->slug; } ?>">
                                <?php foreach ($project_categories as $category) { echo $category->name; } ?>
                            </span>
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img')); ?>
                        </div>
                        <h2 class="top"><?php the_title(); ?></h2>
                        <p class="excerpt"><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
                        <p><a href="<?php the_permalink(); ?>" class="more"><?php _e('saiba mais', 'institutotim');?>...</a></p>
                    </article>

                <?php endwhile; wp_reset_query(); ?>
            </div>


            <?php
                $tax_query = array();
                if (is_tax('projects_categories')) {
                    $term = get_queried_object();
                    if (isset($term->term_id)) {
                        $tax_query = array(
                            array(
                                'taxonomy' => 'projects_categories',
                                'terms' => $term->term_id
                            )
                        );
                    }
                }
                
                $projetos = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => -1,
                    'ignore_sticky_posts' => 1,
                    'meta_query' => array(
                        array(
                            'key' => 'projeto_concluido',
                            'value' => 'on'
                        ),
                    ),
                    'tax_query' => $tax_query
                ));
            ?>
            
            <?php if ($projetos->have_posts()): ?>

                <div class="row">
                    <div class="col-lg-12"><h3>Projetos Concluídos</h3></div>
                </div>
                <div class="row">
                    
                    <?php while( $projetos->have_posts() ) : $projetos->the_post(); ?>

                        <?php $project_categories = get_the_terms( $post->id, 'projects_categories'); ?>

                        <article id="project-<?php the_id() ?>" class="col-lg-4 col-md-4 col-sm-6">
                            <div class="img-wrapper shadow">
                                <span class="<?php foreach ($project_categories as $category) { echo $category->slug; } ?>">
                                    <?php foreach ($project_categories as $category) { echo $category->name; } ?>
                                </span>
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img')); ?>
                            </div>
                            <h2 class="top"><?php the_title(); ?></h2>
                            <p class="excerpt"><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
                            <p><a href="<?php the_permalink(); ?>" class="more"><?php _e('saiba mais', 'institutotim');?>...</a></p>
                        </article>
                    <?php endwhile; ?>
                </div>
                
            <?php endif; ?>
            
            <?php wp_reset_query(); ?>
            
        </div>
    </div>
    <div class="col-lg-4 col-md-4">
        <aside id="main-aside" >
            <?php dynamic_sidebar();?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
