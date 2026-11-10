<?php

function ubungstheme_styles() {
    wp_enqueue_style('ubungstheme-style', get_stylesheet_uri());
}

function ubungstheme_setup() {
    register_nav_menu('hauptmenue', 'Hauptnavigation');
}

add_action('wp_enqueue_scripts', 'ubungstheme_styles');
add_action('after_setup_theme', 'ubungstheme_setup');
