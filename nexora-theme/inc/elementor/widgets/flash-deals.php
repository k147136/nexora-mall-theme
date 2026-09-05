<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Flash_Deals extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_flash_deals'; }
    public function get_title() { return esc_html__( 'Flash Deals Vault & Countdown', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-countdown'; }
    public function get_categories() { return array( 'nexora-luxury' ); }

    protected function render() {
        ?>
        <section class="flash-sale-section" style="border-radius: var(--radius-sm);">
            <div class="container">
                <div class="flash-sale-grid">
                    <div>
                        <div class="countdown-box-wrap">
                            <div class="countdown-unit"><div class="countdown-number" id="cd-hours">48</div><div class="countdown-label">Hours</div></div>
                            <div class="countdown-unit"><div class="countdown-number" id="cd-mins">15</div><div class="countdown-label">Mins</div></div>
                            <div class="countdown-unit"><div class="countdown-number" id="cd-secs">30</div><div class="countdown-label">Secs</div></div>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=700&q=80" alt="Flash Sale" style="border-radius: var(--radius-sm); border: 2px solid rgba(212,168,67,0.4); max-height: 380px;">
                    </div>
                </div>
            </div>
        </section>
    }
}