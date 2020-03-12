<?php
/**
 * Register a Resource post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_resource_init() {
	$labels = array(
		'name'                  => _x( 'Resources', 'post type general name', 'csu-career-center-resources' ),
		'singular_name'         => _x( 'Resource', 'post type singular name', 'csu-career-center-resources' ),
		'add_new'               => _x( 'Add New', 'resource', 'csu-career-center-resources' ),
		'add_new_item'          => __( 'Add New Resource', 'csu-career-center-resources' ),
		'edit_item'             => __( 'Edit Resource', 'csu-career-center-resources' ),
		'new_item'              => __( 'New Resource', 'csu-career-center-resources' ),
		'view_item'             => __( 'View Resource', 'csu-career-center-resources' ),
		'view_items'            => __( 'View Resources', 'csu-career-center-resources' ),
		'search_items'          => __( 'Search Resources', 'csu-career-center-resources' ),
		'all_items'             => __( 'All Resources', 'csu-career-center-resources' ),
		'archives'              => __( 'Resource Archives', 'csu-career-center-resources' ),
		'attributes'            => __( 'Resource Attributes', 'csu-career-center-resources' ),
		'insert_into_item'      => __( 'Insert into resource', 'csu-career-center-resources' ),
		'uploaded_to_this_item' => __( 'Uploaded to this resource', 'csu-career-center-resources' ),
		'not_found'             => __( 'No resources found.', 'csu-career-center-resources' ),
		'not_found_in_trash'    => __( 'No resources found in Trash.', 'csu-career-center-resources' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'menu_icon'           => 'dashicons-analytics',
		'hierarchical'        => false, // Default: false
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ), // Default: title and editor
		'has_archive'         => false,
		'rewrite'             => array( 'slug' => 'resources' ),
		'can_export'          => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'rest_base'           => 'resources'
	);

	register_post_type( 'resource', $args );
}
add_action( 'init', 'cpt_resource_init' );



/* Add Meta Boxes */
function career_center_add_meta_boxes() {
	add_meta_box(
		'career_center_priority', // Unique ID
		'Priority', // Box title
		'career_center_priority_html', // Content callback, must be of type callable
		array( 'resource', 'post' ), // Post types
		'side' // context (normal, side, advanced)
	);
}
add_action( 'add_meta_boxes', 'career_center_add_meta_boxes' );

/* Resource Priority */
function career_center_priority_html( $post ) {
	$all_day = get_post_meta( $post->ID, '_career_center_featured', true );
?>
	<table class="form-table">
		<tbody>
			<tr>
				<td>
					<input type="checkbox" id="career_center_featured" name="career_center_featured" <?php checked( $all_day ); ?>>
					<label for="career_center_featured"><?php _e( 'Featured', 'csu-hcfw-resources' ); ?></label>
				</td>
			</tr>
		</tbody>
	</table>
<?php
}

function career_center_priority_postdata( $post_id ) {
	if ( isset( $_POST['career_center_featured'] ) ) {
		update_post_meta(
			$post_id,
			'_career_center_featured',
			true
		);
	} else {
		update_post_meta(
			$post_id,
			'_career_center_featured',
			false
		);
	}
}
add_action( 'save_post', 'career_center_priority_postdata' );
