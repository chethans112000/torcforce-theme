<?php
get_header();
?>

<!-- Products Archive Page -->
<section id="products" class="products-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Products</h2>
            <p class="section-subtitle">Explore our range of advanced bolting solutions</p>
        </div>

        <div class="products-grid">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="product-card">
                        <div class="product-image">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium', ['class' => 'product-thumbnail']); ?>
                            <?php else: ?>
                                <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image" class="product-thumbnail">
                            <?php endif; ?>
                            <div class="product-overlay">
                                <a href="<?php the_permalink(); ?>" class="product-link">View Details</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><?php the_title(); ?></h3>
                            <p class="product-description"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>
        </div>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
