<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Promo_Banners extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_promo_banners'; }
    public function get_title() { return esc_html__( 'Nexora Promotional Banners', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-banner'; }
    public function get_categories() { return array( 'nexora-luxury', 'general' ); }

    protected function register_controls() {
        $this->start_controls_section( 'section_banners', array( 'label' => esc_html__( 'Banner 1 & 2', 'nexora-mall' ) ) );
        $this->add_control( 'b1_tag', array( 'label' => 'Banner 1 Tag', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'HAUTE COUTURE' ) );
        $this->add_control( 'b1_title', array( 'label' => 'Banner 1 Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Private Runway Edit 2026' ) );
        $this->add_control( 'b1_img', array( 'label' => 'Banner 1 Image URL', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=800&q=80' ) );
        $this->add_control( 'b1_url', array( 'label' => 'Banner 1 Link', 'type' => \Elementor\Controls_Manager::URL, 'default' => array('url'=>'/shop?cat=fashion') ) );

        $this->add_control( 'b2_tag', array( 'label' => 'Banner 2 Tag', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'STUDIO ACOUSTICS' ) );
        $this->add_control( 'b2_title', array( 'label' => 'Banner 2 Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Wireless Sound Precision' ) );
        $this->add_control( 'b2_img', array( 'label' => 'Banner 2 Image URL', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=80' ) );
        $this->add_control( 'b2_url', array( 'label' => 'Banner 2 Link', 'type' => \Elementor\Controls_Manager::URL, 'default' => array('url'=>'/shop?cat=electronics') ) );
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display();
        $u1 = ! empty( $s['b1_url']['url'] ) ? esc_url( $s['b1_url']['url'] ) : '/shop';
        $u2 = ! empty( $s['b2_url']['url'] ) ? esc_url( $s['b2_url']['url'] ) : '/shop';
        ?>
        <section class="section-padding" style="padding: 3rem 0;">
            <div class="container">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                    <div style="position: relative; border-radius: var(--radius-sm); overflow: hidden; min-height: 280px; background-image: url('<?php echo esc_url($s['b1_img']); ?>'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 2rem;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.85) 100%);"></div>
                        <div style="position: relative; z-index: 2;">
                            <span style="color: var(--color-gold); font-size: 0.72rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php echo esc_html($s['b1_tag']); ?></span>
                            <h3 style="font-size: 1.5rem; font-family: var(--font-heading); color: #fff; margin: 0.35rem 0 1rem;"><?php echo esc_html($s['b1_title']); ?></h3>
                            <a href="<?php echo $u1; ?>" class="btn btn-sm btn-gold">DISCOVER NOW <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div style="position: relative; border-radius: var(--radius-sm); overflow: hidden; min-height: 280px; background-image: url('<?php echo esc_url($s['b2_img']); ?>'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 2rem;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.85) 100%);"></div>
                        <div style="position: relative; z-index: 2;">
                            <span style="color: var(--color-gold); font-size: 0.72rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php echo esc_html($s['b2_tag']); ?></span>
                            <h3 style="font-size: 1.5rem; font-family: var(--font-heading); color: #fff; margin: 0.35rem 0 1rem;"><?php echo esc_html($s['b2_title']); ?></h3>
                            <a href="<?php echo $u2; ?>" class="btn btn-sm btn-gold">DISCOVER NOW <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
