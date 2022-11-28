<?php
/*
	=====================
		Custom Post Types
	=====================	
*/

add_theme_support('post_thumbnails');

function register_my_cpt_our_rums() {
    $labels = [
        'name' => __('Rums'),
        'singular-name' => __('Rum'),
    ];

    $args = [
        "label" => __( "Rums" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "our-rums"],
        "query_var" => true,
        "supports" => [ "title", "thumbnail", ],
        "taxonomies" => [],
        "show_in_graphql" => false,
        "menu_position" => null,
    ];

    register_post_type('our-rums', $args);
}

add_action('init', 'register_my_cpt_our_rums');
