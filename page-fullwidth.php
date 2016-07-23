<?php 
/**
 * Template name: Full width page, no sidebar
 *
 *
 */
get_header(); ?>
<div class="container container-normal">
<div class="row maincontent"><div class="col-sm-12"><?php the_breadcrumb(); ?></div></div>
      <div class="row maincontent">
        <div class="col-sm-12">
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
             
               <h2 class="page-title"><?php the_title(); ?></h2>
                  <div class="entry">
                    <?php the_content(); ?> 
                  </div>
              <?php endwhile; ?>
     
              <div class="navigation">
                <?php posts_nav_link(); ?>
              </div>
            <?php endif; ?>
        </div><!-- col-sm-12 -->
      <div><!-- row -->

  </div><!-- container container-normal -->

<?php get_footer(); ?>