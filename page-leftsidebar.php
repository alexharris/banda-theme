<?php 
/**
 * Template name: Page, left sidebar
 *
 */

get_header(); ?>
<div class="container container-normal">
   <div class="row maincontent"><div class="col-sm-12"><?php the_breadcrumb(); ?></div></div>
      <div class="row maincontent lower">
       
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        
        <?php get_sidebar(); ?>
        
        <div class="col-sm-8">
            <div class="post">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </div> <!-- /post -->
         
        <?php endwhile; ?>
 
            <div class="navigation">
                <?php posts_nav_link(); ?>
            </div>

        </div><!-- col-sm-8 -->
        <?php endif; ?>

   
<?php get_footer(); ?>
