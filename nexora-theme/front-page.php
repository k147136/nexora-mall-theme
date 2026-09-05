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
            <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=1800&q=85');">
                <div class="hero-slide-overlay"></div>
                <div class="container" style="height: 100%; display: flex; align-items: center;">
                    <div class="hero-slide-content reveal-on-scroll">
                        <span class="hero-tag"><i class="fas fa-crown"></i> <?php esc_html_e( 'NEXT-GEN TECH', 'nexora-mall' ); ?></span>
                        <h1 class="hero-title"><?php esc_html_e( 'Acoustic', 'nexora-mall' ); ?> <span><?php esc_html_e( 'Perfection', 'nexora-mall' ); ?></span> & <?php esc_html_e( 'Future Living.', 'nexora-mall' ); ?></h1>
                        <p class="hero-desc">
                            <?php esc_html_e( 'Studio-grade wireless acoustics, flagship smart devices, and intelligent luxury living engineered for the discerning professional.', 'nexora-mall' ); ?>
                        </p>
                        <div class="hero-cta-row">
                            <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="btn btn-gold">
                                <?php esc_html_e( 'SHOP ELECTRONICS', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1800&q=85');">
                <div class="hero-slide-overlay"></div>
                <div class="container" style="height: 100%; display: flex; align-items: center;">
                    <div class="hero-slide-content">
                        <span class="hero-tag"><i class="fas fa-gem"></i> <?php esc_html_e( 'HAUTE HOROLOGY', 'nexora-mall' ); ?></span>
                        <h2 class="hero-title"><?php esc_html_e( 'Timeless', 'nexora-mall' ); ?> <span><?php esc_html_e( 'Elegance', 'nexora-mall' ); ?></span> & <?php esc_html_e( 'Precision.', 'nexora-mall' ); ?></h2>
                        <p class="hero-desc">
                            <?php esc_html_e( 'Immerse yourself in our curated selection of fine gold horology, bespoke Italian tailoring, and high-jewelry accessories.', 'nexora-mall' ); ?>
                        </p>
                        <div class="hero-cta-row">
                            <a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="btn btn-gold">
                                <?php esc_html_e( 'EXPLORE TIMEPIECES', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i>
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

    <!-- 2. VALUE PROPOSITION 4-CARD STRIP -->
    <section class="value-props-section" style="background: var(--bg-card); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <div class="value-props-grid">
                <div class="value-card reveal-on-scroll delay-1">
                    <div class="value-icon-box"><i class="fas fa-truck-fast"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( 'Complimentary Global Shipping', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( 'Free express dispatch on all orders over $150', 'nexora-mall' ); ?></div>
                    </div>
                </div>
                <div class="value-card reveal-on-scroll delay-2">
                    <div class="value-icon-box"><i class="fas fa-certificate"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( '100% Authenticity Guaranteed', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( 'Directly sourced & certified by the master houses', 'nexora-mall' ); ?></div>
                    </div>
                </div>
                <div class="value-card reveal-on-scroll delay-3">
                    <div class="value-icon-box"><i class="fas fa-shield-halved"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( 'Secure Encrypted Checkout', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( '256-bit bank level protection on all transactions', 'nexora-mall' ); ?></div>
                    </div>
                </div>
                <div class="value-card reveal-on-scroll delay-4">
                    <div class="value-icon-box"><i class="fas fa-rotate-left"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( '30-Day Hassle-Free Returns', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( 'Complimentary courier pick-up worldwide', 'nexora-mall' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CURATED DEPARTMENTS / CIRCULAR CATEGORIES -->
    <section class="section-padding" style="background-color: var(--bg-primary); text-align: center;">
        <div class="container">
            <div class="section-header reveal-on-scroll" style="margin-bottom: 2.5rem;">
                <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.2em; text-transform: uppercase;"><?php esc_html_e( 'CURATED DEPARTMENTS', 'nexora-mall' ); ?></span>
                <h2 class="section-title" style="font-size: 2.25rem; font-family: var(--font-heading); margin-top: 0.4rem;"><?php esc_html_e( 'Explore NEXORA Departments', 'nexora-mall' ); ?></h2>
                <p class="section-desc" style="max-width: 650px; margin: 0.5rem auto 0; font-size: 0.95rem; color: var(--text-secondary);">
                    <?php esc_html_e( 'From high fashion and haute couture to audio, tech and gourmet pantry reserves, discover premium luxury in every category.', 'nexora-mall' ); ?>
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1.25rem;">
                <!-- Cat 1 -->
                <a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>" class="category-pill-card reveal-on-scroll delay-1" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem 1rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: var(--transition);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; margin-bottom: 0.85rem; border: 2px solid var(--color-gold); box-shadow: var(--shadow-sm);">
                        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=300&q=80" alt="Fashion & Apparel" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-size: 0.9rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0;"><?php esc_html_e( 'Fashion & Apparel', 'nexora-mall' ); ?></h4>
                    <span style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">120+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                </a>

                <!-- Cat 2 -->
                <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="category-pill-card reveal-on-scroll delay-2" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem 1rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: var(--transition);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; margin-bottom: 0.85rem; border: 2px solid var(--color-gold); box-shadow: var(--shadow-sm);">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=300&q=80" alt="Electronics" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-size: 0.9rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0;"><?php esc_html_e( 'Electronics', 'nexora-mall' ); ?></h4>
                    <span style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">85+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                </a>

                <!-- Cat 3 -->
                <a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="category-pill-card reveal-on-scroll delay-3" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem 1rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: var(--transition);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; margin-bottom: 0.85rem; border: 2px solid var(--color-gold); box-shadow: var(--shadow-sm);">
                        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=300&q=80" alt="Home & Living" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-size: 0.9rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0;"><?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></h4>
                    <span style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">94+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                </a>

                <!-- Cat 4 -->
                <a href="<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>" class="category-pill-card reveal-on-scroll delay-4" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem 1rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: var(--transition);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; margin-bottom: 0.85rem; border: 2px solid var(--color-gold); box-shadow: var(--shadow-sm);">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=300&q=80" alt="Beauty & Care" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-size: 0.9rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0;"><?php esc_html_e( 'Beauty & Care', 'nexora-mall' ); ?></h4>
                    <span style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">64+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                </a>

                <!-- Cat 5 -->
                <a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="category-pill-card reveal-on-scroll delay-5" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem 1rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: var(--transition);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; margin-bottom: 0.85rem; border: 2px solid var(--color-gold); box-shadow: var(--shadow-sm);">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=300&q=80" alt="Accessories" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-size: 0.9rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0;"><?php esc_html_e( 'Accessories', 'nexora-mall' ); ?></h4>
                    <span style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">110+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                </a>

                <!-- Cat 6 -->
                <a href="<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>" class="category-pill-card reveal-on-scroll delay-6" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem 1rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: var(--transition);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; margin-bottom: 0.85rem; border: 2px solid var(--color-gold); box-shadow: var(--shadow-sm);">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=300&q=80" alt="Gourmet Grocery" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-size: 0.9rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0;"><?php esc_html_e( 'Gourmet Grocery', 'nexora-mall' ); ?></h4>
                    <span style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">50+ <?php esc_html_e( 'Items', 'nexora-mall' ); ?></span>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. BEST SELLING MASTERPIECES -->
    <section class="section-padding" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
                <div>
                    <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php esc_html_e( 'SIGNATURE CREATIONS', 'nexora-mall' ); ?></span>
                    <h2 class="section-title" style="font-size: 2.25rem; font-family: var(--font-heading); margin-top: 0.25rem;"><?php esc_html_e( 'Best Selling Masterpieces', 'nexora-mall' ); ?></h2>
                    <p style="color: var(--text-secondary); margin: 0.25rem 0 0; font-size: 0.95rem;"><?php esc_html_e( 'The most coveted items celebrated by our clientele worldwide.', 'nexora-mall' ); ?></p>
                </div>
                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" style="color: var(--text-primary); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 6px; text-decoration: none;">
                    <?php esc_html_e( 'VIEW ALL CATALOG', 'nexora-mall' ); ?> <i class="fas fa-arrow-right" style="color: var(--color-gold);"></i>
                </a>
            </div>

            <!-- 4 Column Products Grid -->
            <div class="products-grid" style="grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 1.75rem;">
                <!-- Product 1 -->
                <article class="product-card reveal-on-scroll">
                    <div class="product-badge-group">
                        <span class="badge badge-sale">SAVE 17%</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85" alt="Aura Royal Chronograph Gold Watch" class="product-img" loading="lazy">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-101')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-101')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-101')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat"><?php esc_html_e( 'LUXURY HOROLOGY', 'nexora-mall' ); ?></span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-101' ) ); ?>"><?php esc_html_e( 'Aura Royal Chronograph Gold Watch', 'nexora-mall' ); ?></a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(128 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$1,250.00</span>
                                <span class="price-original">$1,500.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-101')"><?php esc_html_e( 'ADD TO BAG', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>

                <!-- Product 2 -->
                <article class="product-card reveal-on-scroll delay-1">
                    <div class="product-badge-group">
                        <span class="badge badge-charcoal">VIP EXCLUSIVE</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85" alt="Velvet Premiere Tailored Blazer" class="product-img" loading="lazy">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-102')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-102')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-102')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat"><?php esc_html_e( "MEN'S FASHION", 'nexora-mall' ); ?></span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-102' ) ); ?>"><?php esc_html_e( 'Velvet Premiere Tailored Blazer', 'nexora-mall' ); ?></a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(94 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$890.00</span>
                                <span class="price-original">$1,100.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-102')"><?php esc_html_e( 'ADD TO BAG', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>

                <!-- Product 3 -->
                <article class="product-card reveal-on-scroll delay-2">
                    <div class="product-badge-group">
                        <span class="badge badge-gold">TOP RATED</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=85" alt="SonicPro Wireless ANC Headphones" class="product-img" loading="lazy">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-103')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-103')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-103')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat"><?php esc_html_e( 'AUDIO & TECH', 'nexora-mall' ); ?></span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-103' ) ); ?>"><?php esc_html_e( 'SonicPro Wireless ANC Headphones', 'nexora-mall' ); ?></a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(210 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$450.00</span>
                                <span class="price-original">$520.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-103')"><?php esc_html_e( 'ADD TO BAG', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>

                <!-- Product 4 -->
                <article class="product-card reveal-on-scroll delay-3">
                    <div class="product-badge-group">
                        <span class="badge badge-sale">ORGANIC</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=800&q=85" alt="Radiance Gold Botanical Facial Elixir" class="product-img" loading="lazy">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-105')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-105')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-105')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat"><?php esc_html_e( 'BEAUTY & CARE', 'nexora-mall' ); ?></span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-105' ) ); ?>"><?php esc_html_e( 'Radiance Gold Botanical Facial Elixir', 'nexora-mall' ); ?></a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(315 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$185.00</span>
                                <span class="price-original">$220.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-105')"><?php esc_html_e( 'ADD TO BAG', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. VIP FLASH SALE / PRIVATE VAULT SECTION -->
    <section class="section-padding" style="background: #141414; color: #fff;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;" class="flash-vault-layout">
                <div>
                    <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php esc_html_e( 'VIP FLASH VAULT', 'nexora-mall' ); ?></span>
                    <h2 style="font-size: 2.75rem; font-family: var(--font-heading); color: #fff; margin: 0.5rem 0 1rem; line-height: 1.2;">
                        Up to <span style="color: var(--color-gold);">40% Off</span> Signature Collections.
                    </h2>
                    <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 2rem; max-width: 520px; line-height: 1.6;">
                        <?php esc_html_e( 'Take advantage of time-locked discounts across flagship audio, designer evening apparels and Italian leather accessories.', 'nexora-mall' ); ?>
                    </p>

                    <!-- Countdown Boxes -->
                    <div style="display: flex; gap: 1rem; margin-bottom: 2.25rem;">
                        <div style="background: #222; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-xs); padding: 0.85rem 1.25rem; text-align: center; min-width: 75px;">
                            <div style="font-size: 1.75rem; font-weight: 900; color: var(--color-gold); font-family: var(--font-heading);" id="f-days">48</div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; color: #888; font-weight: 700; letter-spacing: 0.1em;"><?php esc_html_e( 'HOURS', 'nexora-mall' ); ?></div>
                        </div>
                        <div style="background: #222; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-xs); padding: 0.85rem 1.25rem; text-align: center; min-width: 75px;">
                            <div style="font-size: 1.75rem; font-weight: 900; color: var(--color-gold); font-family: var(--font-heading);" id="f-mins">15</div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; color: #888; font-weight: 700; letter-spacing: 0.1em;"><?php esc_html_e( 'MIN', 'nexora-mall' ); ?></div>
                        </div>
                        <div style="background: #222; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-xs); padding: 0.85rem 1.25rem; text-align: center; min-width: 75px;">
                            <div style="font-size: 1.75rem; font-weight: 900; color: var(--color-gold); font-family: var(--font-heading);" id="f-secs">26</div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; color: #888; font-weight: 700; letter-spacing: 0.1em;"><?php esc_html_e( 'SECS', 'nexora-mall' ); ?></div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>" class="btn btn-gold">
                            <i class="fas fa-bolt"></i> <?php esc_html_e( 'UNLOCK FLASH DEALS', 'nexora-mall' ); ?>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-outline" style="color: #fff; border-color: rgba(255,255,255,0.4);">
                            <?php esc_html_e( 'BROWSE ALL', 'nexora-mall' ); ?>
                        </a>
                    </div>
                </div>

                <div style="position: relative; text-align: center;">
                    <div style="background: #1c1c1c; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-sm); padding: 1.5rem; display: inline-block; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                        <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=600&q=85" alt="Aura Royal Chronograph" style="max-height: 320px; width: auto; border-radius: var(--radius-xs);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. BRAND PARTNERS / LUXURY HOUSES STRIP -->
    <section style="padding: 2.5rem 0; background: var(--bg-card); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 2rem; opacity: 0.85;">
                <span style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.15em; color: var(--text-primary);">AURORA</span>
                <span style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.15em; color: var(--text-primary);">MILANO & CO</span>
                <span style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.15em; color: var(--text-primary);">LUMIÈRE</span>
                <span style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.15em; color: var(--text-primary);">VANGUARD</span>
                <span style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.15em; color: var(--text-primary);">SONICPRO</span>
                <span style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.15em; color: var(--text-primary);">KASHMIR ARTISAN</span>
            </div>
        </div>
    </section>

    <!-- 7. CLIENT TESTIMONIALS / WHAT OUR GLOBAL PATRONS SAY -->
    <section class="section-padding" style="background-color: var(--bg-primary);">
        <div class="container">
            <div class="section-header reveal-on-scroll" style="text-align: center; margin-bottom: 3rem;">
                <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.2em; text-transform: uppercase;"><?php esc_html_e( 'CLIENT TESTIMONIALS', 'nexora-mall' ); ?></span>
                <h2 class="section-title" style="font-size: 2.25rem; font-family: var(--font-heading); margin-top: 0.4rem;"><?php esc_html_e( 'What Our Global Patrons Say', 'nexora-mall' ); ?></h2>
                <p class="section-desc" style="max-width: 600px; margin: 0.5rem auto 0; color: var(--text-secondary);">
                    <?php esc_html_e( 'Experience trusted feedback from verified buyers across London, New York, Dubai, and Singapore.', 'nexora-mall' ); ?>
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <!-- Review 1 -->
                <div class="testimonial-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 2rem; box-shadow: var(--shadow-sm);">
                    <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 1rem;">★★★★★</div>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        "The Aura Royal Chronograph timepiece is sheer master craftsmanship. Packaging is immaculate with authenticated certificates and express delivery to Manhattan in absolutely no time."
                    </p>
                    <div style="display: flex; align-items: center; gap: 0.85rem;">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Victoria Sterling" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h4 style="font-size: 0.9rem; margin: 0; color: var(--text-primary); font-family: var(--font-heading);">Victoria Sterling</h4>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">New York, USA • Verified Patron</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="testimonial-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 2rem; box-shadow: var(--shadow-sm);">
                    <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 1rem;">★★★★★</div>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        "NEXORA MALL is my premier destination for both high-end electronics and gourmet pantry essentials. The customer concierge resolved my sizing query within 5 minutes."
                    </p>
                    <div style="display: flex; align-items: center; gap: 0.85rem;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80" alt="Alexander Wright" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h4 style="font-size: 0.9rem; margin: 0; color: var(--text-primary); font-family: var(--font-heading);">Alexander Wright</h4>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">London, UK • Verified Patron</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="testimonial-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 2rem; box-shadow: var(--shadow-sm);">
                    <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 1rem;">★★★★★</div>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        "The Nordic Marble Coffee Table is a true architectural statement piece in our living room. 100% authentic Carrara tone with flawless gold-accent joinery."
                    </p>
                    <div style="display: flex; align-items: center; gap: 0.85rem;">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80" alt="Sophia Al-Mansoor" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h4 style="font-size: 0.9rem; margin: 0; color: var(--text-primary); font-family: var(--font-heading);">Sophia Al-Mansoor</h4>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">Dubai, UAE • Verified Patron</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. MOBILE APP DOWNLOAD SECTION -->
    <section class="section-padding" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border-color);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;" class="app-download-grid">
                <div>
                    <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php esc_html_e( 'ANYTIME, ANYWHERE', 'nexora-mall' ); ?></span>
                    <h2 style="font-size: 2.5rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0.5rem 0 1rem;"><?php esc_html_e( 'Download The NEXORA Mobile App', 'nexora-mall' ); ?></h2>
                    <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6; margin-bottom: 2rem;">
                        <?php esc_html_e( 'Unlock app-exclusive private drops, real-time live order tracking notifications, personalized stylist recommendations, and 1-click Apple Pay & Google Pay checkout.', 'nexora-mall' ); ?>
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px;">
                            <i class="fab fa-apple" style="font-size: 1.3rem;"></i>
                            <div style="text-align: left; line-height: 1.2;">
                                <div style="font-size: 0.65rem; opacity: 0.8;"><?php esc_html_e( 'Download on the', 'nexora-mall' ); ?></div>
                                <div style="font-size: 0.85rem; font-weight: 800;"><?php esc_html_e( 'App Store', 'nexora-mall' ); ?></div>
                            </div>
                        </a>
                        <a href="#" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px;">
                            <i class="fab fa-google-play" style="font-size: 1.15rem;"></i>
                            <div style="text-align: left; line-height: 1.2;">
                                <div style="font-size: 0.65rem; opacity: 0.8;"><?php esc_html_e( 'GET IT ON', 'nexora-mall' ); ?></div>
                                <div style="font-size: 0.85rem; font-weight: 800;"><?php esc_html_e( 'Google Play', 'nexora-mall' ); ?></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div style="text-align: center;">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=700&q=80" alt="NEXORA Mobile App" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg); max-height: 380px; width: auto; margin: 0 auto;">
                </div>
            </div>
        </div>
    </section>

</main>
<?php endif; ?>

<?php
get_footer();
