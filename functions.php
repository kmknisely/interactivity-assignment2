<?php
function custom_theme_scripts() {

  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //main css
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts','custom_theme_scripts');

$custom_image_header = array(
  'width' => 2000,
  'height' => 300,
  'uploads' => true,
);

//Add Header
add_theme_support('custom-header', $custom_image_header);

//Add Featured Image
add_theme_support('post-thumbnails');




?>
