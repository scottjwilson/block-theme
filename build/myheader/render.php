<?php
/**
 * Harbor Light Header Block
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block default content.
 * @var WP_Block $block      Block instance.
 */

$logo_text = $attributes['logoText'] ?? 'Harbor Light';
$nav_links = $attributes['navLinks'] ?? [];
$volunteer_text = $attributes['volunteerText'] ?? 'Volunteer';
$volunteer_url = $attributes['volunteerUrl'] ?? '/volunteer/';
$donate_text = $attributes['donateText'] ?? 'Donate';
$donate_url = $attributes['donateUrl'] ?? '/#contact';
?>

<header class="site-header">
    <nav class="nav-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <svg class="logo-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Lighthouse base -->
                <path d="M18 44V28H30V44" stroke="currentColor" stroke-width="2" fill="none"/>
                <!-- Lighthouse tower -->
                <path d="M16 28L20 12H28L32 28H16Z" stroke="currentColor" stroke-width="2" fill="none"/>
                <!-- Light housing -->
                <rect x="20" y="6" width="8" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="currentColor" fill-opacity="0.2"/>
                <!-- Light beam left -->
                <path d="M18 9L6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.6"/>
                <path d="M17 11L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                <!-- Light beam right -->
                <path d="M30 9L42 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.6"/>
                <path d="M31 11L44 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                <!-- Top -->
                <path d="M22 6V4C22 3.44772 22.4477 3 23 3H25C25.5523 3 26 3.44772 26 4V6" stroke="currentColor" stroke-width="2"/>
                <!-- Windows -->
                <rect x="22" y="16" width="4" height="5" rx="0.5" fill="currentColor" opacity="0.3"/>
                <rect x="22" y="32" width="4" height="6" rx="0.5" fill="currentColor" opacity="0.3"/>
                <!-- Ground line -->
                <path d="M10 44H38" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <span class="logo-text"><?php echo esc_html($logo_text); ?></span>
        </a>

        <ul class="nav-links">
            <?php foreach ($nav_links as $link) : ?>
                <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
            <?php endforeach; ?>
        </ul>

        <div class="nav-actions">
            <a href="<?php echo esc_url($volunteer_url); ?>" class="btn btn-ghost"><?php echo esc_html($volunteer_text); ?></a>
            <a href="<?php echo esc_url($donate_url); ?>" class="btn btn-primary"><?php echo esc_html($donate_text); ?></a>
        </div>

        <button class="mobile-toggle" aria-label="Open menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" aria-hidden="true">
        <ul class="mobile-nav-links">
            <?php foreach ($nav_links as $link) : ?>
                <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="mobile-nav-actions">
            <a href="<?php echo esc_url($volunteer_url); ?>" class="btn btn-ghost btn-block"><?php echo esc_html($volunteer_text); ?></a>
            <a href="<?php echo esc_url($donate_url); ?>" class="btn btn-primary btn-block"><?php echo esc_html($donate_text); ?></a>
        </div>
    </div>
</header>
