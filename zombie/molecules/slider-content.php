<?php

/**
 * Molecule: Content Slider with CTA
 * Location: /molecules/slider-content.php
 *
 * Usage: get_atomic_part('/molecules/slider-content.php', 0);
 *
 * This component pulls from ACF flexible content field 'slider'
 * Used in the 'content_slider_with_cta' layout
 */

// Get slider items from ACF repeater
$slides = get_sub_field('slider');

if (!$slides) {
  return;
}
?>

<div class="content-swiper swiper">
  <div class="swiper-wrapper">
    <?php foreach ($slides as $slide): ?>
      <div class="swiper-slide">
        <div class="slide-content">
          <?php echo $slide['slide']; // WYSIWYG content 
          ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="swiper-pagination"></div>

  <div class="swiper-button-prev">
    <span class="sr-only">Previous slide</span>
  </div>
  <div class="swiper-button-next">
    <span class="sr-only">Next slide</span>
  </div>
</div>

<style>
  /* Content Slider Specific Styles */
  .content-swiper {
    padding: 40px 0;
  }

  .content-swiper .slide-content {
    padding: 20px;
  }

  .content-swiper .slide-content h2,
  .content-swiper .slide-content h3 {
    margin-bottom: 20px;
  }

  .content-swiper .slide-content p {
    margin-bottom: 15px;
    line-height: 1.6;
  }

  .content-swiper .slide-content img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
  }

  .content-swiper .slide-content .btn,
  .content-swiper .slide-content a.button {
    margin-top: 20px;
  }

  /* Responsive */
  @media (min-width: 768px) {
    .content-swiper .slide-content {
      padding: 40px;
    }
  }
</style>