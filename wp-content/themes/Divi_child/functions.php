<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'home-style', get_stylesheet_directory_uri() . '/css/home.css' );

    wp_enqueue_style( 'inner-style', get_stylesheet_directory_uri() . '/css/inner.css' );

    wp_enqueue_style( 'font-style', get_stylesheet_directory_uri() . '/font.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
