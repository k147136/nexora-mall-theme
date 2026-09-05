<?php
/**
 * WooCommerce Layout & Archive Template
 *
 * @package Nexora_Mall
 */

get_header();

// Determine Page Details & Category
$current_cat = isset( $_GET['cat'] ) ? sanitize_text_field( $_GET['cat'] ) : 'all';
$is_sale     = isset( $_GET['sale'] ) && $_GET['sale'] === 'true';

if ( is_product_category() ) {
    $queried_obj = get_queried_object();
    if ( $queried_obj && isset( $queried_obj->slug ) ) {
        $current_cat = $queried_obj->slug;
    }
}

$cat_titles = array(
    'all'         => __( 'The Complete Catalog', 'nexora-mall' ),
    'fashion'     => __( 'Haute Couture & Bespoke Fashion', 'nexora-mall' ),
    'electronics' => __( 'Flagship Audio & High-End Tech', 'nexora-mall' ),
    'home'        => __( 'European Interior & Artisan Living', 'nexora-mall' ),
    'beauty'      => __( 'Prestige Beauty & Botanical Skincare', 'nexora-mall' ),
    'accessories' => __( 'Swiss Horology & Fine Accessories', 'nexora-mall' ),
    'grocery'     => __( 'Gourmet Pantry & Artisanal Reserve', 'nexora-mall' ),
);

$cat_descs = array(
    'all'         => __( 'Browse our entire luxury roster across fashion, audio & tech, designer home furnishings, and gourmet groceries.', 'nexora-mall' ),
    'fashion'     => __( 'Tailored Italian suiting, pure mulberry silk dresses, and handcrafted leather footwear.', 'nexora-mall' ),
    'electronics' => __( 'Studio-grade planar magnetic headphones, audiophile acoustics, and high-end tech.', 'nexora-mall' ),
    'home'        => __( 'Hand-carved Carrara marble tables, ergonomic lounge chairs, and ambient brass architectural lighting.', 'nexora-mall' ),
    'beauty'      => __( 'Organic cellular serums, French niche extrait de parfum, and revitalizing botanical face elixirs.', 'nexora-mall' ),
    'accessories' => __( 'Swiss automatic tourbillons, full-grain Tuscan leather briefcases, and polarized titanium sunglasses.', 'nexora-mall' ),
    'grocery'     => __( 'Single-origin Ethiopian micro-lot coffees, organic cold-pressed olive oils, and artisanal dark truffles.', 'nexora-mall' ),
);

if ( is_product() ) {
    $page_heading = get_the_title();
    $page_sub     = __( 'Hand-curated authentic luxury item with complimentary insured express worldwide delivery.', 'nexora-mall' );
} elseif ( is_search() ) {
    $page_heading = sprintf( __( 'Search Results for: %s', 'nexora-mall' ), get_search_query() );
    $page_sub     = __( 'Showing all luxury catalog results matching your search inquiry.', 'nexora-mall' );
} elseif ( $is_sale ) {
    $page_heading = __( 'VIP Flash Vault — Up to 40% Off', 'nexora-mall' );
    $page_sub     = __( 'Time-locked private discounts across our most coveted luxury releases.', 'nexora-mall' );
} elseif ( isset( $cat_titles[ $current_cat ] ) ) {
    $page_heading = $cat_titles[ $current_cat ];
    $page_sub     = $cat_descs[ $current_cat ];
} elseif ( is_product_category() ) {
    $page_heading = single_cat_title( '', false );
    $page_sub     = category_description() ?: __( 'Explore curated high-end selections in this collection.', 'nexora-mall' );
} else {
    $page_heading = __( 'The Complete Catalog', 'nexora-mall' );
    $page_sub     = __( 'Browse our entire luxury roster across fashion, audio & tech, designer home furnishings, and gourmet groceries.', 'nexora-mall' );
}
?>

<main id="primary" class="site-main">

    <!-- 1. Dark Luxury Hero Catalog Banner -->
    <section style="background-color: var(--color-charcoal-dark); color: #fff; padding: 3.25rem 0; border-bottom: 1px solid rgba(212,168,67,0.3);">
        <div class="container">
            <div style="font-size: 0.8125rem; color: #aaa; margin-bottom: 0.5rem;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: var(--color-gold); text-decoration: none;"><?php esc_html_e( 'Home', 'nexora-mall' ); ?></a> / 
                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" style="color: #aaa; text-decoration: none;"><?php esc_html_e( 'Shop', 'nexora-mall' ); ?></a> / 
                <span style="color: #fff;"><?php echo esc_html( $page_heading ); ?></span>
            </div>
            <h1 style="font-size: 2.75rem; color: #ffffff; font-family: var(--font-heading); margin-bottom: 0.5rem; line-height: 1.2;"><?php echo esc_html( $page_heading ); ?></h1>
            <p style="color: #ccc; max-width: 700px; margin: 0; font-size: 1.05rem; line-height: 1.6;">
                <?php echo esc_html( $page_sub ); ?>
            </p>
        </div>
    </section>

    <!-- 2. Main Content / Shop Grid -->
    <?php if ( is_product() ) : ?>
        <section class="section-padding" style="background-color: var(--bg-primary);">
            <div class="container">
                <?php woocommerce_content(); ?>
            </div>
        </section>
    <?php else : ?>
        <section class="section-padding" style="background-color: var(--bg-primary);">
            <div class="container">
                <div style="display: grid; grid-template-columns: 260px 1fr; gap: 2.5rem; align-items: flex-start;" class="shop-layout-grid">
                    
                    <!-- Filter Sidebar -->
                    <aside style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem; box-shadow: var(--shadow-sm);">
                        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-color); padding-bottom: 0.85rem; margin-bottom: 1.25rem;">
                            <h3 style="font-size: 1.15rem; font-family: var(--font-heading); margin:0;"><?php esc_html_e( 'Filter Products', 'nexora-mall' ); ?></h3>
                            <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" style="color:var(--color-gold); font-size: 0.75rem; font-weight: 700; text-decoration:none; text-transform:uppercase;"><?php esc_html_e( 'Reset All', 'nexora-mall' ); ?></a>
                        </div>

                        <!-- Category Filter -->
                        <div style="margin-bottom: 1.75rem;">
                            <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 0.85rem; color: var(--text-primary); font-family: var(--font-heading);"><?php esc_html_e( 'Departments', 'nexora-mall' ); ?></h4>
                            <div style="display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.875rem;">
                                <label style="display:flex; align-items:center; gap: 0.5rem; cursor:pointer;">
                                    <input type="radio" name="shop-cat" value="all" <?php echo ( $current_cat === 'all' && !$is_sale ) ? 'checked' : ''; ?> onchange="window.location.href='<?php echo esc_url( home_url( '/shop' ) ); ?>'"> <?php esc_html_e( 'All Categories', 'nexora-mall' ); ?>
                                </label>
                                <label style="display:flex; align-items:center; gap: 0.5rem; cursor:pointer;">
                                    <input type="radio" name="shop-cat" value="fashion" <?php echo ( $current_cat === 'fashion' ) ? 'checked' : ''; ?> onchange="window.location.href='<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>'"> <?php esc_html_e( 'Fashion & Apparel', 'nexora-mall' ); ?>
                                </label>
                                <label style="display:flex; align-items:center; gap: 0.5rem; cursor:pointer;">
                                    <input type="radio" name="shop-cat" value="electronics" <?php echo ( $current_cat === 'electronics' ) ? 'checked' : ''; ?> onchange="window.location.href='<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>'"> <?php esc_html_e( 'Electronics & Audio', 'nexora-mall' ); ?>
                                </label>
                                <label style="display:flex; align-items:center; gap: 0.5rem; cursor:pointer;">
                                    <input type="radio" name="shop-cat" value="home" <?php echo ( $current_cat === 'home' ) ? 'checked' : ''; ?> onchange="window.location.href='<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>'"> <?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?>
                                </label>
                                <label style="display:flex; align-items:center; gap: 0.5rem; cursor:pointer;">
                                    <input type="radio" name="shop-cat" value="beauty" <?php echo ( $current_cat === 'beauty' ) ? 'checked' : ''; ?> onchange="window.location.href='<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>'"> <?php esc_html_e( 'Beauty & Personal Care', 'nexora-mall' ); ?>
                                </label>
                                <label style="display:flex; align-items:center; gap: 0.5rem; cursor:pointer;">
                                    <input type="radio" name="shop-cat" value="accessories" <?php echo ( $current_cat === 'accessories' ) ? 'checked' : ''; ?> onchange="window.location.href='<?php echo esc_url( home_url( '/shop?cat=accessories' ) ); ?>'"> <?php esc_html_e( 'Luxury Accessories', 'nexora-mall' ); ?>
                                </label>
                                <label style="display:flex; align-items:center; gap: 0.5rem; cursor:pointer;">
                                    <input type="radio" name="shop-cat" value="grocery" <?php echo ( $current_cat === 'grocery' ) ? 'checked' : ''; ?> onchange="window.location.href='<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>'"> <?php esc_html_e( 'Gourmet Grocery', 'nexora-mall' ); ?>
                                </label>
                            </div>
                        </div>

                        <!-- Price Ceiling -->
                        <div style="margin-bottom: 1.75rem; border-top: 1px solid var(--border-color); padding-top: 1.25rem;">
                            <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 0.85rem; font-family: var(--font-heading);"><?php esc_html_e( 'Price Ceiling:', 'nexora-mall' ); ?> <span id="price-val" style="color:var(--color-gold); font-weight:800;">$1,500</span></h4>
                            <input type="range" id="price-range" min="40" max="2000" step="50" value="1500" style="width:100%; accent-color: var(--color-gold);" oninput="document.getElementById('price-val').textContent = '$' + this.value; filterProductsByPrice(this.value);">
                        </div>

                        <!-- Flash Sale Checkbox -->
                        <div style="border-top: 1px solid var(--border-color); padding-top: 1.25rem;">
                            <label style="display:flex; align-items:center; gap: 0.6rem; cursor:pointer; font-weight:600; color: var(--color-gold);">
                                <input type="checkbox" id="sale-only" <?php echo $is_sale ? 'checked' : ''; ?> onchange="window.location.href = this.checked ? '<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>' : '<?php echo esc_url( home_url( '/shop' ) ); ?>'">
                                <i class="fas fa-bolt"></i> <?php esc_html_e( 'Flash Sale Only', 'nexora-mall' ); ?>
                            </label>
                        </div>
                    </aside>

                    <!-- Products Grid Content Area -->
                    <div>
                        <?php
                        $wc_has_products = false;
                        if ( function_exists( 'wc_get_products' ) ) {
                            $wc_check = wc_get_products( array( 'limit' => 1, 'status' => 'publish' ) );
                            if ( ! empty( $wc_check ) ) {
                                $wc_has_products = true;
                            }
                        }

                        if ( $wc_has_products && have_posts() ) :
                            woocommerce_content();
                        else :
                            $nexora_catalog = array(
                                array('id'=>'nx-101','num_price'=>1250,'cat_slug'=>'accessories','name'=>'Aura Royal Chronograph Watch','cat'=>'Watches & Accessories','price'=>'$1,250.00','orig'=>'$1,500.00','badge'=>'Bestseller','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85','reviews'=>128,'is_sale'=>true),
                                array('id'=>'nx-102','num_price'=>890,'cat_slug'=>'fashion','name'=>'Sovereign Tailored Velvet Tuxedo','cat'=>'Men's Fashion','price'=>'$890.00','orig'=>'$1,100.00','badge'=>'VIP Exclusive','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85','reviews'=>94,'is_sale'=>true),
                                array('id'=>'nx-103','num_price'=>450,'cat_slug'=>'electronics','name'=>'Sonance Spatial Hi-Fi Headphones','cat'=>'Electronics & Audio','price'=>'$450.00','orig'=>'$520.00','badge'=>'Audiophile','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=85','reviews'=>210,'is_sale'=>false),
                                array('id'=>'nx-104','num_price'=>1650,'cat_slug'=>'home','name'=>'Nordic Minimalist Marble Coffee Table','cat'=>'Home & Living','price'=>'$1,650.00','orig'=>'$1,950.00','badge'=>'Statement Piece','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=800&q=85','reviews'=>47,'is_sale'=>false),
                                array('id'=>'nx-105','num_price'=>185,'cat_slug'=>'beauty','name'=>'L'Étoile Cellular Repair Face Serum','cat'=>'Beauty & Personal Care','price'=>'$185.00','orig'=>'$220.00','badge'=>'Organic Extract','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=800&q=85','reviews'=>315,'is_sale'=>true),
                                array('id'=>'nx-106','num_price'=>68,'cat_slug'=>'grocery','name'=>'Tuscan Cold-Pressed Reserve Olive Oil','cat'=>'Gourmet Grocery','price'=>'$68.00','orig'=>'$80.00','badge'=>'Estate Bottled','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=800&q=85','reviews'=>88,'is_sale'=>false),
                                array('id'=>'nx-107','num_price'=>520,'cat_slug'=>'fashion','name'=>'Lumière Silk Evening Slip Dress','cat'=>'Women's Fashion','price'=>'$520.00','orig'=>'$650.00','badge'=>'Runway 2026','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=800&q=85','reviews'=>76,'is_sale'=>true),
                                array('id'=>'nx-108','num_price'=>780,'cat_slug'=>'accessories','name'=>'Florentine Handcrafted Leather Briefcase','cat'=>'Luxury Accessories','price'=>'$780.00','orig'=>'$920.00','badge'=>'Full-Grain','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=85','reviews'=>64,'is_sale'=>false),
                                array('id'=>'nx-109','num_price'=>340,'cat_slug'=>'electronics','name'=>'Vanguard Titanium Smart Speaker','cat'=>'Electronics & Audio','price'=>'$340.00','orig'=>'$399.00','badge'=>'Lossless Audio','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1545454675-3531b543be5d?auto=format&fit=crop&w=800&q=85','reviews'=>142,'is_sale'=>true),
                                array('id'=>'nx-110','num_price'=>920,'cat_slug'=>'home','name'=>'Velvet Occasional Armchair with Gold Brass','cat'=>'Home & Living','price'=>'$920.00','orig'=>'$1,050.00','badge'=>'Save $130','badge_cls'=>'badge-sale','img'=>'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=800&q=85','reviews'=>53,'is_sale'=>true),
                                array('id'=>'nx-111','num_price'=>140,'cat_slug'=>'beauty','name'=>'Maison De Luxe Botanical Eau De Parfum','cat'=>'Beauty & Personal Care','price'=>'$140.00','orig'=>'$175.00','badge'=>'Niche Extract','badge_cls'=>'badge-gold','img'=>'https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=800&q=85','reviews'=>112,'is_sale'=>true),
                                array('id'=>'nx-112','num_price'=>45,'cat_slug'=>'grocery','name'=>'Ethiopian Yirgacheffe Reserve Coffee Beans','cat'=>'Gourmet Grocery','price'=>'$45.00','orig'=>'$55.00','badge'=>'Micro-Lot','badge_cls'=>'badge-charcoal','img'=>'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=800&q=85','reviews'=>96,'is_sale'=>false),
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
                            ?>

                            <div style="display:flex; justify-content: space-between; align-items: center; background: var(--bg-card); border: 1px solid var(--border-color); padding: 0.85rem 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">
                                    <?php esc_html_e( 'Showing', 'nexora-mall' ); ?> <strong id="product-count"><?php echo count( $filtered ); ?></strong> <?php esc_html_e( 'luxury items', 'nexora-mall' ); ?>
                                </div>
                                <div style="display:flex; align-items: center; gap: 0.5rem;">
                                    <label for="sort-select" style="font-size: 0.8125rem; font-weight:600; text-transform:uppercase;"><?php esc_html_e( 'Sort By:', 'nexora-mall' ); ?></label>
                                    <select id="sort-select" class="form-select" style="width: auto; padding: 0.35rem 0.85rem; font-size: 0.8125rem;" onchange="sortCatalogProducts(this.value)">
                                        <option value="featured"><?php esc_html_e( 'Featured / Best Match', 'nexora-mall' ); ?></option>
                                        <option value="price-low"><?php esc_html_e( 'Price: Low to High', 'nexora-mall' ); ?></option>
                                        <option value="price-high"><?php esc_html_e( 'Price: High to Low', 'nexora-mall' ); ?></option>
                                        <option value="rating"><?php esc_html_e( 'Customer Rating', 'nexora-mall' ); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="products-grid" id="catalog-products-grid" style="grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 1.75rem;">
                                <?php foreach ( $filtered as $index => $prod ) : ?>
                                <article class="product-card reveal-on-scroll" data-price="<?php echo esc_attr( $prod['num_price'] ); ?>" data-category="<?php echo esc_attr( $prod['cat_slug'] ); ?>">
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
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>

</main>

<script>
function filterProductsByPrice(maxPrice) {
    const cards = document.querySelectorAll('#catalog-products-grid .product-card');
    let count = 0;
    cards.forEach(card => {
        const price = parseFloat(card.getAttribute('data-price')) || 0;
        if (price <= maxPrice) {
            card.style.display = '';
            count++;
        } else {
            card.style.display = 'none';
        }
    });
    const counter = document.getElementById('product-count');
    if (counter) counter.textContent = count;
}

function sortCatalogProducts(sortType) {
    const grid = document.getElementById('catalog-products-grid');
    if (!grid) return;
    const cards = Array.from(grid.querySelectorAll('.product-card'));
    cards.sort((a, b) => {
        const pA = parseFloat(a.getAttribute('data-price')) || 0;
        const pB = parseFloat(b.getAttribute('data-price')) || 0;
        if (sortType === 'price-low') return pA - pB;
        if (sortType === 'price-high') return pB - pA;
        return 0;
    });
    cards.forEach(c => grid.appendChild(c));
}
</script>

<?php
get_footer();
