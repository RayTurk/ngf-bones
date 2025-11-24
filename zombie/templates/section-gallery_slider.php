<?php

/**
 * Template: Gallery Slider Section
 * Location: /templates/section-gallery_slider.php
 *
 * This template is called by the page builder when the 'gallery_slider' layout is selected
 * Used with ACF Flexible Content
 */

$css_id = get_sub_field('css_id');
$classes = get_sub_field('classes');
$background_image = get_sub_field('background_image');
$section_title = get_sub_field('section_title');
$section_subtitle = get_sub_field('section_subtitle');
$gallery_images = get_sub_field('gallery_images');

// Slider settings
$show_navigation = get_sub_field('show_navigation') !== false; // Default true
$show_pagination = get_sub_field('show_pagination') !== false; // Default true
$autoplay = get_sub_field('autoplay');

// Build section style
$section_style = '';
if ($background_image) {
  $section_style = 'background-image: url(' . esc_url($background_image) . '); background-size: cover; background-position: center;';
}
?>

<div id="<?php echo esc_attr($css_id); ?>"
  class="page_section gallery_slider_section <?php echo esc_attr($classes); ?>"
  <?php if ($section_style): ?>style="<?php echo esc_attr($section_style); ?>" <?php endif; ?>>

  <div class="container">

    <?php if ($section_title || $section_subtitle): ?>
      <div class="section-header text-center mb-5">
        <?php if ($section_title): ?>
          <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
        <?php endif; ?>

        <?php if ($section_subtitle): ?>
          <p class="section-subtitle"><?php echo esc_html($section_subtitle); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($gallery_images): ?>
      <div class="gallery-slider-wrapper">
        <?php
        get_atomic_part('/molecules/slider-gallery.php', array(
          'images' => $gallery_images,
          'show_navigation' => $show_navigation,
          'show_pagination' => $show_pagination,
          'autoplay' => $autoplay,
        ));
        ?>
      </div>
    <?php endif; ?>

  </div>
</div>

<style>
  /* Gallery Slider Section Specific Styles */
  .page_section.gallery_slider_section {
    padding: 60px 0;
  }

  .page_section.gallery_slider_section .section-header {
    margin-bottom: 40px;
  }

  .page_section.gallery_slider_section .section-title {
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: bold;
  }

  .page_section.gallery_slider_section .section-subtitle {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 0;
  }

  .gallery-slider-wrapper {
    max-width: 1200px;
    margin: 0 auto;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .page_section.gallery_slider_section {
      padding: 40px 0;
    }

    .page_section.gallery_slider_section .section-title {
      font-size: 2rem;
    }
  }
</style>