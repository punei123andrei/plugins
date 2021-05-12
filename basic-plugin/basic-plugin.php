<?php 
/**
 * Plugin Name:       My Basics Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Punei Andrei
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


 if(!defined('ABSPATH')){
  exit;
}



function wpplugin_settings_page(){
	add_menu_page(
		'Basic plugin',
		'Plugin Menu',
		'manage_options',
		'wpplugin',
		'wpplugin_settings_page_markup',
		'dashicons-wordpress-alt'
	);


	add_submenu_page(
		'wpplugin',
		'Plugin Feature 2',
		'Feature 2',
		'manage_options',
		'wpplugin-feature-2',
		'wpplugin_settings_page_markup'
	);


	//add_posts_page();
	//add_media_page();
	//add_pages_page();
	// add_comments_page();
	// add_theme_page();
	// add_plugins_page();
	//add_users_page();
	// add_management_page();
	//add_options_page();

	add_theme_page(
		__('Cool SUbpage', 'wpplugin'),
		__('Custom Subpage', 'wpplugin'),
		'manage_options',
		'wpplugin-plugin-subpage',
		'custom_class_function'
	);
}

add_action('admin_menu', 'wpplugin_settings_page');

function custom_class_function(){
	 ?>
	<div><?php esc_html_e('This is the metadata to be returned', 'wpplugin'); ?></div>
	<?php  
}

function wpplugin_settings_page_markup(){
if(!current_user_can('manage_options')){ return; } ?> <div class="wrap">
<h1><?php esc_html_e(get_admin_page_title()); ?></h1> <p><?php
esc_html_e('Some content', 'wpplugin'); ?></p> </div>

 <?php 
}


// Add a link to your settings page in your plugin
function wpplugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings', 'wpplugin' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wpplugin_add_settings_link' );



