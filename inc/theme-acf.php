
<?php
// Check function exists.
if ( ! function_exists( 'acf_register_block_type' ) ) {
	return;
}

define( 'ACF_BLOCKS_PATH', get_stylesheet_directory() . '/inc/acf-blocks/' );
define( 'ACF_BLOCKS_URI', get_stylesheet_directory_uri() . '/inc/acf-blocks/' );

if ( function_exists( 'require_all_subdir_file' ) ) {
	require_all_subdir_file( ACF_BLOCKS_PATH, 1 );
}


$allBlocks = glob( ACF_BLOCKS_PATH . "/*/*.php" );

if ( $allBlocks ) {
	foreach ( $allBlocks as $block ) {
		require_once $block;
	}
}

