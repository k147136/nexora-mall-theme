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
    load_theme_textdomain( 'nexora-mall', NEXORA_DIR . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 600, true );
    add_image_size( 'nexora-product-card', 600, 600, true );
    add_image_size( 'nexora-hero-slide', 1800, 700, true );

    register_nav_menus( array(
        'primary-menu'   => esc_html__( 'Primary Mega Navigation', 'nexora-mall' ),
        'topbar-menu'    => esc_html__( 'Top Bar Quick Links', 'nexora-mall' ),
        'footer-menu-1'  => esc_html__( 'Footer Marketplace Links', 'nexora-mall' ),
        'footer-menu-2'  => esc_html__( 'Footer Client Services', 'nexora-mall' ),
        'footer-menu-3'  => esc_html__( 'Footer The House Links', 'nexora-mall' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'nexora_theme_setup' );

/**
 * 2. Enqueue Scripts & Stylesheets
 */
function nexora_enqueue_scripts() {
    wp_enqueue_style( 'nexora-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap', array(), null );
    wp_enqueue_style( 'nexora-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );
    wp_enqueue_style( 'nexora-theme-style', NEXORA_URI . '/assets/css/theme.css', array(), NEXORA_VERSION );
    wp_enqueue_style( 'nexora-main-style', get_stylesheet_uri(), array( 'nexora-theme-style' ), NEXORA_VERSION );

    wp_enqueue_script( 'nexora-theme-js', NEXORA_URI . '/assets/js/theme.js', array( 'jquery' ), NEXORA_VERSION, true );
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
 * 3. Register Widget Areas
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

add_action( 'plugins_loaded', function() {
    if ( did_action( 'elementor/loaded' ) && file_exists( NEXORA_DIR . '/inc/elementor/elementor.php' ) ) {
        require_once NEXORA_DIR . '/inc/elementor/elementor.php';
    }
} );

/**
 * 5. Automatic Template Fallback Router & Virtual Pages
 */
function nexora_virtual_page_handler() {
    if ( is_admin() || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
        return;
    }
    $req = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );
    $routes = array(
        'shop'             => 'page-shop.php',
        'about'            => 'page-about.php',
        'contact'          => 'page-contact.php',
        'faq-policy'       => 'page-faq.php',
        'faq'              => 'page-faq.php',
        'account-tracking' => 'page-tracking.php',
        'tracking'         => 'page-tracking.php',
        'blog'             => 'page-blog.php',
    );
    
    if ( isset( $routes[$req] ) ) {
        global $wp_query;
        if ( isset( $wp_query ) ) {
            $wp_query->is_404 = false;
        }
        status_header( 200 );
    }
}
add_action( 'template_redirect', 'nexora_virtual_page_handler', 1 );

function nexora_auto_template_include( $template ) {
    if ( is_admin() || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
        return $template;
    }
    $req = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );
    $routes = array(
        'shop'             => 'page-shop.php',
        'about'            => 'page-about.php',
        'contact'          => 'page-contact.php',
        'faq-policy'       => 'page-faq.php',
        'faq'              => 'page-faq.php',
        'account-tracking' => 'page-tracking.php',
        'tracking'         => 'page-tracking.php',
        'blog'             => 'page-blog.php',
    );
    if ( isset( $routes[$req] ) ) {
        $t = NEXORA_DIR . '/' . $routes[$req];
        if ( file_exists( $t ) ) {
            return $t;
        }
    }
    return $template;
}
add_filter( 'template_include', 'nexora_auto_template_include', 99 );

require_once NEXORA_DIR . '/inc/theme-options.php';
