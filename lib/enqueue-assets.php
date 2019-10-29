<?php
function photoic_enqueue_styles()
{
    wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Karma');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0.0', 'all');

    //bootstrap js
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_style('main_stylesheet', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'photoic_enqueue_styles');
