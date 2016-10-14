            
            <div class="main-navbar visible-xs visible-sm">
              <?php wp_nav_menu( array( 'theme_location' => 'header', 'items_wrap' => '<ul class="clearfix">%3$s</ul>', 'container' => '', 'fallback_cb' => '', 'depth' => 2 ) ); ?>
            </div>

            </section>

            <footer id="main-footer">
                <nav>
                    <?php wp_nav_menu ( array('theme_location' => 'footer', 'items_wrap' => '<ul class="textcenter">%3$s</ul>', 'container' => '', 'fallback_cb' => '', 'depth' => 1) ); ?>
                </nav>

                <?php global $BannersApoiadores; ?>

                <ul class="textcenter">
                    <?php $BannersApoiadores->print_items_by_position('apoiadores'); ?>
                </ul>
                <!-- <p class="contato textcenter">Para entrar em contato com a equipe do Instituto TIM escreva para <a href="mailto:contato@institutotim.com.br">contato@institutotim.com.br</a></p> -->
                <p class="textcenter"><small><?php echo get_option('text_copyright_footer');?></small></p>

            </footer>
        </div>
    </div>

<?php wp_footer(); ?>

<?php /*
Google Analytics 
https://developers.google.com/analytics/devguides/collection/analyticsjs/cookies-user-id#using_localstorage_to_store_the_client_id
*/
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

var GA_LOCAL_STORAGE_KEY = 'ga:clientId';

if (window.localStorage) {
  ga('create', 'UA-49342801-1', {
    'storage': 'none',
    'clientId': localStorage.getItem(GA_LOCAL_STORAGE_KEY)
  });
  ga(function(tracker) {
    localStorage.setItem(GA_LOCAL_STORAGE_KEY, tracker.get('clientId'));
  });
}
else {
  ga('create', 'UA-49342801-1', 'auto');
}

ga('send', 'pageview');

</script>

</body>
</html>
