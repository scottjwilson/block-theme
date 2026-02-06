<?php
/**
 * Harbor Light Volunteer Signup Block
 */

$hero_eyebrow = $attributes['heroEyebrow'] ?? 'Volunteer';
$hero_title = $attributes['heroTitle'] ?? 'Sign up to';
$hero_title_highlight = $attributes['heroTitleHighlight'] ?? 'volunteer';
$hero_description = $attributes['heroDescription'] ?? '';
$form_email = $attributes['formEmail'] ?? 'volunteer@harborlightfoundation.com';
$phone = $attributes['phone'] ?? '(253) 555-0147';
$email = $attributes['email'] ?? 'volunteer@harborlightfoundation.com';
$address = $attributes['address'] ?? "1847 Harbor Avenue\nTacoma, WA 98402";
$steps = $attributes['steps'] ?? [];

$interests = [
    'Tutoring & Education',
    'Mentorship Program',
    'Career Coaching',
    'Event Support',
    'Meal Service',
    'Administrative Help',
];

$availability = [
    'Weekday mornings',
    'Weekday afternoons',
    'Weekday evenings',
    'Weekends',
    'Flexible',
];
?>
<div <?php echo get_block_wrapper_attributes(['class' => 'volunteer-signup']); ?>>

    <!-- Hero -->
    <section class="signup-hero">
        <div class="signup-hero-bg"></div>
        <div class="container">
            <p class="signup-hero-eyebrow"><?php echo esc_html($hero_eyebrow); ?></p>
            <h1 class="signup-hero-title">
                <?php echo esc_html($hero_title); ?>
                <em><?php echo esc_html($hero_title_highlight); ?></em>
            </h1>
            <p class="signup-hero-description"><?php echo esc_html($hero_description); ?></p>
        </div>
    </section>

    <!-- Form Section -->
    <section class="signup-section">
        <div class="container">
            <div class="signup-layout">

                <!-- Form -->
                <form class="signup-form" action="https://formsubmit.co/<?php echo esc_attr($form_email); ?>" method="POST">
                    <!-- FormSubmit config -->
                    <input type="hidden" name="_subject" value="New Volunteer Signup">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_next" value="<?php echo esc_url(home_url('/volunteer-signup/?thanks=1')); ?>">
                    <input type="text" name="_honey" style="display:none">

                    <h2 class="signup-form-title">Your Information</h2>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name <span class="required">*</span></label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name <span class="required">*</span></label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="signup-email">Email <span class="required">*</span></label>
                            <input type="email" id="signup-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="signup-phone">Phone</label>
                            <input type="tel" id="signup-phone" name="phone">
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <legend>Areas of Interest</legend>
                        <div class="checkbox-grid">
                            <?php foreach ($interests as $interest) : ?>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="interests[]" value="<?php echo esc_attr($interest); ?>">
                                    <span><?php echo esc_html($interest); ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label for="signup-availability">Availability</label>
                        <select id="signup-availability" name="availability">
                            <option value="">Select your availability</option>
                            <?php foreach ($availability as $option) : ?>
                                <option value="<?php echo esc_attr($option); ?>"><?php echo esc_html($option); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="signup-message">Message <span class="optional">(optional)</span></label>
                        <textarea id="signup-message" name="message" rows="4" placeholder="Tell us about yourself, your skills, or any questions you have..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Submit Interest Form</button>
                </form>

                <!-- Sidebar -->
                <aside class="signup-sidebar">
                    <div class="sidebar-card sidebar-contact">
                        <h3>Contact Us Directly</h3>
                        <ul class="contact-list">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M22 16.92V19.92C22 20.48 21.56 20.93 21 20.97C20.64 21 20.27 21.01 19.9 21C10.44 20.42 3.58 13.56 3 4.1C2.99 3.73 3 3.36 3.03 3C3.07 2.44 3.52 2 4.08 2H7.08C7.57 2 7.99 2.35 8.07 2.84C8.14 3.29 8.24 3.74 8.38 4.17L6.7 5.85C8.06 8.92 10.08 10.94 13.15 12.3L14.83 10.62C15.26 10.76 15.71 10.86 16.16 10.93C16.65 11.01 17 11.43 17 11.92V16.92" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M3 9L12 14L21 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2Z" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="1.5"/></svg>
                                <span><?php echo nl2br(esc_html($address)); ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-card sidebar-steps">
                        <h3>What to Expect</h3>
                        <ol class="steps-list">
                            <?php foreach ($steps as $index => $step) : ?>
                                <li>
                                    <span class="step-number" aria-hidden="true"><?php echo esc_html($index + 1); ?></span>
                                    <span><?php echo esc_html($step); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </aside>

            </div>
        </div>
    </section>

</div>
