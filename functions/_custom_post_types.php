<?php 
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
?>