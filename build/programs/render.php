<?php
/**
 * Harbor Light Programs Block
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block default content.
 * @var WP_Block $block      Block instance.
 */

$eyebrow = $attributes['eyebrow'] ?? 'What We Do';
$title = $attributes['title'] ?? 'Four pillars of support';
$description = $attributes['description'] ?? 'Our integrated approach addresses the complex challenges of homelessness through interconnected programs that support the whole person.';
$programs = $attributes['programs'] ?? [];

// Icon SVGs
$icons = [
    'education' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4L4 16L24 28L44 16L24 4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M12 22V34C12 34 18 40 24 40C30 40 36 34 36 34V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M44 16V32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    'home' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4L4 20V44H18V32H30V44H44V20L24 4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M18 32H30V44" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>',
    'calendar' => '<svg viewBox="0 0 48 48" fill="none"><rect x="6" y="14" width="36" height="26" rx="2" stroke="currentColor" stroke-width="2"/><path d="M6 22H42" stroke="currentColor" stroke-width="2"/><path d="M16 8V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M32 8V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 30H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 35H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    'youth' => '<svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="16" r="8" stroke="currentColor" stroke-width="2"/><path d="M12 42C12 34.268 17.372 28 24 28C30.628 28 36 34.268 36 42" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M32 14L40 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="42" cy="8" r="4" stroke="currentColor" stroke-width="2"/></svg>',
];

$arrow_icon = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'programs-section']); ?>>
    <div class="container">
        <header class="section-header">
            <p class="section-eyebrow"><?php echo esc_html($eyebrow); ?></p>
            <h2 class="section-title"><?php echo esc_html($title); ?></h2>
            <p class="section-description"><?php echo esc_html($description); ?></p>
        </header>

        <div class="programs-grid">
            <?php foreach ($programs as $program) :
                $is_featured = !empty($program['featured']);
                $icon_key = $program['icon'] ?? 'home';
                $icon_svg = $icons[$icon_key] ?? $icons['home'];
            ?>
                <?php if ($is_featured) : ?>
                    <article class="program-card program-card-featured">
                        <div class="program-card-image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/programs.jpg'); ?>" alt="Adult education classroom at <?php echo esc_attr($program['title']); ?>" loading="lazy">
                            <span class="program-number"><?php echo esc_html($program['number']); ?></span>
                        </div>
                        <div class="program-card-content">
                            <h3 class="program-title"><?php echo esc_html($program['title']); ?></h3>
                            <p class="program-tagline"><?php echo esc_html($program['tagline']); ?></p>
                            <p class="program-description"><?php echo esc_html($program['description']); ?></p>
                            <?php if (!empty($program['highlights'])) : ?>
                                <ul class="program-highlights">
                                    <?php foreach ($program['highlights'] as $highlight) : ?>
                                        <li><?php echo esc_html($highlight); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <a href="<?php echo esc_url($program['linkUrl']); ?>" class="program-link">
                                <?php echo esc_html($program['linkText']); ?>
                                <?php echo $arrow_icon; ?>
                            </a>
                        </div>
                    </article>
                <?php else : ?>
                    <article class="program-card">
                        <span class="program-number"><?php echo esc_html($program['number']); ?></span>
                        <div class="program-card-icon">
                            <?php echo $icon_svg; ?>
                        </div>
                        <h3 class="program-title"><?php echo esc_html($program['title']); ?></h3>
                        <p class="program-tagline"><?php echo esc_html($program['tagline']); ?></p>
                        <p class="program-description"><?php echo esc_html($program['description']); ?></p>
                        <a href="<?php echo esc_url($program['linkUrl']); ?>" class="program-link">
                            <?php echo esc_html($program['linkText']); ?>
                            <?php echo $arrow_icon; ?>
                        </a>
                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
