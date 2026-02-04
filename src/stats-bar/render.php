<?php
/**
 * Harbor Light Stats Bar Block
 */

$stats = $attributes['stats'] ?? [];
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'stats-section']); ?>>
    <div class="container">
        <div class="stats-grid">
            <?php foreach ($stats as $index => $stat) : ?>
                <?php if ($index > 0) : ?>
                    <div class="stat-divider"></div>
                <?php endif; ?>
                <div class="stat-item">
                    <span class="stat-value"><?php echo esc_html($stat['value']); ?></span>
                    <span class="stat-title"><?php echo esc_html($stat['title']); ?></span>
                    <span class="stat-desc"><?php echo esc_html($stat['description']); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
