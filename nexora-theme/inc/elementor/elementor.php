<?php
/**
 * Nexora Mall Elementor Integration Module
 *
 * @package Nexora_Mall
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// 1. Add Custom Category
function nexora_elementor_categories( $elements_manager ) {
    $elements_manager->add_category(
        'nexora-luxury',
        array(
            'title' => esc_html__( 'Nexora Luxury Mall', 'nexora-mall' ),
            'icon'  => 'fa fa-crown',
        )
    );
}
add_action( 'elementor/elements/categories_registered', 'nexora_elementor_categories' );
add_action( 'elementor/init', function() {
    if ( class_exists( '\Elementor\Plugin' ) && isset( \Elementor\Plugin::$instance->elements_manager ) ) {
        \Elementor\Plugin::$instance->elements_manager->add_category(
            'nexora-luxury',
            array(
                'title' => esc_html__( 'Nexora Luxury Mall', 'nexora-mall' ),
                'icon'  => 'fa fa-crown',
            )
        );
    }
} );

// 2. Register All 8 Custom Widgets
function nexora_register_elementor_widgets( $widgets_manager ) {
    $widget_files = array(
        'hero-slider.php'         => 'Nexora_Elementor_Hero_Slider',
        'value-props.php'         => 'Nexora_Elementor_Value_Props',
        'categories-showcase.php' => 'Nexora_Elementor_Categories_Showcase',
        'products-grid.php'       => 'Nexora_Elementor_Products_Grid',
        'flash-deals.php'         => 'Nexora_Elementor_Flash_Deals',
        'promo-banners.php'       => 'Nexora_Elementor_Promo_Banners',
        'editorial-blog.php'      => 'Nexora_Elementor_Editorial_Blog',
        'testimonials.php'        => 'Nexora_Elementor_Testimonials',
    );

    foreach ( $widget_files as $file => $class_name ) {
        $path = __DIR__ . '/widgets/' . $file;
        if ( file_exists( $path ) ) {
            require_once $path;
            if ( class_exists( $class_name ) ) {
                if ( method_exists( $widgets_manager, 'register' ) ) {
                    $widgets_manager->register( new $class_name() );
                } elseif ( method_exists( $widgets_manager, 'register_widget_type' ) ) {
                    $widgets_manager->register_widget_type( new $class_name() );
                }
            }
        }
    }
}
add_action( 'elementor/widgets/register', 'nexora_register_elementor_widgets' );
add_action( 'elementor/widgets/widgets_registered', 'nexora_register_elementor_widgets' );
