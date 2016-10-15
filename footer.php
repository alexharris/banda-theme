</div><!-- row -->

<!-- FOOTER MENU-->
<div class="container-fluid l-footer">

  <div class="container">

      <footer class="row">
        <div class="col-md-12">
          <?php wp_nav_menu( array( 'menu' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
        </div>
      </footer>

  </div> <!-- /.container -->

</div><!-- /.container-fluid -->

<!-- set BASE for ajax search -->
<script type="text/javascript">var BASE = "<?php echo home_url() ?>";</script>
<?php wp_footer(); ?>
</body>
</html>
