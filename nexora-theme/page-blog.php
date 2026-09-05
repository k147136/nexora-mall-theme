<?php
/**
 * Template Name: Blog Editorial Page
 *
 * @package Nexora_Mall
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Banner -->
    <section class="page-hero" style="background-color: var(--color-charcoal-dark); padding: 4.5rem 0; border-bottom: 1px solid rgba(212,168,67,0.25); text-align: center;">
        <div class="container">
            <span class="badge badge-gold" style="margin-bottom: 0.75rem; display: inline-block;"><?php esc_html_e( 'The Nexora Gazette', 'nexora-mall' ); ?></span>
            <h1 class="page-title" style="color: #ffffff; font-size: 2.75rem; margin-bottom: 0.75rem;"><?php esc_html_e( 'Editorial & Luxury Insights', 'nexora-mall' ); ?></h1>
            <p style="color: #c0c0c0; max-width: 680px; margin: 0 auto; font-size: 1.05rem;">
                <?php esc_html_e( 'Curated essays, master craft interviews, and high-fashion styling notes from our international atelier correspondents.', 'nexora-mall' ); ?>
            </p>
        </div>
    </section>

    <!-- Blog Articles Grid -->
    <section class="section-padding" style="background-color: var(--bg-primary);">
        <div class="container">
            <!-- Single Unified Box Container for 3 Items -->
            <div class="blog-box-container">
                <div class="blog-grid">
                    <?php
                    $nexora_blog_items = array(
                        array(
                            'title'    => 'The Art of Haute Horlogerie: Inside Swiss Watchmaking Masters',
                            'category' => 'Horology & Craft',
                            'img'      => 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85',
                        ),
                        array(
                            'title'    => 'Modern Minimalism: Crafting Luxurious & Serene Living Sanctuaries',
                            'category' => 'Interior Architecture',
                            'img'      => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=85',
                        ),
                        array(
                            'title'    => 'Autumn/Winter Haute Couture: The Revival of Structured Velvet',
                            'category' => 'Fashion & Style',
                            'img'      => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=85',
                        ),
                    );

                    foreach ( $nexora_blog_items as $p_idx => $p_data ) :
                    ?>
                    <article class="blog-card reveal-on-scroll delay-<?php echo esc_attr( $p_idx + 1 ); ?>">
                        <a href="#article-<?php echo esc_attr( $p_idx + 1 ); ?>" class="blog-card-link">
                            <div class="blog-img-wrap">
                                <img src="<?php echo esc_url( $p_data['img'] ); ?>" alt="<?php echo esc_attr( $p_data['title'] ); ?>" class="blog-img" loading="lazy">
                            </div>
                            <h3 class="blog-title"><?php echo esc_html( $p_data['title'] ); ?></h3>
                        </a>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
