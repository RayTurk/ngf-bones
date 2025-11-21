<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
$rental = $product->get_attribute('theater_is');

if ( $upsells ) : ?>

	<section class="up-sells upsells products">
        <?php if (!empty($rental)) {
            echo '<h2> Related Show Items</h2>';
        }
        else {
            echo '<h2>You may also like&hellip;</h2>';
        }
		?>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $upsells as $upsell ) : ?>

				<?php
					$post_object = get_post( $upsell->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					get_atomic_part('molecules/single-product.php', 0);
                ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();
    $cs_products = get_post_meta( get_the_ID(), '_crosssell_ids',true);
    $args = array( 
        'post_type' => 'product', 
        'posts_per_page' => -1, 
        'post__in' => $cs_products 
    );
    if (!empty($cs_products)) {
        $products = new WP_Query( $args );
        if( $products->have_posts() ) : 
            echo '<div class="cross-sells"><h2>Often Purchased Together</h2><div class="wc-loop"><div class="row">';
            while ( $products->have_posts() ) : $products->the_post();
                get_atomic_part('molecules/single-product.php',0);
            endwhile; 

            echo '</div></div></div>';
        endif;
        wp_reset_postdata();
    }
?>
