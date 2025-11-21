<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;


    if ($_GET['unzip'] != 'yes') {
        ob_start("sanitize_output");
    }
    global $wp_query;
    $cat = $wp_query->get_queried_object();
	$thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
	$image = wp_get_attachment_url( $thumbnail_id );
?>
<head>
    <?php get_atomic_part ('/meta/common_header.php', 0);?>
</head>
    <body <?php body_class(); ?>>
        <?php get_atomic_part('/organisms/header.php', $args);?>
        <div id="content" class="woocommerce_content">
            <div class="page_title" <?php if ( $image ) { echo 'style="background-image:url('.$image.');"';};?> >
                <div class="container"><h1><?php woocommerce_page_title(); ?></h1></div>
            </div>
            <div class="container main-content">
                <?php
                /**
                 * Hook: woocommerce_before_main_content.
                 *
                 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                 * @hooked woocommerce_breadcrumb - 20
                 * @hooked WC_Structured_Data::generate_website_data() - 30
                 */
                do_action( 'woocommerce_before_main_content' );

                ?>
                <div class="row">
                    <div class="col-md-4 col-lg-3 shop-side">
                        <?php get_sidebar('shop');?>
                    </div>
                    <div class="col-md-8 col-lg-9 shop-main">
                        <div class="description">
                            <?php echo $cat->description;?>
                        </div>
                        <?php
                        if ( woocommerce_product_loop() ) {

                            /**
                             * Hook: woocommerce_before_shop_loop.
                             *
                             * @hooked wc_print_notices - 10
                             * @hooked woocommerce_result_count - 20
                             * @hooked woocommerce_catalog_ordering - 30
                             */
                            echo '<div class="category-nav">';
                            do_action( 'woocommerce_before_shop_loop' );
                            echo '</div>';
                            woocommerce_product_loop_start();

                            if ( wc_get_loop_prop( 'total' ) ) {
                                while ( have_posts() ) {
                                    the_post();

                                    /**
                                     * Hook: woocommerce_shop_loop.
                                     *
                                     * @hooked WC_Structured_Data::generate_product_data() - 10
                                     */
                                    do_action( 'woocommerce_shop_loop' );

                                    get_atomic_part('molecules/feed-product.php', 0);
                                }
                            }

                            woocommerce_product_loop_end();

                            /**
                             * Hook: woocommerce_after_shop_loop.
                             *
                             * @hooked woocommerce_pagination - 10
                             */
                            echo '<div class="category-nav">';
                            do_action( 'woocommerce_after_shop_loop' );
                            echo '</div>';
                            
                            } else {
                                /**
                                 * Hook: woocommerce_no_products_found.
                                 *
                                 * @hooked wc_no_products_found - 10
                                 */
                                do_action( 'woocommerce_no_products_found' );
                            }

                            /**
                             * Hook: woocommerce_after_main_content.
                             *
                             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                             */
                            do_action( 'woocommerce_after_main_content' );

                            /**
                             * Hook: woocommerce_sidebar.
                             *
                             * @hooked woocommerce_get_sidebar - 10
                             */
                            ?>
                        
                    
                    
                </div>
            </div>
            </div>
        </div>
            
        <?php get_atomic_part ('/organisms/footer.php',0);?>
        <?php get_atomic_part ('/meta/common_footer.php', 0);?>
    </body>
</html>


