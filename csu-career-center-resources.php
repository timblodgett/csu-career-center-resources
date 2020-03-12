<?php
/**
 * Plugin Name: Career Center Resources
 * Plugin URI:  https://web.colostate.edu/
 * Description: Custom resources for CSU Career Center.
 * Author:      CSU Web Communications
 * Author URI:  https://web.colostate.edu/
 *
 * Version:     1.0.0
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: csu-career-center-resources
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;



/**
 * Call in necessary files.
 */
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-types/resource.php';
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-types/emp-resource.php';
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-types/team-member.php';
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-types/success-story.php';
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-types/partner.php';
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-types/lcd-slide.php';

require plugin_dir_path( __FILE__ ) . 'includes/taxonomies/resource-type.php';
require plugin_dir_path( __FILE__ ) . 'includes/taxonomies/topic.php';
require plugin_dir_path( __FILE__ ) . 'includes/taxonomies/identity.php';
require plugin_dir_path( __FILE__ ) . 'includes/taxonomies/career-interest.php';
require plugin_dir_path( __FILE__ ) . 'includes/taxonomies/team.php';
require plugin_dir_path( __FILE__ ) . 'includes/taxonomies/employment-type.php';
require plugin_dir_path( __FILE__ ) . 'includes/taxonomies/employer-topic.php';



function create_api_posts_meta_field() {
	register_rest_field( 'resource', '_career_center_featured', array(
		'get_callback' => 'get_post_meta_for_api',
		'schema'       =>  null
	) );
}
add_action( 'rest_api_init', 'create_api_posts_meta_field' );

function get_post_meta_for_api( $object ) {
	// return the id of the post object array
	return get_post_meta( $object['id'] );
}
