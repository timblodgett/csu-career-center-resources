<?php
/**
 * Register a Career Interest taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_career_interest_taxonomies() {
	$labels = array(
		'name'              => _x( 'Career Interests', 'taxonomy general name', 'csu-career-center-resources' ),
		'singular_name'     => _x( 'Career Interest', 'taxonomy singular name', 'csu-career-center-resources' ),
		'menu_name'         => __( 'Career Interests', 'csu-career-center-resources' ),
		'all_items'         => __( 'All Career Interests', 'csu-career-center-resources' ),
		'edit_item'         => __( 'Edit Career Interest', 'csu-career-center-resources' ),
		'view_item'         => __( 'View Career Interest', 'csu-career-center-resources' ),
		'update_item'       => __( 'Update Career Interest', 'csu-career-center-resources' ),
		'add_new_item'      => __( 'Add New Career Interest', 'csu-career-center-resources' ),
		'new_item_name'     => __( 'New Career Interest Name', 'csu-career-center-resources' ),
		'search_items'      => __( 'Search Career Interests', 'csu-career-center-resources' ),
		'parent_item'       => __( 'Parent Career Interest', 'csu-career-center-resources' ),
		'parent_item_colon' => __( 'Parent Career Interest:', 'csu-career-center-resources' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'            => true,
		'show_in_rest'      => true,
		'show_admin_column' => false, // allow automatic creation of taxonomy columns on associated post-types table
		'hierarchical'      => true,
		'labels'            => $labels
	);

	register_taxonomy( 'career-interest', array( 'post', 'resource', 'success-story' ), $args );
}
add_action( 'init', 'create_career_interest_taxonomies', 0 );
