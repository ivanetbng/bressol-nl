<?php
/**
 * The template for displaying the front page
 *
 * @package bressol.nl
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="hero bg-light py-5">
            <div class="container">
                <h1 class="display-4">Welcome to Bressol.nl</h1>
                <p class="lead">This is your front page. Customize it to make it your own.</p>
            </div>
        </section>

        <section class="features py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Feature One</h5>
                                <p class="card-text">Description for feature one.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Feature Two</h5>
                                <p class="card-text">Description for feature two.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Feature Three</h5>
                                <p class="card-text">Description for feature three.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
