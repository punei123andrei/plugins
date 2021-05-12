<?php
/*
Plugin Name: Recipe
Plugin URI: http://traversymedia.com
Description: A simple wordpress plugin
Version: 1.0
Author: Deosebit Soft
Author URI: http://traversymedia.com
Text-domain: recipe
*/



if(!function_exists('add_action')){
	echo "Hi there I'm just a plugin";
	exit;
}



//Setup 


//Includes 
require_once(plugin_dir_path(__FILE__).'/includes/activate.php');
require_once(plugin_dir_path(__FILE__).'/includes/init.php');

//Hooks
register_activation_hook( __FILE__ , 'r_activate_plugin' );

add_action('init', 'recipe_init');

add_action('save_post_recipe', 'r_save_post_admin', 10, 3);
//Shortcodes


