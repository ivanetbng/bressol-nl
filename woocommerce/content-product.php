<?php
defined( 'ABSPATH' ) || exit;

global $product;

$product_slug = $product->get_slug();
$product_image_url = get_template_directory_uri() . '/images/products/' . $product_slug . '.png';
?>

<li <?php wc_product_class( 'col-md-4 mb-4' ); ?>>
    <div class="card h-100">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        do_action( 'woocommerce_before_shop_loop_item' );

        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * Removemos los hooks que muestran la imagen predeterminada y el flash de venta.
         */
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

        // Mostrar la imagen personalizada
        echo '<a href="' . esc_url( get_permalink() ) . '">';
        echo '<img src="' . esc_url( $product_image_url ) . '" alt="' . esc_attr( $product->get_name() ) . '" class="card-img-top" />';
        echo '</a>';
        ?>
        <div class="card-body">
            <?php
            /**
             * Hook: woocommerce_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_product_title - 10
             */
            do_action( 'woocommerce_shop_loop_item_title' );

            /**
             * Hook: woocommerce_after_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_rating - 5
             * @hooked woocommerce_template_loop_price - 10
             */
            do_action( 'woocommerce_after_shop_loop_item_title' );
            ?>
        </div>
        <div class="card-footer text-center">
            <?php
            /**
             * Hook: woocommerce_after_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_product_link_close - 5
             * @hooked woocommerce_template_loop_add_to_cart - 10
             */
            do_action( 'woocommerce_after_shop_loop_item' );
            ?>
        </div>
    </div>
</li>
