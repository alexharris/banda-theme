<?php 
//
//Register Sidebars
//
function wpbootstrap_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'custom_template' ),
    'id' => 'sidebar-1',
    'description' => __( 'Appears on default interior pages and posts.' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  register_sidebar( array(
    'name' => __( 'Front Page Widget Area Left', 'custom_template' ),
    'id' => 'front-1',
    'description' => __( 'Appears on front page when using static home page.' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  register_sidebar( array(
    'name' => __( 'Front Page Widget Area Left', 'custom_template' ),
    'id' => 'front-2',
    'description' => __( 'Appears on front page when using static home page.' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  register_sidebar( array(
    'name' => __( 'Front Page Widget Area Left', 'custom_template' ),
    'id' => 'front-3',
    'description' => __( 'Appears on front page when using static home page.' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'wpbootstrap_widgets_init' );
?>