<?php
/**
 * WooCommerce Global Layout Wrapper
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main section-padding">
    <div class="container">
        <?php woocommerce_content(); ?>
    </div>
</main>

<?php
get_footer();
