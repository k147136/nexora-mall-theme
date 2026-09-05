<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Nexora_Elementor_Promo_Banners extends \Elementor\Widget_Base {

    public function get_name() {
        return 'nexora_promo_banners';
    }

    public function get_title() {
        return esc_html__( 'Nexora Promotional Banners', 'nexora-mall' );
    }

    public function get_icon() {
        return 'eicon-banner';
    }

    public function get_categories() {
        return array( 'nexora-luxury' );
    }

    protected function register_controls() {
        // Banner 1
        $this->start_controls_section(
            'section_banner_1',
            array(
                'label' => esc_html__( 'Left Banner', 'nexora-mall' ),
            )
        );

        $this->add_control(
            'b1_tag',
            array(
                'label'   => esc_html__( 'Tag Badge', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'Haute Couture',
            )
        );

        $this->add_control(
            'b1_title',
            array(
                'label'   => esc_html__( 'Title', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'The Spring Runway Selection',
            )
        );

        $this->add_control(
            'b1_image',
            array(
                'label'   => esc_html__( 'Image', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => array(
                    'url' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=1000&q=80',
                ),
            )
        );

        $this->add_control(
            'b1_link',
            array(
                'label'   => esc_html__( 'Button Link', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::URL,
                'default' => array( 'url' => '/shop?cat=fashion' ),
            )
        );

        $this->end_controls_section();

        // Banner 2
        $this->start_controls_section(
            'section_banner_2',
            array(
                'label' => esc_html__( 'Right Banner', 'nexora-mall' ),
            )
        );

        $this->add_control(
            'b2_tag',
            array(
                'label'   => esc_html__( 'Tag Badge', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'Swiss Horology',
            )
        );

        $this->add_control(
            'b2_title',
            array(
                'label'   => esc_html__( 'Title', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'Certified Master Tourbillons',
            )
        );

        $this->add_control(
            'b2_image',
            array(
                'label'   => esc_html__( 'Image', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => array(
                    'url' => 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=1000&q=80',
                ),
            )
        );

        $this->add_control(
            'b2_link',
            array(
                'label'   => esc_html__( 'Button Link', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::URL,
                'default' => array( 'url' => '/shop?cat=accessories' ),
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display();
        ?>
        <section class="section-padding" style="background-color: var(--bg-primary);">
            <div class="container">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                    <!-- Banner 1 -->
                    <div style="position: relative; border-radius: var(--radius-sm); overflow: hidden; min-height: 340px; display: flex; align-items: flex-end; padding: 2.5rem; background: url('<?php echo esc_url( $s['b1_image']['url'] ); ?>') center/cover no-repeat; border: 1px solid var(--border-color);">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.85) 100%);"></div>
                        <div style="position: relative; z-index: 2;">
                            <span class="badge badge-gold" style="margin-bottom: 0.75rem;"><?php echo esc_html( $s['b1_tag'] ); ?></span>
                            <h3 style="font-size: 1.85rem; color: #ffffff; font-family: var(--font-heading); margin-bottom: 1rem;"><?php echo esc_html( $s['b1_title'] ); ?></h3>
                            <a href="<?php echo esc_url( $s['b1_link']['url'] ); ?>" class="btn btn-sm btn-gold"><?php esc_html_e( 'Discover', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Banner 2 -->
                    <div style="position: relative; border-radius: var(--radius-sm); overflow: hidden; min-height: 340px; display: flex; align-items: flex-end; padding: 2.5rem; background: url('<?php echo esc_url( $s['b2_image']['url'] ); ?>') center/cover no-repeat; border: 1px solid var(--border-color);">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.85) 100%);"></div>
                        <div style="position: relative; z-index: 2;">
                            <span class="badge badge-charcoal" style="margin-bottom: 0.75rem; border: 1px solid var(--color-gold);"><?php echo esc_html( $s['b2_tag'] ); ?></span>
                            <h3 style="font-size: 1.85rem; color: #ffffff; font-family: var(--font-heading); margin-bottom: 1rem;"><?php echo esc_html( $s['b2_title'] ); ?></h3>
                            <a href="<?php echo esc_url( $s['b2_link']['url'] ); ?>" class="btn btn-sm btn-gold"><?php esc_html_e( 'Explore', 'nexora-mall' ); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
