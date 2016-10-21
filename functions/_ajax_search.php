<?php 
/**
 * [functions.php]
 * Adding ajax search functionality to the theme
 * @return 
 */
 
add_action('wp_ajax_nopriv_ajax_search','ajax_search');
add_action('wp_ajax_ajax_search','ajax_search');
 
function ajax_search(){
 
    // creating a search query
    $args = array(
     
        'post_type' => 'entries',
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        's' =>$_POST['term'],
        'posts_per_page' =>5
     
    );
     
    $aj = new WP_Query( $args );
     
    // display results
    if($aj->have_posts()){        ?> 
         <h2 class="page-title">Search Results:</h2>
        <?php  
        while ($aj->have_posts()) {
            $aj->the_post(); 
            get_template_part('_single_entry');
        }

    } else { ?>
    
        <li><a href="#">Use more key words</a></li>
    
        <?php
    }

    die();
}


?>