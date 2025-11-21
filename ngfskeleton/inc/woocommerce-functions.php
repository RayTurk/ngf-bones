<?php
/*This file adds Woocommerce Support for the NGF Bootstrap Theme  You need to require this file in your functions.php in order for Woocommerce support to be enabled*/
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="container main-content">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//remove tabs from Single Product page
remove_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
