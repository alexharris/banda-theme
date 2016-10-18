<div class="entry">
<div id="<?php print $post->post_name; ?>"></div>
<h3><?php the_title(); ?></h3>
<?php the_post_thumbnail('large'); ?>

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
    </div><!-- /card -->

  <?php } //end if count > 2 ?>