<?php

function nh_script_enqueue() {
  wp_enqueue_style('normalizestyle', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');
  //wp_enqueue_style('skeletonstyle', get_template_directory_uri() . '/css/skeleton.css', array(), '1.0.0', 'all');
  wp_enqueue_style('simplegridstyle', get_template_directory_uri() . '/css/simplegrid.css', array(), '0.0.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.1.1', true);
}

add_action('wp_enqueue_scripts', 'nh_script_enqueue');

function nh_theme_setup() {
  register_nav_menu('header_nav', 'Header Nav Menu');
  register_nav_menu('footer_nav', 'Footer Nav Menu');
}

add_action('init', 'nh_theme_setup');

?>
