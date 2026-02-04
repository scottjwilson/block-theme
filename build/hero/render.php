<?php
/**
 * Harbor Light Hero Block
 */
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'hero']); ?>>
    <div class="hero-background">
        <div class="hero-gradient"></div>
        <div class="hero-waves">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="currentColor" fill-opacity="0.03" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <div class="hero-content">
        <div class="hero-text">
            <p class="hero-eyebrow">Seattle, Washington · Est. 2016</p>
            <h1 class="hero-title">
                Guiding paths from<br>
                <em>shelter to stability</em>
            </h1>
            <p class="hero-description">
                Harbor Light bridges the gap between homelessness and lasting stability
                through education, job training, and compassionate housing support.
                Because everyone deserves to find their way home.
            </p>
            <div class="hero-actions">
                <a href="#programs" class="btn btn-primary btn-lg">
                    Explore Our Programs
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="#impact" class="btn btn-outline btn-lg">See Our Impact</a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-image-wrapper">
                <div class="image-placeholder hero-image">
                    <span>Hero Image: Volunteer helping client with paperwork at Harbor Light center</span>
                </div>
                <div class="hero-image-accent"></div>
            </div>

            <div class="hero-stat-card">
                <span class="stat-number">3,247</span>
                <span class="stat-label">Lives changed in 2025</span>
            </div>
        </div>
    </div>

    <div class="hero-scroll">
        <span>Scroll to discover</span>
        <div class="scroll-line"></div>
    </div>
</section>
