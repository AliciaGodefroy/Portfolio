<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/scss/main.css' );
    wp_enqueue_style('aos-style', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4');
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.8.4');

    wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper@11.0.5/swiper-bundle.min.js', array(), '6.8.4', true);
    wp_enqueue_script('swiper-init', get_stylesheet_directory_uri() . '/swiper-init.js', array(), '1.0', true);
    wp_enqueue_script('aos-script', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('aos-init', get_stylesheet_directory_uri() . '/aos-init.js', array(), '1.0', true);
    // Activer AOS avec vos options personnalisées
    wp_add_inline_script('aos-script', 'jQuery(document).ready(function($) { AOS.init({ duration: 800, offset: 120, easing: "ease-in-out", once: true }); });');
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