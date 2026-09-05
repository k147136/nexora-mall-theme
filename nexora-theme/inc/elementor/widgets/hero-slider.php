<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Hero_Slider extends \Elementor\Widget_Base {

    public function get_name() { return 'nexora_hero_slider'; }
    public function get_title() { return esc_html__( 'Nexora Luxury Hero Carousel', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-slider-push'; }
    public function get_categories() { return array( 'nexora-luxury', 'general', 'basic' ); }

    protected function register_controls() {
        $this->start_controls_section(
            'section_slides',
            array( 'label' => esc_html__( 'Slides Carousel', 'nexora-mall' ) )
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'slide_tag',
            array(
                'label'   => esc_html__( 'Badge / Tagline', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'NEXT-GEN TECH',
            )
        );

        $repeater->add_control(
            'slide_tag_icon',
            array(
                'label'   => esc_html__( 'Badge Icon Class', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'fas fa-crown',
            )
        );

        $repeater->add_control(
            'slide_title',
            array(
                'label'   => esc_html__( 'Slide Title', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'Acoustic Perfection & Future Living.',
            )
        );

        $repeater->add_control(
            'slide_desc',
            array(
                'label'   => esc_html__( 'Description', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Studio-grade wireless acoustics, flagship smart devices, and intelligent luxury living engineered for the discerning professional.',
            )
        );

        $repeater->add_control(
            'slide_btn_text',
            array(
                'label'   => esc_html__( 'Button Text', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'SHOP ELECTRONICS',
            )
        );

        $repeater->add_control(
            'slide_btn_link',
            array(
                'label'   => esc_html__( 'Button Link', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::URL,
                'default' => array( 'url' => '/shop?cat=electronics' ),
            )
        );

        $repeater->add_control(
            'slide_bg_img',
            array(
                'label'   => esc_html__( 'Background Image URL', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=1800&q=85',
            )
        );

        $this->add_control(
            'slides',
            array(
                'label'       => esc_html__( 'Slides List', 'nexora-mall' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => array(
                    array(
                        'slide_tag'      => 'NEXT-GEN TECH',
                        'slide_tag_icon' => 'fas fa-crown',
                        'slide_title'    => 'Acoustic Perfection & Future Living.',
                        'slide_desc'     => 'Studio-grade wireless acoustics, flagship smart devices, and intelligent luxury living.',
                        'slide_btn_text' => 'SHOP ELECTRONICS',
                        'slide_btn_link' => array( 'url' => '/shop?cat=electronics' ),
                        'slide_bg_img'   => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=1800&q=85',
                    ),
                    array(
                        'slide_tag'      => 'HAUTE HOROLOGY',
                        'slide_tag_icon' => 'fas fa-gem',
                        'slide_title'    => 'Timeless Elegance & Precision.',
                        'slide_desc'     => 'Curated selection of fine gold horology, bespoke Italian tailoring, and high-jewelry accessories.',
                        'slide_btn_text' => 'EXPLORE TIMEPIECES',
                        'slide_btn_link' => array( 'url' => '/shop?cat=accessories' ),
                        'slide_bg_img'   => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1800&q=85',
                    ),
                ),
                'title_field' => '{{{ slide_title }}}',
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $slides   = ! empty( $settings['slides'] ) ? $settings['slides'] : array();
        if ( empty( $slides ) ) { return; }
        ?>
        <div class="hero-slider-wrap" style="position: relative; overflow: hidden; border-radius: var(--radius-sm); min-height: 540px;">
            <?php foreach ( $slides as $i => $slide ) : 
                $active_cls = ( $i === 0 ) ? 'active' : '';
                $bg = ! empty( $slide['slide_bg_img'] ) ? esc_url( $slide['slide_bg_img'] ) : '';
                $url = ! empty( $slide['slide_btn_link']['url'] ) ? esc_url( $slide['slide_btn_link']['url'] ) : '#';
            ?>
                <div class="hero-slide <?php echo esc_attr( $active_cls ); ?>" style="background-image: url('<?php echo $bg; ?>'); min-height: 540px; background-size: cover; background-position: center; display: <?php echo ( $i === 0 ) ? 'block' : 'none'; ?>; position: relative;">
                    <div class="hero-slide-overlay" style="position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0.82) 0%, rgba(0,0,0,0.45) 50%, rgba(0,0,0,0.2) 100%);"></div>
                    <div class="container" style="height: 100%; min-height: 540px; display: flex; align-items: center; position: relative; z-index: 3;">
                        <div class="hero-slide-content" style="max-width: 620px; padding: 2.5rem 0;">
                            <?php if ( ! empty( $slide['slide_tag'] ) ) : ?>
                                <span class="hero-tag" style="display: inline-flex; align-items: center; gap: 6px; padding: 0.35rem 0.85rem; background: rgba(212,168,67,0.18); border: 1px solid var(--color-gold); color: var(--color-gold); border-radius: 50px; font-size: 0.72rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 1.25rem;">
                                    <?php if ( ! empty( $slide['slide_tag_icon'] ) ) : ?><i class="<?php echo esc_attr( $slide['slide_tag_icon'] ); ?>"></i><?php endif; ?>
                                    <?php echo esc_html( $slide['slide_tag'] ); ?>
                                </span>
                            <?php endif; ?>

                            <h1 class="hero-title" style="font-size: 3rem; font-family: var(--font-heading); color: #ffffff; line-height: 1.15; margin: 0 0 1rem; font-weight: 800;">
                                <?php echo esc_html( $slide['slide_title'] ); ?>
                            </h1>

                            <p class="hero-desc" style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 2rem; max-width: 540px;">
                                <?php echo esc_html( $slide['slide_desc'] ); ?>
                            </p>

                            <?php if ( ! empty( $slide['slide_btn_text'] ) ) : ?>
                                <div class="hero-cta-row">
                                    <a href="<?php echo $url; ?>" class="btn btn-gold" style="display: inline-flex; align-items: center; gap: 8px;">
                                        <?php echo esc_html( $slide['slide_btn_text'] ); ?> <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
}
