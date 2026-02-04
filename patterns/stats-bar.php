<?php
/**
 * Title: Stats Bar
 * Slug: block-theme/stats-bar
 * Categories: harborlight, featured
 * Description: A horizontal stats section with key metrics.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}}},"backgroundColor":"navy","textColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-cream-color has-navy-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--3xl);padding-left:var(--wp--preset--spacing--xl)">

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
    <div class="wp-block-group">

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--lg)">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 1.5rem + 2.5vw, 3rem)","lineHeight":"1"}},"textColor":"amber","fontFamily":"display"} -->
            <p class="has-text-align-center has-amber-color has-text-color has-display-font-family" style="font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);line-height:1">8</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color" style="font-weight:600">Years of Service</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"},"elements":{"link":{"color":{"text":"var:preset|color|cream"}}}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color has-link-color" style="font-size:0.9375rem;opacity:0.7">Serving the Puget Sound since 2016</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"cream","className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-cream-color has-alpha-channel-opacity has-cream-background-color has-background is-style-wide" style="opacity:0.15;height:80px"/>
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--lg)">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 1.5rem + 2.5vw, 3rem)","lineHeight":"1"}},"textColor":"amber","fontFamily":"display"} -->
            <p class="has-text-align-center has-amber-color has-text-color has-display-font-family" style="font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);line-height:1">12K+</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color" style="font-weight:600">People Served</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"},"elements":{"link":{"color":{"text":"var:preset|color|cream"}}}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color has-link-color" style="font-size:0.9375rem;opacity:0.7">Adults, youth, and families supported</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"cream","className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-cream-color has-alpha-channel-opacity has-cream-background-color has-background is-style-wide" style="opacity:0.15;height:80px"/>
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--lg)">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 1.5rem + 2.5vw, 3rem)","lineHeight":"1"}},"textColor":"amber","fontFamily":"display"} -->
            <p class="has-text-align-center has-amber-color has-text-color has-display-font-family" style="font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);line-height:1">78%</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color" style="font-weight:600">Housing Success</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"},"elements":{"link":{"color":{"text":"var:preset|color|cream"}}}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color has-link-color" style="font-size:0.9375rem;opacity:0.7">Clients in stable housing after 1 year</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"cream","className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-cream-color has-alpha-channel-opacity has-cream-background-color has-background is-style-wide" style="opacity:0.15;height:80px"/>
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--lg)">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 1.5rem + 2.5vw, 3rem)","lineHeight":"1"}},"textColor":"amber","fontFamily":"display"} -->
            <p class="has-text-align-center has-amber-color has-text-color has-display-font-family" style="font-size:clamp(2rem, 1.5rem + 2.5vw, 3rem);line-height:1">340</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color" style="font-weight:600">Active Volunteers</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"},"elements":{"link":{"color":{"text":"var:preset|color|cream"}}}},"textColor":"cream"} -->
            <p class="has-text-align-center has-cream-color has-text-color has-link-color" style="font-size:0.9375rem;opacity:0.7">Community members making a difference</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
