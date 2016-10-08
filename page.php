<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div><!-- /col -->
        <div class="col-sm-9">

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="post">
                        <h2 class="page-title"><?php the_title(); ?></h2>
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /container -->

<?php get_footer(); ?>