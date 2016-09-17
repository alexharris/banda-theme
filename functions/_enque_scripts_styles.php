<?php
//
// Enqueue Theme Styles and Scripts
//
function my_assets() {
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
  wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array( 'jquery' ), null, true );
  wp_enqueue_script( 'template-js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), null, true );
  wp_enqueue_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/highlight.min.js', null, true);
  wp_enqueue_style('highlight-css', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/styles/default.min.css', null, true);
}
add_action( 'wp_enqueue_scripts', 'my_assets' );

//
//Add jQuery
//
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
?>