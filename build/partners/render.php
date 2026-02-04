<?php
/**
 * Harbor Light Partners Block
 */

$label = $attributes['label'] ?? 'Proud partners';
$partners = $attributes['partners'] ?? [];
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'partners-section']); ?>>
    <div class="container">
        <p class="partners-label"><?php echo esc_html($label); ?></p>
        <div class="partners-grid">
            <?php foreach ($partners as $partner) : ?>
                <div class="partner-logo"><?php echo esc_html($partner['name']); ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
