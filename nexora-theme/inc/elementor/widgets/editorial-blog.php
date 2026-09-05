<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Editorial_Blog extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_editorial_blog'; }
    public function get_title() { return esc_html__( 'Nexora Editorial Blog', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-posts-grid'; }
    public function get_categories() { return array( 'nexora-luxury', 'general' ); }

    protected function register_controls() {
        $this->start_controls_section( 'section_header', array( 'label' => esc_html__( 'Header', 'nexora-mall' ) ) );
        $this->add_control( 'tag', array( 'label' => 'Tagline', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'THE EDITORIAL JOURNAL' ) );
        $this->add_control( 'title', array( 'label' => 'Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Stories of Art, Horology & Haute Couture' ) );
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display();
        ?>
        <section class="section-padding" style="background: var(--bg-secondary); padding: 4rem 0;">
            <div class="container">
                <div class="section-header" style="text-align: center; margin-bottom: 2.5rem;">
                    <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php echo esc_html($s['tag']); ?></span>
                    <h2 class="section-title" style="font-size: 2.25rem; font-family: var(--font-heading); margin-top: 0.35rem; color: var(--text-primary);"><?php echo esc_html($s['title']); ?></h2>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <article style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=600&q=80" alt="Horology Journal" style="width: 100%; height: 220px; object-fit: cover;">
                        <div style="padding: 1.5rem;">
                            <span style="color: var(--color-gold); font-size: 0.75rem; font-weight: 700; text-transform: uppercase;">HAUTE HOROLOGY</span>
                            <h3 style="font-size: 1.15rem; font-family: var(--font-heading); margin: 0.5rem 0; color: var(--text-primary);"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" style="color: inherit; text-decoration: none;">The Architectural Masterpieces of Modern Watchmaking</a></h3>
                            <p style="color: var(--text-secondary); font-size: 0.88rem; line-height: 1.6;">An in-depth exploration into the hand-finished tourbillon escapements defining 2026 luxury collections.</p>
                        </div>
                    </article>
                    <article style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=600&q=80" alt="Fashion Journal" style="width: 100%; height: 220px; object-fit: cover;">
                        <div style="padding: 1.5rem;">
                            <span style="color: var(--color-gold); font-size: 0.75rem; font-weight: 700; text-transform: uppercase;">PARIS COUTURE</span>
                            <h3 style="font-size: 1.15rem; font-family: var(--font-heading); margin: 0.5rem 0; color: var(--text-primary);"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" style="color: inherit; text-decoration: none;">Silk, Velvet & Gold: The Fall Haute Runway Highlights</a></h3>
                            <p style="color: var(--text-secondary); font-size: 0.88rem; line-height: 1.6;">Direct from Paris Fashion Week: the textures, silhouettes, and artisanal finishes commanding luxury wardrobes.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <?php
    }
}
