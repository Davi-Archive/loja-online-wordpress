<?php

// Activate Woocommerce on code
function cafe_add_commerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'cafe_add_commerce_support');

// Scripts & Css
add_action('wp_enqueue_scripts', 'register_code');

function register_code()
{
    // Enqueue Stylesheets
    wp_register_style(
        'register-style',
        get_stylesheet_uri(),
        [],
        '1.0.0',
        false
    );
    wp_enqueue_style('register-style');


    // Enqueue my scripts.

    // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);

    // wp_enqueue_script('add-to-cart', get_template_directory_uri() . '/js/add-to-cart.min.js', array(), '7.6.0', true);
}


// change image size
function cafe_custom_images()
{
    add_image_size('slide', 1030, 800, ['center', 'top']);
    update_option('medium_crop', 1);
}
add_action('after_setup_theme', 'cafe_custom_images');

// product shop per page
function cafe_loop_shop_per_page(){
    return 6;
}
add_filter('loop_shop_per_page', 'cafe_loop_shop_per_page');