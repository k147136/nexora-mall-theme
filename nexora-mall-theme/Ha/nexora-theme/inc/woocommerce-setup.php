<?php
/**
 * WooCommerce Custom Hooks & Filters
 *
 * @package Nexora_Mall
 */

// Unhook default WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// Add Nexora custom wrappers
add_action( 'woocommerce_before_main_content', function() {
    echo '<div class="container" style="padding-top: 2rem; padding-bottom: 4rem;">';
}, 10 );

add_action( 'woocommerce_after_main_content', function() {
    echo '</div>';
}, 10 );

// Change number of products per row to 3/4
add_filter( 'loop_shop_columns', function() {
    return 4;
} );
