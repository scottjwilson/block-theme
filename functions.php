<?php

function myblocks_myheader_block_init() {
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		return;
	}

	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}

	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}" );
	}
}
add_action( 'init', 'myblocks_myheader_block_init' );

/**
 * Enqueue Google Fonts for Harbor Light theme
 */
function harborlight_enqueue_fonts() {
	wp_enqueue_style(
		'harborlight-google-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Outfit:wght@300;400;500;600;700&display=swap',
		array(),
		null
	);
}
add_action( 'wp_enqueue_scripts', 'harborlight_enqueue_fonts' );
add_action( 'enqueue_block_editor_assets', 'harborlight_enqueue_fonts' );

/**
 * Enqueue global theme styles
 */
function harborlight_enqueue_styles() {
	wp_enqueue_style(
		'harborlight-global-styles',
		get_template_directory_uri() . '/assets/css/global.css',
		array( 'harborlight-google-fonts' ),
		filemtime( get_template_directory() . '/assets/css/global.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'harborlight_enqueue_styles' );
