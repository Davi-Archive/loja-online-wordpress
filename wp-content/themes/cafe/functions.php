<?php

add_action('wp_enqueue_scripts', 'register_code');

function register_code()
{
    // Enqueue Stylesheets
    wp_register_style('register-style', get_stylesheet_uri());
    wp_enqueue_style('register-style');


    // Enqueue my scripts.
    
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);

    // wp_enqueue_script('add-to-cart', get_template_directory_uri() . '/js/add-to-cart.min.js', array(), '7.6.0', true);
}
