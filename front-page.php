<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home/hero.webp" class="img-fluid w-100" alt="Hero Image">
                            <div class="hero-text d-none d-md-block">
                                <h1>Nederlands</h1>
                                <p>Nederlands text</p>
                                <a href="#" class="btn btn-primary">cta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <div class="hero-text-mobile text-center">
                            <h1>Nederlands</h1>
                            <p>Nederlands text</p>
                            <a href="#" class="btn btn-primary">cta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Categories Section -->
        <section class="categories-section">
            <div class="container">
                <h2 class="section-title">Ontdenk onze collecties</h2>
                <div class="row">
                    <?php
                    $product_categories = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        'parent' => 0, // No mostrar subcategorías
                        'exclude' => array(get_option('default_product_cat')), // Excluir la categoría "uncategorized"
                    ) );

                    if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
                        $category_count = count( $product_categories );
                        foreach ( $product_categories as $category ) {
                            $category_slug = $category->slug;
                            $category_link = get_term_link( $category );
                            $category_name = $category->name;
                            $category_image_url = get_template_directory_uri() . '/images/category/' . $category_slug . '.webp';
                            ?>
                            <div class="<?php echo $category_count <= 4 ? 'col-md-3 col-sm-6' : 'col-md-4 col-sm-6'; ?>">
                                <a href="<?php echo esc_url( $category_link ); ?>" class="category-link">
                                    <div class="category-card">
                                        <img src="<?php echo esc_url( $category_image_url ); ?>" class="img-fluid" alt="<?php echo esc_attr( $category_name ); ?>">
                                        <p class="category-title"><?php echo esc_html( $category_name ); ?> →</p>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="text-center mt-4">
                    <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="btn btn-primary">Alles bekijken</a>
                </div>
            </div>
        </section>

        <!--featured category-->
         <!-- Featured Collection Section -->
         <section class="featured-collection-section">
            <div class="container">
                <h2 class="section-title">Hapjes voor bij de borrel</h2>
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-6 col-md-2">
                        <div class="product-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/product1.jpg" class="img-fluid" alt="Product 1">
                            <p class="product-title">CHUPADEDOS OLIJVEN</p>
                            <p class="product-price">€5,45 EUR</p>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-6 col-md-2">
                        <div class="product-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/product2.jpg" class="img-fluid" alt="Product 2">
                            <p class="product-title">OLIJF PASTEI</p>
                            <p class="product-price">€7,65 EUR</p>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="col-6 col-md-2">
                        <div class="product-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/product3.jpg" class="img-fluid" alt="Product 3">
                            <p class="product-title">PEPER EN PROVENCAALSE KRUIDEN REGAÑAS</p>
                            <p class="product-price">€3,55 EUR</p>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="col-6 col-md-2">
                        <div class="product-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/product4.jpg" class="img-fluid" alt="Product 4">
                            <p class="product-title">GOLDEN GORDAL GEPITTE OLIJVEN</p>
                            <p class="product-price">€6,55 EUR</p>
                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="col-6 col-md-2">
                        <div class="product-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/product5.jpg" class="img-fluid" alt="Product 5">
                            <p class="product-title">GEDROOGDE TOMATENPASTE</p>
                            <p class="product-price">€7,65 EUR</p>
                        </div>
                    </div>
                    <!-- Product 6 (hidden on mobile) -->
                    <div class="col-6 col-md-2 d-none d-md-block">
                        <div class="product-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/product6.jpg" class="img-fluid" alt="Product 6">
                            <p class="product-title">KNOFLOOK EN TIJM REGAÑAS</p>
                            <p class="product-price">€3,55 EUR</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary">Bekijk alles</a>
                </div>
            </div>
        </section>

        <!--Testimonios-->
        <section class="testimonials-section">
            <div class="container">
                <h2 class="section-title">Lo que dicen nuestros clientes</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <p class="testimonial-text">"Producto increíble, calidad excepcional."</p>
                            <p class="testimonial-author">- Cliente 1</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <p class="testimonial-text">"La mejor tienda online, entrega rápida."</p>
                            <p class="testimonial-author">- Cliente 2</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <p class="testimonial-text">"Servicio al cliente excelente, muy satisfecho."</p>
                            <p class="testimonial-author">- Cliente 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter-section">
            <div class="container">
                <h2 class="section-title">Suscríbete a nuestra Newsletter</h2>
                <?php if ( isset( $_GET['subscription'] ) ): ?>
                    <div class="container">
                        <?php if ( $_GET['subscription'] == 'exists' ): ?>
                            <div class="alert alert-warning" role="alert">
                                Este email ya está suscrito.
                            </div>
                        <?php elseif ( $_GET['subscription'] == 'success' ): ?>
                            <div class="alert alert-success" role="alert">
                                Suscripción exitosa.
                            </div>
                        <?php elseif ( $_GET['subscription'] == 'error' ): ?>
                            <div class="alert alert-danger" role="alert">
                                Hubo un error en la suscripción. Por favor, intenta nuevamente.
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <form class="newsletter-form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" id="optin" name="optin" class="form-check-input" required>
                        <label for="optin" class="form-check-label">Acepto recibir comunicaciones por email</label>
                    </div>
                    <input type="hidden" name="action" value="newsletter_subscription">
                    <button type="submit" class="btn btn-primary">Suscribirse</button>
                </form>
            </div>
        </section>





    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
