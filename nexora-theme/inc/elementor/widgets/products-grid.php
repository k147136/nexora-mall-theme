<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Products_Grid extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_products_grid'; }
    public function get_title() { return esc_html__( 'Luxury Products Grid (12 Items)', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-products'; }
    public function get_categories() { return array( 'nexora-luxury' ); }

    protected function register_controls() {
        $this->start_controls_section( 'content_section', array( 'label' => esc_html__( 'Products Settings', 'nexora-mall' ), 'tab' => \Elementor\Controls_Manager::TAB_CONTENT ) );
        $this->add_control( 'heading', array( 'label' => esc_html__( 'Section Title', 'nexora-mall' ), 'type' => \Elementor\Controls_Manager::TEXT, 'default' => 'Signature Luxury Masterpieces' ) );
        $this->add_control( 'count', array( 'label' => esc_html__( 'Product Count', 'nexora-mall' ), 'type' => \Elementor\Controls_Manager::NUMBER, 'default' => 12, 'min' => 4, 'max' => 24 ) );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="nexora-elementor-products-section">
            <div class="products-grid">
                // Display 12 luxury products
                $products = array(
                    array('id'=>'nx-101','name'=>'Aura Royal Chronograph Gold Watch','cat'=>'Luxury Watches','price'=>'$349.00','orig'=>'$420.00','badge'=>'18k Gold','img'=>'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85','reviews'=>128),
                    array('id'=>'nx-102','name'=>'Velvet Elegance Tailored Blazer','cat'=>'Men's Fashion','price'=>'$189.00','orig'=>'$240.00','badge'=>'New Release','img'=>'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85','reviews'=>95),
                    array('id'=>'nx-103','name'=>'SonicPro Wireless ANC Studio Headphones','cat'=>'Audio & Tech','price'=>'$279.00','orig'=>'$320.00','badge'=>'Top Rated','img'=>'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=85','reviews'=>310),
                    array('id'=>'nx-104','name'=>'Lumière Silk Evening Gala Gown','cat'=>'Women's Fashion','price'=>'$295.00','orig'=>'$360.00','badge'=>'Pure Silk','img'=>'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?auto=format&fit=crop&w=800&q=85','reviews'=>84),
                    array('id'=>'nx-105','name'=>'Nordic Minimalist Marble Coffee Table','cat'=>'Home & Living','price'=>'$450.00','orig'=>'$550.00','badge'=>'Carrara Marble','img'=>'https://images.unsplash.com/photo-1533090161767-e6ffed986b88?auto=format&fit=crop&w=800&q=85','reviews'=>62),
                    array('id'=>'nx-106','name'=>'Radiance 24k Gold Botanical Facial Elixir','cat'=>'Beauty & Care','price'=>'$95.00','orig'=>'$120.00','badge'=>'24k Gold','img'=>'https://images.unsplash.com/photo-1608248597359-0a67cf5e4c6c?auto=format&fit=crop&w=800&q=85','reviews'=>175),
                    array('id'=>'nx-107','name'=>'Artisan Kashmiri Saffron & Raw Honey','cat'=>'Gourmet Grocery','price'=>'$65.00','orig'=>'$80.00','badge'=>'Grade 1 Pure','img'=>'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=800&q=85','reviews'=>204),
                    array('id'=>'nx-108','name'=>'Milano Full-Grain Leather Briefcase','cat'=>'Leather Goods','price'=>'$220.00','orig'=>'$280.00','badge'=>'Handmade','img'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=85','reviews'=>140),
                    array('id'=>'nx-109','name'=>'VisionPro 4K Curved OLED Studio Display','cat'=>'Audio & Tech','price'=>'$680.00','orig'=>'$799.00','badge'=>'Ultra HDR','img'=>'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?auto=format&fit=crop&w=800&q=85','reviews'=>88),
                    array('id'=>'nx-110','name'=>'Velvet Touch Handcrafted Lounge Armchair','cat'=>'Home & Living','price'=>'$380.00','orig'=>'$460.00','badge'=>'Save $80','img'=>'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=800&q=85','reviews'=>53),
                    array('id'=>'nx-111','name'=>'Maison De Luxe Botanical Eau De Parfum','cat'=>'Beauty & Care','price'=>'$140.00','orig'=>'$175.00','badge'=>'Niche Extract','img'=>'https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=800&q=85','reviews'=>112),
                    array('id'=>'nx-112','name'=>'Ethiopian Yirgacheffe Reserve Coffee','cat'=>'Gourmet Grocery','price'=>'$45.00','orig'=>'$55.00','badge'=>'Micro-Lot','img'=>'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=800&q=85','reviews'=>96),
                );
                
                $limit = intval($settings['count']) ?: 12;
                foreach ( array_slice($products, 0, $limit) as $p ) :
                ?>
                <article class="product-card">
                    <div class="product-body">
                        <div class="product-footer">
                        </div>
                    </div>
                </article>
            </div>
        </div>
    }
}