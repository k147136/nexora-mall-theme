<?php
/**
 * Default Page Template
 *
 * @package Nexora_Mall
 */

get_header();

$is_elementor = false;
if ( isset( $_GET['elementor-preview'] ) || ( isset( $_GET['action'] ) && $_GET['action'] === 'elementor' ) ) {
    $is_elementor = true;
}
if ( class_exists( '\Elementor\Plugin' ) ) {
    if ( \Elementor\Plugin::$instance->preview->is_preview_mode() || \Elementor\Plugin::$instance->editor->is_edit_mode() || \Elementor\Plugin::$instance->db->is_built_with_elementor( get_the_ID() ) ) {
        $is_elementor = true;
    }
}

if ( $is_elementor ) :
?>
<main id="primary" class="site-main nexora-elementor-canvas">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>
<?php else : ?>
<main id="primary" class="site-main">
    <!-- Luxury Page Hero Banner -->
    <section style="background-color: var(--color-charcoal-dark); color: #fff; padding: 3.25rem 0; border-bottom: 1px solid rgba(212,168,67,0.3);">
        <div class="container">
            <div style="font-size: 0.8125rem; color: #aaa; margin-bottom: 0.5rem;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: var(--color-gold); text-decoration: none;"><?php esc_html_e( 'Home', 'nexora-mall' ); ?></a> / 
                <span style="color: #fff;"><?php the_title(); ?></span>
            </div>
            <h1 style="font-size: 2.75rem; color: #ffffff; font-family: var(--font-heading); margin-bottom: 0.5rem; line-height: 1.2;"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content" style="line-height: 1.8; color: var(--text-secondary);">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nexora-mall' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>
                </article>
                <?php
            endwhile;
            ?>
        </div>
    </section>
</main>
<?php endif; ?>

<?php
get_footer();
