<?php
/**
 * Template Name: Cart Page
 *
 * @package bressol.nl
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="cart py-5">
            <div class="container">
                <h1 class="display-4">Cart</h1>
                <?php echo do_shortcode('[woocommerce_cart]'); ?>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
