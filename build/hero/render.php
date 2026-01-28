<?php
/**
 * Hero block render template for Harborlight Foundation
 *
 * @var array $attributes The block attributes.
 * @var string $content The block default content.
 * @var WP_Block $block The block instance.
 */
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'harborlight-hero']); ?>>
	<div class="hero-container">
		<div class="hero-content">
			<h1 class="hero-title">Together, We Can Make a Difference</h1>
			<p class="hero-description">
				Together, We Create A Better Future For All. Join Hands With Us To Make A Positive Impact. Our Mission Is To Create Positive Change By Providing Essential Resources, Education, And Support To Underserved Communities.
			</p>
			<a href="#get-involved" class="hero-cta">Get Involved</a>

			<div class="hero-stats">
				<div class="stat-item">
					<span class="stat-number">150+</span>
					<span class="stat-label">Lives Impacted</span>
				</div>
				<div class="stat-item">
					<span class="stat-number">200+</span>
					<span class="stat-label">Communities Served</span>
				</div>
				<div class="stat-item">
					<span class="stat-number">20+</span>
					<span class="stat-label">Years of Impact</span>
				</div>
			</div>
		</div>

		<div class="hero-images">
			<div class="image-stack">
				<div class="hero-image hero-image-1">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/1.png')); ?>" alt="Children learning together" />
				</div>
				<div class="hero-image hero-image-2">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/2.png')); ?>" alt="Community outreach" />
				</div>
			</div>
		</div>
	</div>
</section>
