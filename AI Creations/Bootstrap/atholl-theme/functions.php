<?php
// Enqueue theme styles and scripts
function atholl_theme_enqueue_scripts() {
    wp_enqueue_style('atholl-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('atholl-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'atholl_theme_enqueue_scripts');

// Register navigation menu
function atholl_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'atholl-theme'),
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'atholl_theme_setup');
