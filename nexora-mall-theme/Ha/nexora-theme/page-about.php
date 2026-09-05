<?php
/**
 * Template Name: About Us Page Template
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main">
    <section style="background-color: var(--color-charcoal-dark); color: #fff; padding: 4.5rem 0; border-bottom: 1px solid rgba(212,168,67,0.3); text-align: center;">
      <div class="container">
        <span class="section-tag" style="color: var(--color-gold);"><?php esc_html_e( 'Our Heritage & Philosophy', 'nexora-mall' ); ?></span>
        <h1 style="font-size: 3.25rem; color: #ffffff; max-width: 800px; margin: 0 auto 1rem auto;">
          "Shop Everything. Live Better."
        </h1>
        <p style="color: #ccc; max-width: 650px; margin: 0 auto; line-height: 1.7; font-size: 1.05rem;">
          <?php esc_html_e( 'NEXORA MALL was founded on a singular premise: to unite the world\'s most prestigious artisans, state-of-the-art tech engineers, and organic growers into one seamless digital shopping sanctum.', 'nexora-mall' ); ?>
        </p>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 5rem;">
          <div>
            <span class="section-tag"><?php esc_html_e( 'The Genesis', 'nexora-mall' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'The Digital Palace of Fine Living', 'nexora-mall' ); ?></h2>
            <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 1.25rem;">
              <?php esc_html_e( 'Born in 2021, NEXORA MALL re-imagined the e-commerce landscape by bridging luxury boutique curation with global fulfillment efficiency. We believe shopping shouldn\'t merely be a transaction — it should be an inspiring aesthetic experience.', 'nexora-mall' ); ?>
            </p>
            <p style="color: var(--text-secondary); line-height: 1.8;">
              <?php esc_html_e( 'Every brand hosted on our marketplace undergoes strict scrutiny for verified authenticity, ethical supply chains, and superior durability.', 'nexora-mall' ); ?>
            </p>
          </div>
          <div>
            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'NEXORA Boutique Interior', 'nexora-mall' ); ?>" style="border-radius: var(--radius-sm); box-shadow: var(--shadow-md);">
          </div>
        </div>

        <div style="text-align: center; margin-bottom: 3rem;">
          <span class="section-tag"><?php esc_html_e( 'Guiding Principles', 'nexora-mall' ); ?></span>
          <h2 class="section-title"><?php esc_html_e( 'Our Four Pillars of Distinction', 'nexora-mall' ); ?></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
          <div style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 2rem 1.5rem; border-radius: var(--radius-sm); text-align: center;">
            <div style="font-size: 2.25rem; color: var(--color-gold); margin-bottom: 1rem;"><i class="fas fa-crown"></i></div>
            <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;"><?php esc_html_e( 'Uncompromising Quality', 'nexora-mall' ); ?></h3>
            <p style="font-size: 0.85rem; color: var(--text-secondary);"><?php esc_html_e( 'Only hand-vetted materials, certified gold alloys, and lab-tested organic botanicals.', 'nexora-mall' ); ?></p>
          </div>

          <div style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 2rem 1.5rem; border-radius: var(--radius-sm); text-align: center;">
            <div style="font-size: 2.25rem; color: var(--color-gold); margin-bottom: 1rem;"><i class="fas fa-globe"></i></div>
            <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;"><?php esc_html_e( 'Global Logistics', 'nexora-mall' ); ?></h3>
            <p style="font-size: 0.85rem; color: var(--text-secondary);"><?php esc_html_e( 'Climate-controlled fulfillment hubs across North America, Europe, and Asia.', 'nexora-mall' ); ?></p>
          </div>

          <div style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 2rem 1.5rem; border-radius: var(--radius-sm); text-align: center;">
            <div style="font-size: 2.25rem; color: var(--color-gold); margin-bottom: 1rem;"><i class="fas fa-leaf"></i></div>
            <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;" id="sustainability"><?php esc_html_e( 'Sustainable Luxury', 'nexora-mall' ); ?></h3>
            <p style="font-size: 0.85rem; color: var(--text-secondary);"><?php esc_html_e( '100% recyclable FSC-certified presentation packaging and carbon-neutral freight.', 'nexora-mall' ); ?></p>
          </div>

          <div style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 2rem 1.5rem; border-radius: var(--radius-sm); text-align: center;">
            <div style="font-size: 2.25rem; color: var(--color-gold); margin-bottom: 1rem;"><i class="fas fa-headset"></i></div>
            <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;"><?php esc_html_e( 'VIP Concierge', 'nexora-mall' ); ?></h3>
            <p style="font-size: 0.85rem; color: var(--text-secondary);"><?php esc_html_e( '24/7 dedicated personal shopping advisors standing by for bespoke styling requests.', 'nexora-mall' ); ?></p>
          </div>
        </div>
      </div>
    </section>
</main>

<?php
get_footer();
