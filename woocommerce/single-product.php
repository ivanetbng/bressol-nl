<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            global $product;
        ?>
        <section class="product-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title"><?php the_title(); ?></h1>
                            <p class="product-price"><?php echo $product->get_price_html(); ?></p>
                            <div class="product-description">
                                <?php the_content(); ?>
                            </div>
                            <div class="product-quantity">
                                <?php woocommerce_quantity_input(); ?>
                            </div>
                            <button type="button" class="btn btn-primary btn-add-to-cart"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
