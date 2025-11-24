<?php

/**
 * Molecule: Gallery Slider
 * Location: /molecules/slider-gallery.php
 *
 * Usage: get_atomic_part('/molecules/slider-gallery.php', $args);
 *
 * Expected $args:
 * - 'images' => array of image IDs or URLs
 * - 'show_navigation' => true/false (default: true)
 * - 'show_pagination' => true/false (default: true)
 * - 'autoplay' => true/false (default: false)
 */

// Get images from args or ACF
$images = isset($vars['images']) ? $vars['images'] : get_sub_field('gallery_images');
$show_navigation = isset($vars['show_navigation']) ? $vars['show_navigation'] : true;
$show_pagination = isset($vars['show_pagination']) ? $vars['show_pagination'] : true;
$autoplay = isset($vars['autoplay']) ? $vars['autoplay'] : false;

if (!$images) {
  return;
}
?>

<div class="gallery-swiper swiper" <?php if ($autoplay): ?>data-autoplay="true" <?php endif; ?>>
  <div class="swiper-wrapper">
    <?php foreach ($images as $image):
      // Handle both image arrays and image IDs
      if (is_array($image)) {
        $image_url = $image['url'];
        $image_alt = $image['alt'];
        $image_title = $image['title'];
      } else {
        $image_url = wp_get_attachment_image_url($image, 'large');
        $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
        $image_title = get_the_title($image);
      }
    ?>
      <div class="swiper-slide">
        <img src="<?php echo esc_url($image_url); ?>"
          alt="<?php echo esc_attr($image_alt); ?>"
          title="<?php echo esc_attr($image_title); ?>"
          loading="lazy">
        <?php if (!empty($image_title)): ?>
          <div class="slide-caption">
            <?php echo esc_html($image_title); ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if ($show_pagination): ?>
    <div class="swiper-pagination"></div>
  <?php endif; ?>

  <?php if ($show_navigation): ?>
    <div class="swiper-button-prev">
      <span class="sr-only">Previous</span>
    </div>
    <div class="swiper-button-next">
      <span class="sr-only">Next</span>
    </div>
  <?php endif; ?>
</div>