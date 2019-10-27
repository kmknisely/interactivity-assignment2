<?php
/*
Template Name: Right Sidebar Page Layout
Template Post Type: page, post
*/
?>



<?php get_header(); ?>

<div class=container>
    <div class="row">
      <main class="col-md-8">
        <!--Wordpress loop goes in and grabs the page data. If you want to do anything with page, you need to use the loop, just fyi -->
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


      <aside class="col-md-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
</div>

<?php get_footer(); ?>
