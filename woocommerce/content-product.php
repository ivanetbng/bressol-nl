<?php
defined( 'ABSPATH' ) || exit;

global $product;

$product_slug = $product->get_slug();
$product_image_url = get_template_directory_uri() . '/images/products/' . $product_slug . '.png';
?>

<li <?php wc_product_class( 'col-md-4 mb-4' ); ?>>
    <div class="card h-100">
        <?php
        do_action( 'woocommerce_before_shop_loop_item' );

        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

        echo '<a href="' . esc_url( get_permalink() ) . '">';
        echo '<img src="' . esc_url( $product_image_url ) . '" alt="' . esc_attr( $product->get_name() ) . '" class="card-img-top" />';
        echo '</a>';
        ?>
        <div class="card-body">
            <?php
            do_action( 'woocommerce_shop_loop_item_title' );
            do_action( 'woocommerce_after_shop_loop_item_title' );
            ?>
        </div>
        <div class="card-footer text-center">
            <?php
            // Remove the default WooCommerce add to cart action
            remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

            // Custom Add to Cart Button
            echo '<a href="' . esc_url( $product->add_to_cart_url() ) . '" class="btn btn-primary custom-add-to-cart">';
            echo esc_html( $product->add_to_cart_text() );
            echo '</a>';

            do_action( 'woocommerce_after_shop_loop_item' );
            ?>
        </div>
    </div>
</li>
