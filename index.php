<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="container">

      <div class="row">
        <div class="col-sm-9">
 
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
        <div class="post">
        <h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         
            <div class="entry">   
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?> 
            </div>
        </div>
        <?php endwhile; ?>
         
        <div class="navigation">
        <?php posts_nav_link(); ?>
        </div>
         
        <?php endif; ?>
    </div>
    </div>
<?php get_footer(); ?>
