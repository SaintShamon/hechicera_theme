<?php
/*
	=====================
		Custom Taxonomies
	=====================	
*/

function wporg_register_taxonomy_category() {
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Categories' ),
		'all_items'         => __( 'All Categories' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category Name' ),
		'menu_name'         => __( 'Category' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'category' ],
	);
	register_taxonomy( 'category', [ 'locations' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_category' );

function wporg_register_taxonomy_country() {
	$labels = array(
		'name'              => _x( 'Countries', 'taxonomy general name' ),
		'singular_name'     => _x( 'Country', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Countries' ),
		'all_items'         => __( 'All Countries' ),
		'parent_item'       => __( 'Parent Country' ),
		'parent_item_colon' => __( 'Parent Country:' ),
		'edit_item'         => __( 'Edit Country' ),
		'update_item'       => __( 'Update Country' ),
		'add_new_item'      => __( 'Add New Country' ),
		'new_item_name'     => __( 'New Country Name' ),
		'menu_name'         => __( 'Country' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'country' ],
	);
	register_taxonomy( 'country', [ 'locations' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_country' );

function wporg_register_taxonomy_city() {
	$labels = array(
		'name'              => _x( 'Cities', 'taxonomy general name' ),
		'singular_name'     => _x( 'City', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Cities' ),
		'all_items'         => __( 'All Cities' ),
		'parent_item'       => __( 'Parent City' ),
		'parent_item_colon' => __( 'Parent City:' ),
		'edit_item'         => __( 'Edit City' ),
		'update_item'       => __( 'Update City' ),
		'add_new_item'      => __( 'Add New City' ),
		'new_item_name'     => __( 'New City Name' ),
		'menu_name'         => __( 'City' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'city' ],
	);
	register_taxonomy( 'city', [ 'locations' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_city' );

function display_select_filter() {
    global $post_type;
    if ($post_type == 'locations') { // must change post_type to yours
        $taxonomy = 'country'; // must change taxonomy to yours
        $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => false]);
        ?>
<label class="screen-reader-text" for="<?= $taxonomy; ?>_filter"><?= esc_html__("Contry", 'my-domain'); ?></label>
<select name="<?= $taxonomy; ?>" id="<?= $taxonomy; ?>_filter">
    <option value=""><?php _e("All countries", 'my-domain'); ?></option>
    <?php foreach ($terms as $k => $v): ?>
    <?php $selected = (!empty($_GET[$taxonomy]) && $_GET[$taxonomy] === $v->slug) ? ' selected="selected"' : ''; ?>
    <option value="<?= $v->slug; ?>" <?= $selected; ?>><?= $v->name; ?></option>
    <?php endforeach; ?>
</select>
<?php
    }
	if ($post_type == 'locations') { // must change post_type to yours
        $taxonomy = 'city'; // must change taxonomy to yours
        $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => false]);
        ?>
<label class="screen-reader-text" for="<?= $taxonomy; ?>_filter"><?= esc_html__("City", 'my-domain'); ?></label>
<select name="<?= $taxonomy; ?>" id="<?= $taxonomy; ?>_filter">
    <option value=""><?php _e("All cities", 'my-domain'); ?></option>
    <?php foreach ($terms as $k => $v): ?>
    <?php $selected = (!empty($_GET[$taxonomy]) && $_GET[$taxonomy] === $v->slug) ? ' selected="selected"' : ''; ?>
    <option value="<?= $v->slug; ?>" <?= $selected; ?>><?= $v->name; ?></option>
    <?php endforeach; ?>
</select>
<?php
    }
}

add_action('restrict_manage_posts', 'display_select_filter');