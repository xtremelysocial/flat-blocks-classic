<?php
/**
 * Block Styles
 *
 * Adds all of our custom styles for selection in the Block Editor
 * 
 * Note the corresponding CSS is in /assets/css/custom-styles.css. That stylesheet
 * is loaded automatically by the parent theme with style handle of 
 * 'flatblocks-child-custom-styles' as denoted below.
 * 
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package flat-blocks-classic
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function flatblocks_classic_register_block_styles() {

		/*--------------------------------------------------------------
		# Alternate Button styles
		--------------------------------------------------------------*/
		// Button: Alternate Solid
		register_block_style(
			'core/button',
			array(
				'name'  => 'default-alt',
				'label' => esc_html__( 'Default Alt', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-child-custom-styles'
			)
		);

		// Button: Alternate Outline
		register_block_style(
			'core/button',
			array(
				'name'  => 'outline-alt',
				'label' => esc_html__( 'Outline Alt', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-child-custom-styles'
			)
		);
	}
	add_action( 'init', 'flatblocks_classic_register_block_styles' );
}
