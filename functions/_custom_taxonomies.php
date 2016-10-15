<?php 
// Register Custom Taxonomy
function custom_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Sections', 'Taxonomy General Name', 'slim_docs' ),
    'singular_name'              => _x( 'Section', 'Taxonomy Singular Name', 'slim_docs' ),
    'menu_name'                  => __( 'Section', 'slim_docs' ),
    'all_items'                  => __( 'All Sections', 'slim_docs' ),
    'parent_item'                => __( 'Parent Section', 'slim_docs' ),
    'parent_item_colon'          => __( 'Parent Section:', 'slim_docs' ),
    'new_item_name'              => __( 'New Section Name', 'slim_docs' ),
    'add_new_item'               => __( 'Add New Section', 'slim_docs' ),
    'edit_item'                  => __( 'Edit Section', 'slim_docs' ),
    'update_item'                => __( 'Update Section', 'slim_docs' ),
    'view_item'                  => __( 'View Section', 'slim_docs' ),
    'separate_items_with_commas' => __( 'Separate sections with commas', 'slim_docs' ),
    'add_or_remove_items'        => __( 'Add or remove sections', 'slim_docs' ),
    'choose_from_most_used'      => __( 'Choose from the most used sections', 'slim_docs' ),
    'popular_items'              => __( 'Popular Sections', 'slim_docs' ),
    'search_items'               => __( 'Search Sections', 'slim_docs' ),
    'not_found'                  => __( 'Not Found', 'slim_docs' ),
    'no_terms'                   => __( 'No Sections', 'slim_docs' ),
    'items_list'                 => __( 'Sections list', 'slim_docs' ),
    'items_list_navigation'      => __( 'Sections list navigation', 'slim_docs' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'section', array( 'entries' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );
?>