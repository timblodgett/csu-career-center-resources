<?php
/**
 * Register a Success Story post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_success_story_init() {
	$labels = array(
		'name'                  => _x( 'Success Stories', 'post type general name', 'csu-career-center-resources' ),
		'singular_name'         => _x( 'Success Story', 'post type singular name', 'csu-career-center-resources' ),
		'add_new'               => _x( 'Add New', 'success-story', 'csu-career-center-resources' ),
		'add_new_item'          => __( 'Add New Success Story', 'csu-career-center-resources' ),
		'edit_item'             => __( 'Edit Success Story', 'csu-career-center-resources' ),
		'new_item'              => __( 'New Success Story', 'csu-career-center-resources' ),
		'view_item'             => __( 'View Success Story', 'csu-career-center-resources' ),
		'view_items'            => __( 'View Success Stories', 'csu-career-center-resources' ),
		'search_items'          => __( 'Search Success Stories', 'csu-career-center-resources' ),
		'all_items'             => __( 'All Success Stories', 'csu-career-center-resources' ),
		'archives'              => __( 'Success Story Archives', 'csu-career-center-resources' ),
		'attributes'            => __( 'Success Story Attributes', 'csu-career-center-resources' ),
		'insert_into_item'      => __( 'Insert into success story', 'csu-career-center-resources' ),
		'uploaded_to_this_item' => __( 'Uploaded to this success story', 'csu-career-center-resources' ),
		'not_found'             => __( 'No success stories found.', 'csu-career-center-resources' ),
		'not_found_in_trash'    => __( 'No success stories found in Trash.', 'csu-career-center-resources' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'supports'            => array( 'title', 'thumbnail', 'excerpt', 'revisions' ), // Default: title and editor
		'has_archive'         => true, // Default: false
		'rewrite'             => array( 'slug' => 'success-stories' )
	);

	register_post_type( 'success-story', $args );
}
add_action( 'init', 'cpt_success_story_init' );
