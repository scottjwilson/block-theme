<?php

/**
 * Register pattern categories
 */
function harborlight_register_pattern_categories() {
	register_block_pattern_category( 'harborlight', array(
		'label' => __( 'Harbor Light', 'harborlight' )
	));
}
add_action( 'init', 'harborlight_register_pattern_categories' );

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
 * Add preconnect for Google Fonts and preload hero image (LCP element)
 */
function harborlight_resource_hints() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'harborlight_resource_hints', 0 );

/**
 * Preload hero image for above-the-fold content
 */
function harborlight_preload_assets() {
	if ( is_front_page() ) {
		echo '<link rel="preload" as="image" imagesrcset="' . esc_url( get_template_directory_uri() . '/assets/images/hero-600w.webp' ) . ' 600w, ' . esc_url( get_template_directory_uri() . '/assets/images/hero.webp' ) . ' 1200w" imagesizes="(max-width: 1024px) 100vw, 50vw" href="' . esc_url( get_template_directory_uri() . '/assets/images/hero.webp' ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'harborlight_preload_assets', 1 );

/**
 * Load Google Fonts non-render-blocking on frontend, normal in editor
 */
function harborlight_enqueue_fonts() {
	$fonts_url = 'https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Outfit:wght@300;400;500;600;700&display=swap';

	if ( is_admin() ) {
		wp_enqueue_style( 'harborlight-google-fonts', $fonts_url, array(), null );
		return;
	}

	// Load async: media="print" swapped to "all" on load
	echo '<link rel="stylesheet" href="' . esc_url( $fonts_url ) . '" media="print" onload="this.media=\'all\'">' . "\n";
	echo '<noscript><link rel="stylesheet" href="' . esc_url( $fonts_url ) . '"></noscript>' . "\n";
}
add_action( 'wp_head', 'harborlight_enqueue_fonts', 2 );
add_action( 'enqueue_block_editor_assets', 'harborlight_enqueue_fonts' );

/**
 * Inline global theme styles to eliminate render-blocking CSS
 */
function harborlight_inline_styles() {
	if ( is_admin() ) {
		wp_enqueue_style(
			'harborlight-global-styles',
			get_template_directory_uri() . '/assets/css/global.css',
			array(),
			filemtime( get_template_directory() . '/assets/css/global.css' )
		);
		return;
	}

	$css_file = get_template_directory() . '/assets/css/global.css';
	if ( file_exists( $css_file ) ) {
		echo '<style>' . file_get_contents( $css_file ) . '</style>' . "\n";
	}
}
add_action( 'wp_head', 'harborlight_inline_styles', 3 );

/**
 * Add meta description for SEO
 */
function harborlight_meta_description() {
	if ( is_front_page() ) {
		echo '<meta name="description" content="Harbor Light Foundation provides shelter, job training, mental health support, and community programs to illuminate the path forward for those in need.">' . "\n";
	}
}
add_action( 'wp_head', 'harborlight_meta_description', 1 );
