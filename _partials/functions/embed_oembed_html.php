<?php 

add_filter( 'embed_oembed_html', 'responsive_oembed_filter') ;
function responsive_oembed_filter($markup, $url, $attr, $post_ID) {
    return '<div class="video-container">' . $markup . '</div>';
}