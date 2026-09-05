<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Nexora_Elementor_Value_Props extends \Elementor\Widget_Base {

    public function get_name() {
        return 'nexora_value_props';
    }

    public function get_title() {
        return esc_html__( 'Nexora Luxury Highlights', 'nexora-mall' );
    }

    public function get_icon() {
        return 'eicon-info-box';
    }

    public function get_categories() {
        return array( 'nexora-luxury' );
    }

    protected function register_controls() {
        $this->start_controls_section(
            'section_content',
            array(
                'label' => esc_html__( 'Highlight Cards', 'nexora-mall' ),
            )
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'item_icon',
            array(
                'label'   => esc_html__( 'FontAwesome Icon Class', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'fas fa-truck-fast',
            )
        );

        $repeater->add_control(
            'item_title',
            array(
                'label'   => esc_html__( 'Title', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'Complimentary Global Shipping',
            )
        );

        $repeater->add_control(
            'item_subtitle',
            array(
                'label'   => esc_html__( 'Subtitle', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'Free express dispatch on orders over $150',
            )
        );

        $this->add_control(
            'props_list',
            array(
                'label'       => esc_html__( 'Highlights List', 'nexora-mall' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => array(
                    array( 'item_icon' => 'fas fa-truck-fast', 'item_title' => 'Complimentary Global Shipping', 'item_subtitle' => 'Free express dispatch on orders over $150' ),
                    array( 'item_icon' => 'fas fa-certificate', 'item_title' => '100% Authenticity Guaranteed', 'item_subtitle' => 'Directly sourced & certified by master houses' ),
                    array( 'item_icon' => 'fas fa-shield-halved', 'item_title' => '30-Day Luxury Concierge Returns', 'item_subtitle' => 'Complimentary pickup & instant refunds' ),
                    array( 'item_icon' => 'fas fa-lock', 'item_title' => 'End-to-End Encrypted Checkout', 'item_subtitle' => '256-bit bank grade security & crypto ready' ),
                ),
                'title_field' => '{{{ item_title }}}',
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( empty( $settings['props_list'] ) ) return;
        ?>
        <section class="value-props-section">
            <div class="container">
                <div class="value-props-grid">
                    <?php foreach ( $settings['props_list'] as $idx => $item ) : ?>
                    <div class="value-card">
                        <div class="value-icon-box"><i class="<?php echo esc_attr( $item['item_icon'] ); ?>"></i></div>
                        <div>
                            <div class="value-title"><?php echo esc_html( $item['item_title'] ); ?></div>
                            <div class="value-subtitle"><?php echo esc_html( $item['item_subtitle'] ); ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
