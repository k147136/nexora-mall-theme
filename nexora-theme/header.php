<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ?: 'NEXORA MALL — Shop Everything. Live Better. The ultimate luxury online marketplace.' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- 1. ANNOUNCEMENT TOP BAR -->
<aside class="announcement-bar" aria-label="<?php esc_attr_e( 'Store Announcement', 'nexora-mall' ); ?>">
    <div class="container announcement-inner">
        <div style="display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap;">
            <span class="badge badge-gold"><?php esc_html_e( 'Luxury Premiere', 'nexora-mall' ); ?></span>
            <span><?php echo esc_html( get_theme_mod( 'nexora_topbar_text', 'Complimentary Express Shipping on all orders over $150' ) ); ?></span>
        </div>
        <div class="announcement-links">
            <a href="<?php echo esc_url( home_url( '/account-tracking' ) ); ?>#track"><i class="fas fa-truck-fast"></i> <?php esc_html_e( 'Track Order', 'nexora-mall' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><i class="fas fa-headset"></i> <?php esc_html_e( '24/7 VIP Concierge', 'nexora-mall' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/faq-policy' ) ); ?>"><i class="fas fa-shield-halved"></i> <?php esc_html_e( 'Buyer Guarantee', 'nexora-mall' ); ?></a>
        </div>
    </div>
</aside>

<!-- 2. MAIN FIXED HEADER -->
<header class="site-header" id="main-header">
    <div class="container header-main">
        <!-- Mobile Hamburger Toggle -->
        <button class="action-btn mobile-menu-toggle" onclick="toggleMobileNavDrawer()" aria-label="<?php esc_attr_e( 'Open Navigation Menu', 'nexora-mall' ); ?>">
            <i class="fas fa-bars"></i>
        </button>

                        <!-- Luxury Brand Logo -->
        <div class="brand-logo-wrap">
            <?php
            $opt_logo = function_exists('nexora_get_option') ? nexora_get_option('logo_url') : '';
            if ( ! empty( $opt_logo ) ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo custom-logo-link" rel="home" aria-label="<?php esc_attr_e( 'NEXORA MALL Homepage', 'nexora-mall' ); ?>">
                    <img src="<?php echo esc_url( $opt_logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="custom-logo site-logo-img" />
                </a>
            <?php elseif ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo custom-logo-link" rel="home" aria-label="<?php esc_attr_e( 'NEXORA MALL Homepage', 'nexora-mall' ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="custom-logo site-logo-img" />
                </a>
            <?php endif; ?>
        </div>

        <!-- Search Bar -->
        <div class="header-search-wrap">
            <form role="search" method="get" class="header-search-box" action="<?php echo esc_url( home_url( '/shop' ) ); ?>">
                <input type="search" class="header-search-input" placeholder="<?php esc_attr_e( 'Search fashion, electronics, luxury home & beauty...', 'nexora-mall' ); ?>" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off">
                <button type="submit" class="header-search-btn" aria-label="<?php esc_attr_e( 'Search Store', 'nexora-mall' ); ?>">
                    <i class="fas fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <!-- Utilities (Theme Switcher, Wishlist, Account, Cart) -->
        <div class="header-actions">
            <!-- Wishlist -->
            <a href="<?php echo esc_url( home_url( '/account-tracking' ) ); ?>#wishlist" class="action-btn" aria-label="<?php esc_attr_e( 'Wishlist', 'nexora-mall' ); ?>" title="<?php esc_attr_e( 'Your Wishlist', 'nexora-mall' ); ?>">
                <i class="far fa-heart"></i>
                <span class="action-count-badge wishlist-badge-count">0</span>
            </a>

            <!-- Account -->
            <a href="<?php echo esc_url( home_url( '/account-tracking' ) ); ?>" class="action-btn" aria-label="<?php esc_attr_e( 'My Account', 'nexora-mall' ); ?>" title="<?php esc_attr_e( 'My Account', 'nexora-mall' ); ?>">
                <i class="far fa-user"></i>
            </a>

            <!-- Cart Header CTA -->
            <?php if ( class_exists( 'WooCommerce' ) && function_exists( 'wc_get_cart_url' ) ) : ?>
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart-header-cta" aria-label="<?php esc_attr_e( 'Shopping Cart', 'nexora-mall' ); ?>">
                    <i class="fas fa-bag-shopping" style="color: var(--color-gold);"></i>
                    <span><?php esc_html_e( 'Bag', 'nexora-mall' ); ?></span>
                    <span class="action-count-badge cart-badge-count" style="position: static; margin-left: 2px;">
                        <?php echo esc_html( WC()->cart ? WC()->cart->get_cart_contents_count() : '0' ); ?>
                    </span>
                </a>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/cart' ) ); ?>" class="cart-header-cta" aria-label="<?php esc_attr_e( 'Shopping Cart', 'nexora-mall' ); ?>">
                    <i class="fas fa-bag-shopping" style="color: var(--color-gold);"></i>
                    <span><?php esc_html_e( 'Bag', 'nexora-mall' ); ?></span>
                    <span class="action-count-badge cart-badge-count" style="position: static; margin-left: 2px;">0</span>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <!-- 3. MEGA NAVIGATION BAR -->
    <nav class="nav-bar" aria-label="<?php esc_attr_e( 'Main Store Navigation', 'nexora-mall' ); ?>">
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
            <?php
            $current_cat = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';
            $is_sale = isset($_GET['sale']) && $_GET['sale'] === 'true';
            $is_home = is_front_page() || is_home();
            $is_shop = ( is_page('shop') || strpos($_SERVER['REQUEST_URI'], '/shop') !== false ) && empty($current_cat) && !$is_sale;
            $is_fashion = $current_cat === 'fashion';
            $is_electronics = $current_cat === 'electronics';
            $is_home_living = $current_cat === 'home';
            $is_about = is_page('about') || strpos($_SERVER['REQUEST_URI'], '/about') !== false;
            $is_contact = is_page('contact') || strpos($_SERVER['REQUEST_URI'], '/contact') !== false;
            $is_faq = is_page('faq-policy') || is_page('faq') || strpos($_SERVER['REQUEST_URI'], '/faq') !== false;
            ?>
            <ul class="nav-links-list">
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link <?php echo $is_home ? 'active' : ''; ?>"><?php esc_html_e( 'Home', 'nexora-mall' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="nav-link <?php echo $is_shop ? 'active' : ''; ?>">
                        <?php esc_html_e( 'Shop All', 'nexora-mall' ); ?> <i class="fas fa-chevron-down" style="font-size: 0.65rem; margin-left: 3px;"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>" class="dropdown-item"><?php esc_html_e( 'Fashion & Apparel', 'nexora-mall' ); ?></a>
                        <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="dropdown-item"><?php esc_html_e( 'Electronics & Audio', 'nexora-mall' ); ?></a>
                        <a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="dropdown-item"><?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></a>
                        <a href="<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>" class="dropdown-item"><?php esc_html_e( 'Beauty & Personal Care', 'nexora-mall' ); ?></a>
                        <a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="dropdown-item"><?php esc_html_e( 'Watches & Accessories', 'nexora-mall' ); ?></a>
                        <a href="<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>" class="dropdown-item"><?php esc_html_e( 'Gourmet Grocery & Essentials', 'nexora-mall' ); ?></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>" class="nav-link <?php echo $is_fashion ? 'active' : ''; ?>"><?php esc_html_e( 'Fashion', 'nexora-mall' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="nav-link <?php echo $is_electronics ? 'active' : ''; ?>"><?php esc_html_e( 'Electronics', 'nexora-mall' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="nav-link <?php echo $is_home_living ? 'active' : ''; ?>"><?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>" class="nav-link <?php echo $is_sale ? 'active' : ''; ?>" style="color: var(--color-gold); font-weight: 700;">
                        <i class="fas fa-bolt"></i> <?php esc_html_e( 'Flash Sale', 'nexora-mall' ); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav-link <?php echo $is_about ? 'active' : ''; ?>"><?php esc_html_e( 'About Us', 'nexora-mall' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="nav-link <?php echo $is_contact ? 'active' : ''; ?>"><?php esc_html_e( 'Contact', 'nexora-mall' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( home_url( '/faq-policy' ) ); ?>" class="nav-link <?php echo $is_faq ? 'active' : ''; ?>"><?php esc_html_e( 'FAQ & Policy', 'nexora-mall' ); ?></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- MOBILE OFF-CANVAS DRAWER -->
<div class="mobile-nav-overlay" onclick="toggleMobileNavDrawer()"></div>
<div class="mobile-nav-drawer">
    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-color); padding-bottom: 1rem;">
                <div class="brand-logo-wrap">
            <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo custom-logo-link" rel="home">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="custom-logo site-logo-img" style="max-height: 28px;" />
                </a>
            <?php endif; ?>
        </div>
        <button class="mobile-drawer-close action-btn" onclick="toggleMobileNavDrawer()" aria-label="<?php esc_attr_e( 'Close Menu', 'nexora-mall' ); ?>"><i class="fas fa-xmark"></i></button>
    </div>
    <div style="margin: 1.25rem 0;">
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/shop' ) ); ?>">
            <input type="search" placeholder="<?php esc_attr_e( 'Search catalog...', 'nexora-mall' ); ?>" value="<?php echo get_search_query(); ?>" name="s" style="width: 100%; padding: 0.65rem 1rem; border: 1px solid var(--border-color); border-radius: var(--radius-xs); background: var(--bg-secondary); color: var(--text-primary);">
        </form>
    </div>
    <ul style="display: flex; flex-direction: column; gap: 0.85rem; font-weight: 600; font-size: 0.95rem; list-style: none; padding: 0;">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="dropdown-item"><i class="fas fa-house" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Home', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="dropdown-item"><i class="fas fa-store" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Shop All Catalog', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>" class="dropdown-item"><i class="fas fa-shirt" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Fashion & Apparel', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="dropdown-item"><i class="fas fa-laptop" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Electronics & Audio', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="dropdown-item"><i class="fas fa-couch" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>" class="dropdown-item"><i class="fas fa-wand-magic-sparkles" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Beauty & Personal Care', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="dropdown-item"><i class="fas fa-clock" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Watches & Accessories', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>" class="dropdown-item"><i class="fas fa-basket-shopping" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Gourmet Grocery', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>" class="dropdown-item" style="color:var(--color-gold);"><i class="fas fa-bolt" style="margin-right:8px;"></i> <?php esc_html_e( 'Flash Sale', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="dropdown-item"><i class="fas fa-gem" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'About Nexora', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="dropdown-item"><i class="fas fa-headset" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'Contact Concierge', 'nexora-mall' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/faq-policy' ) ); ?>" class="dropdown-item"><i class="fas fa-shield-halved" style="margin-right:8px; color:var(--color-gold);"></i> <?php esc_html_e( 'FAQ & Policy', 'nexora-mall' ); ?></a></li>
    </ul>
    <div style="margin-top: auto; padding-top: 1.25rem; border-top: 1px solid var(--border-color); font-size: 0.8rem; color: var(--text-muted);">
        <div>Helpline: +1 (800) 555-NEXORA</div>
        <div style="margin-top: 4px;">Shop Everything. Live Better.</div>
    </div>
</div>
