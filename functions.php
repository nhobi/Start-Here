<?php

add_action('after_setup_theme', 'starthere_setup');
function starthere_setup()
{
    load_theme_textdomain('starthere', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width))
        $content_width = 640;
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu'
    ));
}

add_action('comment_form_before', 'starthere_enqueue_comment_reply_script');
function starthere_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_filter('the_title', 'starthere_title');
function starthere_title($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'starthere_filter_wp_title');
function starthere_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'starthere_widgets_init');
function starthere_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'starthere'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

function starthere_custom_pings($comment)
{
	    $GLOBALS['comment'] = $comment;
	?>
	<li <?php
	    comment_class();
	?> id="li-comment-<?php
	    comment_ID();
	?>"><?php
	    echo comment_author_link();
	?></li>
	<?php
}

add_filter('get_comments_number', 'starthere_comments_number');
function starthere_comments_number($count)
{
    if (!is_admin()) {
        global $id;
        $comments_by_type =& separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

// Adds a container to WordPress' sweet WYSIWYG video embeds for responsive goodness
add_filter( 'embed_oembed_html', 'responsive_oembed_filter') ;
function responsive_oembed_filter($markup, $url, $attr, $post_ID) {
    return '<div class="video-container">' . $markup . '</div>';
}

// Registers ACF options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Global Theme Settings',
        'menu_title' => 'Global Theme Settings',
        'menu_slug' => 'site-settings',
        'icon_url' => 'dashicons-welcome-widgets-menus'
    ) );
}

// Register and enqueue custom scripts and libraries
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