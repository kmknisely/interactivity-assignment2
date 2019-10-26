<?php
/*
Template Name: Home Page Layout
Template Post Type: page
*/
?>


<?php get_header(); ?>

<div class=container>
  <main>

    <!--Homepage About Us Widget -->
    <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('about-us'); ?>
        </div>
    </div>

    <!--Homepage Bottom 3 Widgets -->
    <div class="row">
        <!-- Bottom Left -->
        <div class="col-md-4">
          <?php dynamic_sidebar('bottom-left-home-page'); ?>
        </div>

        <!-- Bottom Middle -->
        <div class="col-md-4">
          <?php dynamic_sidebar('bottom-middle-home-page'); ?>
        </div>

        <!-- Bottom Right -->
        <div class="col-md-4">
          <?php dynamic_sidebar('bottom-right-home-page'); ?>
        </div>
    </div>



  </main>
</div>

<?php get_footer(); ?>
