<?php

function my_assets() {
  //bootstrap
  wp_enqueue_script('bootstrap_jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array( 'jquery' ),'',true );
  wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), false, true );
  wp_enqueue_script('bootstrap_popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
  wp_enqueue_script('bootstrap_cdn','https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ),'',true );
  //font awesome css
  wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' ); 
  // my styles

  if ( is_home_page() ) {
    wp_enqueue_style( 'style', get_template_directory() . 'style.css');
  }else {
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style/css/style.css');
  }

}
add_action( 'wp_enqueue_scripts', 'my_assets' );


define( '_img', get_stylesheet_directory_uri() . '/style/images' );

add_theme_support( 'post-thumbnails' );

?>