<?php
require_once('lib/bootstrap_5_wp_nav_menu_walker.php');

register_nav_menu('main-menu', 'Main menu');

add_theme_support('custom-logo');
add_theme_support('post-thumbnails'); 

function westart_enqueue_style() {
    //Main stylesheet compiled with sass
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/main.css');
}
add_action('wp_enqueue_scripts', 'westart_enqueue_style');

//Custom image sizes
add_image_size('medium-square', 500, 500, true);
add_image_size('small-square', 150, 150, true);