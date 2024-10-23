<?php
/**
 * Ovation Bookstore: Block Patterns
 *
 * @since Ovation Bookstore 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Ovation Bookstore 1.0
 *
 * @return void
 */
function ovation_bookstore_register_block_patterns() {
	$block_pattern_categories = array(
		'ovation-bookstore'    => array( 'label' => __( 'Ovation Bookstore', 'ovation-bookstore' ) ),
	);

	$block_pattern_categories = apply_filters( 'ovation_bookstore_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'ovation_bookstore_register_block_patterns', 9 );
