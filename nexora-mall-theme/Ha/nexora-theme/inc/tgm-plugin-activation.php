<?php
/**
 * TGM Plugin Activation Configuration
 * Recommended plugins: WooCommerce, Elementor, One Click Demo Import, Contact Form 7
 *
 * @package Nexora_Mall
 */

function nexora_register_required_plugins() {
    $plugins = array(
        array(
            'name'      => 'WooCommerce',
            'slug'      => 'woocommerce',
            'required'  => true,
        ),
        array(
            'name'      => 'Elementor Website Builder',
            'slug'      => 'elementor',
            'required'  => false,
        ),
        array(
            'name'      => 'One Click Demo Import',
            'slug'      => 'one-click-demo-import',
            'required'  => false,
        ),
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
    );

    $config = array(
        'id'           => 'nexora-mall',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => false,
    );

    // If TGMPA class exists, run tgmpa($plugins, $config)
    if ( function_exists( 'tgmpa' ) ) {
        tgmpa( $plugins, $config );
    }
}
add_action( 'tgmpa_register', 'nexora_register_required_plugins' );
