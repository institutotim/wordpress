            </section>

            <footer id="main-footer">
                <nav>
                    <?php wp_nav_menu ( array('theme_location' => 'footer', 'items_wrap' => '<ul class="textcenter">%3$s</ul>', 'container' => '', 'fallback_cb' => '', 'depth' => 1) ); ?>
                </nav>

                <?php global $BannersApoiadores; ?>

                <ul class="textcenter">
                    <?php $BannersApoiadores->print_items_by_position('executiva'); ?>
                    <!-- <li><img src="<?php echo get_template_directory_uri() ?>/img/logotipo.png" class="tim"></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/pronatec.png"></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/pais-rico-pais-sem-pobreza.jpg"></li> -->
                </ul>
                <p class="textcenter"><small>© Copyright TIM Celular 2010. Todos os direitos reservados.</small></p>
            </footer>
        </div>
    </div>
    
<?php wp_footer(); ?>
</body>
</html>
