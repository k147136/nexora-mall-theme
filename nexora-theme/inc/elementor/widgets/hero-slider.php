<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Hero_Slider extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_hero_slider'; }
    public function get_title() { return esc_html__( 'Hero Luxury Carousel', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-slider-push'; }
    public function get_categories() { return array( 'nexora-luxury' ); }

    protected function register_controls() {
        $this->start_controls_section( 'content_section', array( 'label' => esc_html__( 'Hero Slides', 'nexora-mall' ), 'tab' => \Elementor\Controls_Manager::TAB_CONTENT ) );
        $this->add_control( 'tagline', array( 'label' => esc_html__( 'Badge Text', 'nexora-mall' ), 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'The Autumn Luxury Edit' ) );
        $this->add_control( 'title', array( 'label' => esc_html__( 'Heading Title', 'nexora-mall' ), 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Timeless Luxury, Unrivaled Craftsmanship.' ) );
        $this->add_control( 'btn_text', array( 'label' => esc_html__( 'CTA Button Text', 'nexora-mall' ), 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Explore Collection' ) );
        $this->add_control( 'btn_url', array( 'label' => esc_html__( 'CTA URL', 'nexora-mall' ), 'type' => \Elementor\Controls_Manager::URL, 'default' => array( 'url' => '/shop' ) ) );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="hero-slider-wrap" style="border-radius: var(--radius-sm); overflow: hidden;">
            <div class="hero-slide active" style="min-height: 520px; background-image: url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1800&q=80'); background-size: cover; position: relative;">
                <div class="hero-slide-overlay"></div>
                <div class="container" style="height: 100%; min-height: 520px; display: flex; align-items: center; position: relative; z-index: 2;">
                    <div class="hero-slide-content">
                    </div>
                </div>
            </div>
        </div>
    }
}