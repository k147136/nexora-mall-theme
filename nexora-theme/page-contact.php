<?php
/**
 * Template Name: Contact Us Page Template
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main">
    <section style="background-color: var(--color-charcoal-dark); color: #fff; padding: 4rem 0; border-bottom: 1px solid rgba(212,168,67,0.3); text-align:center;">
      <div class="container">
        <span class="section-tag" style="color: var(--color-gold);"><?php esc_html_e( 'We Are Here To Assist', 'nexora-mall' ); ?></span>
        <h1 style="font-size: 3rem; color: #ffffff;"><?php esc_html_e( 'Contact Our VIP Concierge', 'nexora-mall' ); ?></h1>
        <p style="color: #ccc; max-width: 600px; margin: 0.5rem auto 0 auto;">
          <?php esc_html_e( 'Whether you need bespoke product sizing, custom bulk procurement, or order assistance, our specialists are available 24/7.', 'nexora-mall' ); ?>
        </p>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="contact-grid">
          <div style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 2.5rem; box-shadow: var(--shadow-sm);">
            <h2 style="font-size: 1.85rem; margin-bottom: 1.5rem;"><?php esc_html_e( 'Send an Inquiry', 'nexora-mall' ); ?></h2>
            <form onsubmit="event.preventDefault(); showToast('Inquiry received! Our concierge will reply within 2 hours.'); this.reset();">
              <div class="form-group-row">
                <div>
                  <label class="form-label"><?php esc_html_e( 'Full Name *', 'nexora-mall' ); ?></label>
                  <input type="text" class="form-input" required placeholder="Lady Eleanor Vance">
                </div>
                <div>
                  <label class="form-label"><?php esc_html_e( 'Email Address *', 'nexora-mall' ); ?></label>
                  <input type="email" class="form-input" required placeholder="eleanor@vance.com">
                </div>
              </div>

              <div class="form-control-group">
                <label class="form-label"><?php esc_html_e( 'Subject / Department *', 'nexora-mall' ); ?></label>
                <select class="form-select">
                  <option><?php esc_html_e( 'Order & Tracking Assistance', 'nexora-mall' ); ?></option>
                  <option><?php esc_html_e( 'VIP Bespoke Styling Request', 'nexora-mall' ); ?></option>
                  <option><?php esc_html_e( 'Corporate Gifting & Bulk Orders', 'nexora-mall' ); ?></option>
                  <option><?php esc_html_e( 'Brand Partnership Inquiry', 'nexora-mall' ); ?></option>
                </select>
              </div>

              <div class="form-control-group">
                <label class="form-label"><?php esc_html_e( 'Message Details *', 'nexora-mall' ); ?></label>
                <textarea class="form-textarea" rows="5" required placeholder="<?php esc_attr_e( 'Please state how our concierge team may assist your request...', 'nexora-mall' ); ?>"></textarea>
              </div>

              <button type="submit" class="btn btn-gold" style="width: 100%;">
                <i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Transmit Message', 'nexora-mall' ); ?>
              </button>
            </form>
          </div>

          <div>
            <div class="contact-info-card">
              <div class="contact-icon-circle"><i class="fas fa-phone"></i></div>
              <div>
                <h4 style="font-size: 1.1rem; margin-bottom: 0.2rem;"><?php esc_html_e( 'Direct Helpline', 'nexora-mall' ); ?></h4>
                <p style="color: var(--text-secondary); font-size: 0.875rem;">Toll-Free: +1 (800) 555-NEXORA</p>
                <p style="color: var(--text-muted); font-size: 0.75rem;">International Concierge: +44 20 7946 0912</p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="contact-icon-circle"><i class="fas fa-envelope"></i></div>
              <div>
                <h4 style="font-size: 1.1rem; margin-bottom: 0.2rem;"><?php esc_html_e( 'Email Support', 'nexora-mall' ); ?></h4>
                <p style="color: var(--text-secondary); font-size: 0.875rem;">concierge@nexoramall.com</p>
                <p style="color: var(--text-muted); font-size: 0.75rem;">Average response time: &lt; 15 minutes</p>
              </div>
            </div>

            <div class="contact-info-card" id="locations">
              <div class="contact-icon-circle"><i class="fas fa-building"></i></div>
              <div>
                <h4 style="font-size: 1.1rem; margin-bottom: 0.2rem;"><?php esc_html_e( 'Flagship Headquarters', 'nexora-mall' ); ?></h4>
                <p style="color: var(--text-secondary); font-size: 0.875rem;">NEXORA Tower, 5th Avenue, New York, NY 10022</p>
                <p style="color: var(--text-muted); font-size: 0.75rem;">Mayfair Hub: 14 Berkeley Square, London W1J 6AE</p>
              </div>
            </div>

            <div style="margin-top: 2rem; border-radius: var(--radius-sm); overflow: hidden; border: 1px solid var(--border-color); position: relative; height: 200px;">
              <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=800&q=80" alt="Map Location" style="width: 100%; height: 100%; object-fit: cover;">
              <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(30,30,30,0.85); color: var(--color-gold); padding: 0.6rem 1.2rem; border-radius: var(--radius-pill); font-size: 0.85rem; font-weight:700; border: 1px solid var(--color-gold);">
                <i class="fas fa-location-dot"></i> NEXORA Flagship HQ
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

<?php
get_footer();
