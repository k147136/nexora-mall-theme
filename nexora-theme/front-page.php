<?php
/**
 * Template Name: Front Page Luxury Template
 *
 * The template for displaying the luxury front page / home page of Nexora Mall.
 * Fully compatible with Elementor drag-and-drop builder with fallback.
 *
 * @package Nexora_Mall
 */

get_header();

// Check if current front page has content or is built with Elementor
$has_custom_content = false;
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        $page_content = get_the_content();
        if ( ! empty( trim( $page_content ) ) ) {
            $has_custom_content = true;
            ?>
            <main id="primary" class="site-main nexora-elementor-canvas">
                <?php the_content(); ?>
            </main>
            <?php
        }
    }
}

if ( ! $has_custom_content ) :
?>
<main id="primary" class="site-main">

    <!-- 1. HERO SLIDER CAROUSEL -->
    <section class="hero-slider-section" aria-label="<?php esc_attr_e( 'Featured Collections Carousel', 'nexora-mall' ); ?>">
        <div class="hero-slider-wrap">
            <!-- Slide 1 -->
            <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1800&q=80');">
                <div class="hero-slide-overlay"></div>
                <div class="container" style="height: 100%; display: flex; align-items: center;">
                    <div class="hero-slide-content reveal-on-scroll">
                        <span class="hero-tag"><i class="fas fa-crown"></i> <?php esc_html_e( 'The Autumn Luxury Edit', 'nexora-mall' ); ?></span>
                        <h1 class="hero-title"><?php esc_html_e( 'Timeless Luxury,', 'nexora-mall' ); ?> <span><?php esc_html_e( 'Unrivaled', 'nexora-mall' ); ?></span> <?php esc_html_e( 'Craftsmanship.', 'nexora-mall' ); ?></h1>
                        <p class="hero-desc">
                            <?php esc_html_e( 'Immerse yourself in our curated selection of fine gold horology, bespoke Italian tailoring, and high-jewelry accessories.', 'nexora-mall' ); ?>
                        </p>
                        <div class="hero-cta-row">
                            <a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="btn btn-gold">
                                <?php esc_html_e( 'Explore Collection', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>" class="btn btn-outline" style="color: #fff; border-color: rgba(255,255,255,0.4);">
                                <?php esc_html_e( 'View Flash Sale', 'nexora-mall' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1550009158-9ebf69173e03?auto=format&fit=crop&w=1800&q=80');">
                <div class="hero-slide-overlay"></div>
                <div class="container" style="height: 100%; display: flex; align-items: center;">
                    <div class="hero-slide-content">
                        <span class="hero-tag"><i class="fas fa-microchip"></i> <?php esc_html_e( 'Next-Gen Tech', 'nexora-mall' ); ?></span>
                        <h2 class="hero-title"><?php esc_html_e( 'Acoustic', 'nexora-mall' ); ?> <span><?php esc_html_e( 'Perfection', 'nexora-mall' ); ?></span> & <?php esc_html_e( 'Future Living.', 'nexora-mall' ); ?></h2>
                        <p class="hero-desc">
                            <?php esc_html_e( 'Studio-grade wireless acoustics, flagship smart devices, and intelligent luxury living engineered for the discerning professional.', 'nexora-mall' ); ?>
                        </p>
                        <div class="hero-cta-row">
                            <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="btn btn-gold">
                                <?php esc_html_e( 'Shop Electronics', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1800&q=80');">
                <div class="hero-slide-overlay"></div>
                <div class="container" style="height: 100%; display: flex; align-items: center;">
                    <div class="hero-slide-content">
                        <span class="hero-tag"><i class="fas fa-couch"></i> <?php esc_html_e( 'Interior Architecture', 'nexora-mall' ); ?></span>
                        <h2 class="hero-title"><?php esc_html_e( 'Curated Spaces,', 'nexora-mall' ); ?> <span><?php esc_html_e( 'Refined', 'nexora-mall' ); ?></span> <?php esc_html_e( 'Living.', 'nexora-mall' ); ?></h2>
                        <p class="hero-desc">
                            <?php esc_html_e( 'Transform your sanctuaries with handcrafted Italian leather lounges, Carrara marble tables, and sculptural illumination.', 'nexora-mall' ); ?>
                        </p>
                        <div class="hero-cta-row">
                            <a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="btn btn-gold">
                                <?php esc_html_e( 'Discover Home & Living', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="slider-arrow slider-prev" aria-label="<?php esc_attr_e( 'Previous Slide', 'nexora-mall' ); ?>"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-arrow slider-next" aria-label="<?php esc_attr_e( 'Next Slide', 'nexora-mall' ); ?>"><i class="fas fa-chevron-right"></i></button>
            <div class="slider-dots-container"></div>
        </div>
    </section>

    <!-- 2. VALUE PROPOSITION STRIP -->
    <section class="value-props-section">
        <div class="container">
            <div class="value-props-grid">
                <div class="value-card reveal-on-scroll delay-1">
                    <div class="value-icon-box"><i class="fas fa-truck-fast"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( 'Complimentary Global Shipping', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( 'Free express dispatch on orders over $150', 'nexora-mall' ); ?></div>
                    </div>
                </div>
                <div class="value-card reveal-on-scroll delay-2">
                    <div class="value-icon-box"><i class="fas fa-certificate"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( '100% Authenticity Guaranteed', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( 'Directly sourced & certified by master houses', 'nexora-mall' ); ?></div>
                    </div>
                </div>
                <div class="value-card reveal-on-scroll delay-3">
                    <div class="value-icon-box"><i class="fas fa-shield-halved"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( '30-Day Luxury Concierge Returns', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( 'Complimentary pickup & instant refunds', 'nexora-mall' ); ?></div>
                    </div>
                </div>
                <div class="value-card reveal-on-scroll delay-4">
                    <div class="value-icon-box"><i class="fas fa-lock"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( 'End-to-End Encrypted Checkout', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( '256-bit bank grade security & crypto ready', 'nexora-mall' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CURATED DEPARTMENTS / CATEGORIES -->
    <section class="section-padding" style="background-color: var(--bg-primary);">
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-tag"><?php esc_html_e( 'Discover Collections', 'nexora-mall' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Shop By Exclusive Department', 'nexora-mall' ); ?></h2>
                <p class="section-desc"><?php esc_html_e( 'Explore signature hand-crafted essentials, high-end electronics, and bespoke fashion crafted for the modern luxury lifestyle.', 'nexora-mall' ); ?></p>
            </div>
            <div class="categories-grid">
                <a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>" class="category-card reveal-on-scroll delay-1">
                    <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=600&q=80" alt="Fashion & Apparel" class="category-img" loading="lazy">
                    <div class="category-overlay">
                        <span class="category-count">120+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                        <h3 class="category-name"><?php esc_html_e( 'Fashion & Apparel', 'nexora-mall' ); ?></h3>
                        <span class="category-cta"><?php esc_html_e( 'Explore Collection', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="category-card reveal-on-scroll delay-2">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=600&q=80" alt="Electronics & Audio" class="category-img" loading="lazy">
                    <div class="category-overlay">
                        <span class="category-count">85+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                        <h3 class="category-name"><?php esc_html_e( 'Electronics & Audio', 'nexora-mall' ); ?></h3>
                        <span class="category-cta"><?php esc_html_e( 'Explore Collection', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="category-card reveal-on-scroll delay-3">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=600&q=80" alt="Home & Living" class="category-img" loading="lazy">
                    <div class="category-overlay">
                        <span class="category-count">94+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                        <h3 class="category-name"><?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></h3>
                        <span class="category-cta"><?php esc_html_e( 'Explore Collection', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>" class="category-card reveal-on-scroll delay-4">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=600&q=80" alt="Beauty & Personal Care" class="category-img" loading="lazy">
                    <div class="category-overlay">
                        <span class="category-count">64+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                        <h3 class="category-name"><?php esc_html_e( 'Beauty & Skincare', 'nexora-mall' ); ?></h3>
                        <span class="category-cta"><?php esc_html_e( 'Explore Collection', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="category-card reveal-on-scroll delay-5">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80" alt="Watches & Accessories" class="category-img" loading="lazy">
                    <div class="category-overlay">
                        <span class="category-count">110+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                        <h3 class="category-name"><?php esc_html_e( 'Watches & Accessories', 'nexora-mall' ); ?></h3>
                        <span class="category-cta"><?php esc_html_e( 'Explore Collection', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>" class="category-card reveal-on-scroll delay-6">
                    <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=600&q=80" alt="Gourmet Grocery" class="category-img" loading="lazy">
                    <div class="category-overlay">
                        <span class="category-count">50+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                        <h3 class="category-name"><?php esc_html_e( 'Gourmet Grocery', 'nexora-mall' ); ?></h3>
                        <span class="category-cta"><?php esc_html_e( 'Explore Collection', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. SIGNATURE PRODUCTS GRID (Tabs & Filter) -->
    <section class="section-padding" style="background-color: var(--bg-secondary);">
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-tag"><?php esc_html_e( 'Curated Showcase', 'nexora-mall' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Featured Luxury Arrivals', 'nexora-mall' ); ?></h2>
                <p class="section-desc"><?php esc_html_e( 'Top-selling bespoke creations and limited releases, rigorously vetted for authenticity.', 'nexora-mall' ); ?></p>
            </div>

            <!-- Tab Filters -->
            <div class="product-tabs-nav reveal-on-scroll">
                <button class="product-tab-btn active" onclick="filterProducts('all', this)"><?php esc_html_e( 'All Items', 'nexora-mall' ); ?></button>
                <button class="product-tab-btn" onclick="filterProducts('fashion', this)"><?php esc_html_e( 'Fashion', 'nexora-mall' ); ?></button>
                <button class="product-tab-btn" onclick="filterProducts('electronics', this)"><?php esc_html_e( 'Electronics', 'nexora-mall' ); ?></button>
                <button class="product-tab-btn" onclick="filterProducts('home', this)"><?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></button>
                <button class="product-tab-btn" onclick="filterProducts('accessories', this)"><?php esc_html_e( 'Accessories', 'nexora-mall' ); ?></button>
            </div>

            <!-- Products Grid -->
            <div class="products-grid" id="main-products-grid">
                <?php
                // Display WooCommerce products if available, else standard fallback
                $has_wc_products = false;
                if ( class_exists( 'WooCommerce' ) ) {
                    $wc_args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                        'status'         => 'publish',
                    );
                    $wc_query = new WP_Query( $wc_args );
                    if ( $wc_query->have_posts() ) {
                        $has_wc_products = true;
                        while ( $wc_query->have_posts() ) {
                            $wc_query->the_post();
                            wc_get_template_part( 'content', 'product' );
                        }
                        wp_reset_postdata();
                    }
                }

                if ( ! $has_wc_products ) :
                    $demo_items = array(
                        array('id'=>'nx-101','cat_slug'=>'accessories','name'=>'Aura Royal Chronograph Watch','cat'=>'Watches & Accessories','price'=>'$1,250.00','orig'=>'$1,500.00','badge'=>'Bestseller','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85','reviews'=>128),
                        array('id'=>'nx-102','cat_slug'=>'fashion','name'=>'Sovereign Tailored Velvet Tuxedo','cat'=>"Men's Fashion",'price'=>'$890.00','orig'=>'$1,100.00','badge'=>'VIP Exclusive','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85','reviews'=>94),
                        array('id'=>'nx-103','cat_slug'=>'electronics','name'=>'Sonance Spatial Hi-Fi Headphones','cat'=>'Electronics & Audio','price'=>'$450.00','orig'=>'$520.00','badge'=>'Audiophile','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=85','reviews'=>210),
                        array('id'=>'nx-104','cat_slug'=>'home','name'=>'Nordic Minimalist Marble Coffee Table','cat'=>'Home & Living','price'=>'$1,650.00','orig'=>'$1,950.00','badge'=>'Statement Piece','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=800&q=85','reviews'=>47),
                        array('id'=>'nx-105','cat_slug'=>'beauty','name'=>"L'Étoile Cellular Repair Face Serum",'cat'=>'Beauty & Personal Care','price'=>'$185.00','orig'=>'$220.00','badge'=>'Organic Extract','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=800&q=85','reviews'=>315),
                        array('id'=>'nx-106','cat_slug'=>'grocery','name'=>'Tuscan Cold-Pressed Reserve Olive Oil','cat'=>'Gourmet Grocery','price'=>'$68.00','orig'=>'$80.00','badge'=>'Estate Bottled','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=800&q=85','reviews'=>88),
                        array('id'=>'nx-107','cat_slug'=>'fashion','name'=>'Lumière Silk Evening Slip Dress','cat'=>"Women's Fashion",'price'=>'$520.00','orig'=>'$650.00','badge'=>'Runway 2026','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=800&q=85','reviews'=>76),
                        array('id'=>'nx-108','cat_slug'=>'accessories','name'=>'Florentine Handcrafted Leather Briefcase','cat'=>'Luxury Accessories','price'=>'$780.00','orig'=>'$920.00','badge'=>'Full-Grain','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=85','reviews'=>64),
                    );
                    foreach ( $demo_items as $prod ) : ?>
                    <article class="product-card reveal-on-scroll" data-category="<?php echo esc_attr( $prod['cat_slug'] ); ?>">
                        <div class="product-badge-group">
                            <span class="badge <?php echo esc_attr( $prod['badge_cls'] ); ?>"><?php echo esc_html( $prod['badge'] ); ?></span>
                        </div>
                        <div class="product-img-wrap">
                            <img src="<?php echo esc_url( $prod['img'] ); ?>" alt="<?php echo esc_attr( $prod['name'] ); ?>" class="product-img" loading="lazy">
                            <div class="product-action-buttons">
                                <button class="quick-action-btn" title="<?php esc_attr_e( 'Quick View', 'nexora-mall' ); ?>" onclick="openQuickView('<?php echo esc_js( $prod['id'] ); ?>')"><i class="far fa-eye"></i></button>
                                <button class="quick-action-btn" title="<?php esc_attr_e( 'Wishlist', 'nexora-mall' ); ?>" onclick="toggleWishlist('<?php echo esc_js( $prod['id'] ); ?>')"><i class="far fa-heart"></i></button>
                                <button class="quick-action-btn" title="<?php esc_attr_e( 'Add to Bag', 'nexora-mall' ); ?>" onclick="addToCart('<?php echo esc_js( $prod['id'] ); ?>')"><i class="fas fa-bag-shopping"></i></button>
                            </div>
                        </div>
                        <div class="product-body">
                            <span class="product-cat"><?php echo esc_html( $prod['cat'] ); ?></span>
                            <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/shop' ) ); ?>"><?php echo esc_html( $prod['name'] ); ?></a></h3>
                            <div class="product-rating">
                                <span>★★★★★</span> <span class="rating-count">(<?php echo esc_html( $prod['reviews'] ); ?>)</span>
                            </div>
                            <div class="product-footer">
                                <div class="price-box">
                                    <span class="price-current"><?php echo esc_html( $prod['price'] ); ?></span>
                                    <span class="price-original"><?php echo esc_html( $prod['orig'] ); ?></span>
                                </div>
                                <button class="btn btn-sm btn-primary" onclick="addToCart('<?php echo esc_js( $prod['id'] ); ?>')"><?php esc_html_e( 'Add to Bag', 'nexora-mall' ); ?></button>
                            </div>
                        </div>
                    </article>
                    <?php endforeach;
                endif;
                ?>
            </div>

            <div style="text-align: center; margin-top: 3.5rem;">
                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-gold" style="padding: 0.9rem 2.5rem; font-size: 0.95rem;">
                    <?php esc_html_e( 'Explore All 500+ Items', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. FLASH DEALS / TIME-LOCKED OFFERS -->
    <section class="section-padding flash-deals-section" style="background: linear-gradient(135deg, #181818 0%, #121212 100%);">
        <div class="container">
            <div class="flash-deals-banner reveal-on-scroll">
                <div class="flash-deals-info">
                    <span class="badge badge-sale" style="margin-bottom: 1rem; font-size: 0.8rem;"><i class="fas fa-bolt"></i> <?php esc_html_e( 'Limited-Time Vault', 'nexora-mall' ); ?></span>
                    <h2 style="font-size: 2.5rem; color: #ffffff; margin-bottom: 0.75rem; font-family: var(--font-heading);"><?php esc_html_e( 'The VIP Private Flash Sale', 'nexora-mall' ); ?></h2>
                    <p style="color: #cbd5e1; margin-bottom: 1.75rem; font-size: 1.05rem;">
                        <?php esc_html_e( 'Access private discounts up to 40% off on coveted luxury timepieces, couture dresses, and flagship spatial audio.', 'nexora-mall' ); ?>
                    </p>
                    <div class="countdown-timer" id="flash-countdown">
                        <div class="countdown-unit"><span class="countdown-val" id="count-days">02</span><span class="countdown-lbl"><?php esc_html_e( 'Days', 'nexora-mall' ); ?></span></div>
                        <div class="countdown-unit"><span class="countdown-val" id="count-hours">14</span><span class="countdown-lbl"><?php esc_html_e( 'Hours', 'nexora-mall' ); ?></span></div>
                        <div class="countdown-unit"><span class="countdown-val" id="count-mins">36</span><span class="countdown-lbl"><?php esc_html_e( 'Mins', 'nexora-mall' ); ?></span></div>
                        <div class="countdown-unit"><span class="countdown-val" id="count-secs">48</span><span class="countdown-lbl"><?php esc_html_e( 'Secs', 'nexora-mall' ); ?></span></div>
                    </div>
                    <div style="margin-top: 2rem;">
                        <a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>" class="btn btn-gold"><?php esc_html_e( 'Unlock Private Vault', 'nexora-mall' ); ?> <i class="fas fa-key"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php endif; ?>

<?php
get_footer();
