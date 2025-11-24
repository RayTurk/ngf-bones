<?php

/**
 * Molecule: Testimonial Slider
 * Location: /molecules/slider-testimonials.php
 *
 * Usage: get_atomic_part('/molecules/slider-testimonials.php', $args);
 *
 * Expected $args:
 * - 'post_type' => 'testimonials' (or custom post type)
 * - 'posts_per_page' => number (default: -1 for all)
 * - 'category' => taxonomy term (optional)
 */

// Get parameters from $vars
$post_type = isset($vars['post_type']) ? $vars['post_type'] : 'testimonials';
$posts_per_page = isset($vars['posts_per_page']) ? $vars['posts_per_page'] : -1;
$category = isset($vars['category']) ? $vars['category'] : '';

// Build query args
$query_args = array(
  'post_type' => $post_type,
  'posts_per_page' => $posts_per_page,
  'orderby' => 'date',
  'order' => 'DESC',
);

// Add category filter if provided
if ($category) {
  $query_args['tax_query'] = array(
    array(
      'taxonomy' => 'testimonial_category',
      'field' => 'slug',
      'terms' => $category,
    ),
  );
}

$testimonials = new WP_Query($query_args);

if (!$testimonials->have_posts()) {
  return;
}
?>

<div class="testimonial-swiper swiper">
  <div class="swiper-wrapper">
    <?php while ($testimonials->have_posts()): $testimonials->the_post();
      $company = get_field('company');
      $position = get_field('position');
      $rating = get_field('rating'); // 1-5 star rating
      $photo = get_field('photo');
    ?>
      <div class="swiper-slide">
        <div class="testimonial-slide">

          <?php if ($rating): ?>
            <div class="testimonial-rating">
              <?php for ($i = 1; $i <= 5; $i++): ?>
                <svg class="star <?php echo $i <= $rating ? 'filled' : 'empty'; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                  <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                </svg>
              <?php endfor; ?>
            </div>
          <?php endif; ?>

          <div class="testimonial-content">
            <?php the_content(); ?>
          </div>

          <div class="testimonial-author">
            <?php if ($photo): ?>
              <div class="author-photo">
                <img src="<?php echo esc_url($photo['url']); ?>"
                  alt="<?php echo esc_attr($photo['alt']); ?>"
                  loading="lazy">
              </div>
            <?php endif; ?>

            <div class="author-info">
              <strong class="author-name"><?php the_title(); ?></strong>
              <?php if ($position): ?>
                <span class="author-position"><?php echo esc_html($position); ?></span>
              <?php endif; ?>
              <?php if ($company): ?>
                <span class="author-company"><?php echo esc_html($company); ?></span>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>

  <div class="swiper-pagination"></div>
</div>

<style>
  /* Testimonial Slider Specific Styles */
  .testimonial-slide {
    padding: 40px 20px;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
  }

  .testimonial-rating {
    margin-bottom: 20px;
  }

  .testimonial-rating .star {
    display: inline-block;
    width: 20px;
    height: 20px;
    margin: 0 2px;
  }

  .testimonial-rating .star.filled path {
    fill: #ffc107;
  }

  .testimonial-rating .star.empty path {
    fill: #e0e0e0;
  }

  .testimonial-content {
    font-size: 1.25rem;
    line-height: 1.6;
    margin-bottom: 30px;
    font-style: italic;
  }

  .testimonial-content:before {
    content: '"';
    font-size: 3rem;
    line-height: 0;
    vertical-align: -0.4em;
    opacity: 0.3;
  }

  .testimonial-content:after {
    content: '"';
    font-size: 3rem;
    line-height: 0;
    vertical-align: -0.4em;
    opacity: 0.3;
  }

  .testimonial-author {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
  }

  .author-photo img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
  }

  .author-info {
    text-align: left;
    display: flex;
    flex-direction: column;
  }

  .author-name {
    font-weight: bold;
    font-size: 1.1rem;
  }

  .author-position,
  .author-company {
    font-size: 0.9rem;
    color: #666;
  }
</style>