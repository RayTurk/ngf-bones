<?php
/*This file adds Woocommerce Support for the NGF Bootstrap Theme  You need to require this file in your functions.php in order for Woocommerce support to be enabled*/
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '';
}

function my_theme_wrapper_end() {
  echo '';
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//remove tabs from Single Product page
remove_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

//change Shop Loop

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  if ($_GET['perpage'] != "" ) {
      $cols= $_GET['perpage'];
      
  }
  else {
    $cols = 48;    
  }
  return $cols;
}
/*Select box for Search Pages*/

function myprefix_search_posts_per_page($query) {
    if ( $query->is_search ) {
        $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);     
        if (!isset($per_page)) {
            $per_page = 48;
        }
        $query->set( 'posts_per_page', $per_page );
    }
    return $query;
}
add_filter( 'pre_get_posts','myprefix_search_posts_per_page', 20 );


function ps_selectbox() {
    $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);     
    if (!isset($per_page)) {
        $per_page = 48;
    }
    echo '<div class="woocommerce-perpage">';
    echo '<span>Per Page: </span>';
    echo '<select onchange="if (this.value) window.location.href=this.value">';   
    $orderby_options = array(
        '12' => '12',
        '24' => '24',
        '36' => '36',
        '48' => '48',
        '60' => '60',
        '-1' => 'All'
    );
    foreach( $orderby_options as $value => $label ) {
        echo "<option ".selected( $per_page, $value )." value='?perpage=$value'>$label</option>";
    }
    echo '</select>';
    echo '</div>';
}
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/*woocommerce hook changes. */
function fix_wc_loop() {
    
    add_action( 'woocommerce_before_shop_loop', 'ps_selectbox', 20 );
    add_action( 'woocommerce_before_shop_loop', 'ChildSelect', 10);
    add_action( 'woocommerce_before_shop_loop', 'woocommerce_pagination', 40 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
    add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 15 );
    
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
    add_action( 'woocommerce_after_shop_loop', 'ChildSelect', 10);
    add_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 15 );
    add_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 25 );
    add_action( 'woocommerce_after_shop_loop', 'ps_selectbox', 30 );
    add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 40 );
    
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
    
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 7);
    add_action( 'woocommerce_single_product_summary', 'the_content', 15 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
    
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
    
    
}
add_action( 'init', 'fix_wc_loop');

/*breadcrumb change*/
/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '<span>&gt;</span>';
	return $defaults;
}


/**
 * @snippet       Add "Quantity" Label in front of Add to Cart Button - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=21986
 * @author        Rodolfo Melogli
 * @testedwith    WC 3.5.1
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart' );
 
function bbloomer_echo_qty_front_add_cart() {
 echo '<div class="quant"><span class="label">Quantity: </span>'; 
}

add_action( 'woocommerce_after_add_to_cart_quantity', 'breakitspace' );
 
function breakitspace () {
 echo '</div>'; 
}


function ChildSelect () {
    echo '<div class="browsechild"><ul class="navbar-nav"><li class="dropdown"><a href="#">Browse Subcategories</a><ul class="dropdown-menu">';
    global $wp_query;
    $thecat = $wp_query->get_queried_object();
    $taxonomy     = 'product_cat';
    $orderby      = 'menu_order';  
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 0;      // 1 for yes, 0 for no  
    $title        = '';  
    $empty        = 0;
    $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty,
         'child_of'     => $thecat->term_id,
         'parent'       => $thecat->term_id,
    );
    $all_categories = get_categories( $args );
    foreach ($all_categories as $cat) {
        echo '<li><a href="'.get_term_link($cat->term_id).'">'.$cat->name.'</a></li>';
    }
    echo '</ul></li></ul></div>';
}

 /* Add options to sort dropdown on category page.*/
add_filter( 'woocommerce_default_catalog_orderby_options', 'swat_sort_by_title' );  
add_filter( 'woocommerce_catalog_orderby', 'swat_sort_by_title' ); 
function swat_sort_by_title( $orderby_array ) {
	$orderby_array[ 'title' ] = 'Sort by title (A-Z)';
	$orderby_array[ 'title-desc' ] = 'Sort by title (Z-A)';

	return $orderby_array;
}