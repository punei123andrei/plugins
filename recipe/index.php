<?php
/*
Plugin Name: Recipe Plugin
*/


if (!function_exists('add_action')) {
    echo "Exit";
    exit;
}


//Setup

// Includes
include('includes/activate.php');
include('includes/init.php');
include('save-post.php');

//Hooks
register_activation_hook(__FILE__, 'r_activate_file');
add_action('init', 'recipe_init');
add_action('save_post_recipe', 'r_save_post_admin', 10, 3);


// Shortcodes