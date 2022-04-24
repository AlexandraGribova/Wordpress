<?php



function load_bootstrap(){
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js');
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-theme', 'https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css' );
    
    wp_enqueue_script( 'bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;0,700;0,900;1,800&display=swap' );


    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
});
add_theme_support('post-thumbnails');
add_theme_support('title-tag ');
add_theme_support('custom-logo');
add_image_size( 'spec_thumb', 250);
?>
