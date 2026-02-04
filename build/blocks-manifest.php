<?php
// This file is generated. Do not modify it manually.
return array(
	'about' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/about',
		'version' => '0.1.0',
		'title' => 'About',
		'category' => 'widgets',
		'icon' => 'groups',
		'description' => 'About section with image collage and mission/vision cards.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'about',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'hero' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/hero',
		'version' => '0.1.0',
		'title' => 'Hero',
		'category' => 'widgets',
		'icon' => 'superhero-alt',
		'description' => 'Harbor Light hero section with editable content.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'eyebrow' => array(
				'type' => 'string',
				'default' => 'Seattle, Washington · Est. 2016'
			),
			'title' => array(
				'type' => 'string',
				'default' => 'Guiding paths from'
			),
			'titleHighlight' => array(
				'type' => 'string',
				'default' => 'shelter to stability'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'Harbor Light bridges the gap between homelessness and lasting stability through education, job training, and compassionate housing support. Because everyone deserves to find their way home.'
			),
			'primaryButtonText' => array(
				'type' => 'string',
				'default' => 'Explore Our Programs'
			),
			'primaryButtonUrl' => array(
				'type' => 'string',
				'default' => '#programs'
			),
			'secondaryButtonText' => array(
				'type' => 'string',
				'default' => 'See Our Impact'
			),
			'secondaryButtonUrl' => array(
				'type' => 'string',
				'default' => '#impact'
			),
			'statNumber' => array(
				'type' => 'string',
				'default' => '3,247'
			),
			'statLabel' => array(
				'type' => 'string',
				'default' => 'Lives changed in 2025'
			)
		),
		'textdomain' => 'hero',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'render' => 'file:./render.php'
	),
	'myfooter' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/myfooter',
		'version' => '0.1.0',
		'title' => 'My Footer',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'myfooter',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	),
	'myheader' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/myheader',
		'version' => '0.1.0',
		'title' => 'Myheader',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'myheader',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
