<?php
function deregister_polyfill(){

  wp_deregister_script( 'wp-polyfill' );
  wp_deregister_script( 'regenerator-runtime' );

}
add_action( 'wp_enqueue_scripts', 'deregister_polyfill');

if (!function_exists('ngf_url_to_tag')) {
    function ngf_url_to_tag($url) {
        $id = attachment_url_to_postid($url);
        echo wp_get_attachment_image($id, 'full');
    }
    
}
function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

require get_template_directory() . '/inc/post_type-testimonial.php';