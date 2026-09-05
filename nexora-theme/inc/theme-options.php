<?php
/**
 * Nexora Mall - Premium Theme Options Panel
 *
 * Professional Theme Options Dashboard & Customizer Integration
 *
 * @package Nexora_Mall
 * @version 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1. Helper function to retrieve theme option with fallback to get_theme_mod
 */
function nexora_get_option( $key, $default = '' ) {
    $options = get_option( 'nexora_theme_options', array() );
    if ( isset( $options[ $key ] ) && $options[ $key ] !== '' ) {
        return $options[ $key ];
    }
    $mod_val = get_theme_mod( $key, null );
    if ( $mod_val !== null && $mod_val !== '' ) {
        return $mod_val;
    }
    return $default;
}

/**
 * 2. Register Admin Menu for Theme Options
 */
function nexora_register_theme_options_menu() {
    add_menu_page(
        esc_html__( 'Nexora Options', 'nexora-mall' ),
        esc_html__( 'Nexora Options', 'nexora-mall' ),
        'manage_options',
        'nexora-theme-options',
        'nexora_render_theme_options_page',
        'dashicons-superhero-alt',
        59
    );
}
add_action( 'admin_menu', 'nexora_register_theme_options_menu' );

/**
 * 3. Register Theme Options Settings
 */
function nexora_register_theme_options_settings() {
    register_setting(
        'nexora_options_group',
        'nexora_theme_options',
        'nexora_sanitize_theme_options'
    );
}
add_action( 'admin_init', 'nexora_register_theme_options_settings' );

/**
 * 4. Sanitize Settings
 */
function nexora_sanitize_theme_options( $input ) {
    $clean = array();
    if ( ! is_array( $input ) ) {
        return $clean;
    }

    // Colors
    $clean['gold_accent']       = isset( $input['gold_accent'] ) ? sanitize_hex_color( $input['gold_accent'] ) : '#d4a843';
    $clean['gold_light']        = isset( $input['gold_light'] ) ? sanitize_hex_color( $input['gold_light'] ) : '#f3d078';
    $clean['charcoal_dark']     = isset( $input['charcoal_dark'] ) ? sanitize_hex_color( $input['charcoal_dark'] ) : '#121212';
    $clean['charcoal_card']     = isset( $input['charcoal_card'] ) ? sanitize_hex_color( $input['charcoal_card'] ) : '#1e1e1e';
    $clean['border_color']      = isset( $input['border_color'] ) ? sanitize_hex_color( $input['border_color'] ) : '#2e2e2e';

    // Logo & Header
    $clean['logo_url']          = isset( $input['logo_url'] ) ? esc_url_raw( $input['logo_url'] ) : '';
    $clean['logo_light_url']    = isset( $input['logo_light_url'] ) ? esc_url_raw( $input['logo_light_url'] ) : '';
    $clean['logo_width_desk']   = isset( $input['logo_width_desk'] ) ? absint( $input['logo_width_desk'] ) : 210;
    $clean['logo_height_desk']  = isset( $input['logo_height_desk'] ) ? absint( $input['logo_height_desk'] ) : 46;
    $clean['logo_width_mob']    = isset( $input['logo_width_mob'] ) ? absint( $input['logo_width_mob'] ) : 140;
    $clean['logo_height_mob']   = isset( $input['logo_height_mob'] ) ? absint( $input['logo_height_mob'] ) : 28;

    // Top Bar & Announcement
    $clean['topbar_enable']     = ! empty( $input['topbar_enable'] ) ? '1' : '0';
    $clean['topbar_badge']      = isset( $input['topbar_badge'] ) ? sanitize_text_field( $input['topbar_badge'] ) : 'Luxury Premiere';
    $clean['topbar_text']       = isset( $input['topbar_text'] ) ? sanitize_text_field( $input['topbar_text'] ) : 'Complimentary Express Shipping on all orders over $150';
    $clean['concierge_phone']   = isset( $input['concierge_phone'] ) ? sanitize_text_field( $input['concierge_phone'] ) : '+1 (800) 555-NEXORA';

    // General & Typography
    $clean['font_heading']      = isset( $input['font_heading'] ) ? sanitize_text_field( $input['font_heading'] ) : 'Cinzel';
    $clean['font_body']         = isset( $input['font_body'] ) ? sanitize_text_field( $input['font_body'] ) : 'Montserrat';
    $clean['container_max_w']   = isset( $input['container_max_w'] ) ? absint( $input['container_max_w'] ) : 1320;
    $clean['enable_preloader']  = ! empty( $input['enable_preloader'] ) ? '1' : '0';
    $clean['enable_backtotop']  = ! empty( $input['enable_backtotop'] ) ? '1' : '0';

    // Shop Settings
    $clean['products_per_page'] = isset( $input['products_per_page'] ) ? absint( $input['products_per_page'] ) : 12;
    $clean['shop_columns']      = isset( $input['shop_columns'] ) ? absint( $input['shop_columns'] ) : 4;
    $clean['currency_symbol']   = isset( $input['currency_symbol'] ) ? sanitize_text_field( $input['currency_symbol'] ) : '$';

    // Footer & Socials
    $clean['footer_about']      = isset( $input['footer_about'] ) ? sanitize_textarea_field( $input['footer_about'] ) : '"Shop Everything. Live Better" — The world\'s premier digital marketplace.';
    $clean['copyright_text']    = isset( $input['copyright_text'] ) ? sanitize_text_field( $input['copyright_text'] ) : '© 2026 NEXORA MALL. All Rights Reserved.';
    $clean['social_instagram']  = isset( $input['social_instagram'] ) ? esc_url_raw( $input['social_instagram'] ) : '';
    $clean['social_facebook']   = isset( $input['social_facebook'] ) ? esc_url_raw( $input['social_facebook'] ) : '';
    $clean['social_twitter']    = isset( $input['social_twitter'] ) ? esc_url_raw( $input['social_twitter'] ) : '';
    $clean['social_pinterest']  = isset( $input['social_pinterest'] ) ? esc_url_raw( $input['social_pinterest'] ) : '';
    $clean['social_youtube']    = isset( $input['social_youtube'] ) ? esc_url_raw( $input['social_youtube'] ) : '';

    // Custom Scripts & CSS
    $clean['custom_css']        = isset( $input['custom_css'] ) ? wp_strip_all_tags( $input['custom_css'] ) : '';

    return $clean;
}

/**
 * 5. Render Theme Options Page UI
 */
function nexora_render_theme_options_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    wp_enqueue_media();
    ?>
    <div class="wrap nexora-options-wrap">
        <style>
            .nexora-options-wrap { max-width: 1150px; margin: 20px 20px 40px 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, sans-serif; }
            .nexora-options-header { background: linear-gradient(135deg, #161616 0%, #222222 100%); color: #fff; padding: 25px 30px; border-radius: 8px 8px 0 0; display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid #d4a843; box-shadow: 0 4px 15px rgba(0,0,0,0.15); }
            .nexora-options-header h1 { color: #fff; margin: 0; font-size: 24px; font-weight: 800; letter-spacing: 1px; }
            .nexora-options-header h1 span { color: #d4a843; }
            .nexora-options-body { background: #fff; border: 1px solid #ccd0d4; border-top: none; border-radius: 0 0 8px 8px; display: flex; min-height: 600px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
            .nexora-tabs-nav { width: 220px; background: #f8fafc; border-right: 1px solid #e2e8f0; padding: 15px 0; flex-shrink: 0; }
            .nexora-tab-link { display: flex; align-items: center; gap: 10px; padding: 14px 20px; font-size: 14px; font-weight: 600; color: #475569; text-decoration: none; border-left: 4px solid transparent; transition: all 0.2s ease; cursor: pointer; }
            .nexora-tab-link:hover { color: #d4a843; background: #f1f5f9; }
            .nexora-tab-link.active { color: #1e293b; background: #fff; border-left-color: #d4a843; font-weight: 700; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
            .nexora-tabs-content { flex: 1; padding: 30px 40px; }
            .nexora-tab-pane { display: none; }
            .nexora-tab-pane.active { display: block; animation: nexoraFade 0.3s ease; }
            @keyframes nexoraFade { from { opacity: 0; transform: translateY(5px); } to { opacity: 1; transform: translateY(0); } }
            .nexora-section-title { font-size: 18px; font-weight: 700; color: #1e293b; margin-top: 0; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #f1f5f9; display: flex; align-items: center; gap: 8px; }
            .nexora-field-row { margin-bottom: 22px; display: grid; grid-template-columns: 240px 1fr; gap: 20px; align-items: start; }
            .nexora-field-label { font-weight: 600; font-size: 14px; color: #334155; }
            .nexora-field-desc { font-size: 12px; color: #64748b; margin-top: 4px; line-height: 1.4; }
            .nexora-field-input input[type="text"], .nexora-field-input input[type="number"], .nexora-field-input select, .nexora-field-input textarea { width: 100%; max-width: 480px; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; }
            .nexora-field-input input[type="color"] { width: 44px; height: 36px; padding: 2px; border: 1px solid #cbd5e1; border-radius: 6px; cursor: pointer; vertical-align: middle; }
            .nexora-save-bar { margin-top: 30px; padding-top: 20px; border-top: 1px solid #e2e8f0; display: flex; justify-content: flex-end; }
            .btn-nexora-save { background: #d4a843 !important; border-color: #c49835 !important; color: #1a1a1a !important; font-weight: 700 !important; font-size: 14px !important; padding: 6px 24px !important; border-radius: 6px !important; height: auto !important; box-shadow: 0 2px 6px rgba(212,168,67,0.3) !important; cursor: pointer; }
            .btn-nexora-save:hover { background: #c49835 !important; }
            .switch-toggle { position: relative; display: inline-block; width: 46px; height: 24px; }
            .switch-toggle input { opacity: 0; width: 0; height: 0; }
            .slider-round { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #cbd5e1; transition: .3s; border-radius: 24px; }
            .slider-round:before { position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background-color: white; transition: .3s; border-radius: 50%; }
            input:checked + .slider-round { background-color: #d4a843; }
            input:checked + .slider-round:before { transform: translateX(22px); }
        </style>

        <div class="nexora-options-header">
            <div>
                <h1>NEXORA<span>.MALL</span> Theme Options Panel</h1>
                <p style="margin: 4px 0 0 0; color: #cbd5e1; font-size: 13px;">Full Luxury Storefront Customization — V1.1.0</p>
            </div>
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="button" style="background: rgba(255,255,255,0.15); color: #fff; border: 1px solid rgba(255,255,255,0.3); font-weight: 600;"><span class="dashicons dashicons-visibility" style="font-size:16px; margin-top:2px;"></span> View Live Store</a>
            </div>
        </div>

        <?php if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ) : ?>
            <div class="notice notice-success is-dismissible" style="margin: 15px 0 0 0;">
                <p><strong><?php esc_html_e( 'Nexora Theme Settings Saved Successfully!', 'nexora-mall' ); ?></strong></p>
            </div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php
            settings_fields( 'nexora_options_group' );
            ?>
            <div class="nexora-options-body">
                <!-- Tabs Navigation -->
                <div class="nexora-tabs-nav">
                    <div class="nexora-tab-link active" onclick="openNexoraTab(event, 'tab-general')"><span class="dashicons dashicons-admin-generic"></span> General & Layout</div>
                    <div class="nexora-tab-link" onclick="openNexoraTab(event, 'tab-header')"><span class="dashicons dashicons-heading"></span> Header & Top Bar</div>
                    <div class="nexora-tab-link" onclick="openNexoraTab(event, 'tab-logo')"><span class="dashicons dashicons-format-image"></span> Logo & Sizing</div>
                    <div class="nexora-tab-link" onclick="openNexoraTab(event, 'tab-colors')"><span class="dashicons dashicons-art"></span> Luxury Colors</div>
                    <div class="nexora-tab-link" onclick="openNexoraTab(event, 'tab-typography')"><span class="dashicons dashicons-editor-textcolor"></span> Typography / Fonts</div>
                    <div class="nexora-tab-link" onclick="openNexoraTab(event, 'tab-shop')"><span class="dashicons dashicons-cart"></span> Shop & Catalog</div>
                    <div class="nexora-tab-link" onclick="openNexoraTab(event, 'tab-footer')"><span class="dashicons dashicons-editor-insertmore"></span> Footer & Socials</div>
                    <div class="nexora-tab-link" onclick="openNexoraTab(event, 'tab-custom-code')"><span class="dashicons dashicons-editor-code"></span> Custom CSS</div>
                </div>

                <!-- Tabs Content -->
                <div class="nexora-tabs-content">

                    <!-- TAB 1: GENERAL -->
                    <div id="tab-general" class="nexora-tab-pane active">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-admin-generic"></span> General & Store Layout</h2>
                        
                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Container Max Width (px)
                                <div class="nexora-field-desc">Default width of main container grid.</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="number" name="nexora_theme_options[container_max_w]" value="<?php echo esc_attr( nexora_get_option( 'container_max_w', 1320 ) ); ?>" min="1000" max="1800" step="10">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Back to Top Button
                                <div class="nexora-field-desc">Display floating smooth scroll button on all pages.</div>
                            </div>
                            <div class="nexora-field-input">
                                <label class="switch-toggle">
                                    <input type="checkbox" name="nexora_theme_options[enable_backtotop]" value="1" <?php checked( nexora_get_option( 'enable_backtotop', '1' ), '1' ); ?>>
                                    <span class="slider-round"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 2: HEADER -->
                    <div id="tab-header" class="nexora-tab-pane">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-heading"></span> Header & Top Announcement Bar</h2>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Enable Top Bar
                                <div class="nexora-field-desc">Show/Hide announcement bar above the main header.</div>
                            </div>
                            <div class="nexora-field-input">
                                <label class="switch-toggle">
                                    <input type="checkbox" name="nexora_theme_options[topbar_enable]" value="1" <?php checked( nexora_get_option( 'topbar_enable', '1' ), '1' ); ?>>
                                    <span class="slider-round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Top Bar Gold Badge Text
                                <div class="nexora-field-desc">E.g., "Luxury Premiere" or "Flash Sale"</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="text" name="nexora_theme_options[topbar_badge]" value="<?php echo esc_attr( nexora_get_option( 'topbar_badge', 'Luxury Premiere' ) ); ?>">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Top Bar Notice Text
                                <div class="nexora-field-desc">Shipping promotion, free delivery notice or announcements.</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="text" name="nexora_theme_options[topbar_text]" value="<?php echo esc_attr( nexora_get_option( 'topbar_text', 'Complimentary Express Shipping on all orders over $150' ) ); ?>">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">VIP Helpline / Phone
                                <div class="nexora-field-desc">Helpline phone displayed on drawer and contact sections.</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="text" name="nexora_theme_options[concierge_phone]" value="<?php echo esc_attr( nexora_get_option( 'concierge_phone', '+1 (800) 555-NEXORA' ) ); ?>">
                            </div>
                        </div>
                    </div>

                    <!-- TAB 3: LOGO & BRANDING -->
                    <div id="tab-logo" class="nexora-tab-pane">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-format-image"></span> Logo Sizing & Upload</h2>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Custom Logo Image URL
                                <div class="nexora-field-desc">Upload or enter image URL for custom logo.</div>
                            </div>
                            <div class="nexora-field-input">
                                <div style="display:flex; gap:8px;">
                                    <input type="text" id="nexora_logo_input" name="nexora_theme_options[logo_url]" value="<?php echo esc_attr( nexora_get_option( 'logo_url', '' ) ); ?>" placeholder="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>">
                                    <button type="button" class="button" onclick="uploadLogoMedia('nexora_logo_input')">Select Image</button>
                                </div>
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Desktop Logo Max Width (px)
                                <div class="nexora-field-desc">Desktop width (recommended: 180px - 260px).</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="number" name="nexora_theme_options[logo_width_desk]" value="<?php echo esc_attr( nexora_get_option( 'logo_width_desk', 210 ) ); ?>" min="60" max="400" step="2">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Desktop Logo Max Height (px)
                                <div class="nexora-field-desc">Desktop height (recommended: 36px - 54px).</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="number" name="nexora_theme_options[logo_height_desk]" value="<?php echo esc_attr( nexora_get_option( 'logo_height_desk', 46 ) ); ?>" min="20" max="100" step="2">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Mobile Logo Max Width (px)
                                <div class="nexora-field-desc">Mobile width (recommended: 120px - 150px).</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="number" name="nexora_theme_options[logo_width_mob]" value="<?php echo esc_attr( nexora_get_option( 'logo_width_mob', 140 ) ); ?>" min="50" max="250" step="2">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Mobile Logo Max Height (px)
                                <div class="nexora-field-desc">Mobile height (recommended: 24px - 32px).</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="number" name="nexora_theme_options[logo_height_mob]" value="<?php echo esc_attr( nexora_get_option( 'logo_height_mob', 28 ) ); ?>" min="16" max="60" step="2">
                            </div>
                        </div>
                    </div>

                    <!-- TAB 4: COLORS -->
                    <div id="tab-colors" class="nexora-tab-pane">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-art"></span> Luxury Color Scheme</h2>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Primary Gold Accent Color
                                <div class="nexora-field-desc">Buttons, badges, highlights, price tags.</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="color" name="nexora_theme_options[gold_accent]" value="<?php echo esc_attr( nexora_get_option( 'gold_accent', '#d4a843' ) ); ?>">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Charcoal Dark / Header BG
                                <div class="nexora-field-desc">Top bar, hero backgrounds, charcoal badges.</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="color" name="nexora_theme_options[charcoal_dark]" value="<?php echo esc_attr( nexora_get_option( 'charcoal_dark', '#121212' ) ); ?>">
                            </div>
                        </div>
                    </div>

                    <!-- TAB 5: TYPOGRAPHY -->
                    <div id="tab-typography" class="nexora-tab-pane">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-editor-textcolor"></span> Typography & Google Fonts</h2>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Headings Font Family
                                <div class="nexora-field-desc">Applied to H1-H6, logo text, product titles.</div>
                            </div>
                            <div class="nexora-field-input">
                                <select name="nexora_theme_options[font_heading]">
                                    <option value="'Cinzel', serif" <?php selected( nexora_get_option( 'font_heading' ), "'Cinzel', serif" ); ?>>Cinzel (Luxury Serif - Default)</option>
                                    <option value="'Playfair Display', serif" <?php selected( nexora_get_option( 'font_heading' ), "'Playfair Display', serif" ); ?>>Playfair Display (Editorial Serif)</option>
                                    <option value="'Montserrat', sans-serif" <?php selected( nexora_get_option( 'font_heading' ), "'Montserrat', sans-serif" ); ?>>Montserrat (Modern Geometric)</option>
                                    <option value="'Cormorant Garamond', serif" <?php selected( nexora_get_option( 'font_heading' ), "'Cormorant Garamond', serif" ); ?>>Cormorant Garamond (High Fashion)</option>
                                    <option value="'Plus Jakarta Sans', sans-serif" <?php selected( nexora_get_option( 'font_heading' ), "'Plus Jakarta Sans', sans-serif" ); ?>>Plus Jakarta Sans (Ultra Clean)</option>
                                </select>
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Body Font Family
                                <div class="nexora-field-desc">Applied to paragraphs, descriptions, menus.</div>
                            </div>
                            <div class="nexora-field-input">
                                <select name="nexora_theme_options[font_body]">
                                    <option value="'Montserrat', sans-serif" <?php selected( nexora_get_option( 'font_body' ), "'Montserrat', sans-serif" ); ?>>Montserrat (Default)</option>
                                    <option value="'Inter', sans-serif" <?php selected( nexora_get_option( 'font_body' ), "'Inter', sans-serif" ); ?>>Inter (Clean Tech)</option>
                                    <option value="'Plus Jakarta Sans', sans-serif" <?php selected( nexora_get_option( 'font_body' ), "'Plus Jakarta Sans', sans-serif" ); ?>>Plus Jakarta Sans</option>
                                    <option value="'Open Sans', sans-serif" <?php selected( nexora_get_option( 'font_body' ), "'Open Sans', sans-serif" ); ?>>Open Sans</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 6: SHOP & CATALOG -->
                    <div id="tab-shop" class="nexora-tab-pane">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-cart"></span> Shop & Catalog Settings</h2>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Products Per Page
                                <div class="nexora-field-desc">Number of products to display on shop and category pages.</div>
                            </div>
                            <div class="nexora-field-input">
                                <select name="nexora_theme_options[products_per_page]">
                                    <option value="9" <?php selected( nexora_get_option( 'products_per_page', 12 ), 9 ); ?>>9 Products</option>
                                    <option value="12" <?php selected( nexora_get_option( 'products_per_page', 12 ), 12 ); ?>>12 Products (Default)</option>
                                    <option value="16" <?php selected( nexora_get_option( 'products_per_page', 12 ), 16 ); ?>>16 Products</option>
                                    <option value="24" <?php selected( nexora_get_option( 'products_per_page', 12 ), 24 ); ?>>24 Products</option>
                                </select>
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Default Currency Symbol
                                <div class="nexora-field-desc">$, €, £, AED, PKR, etc.</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="text" name="nexora_theme_options[currency_symbol]" value="<?php echo esc_attr( nexora_get_option( 'currency_symbol', '$' ) ); ?>" style="max-width: 100px;">
                            </div>
                        </div>
                    </div>

                    <!-- TAB 7: FOOTER & SOCIALS -->
                    <div id="tab-footer" class="nexora-tab-pane">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-editor-insertmore"></span> Footer & Social Media Links</h2>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Footer About Text
                                <div class="nexora-field-desc">Short bio about your luxury marketplace.</div>
                            </div>
                            <div class="nexora-field-input">
                                <textarea name="nexora_theme_options[footer_about]" rows="3"><?php echo esc_textarea( nexora_get_option( 'footer_about', '"Shop Everything. Live Better" — The world\'s premier digital marketplace.' ) ); ?></textarea>
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Copyright Notice
                                <div class="nexora-field-desc">Bottom copyright text.</div>
                            </div>
                            <div class="nexora-field-input">
                                <input type="text" name="nexora_theme_options[copyright_text]" value="<?php echo esc_attr( nexora_get_option( 'copyright_text', '© 2026 NEXORA MALL. All Rights Reserved.' ) ); ?>">
                            </div>
                        </div>

                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Instagram Profile URL</div>
                            <div class="nexora-field-input"><input type="text" name="nexora_theme_options[social_instagram]" value="<?php echo esc_attr( nexora_get_option( 'social_instagram', 'https://instagram.com' ) ); ?>"></div>
                        </div>
                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Facebook Profile URL</div>
                            <div class="nexora-field-input"><input type="text" name="nexora_theme_options[social_facebook]" value="<?php echo esc_attr( nexora_get_option( 'social_facebook', 'https://facebook.com' ) ); ?>"></div>
                        </div>
                        <div class="nexora-field-row">
                            <div class="nexora-field-label">Twitter / X URL</div>
                            <div class="nexora-field-input"><input type="text" name="nexora_theme_options[social_twitter]" value="<?php echo esc_attr( nexora_get_option( 'social_twitter', 'https://twitter.com' ) ); ?>"></div>
                        </div>
                    </div>

                    <!-- TAB 8: CUSTOM CODE -->
                    <div id="tab-custom-code" class="nexora-tab-pane">
                        <h2 class="nexora-section-title"><span class="dashicons dashicons-editor-code"></span> Custom CSS Code</h2>

                        <div class="nexora-field-row" style="grid-template-columns: 1fr;">
                            <div>
                                <p class="nexora-field-desc" style="margin-bottom:10px;">Add any custom CSS styling rules here to override or tweak any frontend elements.</p>
                                <textarea name="nexora_theme_options[custom_css]" rows="10" style="font-family: monospace; font-size: 13px;"><?php echo esc_textarea( nexora_get_option( 'custom_css', '' ) ); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Save Changes Button -->
                    <div class="nexora-save-bar">
                        <?php submit_button( esc_html__( 'Save All Changes', 'nexora-mall' ), 'primary btn-nexora-save', 'submit', false ); ?>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script>
    function openNexoraTab(evt, tabId) {
        var panes = document.querySelectorAll('.nexora-tab-pane');
        panes.forEach(function(p){ p.classList.remove('active'); });
        var links = document.querySelectorAll('.nexora-tab-link');
        links.forEach(function(l){ l.classList.remove('active'); });
        
        var target = document.getElementById(tabId);
        if (target) target.classList.add('active');
        evt.currentTarget.classList.add('active');
    }

    function uploadLogoMedia(targetInputId) {
        var customUploader = wp.media({
            title: 'Select or Upload Logo Image',
            button: { text: 'Use this Logo' },
            multiple: false
        }).on('select', function() {
            var attachment = customUploader.state().get('selection').first().toJSON();
            document.getElementById(targetInputId).value = attachment.url;
        }).open();
    }
    </script>
    <?php
}

/**
 * 6. Dynamic CSS Hook in wp_head based on Theme Options & Customizer
 */
function nexora_inject_theme_options_css() {
    $gold_accent    = nexora_get_option( 'gold_accent', '#d4a843' );
    $charcoal_dark  = nexora_get_option( 'charcoal_dark', '#121212' );
    $desk_w         = nexora_get_option( 'logo_width_desk', 210 );
    $desk_h         = nexora_get_option( 'logo_height_desk', 46 );
    $mob_w          = nexora_get_option( 'logo_width_mob', 140 );
    $mob_h          = nexora_get_option( 'logo_height_mob', 28 );
    $heading_font   = nexora_get_option( 'font_heading', "'Cinzel', serif" );
    $body_font      = nexora_get_option( 'font_body', "'Montserrat', sans-serif" );
    $custom_css     = nexora_get_option( 'custom_css', '' );
    ?>
    <style type="text/css" id="nexora-theme-options-dynamic-css">
        :root {
            --color-gold: <?php echo esc_attr( $gold_accent ); ?>;
            --color-charcoal-dark: <?php echo esc_attr( $charcoal_dark ); ?>;
            --font-heading: <?php echo $heading_font; ?>;
            --font-body: <?php echo $body_font; ?>;
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
        <?php if ( ! empty( $custom_css ) ) : ?>
            <?php echo wp_strip_all_tags( $custom_css ); ?>
        <?php endif; ?>
    </style>
    <?php
}
add_action( 'wp_head', 'nexora_inject_theme_options_css', 100 );
