<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

    <div id="secondary" class="widget-area" role="complementary">
      <div class="col-xs-12 banda-sidebar-container"  data-clampedwidth=".widget-area">
    	<div id="banda-sidebar">
    		<ul class="list-unstyled banda-nav nav">
                <?php
                    $sections = get_terms('section');

                    foreach ( $sections as $section ) {?>
                            <li class="banda-nav-section-title"><?php print $section->name; ?></li>
                			<li>
                				<ul class="list-unstyled banda-nav-section active">
                                    <?php
                                    // $slug = $section->slug;
                                    //                     var_dump($slug);
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

                                        if ($entries->have_posts()) : while ($entries->have_posts()) : $entries->the_post();
                                    ?>
                                        <li><a href="#<?php print $post->post_name; ?>"><?php the_title(); ?></a></li>
                                    <?php
                                        endwhile; endif;
                                    ?>
                				</ul>
                			</li>
                    <?php }
                ?>

    		</ul>

    	</div>
    </div>
</div><!-- #secondary -->
