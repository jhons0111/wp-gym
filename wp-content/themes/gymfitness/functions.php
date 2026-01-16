<?php

function gymfitness_menus(){

    register_nav_menus([
        'menu-principal' => __('Menu principal', 'gymfitness'),
        'menu-secundario' => __('Menu secundario', 'gymfitness'),
    ]);

}

add_action('init', 'gymfitness_menus');


function gymfitness_scripts_styles(){

    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Staatliches&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

function gymfitness_google_fonts_preconnect() {
  ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php
}
add_action('wp_head', 'gymfitness_google_fonts_preconnect', 1);

function gymfitness_setup() {

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gymfitness_setup', 1);
