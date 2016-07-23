<?php 
/**
 * Template name: Entries
 *
 *
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-9">
            <div class="row">
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
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
