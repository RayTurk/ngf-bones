<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
?>
 <?php 
    if (has_post_thumbnail()) {
        $theurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
    } 
    else {
        $theurl = '/wp-content/plugins/woocommerce/assets/images/placeholder.png';
    }
?>
<div class="col-product col">
    <div class="product-grid-item">
        <a class="titleimage" href="<?php echo get_permalink();?>" title= "View Product Details" style="color:inherit;text-decoration:none">
            <div class="image" style="background-image:url(<?php echo $theurl;?>)"></div>
            <div class="title"><?php the_title();?></div>
        </a>
        <div class="details">
            <div class="price">
            <?php 
                if ($product->get_price() != "") {
                    echo $product->get_price_html();
                }
                else {
                    echo '<span class="call">Call for Price</span>';
                }
            ?>
            </div>

            <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                sprintf( '<a class="btn" href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button %s product_type_%s">%s</a>',
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( $product->id ),
                    esc_attr( $product->get_sku() ),
                    esc_attr( isset( $quantity ) ? $quantity : 1 ),
                    $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                    esc_attr( $product->product_type ),
                    esc_html( $product->add_to_cart_text() )
                ),
            $product );?>
        </div>
    </div>
</div>
