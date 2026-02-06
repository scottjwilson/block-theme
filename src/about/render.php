<?php
/**
 * Harbor Light About Block
 */

$eyebrow = $attributes['eyebrow'] ?? 'Our Story';
$title = $attributes['title'] ?? 'From a church basement';
$title_highlight = $attributes['titleHighlight'] ?? 'to a regional movement';
$paragraphs = $attributes['paragraphs'] ?? [];
$team_title = $attributes['teamTitle'] ?? 'Leadership Team';
$team_members = $attributes['teamMembers'] ?? [];
$team_link_text = $attributes['teamLinkText'] ?? 'Meet our full team →';
$team_link_url = $attributes['teamLinkUrl'] ?? '#';
$image_alt = $attributes['imageAlt'] ?? 'Photo: Elena Vasquez with founding volunteers, 2016';
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'about-section']); ?>>
    <div class="container">
        <div class="about-layout">
            <div class="about-image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about.webp'); ?>" alt="<?php echo esc_attr($image_alt); ?>" loading="lazy">
            </div>

            <div class="about-content">
                <p class="section-eyebrow"><?php echo esc_html($eyebrow); ?></p>
                <h2 class="section-title">
                    <?php echo esc_html($title); ?><br>
                    <em><?php echo esc_html($title_highlight); ?></em>
                </h2>
                <div class="about-text">
                    <?php foreach ($paragraphs as $paragraph) : ?>
                        <p><?php echo esc_html($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>

                <div class="about-team-preview">
                    <h3><?php echo esc_html($team_title); ?></h3>
                    <ul class="team-list">
                        <?php foreach ($team_members as $member) : ?>
                            <li>
                                <strong><?php echo esc_html($member['name']); ?></strong>
                                <span><?php echo esc_html($member['role']); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo esc_url($team_link_url); ?>" class="team-link">
                        <?php echo esc_html($team_link_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
