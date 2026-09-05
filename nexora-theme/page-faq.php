<?php
/**
 * Template Name: FAQ & Policy Page Template
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main">
    <section style="background-color: var(--color-charcoal-dark); color: #fff; padding: 4rem 0; border-bottom: 1px solid rgba(212,168,67,0.3); text-align:center;">
      <div class="container">
        <span class="section-tag" style="color: var(--color-gold);"><?php esc_html_e( 'Help & Governance', 'nexora-mall' ); ?></span>
        <h1 style="font-size: 3rem; color: #ffffff;"><?php esc_html_e( 'Frequently Asked Questions & Policies', 'nexora-mall' ); ?></h1>
        <p style="color: #ccc; max-width: 600px; margin: 0.5rem auto 0 auto;">
          <?php esc_html_e( 'Find prompt answers regarding shipping speeds, our 30-day return policy, authentication certificates, and data protection.', 'nexora-mall' ); ?>
        </p>
      </div>
    </section>

    <section class="section-padding">
      <div class="container" style="max-width: 860px;">
        <div id="faq" style="margin-bottom: 4rem;">
          <h2 style="font-size: 2rem; margin-bottom: 1.5rem;"><?php esc_html_e( 'General Questions', 'nexora-mall' ); ?></h2>

          <div class="faq-accordion-item active">
            <div class="faq-header">
              <span><?php esc_html_e( 'How do I know products on NEXORA are 100% authentic?', 'nexora-mall' ); ?></span>
              <i class="fas fa-chevron-down faq-icon"></i>
            </div>
            <div class="faq-body">
              <?php esc_html_e( 'Every item sold on NEXORA MALL is procured directly from certified manufacturer houses or authorized brand distributors. All high-jewelry, luxury watches, and designer pieces include a serialized physical certificate of authenticity.', 'nexora-mall' ); ?>
            </div>
          </div>

          <div class="faq-accordion-item">
            <div class="faq-header">
              <span><?php esc_html_e( 'What are the shipping delivery timeframes?', 'nexora-mall' ); ?></span>
              <i class="fas fa-chevron-down faq-icon"></i>
            </div>
            <div class="faq-body">
              <?php esc_html_e( 'Domestic express delivery takes 1 to 2 business days. International white-glove air courier delivery takes 3 to 5 business days depending on customs clearance. Orders over $150 receive complimentary express shipping.', 'nexora-mall' ); ?>
            </div>
          </div>

          <div class="faq-accordion-item">
            <div class="faq-header">
              <span><?php esc_html_e( 'What is NEXORA\'s return & exchange policy?', 'nexora-mall' ); ?></span>
              <i class="fas fa-chevron-down faq-icon"></i>
            </div>
            <div class="faq-body">
              <?php esc_html_e( 'We offer a 30-day complimentary return and exchange window. If your piece is unworn, in original packaging with tags intact, simply initiate a return from your Account Dashboard and our courier will collect it.', 'nexora-mall' ); ?>
            </div>
          </div>

          <div class="faq-accordion-item">
            <div class="faq-header">
              <span><?php esc_html_e( 'What payment methods are supported?', 'nexora-mall' ); ?></span>
              <i class="fas fa-chevron-down faq-icon"></i>
            </div>
            <div class="faq-body">
              <?php esc_html_e( 'We support all major credit cards (Visa, Mastercard, American Express), Apple Pay, Google Pay, PayPal, and Cash on Delivery (COD) in eligible regions.', 'nexora-mall' ); ?>
            </div>
          </div>
        </div>

        <div id="shipping" style="margin-bottom: 4rem; border-top: 1px solid var(--border-color); padding-top: 3rem;">
          <h2 style="font-size: 2rem; margin-bottom: 1rem;"><?php esc_html_e( 'Shipping & Delivery Governance', 'nexora-mall' ); ?></h2>
          <p style="color: var(--text-secondary); line-height: 1.7; margin-bottom: 1rem;">
            <?php esc_html_e( 'NEXORA MALL partners with premier global logistics providers including DHL Express, FedEx Priority, and UPS Air to deliver rapid, insured consignments globally.', 'nexora-mall' ); ?>
          </p>
        </div>

        <div id="returns" style="margin-bottom: 4rem; border-top: 1px solid var(--border-color); padding-top: 3rem;">
          <h2 style="font-size: 2rem; margin-bottom: 1rem;"><?php esc_html_e( 'Returns, Refunds & Exchanges', 'nexora-mall' ); ?></h2>
          <p style="color: var(--text-secondary); line-height: 1.7;">
            <?php esc_html_e( 'Refunds are credited to the original payment source within 3 to 5 business days after our quality control depot verifies the returned merchandise.', 'nexora-mall' ); ?>
          </p>
        </div>

        <div id="privacy" style="border-top: 1px solid var(--border-color); padding-top: 3rem;">
          <h2 style="font-size: 2rem; margin-bottom: 1rem;"><?php esc_html_e( 'Privacy Notice & Data Security', 'nexora-mall' ); ?></h2>
          <p style="color: var(--text-secondary); line-height: 1.7;">
            <?php esc_html_e( 'We adhere strictly to GDPR, CCPA, and international data privacy regulations. We never monetize or distribute personal client information.', 'nexora-mall' ); ?>
          </p>
        </div>
      </div>
    </section>
</main>

<?php
get_footer();
