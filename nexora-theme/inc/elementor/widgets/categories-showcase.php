<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! did_action( 'elementor/loaded' ) || ! class_exists( '\Elementor\Widget_Base' ) ) { return; }

class Nexora_Elementor_Categories_Showcase extends \Elementor\Widget_Base {
    public function get_name() { return 'nexora_categories_showcase'; }
    public function get_title() { return esc_html__( 'Luxury Categories Showcase', 'nexora-mall' ); }
    public function get_icon() { return 'eicon-gallery-grid'; }
    public function get_categories() { return array( 'nexora-luxury' ); }

    protected function render() {
        ?>
        <div class="categories-grid">
        </div>
    }
}