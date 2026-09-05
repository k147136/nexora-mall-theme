<?php
/**
 * One Click Demo Import Integration
 *
 * @package Nexora_Mall
 */

function nexora_import_files() {
    return array(
        array(
            'import_file_name'             => 'Nexora Luxury Mall Demo',
            'categories'                   => array( 'E-Commerce', 'Luxury', 'Marketplace' ),
            'local_import_file'            => NEXORA_DIR . '/demo-data/content.xml',
            'local_import_widget_file'     => NEXORA_DIR . '/demo-data/widgets.wie',
            'local_import_customizer_file' => NEXORA_DIR . '/demo-data/customizer.dat',
            'import_preview_image_url'     => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=600&q=80',
            'import_notice'                => __( 'After you import this demo, make sure to set your Home Page in Settings > Reading.', 'nexora-mall' ),
            'preview_url'                  => 'https://nexoramall.com',
        ),
    );
}
add_filter( 'ocdi/import_files', 'nexora_import_files' );
