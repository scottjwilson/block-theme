<?php
/**
 * Title: Programs Section
 * Slug: block-theme/programs
 * Categories: featured
 * Description: Four pillars of support - program cards grid with featured card.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"1400px"},"className":"programs-section"} -->
<div class="wp-block-group programs-section has-cream-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em","fontWeight":"600","fontSize":"clamp(0.75rem, 0.7rem + 0.25vw, 0.8125rem)"}},"textColor":"amber-dark"} -->
        <p class="has-amber-dark-color has-text-color" style="font-size:clamp(0.75rem, 0.7rem + 0.25vw, 0.8125rem);font-weight:600;letter-spacing:0.2em;text-transform:uppercase">What We Do</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"style":{"typography":{"fontSize":"clamp(2rem, 1.5rem + 2.5vw, 3rem)"}},"textColor":"navy"} -->
        <h2 class="wp-block-heading has-navy-color has-text-color" style="font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem)">Four pillars of support</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(1.125rem, 1rem + 0.5vw, 1.25rem)"},"layout":{"selfStretch":"fixed","flexSize":"600px"}},"textColor":"charcoal-light"} -->
        <p class="has-charcoal-light-color has-text-color" style="font-size:clamp(1.125rem, 1rem + 0.5vw, 1.25rem)">Our integrated approach addresses the complex challenges of homelessness through interconnected programs that support the whole person.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"programs-grid","layout":{"type":"default"}} -->
    <div class="wp-block-group programs-grid">

        <!-- wp:group {"className":"program-card program-card-featured","style":{"border":{"radius":"12px"}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group program-card program-card-featured has-white-background-color has-background" style="border-radius:12px">

            <!-- wp:group {"className":"program-card-image","layout":{"type":"constrained"}} -->
            <div class="wp-block-group program-card-image">
                <!-- wp:html -->
                <div class="image-placeholder" style="height:280px;border-radius:12px 12px 0 0;border:none;border-bottom:2px dashed #9a918a;">
                    <span>Image: Adult education classroom at Beacon Academy</span>
                </div>
                <span class="program-number" style="position:absolute;top:1.5rem;right:1.5rem;font-family:'DM Serif Display', Georgia, serif;font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);color:rgba(255,255,255,0.3);line-height:1;">01</span>
                <!-- /wp:html -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)"}},"textColor":"navy"} -->
                <h3 class="wp-block-heading has-navy-color has-text-color" style="font-size:clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)">Beacon Academy</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}},"textColor":"amber-dark"} -->
                <p class="has-amber-dark-color has-text-color" style="font-size:0.9375rem;font-weight:600">Education &amp; Skills Training</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"charcoal-light"} -->
                <p class="has-charcoal-light-color has-text-color">GED preparation, financial literacy, digital skills, and English language classes designed for adult learners rebuilding their lives. Flexible scheduling accommodates work and family responsibilities.</p>
                <!-- /wp:paragraph -->

                <!-- wp:list {"className":"program-highlights","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
                <ul class="program-highlights" style="margin-bottom:var(--wp--preset--spacing--40)">
                    <!-- wp:list-item {"style":{"typography":{"fontSize":"0.9375rem"}},"textColor":"charcoal-light"} -->
                    <li class="has-charcoal-light-color has-text-color" style="font-size:0.9375rem">Free GED test preparation</li>
                    <!-- /wp:list-item -->
                    <!-- wp:list-item {"style":{"typography":{"fontSize":"0.9375rem"}},"textColor":"charcoal-light"} -->
                    <li class="has-charcoal-light-color has-text-color" style="font-size:0.9375rem">Computer literacy certification</li>
                    <!-- /wp:list-item -->
                    <!-- wp:list-item {"style":{"typography":{"fontSize":"0.9375rem"}},"textColor":"charcoal-light"} -->
                    <li class="has-charcoal-light-color has-text-color" style="font-size:0.9375rem">Financial coaching &amp; credit repair</li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
                <p style="font-size:0.9375rem;font-weight:600"><a href="#" style="color:#1a2744;text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;">Learn about Beacon Academy <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"program-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group program-card has-white-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:html -->
            <span class="program-number" style="position:absolute;top:1.5rem;right:1.5rem;font-family:'DM Serif Display', Georgia, serif;font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);color:#e8e0d4;line-height:1;">02</span>
            <!-- /wp:html -->

            <!-- wp:html -->
            <div style="width:56px;height:56px;margin-bottom:1rem;color:#1a2744;">
                <svg viewBox="0 0 48 48" fill="none">
                    <path d="M24 4L4 20V44H18V32H30V44H44V20L24 4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M18 32H30V44" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                </svg>
            </div>
            <!-- /wp:html -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)"}},"textColor":"navy"} -->
            <h3 class="wp-block-heading has-navy-color has-text-color" style="font-size:clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)">Anchor Housing</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}},"textColor":"amber-dark"} -->
            <p class="has-amber-dark-color has-text-color" style="font-size:0.9375rem;font-weight:600">Transitional Support</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"charcoal-light"} -->
            <p class="has-charcoal-light-color has-text-color">Safe, stable transitional housing with wraparound case management. Residents receive support with budgeting, job searching, and navigating permanent housing options.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto"}}}} -->
            <p style="margin-top:auto;font-size:0.9375rem;font-weight:600"><a href="#" style="color:#1a2744;text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;">Explore housing programs <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"program-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group program-card has-white-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:html -->
            <span class="program-number" style="position:absolute;top:1.5rem;right:1.5rem;font-family:'DM Serif Display', Georgia, serif;font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);color:#e8e0d4;line-height:1;">03</span>
            <!-- /wp:html -->

            <!-- wp:html -->
            <div style="width:56px;height:56px;margin-bottom:1rem;color:#1a2744;">
                <svg viewBox="0 0 48 48" fill="none">
                    <rect x="6" y="14" width="36" height="26" rx="2" stroke="currentColor" stroke-width="2"/>
                    <path d="M6 22H42" stroke="currentColor" stroke-width="2"/>
                    <path d="M16 8V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M32 8V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M16 30H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M16 35H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <!-- /wp:html -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)"}},"textColor":"navy"} -->
            <h3 class="wp-block-heading has-navy-color has-text-color" style="font-size:clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)">Compass Careers</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}},"textColor":"amber-dark"} -->
            <p class="has-amber-dark-color has-text-color" style="font-size:0.9375rem;font-weight:600">Employment Services</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"charcoal-light"} -->
            <p class="has-charcoal-light-color has-text-color">Job readiness training, resume building, interview prep, and direct placement with employer partners committed to fair-chance hiring.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto"}}}} -->
            <p style="margin-top:auto;font-size:0.9375rem;font-weight:600"><a href="#" style="color:#1a2744;text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;">View career services <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"program-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group program-card has-white-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:html -->
            <span class="program-number" style="position:absolute;top:1.5rem;right:1.5rem;font-family:'DM Serif Display', Georgia, serif;font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);color:#e8e0d4;line-height:1;">04</span>
            <!-- /wp:html -->

            <!-- wp:html -->
            <div style="width:56px;height:56px;margin-bottom:1rem;color:#1a2744;">
                <svg viewBox="0 0 48 48" fill="none">
                    <circle cx="24" cy="16" r="8" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 42C12 34.268 17.372 28 24 28C30.628 28 36 34.268 36 42" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M32 14L40 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="42" cy="8" r="4" stroke="currentColor" stroke-width="2"/>
                </svg>
            </div>
            <!-- /wp:html -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)"}},"textColor":"navy"} -->
            <h3 class="wp-block-heading has-navy-color has-text-color" style="font-size:clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)">Youth Lantern</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}},"textColor":"amber-dark"} -->
            <p class="has-amber-dark-color has-text-color" style="font-size:0.9375rem;font-weight:600">Children &amp; Family Support</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"charcoal-light"} -->
            <p class="has-charcoal-light-color has-text-color">After-school tutoring, mentorship, and enrichment programs for children experiencing housing instability. Summer programs available.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto"}}}} -->
            <p style="margin-top:auto;font-size:0.9375rem;font-weight:600"><a href="#" style="color:#1a2744;text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;">Support youth programs <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
