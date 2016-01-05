<?php

/**
 * This file is responsible for loading function files.
 *
 * When adding a new function file, the naming convention is <action/filter name>.php
 * If there is no action or filter, the naming convention is <function name>.php
 */

require_once(__DIR__ . '/acf_add_options_page.php');
require_once(__DIR__ . '/after_theme_setup.php');
require_once(__DIR__ . '/comment_form_before.php');
require_once(__DIR__ . '/embed_oembed_html.php');
require_once(__DIR__ . '/comment_form_before.php');
require_once(__DIR__ . '/get_comments_number.php');
require_once(__DIR__ . '/starthere_custom_pings.php');
require_once(__DIR__ . '/the_title.php');
require_once(__DIR__ . '/widgets_init.php');
require_once(__DIR__ . '/wp_enqueue_scripts.php');
require_once(__DIR__ . '/wp_title.php');