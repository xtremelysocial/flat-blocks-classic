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
 */

// Uncomment the following to add an Edit link to each page and post for Admins only
// Since there is no full-site template tag for edit page or post, add one here
if ( ! function_exists( 'flatblocks_classic_add_edit_link' ) ) :
	function flatblocks_classic_add_edit_link ( $content ) {
		$post_id = get_the_ID();
		if( is_singular() and current_user_can( 'edit_post', $post_id ) ) {
			$content = $content . '<p class="edit-post-link has-small-font-size has-text-align-center dashicons dashicons-edit" style="display: block"><a href="' 
				. get_edit_post_link( $post_id ) 
				. '">' . __("Edit", "flat-blocks") 
				. '</a></p>';
		}
		return $content;	
	}
endif; // end ! function_exists
add_filter('the_content', 'flatblocks_classic_add_edit_link');
