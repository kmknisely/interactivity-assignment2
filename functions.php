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


//Add Header Image
$custom_image_header = array(
  'width' => 2000,
  'height' => 300,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

//Add Featured Image
add_theme_support('post-thumbnails');

//Menus
function register_my_menus(){
  register_nav_menus(array(
    'top-menu'      => __('Top Menu'),
    'footer-left'   => __('Left Footer Menu'),
    'footer-middle' => __('Middle Footer Menu'),
    'footer-right'  => __('Right Footer Menu'),


  ));
}

add_action('init','register_my_menus');

//Widgets
function blank_widgets_init(){
  //Homepage About Us
  register_sidebar(array(
    'name'          => ('About Us'),
    'id'            => 'about-us',
    'description'   => 'Home page about us',
    'before_widget' => '<div class="about-us">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="about-us-widget-title">',
    'after_title'   => '</h3>',
  ));
  //Homepage Bottom Left
  register_sidebar(array(
    'name'          => ('Bottom Left Home Page'),
    'id'            => 'bottom-left-home-page',
    'description'   => 'Bottom left section on the home page',
    'before_widget' => '<div class="widget-bottom-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="bottom-left-widget-title">',
    'after_title'   => '</h3>',
  ));
  //Homepage Bottom Middle
  register_sidebar(array(
    'name'          => ('Bottom Middle Home Page'),
    'id'            => 'bottom-middle-home-page',
    'description'   => 'Bottom middle section on the home page',
    'before_widget' => '<div class="widget-bottom-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="bottom-middle-widget-title">',
    'after_title'   => '</h3>',
  ));
  //Homepage Bottom Right
  register_sidebar(array(
    'name'          => ('Bottom Right Home Page'),
    'id'            => 'bottom-right-home-page',
    'description'   => 'Bottom right section on the home page',
    'before_widget' => '<div class="widget-bottom-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="bottom-right-widget-title">',
    'after_title'   => '</h3>',
  ));
  //Sidebar Right
  register_sidebar(array(
    'name'          => ('Right Sidebar'),
    'id'            => 'right-sidebar',
    'description'   => 'Right sidebar area for template',
    'before_widget' => '<div class="widget-right-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="right-sidebar-widget-title">',
    'after_title'   => '</h3>',
  ));
  //Sidebar Left
  register_sidebar(array(
    'name'          => ('Left Sidebar'),
    'id'            => 'left-sidebar',
    'description'   => 'Left sidebar area for template',
    'before_widget' => '<div class="widget-left-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="left-sidebar-widget-title">',
    'after_title'   => '</h3>',
  ));


}

add_action('widgets_init', 'blank_widgets_init');



?>
