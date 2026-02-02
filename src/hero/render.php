<?php
/**
 * Hero block render template
 *
 * @var array $attributes The block attributes.
 * @var string $content The block default content.
 * @var WP_Block $block The block instance.
 */

$background_image = get_theme_file_uri('assets/images/hero-bg.jpg');
?>
<section <?php echo get_block_wrapper_attributes(['class' => 'hero']); ?>>
	<div class="hero__background" style="background-image: url('<?php echo esc_url($background_image); ?>');">
		<div class="hero__overlay"></div>
	</div>
	<div class="hero__container">
		<div class="hero__content">
			<span class="hero__label">Donate to Contribute</span>
			<h1 class="hero__title">Let's build the better world together</h1>
			<p class="hero__description">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, ipsum dolor sit pulvinar dapibus leo ipsum dolor sit.
			</p>
			<div class="hero__buttons">
				<a href="/donate" class="hero__btn hero__btn--primary">Donate Fund</a>
				<a href="/about" class="hero__btn hero__btn--outline">Learn More</a>
			</div>
		</div>
	</div>
</section>
