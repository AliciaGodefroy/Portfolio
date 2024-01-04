<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/scss/main.css' );
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

