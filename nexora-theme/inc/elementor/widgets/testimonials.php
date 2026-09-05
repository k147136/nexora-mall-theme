<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Testimonials extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_testimonials'; }
    public function get_title() { return esc_html__( 'Patron Testimonials & Trust', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-testimonial'; }
    public function get_categories() { return array( 'nexora-luxury' ); }

    protected function render() {
        ?>
        <div class="testimonials-grid">
            <div class="testimonial-card"><div class="test-stars">★★★★★</div><p class="test-quote">"The Aura Royal Chronograph surpassed every expectation. Packaging is immaculate with authenticated certificates."</p><div class="test-author-row"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Victoria" class="test-avatar"><div><div class="test-name">Victoria Sterling</div><div class="test-loc">New York, USA</div></div></div></div>
            <div class="testimonial-card"><div class="test-stars">★★★★★</div><p class="test-quote">"NEXORA MALL is my primary destination for both high-end electronics and gourmet pantry essentials."</p><div class="test-author-row"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80" alt="Alexander" class="test-avatar"><div><div class="test-name">Alexander Wright</div><div class="test-loc">London, UK</div></div></div></div>
            <div class="testimonial-card"><div class="test-stars">★★★★★</div><p class="test-quote">"The Nordic Marble Coffee Table is a true architectural statement piece in our living room. Flawless joinery."</p><div class="test-author-row"><img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80" alt="Sophia" class="test-avatar"><div><div class="test-name">Sophia Al-Mansoor</div><div class="test-loc">Dubai, UAE</div></div></div></div>
        </div>
    }
}