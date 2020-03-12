<?php
/**
 * Register a Partner post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_partner_init() {
	$labels = array(
		'name'                  => _x( 'Partners', 'post type general name', 'csu-career-center-resources' ),
		'singular_name'         => _x( 'Partner', 'post type singular name', 'csu-career-center-resources' ),
		'add_new'               => _x( 'Add New', 'success-story', 'csu-career-center-resources' ),
		'add_new_item'          => __( 'Add New Partner', 'csu-career-center-resources' ),
		'edit_item'             => __( 'Edit Partner', 'csu-career-center-resources' ),
		'new_item'              => __( 'New Partner', 'csu-career-center-resources' ),
		'view_item'             => __( 'View Partner', 'csu-career-center-resources' ),
		'view_items'            => __( 'View Partners', 'csu-career-center-resources' ),
		'search_items'          => __( 'Search Partners', 'csu-career-center-resources' ),
		'all_items'             => __( 'All Partners', 'csu-career-center-resources' ),
		'archives'              => __( 'Partner Archives', 'csu-career-center-resources' ),
		'attributes'            => __( 'Partner Attributes', 'csu-career-center-resources' ),
		'insert_into_item'      => __( 'Insert into partner', 'csu-career-center-resources' ),
		'uploaded_to_this_item' => __( 'Uploaded to this partner', 'csu-career-center-resources' ),
		'not_found'             => __( 'No partners found.', 'csu-career-center-resources' ),
		'not_found_in_trash'    => __( 'No partners found in Trash.', 'csu-career-center-resources' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'menu_icon'           => 'dashicons-building',
		'supports'            => array( 'title', 'thumbnail', 'revisions' ), // Default: title and editor
		'has_archive'         => false, // Default: false
		'rewrite'             => array( 'slug' => 'partners' )
	);

	register_post_type( 'partner', $args );
}
add_action( 'init', 'cpt_partner_init' );
