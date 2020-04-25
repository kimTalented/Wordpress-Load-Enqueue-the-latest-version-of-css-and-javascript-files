<?php

//add to your functions.php file

function my_custom_files() {

  //use the current date and time as the file version
  $cache_buster = date("YmdHi");
  
  wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css', $cache_buster, 'all'  );
  wp_enqueue_script( 'my-scripts', get_stylesheet_directory_uri() . '/scripts.js', array(), $cache_buster, true );
  wp_enqueue_style( 'childstyle' );

}
add_action( 'wp_enqueue_scripts', 'my_custom_files', 11);

?>