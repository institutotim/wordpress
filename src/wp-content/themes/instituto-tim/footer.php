</div>
</div>
</div>
</section>





<div id="footer-tim">
	<div class="footer-tim">
		<div class="box-it box-sz1">

<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
<h2>Sobre</h2>

                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-1',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>

<?php } else { ?>
                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-1',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links2">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>



<?php } ?>

		</div>

		<div class="box-it box-sz1 footerborder-left">

<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
<h2>Iniciativas</h2>
                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-2',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>
<?php } else { ?>
                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-2',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links2">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>


<?php } ?>
		</div>

		<div class="box-it box-sz1 footerborder-left">
<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
<h2>Comunicação</h2>
                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-3',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>
<?php } else { ?>
                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-3',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links2">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>

<?php } ?>

		</div>

		<div class="box-it box-sz1 footerborder-left" style="margin-top:-4px">
			<!--<h2>Queremos Ouvir Você</h2>-->
                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-4',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links2">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>
		</div>


		<div class="box-it box-sz2 footerborder-left">
			<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
		</div>
	</div>

	<div class="creditos">
		 Copyright TIM Celular <?php echo date('Y'); ?> -
                <?php
                $blog_id = get_current_blog_id();
                if ( 1 == $blog_id ) {
                ?>
                Todos os direitos reservados.
                <?php } else { ?>
                All rights reserved.
                <?php } ?>
	</div>

</div>




<div class="container footer-mobile">
  <div class="footer-logo col-sm-5 col-xs-4">
    <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
  </div>
  <div class="footer-creditos col-sm-7 col-xs-8">
                &copy; TIM Celular <?php echo date('Y'); ?> -
                <?php
                $blog_id = get_current_blog_id();
                if ( 1 == $blog_id ) {
                ?>
                Todos os direitos reservados.

                <?php } else { ?>
                All rights reserved.
                <?php } ?>

  </div>
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
  ga('create', 'UA-49342801-<?php echo get_locale() == 'pt_BR' ? 1 : 2  ?>', {
    'storage': 'none',
    'clientId': localStorage.getItem(GA_LOCAL_STORAGE_KEY)
  });
  ga(function(tracker) {
    localStorage.setItem(GA_LOCAL_STORAGE_KEY, tracker.get('clientId'));
  });
}
else {
  ga('create', 'UA-49342801-<?php echo get_locale() == 'pt_BR' ? 1 : 2  ?>', 'auto');
}

ga('send', 'pageview');

</script>

</body>
</html>
