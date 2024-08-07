<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
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
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-link">
                            <div class="category-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/categories/category1.jpg" class="img-fluid" alt="Valencianse Delicatessen">
                                <p class="category-title">Valencianse Delicatessen →</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-link">
                            <div class="category-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/categories/category2.jpg" class="img-fluid" alt="Dranken">
                                <p class="category-title">Dranken →</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-link">
                            <div class="category-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/categories/category3.jpg" class="img-fluid" alt="Oli en smaakmakers">
                                <p class="category-title">Oli en smaakmakers →</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-link">
                            <div class="category-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/categories/category4.jpg" class="img-fluid" alt="Zoetigheden en honing">
                                <p class="category-title">Zoetigheden en honing →</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary">Alles bekijken</a>
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

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
