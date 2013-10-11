<?php get_header(); ?>

<div class="row">
    <div id="highlight" class="col-lg-8 col-md-8">
        <div class="highlight-wrapper shadow">
            <span id="high-light-navigation"></span>
            <div class="highlight-container">
                <?php $destaques = new WP_Query( array('posts_per_page' => -1, 'post_type' => 'post', 'meta_key' => '_home' )); ?>
                <?php if ($destaques->have_posts()) : while ($destaques->have_posts()): $destaques->the_post(); ?>
                <?php if ( get_the_post_thumbnail() ) :?>
                <article id="post-<?php the_ID();?>">
                    <div class="content">
                        <h1><?php echo get_the_title(); ?></h1>
                        <p class="excerpt"><?php echo get_the_excerpt();?></p>
                    </div>
                    <div class="img-wrapper">
                        <a href="<?php echo get_permalink();?>">
                            <?php the_post_thumbnail('destaque_high_light', array('class' => 'img')); ?>
                        </a>
                    </div>
                </article>
                
                <?php 
                        endif;
                        endwhile;
                        endif;
                ?>
                
            </div>
        </div>
    </div>
    <div id="about" class="col-lg-4 col-md-4 shadow">
        <article>
            <h1><?php echo get_option('title_highlight_box');?></h1>  
            <p class="excerpt"><?php echo get_option('text_highlight_box');?></p>
            <?php $pageURLID = get_option('rela_highlight_box');
                $linkURL = get_page_link($pageURLID); 
            ?>
            <p class="more textright"><a href="<?php echo $linkURL;?>" class="btn btn-warning">Saiba mais</a></p>
        </article>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-md-8">
        <div id="projects">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"><h1 class="top">Projetos Instituto TIM</h1></div>
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
                <?php $projects = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => -1
                )) ?>

                <?php while( $projects->have_posts() ) : $projects->the_post(); ?>

                    <?php $project_categories = get_the_terms( $post->ID, 'projects_categories'); ?>

                    <article id="project-<?php the_ID() ?>" class="col-lg-4 col-md-4 col-sm-6">
                        <div class="img-wrapper shadow">
                            <span class="<?php foreach ($project_categories as $category) { echo $category->slug; } ?>">
                                <?php foreach ($project_categories as $category) { echo $category->name; } ?>
                            </span>
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img')); ?>
                        </div>
                        <h2 class="top"><?php the_title(); ?></h2>
                        <p class="excerpt"><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
                        <p><a href="<?php the_permalink(); ?>" class="more">Saiba mais...</a></p>
                    </article>

                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4">
        <aside id="main-aside" >
            <div class="editais">
                <div class="col-lg-12 col-md-12">
                    <h1>Editais</h1>
                    <nav class="prev"><a href=""></a></nav>
                    <article class="col-lg-12 col-md-12">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prefuse73.jpg" class="img">
                        </div>
                        <h2 class="top">Destaque Nº1</h2>
                        <p class="excerpt"><a href="">Adipiscing sit velit hac porttitor habitasse, facilisis a nascetur elementum, vel pulvinar facilisis mattis aliquet integer turpis pellentesque quis, ac dis. Nunc nec pellentesque tempor.</a></p>
                        <p><a href="" class="more">Saiba mais...</a></p>
                    </article>
                    <nav class="next"><a href=""></a></nav>
                </div>
            </div>

            <div class="solutions">
                <div class="col-lg-12 col-md-12">
                    <h1>Soluções</h1>
                    <nav class="prev"><a href=""></a></nav>
                    <article class="col-lg-12 col-md-12">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prefuse73.jpg" class="img">
                        </div>
                        <h2 class="top">Destaque Nº1</h2>
                        <p class="excerpt"><a href="">Adipiscing sit velit hac porttitor habitasse, facilisis a nascetur elementum, vel pulvinar facilisis mattis aliquet integer turpis pellentesque quis, ac dis. Nunc nec pellentesque tempor.</a></p>
                        <p><a href="" class="more">Saiba mais...</a></p>
                    </article>
                    <nav class="next"><a href=""></a></nav>
                </div>
            </div>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
