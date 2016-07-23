<?php 
/**
 * The template for displaying Search Results pages
 *
 */

get_header(); ?>
<div class="container container-normal">
      <div class="row maincontent lower">
        <div class="col-sm-8">
        <h2 class="page-title">Search Results: <span><?php  echo get_search_query(); ?></span></h2>
        <?php if(have_posts()) : ?>
        
        <?php while(have_posts()) : the_post(); ?>
         
        <div class="post">
        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
 
 
            <div class="entry">
            <?php the_excerpt(); ?>

 
            </div>
 
        </div>
         
<?php endwhile; ?>


 
    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div>
 
 <?php else : ?>

      <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
          <h2 class="entry-title">Nothing Found</h2>
        </header>

        <div class="entry-content">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords</p>
          <?php get_search_form(); ?>
        </div><!-- .entry-content -->
      </article><!-- #post-0 -->

<?php endif; ?>


  
    </div><!-- col-sm-8 -->
<?php get_sidebar(); ?> 
<?php get_footer(); ?>
