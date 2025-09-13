<?php
// Query parent categories of product_category taxonomy
$parent_categories = get_terms([
    'taxonomy'   => 'product_category',
    'hide_empty' => false,
    'parent'     => 0, // Only fetch parent categories
]);
?>
<!-- Products Section -->
<section id="products" class="products-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Products</h2>
            <p class="section-subtitle">Advanced bolting solutions engineered for precision and reliability</p>
        </div>
        
        <div class="products-grid">
            <?php foreach ($parent_categories as $category): ?>
                <?php
                $image_id = get_term_meta($category->term_id, 'image', true);
                $image_url = wp_get_attachment_url($image_id);

                // Use external placeholder if no image is set
                if (empty($image_url)) {
                    $image_url = 'https://placehold.co/300x180?text=' . urlencode($category->name);
                }
                ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                        <div class="product-overlay">
                            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="product-link">View Details</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><?php echo esc_html($category->name); ?></h3>
                        <p class="product-description"><?php echo esc_html($category->description); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="products-cta">
            <a href="<?php echo esc_url(get_post_type_archive_link('products')); ?>" class="cta-button">View All Products</a>
        </div>
    </div>
</section>