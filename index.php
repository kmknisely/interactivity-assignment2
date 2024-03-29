<?php get_header(); ?>

<!-- Wordpress Loop -->

<div class="container">
  <div class="row">
    <?php
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <div class="col-md-4">
          <h3 class="title"> <?php the_title(); ?></h3>

          <div class="post-featured-image">
            <?php the_post_thumbnail('medium');?>
          </div>

          <p class="ital"> <?php echo "Published: " . get_the_date();?> </p>
          <p class="ital"> <?php echo "Written By: ". get_the_author(); ?> </p>
          <p> <?php the_excerpt();?> </p>

          <a class="btn btn-primary btn-sma" href="<?php the_permalink(); ?>"> Read More </a>
        </div>
        <?php
      }//end of the while loop
    }//end of the if statement

    ?>
  </div>
</div>


<?php get_footer(); ?>
