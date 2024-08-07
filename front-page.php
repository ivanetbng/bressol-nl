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
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
