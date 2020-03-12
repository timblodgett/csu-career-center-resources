<?php
/**
 * Register a Team taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_team_taxonomies() {
	$labels = array(
		'name'              => _x( 'Teams', 'taxonomy general name', 'csu-career-center-resources' ),
		'singular_name'     => _x( 'Team', 'taxonomy singular name', 'csu-career-center-resources' ),
		'menu_name'         => __( 'Teams', 'csu-career-center-resources' ),
		'all_items'         => __( 'All Teams', 'csu-career-center-resources' ),
		'edit_item'         => __( 'Edit Team', 'csu-career-center-resources' ),
		'view_item'         => __( 'View Team', 'csu-career-center-resources' ),
		'update_item'       => __( 'Update Team', 'csu-career-center-resources' ),
		'add_new_item'      => __( 'Add New Team', 'csu-career-center-resources' ),
		'new_item_name'     => __( 'New Team Name', 'csu-career-center-resources' ),
		'search_items'      => __( 'Search Teams', 'csu-career-center-resources' ),
		'parent_item'       => __( 'Parent Team', 'csu-career-center-resources' ),
		'parent_item_colon' => __( 'Parent Team:', 'csu-career-center-resources' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'            => true,
		'show_in_nav_menus' => false,
		'show_admin_column' => true, // allow automatic creation of taxonomy columns on associated post-types table
		'hierarchical'      => true,
		'labels'            => $labels
	);

	register_taxonomy( 'team', array( 'team-member' ), $args );
}
add_action( 'init', 'create_team_taxonomies', 0 );
