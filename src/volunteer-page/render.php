<?php
/**
 * Harbor Light Volunteer Page Block
 */

$hero_eyebrow = $attributes['heroEyebrow'] ?? 'Get Involved';
$hero_title = $attributes['heroTitle'] ?? 'Make a difference';
$hero_title_highlight = $attributes['heroTitleHighlight'] ?? 'in your community';
$hero_description = $attributes['heroDescription'] ?? '';
$opportunities_title = $attributes['opportunitiesTitle'] ?? 'Volunteer Opportunities';
$opportunities = $attributes['opportunities'] ?? [];
$why_title = $attributes['whyTitle'] ?? 'Why volunteer with us';
$why_items = $attributes['whyItems'] ?? [];
$cta_title = $attributes['ctaTitle'] ?? 'Ready to get started?';
$cta_description = $attributes['ctaDescription'] ?? '';
$cta_button_text = $attributes['ctaButtonText'] ?? 'Sign Up to Volunteer';
$cta_button_url = $attributes['ctaButtonUrl'] ?? '#';

$icons = [
    'education' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4L4 16L24 28L44 16L24 4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M12 22V34C12 34 18 40 24 40C30 40 36 34 36 34V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M44 16V32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    'mentor' => '<svg viewBox="0 0 48 48" fill="none"><circle cx="18" cy="14" r="7" stroke="currentColor" stroke-width="2"/><path d="M6 40C6 32 11 27 18 27C25 27 30 32 30 40" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="36" cy="18" r="5" stroke="currentColor" stroke-width="2"/><path d="M30 40C30 34 33 30 36 30C39 30 42 34 42 40" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    'career' => '<svg viewBox="0 0 48 48" fill="none"><rect x="8" y="16" width="32" height="24" rx="2" stroke="currentColor" stroke-width="2"/><path d="M16 16V12C16 9.79 17.79 8 20 8H28C30.21 8 32 9.79 32 12V16" stroke="currentColor" stroke-width="2"/><path d="M8 26H40" stroke="currentColor" stroke-width="2"/><circle cx="24" cy="26" r="3" stroke="currentColor" stroke-width="2"/></svg>',
    'event' => '<svg viewBox="0 0 48 48" fill="none"><rect x="6" y="14" width="36" height="26" rx="2" stroke="currentColor" stroke-width="2"/><path d="M6 22H42" stroke="currentColor" stroke-width="2"/><path d="M16 8V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M32 8V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 30H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 35H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    'meal' => '<svg viewBox="0 0 48 48" fill="none"><path d="M8 24C8 15.16 15.16 8 24 8C32.84 8 40 15.16 40 24" stroke="currentColor" stroke-width="2"/><path d="M4 28H44" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M10 28V38C10 40.21 11.79 42 14 42H34C36.21 42 38 40.21 38 38V28" stroke="currentColor" stroke-width="2"/><path d="M24 8V4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    'admin' => '<svg viewBox="0 0 48 48" fill="none"><rect x="8" y="6" width="32" height="36" rx="2" stroke="currentColor" stroke-width="2"/><path d="M16 16H32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 24H32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 32H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
];
?>
<div <?php echo get_block_wrapper_attributes(['class' => 'volunteer-page']); ?>>

    <!-- Hero Section -->
    <section class="volunteer-hero">
        <div class="volunteer-hero-bg">
            <div class="volunteer-hero-pattern"></div>
        </div>
        <div class="container">
            <p class="volunteer-hero-eyebrow"><?php echo esc_html($hero_eyebrow); ?></p>
            <h1 class="volunteer-hero-title">
                <?php echo esc_html($hero_title); ?><br>
                <em><?php echo esc_html($hero_title_highlight); ?></em>
            </h1>
            <p class="volunteer-hero-description"><?php echo esc_html($hero_description); ?></p>
            <a href="<?php echo esc_url($cta_button_url); ?>" class="btn btn-primary btn-lg"><?php echo esc_html($cta_button_text); ?></a>
        </div>
    </section>

    <!-- Opportunities Section -->
    <section class="volunteer-opportunities">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html($opportunities_title); ?></h2>
            <div class="opportunities-grid">
                <?php foreach ($opportunities as $opp) :
                    $icon_key = $opp['icon'] ?? 'education';
                    $icon_svg = $icons[$icon_key] ?? $icons['education'];
                ?>
                    <div class="opportunity-card">
                        <div class="opportunity-icon">
                            <?php echo $icon_svg; ?>
                        </div>
                        <div class="opportunity-content">
                            <h3 class="opportunity-title"><?php echo esc_html($opp['title']); ?></h3>
                            <span class="opportunity-commitment"><?php echo esc_html($opp['commitment']); ?></span>
                            <p class="opportunity-description"><?php echo esc_html($opp['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Volunteer Section -->
    <section class="volunteer-why">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html($why_title); ?></h2>
            <div class="why-grid">
                <?php foreach ($why_items as $item) : ?>
                    <div class="why-item">
                        <span class="why-stat"><?php echo esc_html($item['stat']); ?></span>
                        <span class="why-label"><?php echo esc_html($item['label']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="volunteer-cta">
        <div class="container">
            <div class="volunteer-cta-card">
                <h2 class="volunteer-cta-title"><?php echo esc_html($cta_title); ?></h2>
                <p class="volunteer-cta-description"><?php echo esc_html($cta_description); ?></p>
                <a href="<?php echo esc_url($cta_button_url); ?>" class="btn btn-primary btn-lg"><?php echo esc_html($cta_button_text); ?></a>
            </div>
        </div>
    </section>

</div>
