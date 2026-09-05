<?php
/**
 * Nexora Mall Theme Customizer Settings
 *
 * @package Nexora_Mall
 */

function nexora_customize_register( $wp_customize ) {
    // ==========================================
    // 1. Header & Logo Sizing Settings
    // ==========================================
    $wp_customize->add_section( 'nexora_logo_header_section', array(
        'title'       => esc_html__( 'Header & Logo Sizing', 'nexora-mall' ),
        'priority'    => 25,
        'description' => esc_html__( 'Customize your logo dimensions and header appearance on Desktop and Mobile devices.', 'nexora-mall' ),
    ) );

    // Desktop Logo Max Width
    $wp_customize->add_setting( 'nexora_logo_width_desktop', array(
        'default'           => 210,
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'nexora_logo_width_desktop', array(
        'label'       => esc_html__( 'Desktop Logo Max Width (px)', 'nexora-mall' ),
        'section'     => 'nexora_logo_header_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 50,
            'max'  => 400,
            'step' => 2,
        ),
    ) );

    // Desktop Logo Max Height
    $wp_customize->add_setting( 'nexora_logo_height_desktop', array(
        'default'           => 46,
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'nexora_logo_height_desktop', array(
        'label'       => esc_html__( 'Desktop Logo Max Height (px)', 'nexora-mall' ),
        'section'     => 'nexora_logo_header_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 20,
            'max'  => 120,
            'step' => 2,
        ),
    ) );

    // Mobile Logo Max Width
    $wp_customize->add_setting( 'nexora_logo_width_mobile', array(
        'default'           => 140,
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'nexora_logo_width_mobile', array(
        'label'       => esc_html__( 'Mobile Logo Max Width (px)', 'nexora-mall' ),
        'section'     => 'nexora_logo_header_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 50,
            'max'  => 250,
            'step' => 2,
        ),
    ) );

    // Mobile Logo Max Height
    $wp_customize->add_setting( 'nexora_logo_height_mobile', array(
        'default'           => 28,
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'nexora_logo_height_mobile', array(
        'label'       => esc_html__( 'Mobile Logo Max Height (px)', 'nexora-mall' ),
        'section'     => 'nexora_logo_header_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 16,
            'max'  => 60,
            'step' => 2,
        ),
    ) );

    // ==========================================
    // 2. Luxury Colors Section
    // ==========================================
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

    // ==========================================
    // 3. Top Bar & Announcement Section
    // ==========================================
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

    // ==========================================
    // 4. Footer Settings Section
    // ==========================================
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

/**
 * Output dynamic CSS in head based on Customizer settings
 */
function nexora_customizer_css() {
    $gold_accent   = get_theme_mod( 'nexora_gold_accent', '#d4a843' );
    $charcoal      = get_theme_mod( 'nexora_charcoal_color', '#333333' );
    $desk_w        = get_theme_mod( 'nexora_logo_width_desktop', 210 );
    $desk_h        = get_theme_mod( 'nexora_logo_height_desktop', 46 );
    $mob_w         = get_theme_mod( 'nexora_logo_width_mobile', 140 );
    $mob_h         = get_theme_mod( 'nexora_logo_height_mobile', 28 );
    ?>
    <style type="text/css" id="nexora-customizer-css">
        :root {
            --color-gold: <?php echo esc_attr( $gold_accent ); ?>;
            --color-charcoal: <?php echo esc_attr( $charcoal ); ?>;
        }
        .brand-logo-wrap img.custom-logo,
        .brand-logo-wrap img.site-logo-img,
        .brand-logo img {
            max-width: <?php echo absint( $desk_w ); ?>px !important;
            max-height: <?php echo absint( $desk_h ); ?>px !important;
            width: auto;
            height: auto;
            object-fit: contain;
            display: block;
        }
        @media (max-width: 991px) {
            .brand-logo-wrap img.custom-logo,
            .brand-logo-wrap img.site-logo-img,
            .brand-logo img {
                max-width: <?php echo absint( $mob_w ); ?>px !important;
                max-height: <?php echo absint( $mob_h ); ?>px !important;
            }
        }
    </style>
    <?php
}
add_action( 'wp_head', 'nexora_customizer_css', 100 );
