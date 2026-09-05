<?php
/**
 * Main Index Template
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main nexora-elementor-canvas">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();
