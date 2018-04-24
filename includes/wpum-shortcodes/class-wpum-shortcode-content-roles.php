<?php
/**
 * Handles the display of user roles specific content shortcode generator.
 *
 * @package     wp-user-manager
 * @copyright   Copyright (c) 2018, Alessandro Tesoro
 * @license     https://opensource.org/licenses/GPL-3.0 GNU Public License
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class WPUM_Shortcode_Content_Roles extends WPUM_Shortcode_Generator {

	/**
	 * Inject the editor for this shortcode.
	 */
	public function __construct() {
		$this->shortcode['title'] = esc_html__( 'Specific roles only content' );
		$this->shortcode['label'] = esc_html__( 'Specific roles only content' );
		parent::__construct( 'wpum_restrict_to_user_roles' );
	}

	/**
	 * Setup fields for the shortcode window.
	 *
	 * @return array
	 */
	public function define_fields() {
		return [
			array(
				'type'    => 'textbox',
				'name'    => 'roles',
				'label'   => esc_html__( 'Comma separated user role(s)' ),
				'tooltip' => esc_html__( 'List of user roles for which the content will be available.' )
			)
		];
	}

}

new WPUM_Shortcode_Content_Roles;
