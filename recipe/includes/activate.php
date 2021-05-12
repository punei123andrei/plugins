<?php 


function r_activate_plugin(){
	if(version_compare(get_bloginfo('version'), '5.0', '<')) {
		wp_die(__('Yu must have wordpress 5.0 or later installed', 'recipe'));
	}
}	