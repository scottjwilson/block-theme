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
		'icon' => 'info-outline',
		'description' => 'Harbor Light about section with story and team preview.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'eyebrow' => array(
				'type' => 'string',
				'default' => 'Our Story'
			),
			'title' => array(
				'type' => 'string',
				'default' => 'From a church basement'
			),
			'titleHighlight' => array(
				'type' => 'string',
				'default' => 'to a regional movement'
			),
			'paragraphs' => array(
				'type' => 'array',
				'default' => array(
					'Harbor Light began in 2016 when Elena Vasquez, a social worker, watched her brother struggle with housing instability after a job loss. She saw how quickly circumstances could spiral—and how few resources existed to help people rebuild.',
					'What started as a weekly tutoring session in a church basement has grown into a comprehensive network serving over 3,000 people annually across the Puget Sound region. Our approach has remained the same: meet people where they are, address root causes, and walk alongside them toward lasting stability.'
				)
			),
			'teamTitle' => array(
				'type' => 'string',
				'default' => 'Leadership Team'
			),
			'teamMembers' => array(
				'type' => 'array',
				'default' => array(
					array(
						'name' => 'Elena Vasquez',
						'role' => 'Founder & Executive Director'
					),
					array(
						'name' => 'David Kim',
						'role' => 'Director of Programs'
					),
					array(
						'name' => 'Amara Johnson',
						'role' => 'Director of Development'
					)
				)
			),
			'teamLinkText' => array(
				'type' => 'string',
				'default' => 'Meet our full team →'
			),
			'teamLinkUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'imageAlt' => array(
				'type' => 'string',
				'default' => 'Photo: Elena Vasquez with founding volunteers, 2016'
			)
		),
		'textdomain' => 'about',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'cta-section' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/cta-section',
		'version' => '0.1.0',
		'title' => 'CTA Section',
		'category' => 'widgets',
		'icon' => 'megaphone',
		'description' => 'Harbor Light call-to-action section with three action cards.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => 'Be the light'
			),
			'titleHighlight' => array(
				'type' => 'string',
				'default' => 'someone needs'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'Whether you give your time, talent, or treasure, you become part of someone\'s journey from uncertainty to stability.'
			),
			'cards' => array(
				'type' => 'array',
				'default' => array(
					array(
						'icon' => 'heart',
						'title' => 'Donate',
						'description' => '$75 provides a week of tutoring. $250 covers job training materials. Every gift matters.',
						'buttonText' => 'Give Now',
						'buttonUrl' => '#',
						'buttonStyle' => 'primary',
						'highlight' => false
					),
					array(
						'icon' => 'volunteer',
						'title' => 'Volunteer',
						'description' => 'Tutor, mentor, teach a workshop, or help with events. We\'ll match your skills to our needs.',
						'buttonText' => 'Get Involved',
						'buttonUrl' => '#',
						'buttonStyle' => 'white',
						'highlight' => true
					),
					array(
						'icon' => 'email',
						'title' => 'Stay Connected',
						'description' => 'Join our community for monthly updates, success stories, and ways to help.',
						'buttonText' => 'Subscribe',
						'buttonUrl' => '#',
						'buttonStyle' => 'outline',
						'highlight' => false
					)
				)
			)
		),
		'textdomain' => 'cta-section',
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
	'impact' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/impact',
		'version' => '0.1.0',
		'title' => 'Impact',
		'category' => 'widgets',
		'icon' => 'chart-bar',
		'description' => 'Harbor Light impact section with metrics and progress bars.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'eyebrow' => array(
				'type' => 'string',
				'default' => 'Our Impact'
			),
			'title' => array(
				'type' => 'string',
				'default' => 'Real outcomes,'
			),
			'titleHighlight' => array(
				'type' => 'string',
				'default' => 'measured carefully'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'We track what matters: not just beds filled, but lives rebuilt. Our outcomes-focused approach means every program is designed with long-term stability as the goal.'
			),
			'metrics' => array(
				'type' => 'array',
				'default' => array(
					array(
						'value' => '78%',
						'percentage' => 78,
						'label' => 'maintain housing after one year'
					),
					array(
						'value' => '85%',
						'percentage' => 85,
						'label' => 'of job training graduates find employment'
					),
					array(
						'value' => '92%',
						'percentage' => 92,
						'label' => 'of youth show improved school performance'
					)
				)
			),
			'buttonText' => array(
				'type' => 'string',
				'default' => 'View Annual Report'
			),
			'buttonUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'image1Alt' => array(
				'type' => 'string',
				'default' => 'Graduate receiving GED certificate'
			),
			'image2Alt' => array(
				'type' => 'string',
				'default' => 'Family moving into new apartment'
			)
		),
		'textdomain' => 'impact',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'mission-quote' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/mission-quote',
		'version' => '0.1.0',
		'title' => 'Mission Quote',
		'category' => 'widgets',
		'icon' => 'format-quote',
		'description' => 'Harbor Light mission quote section with icon and citation.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'quote' => array(
				'type' => 'string',
				'default' => 'We don\'t just provide shelter—we illuminate the path forward. Every person who walks through our doors carries potential. Our job is to help them see it.'
			),
			'authorName' => array(
				'type' => 'string',
				'default' => 'Elena Vasquez'
			),
			'authorTitle' => array(
				'type' => 'string',
				'default' => 'Founder & Executive Director'
			)
		),
		'textdomain' => 'mission-quote',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
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
	),
	'partners' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/partners',
		'version' => '0.1.0',
		'title' => 'Partners',
		'category' => 'widgets',
		'icon' => 'networking',
		'description' => 'Harbor Light partners/sponsors logo section.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'label' => array(
				'type' => 'string',
				'default' => 'Proud partners'
			),
			'partners' => array(
				'type' => 'array',
				'default' => array(
					array(
						'name' => 'Seattle Foundation'
					),
					array(
						'name' => 'United Way'
					),
					array(
						'name' => 'King County'
					),
					array(
						'name' => 'Amazon'
					),
					array(
						'name' => 'Microsoft'
					),
					array(
						'name' => 'Starbucks'
					)
				)
			)
		),
		'textdomain' => 'partners',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'programs' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/programs',
		'version' => '0.1.0',
		'title' => 'Programs',
		'category' => 'widgets',
		'icon' => 'grid-view',
		'description' => 'Harbor Light programs section - Four pillars of support.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'eyebrow' => array(
				'type' => 'string',
				'default' => 'What We Do'
			),
			'title' => array(
				'type' => 'string',
				'default' => 'Four pillars of support'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'Our integrated approach addresses the complex challenges of homelessness through interconnected programs that support the whole person.'
			),
			'programs' => array(
				'type' => 'array',
				'default' => array(
					array(
						'number' => '01',
						'title' => 'Beacon Academy',
						'tagline' => 'Education & Skills Training',
						'description' => 'GED preparation, financial literacy, digital skills, and English language classes designed for adult learners rebuilding their lives. Flexible scheduling accommodates work and family responsibilities.',
						'highlights' => array(
							'Free GED test preparation',
							'Computer literacy certification',
							'Financial coaching & credit repair'
						),
						'linkText' => 'Learn about Beacon Academy',
						'linkUrl' => '#',
						'icon' => 'education',
						'featured' => true
					),
					array(
						'number' => '02',
						'title' => 'Anchor Housing',
						'tagline' => 'Transitional Support',
						'description' => 'Safe, stable transitional housing with wraparound case management. Residents receive support with budgeting, job searching, and navigating permanent housing options.',
						'highlights' => array(
							
						),
						'linkText' => 'Explore housing programs',
						'linkUrl' => '#',
						'icon' => 'home',
						'featured' => false
					),
					array(
						'number' => '03',
						'title' => 'Compass Careers',
						'tagline' => 'Employment Services',
						'description' => 'Job readiness training, resume building, interview prep, and direct placement with employer partners committed to fair-chance hiring.',
						'highlights' => array(
							
						),
						'linkText' => 'View career services',
						'linkUrl' => '#',
						'icon' => 'calendar',
						'featured' => false
					),
					array(
						'number' => '04',
						'title' => 'Youth Lantern',
						'tagline' => 'Children & Family Support',
						'description' => 'After-school tutoring, mentorship, and enrichment programs for children experiencing housing instability. Summer programs available.',
						'highlights' => array(
							
						),
						'linkText' => 'Support youth programs',
						'linkUrl' => '#',
						'icon' => 'youth',
						'featured' => false
					)
				)
			)
		),
		'textdomain' => 'programs',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'stats-bar' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/stats-bar',
		'version' => '0.1.0',
		'title' => 'Stats Bar',
		'category' => 'widgets',
		'icon' => 'chart-line',
		'description' => 'Harbor Light stats bar with key metrics.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'stats' => array(
				'type' => 'array',
				'default' => array(
					array(
						'value' => '8',
						'title' => 'Years of Service',
						'description' => 'Serving the Puget Sound since 2016'
					),
					array(
						'value' => '12K+',
						'title' => 'People Served',
						'description' => 'Adults, youth, and families supported'
					),
					array(
						'value' => '78%',
						'title' => 'Housing Success',
						'description' => 'Clients in stable housing after 1 year'
					),
					array(
						'value' => '340',
						'title' => 'Active Volunteers',
						'description' => 'Community members making a difference'
					)
				)
			)
		),
		'textdomain' => 'stats-bar',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'stories' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'myblocks/stories',
		'version' => '0.1.0',
		'title' => 'Stories',
		'category' => 'widgets',
		'icon' => 'groups',
		'description' => 'Harbor Light stories section showcasing success stories.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'eyebrow' => array(
				'type' => 'string',
				'default' => 'Stories of Change'
			),
			'title' => array(
				'type' => 'string',
				'default' => 'The faces behind'
			),
			'titleHighlight' => array(
				'type' => 'string',
				'default' => 'our mission'
			),
			'stories' => array(
				'type' => 'array',
				'default' => array(
					array(
						'imageAlt' => 'Portrait: Marcus, program graduate',
						'tag' => 'Graduate Spotlight',
						'title' => '"Harbor Light gave me permission to dream again"',
						'excerpt' => 'After losing his job and apartment in 2023, Marcus found his way to our Beacon Academy. Eighteen months later, he\'s a certified IT technician with a stable apartment and plans to start community college.',
						'linkText' => 'Read Marcus\'s story',
						'linkUrl' => '#',
						'featured' => true
					),
					array(
						'imageAlt' => 'Portrait: The Rivera family',
						'tag' => 'Family Story',
						'title' => 'A fresh start for the Rivera family',
						'excerpt' => 'With support from Anchor Housing and Youth Lantern, Maria and her two daughters found stability together.',
						'linkText' => 'Read their story',
						'linkUrl' => '#',
						'featured' => false
					),
					array(
						'imageAlt' => 'Portrait: Volunteer James Chen',
						'tag' => 'Volunteer Voice',
						'title' => 'Why I tutor every Saturday',
						'excerpt' => 'James has volunteered with Youth Lantern for 3 years. Here\'s what keeps him coming back.',
						'linkText' => 'Read James\'s story',
						'linkUrl' => '#',
						'featured' => false
					)
				)
			),
			'ctaText' => array(
				'type' => 'string',
				'default' => 'View All Stories'
			),
			'ctaUrl' => array(
				'type' => 'string',
				'default' => '#'
			)
		),
		'textdomain' => 'stories',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
