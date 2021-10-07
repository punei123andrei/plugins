<?php

function r_activate_php()
{
    if (version_compare(get_blog_info('version'), '5.0', '<')) {
        wp_die(__('Please update', 'recipe'));
    }
}
