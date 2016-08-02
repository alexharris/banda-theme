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
        <div class="col-sm-8">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="post">
                            <h1 class="page-title"><?php the_title(); ?></h1>
                            <div class="entry">
                                <?php
                                    $args = array(
                                      'post_type' => 'entries',
                                      'order' => 'ASC'
                                    );
                                    $entries = new WP_Query( $args );
                                    if( $entries->have_posts() ) {
                                      while( $entries->have_posts() ) {
                                          $entries->the_post();
                                        ?>
                                        <div id="<?php print $post->post_name; ?>"></div>
                                        <h3><?php the_title(); ?></h3>

                                        <?php the_content(); ?>
                                        <hr />
                                          <?php
                                      }
                                    }
                                  ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
