<?php
/**
 * Flat Blocks Classic functions and definitions
 *
 * Note that this file is not needed for this child theme's functionality but included
 * here if you want to add functions to it. 
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flat-blocks-classic
 * @since 1.0
 */

/**
 * Load our Classic HTML block patterns.
 *
 * Note that PHP block patterns are loaded automatically by WordPress. This is only
 * needed if we are using html-based patterns. 
 * 
 * Note that if you have a large number of these, you can place them in a separate
 * /inc/block-patterns.php file instead. The Flat Blocks parent theme will 
 * automatically load that file if it exists, so you don't need anything in here.
 */
/*
function flatblocks_classic_block_patterns( $block_patterns ) {

	$new_patterns = array(
		'my-new-pattern' => array( 
			'title' => __( 'My New Pattern', 'flat-blocks' ),
			'categories' => array ( 'flatblocks', 'text', 'featured' ),
			'blockTypes' => array ('core/heading', 'core/paragraph')
		)
	);	
	$block_patterns = array_merge( $block_patterns, $new_patterns );
	return $block_patterns;
	
}
add_filter('flatblocks_block_patterns', 'flatblocks_classic_block_patterns' );
*/

/**
 * Load our Classic Block Styles
 *
 * Note that if you have a large number of these, you can place them in a separate
 * /inc/block-styles.php file instead. The Flat Blocks parent theme will 
 * automatically load that file if it exists, so you don't need anything in here.
 * 
 * If you do have a large number, you may also want to use a separate 
 * /assets/css/custom-styles.css file as well. If so, then instead of using
 * 'inline_style', you should use 'style_handle' => 'flatblocks-child-custom-styles'.
 * The parent theme will automatically load that CSS file if it exists.
 */
/*
if ( ! function_exists( 'flatblocks_classic_register_block_styles' ) ) :

	function flatblocks_classic_register_block_styles( array $theme_styles ) {

		// Define custom styles and what blocks they apply to. Note that the prefix 
		//'is-style-' will automatically be added to the names.
		$custom_styles = array(
			'my-custom-style' 	=> array( esc_html__('My Custom Style', 'flat-blocks'), 
				array('button' ),
				'style_handle' 	=> 'flatblocks-child-style'
			)
		);

		return array_merge( $theme_styles, $custom_styles );
		
	} //end function
endif;
add_filter( 'flatblocks_custom_block_styles', 'flatblocks_classic_register_block_styles' );
*/

/**
 * Include additional WordPress Block Styles
 *
 * Overrides the parent theme from not including the core WordPress additional 
 * Block Patterns
 * 
*/
//add_filter('flatblocks_additional_core_styles', function() { return true; } );

/**
 * Include core WordPress Block Patterns
 *
 * Overrides the parent theme from removing the core WordPress Block Patterns
 * 
*/
add_filter('flatblocks_remove_core_patterns', function() { return false; } );
