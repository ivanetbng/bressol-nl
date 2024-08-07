<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            global $product;
            $product_slug = $product->get_slug();
            $product_image_url = get_template_directory_uri() . '/images/products/' . $product_slug . '.png';
        ?>
        <section class="product-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-image">
                            <img src="<?php echo esc_url( $product_image_url ); ?>" class="img-fluid" alt="<?php echo esc_attr( $product->get_name() ); ?>">
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
                            <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                <button type="submit" class="btn btn-primary btn-add-to-cart"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                            </form>
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
