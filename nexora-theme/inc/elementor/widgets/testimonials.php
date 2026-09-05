<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Testimonials extends \Elementor\Widget_Base {

    public function get_name() { return 'nexora_testimonials'; }
    public function get_title() { return esc_html__( 'Nexora VIP Testimonials', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-testimonial'; }
    public function get_categories() { return array( 'nexora-luxury', 'general', 'basic' ); }

    protected function register_controls() {
        $this->start_controls_section( 'section_header', array( 'label' => esc_html__( 'Header', 'nexora-mall' ) ) );
        $this->add_control( 'tag', array( 'label' => 'Tagline', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'CLIENT TESTIMONIALS' ) );
        $this->add_control( 'title', array( 'label' => 'Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'What Our Global Patrons Say' ) );
        $this->add_control( 'desc', array( 'label' => 'Description', 'type' => \Elementor\Controls_Manager::TEXTAREA, 'default' => 'Experience trusted feedback from verified buyers across London, New York, Dubai, and Singapore.' ) );
        $this->end_controls_section();

        $this->start_controls_section( 'section_reviews', array( 'label' => esc_html__( 'Reviews', 'nexora-mall' ) ) );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control( 'name', array( 'label' => 'Client Name', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Victoria Sterling' ) );
        $repeater->add_control( 'city', array( 'label' => 'Location', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'New York, USA • Verified Patron' ) );
        $repeater->add_control( 'quote', array( 'label' => 'Review Text', 'type' => \Elementor\Controls_Manager::TEXTAREA, 'default' => 'The Aura Royal Chronograph timepiece is sheer master craftsmanship. Packaging is immaculate with authenticated certificates.' ) );
        $repeater->add_control( 'avatar', array( 'label' => 'Avatar URL', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80' ) );

        $this->add_control(
            'reviews',
            array(
                'label'   => esc_html__( 'Reviews List', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => array(
                    array( 'name' => 'Victoria Sterling', 'city' => 'New York, USA • Verified Patron', 'quote' => 'The Aura Royal Chronograph timepiece is sheer master craftsmanship. Packaging is immaculate with authenticated certificates.', 'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80' ),
                    array( 'name' => 'Alexander Wright', 'city' => 'London, UK • Verified Patron', 'quote' => 'NEXORA MALL is my premier destination for both high-end electronics and gourmet pantry essentials. Customer concierge resolved query in 5 mins.', 'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80' ),
                    array( 'name' => 'Sophia Al-Mansoor', 'city' => 'Dubai, UAE • Verified Patron', 'quote' => 'The Nordic Marble Coffee Table is a true architectural statement piece in our living room. 100% authentic Carrara tone with gold accents.', 'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80' ),
                ),
                'title_field' => '{{{ name }}}',
            )
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $reviews = ! empty( $settings['reviews'] ) ? $settings['reviews'] : array();
        ?>
        <section class="section-padding" style="background-color: var(--bg-primary); padding: 4rem 0;">
            <div class="container">
                <div class="section-header" style="text-align: center; margin-bottom: 3rem;">
                    <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.2em; text-transform: uppercase;"><?php echo esc_html( $settings['tag'] ); ?></span>
                    <h2 class="section-title" style="font-size: 2.25rem; font-family: var(--font-heading); margin-top: 0.4rem; color: var(--text-primary);"><?php echo esc_html( $settings['title'] ); ?></h2>
                    <p class="section-desc" style="max-width: 600px; margin: 0.5rem auto 0; color: var(--text-secondary);"><?php echo esc_html( $settings['desc'] ); ?></p>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <?php foreach ( $reviews as $r ) : ?>
                        <div class="testimonial-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 2rem; box-shadow: var(--shadow-sm);">
                            <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 1rem;">★★★★★</div>
                            <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                                "<?php echo esc_html( $r['quote'] ); ?>"
                            </p>
                            <div style="display: flex; align-items: center; gap: 0.85rem;">
                                <img src="<?php echo esc_url( $r['avatar'] ); ?>" alt="<?php echo esc_attr( $r['name'] ); ?>" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
                                <div>
                                    <h4 style="font-size: 0.9rem; margin: 0; color: var(--text-primary); font-family: var(--font-heading);"><?php echo esc_html( $r['name'] ); ?></h4>
                                    <span style="font-size: 0.75rem; color: var(--text-muted);"><?php echo esc_html( $r['city'] ); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
