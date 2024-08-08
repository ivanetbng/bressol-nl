<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

echo '<div class="container">'; // Abrir contenedor Bootstrap

// Título de la página
echo '<div class="row">';
echo '<div class="col-12">';
do_action( 'woocommerce_shop_loop_header' );
echo '</div>';
echo '</div>'; // Cerrar row para el título

if ( woocommerce_product_loop() ) {

    // Número de resultados y filtros
    echo '<div class="row">';
    echo '<div class="col-12">';
    do_action( 'woocommerce_before_shop_loop' );
    echo '</div>';
    echo '</div>'; // Cerrar row para resultados y filtros

    // Productos
    echo '<div class="row">';
    woocommerce_product_loop_start();

    if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
            the_post();
            do_action( 'woocommerce_shop_loop' );
            wc_get_template_part( 'content', 'product' );
        }
    }

    woocommerce_product_loop_end();
    echo '</div>'; // Cerrar row para productos

    do_action( 'woocommerce_after_shop_loop' );
} else {
    do_action( 'woocommerce_no_products_found' );
}

do_action( 'woocommerce_after_main_content' );
do_action( 'woocommerce_sidebar' );

echo '</div>'; // Cerrar contenedor Bootstrap

get_footer( 'shop' );
