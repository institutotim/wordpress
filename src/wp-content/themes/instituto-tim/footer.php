</div>
</div>
</div>
</section>
<br />
<br />
<br />
<br />
    <!-- FOOTER START -->
    <footer class="section section-primary">
      <div class="section section-footer">
        <div class="container">

          <div class="row">
            <div class="col-md-12">
              <div class="section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-8 col-sm-12 col-xs-12">
                      <div class="col-md-3 col-md-3 col-sm-6 col-xs-12 text-left">
                      <!--  <p class="footertitle">CONHEÇA O INSTITUTO TIM</p> -->
<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
<p class="footertitle">Conheça o Instituto TIM</p>

<?php } else { ?>
<p class="footertitle">Get To Know The Instituto TIM</p>

<?php } ?>


                          <?php 

                          wp_nav_menu ( array(
                          'theme_location' => '',
                          'menu' => 'footer-1', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)

                          ); ?>
                      <!--  
                        <p class="">Conheça TIM Tec</p>-->
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left footerborder-left">
<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
<p class="footertitle">Iniciativas</p>
<?php } else { ?>
<p class="footertitle">Projects</p>
<?php } ?>

<!--                         <p class="footertitle">INICIATIVAS</p> -->

                          <?php 

                          wp_nav_menu ( array(
                          'theme_location' => '',
                          'menu' => 'footer-2', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)

                          ); ?>
                        <!--
                        <p class="">Funcionalidades</p>
                        <p class="">Instalação e desenvolvimento</p>-->
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left footerborder-left">
                     <!--   <p class="footertitle">COMUNICAÇÃO</p> -->

<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
<p class="footertitle">Comunicação</p>

<?php } else { ?>
<p class="footertitle">Communication</p>

<?php } ?>
                          <?php 

                          wp_nav_menu ( array(
                          'theme_location' => '',
                          'menu' => 'footer-3', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)

                          ); ?>
                        <!--<p class="">Lista de Cursos</p>-->
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left footerborder-left">
                        <p class="footertitle"></p>

                          <?php 

                          wp_nav_menu ( array(
                          'theme_location' => '',
                          'menu' => 'footer-4', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)

                          ); ?>

                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center footerborder-left">
                      <div class="row">
                        <br>
                        <br>
                        <a href="https://institutotim.org.br"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_header_institutotim.png"></a>
<!--                        <h5 class="footertitle">Instituto TIM nas Redes</h5>
                        <a href="mailto:contato@institutotim.com.br"><i class="fa fa-fw fa-lg text-inverse fa-at"></i></a>
                        <a href="https://facebook.com/"><i class="fa fa-facebook fa-fw fa-lg text-inverse"></i></a>
                        <a href="https://twitter.com/"><i class="fa fa-fw hub fa-lg text-inverse fa-twitter"></i></a> 
-->
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
             <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center footertitle" style="margin-top:30px">
               <div class="row">
                  <br><br><br><br><br>
                 Copyright TIM Celular 2017 - Todos os direitos reservados.
              </div>
            </div>
          </div>
        </div>
<br />
<br />
      </div>

    </footer>


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
