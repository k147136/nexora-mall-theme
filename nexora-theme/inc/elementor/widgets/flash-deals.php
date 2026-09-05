<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Flash_Deals extends \Elementor\Widget_Base {

    public function get_name() { return 'nexora_flash_deals'; }
    public function get_title() { return esc_html__( 'Nexora VIP Flash Vault', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-countdown'; }
    public function get_categories() { return array( 'nexora-luxury', 'general', 'basic' ); }

    protected function register_controls() {
        $this->start_controls_section( 'section_flash', array( 'label' => esc_html__( 'Flash Sale Settings', 'nexora-mall' ) ) );
        $this->add_control( 'tag', array( 'label' => 'Tagline', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'VIP FLASH VAULT' ) );
        $this->add_control( 'title', array( 'label' => 'Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Up to 40% Off Signature Collections.' ) );
        $this->add_control( 'desc', array( 'label' => 'Description', 'type' => \Elementor\Controls_Manager::TEXTAREA, 'default' => 'Take advantage of time-locked discounts across flagship audio, designer evening apparels and Italian leather accessories.' ) );
        $this->add_control( 'hours', array( 'label' => 'Countdown Hours', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => '48' ) );
        $this->add_control( 'mins', array( 'label' => 'Countdown Mins', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => '15' ) );
        $this->add_control( 'secs', array( 'label' => 'Countdown Secs', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => '26' ) );
        $this->add_control( 'img_url', array( 'label' => 'Showcase Image URL', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=600&q=85' ) );
        $this->add_control( 'btn_text', array( 'label' => 'Button Text', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'UNLOCK FLASH DEALS' ) );
        $this->add_control( 'btn_url', array( 'label' => 'Button Link', 'type' => \Elementor\Controls_Manager::URL, 'default' => array( 'url' => '/shop?sale=true' ) ) );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $btn_url  = ! empty( $settings['btn_url']['url'] ) ? esc_url( $settings['btn_url']['url'] ) : '/shop?sale=true';
        ?>
        <section class="section-padding" style="background: #141414; color: #fff; padding: 4rem 0;">
            <div class="container">
                <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;" class="flash-vault-layout">
                    <div>
                        <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php echo esc_html( $settings['tag'] ); ?></span>
                        <h2 style="font-size: 2.75rem; font-family: var(--font-heading); color: #fff; margin: 0.5rem 0 1rem; line-height: 1.2;">
                            <?php echo esc_html( $settings['title'] ); ?>
                        </h2>
                        <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 2rem; max-width: 520px; line-height: 1.6;">
                            <?php echo esc_html( $settings['desc'] ); ?>
                        </p>

                        <div style="display: flex; gap: 1rem; margin-bottom: 2.25rem;">
                            <div style="background: #222; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-xs); padding: 0.85rem 1.25rem; text-align: center; min-width: 75px;">
                                <div style="font-size: 1.75rem; font-weight: 900; color: var(--color-gold); font-family: var(--font-heading);"><?php echo esc_html( $settings['hours'] ); ?></div>
                                <div style="font-size: 0.65rem; text-transform: uppercase; color: #888; font-weight: 700; letter-spacing: 0.1em;">HOURS</div>
                            </div>
                            <div style="background: #222; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-xs); padding: 0.85rem 1.25rem; text-align: center; min-width: 75px;">
                                <div style="font-size: 1.75rem; font-weight: 900; color: var(--color-gold); font-family: var(--font-heading);"><?php echo esc_html( $settings['mins'] ); ?></div>
                                <div style="font-size: 0.65rem; text-transform: uppercase; color: #888; font-weight: 700; letter-spacing: 0.1em;">MIN</div>
                            </div>
                            <div style="background: #222; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-xs); padding: 0.85rem 1.25rem; text-align: center; min-width: 75px;">
                                <div style="font-size: 1.75rem; font-weight: 900; color: var(--color-gold); font-family: var(--font-heading);"><?php echo esc_html( $settings['secs'] ); ?></div>
                                <div style="font-size: 0.65rem; text-transform: uppercase; color: #888; font-weight: 700; letter-spacing: 0.1em;">SECS</div>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="<?php echo $btn_url; ?>" class="btn btn-gold">
                                <i class="fas fa-bolt"></i> <?php echo esc_html( $settings['btn_text'] ); ?>
                            </a>
                        </div>
                    </div>

                    <div style="position: relative; text-align: center;">
                        <div style="background: #1c1c1c; border: 1px solid rgba(212,168,67,0.3); border-radius: var(--radius-sm); padding: 1.5rem; display: inline-block; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                            <img src="<?php echo esc_url( $settings['img_url'] ); ?>" alt="Flash Vault" style="max-height: 320px; width: auto; border-radius: var(--radius-xs);">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
