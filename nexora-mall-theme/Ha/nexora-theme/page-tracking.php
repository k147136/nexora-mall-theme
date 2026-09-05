<?php
/**
 * Template Name: Order Tracking & Wishlist Page
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main section-padding">
    <div class="container">
        <h1 style="font-size: 2.5rem; margin-bottom: 0.5rem;"><?php esc_html_e( 'Patron Account & Order Portal', 'nexora-mall' ); ?></h1>
        <p style="color: var(--text-secondary); margin-bottom: 2.5rem;"><?php esc_html_e( 'Track live consignments, manage saved pieces in your wishlist, or update account security.', 'nexora-mall' ); ?></p>

        <div class="tab-nav-row" style="margin-bottom: 2.5rem;">
          <button class="tab-nav-btn active" onclick="switchAccountTab(this, 'acc-track')"><i class="fas fa-truck-fast"></i> <?php esc_html_e( 'Live Order Tracker', 'nexora-mall' ); ?></button>
          <button class="tab-nav-btn" onclick="switchAccountTab(this, 'acc-wishlist')"><i class="far fa-heart"></i> <?php esc_html_e( 'My Wishlist', 'nexora-mall' ); ?></button>
          <button class="tab-nav-btn" onclick="switchAccountTab(this, 'acc-login')"><i class="far fa-user"></i> <?php esc_html_e( 'VIP Account Login', 'nexora-mall' ); ?></button>
        </div>

        <div id="acc-track" class="tab-content-panel active">
          <div style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 2.5rem; border-radius: var(--radius-sm); max-width: 800px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;"><?php esc_html_e( 'Track Your Consignment', 'nexora-mall' ); ?></h3>
            <p style="color: var(--text-secondary); font-size: 0.875rem; margin-bottom: 1.5rem;"><?php esc_html_e( 'Enter your NEXORA tracking number (e.g. NX-78924018-US) or registered email address.', 'nexora-mall' ); ?></p>
            
            <form onsubmit="handleTrackQuery(event)" style="display:flex; gap: 0.5rem; margin-bottom: 2rem;">
              <input type="text" id="track-id-input" placeholder="<?php esc_attr_e( 'Enter Tracking ID (e.g. NX-78924018-US)', 'nexora-mall' ); ?>" required class="form-input" style="flex:1;">
              <button type="submit" class="btn btn-gold"><?php esc_html_e( 'Track Live', 'nexora-mall' ); ?></button>
            </form>

            <div id="tracking-result-box" style="display:none; border-top: 1px solid var(--border-color); padding-top: 2rem;">
              <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 1.5rem;">
                <div>
                  <span style="font-size: 0.75rem; text-transform:uppercase; color: var(--text-gold); font-weight:700;"><?php esc_html_e( 'Consignment ID', 'nexora-mall' ); ?></span>
                  <div style="font-family: var(--font-heading); font-size: 1.25rem; font-weight:800;" id="res-tracking-id">NX-78924018-US</div>
                </div>
                <span class="badge badge-gold" id="res-status-badge"><?php esc_html_e( 'In Transit (Air Express)', 'nexora-mall' ); ?></span>
              </div>

              <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; text-align: center; position: relative;">
                <div>
                  <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--color-gold); color:#1a1a1a; display:flex; align-items:center; justify-content:center; margin: 0 auto 0.5rem auto;"><i class="fas fa-check"></i></div>
                  <div style="font-size: 0.8125rem; font-weight:700;"><?php esc_html_e( 'Order Placed', 'nexora-mall' ); ?></div>
                </div>
                <div>
                  <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--color-gold); color:#1a1a1a; display:flex; align-items:center; justify-content:center; margin: 0 auto 0.5rem auto;"><i class="fas fa-check"></i></div>
                  <div style="font-size: 0.8125rem; font-weight:700;"><?php esc_html_e( 'Packaged', 'nexora-mall' ); ?></div>
                </div>
                <div>
                  <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--color-gold); color:#1a1a1a; display:flex; align-items:center; justify-content:center; margin: 0 auto 0.5rem auto;"><i class="fas fa-plane"></i></div>
                  <div style="font-size: 0.8125rem; font-weight:700; color: var(--color-gold);"><?php esc_html_e( 'In Transit', 'nexora-mall' ); ?></div>
                </div>
                <div>
                  <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--border-color); color:var(--text-muted); display:flex; align-items:center; justify-content:center; margin: 0 auto 0.5rem auto;"><i class="fas fa-house"></i></div>
                  <div style="font-size: 0.8125rem; font-weight:700; color: var(--text-muted);"><?php esc_html_e( 'Out for Delivery', 'nexora-mall' ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="acc-wishlist" class="tab-content-panel">
          <div class="products-grid" id="wishlist-grid-items"></div>
        </div>

        <div id="acc-login" class="tab-content-panel">
          <div style="max-width: 480px; background: var(--bg-card); border: 1px solid var(--border-color); padding: 2.5rem; border-radius: var(--radius-sm); box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.6rem; margin-bottom: 0.4rem;"><?php esc_html_e( 'VIP Patron Portal', 'nexora-mall' ); ?></h3>
            <p style="color: var(--text-secondary); font-size: 0.85rem; margin-bottom: 1.5rem;"><?php esc_html_e( 'Access private sales, view saved payment methods, and review order invoices.', 'nexora-mall' ); ?></p>

            <form onsubmit="event.preventDefault(); showToast('Logged in successfully to VIP Portal!');">
              <div class="form-control-group">
                <label class="form-label"><?php esc_html_e( 'Email Address', 'nexora-mall' ); ?></label>
                <input type="email" class="form-input" required placeholder="patron@domain.com">
              </div>
              <div class="form-control-group">
                <label class="form-label"><?php esc_html_e( 'Password', 'nexora-mall' ); ?></label>
                <input type="password" class="form-input" required placeholder="••••••••">
              </div>
              <button type="submit" class="btn btn-gold" style="width: 100%; margin-top: 0.5rem;"><?php esc_html_e( 'Sign In to Portal', 'nexora-mall' ); ?></button>
            </form>
          </div>
        </div>
      </div>
    </section>
</main>

<?php
get_footer();
