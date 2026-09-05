<?php
/**
 * Template Name: Front Page Luxury Template
 *
 * The template for displaying the luxury front page / home page of Nexora Mall.
 *
 * @package Nexora_Mall
 */

get_header();
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
                        <div class="value-title"><?php esc_html_e( 'Secure Encrypted Checkout', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( '256-Bit SSL Protection for all transactions', 'nexora-mall' ); ?></div>
                    </div>
                </div>
                <div class="value-card reveal-on-scroll delay-4">
                    <div class="value-icon-box"><i class="fas fa-arrow-rotate-left"></i></div>
                    <div>
                        <div class="value-title"><?php esc_html_e( '30-Day Hassle-Free Returns', 'nexora-mall' ); ?></div>
                        <div class="value-subtitle"><?php esc_html_e( 'Complimentary courier pick-up service', 'nexora-mall' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SHOP BY CATEGORY SECTION -->
    <section class="categories-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 2.5rem;">
                <span class="section-tag"><?php esc_html_e( 'Curated Departments', 'nexora-mall' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Explore NEXORA Departments', 'nexora-mall' ); ?></h2>
                <p class="section-subtitle" style="margin: 0 auto;">
                    <?php esc_html_e( 'From high fashion and state-of-the-art electronics to gourmet pantry staples, discover pure luxury across every category.', 'nexora-mall' ); ?>
                </p>
            </div>
            <div class="categories-grid">
                <a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>" class="category-card reveal-on-scroll delay-1">
                    <div class="category-img-box">
                        <img src="https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?auto=format&fit=crop&w=300&q=80" alt="<?php esc_attr_e( 'Fashion & Apparel', 'nexora-mall' ); ?>" class="category-img">
                    </div>
                    <h3 class="category-name"><?php esc_html_e( 'Fashion & Apparel', 'nexora-mall' ); ?></h3>
                    <span class="category-count">140+ Items</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="category-card reveal-on-scroll delay-2">
                    <div class="category-img-box">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=300&q=80" alt="<?php esc_attr_e( 'Electronics & Audio', 'nexora-mall' ); ?>" class="category-img">
                    </div>
                    <h3 class="category-name"><?php esc_html_e( 'Electronics', 'nexora-mall' ); ?></h3>
                    <span class="category-count">95+ Items</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="category-card reveal-on-scroll delay-3">
                    <div class="category-img-box">
                        <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986b88?auto=format&fit=crop&w=300&q=80" alt="<?php esc_attr_e( 'Home & Living', 'nexora-mall' ); ?>" class="category-img">
                    </div>
                    <h3 class="category-name"><?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></h3>
                    <span class="category-count">110+ Items</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>" class="category-card reveal-on-scroll delay-4">
                    <div class="category-img-box">
                        <img src="https://images.unsplash.com/photo-1608248597359-0a67cf5e4c6c?auto=format&fit=crop&w=300&q=80" alt="<?php esc_attr_e( 'Beauty & Care', 'nexora-mall' ); ?>" class="category-img">
                    </div>
                    <h3 class="category-name"><?php esc_html_e( 'Beauty & Care', 'nexora-mall' ); ?></h3>
                    <span class="category-count">85+ Items</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="category-card reveal-on-scroll delay-1">
                    <div class="category-img-box">
                        <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=300&q=80" alt="<?php esc_attr_e( 'Luxury Accessories', 'nexora-mall' ); ?>" class="category-img">
                    </div>
                    <h3 class="category-name"><?php esc_html_e( 'Accessories', 'nexora-mall' ); ?></h3>
                    <span class="category-count">70+ Items</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>" class="category-card reveal-on-scroll delay-2">
                    <div class="category-img-box">
                        <img src="https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=300&q=80" alt="<?php esc_attr_e( 'Gourmet Grocery', 'nexora-mall' ); ?>" class="category-img">
                    </div>
                    <h3 class="category-name"><?php esc_html_e( 'Gourmet Grocery', 'nexora-mall' ); ?></h3>
                    <span class="category-count">60+ Items</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. FEATURED BEST SELLERS SHOWCASE -->
    <section class="section-padding" style="background-color: var(--bg-secondary);">
        <div class="container">
            <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom: 2.5rem; flex-wrap:wrap; gap:1rem;">
                <div>
                    <span class="section-tag"><?php esc_html_e( "Curator's Choice", 'nexora-mall' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Best Selling Masterpieces', 'nexora-mall' ); ?></h2>
                    <p class="section-subtitle" style="margin-bottom:0;"><?php esc_html_e( 'The most coveted items celebrated by our clientele worldwide.', 'nexora-mall' ); ?></p>
                </div>
                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-outline">
                    <?php esc_html_e( 'View All Catalog', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="products-grid">
                <!-- Card 1 -->
                <article class="product-card reveal-on-scroll delay-1">
                    <div class="product-badge-group">
                        <span class="badge badge-sale">Save 17%</span>
                        <span class="badge badge-gold">18k Gold</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=600&q=80" alt="Aura Royal Chronograph Gold Watch" class="product-img">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-101')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-101')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-101')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat">Luxury Watches</span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-101' ) ); ?>">Aura Royal Chronograph Gold Watch</a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(128 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$349.00</span>
                                <span class="price-original">$420.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-101')"><?php esc_html_e( 'Add to Bag', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="product-card reveal-on-scroll delay-2">
                    <div class="product-badge-group">
                        <span class="badge badge-charcoal">New Release</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80" alt="Velvet Elegance Tailored Blazer" class="product-img">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-102')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-102')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-102')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat">Men's Fashion</span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-102' ) ); ?>">Velvet Elegance Tailored Blazer</a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(95 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$189.00</span>
                                <span class="price-original">$240.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-102')"><?php esc_html_e( 'Add to Bag', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="product-card reveal-on-scroll delay-3">
                    <div class="product-badge-group">
                        <span class="badge badge-gold">Top Rated</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=600&q=80" alt="SonicPro Wireless ANC Studio Headphones" class="product-img">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-103')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-103')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-103')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat">Audio & Tech</span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-103' ) ); ?>">SonicPro Wireless ANC Headphones</a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(310 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$279.00</span>
                                <span class="price-original">$320.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-103')"><?php esc_html_e( 'Add to Bag', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>

                <!-- Card 4 -->
                <article class="product-card reveal-on-scroll delay-4">
                    <div class="product-badge-group">
                        <span class="badge badge-sale">Save 20%</span>
                    </div>
                    <div class="product-img-wrap">
                        <img src="https://images.unsplash.com/photo-1608248597359-0a67cf5e4c6c?auto=format&fit=crop&w=600&q=80" alt="Radiance Gold Botanical Facial Elixir" class="product-img">
                        <div class="product-action-buttons">
                            <button class="quick-action-btn" title="Quick View" onclick="openQuickView('nx-106')"><i class="far fa-eye"></i></button>
                            <button class="quick-action-btn" title="Wishlist" onclick="toggleWishlist('nx-106')"><i class="far fa-heart"></i></button>
                            <button class="quick-action-btn" title="Add to Bag" onclick="addToCart('nx-106')"><i class="fas fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-body">
                        <span class="product-cat">Beauty & Care</span>
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=nx-106' ) ); ?>">Radiance Gold Botanical Facial Elixir</a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(175 reviews)</span>
                        </div>
                        <div class="product-footer">
                            <div class="price-box">
                                <span class="price-current">$95.00</span>
                                <span class="price-original">$120.00</span>
                            </div>
                            <button class="btn btn-sm btn-primary" onclick="addToCart('nx-106')"><?php esc_html_e( 'Add to Bag', 'nexora-mall' ); ?></button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. FLASH SALE & DEALS COUNTDOWN BANNER -->
    <section class="flash-sale-section">
        <div class="container">
            <div class="flash-sale-grid">
                <div>
                    <span class="section-tag" style="color: var(--color-gold);"><?php esc_html_e( 'VIP Flash Vault', 'nexora-mall' ); ?></span>
                    <h2 class="section-title" style="color: #ffffff; font-size: 2.85rem;">
                        <?php esc_html_e( 'Up to', 'nexora-mall' ); ?> <span class="gold-accent"><?php esc_html_e( '40% Off', 'nexora-mall' ); ?></span> <?php esc_html_e( 'Signature Collections.', 'nexora-mall' ); ?>
                    </h2>
                    <p style="color: #d0d0d0; line-height: 1.7; font-size: 1.05rem;">
                        <?php esc_html_e( 'Take advantage of time-locked discounts across flagship audio, designer evening apparel, and Italian leather accessories.', 'nexora-mall' ); ?>
                    </p>
                    <div class="countdown-box-wrap">
                        <div class="countdown-unit">
                            <div class="countdown-number" id="cd-hours">48</div>
                            <div class="countdown-label"><?php esc_html_e( 'Hours', 'nexora-mall' ); ?></div>
                        </div>
                        <div class="countdown-unit">
                            <div class="countdown-number" id="cd-mins">15</div>
                            <div class="countdown-label"><?php esc_html_e( 'Mins', 'nexora-mall' ); ?></div>
                        </div>
                        <div class="countdown-unit">
                            <div class="countdown-number" id="cd-secs">30</div>
                            <div class="countdown-label"><?php esc_html_e( 'Secs', 'nexora-mall' ); ?></div>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                        <a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>" class="btn btn-gold">
                            <?php esc_html_e( 'Unlock Flash Deals', 'nexora-mall' ); ?> <i class="fas fa-bolt"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-outline" style="color:#fff; border-color: rgba(255,255,255,0.4);">
                            <?php esc_html_e( 'Browse All', 'nexora-mall' ); ?>
                        </a>
                    </div>
                </div>
                <div style="text-align: center;">
                    <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=700&q=80" alt="Flash Sale" style="border-radius: var(--radius-sm); border: 2px solid rgba(212,168,67,0.4); box-shadow: var(--shadow-gold); max-height: 400px; margin: 0 auto;">
                </div>
            </div>
        </div>
    </section>

    <!-- 6. LUXURY BRANDS STRIP -->
    <section class="brands-strip">
        <div class="container">
            <div class="brands-grid">
                <div class="brand-item">AURORA</div>
                <div class="brand-item">MILANO & CO</div>
                <div class="brand-item">LUMIÈRE</div>
                <div class="brand-item">VANGUARD</div>
                <div class="brand-item">SONICPRO</div>
                <div class="brand-item">KASHMIR ARTISAN</div>
            </div>
        </div>
    </section>

    <!-- 7. CUSTOMER TESTIMONIALS -->
    <section class="testimonials-section">
        <div class="container">
            <div style="text-align: center;">
                <span class="section-tag"><?php esc_html_e( 'Client Testimonials', 'nexora-mall' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'What Our Global Patrons Say', 'nexora-mall' ); ?></h2>
                <p class="section-subtitle" style="margin: 0 auto;">
                    <?php esc_html_e( 'Experience trusted feedback from verified buyers across London, New York, Dubai, and Singapore.', 'nexora-mall' ); ?>
                </p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card reveal-on-scroll delay-1">
                    <div class="test-stars">★★★★★</div>
                    <p class="test-quote">
                        "The Aura Royal Chronograph surpassed every expectation. Packaging is immaculate with authenticated certificates, and express delivery to Manhattan took barely 48 hours."
                    </p>
                    <div class="test-author-row">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Victoria Sterling" class="test-avatar">
                        <div>
                            <div class="test-name">Victoria Sterling</div>
                            <div class="test-loc">New York, USA • Verified Patron</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal-on-scroll delay-2">
                    <div class="test-stars">★★★★★</div>
                    <p class="test-quote">
                        "NEXORA MALL is my primary destination for both high-end electronics and gourmet pantry essentials. The customer concierge resolved my sizing query within 5 minutes."
                    </p>
                    <div class="test-author-row">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80" alt="Alexander Wright" class="test-avatar">
                        <div>
                            <div class="test-name">Alexander Wright</div>
                            <div class="test-loc">London, UK • Verified Patron</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal-on-scroll delay-3">
                    <div class="test-stars">★★★★★</div>
                    <p class="test-quote">
                        "The Nordic Marble Coffee Table is a true architectural statement piece in our living room. Heavy, authentic Carrara stone with flawless gold steel joinery."
                    </p>
                    <div class="test-author-row">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80" alt="Sophia Al-Mansoor" class="test-avatar">
                        <div>
                            <div class="test-name">Sophia Al-Mansoor</div>
                            <div class="test-loc">Dubai, UAE • Verified Patron</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. APP PROMO -->
    <section class="app-promo-section">
        <div class="container">
            <div class="app-promo-grid">
                <div>
                    <span class="section-tag"><?php esc_html_e( 'Anytime, Anywhere', 'nexora-mall' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Download The NEXORA Mobile App', 'nexora-mall' ); ?></h2>
                    <p style="color: var(--text-secondary); line-height: 1.7; font-size: 1.05rem;">
                        <?php esc_html_e( 'Unlock app-exclusive private drops, real-time live order tracking notifications, personalized AI stylist recommendations, and 1-click Apple Pay & Google Pay checkout.', 'nexora-mall' ); ?>
                    </p>
                    <div class="app-store-badges">
                        <a href="#" class="store-badge-btn">
                            <i class="fab fa-apple" style="font-size: 1.85rem;"></i>
                            <div class="store-badge-text">
                                <small><?php esc_html_e( 'Download on the', 'nexora-mall' ); ?></small>
                                <strong>Apple App Store</strong>
                            </div>
                        </a>
                        <a href="#" class="store-badge-btn">
                            <i class="fab fa-google-play" style="font-size: 1.65rem;"></i>
                            <div class="store-badge-text">
                                <small><?php esc_html_e( 'Get it on', 'nexora-mall' ); ?></small>
                                <strong>Google Play</strong>
                            </div>
                        </a>
                    </div>
                </div>
                <div style="text-align: center;">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=600&q=80" alt="NEXORA Mobile App" style="max-height: 380px; border-radius: var(--radius-md); box-shadow: var(--shadow-lg); margin: 0 auto;">
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
