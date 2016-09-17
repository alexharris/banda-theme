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
                            <?php
                                $sections = get_terms('section');

                                foreach ( $sections as $section ) {?>
                                <h2 class="entry-section-title"><?php print $section->name; ?></h2>


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
                                              $entries->the_post();
                                            ?>
                                            <div class="entry">
                                            <div id="<?php print $post->post_name; ?>"></div>
                                            <h3><?php the_title(); ?></h3>

                                            <?php the_content(); ?>
                                            </div>
                                            <?php
                                              if(count(get_post_custom()) > 2) { ?>
                                                  <div class="card">
                                                      <div class="card-header">
                                                        Custom Fields
                                                      </div>
                                                      <div class="card-block">

                                                          <dl class="row">
                                                              <?php
                                                                  // get custom fields
                                                                  $custom_field_keys = get_post_custom();
                                                                  //go through them
                                                                  foreach ( $custom_field_keys as $key => $value ) {
                                                                      //check the first character to make sure these are not wordpress default "_edit" custom fields
                                                                      $valuet = trim($key);
                                                                      if ( '_' == $valuet{0} )
                                                                          continue;
                                                              ?>
                                                              <dt class="col-sm-3"><?php echo $key; ?></dt>
                                                              <dd class="col-sm-9"><?php echo $value[0]; ?></dd>
                                                              <?php  } ?>
                                                          </dl>
                                                    </div>
                                                  </div>
                                              </div>
                                              <?php
                                              };
                                          ?>
                                            <hr />
                                              <?php
                                          }
                                        }
                                      ?>

                                <?php }
                            ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
