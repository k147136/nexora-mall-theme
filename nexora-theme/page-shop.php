<?php
/**
 * Template Name: Shop & Category Catalog Template
 *
 * @package Nexora_Mall
 */

get_header();

$current_cat = isset( $_GET['cat'] ) ? sanitize_text_field( $_GET['cat'] ) : 'all';
$is_sale = isset( $_GET['sale'] ) && $_GET['sale'] === 'true';

$cat_titles = array(
    'all'         => 'All Luxury Collections',
    'fashion'     => 'Haute Couture & Bespoke Fashion',
    'electronics' => 'Flagship Audio & High-End Tech',
    'home'        => 'European Interior & Artisan Living',
    'beauty'      => 'Prestige Beauty & Botanical Skincare',
    'accessories' => 'Swiss Horology & Fine Accessories',
    'grocery'     => 'Gourmet Pantry & Artisanal Reserve',
);

$cat_descs = array(
    'all'         => 'Explore our full spectrum of hand-vetted luxury garments, audiophile engineering, and statement living accents.',
    'fashion'     => 'Tailored Italian suiting, pure mulberry silk dresses, and handcrafted leather footwear.',
    'electronics' => 'Acoustic mastery featuring planar magnetic headphones, tube amplifiers, and titanium smart chronometers.',
    'home'        => 'Hand-carved Carrara marble tables, ergonomic lounge chairs, and ambient brass architectural lighting.',
    'beauty'      => 'Organic cellular serums, French niche extrait de parfum, and revitalizing botanical face elixirs.',
    'accessories' => 'Swiss automatic tourbillons, full-grain Tuscan leather briefcases, and polarized titanium sunglasses.',
    'grocery'     => 'Single-origin Ethiopian micro-lot coffees, organic cold-pressed olive oils, and artisanal dark truffles.',
);

$page_heading = $is_sale ? 'VIP Flash Vault — Up to 40% Off' : ( isset( $cat_titles[$current_cat] ) ? $cat_titles[$current_cat] : 'Luxury Collections' );
$page_sub = $is_sale ? 'Time-locked private discounts across our most coveted luxury releases.' : ( isset( $cat_descs[$current_cat] ) ? $cat_descs[$current_cat] : 'Discover curated elegance across every lifestyle domain.' );
?>

<main id="primary" class="site-main">

    <!-- Category Header Banner -->
    <section class="page-hero" style="background-color: var(--color-charcoal-dark); padding: 4rem 0; border-bottom: 1px solid rgba(212,168,67,0.3); text-align: center;">
        <div class="container">
            <span class="badge badge-gold" style="margin-bottom: 0.75rem; display: inline-block;">
                <?php echo $is_sale ? '⚡ Time-Locked Offers' : 'Curated Marketplace'; ?>
            </span>
            <h1 class="page-title" style="color: #ffffff; font-size: 2.75rem; margin-bottom: 0.75rem;">
                <?php echo esc_html( $page_heading ); ?>
            </h1>
            <p style="color: #c8c8c8; max-width: 680px; margin: 0 auto; font-size: 1.05rem;">
                <?php echo esc_html( $page_sub ); ?>
            </p>
        </div>
    </section>

    <!-- Category Filter Pills -->
    <section style="background-color: var(--bg-secondary); border-bottom: 1px solid var(--border-color); padding: 1rem 0;">
        <div class="container">
            <div style="display: flex; gap: 0.75rem; overflow-x: auto; padding-bottom: 0.25rem; scrollbar-width: none;">
                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-sm <?php echo ( $current_cat === 'all' && !$is_sale ) ? 'btn-primary' : 'btn-outline'; ?>">All Items</a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>" class="btn btn-sm <?php echo ( $current_cat === 'fashion' ) ? 'btn-primary' : 'btn-outline'; ?>">Fashion & Apparel</a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>" class="btn btn-sm <?php echo ( $current_cat === 'electronics' ) ? 'btn-primary' : 'btn-outline'; ?>">Electronics & Audio</a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>" class="btn btn-sm <?php echo ( $current_cat === 'home' ) ? 'btn-primary' : 'btn-outline'; ?>">Home & Living</a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>" class="btn btn-sm <?php echo ( $current_cat === 'beauty' ) ? 'btn-primary' : 'btn-outline'; ?>">Beauty & Care</a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>" class="btn btn-sm <?php echo ( $current_cat === 'accessories' ) ? 'btn-primary' : 'btn-outline'; ?>">Watches & Accessories</a>
                <a href="<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>" class="btn btn-sm <?php echo ( $current_cat === 'grocery' ) ? 'btn-primary' : 'btn-outline'; ?>">Gourmet Grocery</a>
                <a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>" class="btn btn-sm <?php echo $is_sale ? 'btn-gold' : 'btn-outline'; ?>" style="color: var(--color-gold); border-color: var(--color-gold);"><i class="fas fa-bolt"></i> Flash Deals</a>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="section-padding" style="background-color: var(--bg-primary);">
        <div class="container">
            <div class="products-grid" id="catalog-products-grid">
                <?php
                $nexora_catalog = array(
                    array('id'=>'nx-101','cat_slug'=>'accessories','name'=>'Aura Royal Chronograph Watch','cat'=>'Watches & Accessories','price'=>'$1,250.00','orig'=>'$1,500.00','badge'=>'Bestseller','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85','reviews'=>128,'is_sale'=>true),
                    array('id'=>'nx-102','cat_slug'=>'fashion','name'=>'Sovereign Tailored Velvet Tuxedo','cat'=>'Fashion & Apparel','price'=>'$890.00','orig'=>'$1,100.00','badge'=>'VIP Exclusive','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85','reviews'=>94,'is_sale'=>true),
                    array('id'=>'nx-103','cat_slug'=>'electronics','name'=>'Sonance Spatial Hi-Fi Headphones','cat'=>'Electronics & Audio','price'=>'$450.00','orig'=>'$520.00','badge'=>'Audiophile','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=85','reviews'=>210,'is_sale'=>false),
                    array('id'=>'nx-104','cat_slug'=>'home','name'=>'Nordic Minimalist Marble Coffee Table','cat'=>'Home & Living','price'=>'$1,650.00','orig'=>'$1,950.00','badge'=>'Statement Piece','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=800&q=85','reviews'=>47,'is_sale'=>false),
                    array('id'=>'nx-105','cat_slug'=>'beauty','name'=>'L'Étoile Cellular Repair Face Serum','cat'=>'Beauty & Personal Care','price'=>'$185.00','orig'=>'$220.00','badge'=>'Organic Extract','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=800&q=85','reviews'=>315,'is_sale'=>true),
                    array('id'=>'nx-106','cat_slug'=>'grocery','name'=>'Tuscan Cold-Pressed Reserve Olive Oil','cat'=>'Gourmet Grocery','price'=>'$68.00','orig'=>'$80.00','badge'=>'Estate Bottled','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=800&q=85','reviews'=>88,'is_sale'=>false),
                    array('id'=>'nx-107','cat_slug'=>'fashion','name'=>'Lumière Silk Evening Slip Dress','cat'=>'Fashion & Apparel','price'=>'$520.00','orig'=>'$650.00','badge'=>'Runway 2026','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=800&q=85','reviews'=>76,'is_sale'=>true),
                    array('id'=>'nx-108','cat_slug'=>'accessories','name'=>'Florentine Handcrafted Leather Briefcase','cat'=>'Watches & Accessories','price'=>'$780.00','orig'=>'$920.00','badge'=>'Full-Grain','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=85','reviews'=>64,'is_sale'=>false),
                    array('id'=>'nx-109','cat_slug'=>'electronics','name'=>'Vanguard Titanium Smart Speaker','cat'=>'Electronics & Audio','price'=>'$340.00','orig'=>'$399.00','badge'=>'Lossless Audio','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1545454675-3531b543be5d?auto=format&fit=crop&w=800&q=85','reviews'=>142,'is_sale'=>true),
                    array('id'=>'nx-110','cat_slug'=>'home','name'=>'Velvet Occasional Armchair with Gold Brass','cat'=>'Home & Living','price'=>'$920.00','orig'=>'$1,050.00','badge'=>'Save $130','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=800&q=85','reviews'=>53,'is_sale'=>true),
                    array('id'=>'nx-111','cat_slug'=>'beauty','name'=>'Maison De Luxe Botanical Eau De Parfum','cat'=>'Beauty & Personal Care','price'=>'$140.00','orig'=>'$175.00','badge'=>'Niche Extract','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=800&q=85','reviews'=>112,'is_sale'=>true),
                    array('id'=>'nx-112','cat_slug'=>'grocery','name'=>'Ethiopian Yirgacheffe Reserve Coffee Beans','cat'=>'Gourmet Grocery','price'=>'$45.00','orig'=>'$55.00','badge'=>'Micro-Lot','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=800&q=85','reviews'=>96,'is_sale'=>false),
                );

                $filtered = array();
                foreach ( $nexora_catalog as $prod ) {
                    if ( $is_sale ) {
                        if ( $prod['is_sale'] ) { $filtered[] = $prod; }
                    } elseif ( $current_cat === 'all' ) {
                        $filtered[] = $prod;
                    } elseif ( $prod['cat_slug'] === $current_cat ) {
                        $filtered[] = $prod;
                    }
                }
                if ( empty( $filtered ) ) { $filtered = $nexora_catalog; }

                foreach ( $filtered as $index => $prod ) :
                    $delay_class = 'delay-' . ( ( $index % 4 ) + 1 );
                ?>
                <article class="product-card reveal-on-scroll <?php echo esc_attr( $delay_class ); ?>">
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
                        <h3 class="product-name"><a href="<?php echo esc_url( home_url( '/product-details?id=' . $prod['id'] ) ); ?>"><?php echo esc_html( $prod['name'] ); ?></a></h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <span class="rating-count">(<?php echo esc_html( $prod['reviews'] ); ?> reviews)</span>
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
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
