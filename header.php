<!DOCTYPE html>
<html lan="en">
  <head>
    <meta charset="utf-8"/>
    <title><?php bloginfo('name'); ?> </title>
    <!--Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,900&display=swap" rel="stylesheet">
    <!--Css Link -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head();?>
  </head>

  <body>
    <header>

      <!-- Header Image on top of page -->
      <div class="jumbotron jumbotron-fluid" style="background-image: url(<?php header_image();?>)">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1> <a class = "site-title" href="<?php echo home_url('/');?>"> <?php bloginfo('name');?> </a></h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Menu -->
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12">
            <nav>
              <?php
              if(has_nav_menu('top-menu')){
                wp_nav_menu(array(
                  'theme_location'  => 'top-menu',
                  'container_class' => 'top-menu-class'
                ));
              } else{
                echo'Please select a top menu through the dashboard';
              }
              ?>
            </nav>
          </div>
        </div>
      </div>
    </header>
