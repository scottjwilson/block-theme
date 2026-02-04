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
		'title' => 'Footer',
		'category' => 'widgets',
		'icon' => 'admin-home',
		'description' => 'Harbor Light footer with contact info, navigation, and newsletter.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'logoText' => array(
				'type' => 'string',
				'default' => 'Harbor Light'
			),
			'tagline' => array(
				'type' => 'string',
				'default' => 'Guiding paths from shelter to stability'
			),
			'address' => array(
				'type' => 'string',
				'default' => '1847 Harbor Avenue
Seattle, WA 98126'
			),
			'phone' => array(
				'type' => 'string',
				'default' => '(206) 555-1234'
			),
			'email' => array(
				'type' => 'string',
				'default' => 'info@harborlight.org'
			),
			'programsLinks' => array(
				'type' => 'array',
				'default' => array(
					array(
						'label' => 'Beacon Academy',
						'url' => '#'
					),
					array(
						'label' => 'Anchor Housing',
						'url' => '#'
					),
					array(
						'label' => 'Compass Careers',
						'url' => '#'
					),
					array(
						'label' => 'Youth Lantern',
						'url' => '#'
					)
				)
			),
			'involvedLinks' => array(
				'type' => 'array',
				'default' => array(
					array(
						'label' => 'Donate',
						'url' => '#'
					),
					array(
						'label' => 'Volunteer',
						'url' => '#'
					),
					array(
						'label' => 'Corporate Partners',
						'url' => '#'
					),
					array(
						'label' => 'Events',
						'url' => '#'
					)
				)
			),
			'aboutLinks' => array(
				'type' => 'array',
				'default' => array(
					array(
						'label' => 'Our Story',
						'url' => '#'
					),
					array(
						'label' => 'Team',
						'url' => '#'
					),
					array(
						'label' => 'Financials',
						'url' => '#'
					),
					array(
						'label' => 'Careers',
						'url' => '#'
					),
					array(
						'label' => 'Press',
						'url' => '#'
					)
				)
			),
			'newsletterTitle' => array(
				'type' => 'string',
				'default' => 'Stay in the light'
			),
			'newsletterDescription' => array(
				'type' => 'string',
				'default' => 'Monthly stories, impact updates, and ways to help.'
			),
			'facebookUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'instagramUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'linkedinUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'twitterUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'ein' => array(
				'type' => 'string',
				'default' => '91-1234567'
			)
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
		'title' => 'Header',
		'category' => 'widgets',
		'icon' => 'admin-home',
		'description' => 'Harbor Light header with navigation and logo.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'logoText' => array(
				'type' => 'string',
				'default' => 'Harbor Light'
			),
			'navLinks' => array(
				'type' => 'array',
				'default' => array(
					array(
						'label' => 'About',
						'url' => '#about'
					),
					array(
						'label' => 'Programs',
						'url' => '#programs'
					),
					array(
						'label' => 'Impact',
						'url' => '#impact'
					),
					array(
						'label' => 'Stories',
						'url' => '#stories'
					),
					array(
						'label' => 'Contact',
						'url' => '#contact'
					)
				)
			),
			'volunteerText' => array(
				'type' => 'string',
				'default' => 'Volunteer'
			),
			'volunteerUrl' => array(
				'type' => 'string',
				'default' => '#volunteer'
			),
			'donateText' => array(
				'type' => 'string',
				'default' => 'Donate'
			),
			'donateUrl' => array(
				'type' => 'string',
				'default' => '#donate'
			)
		),
		'textdomain' => 'myheader',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
