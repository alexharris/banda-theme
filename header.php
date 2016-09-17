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
<body <?php body_class(); ?> data-spy="scroll" data-target="#banda-sidebar">
   
    <nav class="navbar navbar-light bg-primary">
    	
      <div class="container">
        
      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
          &#9776;
        </button>
    	
      <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : //Activate the IF, if you prefer to have either the logo or the site name, but not both?>
                <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            <?php else : ?>
                <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
            <?php wp_nav_menu( array( 'menu' => 'Main Menu', 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'container' => false) ); ?>

    	</div><!-- #exCollapsingNavbar2 -->

    </div><!-- /.container -->

   </nav>
