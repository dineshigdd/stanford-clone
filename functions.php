<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles',11);

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),array(), rand(111,9999), 'all'  );
  
} 

/*  add_action( 'wp_enqueue_scripts', 'header_theme_css');
function header_theme_css(){
    wp_enqueue_style('header-style', get_template_directory_uri() . '/style.css' );
} */


function header_theme_css(){
    wp_enqueue_style(
        'header-style',
        get_stylesheet_directory_uri(). '/header/header.css'
     );
}
add_action( 'wp_enqueue_scripts', 'header_theme_css' );
 

function register_secondary_nav_menu() {
    register_nav_menu('secondary-menu',__( 'secondary menu' ));
}

add_action( 'init', 'register_secondary_nav_menu' ); 
    

?>

<?php
 add_action('wp_enqueue_scripts','hamburger_icon_script');
 function hamburger_icon_script(){
    wp_enqueue_script('header-script', get_stylesheet_directory_uri().'/header/header.js', array(), false, true);
 }
 //get_stylesheet_directory_uri() :- Retrieves stylesheet directory URI for current theme.
 //resource:https://webdesign.tutsplus.com/tutorials/how-to-add-custom-javascript-to-your-wordpress-site--cms-34368
?>

<script>



</script>