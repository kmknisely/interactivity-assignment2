<?php
/*
Template Name: Left Sidebar Page Layout
Template Post Type: page, post
*/
?>



<?php get_header(); ?>

<div class=container>
    <div class="row">

      <aside class="col-md-3">
        <?php get_sidebar(); ?>
      </aside>


      <main class="col-md-9">
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

    </div>
</div>

<?php get_footer(); ?>
