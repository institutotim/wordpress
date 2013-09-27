<?php
    global $wp_query;
    $big = 9999999;
    $par_args_pag = array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_text' => 'Anterior',
                'next_text' => 'Próximo'
            );
    $list_of_links_page =  paginate_links( $par_args_pag );

    if(!$list_of_links_page == NULL) :
?>

<div class="row">
    <div class="col-lg-12">
        <nav class="pagination-of-pages">

            <?php echo $list_of_links_page; ?>

        </nav>
    </div>
</div>
<?php endif; ?>
