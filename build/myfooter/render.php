<?php
/**
 * Harbor Light Footer Block
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block default content.
 * @var WP_Block $block      Block instance.
 */

$logo_text = $attributes['logoText'] ?? 'Harbor Light';
$tagline = $attributes['tagline'] ?? 'Guiding paths from shelter to stability';
$address = $attributes['address'] ?? "1847 Harbor Avenue\nSeattle, WA 98126";
$phone = $attributes['phone'] ?? '(206) 555-1234';
$email = $attributes['email'] ?? 'info@harborlight.org';
$ein = $attributes['ein'] ?? '91-1234567';

$programs_links = $attributes['programsLinks'] ?? [
    ['label' => 'Beacon Academy', 'url' => '#'],
    ['label' => 'Anchor Housing', 'url' => '#'],
    ['label' => 'Compass Careers', 'url' => '#'],
    ['label' => 'Youth Lantern', 'url' => '#'],
];

$involved_links = $attributes['involvedLinks'] ?? [
    ['label' => 'Donate', 'url' => '#'],
    ['label' => 'Volunteer', 'url' => '#'],
    ['label' => 'Corporate Partners', 'url' => '#'],
    ['label' => 'Events', 'url' => '#'],
];

$about_links = $attributes['aboutLinks'] ?? [
    ['label' => 'Our Story', 'url' => '#'],
    ['label' => 'Team', 'url' => '#'],
    ['label' => 'Financials', 'url' => '#'],
    ['label' => 'Careers', 'url' => '#'],
    ['label' => 'Press', 'url' => '#'],
];

$newsletter_title = $attributes['newsletterTitle'] ?? 'Stay in the light';
$newsletter_description = $attributes['newsletterDescription'] ?? 'Monthly stories, impact updates, and ways to help.';

$facebook_url = $attributes['facebookUrl'] ?? '#';
$instagram_url = $attributes['instagramUrl'] ?? '#';
$linkedin_url = $attributes['linkedinUrl'] ?? '#';
$twitter_url = $attributes['twitterUrl'] ?? '#';
?>
<footer id="contact" class="site-footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <svg class="logo-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 44V28H30V44" stroke="currentColor" stroke-width="2" fill="none"/>
                        <path d="M16 28L20 12H28L32 28H16Z" stroke="currentColor" stroke-width="2" fill="none"/>
                        <rect x="20" y="6" width="8" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M18 9L6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.6"/>
                        <path d="M17 11L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                        <path d="M30 9L42 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.6"/>
                        <path d="M31 11L44 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                        <path d="M22 6V4C22 3.44772 22.4477 3 23 3H25C25.5523 3 26 3.44772 26 4V6" stroke="currentColor" stroke-width="2"/>
                        <rect x="22" y="16" width="4" height="5" rx="0.5" fill="currentColor" opacity="0.3"/>
                        <rect x="22" y="32" width="4" height="6" rx="0.5" fill="currentColor" opacity="0.3"/>
                        <path d="M10 44H38" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span class="logo-text"><?php echo esc_html($logo_text); ?></span>
                </a>
                <p class="footer-tagline"><?php echo esc_html($tagline); ?></p>
                <address class="footer-address">
                    <?php echo nl2br(esc_html($address)); ?><br>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a><br>
                    <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                </address>
            </div>

            <nav class="footer-nav">
                <div class="footer-nav-group">
                    <h4>Programs</h4>
                    <ul>
                        <?php foreach ($programs_links as $link) : ?>
                            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="footer-nav-group">
                    <h4>Get Involved</h4>
                    <ul>
                        <?php foreach ($involved_links as $link) : ?>
                            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="footer-nav-group">
                    <h4>About</h4>
                    <ul>
                        <?php foreach ($about_links as $link) : ?>
                            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>

            <div class="footer-newsletter">
                <h4><?php echo esc_html($newsletter_title); ?></h4>
                <p><?php echo esc_html($newsletter_description); ?></p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
                <div class="footer-social">
                    <?php if ($facebook_url && $facebook_url !== '#') : ?>
                    <a href="<?php echo esc_url($facebook_url); ?>" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if ($instagram_url && $instagram_url !== '#') : ?>
                    <a href="<?php echo esc_url($instagram_url); ?>" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if ($linkedin_url && $linkedin_url !== '#') : ?>
                    <a href="<?php echo esc_url($linkedin_url); ?>" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if ($twitter_url && $twitter_url !== '#') : ?>
                    <a href="<?php echo esc_url($twitter_url); ?>" aria-label="Twitter/X">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-legal">
                &copy; <?php echo date('Y'); ?> Harbor Light Community Initiative. 501(c)(3) nonprofit organization. EIN: <?php echo esc_html($ein); ?>
            </p>
            <nav class="footer-legal-nav">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Accessibility</a>
                <a href="#">Financials</a>
            </nav>
        </div>
    </div>
</footer>
