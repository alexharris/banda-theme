<?php 
//
// Add thumbnails
//
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)


//
// Change logo link on login page
//
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

//
//Enable post and comments RSS feed links to head
//
add_theme_support( 'automatic-feed-links' );

//
// Remove H1 and H2 from wysiwyg editor
//
function myformatTinyMCE($in) {
  $in['block_formats'] = "Paragraph=p;Header 3=h3;Header 4=h4;Header 5=h5;Header 6=h6;";
  return $in;
}
add_filter('tiny_mce_before_init', 'myformatTinyMCE' );

//
// Remove Comments from Admin Menu
//
function remove_menu_pages() {
    remove_menu_page('edit-comments.php');          //Comments
  remove_menu_page( 'edit.php' );                   //Posts

}
add_action( 'admin_menu', 'remove_menu_pages' );

//
// Remove default linking of images when using Add Media
//
function wpb_imagelink_setup() {
  $image_set = get_option( 'image_default_link_type' );

  if ($image_set !== 'none') {
    update_option('image_default_link_type', 'none');
  }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);


function remove_page_excerpt_field() {
  remove_meta_box( 'postexcerpt' , 'entries' , 'normal' );
    remove_meta_box( 'trackbacksdiv' , 'entries' , 'normal' );
    remove_meta_box( 'trackbacksdiv' , 'entries' , 'side' );
    remove_meta_box( 'tagsdiv-post_tag' , 'entries' , 'side' );
    remove_meta_box( 'categorydiv' , 'entries' , 'side' );
}
add_action( 'admin_menu' , 'remove_page_excerpt_field' );
?>