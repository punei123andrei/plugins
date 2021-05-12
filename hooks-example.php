<?php 
/*
Plugin Name: Hooked
Plugin URI: http://traversymedia.com
Description: A simple wordpress plugin
Version: 1.0
Author: Deosebit Soft
Author URI: http://traversymedia.com
Text-domain: recipe
*/


// add_filter('the_title', 'ju_title');

// function ju_title($title){
// 	return 'Ermas' . $title;
// }

function shout(){
	// echo 'Action hook';
}

add_action('wp_footer', 'shout');



function ju_custom_footer(){
	do_action('ju_custom_footer');
}

function kill_wp(){
	echo 'kill wp';
}


add_action('wp_footer', 'ju_custom_footer');

add_action('ju_custom_footer', 'kill_wp');