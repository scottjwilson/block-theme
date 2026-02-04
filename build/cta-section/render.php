<?php
/**
 * Harbor Light CTA Section Block
 */

$title = $attributes['title'] ?? 'Be the light';
$title_highlight = $attributes['titleHighlight'] ?? 'someone needs';
$description = $attributes['description'] ?? '';
$cards = $attributes['cards'] ?? [];

$icons = [
    'heart' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 44C24 44 42 32 42 20C42 12 36 6 28 6C25 6 24 10 24 10C24 10 23 6 20 6C12 6 6 12 6 20C6 32 24 44 24 44Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>',
    'volunteer' => '<svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="14" r="8" stroke="currentColor" stroke-width="2"/><path d="M10 42C10 32 16 26 24 26C32 26 38 32 38 42" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M32 36L36 40L44 32" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    'email' => '<svg viewBox="0 0 48 48" fill="none"><rect x="6" y="10" width="36" height="28" rx="2" stroke="currentColor" stroke-width="2"/><path d="M6 18L24 28L42 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
];
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'cta-section']); ?>>
    <div class="cta-background">
        <div class="cta-pattern"></div>
    </div>
    <div class="container">
        <div class="cta-layout">
            <div class="cta-content">
                <h2 class="cta-title">
                    <?php echo esc_html($title); ?><br>
                    <em><?php echo esc_html($title_highlight); ?></em>
                </h2>
                <p class="cta-description"><?php echo esc_html($description); ?></p>
            </div>

            <div class="cta-cards">
                <?php foreach ($cards as $card) :
                    $is_highlight = !empty($card['highlight']);
                    $icon_key = $card['icon'] ?? 'heart';
                    $icon_svg = $icons[$icon_key] ?? $icons['heart'];
                    $button_style = $card['buttonStyle'] ?? 'primary';
                ?>
                    <div class="cta-card <?php echo $is_highlight ? 'cta-card-highlight' : ''; ?>">
                        <div class="cta-card-icon">
                            <?php echo $icon_svg; ?>
                        </div>
                        <h3><?php echo esc_html($card['title']); ?></h3>
                        <p><?php echo esc_html($card['description']); ?></p>
                        <a href="<?php echo esc_url($card['buttonUrl']); ?>" class="btn btn-<?php echo esc_attr($button_style); ?> btn-block">
                            <?php echo esc_html($card['buttonText']); ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
