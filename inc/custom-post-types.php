<?php
/*
	=====================
		Custom Post Types
	=====================	
*/

// function register_my_cpt_our_rums() {
//     $labels = [
//         'name' => __('Rums'),
//         'singular-name' => __('Rum'),
//     ];

//     $args = [
//         "label" => __( "Rums" ),
//         "labels" => $labels,
//         "description" => "",
//         "public" => true,
//         "publicly_queryable" => true,
//         "show_ui" => true,
//         "show_in_rest" => true,
//         "rest_base" => "",
//         "rest_controller_class" => "WP_REST_Posts_Controller",
//         "has_archive" => true,
//         "show_in_menu" => true,
//         "show_in_nav_menus" => true,
//         "delete_with_user" => false,
//         "exclude_from_search" => false,
//         "capability_type" => "post",
//         "map_meta_cap" => true,
//         "hierarchical" => false,
//         "can_export" => false,
//         "rewrite" => [ "slug" => "our-rums"],
//         "query_var" => true,
//         "supports" => [ "title", "thumbnail", ],
//         "taxonomies" => [],
//         "show_in_graphql" => false,
//         "menu_position" => null,
//     ];

//     register_post_type('our-rums', $args);
// }

// add_action('init', 'register_my_cpt_our_rums');

function register_my_cpt_locations() {
    $labels = [
        'name' => __('Locations'),
        'singular-name' => __('Location'),
    ];

    $args = [
        "label" => __( "Locations" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "locations"],
        "query_var" => true,
        "supports" => [ "title",],
        "taxonomies" => [],
        "show_in_graphql" => false,
        "menu_position" => null,
    ];

    register_post_type('locations', $args);
}

add_action('init', 'register_my_cpt_locations');

function register_my_cpt_cocktails() {
    $labels = [
        'name' => __('Cocktails'),
        'singular-name' => __('Cocktail'),
    ];

    $args = [
        "label" => __( "Cocktails" ),
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
        "rewrite" => [ "slug" => "cocktails"],
        "query_var" => true,
        "supports" => [ "title","thumbnail"],
        "taxonomies" => [],
        "show_in_graphql" => false,
        "menu_position" => null,
    ];

    register_post_type('cocktails', $args);
}

add_action('init', 'register_my_cpt_cocktails');