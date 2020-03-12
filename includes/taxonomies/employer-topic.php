<?php
/**
 * Register an employer topic taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_emp_topic_taxonomies() {
	$labels = array(
		'name'              => _x( 'Topics', 'taxonomy general name', 'csu-career-center-resources' ),
		'singular_name'     => _x( 'Topic', 'taxonomy singular name', 'csu-career-center-resources' ),
		'menu_name'         => __( 'Topics', 'csu-career-center-resources' ),
		'all_items'         => __( 'All Topics', 'csu-career-center-resources' ),
		'edit_item'         => __( 'Edit Topic', 'csu-career-center-resources' ),
		'view_item'         => __( 'View Topic', 'csu-career-center-resources' ),
		'update_item'       => __( 'Update Topic', 'csu-career-center-resources' ),
		'add_new_item'      => __( 'Add New Topic', 'csu-career-center-resources' ),
		'new_item_name'     => __( 'New Topic Name', 'csu-career-center-resources' ),
		'search_items'      => __( 'Search Topics', 'csu-career-center-resources' ),
		'parent_item'       => __( 'Parent Topic', 'csu-career-center-resources' ),
		'parent_item_colon' => __( 'Parent Topic:', 'csu-career-center-resources' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'            => true,
		'show_in_rest'      => true,
		'show_in_nav_menus' => false,
		'show_admin_column' => false, // allow automatic creation of taxonomy columns on associated post-types table
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'emp-type' ),
		'labels'            => $labels
	);

	register_taxonomy( 'emp-topic', array( 'emp_resource' ), $args );
}
add_action( 'init', 'create_emp_topic_taxonomies', 0 );
