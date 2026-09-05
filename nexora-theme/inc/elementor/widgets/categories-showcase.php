<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Categories_Showcase extends \Elementor\Widget_Base {

    public function get_name() { return 'nexora_categories_showcase'; }
    public function get_title() { return esc_html__( 'Nexora Curated Departments', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-gallery-grid'; }
    public function get_categories() { return array( 'nexora-luxury', 'general', 'basic' ); }

    protected function register_controls() {
        $this->start_controls_section( 'section_header', array( 'label' => esc_html__( 'Header Text', 'nexora-mall' ) ) );
        $this->add_control( 'tag', array( 'label' => 'Tagline', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'CURATED DEPARTMENTS' ) );
        $this->add_control( 'title', array( 'label' => 'Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Explore NEXORA Departments' ) );
        $this->add_control( 'desc', array( 'label' => 'Description', 'type' => \Elementor\Controls_Manager::TEXTAREA, 'default' => 'From high fashion and haute couture to audio, tech and gourmet pantry reserves, discover premium luxury in every category.' ) );
        $this->end_controls_section();

        $this->start_controls_section( 'section_items', array( 'label' => esc_html__( 'Departments', 'nexora-mall' ) ) );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control( 'name', array( 'label' => 'Name', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Fashion & Apparel' ) );
        $repeater->add_control( 'count', array( 'label' => 'Items Count', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => '120+ Items' ) );
        $repeater->add_control( 'img_url', array( 'label' => 'Image URL', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=300&q=80' ) );
        $repeater->add_control( 'link', array( 'label' => 'Link', 'type' => \Elementor\Controls_Manager::URL, 'default' => array( 'url' => '/shop?cat=fashion' ) ) );

        $this->add_control(
            'cats',
            array(
                'label'   => esc_html__( 'Categories List', 'nexora-mall' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => array(
                    array( 'name' => 'Fashion & Apparel', 'count' => '120+ Items', 'img_url' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=300&q=80', 'link' => array('url'=>'/shop?cat=fashion') ),
                    array( 'name' => 'Electronics', 'count' => '85+ Items', 'img_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=300&q=80', 'link' => array('url'=>'/shop?cat=electronics') ),
                    array( 'name' => 'Home & Living', 'count' => '94+ Items', 'img_url' => 'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=300&q=80', 'link' => array('url'=>'/shop?cat=home') ),
                    array( 'name' => 'Beauty & Care', 'count' => '64+ Items', 'img_url' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=300&q=80', 'link' => array('url'=>'/shop?cat=beauty') ),
                    array( 'name' => 'Accessories', 'count' => '110+ Items', 'img_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=300&q=80', 'link' => array('url'=>'/shop?cat=accessories') ),
                    array( 'name' => 'Gourmet Grocery', 'count' => '50+ Items', 'img_url' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=300&q=80', 'link' => array('url'=>'/shop?cat=grocery') ),
                ),
                'title_field' => '{{{ name }}}',
            )
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $cats = ! empty( $settings['cats'] ) ? $settings['cats'] : array();
        ?>
        <section class="section-padding" style="background-color: var(--bg-primary); text-align: center; padding: 4rem 0;">
            <div class="container">
                <div class="section-header" style="margin-bottom: 2.5rem;">
                    <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.2em; text-transform: uppercase;"><?php echo esc_html( $settings['tag'] ); ?></span>
                    <h2 class="section-title" style="font-size: 2.25rem; font-family: var(--font-heading); margin-top: 0.4rem; color: var(--text-primary);"><?php echo esc_html( $settings['title'] ); ?></h2>
                    <p class="section-desc" style="max-width: 650px; margin: 0.5rem auto 0; font-size: 0.95rem; color: var(--text-secondary);"><?php echo esc_html( $settings['desc'] ); ?></p>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1.25rem;">
                    <?php foreach ( $cats as $c ) : 
                        $link = ! empty( $c['link']['url'] ) ? esc_url( $c['link']['url'] ) : '#';
                    ?>
                        <a href="<?php echo $link; ?>" class="category-pill-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 1.5rem 1rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: var(--transition);">
                            <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; margin-bottom: 0.85rem; border: 2px solid var(--color-gold); box-shadow: var(--shadow-sm);">
                                <img src="<?php echo esc_url( $c['img_url'] ); ?>" alt="<?php echo esc_attr( $c['name'] ); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h4 style="font-size: 0.9rem; font-family: var(--font-heading); color: var(--text-primary); margin: 0;"><?php echo esc_html( $c['name'] ); ?></h4>
                            <span style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;"><?php echo esc_html( $c['count'] ); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
