<?php
/**
 * Register a resource type taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_resource_type_taxonomies() {
	$labels = array(
		'name'              => _x( 'Types', 'taxonomy general name', 'csu-career-center-resources' ),
		'singular_name'     => _x( 'Type', 'taxonomy singular name', 'csu-career-center-resources' ),
		'menu_name'         => __( 'Types', 'csu-career-center-resources' ),
		'all_items'         => __( 'All Types', 'csu-career-center-resources' ),
		'edit_item'         => __( 'Edit Type', 'csu-career-center-resources' ),
		'view_item'         => __( 'View Type', 'csu-career-center-resources' ),
		'update_item'       => __( 'Update Type', 'csu-career-center-resources' ),
		'add_new_item'      => __( 'Add New Type', 'csu-career-center-resources' ),
		'new_item_name'     => __( 'New Type Name', 'csu-career-center-resources' ),
		'search_items'      => __( 'Search Types', 'csu-career-center-resources' ),
		'parent_item'       => __( 'Parent Type', 'csu-career-center-resources' ),
		'parent_item_colon' => __( 'Parent Type:', 'csu-career-center-resources' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'            => true,
		'show_in_nav_menus' => false,
		'show_admin_column' => false, // allow automatic creation of taxonomy columns on associated post-types table
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'type' ),
		'labels'            => $labels
	);

	register_taxonomy( 'resource-type', array( 'resource', 'emp_resource' ), $args );
}
add_action( 'init', 'create_resource_type_taxonomies', 0 );
