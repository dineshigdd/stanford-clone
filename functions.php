<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles',11);
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),array(), rand(111,9999), 'all'  );
  
}

function register_secondary_nav_menu() {
register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
}

add_action( 'init', 'register_secondary_nav_menu' ); 
    
  
?>

