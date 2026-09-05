<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Value_Props extends \Elementor\Widget_Base {

    public function get_name() { return 'nexora_value_props'; }
    public function get_title() { return esc_html__( 'Nexora Luxury Highlights', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-info-box'; }
    public function get_categories() { return array( 'nexora-luxury', 'general', 'basic' ); }

    protected function register_controls() {
        $this->start_controls_section(
            'section_content',
            array( 'label' => esc_html__( 'Highlight Cards', 'nexora-mall' ) )
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control( 'icon', array( 'label' => 'Icon Class', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'fas fa-truck-fast' ) );
        $repeater->add_control( 'title', array( 'label' => 'Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Complimentary Global Shipping' ) );
        $repeater->add_control( 'subtitle', array( 'label' => 'Subtitle', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Free express dispatch on all orders over $150' ) );

        $this->add_control(
            'items',
            array(
                'label'   => esc_html__( 'Highlights Items', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => array(
                    array( 'icon' => 'fas fa-truck-fast', 'title' => 'Complimentary Global Shipping', 'subtitle' => 'Free express dispatch on all orders over $150' ),
                    array( 'icon' => 'fas fa-certificate', 'title' => '100% Authenticity Guaranteed', 'subtitle' => 'Directly sourced & certified by master houses' ),
                    array( 'icon' => 'fas fa-shield-halved', 'title' => 'Secure Encrypted Checkout', 'subtitle' => '256-bit bank level protection on transactions' ),
                    array( 'icon' => 'fas fa-rotate-left', 'title' => '30-Day Hassle-Free Returns', 'subtitle' => 'Complimentary courier pick-up worldwide' ),
                ),
                'title_field' => '{{{ title }}}',
            )
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $items = ! empty( $settings['items'] ) ? $settings['items'] : array();
        ?>
        <section class="value-props-section" style="background: var(--bg-card); border-bottom: 1px solid var(--border-color); padding: 1.75rem 0;">
            <div class="container">
                <div class="value-props-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem;">
                    <?php foreach ( $items as $it ) : ?>
                        <div class="value-card" style="display: flex; align-items: center; gap: 1rem; padding: 0.5rem 0;">
                            <div class="value-icon-box" style="font-size: 1.75rem; color: var(--color-gold); min-width: 44px;">
                                <i class="<?php echo esc_attr( $it['icon'] ); ?>"></i>
                            </div>
                            <div>
                                <div class="value-title" style="font-weight: 700; font-size: 0.92rem; color: var(--text-primary);"><?php echo esc_html( $it['title'] ); ?></div>
                                <div class="value-subtitle" style="font-size: 0.78rem; color: var(--text-secondary); margin-top: 2px;"><?php echo esc_html( $it['subtitle'] ); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
