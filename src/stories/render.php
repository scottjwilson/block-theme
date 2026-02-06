<?php
/**
 * Harbor Light Stories Block
 */

$story_images = [
    'Marcus'  => 'story-marcus.webp',
    'Rivera'  => 'story-rivera.webp',
    'Chen'    => 'story-chen.webp',
];

$eyebrow = $attributes['eyebrow'] ?? 'Stories of Change';
$title = $attributes['title'] ?? 'The faces behind';
$title_highlight = $attributes['titleHighlight'] ?? 'our mission';
$stories = $attributes['stories'] ?? [];
$cta_text = $attributes['ctaText'] ?? 'View All Stories';
$cta_url = $attributes['ctaUrl'] ?? '#';
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'stories-section']); ?>>
    <div class="container">
        <header class="section-header section-header-centered">
            <p class="section-eyebrow"><?php echo esc_html($eyebrow); ?></p>
            <h2 class="section-title">
                <?php echo esc_html($title); ?><br>
                <em><?php echo esc_html($title_highlight); ?></em>
            </h2>
        </header>

        <div class="stories-grid">
            <?php foreach ($stories as $story) :
                $is_featured = !empty($story['featured']);
            ?>
                <article class="story-card <?php echo $is_featured ? 'story-card-featured' : ''; ?>">
                    <div class="story-image">
                        <?php
                        $story_img = '';
                        foreach ($story_images as $key => $file) {
                            if (stripos($story['imageAlt'], $key) !== false) {
                                $story_img = $file;
                                break;
                            }
                        }
                        if ($story_img) : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $story_img); ?>" alt="<?php echo esc_attr($story['imageAlt']); ?>" loading="lazy">
                        <?php else : ?>
                            <div class="image-placeholder">
                                <span><?php echo esc_html($story['imageAlt']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="story-content">
                        <span class="story-tag"><?php echo esc_html($story['tag']); ?></span>
                        <h3 class="story-title"><?php echo esc_html($story['title']); ?></h3>
                        <p class="story-excerpt"><?php echo esc_html($story['excerpt']); ?></p>
                        <a href="<?php echo esc_url($story['linkUrl']); ?>" class="story-link">
                            <?php echo esc_html($story['linkText']); ?>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="stories-cta">
            <a href="<?php echo esc_url($cta_url); ?>" class="btn btn-ghost"><?php echo esc_html($cta_text); ?></a>
        </div>
    </div>
</section>
