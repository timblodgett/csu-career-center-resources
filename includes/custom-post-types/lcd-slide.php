<?php
/**
 * Register an LCD Slide post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_lcd_slide_init() {
	$labels = array(
		'name'                  => _x( 'Slides', 'post type general name', 'csu-career-center-resources' ),
		'menu_name'             => _x( 'Slides for LCD', 'admin menu', 'csu-career-center-resources' ), // Default is the same as `name`.
		'singular_name'         => _x( 'Slide', 'post type singular name', 'csu-career-center-resources' ),
		'name_admin_bar'        => _x( 'Slide for LCD', 'add new on admin bar', 'csu-career-center-resources' ), // Default is the same as `singular_name`.
		'add_new'               => _x( 'Add New', 'lcd-slide', 'csu-career-center-resources' ),
		'add_new_item'          => __( 'Add New Slide', 'csu-career-center-resources' ),
		'edit_item'             => __( 'Edit Slide', 'csu-career-center-resources' ),
		'new_item'              => __( 'New Slide', 'csu-career-center-resources' ),
		'view_item'             => __( 'View Slide', 'csu-career-center-resources' ),
		'view_items'            => __( 'View Slides', 'csu-career-center-resources' ),
		'search_items'          => __( 'Search Slides', 'csu-career-center-resources' ),
		'all_items'             => __( 'All Slides', 'csu-career-center-resources' ),
		'archives'              => __( 'Slide Archives', 'csu-career-center-resources' ),
		'attributes'            => __( 'Slide Attributes', 'csu-career-center-resources' ),
		'insert_into_item'      => __( 'Insert into slide', 'csu-career-center-resources' ),
		'uploaded_to_this_item' => __( 'Uploaded to this slide', 'csu-career-center-resources' ),
		'not_found'             => __( 'No slides found.', 'csu-career-center-resources' ),
		'not_found_in_trash'    => __( 'No slides found in Trash.', 'csu-career-center-resources' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              => false,
		'show_ui'             => true, // Default: value of public argument
		'menu_position'       => 90, // Default: null - defaults to below Comments
		'menu_icon'           => 'dashicons-slides', // Example: 'dashicons-video-alt'
		'supports'            => array( 'title', 'thumbnail' ),
		'rewrite'             => array( 'slug' => 'lcd-slides' )
	);

	register_post_type( 'lcd-slide', $args );
}
add_action( 'init', 'cpt_lcd_slide_init' );
