<?php
/**
 * Nexora Mall Elementor Integration Module
 *
 * @package Nexora_Mall
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! did_action( 'elementor/loaded' ) ) {
    return;
}

class Nexora_Elementor_Extension {

    private static $_instance = null;

    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        add_action( 'elementor/elements/categories_registered', array( $this, 'add_categories' ) );
        add_action( 'elementor/widgets/register', array( $this, 'register_widgets' ) );
    }

    public function add_categories( $elements_manager ) {
        $elements_manager->add_category(
            'nexora-luxury',
            array(
                'title' => esc_html__( 'Nexora Luxury Mall', 'nexora-mall' ),
                'icon'  => 'fa fa-crown',
            )
        );
    }

    public function register_widgets( $widgets_manager ) {
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
                require_once( $path );
                if ( class_exists( $class_name ) ) {
                    $widgets_manager->register( new $class_name() );
                }
            }
        }
    }
}

Nexora_Elementor_Extension::instance();
