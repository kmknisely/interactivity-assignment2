<?php get_header(); ?>

<div class=container>
    <div class="row">
      <main class="col-md-12">

        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();
        ?>

              <h2 class="entry_title"> <?php the_title();?></h2>
              <p class="post_information"> <?php echo "<span class='bold'>Published </span>" . get_the_date(); echo " | "; echo "<span class='bold'>Written By </span>" . get_the_author(); ?></p>

              <div class="single_post_featured_image"> <?php the_post_thumbnail("large");?>

              <?php the_content();?>

        <?php
            }//end of while loop
          }//end of if statement
        ?>
      </main>
    </div>
</div>

<?php get_footer(); ?>
