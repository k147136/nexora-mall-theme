<?php
/**
 * Nexora Mall Theme Functions & Definitions
 *
 * @package Nexora_Mall
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'NEXORA_VERSION', '1.0.0' );
define( 'NEXORA_DIR', get_template_directory() );
define( 'NEXORA_URI', get_template_directory_uri() );

/**
 * 1. Theme Setup
 */
function nexora_theme_setup() {
    // Load text domain for translation
    load_theme_textdomain( 'nexora-mall', NEXORA_DIR . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 600, true );
    add_image_size( 'nexora-product-card', 600, 600, true );
    add_image_size( 'nexora-hero-slide', 1800, 700, true );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary-menu'   => esc_html__( 'Primary Mega Navigation', 'nexora-mall' ),
        'topbar-menu'    => esc_html__( 'Top Bar Quick Links', 'nexora-mall' ),
        'footer-menu-1'  => esc_html__( 'Footer Marketplace Links', 'nexora-mall' ),
        'footer-menu-2'  => esc_html__( 'Footer Client Services', 'nexora-mall' ),
        'footer-menu-3'  => esc_html__( 'Footer The House Links', 'nexora-mall' ),
    ) );

    // Switch default core markup for search form, comment form, etc. to HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Custom Logo Support
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for WooCommerce
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Elementor Support
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'nexora_theme_setup' );

/**
 * 2. Enqueue Scripts & Stylesheets
 */
function nexora_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style( 'nexora-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap', array(), null );

    // Font Awesome 6 Icons
    wp_enqueue_style( 'nexora-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

    // Main Theme CSS
    wp_enqueue_style( 'nexora-theme-style', NEXORA_URI . '/assets/css/theme.css', array(), NEXORA_VERSION );
    wp_enqueue_style( 'nexora-main-style', get_stylesheet_uri(), array( 'nexora-theme-style' ), NEXORA_VERSION );

    // Main Theme JavaScript
    wp_enqueue_script( 'nexora-theme-js', NEXORA_URI . '/assets/js/theme.js', array( 'jquery' ), NEXORA_VERSION, true );

    // Pass dynamic localized variables to JS
    wp_localize_script( 'nexora-theme-js', 'nexora_ajax_obj', array(
        'ajax_url'    => admin_url( 'admin-ajax.php' ),
        'site_url'    => get_site_url(),
        'theme_uri'   => NEXORA_URI,
        'nonce'       => wp_create_nonce( 'nexora_security_nonce' ),
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'nexora_enqueue_scripts' );

/**
 * 3. Register Widget Areas (Sidebars)
 */
function nexora_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar (Catalog Filters)', 'nexora-mall' ),
        'id'            => 'shop-sidebar',
        'description'   => esc_html__( 'Add WooCommerce filter widgets here.', 'nexora-mall' ),
        'before_widget' => '<div id="%1$s" class="widget shop-filter-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title section-tag">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'nexora-mall' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Add standard blog widgets here.', 'nexora-mall' ),
        'before_widget' => '<div id="%1$s" class="widget blog-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'nexora_widgets_init' );

/**
 * 4. Include Additional Theme Modules
 */
require_once NEXORA_DIR . '/inc/customizer.php';
require_once NEXORA_DIR . '/inc/tgm-plugin-activation.php';
require_once NEXORA_DIR . '/inc/woocommerce-setup.php';
require_once NEXORA_DIR . '/inc/demo-import.php';

// Safe Elementor loader (only runs if Elementor plugin is active)
add_action( 'plugins_loaded', function() {
    if ( did_action( 'elementor/loaded' ) && file_exists( NEXORA_DIR . '/inc/elementor/elementor.php' ) ) {
        require_once NEXORA_DIR . '/inc/elementor/elementor.php';
    }
} );
