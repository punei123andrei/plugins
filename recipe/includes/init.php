<?php

// Register Custom Post Type
function recipe_init()
{

    $labels = array(
        'name'                  => _x('Recipes', 'Recipe General Name', 'recipe'),
        'singular_name'         => _x('Recipe', 'Recipe Singular Name', 'recipe'),
        'menu_name'             => __('Recipes', 'recipe'),
        'name_admin_bar'        => __('Recipe', 'recipe'),
        'archives'              => __('Recipe Archives', 'recipe'),
        'attributes'            => __('Recipe Attributes', 'recipe'),
        'parent_item_colon'     => __('Parent Recipe:', 'recipe'),
        'all_items'             => __('All recipe', 'recipe'),
        'add_new_item'          => __('Add New Recipe', 'recipe'),
        'add_new'               => __('Add New', 'recipe'),
        'new_item'              => __('New Recipe', 'recipe'),
        'edit_item'             => __('Edit Recipe', 'recipe'),
        'update_item'           => __('Update Recipe', 'recipe'),
        'view_item'             => __('View Recipe', 'recipe'),
        'view_items'            => __('View recipe', 'recipe'),
        'search_items'          => __('Search Recipe', 'recipe'),
        'not_found'             => __('Not found', 'recipe'),
        'not_found_in_trash'    => __('Not found in Trash', 'recipe'),
        'featured_image'        => __('Featured Image', 'recipe'),
        'set_featured_image'    => __('Set featured image', 'recipe'),
        'remove_featured_image' => __('Remove featured image', 'recipe'),
        'use_featured_image'    => __('Use as featured image', 'recipe'),
        'insert_into_item'      => __('Insert into Recipe', 'recipe'),
        'uploaded_to_this_item' => __('Uploaded to this Recipe', 'recipe'),
        'items_list'            => __('Items list', 'recipe'),
        'items_list_navigation' => __('Items list navigation', 'recipe'),
        'filter_items_list'     => __('Filter recipe list', 'recipe'),
    );
    $args = array(
        'label'                 => __('Recipe', 'recipe'),
        'description'           => __('Recipe Description', 'recipe'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comment'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true
    );
    register_post_type('recipe', $args);
}
