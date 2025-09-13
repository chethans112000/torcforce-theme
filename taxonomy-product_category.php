<?php

/**
 * Product Category archive template
 */
get_header();
?>

<style>
    .product-name {
        font-size: 18px;
        font-weight: 600;
        color: #fff;
        text-align: start;
    }

    .product-name a {
        text-decoration: none;
        color: inherit;
        transition: color 0.3s ease;
    }

    .product-name a:hover {
        color: #0073e6;
    }
</style>

<main class="site-main">
    <section class="section products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php single_term_title(); ?></h2>
                <?php if (term_description()) : ?>
                    <p class="section-subtitle"><?php echo term_description(); ?></p>
                <?php endif; ?>
            </div>

            <?php if (have_posts()) : ?>
                <div class="products-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="card-holder">
                            <article <?php post_class('product-card'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'product-thumbnail']); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                        <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image" class="product-thumbnail">
                                    </a>
                                <?php endif; ?>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="product-link">View Details</a>
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