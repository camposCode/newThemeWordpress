<?php

function simple_theme_setup(){
    // Featured Image Support
    add_action('after_theme_setup', 'simple_theme_setup');

    // Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_theme_support('post-thumbnails');
add_action('init', 'register_my_menus');
function register_my_menus(){
    register_nav_menus( array(
        'header' => __('Header')
    ) );
}
