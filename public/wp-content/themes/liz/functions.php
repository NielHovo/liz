<?php 
function my_theme_enqueue_styles() {
    // Enqueue the stylesheet
    wp_enqueue_style( 'my-custom-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function register_my_menus() {
    register_nav_menus(
    array(
    'main-menu' => __( 'Main Menu' ),
    'extra-menu' => __( 'Extra Menu' )
    )
    );
    }
    add_action( 'init', 'register_my_menus' );
?>

