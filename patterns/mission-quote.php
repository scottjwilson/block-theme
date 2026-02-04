<?php
/**
 * Title: Mission Quote
 * Slug: block-theme/mission-quote
 * Categories: harborlight, featured
 * Description: A centered mission quote with icon and citation.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4xl","bottom":"var:preset|spacing|4xl","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}},"border":{"top":{"color":"var:preset|color|sand","width":"1px"},"bottom":{"color":"var:preset|color|sand","width":"1px"}}},"backgroundColor":"cream-dark","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group has-cream-dark-background-color has-background" style="border-top-color:var(--wp--preset--color--sand);border-top-width:1px;border-bottom-color:var(--wp--preset--color--sand);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--4xl);padding-left:var(--wp--preset--spacing--xl)">

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group">

        <!-- wp:html -->
        <div style="width:64px;height:64px;margin:0 auto 1.5rem;color:#d4a24c;">
            <svg viewBox="0 0 64 64" fill="none">
                <circle cx="32" cy="32" r="28" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 4"/>
                <path d="M32 16V32L42 42" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <!-- /wp:html -->

        <!-- wp:quote {"align":"center","className":"is-style-plain","style":{"typography":{"fontStyle":"italic","fontWeight":"400","fontSize":"clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem)","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|lg"}}},"textColor":"navy"} -->
        <blockquote class="wp-block-quote has-text-align-center is-style-plain has-navy-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--lg);font-size:clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem);font-style:italic;font-weight:400;line-height:1.6"><p>"We don't just provide shelter—we illuminate the path forward. Every person who walks through our doors carries potential. Our job is to help them see it."</p></blockquote>
        <!-- /wp:quote -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"navy"} -->
            <p class="has-text-align-center has-navy-color has-text-color" style="font-weight:600">Elena Vasquez</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"}},"textColor":"stone"} -->
            <p class="has-text-align-center has-stone-color has-text-color" style="font-size:0.9375rem">Founder &amp; Executive Director</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
