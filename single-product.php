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
    .product-single {
        background: white;
    }

    .product-header {
        background: var(--light-gray);
        padding: 60px 0;
    }

    .product-title-area {
        text-align: center;
        margin-bottom: 20px;
    }

    .product-title {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    .product-excerpt {
        font-size: 1.2rem;
        color: var(--text-gray);
        max-width: 600px;
        margin: 0 auto;
    }

    .product-image {
        text-align: center;
    }

    .product-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .product-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 50px;
    }

    .product-description h2,
    .product-details h3 {
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .product-meta-section {
        background: var(--light-gray);
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .product-meta-section h3 {
        color: var(--primary-color);
        margin-bottom: 15px;
        font-size: 1.2rem;
    }

    .product-contact {
        background: var(--primary-color);
        color: white;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }

    .product-contact h3 {
        color: white;
        margin-bottom: 15px;
    }

    .product-contact p {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .product-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .product-title {
            font-size: 2rem;
        }
		
		.product-header {
			background: var(--light-gray);
			padding: 20px 0;
		}

		.product-title-area {
			margin-bottom: 10px;
		}
    }
</style>

<?php get_footer(); ?>