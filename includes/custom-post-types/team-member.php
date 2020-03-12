<?php
/**
 * Register a Team Member post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_team_member_init() {
	$labels = array(
		'name'                  => _x( 'Team Members', 'post type general name', 'csu-career-center-resources' ),
		'singular_name'         => _x( 'Team Member', 'post type singular name', 'csu-career-center-resources' ),
		'add_new'               => _x( 'Add New', 'team member', 'csu-career-center-resources' ),
		'add_new_item'          => __( 'Add New Team Member', 'csu-career-center-resources' ),
		'edit_item'             => __( 'Edit Team Member', 'csu-career-center-resources' ),
		'new_item'              => __( 'New Team Member', 'csu-career-center-resources' ),
		'view_item'             => __( 'View Team Member', 'csu-career-center-resources' ),
		'view_items'            => __( 'View Team Members', 'csu-career-center-resources' ),
		'search_items'          => __( 'Search Team Members', 'csu-career-center-resources' ),
		'all_items'             => __( 'All Team Members', 'csu-career-center-resources' ),
		'archives'              => __( 'Team Member Archives', 'csu-career-center-resources' ),
		'attributes'            => __( 'Team Member Attributes', 'csu-career-center-resources' ),
		'insert_into_item'      => __( 'Insert into team member', 'csu-career-center-resources' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team member', 'csu-career-center-resources' ),
		'not_found'             => __( 'No team members found.', 'csu-career-center-resources' ),
		'not_found_in_trash'    => __( 'No team members found in Trash.', 'csu-career-center-resources' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => false, // Default: false
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ), // Default: title and editor
		'has_archive'         => false,
		'rewrite'             => array( 'slug' => 'team-members' ),
		'can_export'          => true
	);

	register_post_type( 'team-member', $args );
}
add_action( 'init', 'cpt_team_member_init' );
