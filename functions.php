<?php
// Enqueue Theme Styles and Scripts
function my_assets() {
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
  wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array( 'jquery' ), null, true );
  wp_enqueue_script( 'template-js', get_stylesheet_directory_uri() . '/js/main.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_assets' ); 

//Add jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

// Change logo link on login page
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

//Register Sidebars
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
}
add_action( 'widgets_init', 'wpbootstrap_widgets_init' );

// Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Allow custom logo image to be added from admin
function themeslug_theme_customizer( $wp_customize ) {
$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'themeslug_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );

}
add_action('customize_register', 'themeslug_theme_customizer');

// Remove H1 and H2 from wysiwyg editor
function myformatTinyMCE($in) {
  $in['block_formats'] = "Paragraph=p;Header 3=h3;Header 4=h4;Header 5=h5;Header 6=h6;";
  return $in;
}
add_filter('tiny_mce_before_init', 'myformatTinyMCE' );

// Remove Comments from Admin Menu
add_action( 'admin_menu', 'remove_menu_pages' );

function remove_menu_pages() {
    remove_menu_page('edit-comments.php');
}

// Remove default linking of images when using Add Media
function wpb_imagelink_setup() {
  $image_set = get_option( 'image_default_link_type' );
  
  if ($image_set !== 'none') {
    update_option('image_default_link_type', 'none');
  }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

// Add logo to login page
// Add support for WordPress 3.0's custom menus
// Custom Post Types
// Custom Taxonomies
// Breadcrumbs
// Page navigation 
// Custom Thumbnails
// Enable post thumbnails
?>