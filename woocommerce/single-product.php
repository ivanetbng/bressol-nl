<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<div id="primary" class="content-area">
    single-product.php
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            wc_get_template_part( 'content', 'single-product' );
        endwhile;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer( 'shop' );
