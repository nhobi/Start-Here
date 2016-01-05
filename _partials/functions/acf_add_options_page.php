<?php

// Registers ACF options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Global Theme Settings',
        'menu_title' => 'Global Theme Settings',
        'menu_slug' => 'site-settings',
        'icon_url' => 'dashicons-welcome-widgets-menus'
    ) );
}