<?php
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails');

function register_my_menus() {
  register_nav_menus(
    array( 
    'header_menu' => __( 'Header' ), 
    'footer_menu' => __( 'Footer' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

if ( function_exists('register_sidebar') ){
  register_sidebar();
}