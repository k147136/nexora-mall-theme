<!-- SHARED FAT FOOTER -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Col 1: Brand & Tagline -->
            <div>
                <div class="brand-logo" style="color: #ffffff; margin-bottom: 0.85rem;">
                    NEXORA<span class="logo-accent">.</span>MALL
                </div>
                <p style="color: #9c9c9c; line-height: 1.65; margin-bottom: 1.5rem; max-width: 320px;">
                    <?php echo esc_html( get_theme_mod( 'nexora_footer_about', '"Shop Everything. Live Better" — The world\'s premier digital marketplace delivering authenticated luxury, state-of-the-art tech, and refined lifestyle essentials.' ) ); ?>
                </p>
                <div class="social-links-row">
                    <a href="<?php echo esc_url( get_theme_mod( 'nexora_social_fb', '#' ) ); ?>" class="social-icon-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo esc_url( get_theme_mod( 'nexora_social_insta', '#' ) ); ?>" class="social-icon-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo esc_url( get_theme_mod( 'nexora_social_twitter', '#' ) ); ?>" class="social-icon-btn" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="<?php echo esc_url( get_theme_mod( 'nexora_social_linkedin', '#' ) ); ?>" class="social-icon-btn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Col 2: Luxury Marketplace -->
            <div>
                <h4 class="footer-heading"><?php esc_html_e( 'Marketplace', 'nexora-mall' ); ?></h4>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/shop' ) ); ?>"><?php esc_html_e( 'Shop All Products', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop?cat=fashion' ) ); ?>"><?php esc_html_e( 'Fashion & Apparel', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop?cat=electronics' ) ); ?>"><?php esc_html_e( 'Electronics & Audio', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop?cat=home' ) ); ?>"><?php esc_html_e( 'Home & Living', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop?cat=beauty' ) ); ?>"><?php esc_html_e( 'Beauty & Wellness', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop?cat=grocery' ) ); ?>"><?php esc_html_e( 'Gourmet Grocery', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop?sale=true' ) ); ?>"><?php esc_html_e( 'Flash Sale Vault', 'nexora-mall' ); ?></a></li>
                </ul>
            </div>

            <!-- Col 3: Customer Care & Services -->
            <div>
                <h4 class="footer-heading"><?php esc_html_e( 'Client Services', 'nexora-mall' ); ?></h4>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/account-tracking#track' ) ); ?>"><?php esc_html_e( 'Track Your Order', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq-policy#shipping' ) ); ?>"><?php esc_html_e( 'Shipping & Global Delivery', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq-policy#returns' ) ); ?>"><?php esc_html_e( 'Returns & Exchange', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq-policy' ) ); ?>"><?php esc_html_e( 'Frequently Asked Questions', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/account-tracking#wishlist' ) ); ?>"><?php esc_html_e( 'My VIP Wishlist', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( '24/7 Concierge Support', 'nexora-mall' ); ?></a></li>
                </ul>
            </div>

            <!-- Col 4: About & Governance -->
            <div>
                <h4 class="footer-heading"><?php esc_html_e( 'The House', 'nexora-mall' ); ?></h4>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About NEXORA MALL', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about#sustainability' ) ); ?>"><?php esc_html_e( 'Sustainability & Ethics', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about#leadership' ) ); ?>"><?php esc_html_e( 'Executive Leadership', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq-policy#privacy' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq-policy#terms' ) ); ?>"><?php esc_html_e( 'Terms of Service', 'nexora-mall' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact#locations' ) ); ?>"><?php esc_html_e( 'Boutique Locations', 'nexora-mall' ); ?></a></li>
                </ul>
            </div>

            <!-- Col 5: VIP Insider Newsletter -->
            <div>
                <h4 class="footer-heading"><?php esc_html_e( 'VIP Insider Newsletter', 'nexora-mall' ); ?></h4>
                <p style="color: #9c9c9c; font-size: 0.8125rem; margin-bottom: 0.85rem;">
                    <?php esc_html_e( 'Join the inner circle for bespoke private sales, new collections, and luxury edits.', 'nexora-mall' ); ?>
                </p>
                <form onsubmit="event.preventDefault(); showToast('Welcome to the Nexora VIP Inner Circle!'); this.reset();" style="display:flex; gap: 0.4rem;">
                    <input type="email" placeholder="<?php esc_attr_e( 'Enter your email', 'nexora-mall' ); ?>" required style="flex:1; padding: 0.65rem 0.85rem; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.08); color:#fff; border-radius: var(--radius-xs); font-size: 0.8125rem;">
                    <button type="submit" class="btn btn-gold btn-sm"><?php esc_html_e( 'Join', 'nexora-mall' ); ?></button>
                </form>
                <div style="margin-top: 1.5rem;">
                    <div style="font-size: 0.72rem; text-transform: uppercase; color: #888; letter-spacing: 0.1em; margin-bottom: 0.5rem;"><?php esc_html_e( 'Secure Encrypted Payments', 'nexora-mall' ); ?></div>
                    <div style="display:flex; gap:0.5rem; font-size: 1.4rem; color: #d4a843;">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-amex"></i>
                        <i class="fab fa-cc-paypal"></i>
                        <i class="fab fa-cc-apple-pay"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Row -->
        <div class="footer-bottom-bar">
            <div>&copy; <?php echo date( 'Y' ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> Inc. <?php esc_html_e( 'All Rights Reserved. "Shop Everything. Live Better".', 'nexora-mall' ); ?></div>
            <div style="display:flex; gap: 1.5rem;">
                <a href="<?php echo esc_url( home_url( '/faq-policy#privacy' ) ); ?>"><?php esc_html_e( 'Privacy Notice', 'nexora-mall' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/faq-policy#terms' ) ); ?>"><?php esc_html_e( 'Terms of Sale', 'nexora-mall' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/faq-policy#shipping' ) ); ?>"><?php esc_html_e( 'Global Delivery', 'nexora-mall' ); ?></a>
            </div>
        </div>
    </div>
</footer>

<!-- QUICK VIEW MODAL COMPONENT -->
<div class="modal-overlay" id="quick-view-modal" role="dialog" aria-modal="true">
    <div class="modal-card">
        <button class="modal-close-btn" id="close-modal-btn" aria-label="<?php esc_attr_e( 'Close modal', 'nexora-mall' ); ?>">&times;</button>
        <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: var(--radius-xs); overflow: hidden; display:flex; align-items:center; justify-content:center;">
            <img id="qv-img" src="" alt="<?php esc_attr_e( 'Product', 'nexora-mall' ); ?>" style="max-height: 340px; object-fit: cover;">
        </div>
        <div style="display: flex; flex-direction: column;">
            <span id="qv-category" class="section-tag" style="margin-bottom: 0.25rem;">CATEGORY</span>
            <h3 id="qv-title" style="font-size: 1.6rem; margin-bottom: 0.65rem;">Product Name</h3>
            <div style="display: flex; align-items: baseline; gap: 0.85rem; margin-bottom: 1rem;">
                <span id="qv-price" style="font-family: var(--font-heading); font-size: 1.65rem; font-weight: 800; color: var(--color-gold);">$0.00</span>
                <span id="qv-orig-price" style="text-decoration: line-through; color: var(--text-muted); font-size: 0.95rem;">$0.00</span>
            </div>
            <p id="qv-desc" style="font-size: 0.875rem; color: var(--text-secondary); line-height: 1.65; margin-bottom: 1.5rem;">
                Exquisite handcrafted quality designed for longevity and luxury aesthetics.
            </p>
            <div style="display: flex; align-items: center; gap: 1rem; margin-top: auto;">
                <div class="qty-selector">
                    <button class="qty-btn" onclick="const i=document.getElementById('qv-qty-input'); if(parseInt(i.value)>1) i.value=parseInt(i.value)-1;">-</button>
                    <input type="text" id="qv-qty-input" class="qty-input" value="1" readonly>
                    <button class="qty-btn" onclick="const i=document.getElementById('qv-qty-input'); i.value=parseInt(i.value)+1;">+</button>
                </div>
                <button class="btn btn-gold" id="qv-add-btn" style="flex:1;">
                    <i class="fas fa-bag-shopping"></i> <?php esc_html_e( 'Add to Bag', 'nexora-mall' ); ?>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- BACK TO TOP BUTTON -->
<button class="back-to-top-btn" aria-label="<?php esc_attr_e( 'Back to Top', 'nexora-mall' ); ?>">
    <i class="fas fa-arrow-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
