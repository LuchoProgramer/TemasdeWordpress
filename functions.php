<?php
// Registrando estilos y scripts
function my_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri()); // Estilo principal del tema
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array(), false, true); // Script principal del tema
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// Registrando un menú de navegación
function register_my_menu() {
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'register_my_menu');

// Añadiendo soporte para imágenes destacadas (thumbnails)
add_theme_support('post-thumbnails');

// Función para obtener la URL del tema
function theme_url() {
    return get_template_directory_uri();
}
function enqueue_my_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('carousel-script', get_template_directory_uri() . '/carousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

