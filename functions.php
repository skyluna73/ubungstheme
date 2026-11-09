<?php

function ubungstheme_styles() {
    wp_enqueue_style('ubungstheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ubungstheme_styles');