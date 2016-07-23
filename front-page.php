<?php get_header(); ?>



    <!-- Marketing messaging and featurettes
    ================================================== -->

    <div class="container mainpage">
    <div class="row maincontent" style="text-align:center"><h3>Title of Section</h3></div>
      <!-- Three columns of text below the carousel -->
      <div class="row maincontent">
        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'front-1' ) ) : ?>
              <?php dynamic_sidebar( 'front-1' ); ?>
          <?php else : ?>
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/placeholder-blog.png">
          <?php endif; ?>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'front-2' ) ) : ?>
              <?php dynamic_sidebar( 'front-2' ); ?>
          <?php else : ?>
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/placeholder-blog.png">
          <?php endif; ?>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'front-3' ) ) : ?>
              <?php dynamic_sidebar( 'front-3' ); ?>
          <?php else : ?>
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/placeholder-blog.png">
          <?php endif; ?>
        </div><!-- /.col-sm-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <div class="row maincontent">
         <div class="col-sm-4 about">
            <?php dynamic_sidebar( 'front-5' ); ?>
        </div>
        <div class="col-sm-8 video">
        <?php dynamic_sidebar( 'front-4' ); ?>
        </div>

      </div><!-- /.row -->
      
    
    
<?php get_footer(); ?>
