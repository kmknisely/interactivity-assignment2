<?php get_header(); ?>

<div class=container>
    <div class="row">
      <main class="col-md-12">
        <!--Wordpress loop goes in and grabs the post data. If you want to do anything with posts, you need to use the loop, just fyi -->
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();
        ?>

              <h2 class="entry_title"> <?php the_title();?></h2>
              <?php the_content();?>




        <?php
            }//end of while loop
          }//end of if statement
        ?>
      </main>
    </div>
</div>

<?php get_footer(); ?>
