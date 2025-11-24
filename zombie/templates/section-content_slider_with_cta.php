<?php

/**
 * Template: Content Slider with CTA Section
 * Location: /templates/section-content_slider_with_cta.php
 *
 * This template is called by the page builder when the 'content_slider_with_cta' layout is selected
 * Replaces the old layout with Swiper.js implementation
 * Used with ACF Flexible Content
 */

$css_id = get_sub_field('css_id');
$classes = get_sub_field('classes');
$slider_items = get_sub_field('slider');

if (!$slider_items) {
  return;
}
?>

<div id="<?php echo esc_attr($css_id); ?>"
  class="page_section content_slider_section <?php echo esc_attr($classes); ?>">

  <div class="container">
    <?php get_atomic_part('/molecules/slider-content.php', 0); ?>
  </div>

</div>

<style>
  /* Content Slider Section Styles */
  .page_section.content_slider_section {
    padding: 60px 0;
    background: #f8f9fa;
  }

  @media (max-width: 768px) {
    .page_section.content_slider_section {
      padding: 40px 0;
    }
  }
</style>