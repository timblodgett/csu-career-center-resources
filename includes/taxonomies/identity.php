<?php
/**
 * Register an identity taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_identity_taxonomies() {
	$labels = array(
		'name'              => _x( 'Identities', 'taxonomy general name', 'csu-career-center-resources' ),
		'singular_name'     => _x( 'Identity', 'taxonomy singular name', 'csu-career-center-resources' ),
		'menu_name'         => __( 'Identities', 'csu-career-center-resources' ),
		'all_items'         => __( 'All Identities', 'csu-career-center-resources' ),
		'edit_item'         => __( 'Edit Identity', 'csu-career-center-resources' ),
		'view_item'         => __( 'View Identity', 'csu-career-center-resources' ),
		'update_item'       => __( 'Update Identity', 'csu-career-center-resources' ),
		'add_new_item'      => __( 'Add New Identity', 'csu-career-center-resources' ),
		'new_item_name'     => __( 'New Identity Name', 'csu-career-center-resources' ),
		'search_items'      => __( 'Search Identities', 'csu-career-center-resources' ),
		'parent_item'       => __( 'Parent Identity', 'csu-career-center-resources' ),
		'parent_item_colon' => __( 'Parent Identity:', 'csu-career-center-resources' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'            => true,
		'show_in_rest'      => true,
		'show_in_nav_menus' => false,
		'show_admin_column' => false, // allow automatic creation of taxonomy columns on associated post-types table
		'hierarchical'      => true,
		'labels'            => $labels
	);

	register_taxonomy( 'identity', array( 'post', 'resource' ), $args );
}
add_action( 'init', 'create_identity_taxonomies', 0 );
