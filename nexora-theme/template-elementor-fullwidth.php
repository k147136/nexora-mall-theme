<?php
/**
 * Template Name: Elementor Full Width
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main nexora-elementor-canvas">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
