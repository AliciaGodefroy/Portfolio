<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/scss/main.css' );
    wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper@11.0.5/swiper-bundle.min.js', array(), '6.8.4', true);
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.8.4');
    wp_enqueue_script('swiper-init', get_stylesheet_directory_uri() . '/swiper-init.js', array(), '1.0', true);


}

function register_my_menus() {
    register_nav_menus( array(
        'header-menu' => 'Menu de navigation du header',
        'footer-menu'=> 'Menu de navigation du footer',
    ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

// Inclure le fichier pour la déclaration des blocs ACF
require_once get_template_directory() . '/includes/add-gutenberg-acf.php';

require_once get_template_directory() . '/includes/add-custom-post-type.php';

// Blocs ACF

function portfolio_register_acf_blocks() {
    register_block_type( __DIR__ . '/template-parts/bloc-parts/b-form/block.json' );
}
// Here we call our portfolio_register_acf_block() function on init.
add_action( 'init', 'portfolio_register_acf_blocks' );