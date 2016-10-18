<?php 
add_action('wp_ajax_nopriv_ajax_search','ajax_search');
add_action('wp_ajax__ajax_search','ajax_search');
 

function ajax_search(){
 
    // creating a search query
    $args = array(
     
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    's' =>$_POST['term'],
    'posts_per_page' =>5
     
    );
     
    $query = new WP_Query( $args );

     
    // display results
    if($query->have_posts()){
     
        while ($query->have_posts()) {
        
            $query->the_post();
            echo 'eeee';

            get_template_part('_single_entry');
            
        }
    }

    else { ?>

        <li>
            <a href="#">Use more key words</a>
        </li>
    
    <?php
     
    }

    exit;
} //end 
?>