<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Products_Grid extends \Elementor\Widget_Base {

    public function get_name() { return 'nexora_products_grid'; }
    public function get_title() { return esc_html__( 'Nexora Luxury Products Grid', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-products'; }
    public function get_categories() { return array( 'nexora-luxury', 'general', 'basic' ); }

    protected function register_controls() {
        $this->start_controls_section( 'section_header', array( 'label' => esc_html__( 'Section Header', 'nexora-mall' ) ) );
        $this->add_control( 'tag', array( 'label' => 'Tagline', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'SIGNATURE CREATIONS' ) );
        $this->add_control( 'title', array( 'label' => 'Title', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Best Selling Masterpieces' ) );
        $this->add_control( 'desc', array( 'label' => 'Description', 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'The most coveted items celebrated by our clientele worldwide.' ) );
        $this->add_control( 'view_all_link', array( 'label' => 'View All Link', 'type' => \Elementor\Controls_Manager::URL, 'default' => array( 'url' => '/shop' ) ) );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $view_all = ! empty( $settings['view_all_link']['url'] ) ? esc_url( $settings['view_all_link']['url'] ) : '/shop';
        ?>
        <section class="section-padding" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); padding: 4rem 0;">
            <div class="container">
                <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <span class="section-tag" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;"><?php echo esc_html( $settings['tag'] ); ?></span>
                        <h2 class="section-title" style="font-size: 2.25rem; font-family: var(--font-heading); margin-top: 0.25rem; color: var(--text-primary);"><?php echo esc_html( $settings['title'] ); ?></h2>
                        <p style="color: var(--text-secondary); margin: 0.25rem 0 0; font-size: 0.95rem;"><?php echo esc_html( $settings['desc'] ); ?></p>
                    </div>
                    <a href="<?php echo $view_all; ?>" style="color: var(--text-primary); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 6px; text-decoration: none;">
                        <?php esc_html_e( 'VIEW ALL CATALOG', 'nexora-mall' ); ?> <i class="fas fa-arrow-right" style="color: var(--color-gold);"></i>
                    </a>
                </div>

                <div class="products-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 1.75rem;">
                    <!-- Product 1 -->
                    <article class="product-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                        <div class="product-img-wrap" style="position: relative; aspect-ratio: 1/1; overflow: hidden; background: var(--bg-primary);">
                            <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85" alt="Aura Royal Chronograph Gold Watch" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="product-body" style="padding: 1.25rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <span class="product-cat" style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-gold); font-weight: 700;">LUXURY HOROLOGY</span>
                                <h3 class="product-name" style="font-size: 1rem; margin: 0.35rem 0; font-family: var(--font-heading); color: var(--text-primary);">Aura Royal Chronograph Gold Watch</h3>
                                <div style="color: var(--color-gold); font-size: 0.8rem; margin-bottom: 0.75rem;">★★★★★ <span style="color: var(--text-muted); font-size: 0.75rem;">(128 reviews)</span></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-color); padding-top: 0.85rem;">
                                <div><span style="font-size: 1.15rem; font-weight: 800; color: var(--color-gold);">$1,250.00</span></div>
                                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-sm btn-primary" style="padding: 0.45rem 0.85rem; font-size: 0.75rem;">ADD TO BAG</a>
                            </div>
                        </div>
                    </article>

                    <!-- Product 2 -->
                    <article class="product-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                        <div class="product-img-wrap" style="position: relative; aspect-ratio: 1/1; overflow: hidden; background: var(--bg-primary);">
                            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85" alt="Velvet Premiere Tailored Blazer" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="product-body" style="padding: 1.25rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <span class="product-cat" style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-gold); font-weight: 700;">MEN'S FASHION</span>
                                <h3 class="product-name" style="font-size: 1rem; margin: 0.35rem 0; font-family: var(--font-heading); color: var(--text-primary);">Velvet Premiere Tailored Blazer</h3>
                                <div style="color: var(--color-gold); font-size: 0.8rem; margin-bottom: 0.75rem;">★★★★★ <span style="color: var(--text-muted); font-size: 0.75rem;">(94 reviews)</span></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-color); padding-top: 0.85rem;">
                                <div><span style="font-size: 1.15rem; font-weight: 800; color: var(--color-gold);">$890.00</span></div>
                                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-sm btn-primary" style="padding: 0.45rem 0.85rem; font-size: 0.75rem;">ADD TO BAG</a>
                            </div>
                        </div>
                    </article>

                    <!-- Product 3 -->
                    <article class="product-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                        <div class="product-img-wrap" style="position: relative; aspect-ratio: 1/1; overflow: hidden; background: var(--bg-primary);">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=85" alt="SonicPro Wireless ANC Headphones" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="product-body" style="padding: 1.25rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <span class="product-cat" style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-gold); font-weight: 700;">AUDIO & TECH</span>
                                <h3 class="product-name" style="font-size: 1rem; margin: 0.35rem 0; font-family: var(--font-heading); color: var(--text-primary);">SonicPro Wireless ANC Headphones</h3>
                                <div style="color: var(--color-gold); font-size: 0.8rem; margin-bottom: 0.75rem;">★★★★★ <span style="color: var(--text-muted); font-size: 0.75rem;">(210 reviews)</span></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-color); padding-top: 0.85rem;">
                                <div><span style="font-size: 1.15rem; font-weight: 800; color: var(--color-gold);">$450.00</span></div>
                                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-sm btn-primary" style="padding: 0.45rem 0.85rem; font-size: 0.75rem;">ADD TO BAG</a>
                            </div>
                        </div>
                    </article>

                    <!-- Product 4 -->
                    <article class="product-card" style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                        <div class="product-img-wrap" style="position: relative; aspect-ratio: 1/1; overflow: hidden; background: var(--bg-primary);">
                            <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=800&q=85" alt="Radiance Gold Botanical Facial Elixir" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="product-body" style="padding: 1.25rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <span class="product-cat" style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-gold); font-weight: 700;">BEAUTY & CARE</span>
                                <h3 class="product-name" style="font-size: 1rem; margin: 0.35rem 0; font-family: var(--font-heading); color: var(--text-primary);">Radiance Gold Botanical Facial Elixir</h3>
                                <div style="color: var(--color-gold); font-size: 0.8rem; margin-bottom: 0.75rem;">★★★★★ <span style="color: var(--text-muted); font-size: 0.75rem;">(315 reviews)</span></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-color); padding-top: 0.85rem;">
                                <div><span style="font-size: 1.15rem; font-weight: 800; color: var(--color-gold);">$185.00</span></div>
                                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-sm btn-primary" style="padding: 0.45rem 0.85rem; font-size: 0.75rem;">ADD TO BAG</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <?php
    }
}
