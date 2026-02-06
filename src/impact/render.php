<?php
/**
 * Harbor Light Impact Block
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block default content.
 * @var WP_Block $block      Block instance.
 */

$eyebrow = $attributes['eyebrow'] ?? 'Our Impact';
$title = $attributes['title'] ?? 'Real outcomes,';
$title_highlight = $attributes['titleHighlight'] ?? 'measured carefully';
$description = $attributes['description'] ?? 'We track what matters: not just beds filled, but lives rebuilt. Our outcomes-focused approach means every program is designed with long-term stability as the goal.';
$metrics = $attributes['metrics'] ?? [];
$button_text = $attributes['buttonText'] ?? 'View Annual Report';
$button_url = $attributes['buttonUrl'] ?? '#';
$image1_alt = $attributes['image1Alt'] ?? 'Graduate receiving GED certificate';
$image2_alt = $attributes['image2Alt'] ?? 'Family moving into new apartment';

$external_arrow_icon = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'impact-section']); ?>>
    <div class="container">
        <div class="impact-layout">
            <div class="impact-content">
                <p class="section-eyebrow"><?php echo esc_html($eyebrow); ?></p>
                <h2 class="section-title">
                    <?php echo esc_html($title); ?><br>
                    <em><?php echo esc_html($title_highlight); ?></em>
                </h2>
                <p class="impact-text"><?php echo esc_html($description); ?></p>

                <div class="impact-metrics">
                    <?php foreach ($metrics as $metric) : ?>
                        <div class="metric">
                            <div class="metric-bar">
                                <div class="metric-fill" style="--width: <?php echo esc_attr($metric['percentage']); ?>%"></div>
                            </div>
                            <div class="metric-info">
                                <span class="metric-value"><?php echo esc_html($metric['value']); ?></span>
                                <span class="metric-label"><?php echo esc_html($metric['label']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <a href="<?php echo esc_url($button_url); ?>" class="btn btn-outline">
                    <?php echo esc_html($button_text); ?>
                    <?php echo $external_arrow_icon; ?>
                </a>
            </div>

            <div class="impact-visual">
                <div class="impact-image-stack">
                    <img class="impact-image-1" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/impact-1.webp'); ?>" alt="<?php echo esc_attr($image1_alt); ?>" loading="lazy">
                    <img class="impact-image-2" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/impact-2.webp'); ?>" alt="<?php echo esc_attr($image2_alt); ?>" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
