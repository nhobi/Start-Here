<?php

add_filter('wp_title', 'starthere_filter_wp_title');
function starthere_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}