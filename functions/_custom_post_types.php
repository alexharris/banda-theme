<?php 
//
// Add Custom Post Types
//
// Register Custom Post Type
function entries_post_type() {

  $labels = array(
    'name'                  => _x( 'Entries', 'Post Type General Name', 'slimdocs-theme' ),
    'singular_name'         => _x( 'Entry', 'Post Type Singular Name', 'slimdocs-theme' ),
    'menu_name'             => __( 'Entries', 'slimdocs-theme' ),
    'name_admin_bar'        => __( 'Entries', 'slimdocs-theme' ),
    'archives'              => __( 'Entry Archives', 'slimdocs-theme' ),
    'parent_item_colon'     => __( 'Parent Entry:', 'slimdocs-theme' ),
    'all_items'             => __( 'All Entries', 'slimdocs-theme' ),
    'add_new_item'          => __( 'Add New Entry', 'slimdocs-theme' ),
    'add_new'               => __( 'Add Entry', 'slimdocs-theme' ),
    'new_item'              => __( 'New Entry', 'slimdocs-theme' ),
    'edit_item'             => __( 'Edit Entry', 'slimdocs-theme' ),
    'update_item'           => __( 'Update Entry', 'slimdocs-theme' ),
    'view_item'             => __( 'View Entry', 'slimdocs-theme' ),
    'search_items'          => __( 'Search Entry', 'slimdocs-theme' ),
    'not_found'             => __( 'Not found', 'slimdocs-theme' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'slimdocs-theme' ),
    'featured_image'        => __( 'Featured Image', 'slimdocs-theme' ),
    'set_featured_image'    => __( 'Set featured image', 'slimdocs-theme' ),
    'remove_featured_image' => __( 'Remove featured image', 'slimdocs-theme' ),
    'use_featured_image'    => __( 'Use as featured image', 'slimdocs-theme' ),
    'insert_into_item'      => __( 'Insert into entry', 'slimdocs-theme' ),
    'uploaded_to_this_item' => __( 'Uploaded to this entry', 'slimdocs-theme' ),
    'items_list'            => __( 'Entries list', 'slimdocs-theme' ),
    'items_list_navigation' => __( 'Entries list navigation', 'slimdocs-theme' ),
    'filter_items_list'     => __( 'Filter entries list', 'slimdocs-theme' ),
  );
  $args = array(
    'label'                 => __( 'Entry', 'slimdocs-theme' ),
    'description'           => __( 'Individual entry posts', 'slimdocs-theme' ),
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