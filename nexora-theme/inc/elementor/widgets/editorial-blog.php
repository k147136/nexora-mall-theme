<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Editorial_Blog extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_editorial_blog'; }
    public function get_title() { return esc_html__( 'Editorial Blog Showcase (3 Articles)', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-posts-grid'; }
    public function get_categories() { return array( 'nexora-luxury' ); }

    protected function render() {
        ?>
        <div class="blog-box-container">
            <div class="blog-grid">
                <article class="blog-card">
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-card-link">
                        <div class="blog-img-wrap">
                            <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85" alt="Haute Horlogerie" class="blog-img" loading="lazy">
                        </div>
                        <h3 class="blog-title"><?php esc_html_e( 'The Art of Haute Horlogerie: Inside Swiss Watchmaking Masters', 'nexora-mall' ); ?></h3>
                    </a>
                </article>
                <article class="blog-card">
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-card-link">
                        <div class="blog-img-wrap">
                            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=85" alt="Modern Minimalism" class="blog-img" loading="lazy">
                        </div>
                        <h3 class="blog-title"><?php esc_html_e( 'Modern Minimalism: Crafting Luxurious & Serene Living Sanctuaries', 'nexora-mall' ); ?></h3>
                    </a>
                </article>
                <article class="blog-card">
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-card-link">
                        <div class="blog-img-wrap">
                            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85" alt="Haute Couture" class="blog-img" loading="lazy">
                        </div>
                        <h3 class="blog-title"><?php esc_html_e( 'Autumn/Winter Haute Couture: The Revival of Structured Velvet', 'nexora-mall' ); ?></h3>
                    </a>
                </article>
            </div>
        </div>
        <?php
    }
}