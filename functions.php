<?php

function epcl_register_custom_post_type() {
  require_once get_stylesheet_directory() . '/custom-post-type/custom-post-lps.php';
}
add_action('after_setup_theme', 'epcl_register_custom_post_type');

function epcl_load_landing_scripts() {
 //Estilo
 wp_enqueue_style( 'lp-style', get_stylesheet_directory_uri() . '/landing-page/assets/styles/css/style.css', array(), '1.0', 'all' );
 //Fonte
 wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap', array(), null);
 //AOS
 wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css', array(), null);
 //Animate
 wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), null);
 //JS
 wp_enqueue_script( 'lp-script', get_stylesheet_directory_uri() . '/landing-page/assets/scripts/index.js', array(), '1.0', true );
 //JS AOS
 wp_enqueue_script( 'lp-script-aos-unpkg', 'https://unpkg.com/aos@next/dist/aos.js', array(), null, true );
 wp_enqueue_script( 'lp-script-aos', get_stylesheet_directory_uri() . '/landing-page/assets/scripts/aos.js', array(), '1.0', true );
}

add_action('wp_enqueue_scripts', 'epcl_load_landing_scripts');
