<?php

add_action('wp_enqueue_scripts', 'register_code');

function register_code()
{
    // Enqueue Stylesheets
    wp_register_style('register-style', get_stylesheet_uri());
    wp_enqueue_style('register-style');


    // Enqueue my scripts.
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);

    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery.blockUI.min.js', array(), null, true);

    wp_enqueue_script('jquery-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), null, true);

    wp_enqueue_script('cart-fragment', get_template_directory_uri() . '/js/cart-fragments.min.js', array(), null, false);

    wp_enqueue_script('fixed-header', get_template_directory_uri() . '/js/fixedheader.min.js', array(), null, true);

    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotop.min.js', array(), null, true);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.min.js', array(), null, true);

    wp_enqueue_script('cookie', get_template_directory_uri() . '/js/js.cookie.min.js', array(), null, true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true);

    wp_enqueue_script('themify-builder', get_template_directory_uri() . '/js/themify.builder.script.min.js', array(), null, true);

    wp_enqueue_script('themify-script', get_template_directory_uri() . '/js/themify.script.min.js', array(), null, true);

    wp_enqueue_script('themify-sidemenu', get_template_directory_uri() . '/js/themify.sidemenu.min.js', array(), null, true);

    wp_enqueue_script('wc', get_template_directory_uri() . '/js/wc.min.js', array(), null, true);

    wp_enqueue_script('wc2', get_template_directory_uri() . '/js/wc2.min.js', array(), null, true);

}
