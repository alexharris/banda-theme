<?php
/**
 * Template name: Entries
 *
 *
 */

get_header(); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php get_sidebar('entries'); ?>
        </div>
        <div class="col-sm-8 entries-body">
             <ul class="ajax-search"></ul>
          


                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="post">
                            <!-- section anchor link  -->
                             <div id="<?php print $post->post_name; ?>"></div>
                            <h2 class="page-title"><?php the_title(); ?></h2>

                            <?php
                                $sections = get_terms('section');

                                foreach ( $sections as $section ) { ?>
                                <!-- section title -->
                                <h3 class="entry-section-title"><?php print $section->name; ?></h3>
                                <p class="featured-text">
                                    <?php echo $section->description; ?>
                                </p>


                                    <?php
                                        $args = array(
                                          'post_type' => 'entries',
                                          'order' => 'ASC',
                                          'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'section',
                                                    'field'    => 'slug',
                                                    'terms'    => $section->slug
                                                ),
                                            ),
                                        );
                                        $entries = new WP_Query( $args );
                                        if( $entries->have_posts() ) {
                                          
                                          while( $entries->have_posts() ) {
                                              $entries->the_post(); ?>
                                            <?php get_template_part('_single_entry'); ?>
                                            <?php
                                          
                                          }; //end while entries ?>
                                          <hr />
                                              <?php
                                        }
                                      } //foreach
                                      ?>
                        </div><!-- /post -->
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
