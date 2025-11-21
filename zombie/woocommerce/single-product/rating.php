<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) } ?>

	<div class="woocommerce-product-rating">
        
        <?php 
            $fullStars = round($average);
            $emptyStars = 5 - $fullStars;
            for ($x = 1; $x <= $fullStars; $x++) {
              echo '<i class="fas fa-star"></i>';
            }
            for ($x = 1; $x <= $emptyStars; $x++) {
              echo '<i class="far fa-star"></i>';
            }
        ?>
            
            
        
        <span class="sr-only"><?php echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?></span>
		
			
        <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
            (<u><?php echo $review_count;?><span class="sr-only"> Reviews</span></u>)
            <?php if ( comments_open() ) : ?>
                <br><u>Leave a Review</u>
            <?php endif ?>    
        </a>
			
        
	</div>

<?php }
    else {?>
        <?php if ( comments_open() ) : ?>
            <a href="#reviews" class="woocommerce-review-link first" rel="nofollow">Be the first to review this product.</a>
        <?php endif ?>    
<?php   }
?>
