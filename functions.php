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


//
// Add Custom Post Types
//
// Register Custom Post Type
function entries_post_type() {

  $labels = array(
    'name'                  => _x( 'Entries', 'Post Type General Name', 'banda-theme' ),
    'singular_name'         => _x( 'Entry', 'Post Type Singular Name', 'banda-theme' ),
    'menu_name'             => __( 'Entries', 'banda-theme' ),
    'name_admin_bar'        => __( 'Entries', 'banda-theme' ),
    'archives'              => __( 'Entry Archives', 'banda-theme' ),
    'parent_item_colon'     => __( 'Parent Entry:', 'banda-theme' ),
    'all_items'             => __( 'All Entries', 'banda-theme' ),
    'add_new_item'          => __( 'Add New Entry', 'banda-theme' ),
    'add_new'               => __( 'Add Entry', 'banda-theme' ),
    'new_item'              => __( 'New Entry', 'banda-theme' ),
    'edit_item'             => __( 'Edit Entry', 'banda-theme' ),
    'update_item'           => __( 'Update Entry', 'banda-theme' ),
    'view_item'             => __( 'View Entry', 'banda-theme' ),
    'search_items'          => __( 'Search Entry', 'banda-theme' ),
    'not_found'             => __( 'Not found', 'banda-theme' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'banda-theme' ),
    'featured_image'        => __( 'Featured Image', 'banda-theme' ),
    'set_featured_image'    => __( 'Set featured image', 'banda-theme' ),
    'remove_featured_image' => __( 'Remove featured image', 'banda-theme' ),
    'use_featured_image'    => __( 'Use as featured image', 'banda-theme' ),
    'insert_into_item'      => __( 'Insert into entry', 'banda-theme' ),
    'uploaded_to_this_item' => __( 'Uploaded to this entry', 'banda-theme' ),
    'items_list'            => __( 'Entries list', 'banda-theme' ),
    'items_list_navigation' => __( 'Entries list navigation', 'banda-theme' ),
    'filter_items_list'     => __( 'Filter entries list', 'banda-theme' ),
  );
  $args = array(
    'label'                 => __( 'Entry', 'banda-theme' ),
    'description'           => __( 'Individual entry posts', 'banda-theme' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-portfolio',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'entries', $args );

}
add_action( 'init', 'entries_post_type', 0 );


//
// Remove posts and comments from admin area
//
function remove_menus(){
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments  
}
add_action( 'admin_menu', 'remove_menus' );

//
// Test meta box
//
function test_meta_box_title_get_meta( $value ) {
  global $post;

  $field = get_post_meta( $post->ID, $value, true );
  if ( ! empty( $field ) ) {
    return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
  } else {
    return false;
  }
}

function test_meta_box_title_add_meta_box() {
  add_meta_box(
    'test_meta_box_title-test-meta-box-title',
    __( 'Test meta box title', 'test_meta_box_title' ),
    'test_meta_box_title_html',
    'entries',
    'normal',
    'default'
  );
}
add_action( 'add_meta_boxes', 'test_meta_box_title_add_meta_box' );

function test_meta_box_title_html( $post) {
  wp_nonce_field( '_test_meta_box_title_nonce', 'test_meta_box_title_nonce' ); ?>

  <p>Test meta box description</p>

  <p>
    <label for="test_meta_box_title_text_area_one"><?php _e( 'Text area one', 'test_meta_box_title' ); ?></label><br>
    <input type="text" name="test_meta_box_title_text_area_one" id="test_meta_box_title_text_area_one" value="<?php echo test_meta_box_title_get_meta( 'test_meta_box_title_text_area_one' ); ?>">
  </p>  <p>
    <label for="test_meta_box_title_text_area_2"><?php _e( 'Text area 2', 'test_meta_box_title' ); ?></label><br>
    <textarea name="test_meta_box_title_text_area_2" id="test_meta_box_title_text_area_2" ><?php echo test_meta_box_title_get_meta( 'test_meta_box_title_text_area_2' ); ?></textarea>
  
  </p>  <p>
    <label for="test_meta_box_title_select_opt"><?php _e( 'Select opt', 'test_meta_box_title' ); ?></label><br>
    <select name="test_meta_box_title_select_opt" id="test_meta_box_title_select_opt">
      <option <?php echo (test_meta_box_title_get_meta( 'test_meta_box_title_select_opt' ) === 'one ' ) ? 'selected' : '' ?>>one </option>
      <option <?php echo (test_meta_box_title_get_meta( 'test_meta_box_title_select_opt' ) === 'two' ) ? 'selected' : '' ?>>two</option>
      <option <?php echo (test_meta_box_title_get_meta( 'test_meta_box_title_select_opt' ) === 'three' ) ? 'selected' : '' ?>>three</option>
    </select>
  </p><?php
}

function test_meta_box_title_save( $post_id ) {
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  if ( ! isset( $_POST['test_meta_box_title_nonce'] ) || ! wp_verify_nonce( $_POST['test_meta_box_title_nonce'], '_test_meta_box_title_nonce' ) ) return;
  if ( ! current_user_can( 'edit_post', $post_id ) ) return;

  if ( isset( $_POST['test_meta_box_title_text_area_one'] ) )
    update_post_meta( $post_id, 'test_meta_box_title_text_area_one', esc_attr( $_POST['test_meta_box_title_text_area_one'] ) );
  if ( isset( $_POST['test_meta_box_title_text_area_2'] ) )
    update_post_meta( $post_id, 'test_meta_box_title_text_area_2', esc_attr( $_POST['test_meta_box_title_text_area_2'] ) );
  if ( isset( $_POST['test_meta_box_title_select_opt'] ) )
    update_post_meta( $post_id, 'test_meta_box_title_select_opt', esc_attr( $_POST['test_meta_box_title_select_opt'] ) );
}
add_action( 'save_post', 'test_meta_box_title_save' );

/*
  Usage: test_meta_box_title_get_meta( 'test_meta_box_title_text_area_one' )
  Usage: test_meta_box_title_get_meta( 'test_meta_box_title_text_area_2' )
  Usage: test_meta_box_title_get_meta( 'test_meta_box_title_select_opt' )
*/

// Add logo to login page
// Add support for WordPress 3.0's custom menus
// Custom Post Types
// Custom Taxonomies
// Breadcrumbs
// Page navigation 
// Custom Thumbnails
// Enable post thumbnails
?>