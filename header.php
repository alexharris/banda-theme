<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
   

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   
  <?php
      /* 
       *  Add this to support sites with sites with threaded comments enabled.
       */
      if ( is_singular() && get_option( 'thread_comments' ) )
          wp_enqueue_script( 'comment-reply' );

      wp_get_archives('type=monthly&format=link');
   
      wp_head();
  ?>
</head>
<body <?php body_class(); ?>>
  <!-- LOGO -->

  <div class="brand row">
  
        <div class="col-md-12">
          <?php //if ( get_theme_mod( 'themeslug_logo' ) ) : //Activate the IF, if you prefer to have either the logo or the site name, but not both?>

                <h1><a class="pull-left" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></h1>

          <?php //else : ?>

                    <h1><a class="" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>

          <?php //endif; ?>

          <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        
        </div> <!-- /.col-md-12 -->
   
   </div>  <!-- /.brand -->  

<!-- <div id="site-navigation" class="navbar-collapse collapse main-navigation" role="navigation">
  <?php //wp_nav_menu( array( 'menu' => 'Main Menu', 'theme_location' => 'primary', 'menu_class' => 'slimmenu' ) ); ?>
</div> -->
<!-- /site navigation -->

<!-- banda test navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <a class="navbar-brand" href="#">BANDA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">LINK</a></li>
                <li><a href="#">LINK 2</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- /banda test navbar -->

