<!DOCTYPE html>
<html lan="en">
  <head>
    <meta charset="utf-8"/>
    <title><?php bloginfo('name'); ?> </title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head();?>
  </head>

  <body>
    <header>
      <div class="jumbotron jumbotron-fluid" style="background-image: url(<?php header_image();?>)">
        <div class="container">
          <div class="row">
            <h1> <a class = "site-title" href="<?php get_home_url();?>"> <?php bloginfo('name');?> </a></h1>
          </div>
        </div>
      </div>
    </header>
