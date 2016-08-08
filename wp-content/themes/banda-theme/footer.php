</div><!-- row -->

<!-- FOOTER MENU-->

  <footer class="row m-t-3">
      <div class="col-sm-12">
          <div class="container">
              <div class="row m-y-2">
                  <div class="col-sm-8">
                    <?php wp_nav_menu( array( 'menu' => 'footer-menu', 'container_class' => 'footer-menu ', 'menu_class' => 'nav' ) ); ?>
                  </div>
                  <div class="col-sm-4 text-xs-right">
                     <img class="footer-logo" src="<?php print(get_template_directory_uri() . '/img/banda-logo.png'); ?>" />
                  </div>
              </div>

          </div>
      </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>
