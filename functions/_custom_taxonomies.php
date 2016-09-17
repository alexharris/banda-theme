<?php 
function section_init() {
  // create section taxonomy
    $args = array(
        'show_admin_column' => true,
        'label' => __( 'Section' ),
        // 'rewrite' => array( 'slug' => 'section' ),
    );
  register_taxonomy('section','entries',$args
  );
}
add_action( 'init', 'section_init' );
?>