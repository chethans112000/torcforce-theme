<?php
/**
 * Product Category archive template
 */
get_header();
?>

<main class="site-main">
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2><?php single_term_title(); ?></h2>
                <?php if ( term_description() ) : ?>
                    <p><?php echo term_description(); ?></p>
                <?php endif; ?>
            </div>

            <?php if ( have_posts() ) : ?>
                <div class="products-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="card-holder">
                        <article <?php post_class('product-card'); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('medium_large', array('class' => 'product-thumb')); ?></a>
                            <?php else : ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    <img src="<?php echo esc_url( 'https://placehold.co/300x180?text=' . rawurlencode( get_the_title() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="product-thumb">
                                </a>
                            <?php endif; ?>
                            <div class="product-card-body">
                                <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                <p class="product-desc"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                                <p><a href="<?php echo esc_url( get_permalink() ); ?>" class="view-all">View Details</a></p>
                            </div>
                        </article>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="pagination">
                    <?php the_posts_pagination(); ?>
                </div>

            <?php else : ?>
                <p><?php _e('No products found in this category.', 'sps-theme'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
