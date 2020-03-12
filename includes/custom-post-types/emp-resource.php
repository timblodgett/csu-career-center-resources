<?php
/**
 * Register an Employer Resource post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_emp_resource_init() {
	$labels = array(
		'name'                  => _x( 'Employer Resources', 'post type general name', 'csu-career-center-resources' ),
		'singular_name'         => _x( 'Employer Resource', 'post type singular name', 'csu-career-center-resources' ),
		'add_new'               => _x( 'Add New', 'emp_resource', 'csu-career-center-resources' ),
		'add_new_item'          => __( 'Add New Employer Resource', 'csu-career-center-resources' ),
		'edit_item'             => __( 'Edit Employer Resource', 'csu-career-center-resources' ),
		'new_item'              => __( 'New Employer Resource', 'csu-career-center-resources' ),
		'view_item'             => __( 'View Employer Resource', 'csu-career-center-resources' ),
		'view_items'            => __( 'View Employer Resources', 'csu-career-center-resources' ),
		'search_items'          => __( 'Search Employer Resources', 'csu-career-center-resources' ),
		'all_items'             => __( 'All Employer Resources', 'csu-career-center-resources' ),
		'archives'              => __( 'Employer Resource Archives', 'csu-career-center-resources' ),
		'attributes'            => __( 'Employer Resource Attributes', 'csu-career-center-resources' ),
		'insert_into_item'      => __( 'Insert into employer resource', 'csu-career-center-resources' ),
		'uploaded_to_this_item' => __( 'Uploaded to this employer resource', 'csu-career-center-resources' ),
		'not_found'             => __( 'No employer resources found.', 'csu-career-center-resources' ),
		'not_found_in_trash'    => __( 'No employer resources found in Trash.', 'csu-career-center-resources' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'menu_icon'           => 'dashicons-id-alt',
		'hierarchical'        => false, // Default: false
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ), // Default: title and editor
		'has_archive'         => false,
		'rewrite'             => array( 'slug' => 'employer-resources' ),
		'can_export'          => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'rest_base'           => 'resources'
	);

	register_post_type( 'emp_resource', $args );
}
add_action( 'init', 'cpt_emp_resource_init' );
