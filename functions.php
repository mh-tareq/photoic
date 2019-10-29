<?php

require_once('lib/enqueue-assets.php');
require_once('lib/theme-support.php');


//sidebar registration
function photoic_sidebar_registration()
{
    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name'  =>  esc_html__('Primary Sidebar', 'photoic'),
        'before_widget' => '<div id="%1$s" class="%2$s sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 ml-3>',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'photoic_sidebar_registration');

//registering menus

if (!function_exists('_themename_nav_registration')) {

    function photoic_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => esc_html__('Primary Menu', 'photoic'),
            'footer_menu'  => esc_html__('Footer Menu', 'photoic'),
        ));
    }
    add_action('after_setup_theme', 'photoic_register_nav_menu');
}
