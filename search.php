<?php 
/**
 * The template for displaying Search Results pages
 *
 */

get_header(); ?>
<div class="container">
      <div class="row">
        <div class="col-sm-4">
            <?php get_sidebar('entries'); ?>
        </div>

        <div class="col-sm-8">
        <h2 class="page-title">Search Results: <span><?php  echo get_search_query(); ?></span></h2>
        <?php if(have_posts()) : ?>
        
        <?php while(have_posts()) : the_post(); ?>
         
        <div class="post">
          <?php get_template_part('_single_entry'); ?>
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


  
  </div><!-- /col-sm-8 -->
</div> <!-- /conatiner -->
<?php get_footer(); ?>
