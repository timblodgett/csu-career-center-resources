<?php
/**
 * Register an employment type taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_employment_type_taxonomies() {
	$labels = array(
		'name'              => _x( 'Employment Types', 'taxonomy general name', 'csu-career-center-resources' ),
		'singular_name'     => _x( 'Employment Type', 'taxonomy singular name', 'csu-career-center-resources' ),
		'menu_name'         => __( 'Employment Types', 'csu-career-center-resources' ),
		'all_items'         => __( 'All Employment Types', 'csu-career-center-resources' ),
		'edit_item'         => __( 'Edit Employment Type', 'csu-career-center-resources' ),
		'view_item'         => __( 'View Employment Type', 'csu-career-center-resources' ),
		'update_item'       => __( 'Update Employment Type', 'csu-career-center-resources' ),
		'add_new_item'      => __( 'Add New Employment Type', 'csu-career-center-resources' ),
		'new_item_name'     => __( 'New Employment Type Name', 'csu-career-center-resources' ),
		'search_items'      => __( 'Search Employment Types', 'csu-career-center-resources' ),
		'parent_item'       => __( 'Parent Employment Type', 'csu-career-center-resources' ),
		'parent_item_colon' => __( 'Parent Employment Type:', 'csu-career-center-resources' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'            => true,
		'show_in_nav_menus' => false,
		'show_admin_column' => false, // allow automatic creation of taxonomy columns on associated post-types table
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'emp-type' ),
		'labels'            => $labels
	);

	register_taxonomy( 'employment-type', array( 'emp_resource' ), $args );
}
add_action( 'init', 'create_employment_type_taxonomies', 0 );
