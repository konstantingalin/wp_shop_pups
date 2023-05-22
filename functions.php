<?php

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_footer', 'theme_scripts');
add_action('after_setup_theme', 'pups_setup');

function theme_styles() {
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/index.css');
}

function theme_scripts() {
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts/index.js');
}

function pups_setup() {
  add_theme_support( 'woocommerce' );
  add_theme_support( 'post-thumbnail' );
  add_theme_support( 'title-tag' );

  register_nav_menus ( 
    array(
      'top-menu' => 'top_menu__top_bar'
    )
  );
}

require_once get_template_directory() . '/inc/woocommerce-hooks.php';