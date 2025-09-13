<?php

/**
 * Single Product Template
 */

get_header(); ?>

<main class="main-content" style="margin-top: 80px;">
    <?php while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="product-single">
                <div class="product-header section">
                    <div class="product-title-area">
                        <h1 class="product-title"><?php the_title(); ?></h1>
                        <?php if (has_excerpt()) : ?>
                            <p class="product-excerpt"><?php the_excerpt(); ?></p>
                        <?php endif; ?>
                    </div>


                </div>

                <div class="product-content section">
                    <div class="product-grid">
                        <div class="product-description">
                           
                            <h2>Product Description</h2>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </div>

                         <div class="product-details">
                    
                         <?php if (has_post_thumbnail()) : ?>
                                <div class="product-image">
                                    <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
                                </div>
                          <?php else : ?>
                                   <div class="product-image">
                                        <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image" class="product-thumbnail img-responsive">
                                </div>
                                <?php endif; ?>
                        <div class="product-contact">
                            <h3>Interested in this product?</h3>
                            <p>Contact us for more information, pricing, or to request a quote.</p>
                            <a href="/#contact" class="cta-button">Contact Us</a>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    <?php endwhile; ?>
</main>

<style>
/* Single Product Page Styles */
.main-content {
    background-color: #0d0d0d;
    min-height: 100vh;
}

.product-single {
    background-color: #0d0d0d;
    color: #ccc;
}

.product-header {
    background-color: #1a1a1a;
    padding: 4rem 0;
    border-bottom: 1px solid #333;
}

.product-title-area {
    text-align: center;
    margin-bottom: 2rem;
}

.product-title {
    font-size: 3rem;
    color: #ffd700;
    margin-bottom: 1.5rem;
    font-weight: bold;
    letter-spacing: 0.05em;
}

.product-excerpt {
    font-size: 1.25rem;
    color: #ccc;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.7;
}

.product-content {
    padding: 4rem 0;
}

.product-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 4rem;
    align-items: start;
}

.product-description {
    background-color: #1a1a1a;
    border: 1px solid #333;
    border-radius: 0.75rem;
    padding: 2.5rem;
}

.product-description h2 {
    color: #ffd700;
    margin-bottom: 1.5rem;
    font-size: 2rem;
    font-weight: 600;
    border-bottom: 2px solid #333;
    padding-bottom: 1rem;
}

.product-description .content {
    color: #ccc;
    font-size: 1rem;
    line-height: 1.8;
}

.product-description .content p {
    margin-bottom: 1.5rem;
}

.product-description .content h3,
.product-description .content h4 {
    color: #ffd700;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.product-description .content ul,
.product-description .content ol {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.product-description .content li {
    margin-bottom: 0.5rem;
    color: #ccc;
}

.product-details {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.product-image {
    text-align: center;
    background-color: #1a1a1a;
    border: 1px solid #333;
    border-radius: 0.75rem;
    padding: 1.5rem;
}

.product-image img {
    max-width: 100%;
    height: auto;
    border-radius: 0.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.product-image img:hover {
    transform: scale(1.05);
}

.product-contact {
    background: linear-gradient(135deg, #ffd700, #e6c200);
    color: #0d0d0d;
    padding: 2.5rem;
    border-radius: 0.75rem;
    text-align: center;
    box-shadow: 0 10px 25px rgba(255, 215, 0, 0.2);
}

.product-contact h3 {
    color: #0d0d0d;
    margin-bottom: 1rem;
    font-size: 1.5rem;
    font-weight: 600;
}

.product-contact p {
    color: rgba(13, 13, 13, 0.8);
    margin-bottom: 1.5rem;
    font-size: 1rem;
    line-height: 1.6;
}

.product-contact .cta-button {
    background-color: #0d0d0d;
    color: #ffd700;
    border: 2px solid #0d0d0d;
    font-weight: 600;
    font-size: 1rem;
    padding: 1rem 2.5rem;
    border-radius: 0.5rem;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.product-contact .cta-button:hover {
    background-color: transparent;
    color: #0d0d0d;
    border-color: #0d0d0d;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .product-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
    }
    
    .product-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .product-header {
        padding: 2.5rem 0;
    }
    
    .product-title {
        font-size: 2rem;
    }
    
    .product-excerpt {
        font-size: 1.1rem;
    }
    
    .product-content {
        padding: 2.5rem 0;
    }
    
    .product-grid {
        gap: 2rem;
    }
    
    .product-description {
        padding: 2rem;
    }
    
    .product-description h2 {
        font-size: 1.75rem;
    }
    
    .product-contact {
        padding: 2rem;
    }
    
    .product-contact h3 {
        font-size: 1.25rem;
    }
}

@media (max-width: 480px) {
    .product-title {
        font-size: 1.75rem;
    }
    
    .product-description {
        padding: 1.5rem;
    }
    
    .product-contact {
        padding: 1.5rem;
    }
    
    .product-contact .cta-button {
        padding: 0.875rem 2rem;
        font-size: 0.9rem;
    }
}
</style>

<?php get_footer(); ?>