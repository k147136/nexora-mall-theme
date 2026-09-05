<?php
/**
 * Main Index / Blog Loop Template
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main section-padding">
    <div class="container">
        <header style="margin-bottom: 3rem;">
            <span class="section-tag"><?php esc_html_e( 'Editorial & Journals', 'nexora-mall' ); ?></span>
            <h1 class="section-title"><?php esc_html_e( 'The Luxury Lifestyle Gazette', 'nexora-mall' ); ?></h1>
        </header>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'product-card' ); ?> style="padding: 1.5rem;">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin-bottom: 1rem; border-radius: var(--radius-xs); overflow: hidden;">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>
                        <span style="font-size: 0.75rem; color: var(--color-gold); font-weight:700; text-transform:uppercase;"><?php echo get_the_date(); ?></span>
                        <h2 style="font-size: 1.25rem; margin: 0.35rem 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p style="font-size: 0.875rem; color: var(--text-secondary);"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="link-arrow" style="margin-top: 1rem;"><?php esc_html_e( 'Read Article', 'nexora-mall' ); ?> &rarr;</a>
                    </article>
                    <?php
                endwhile;
            else :
                echo '<p>' . esc_html__( 'No posts found.', 'nexora-mall' ) . '</p>';
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
