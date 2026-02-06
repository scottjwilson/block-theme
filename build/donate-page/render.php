<?php
/**
 * Harbor Light Donate Page Block
 */

$hero_eyebrow = $attributes['heroEyebrow'] ?? 'Support Our Mission';
$hero_title = $attributes['heroTitle'] ?? 'Your generosity';
$hero_title_highlight = $attributes['heroTitleHighlight'] ?? 'changes lives';
$hero_description = $attributes['heroDescription'] ?? '';
$tiers = $attributes['tiers'] ?? [];
$impact_title = $attributes['impactTitle'] ?? 'Your impact in numbers';
$impact_items = $attributes['impactItems'] ?? [];
$ways_title = $attributes['waysTitle'] ?? 'Other ways to give';
$ways = $attributes['ways'] ?? [];
$cta_title = $attributes['ctaTitle'] ?? 'Ready to make a difference?';
$cta_description = $attributes['ctaDescription'] ?? '';
$cta_button_text = $attributes['ctaButtonText'] ?? 'Donate Now';
$cta_button_url = $attributes['ctaButtonUrl'] ?? '#';

$way_icons = [
    'recurring' => '<svg viewBox="0 0 48 48" fill="none"><path d="M4 24C4 12.95 12.95 4 24 4C31.73 4 38.41 8.56 41.46 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M44 24C44 35.05 35.05 44 24 44C16.27 44 9.59 39.44 6.54 33" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M36 15H42V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 33H6V39" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    'matching' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4L4 16L24 28L44 16L24 4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M4 24L24 36L44 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 32L24 44L44 32" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    'legacy' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4V44" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M24 12C20 12 14 8 14 8V24C14 24 20 20 24 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 20C28 20 34 16 34 16V28C34 28 28 24 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 44H32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
];
?>
<div <?php echo get_block_wrapper_attributes(['class' => 'donate-page']); ?>>

    <!-- Hero -->
    <section class="donate-hero">
        <div class="donate-hero-bg">
            <div class="donate-hero-pattern"></div>
        </div>
        <div class="container">
            <p class="donate-hero-eyebrow"><?php echo esc_html($hero_eyebrow); ?></p>
            <h1 class="donate-hero-title">
                <?php echo esc_html($hero_title); ?><br>
                <em><?php echo esc_html($hero_title_highlight); ?></em>
            </h1>
            <p class="donate-hero-description"><?php echo esc_html($hero_description); ?></p>
            <a href="<?php echo esc_url($cta_button_url); ?>" class="btn btn-primary btn-lg"><?php echo esc_html($cta_button_text); ?></a>
        </div>
    </section>

    <!-- Donation Tiers -->
    <section class="donate-tiers">
        <div class="container">
            <h2 class="section-title">What your gift provides</h2>
            <div class="tiers-grid">
                <?php foreach ($tiers as $tier) : ?>
                    <div class="tier-card">
                        <span class="tier-amount"><?php echo esc_html($tier['amount']); ?></span>
                        <h3 class="tier-title"><?php echo esc_html($tier['title']); ?></h3>
                        <p class="tier-description"><?php echo esc_html($tier['description']); ?></p>
                        <a href="<?php echo esc_url($cta_button_url); ?>" class="btn btn-outline">Give <?php echo esc_html($tier['amount']); ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Impact Stats -->
    <section class="donate-impact">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html($impact_title); ?></h2>
            <div class="impact-grid">
                <?php foreach ($impact_items as $item) : ?>
                    <div class="impact-item">
                        <span class="impact-stat"><?php echo esc_html($item['stat']); ?></span>
                        <span class="impact-label"><?php echo esc_html($item['label']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Other Ways to Give -->
    <section class="donate-ways">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html($ways_title); ?></h2>
            <div class="ways-grid">
                <?php foreach ($ways as $way) :
                    $icon_key = $way['icon'] ?? 'recurring';
                    $icon_svg = $way_icons[$icon_key] ?? $way_icons['recurring'];
                ?>
                    <div class="way-card">
                        <div class="way-icon"><?php echo $icon_svg; ?></div>
                        <h3 class="way-title"><?php echo esc_html($way['title']); ?></h3>
                        <p class="way-description"><?php echo esc_html($way['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="donate-cta">
        <div class="container">
            <div class="donate-cta-card">
                <h2 class="donate-cta-title"><?php echo esc_html($cta_title); ?></h2>
                <p class="donate-cta-description"><?php echo esc_html($cta_description); ?></p>
                <a href="<?php echo esc_url($cta_button_url); ?>" class="btn btn-primary btn-lg"><?php echo esc_html($cta_button_text); ?></a>
            </div>
        </div>
    </section>

</div>
