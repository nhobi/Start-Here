<?php

add_action('wp_enqueue_scripts', 'starthere_load_scripts');
function starthere_load_scripts()
{
    // Disable default jquery
    wp_deregister_script('jquery');
    
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', [], '', true );
    wp_register_script( 'underscore', get_template_directory_uri() . '/js/underscore.js', [], '', true );
    wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', [], '', true );

    wp_enqueue_script('jquery');
    wp_enqueue_script('underscore');
    wp_enqueue_script('script');
}