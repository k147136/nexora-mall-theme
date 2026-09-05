<?php
/**
 * Default Page Template
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main section-padding">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="margin-bottom: 2rem;">
                    <h1 class="entry-title section-title"><?php the_title(); ?></h1>
                </header>

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
</main>

<?php
get_footer();
