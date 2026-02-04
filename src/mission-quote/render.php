<?php
/**
 * Harbor Light Mission Quote Block
 */

$quote = $attributes['quote'] ?? '';
$author_name = $attributes['authorName'] ?? 'Elena Vasquez';
$author_title = $attributes['authorTitle'] ?? 'Founder & Executive Director';
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'mission-section']); ?>>
    <div class="container">
        <div class="mission-content">
            <div class="mission-icon">
                <svg viewBox="0 0 64 64" fill="none">
                    <circle cx="32" cy="32" r="28" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 4"/>
                    <path d="M32 16V32L42 42" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <blockquote class="mission-quote">
                "<?php echo esc_html($quote); ?>"
            </blockquote>
            <cite class="mission-cite">
                <strong><?php echo esc_html($author_name); ?></strong>
                <span><?php echo esc_html($author_title); ?></span>
            </cite>
        </div>
    </div>
</section>
