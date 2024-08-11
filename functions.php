<?php
require_once('lib/bootstrap_5_wp_nav_menu_walker.php');

register_nav_menu('main-menu', 'Main menu');

add_theme_support('custom-logo');
add_theme_support('post-thumbnails'); 

//Main stylesheet compiled with sass
wp_enqueue_style('main', get_stylesheet_directory_uri() . '/main.css', array(), filemtime(get_template_directory() . '/main.css'), false);

//Custom image sizes
add_image_size('medium-square', 500, 500, true);
add_image_size('small-square', 150, 150, true);