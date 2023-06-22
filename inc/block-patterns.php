<?php
/**
 * Block Patterns
 *
 * Loads our HTML block patterns. 
 * 
 * Note that PHP block patterns are loaded automatically by WordPress. This
 * is for our html-based patterns. 
 * 
 * Note that the Flat Blocks parent theme automatically loads this file if it exists, 
 * so we don't need to include this file in the child theme functions.php.
 * 
 * @package flat-blocks-classic
 */

function flatblocks_classic_block_patterns( $block_patterns ) {

	$new_patterns = array(
		'text-welcome' => array( 
			'title' => __( 'Welcome to our Site', 'flat-blocks' ),
			'categories' => array ( 'flatblocks', 'text', 'featured' ),
			'blockTypes' => array ('core/heading', 'core/paragraph')
		)
	);	
	$block_patterns = array_merge( $block_patterns, $new_patterns );
	return $block_patterns;
	
}
add_filter('flatblocks_block_patterns', 'flatblocks_classic_block_patterns' );
