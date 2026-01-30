<?php
/**
 * About block render template
 *
 * @var array $attributes The block attributes.
 * @var string $content The block default content.
 * @var WP_Block $block The block instance.
 */
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'wp-block-myblocks-about']); ?>>
	<div class="about-container">
		<div class="about-images">
			<div class="about-image about-image-1">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/about-1.jpg')); ?>" alt="Children with volunteers" />
			</div>
			<div class="about-image about-image-2">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/about-2.jpg')); ?>" alt="Community members together" />
			</div>
			<div class="about-image about-image-3">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/about-3.jpg')); ?>" alt="Volunteers holding signs" />
			</div>
		</div>

		<div class="about-content">
			<span class="about-label">About us</span>
			<h2 class="about-title">Making a Difference Together</h2>
			<p class="about-description">
				We Are A Nonprofit Organization Dedicated To Creating Positive Change In Communities Worldwide. Our Mission Is To Empower Individuals, Protect The Environment, And Promote Social Equality Through Impactful Initiatives And Collaborative Efforts. With A Focus On Compassion And Sustainability, We Strive To Make A Lasting Difference Where It Matters Most.
			</p>

			<div class="about-cards">
				<div class="about-card">
					<div class="about-card-icon">
						<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="12" r="10"></circle>
							<polyline points="12 6 12 12 16 14"></polyline>
						</svg>
					</div>
					<h3 class="about-card-title">Our Mission</h3>
					<p class="about-card-text">
						Committed to building a better future through education, sustainability, & humanitarian support.
					</p>
				</div>

				<div class="about-card">
					<div class="about-card-icon">
						<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="12" r="10"></circle>
							<line x1="2" y1="12" x2="22" y2="12"></line>
							<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
						</svg>
					</div>
					<h3 class="about-card-title">Our Vision</h3>
					<p class="about-card-text">
						A world where every individual has access to essential resources and opportunities for growth.
					</p>
				</div>
			</div>

			<a href="#learn-more" class="about-cta">
				Learn More
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<line x1="5" y1="12" x2="19" y2="12"></line>
					<polyline points="12 5 19 12 12 19"></polyline>
				</svg>
			</a>
		</div>
	</div>
</section>
