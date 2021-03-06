<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('name'); ?>  <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>


  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php
      /*
       *  Add this to support sites with sites with threaded comments enabled.
       */
      if ( is_singular() && get_option( 'thread_comments' ) )
          wp_enqueue_script( 'comment-reply' );

      wp_get_archives('type=monthly&format=link');

      wp_head();
      wp_localize_script( 'love', 'postlove', array(
    'ajax_url' => admin_url( 'admin-ajax.php' )
  ));
  ?>

</head>
<body <?php body_class(); ?> data-spy="scroll" data-target="#banda-sidebar">
<?php include_once("_analytics.php") ?>
   <div id="search-bar" >
    <div class="container">
      <?php get_search_form(); ?>      
    </div>
    <!-- /.container -->
   </div>
    <nav class="navbar navbar-light bg-primary">
    	
      <div class="container">
        
      <button class="navbar-toggler hidden-sm-up" type="button" aria-label="Toggle navigation">
          &#9776;
        </button>
          <?php if ( get_theme_mod( 'themeslug_logo' ) ) : //Activate the IF, if you prefer to have either the logo or the site name, but not both?>
              <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
          <?php else : ?>
              <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
          <?php endif; ?>

       <span class="search-icon"></span>
  
    </div><!-- /.container -->

   </nav>
