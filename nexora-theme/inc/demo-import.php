<?php
/**
 * Nexora Mall - Automatic Demo Homepage & Elementor Configuration Helper
 *
 * @package Nexora_Mall
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nexora_auto_configure_elementor_homepage() {
    // 1. Check if 'Home' page exists
    $home_page = get_page_by_path( 'home' );
    if ( ! $home_page ) {
        $home_page = get_page_by_title( 'Home' );
    }

    if ( ! $home_page ) {
        $home_id = wp_insert_post( array(
            'post_title'     => 'Home',
            'post_name'      => 'home',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'post_content'   => '',
        ) );
    } else {
        $home_id = $home_page->ID;
    }

    if ( $home_id && ! is_wp_error( $home_id ) ) {
        update_post_meta( $home_id, '_wp_page_template', 'template-elementor-fullwidth.php' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_id );
    }

    // 2. Check if 'Shop' page exists
    $shop_page = get_page_by_path( 'shop' );
    if ( ! $shop_page ) {
        $shop_page = get_page_by_title( 'Shop' );
    }
    if ( ! $shop_page ) {
        $shop_id = wp_insert_post( array(
            'post_title'   => 'Shop',
            'post_name'    => 'shop',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ) );
        if ( $shop_id && ! is_wp_error( $shop_id ) ) {
            update_post_meta( $shop_id, '_wp_page_template', 'page-shop.php' );
        }
    }
}
add_action( 'after_switch_theme', 'nexora_auto_configure_elementor_homepage' );
