<?php
/**
 * Nexora Mall Theme Customizer Settings
 *
 * @package Nexora_Mall
 */

function nexora_customize_register( $wp_customize ) {
    // 1. Luxury Colors Section
    $wp_customize->add_section( 'nexora_colors_section', array(
        'title'    => esc_html__( 'Nexora Luxury Color Scheme', 'nexora-mall' ),
        'priority' => 30,
    ) );

    // Gold Accent Color
    $wp_customize->add_setting( 'nexora_gold_accent', array(
        'default'           => '#d4a843',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nexora_gold_accent', array(
        'label'    => esc_html__( 'Primary Gold Accent Color', 'nexora-mall' ),
        'section'  => 'nexora_colors_section',
        'settings' => 'nexora_gold_accent',
    ) ) );

    // Charcoal Dark Color
    $wp_customize->add_setting( 'nexora_charcoal_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nexora_charcoal_color', array(
        'label'    => esc_html__( 'Charcoal Brand Color', 'nexora-mall' ),
        'section'  => 'nexora_colors_section',
        'settings' => 'nexora_charcoal_color',
    ) ) );

    // 2. Top Bar & Announcement Section
    $wp_customize->add_section( 'nexora_topbar_section', array(
        'title'    => esc_html__( 'Top Bar & Announcement', 'nexora-mall' ),
        'priority' => 35,
    ) );

    $wp_customize->add_setting( 'nexora_topbar_text', array(
        'default'           => 'Complimentary Express Shipping on all orders over $150',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nexora_topbar_text', array(
        'label'    => esc_html__( 'Announcement Notice Text', 'nexora-mall' ),
        'section'  => 'nexora_topbar_section',
        'type'     => 'text',
    ) );

    // 3. Footer Settings Section
    $wp_customize->add_section( 'nexora_footer_section', array(
        'title'    => esc_html__( 'Footer Branding & Socials', 'nexora-mall' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'nexora_footer_about', array(
        'default'           => '"Shop Everything. Live Better" — The world\'s premier digital marketplace.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'nexora_footer_about', array(
        'label'    => esc_html__( 'Footer About Text', 'nexora-mall' ),
        'section'  => 'nexora_footer_section',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'nexora_customize_register' );
