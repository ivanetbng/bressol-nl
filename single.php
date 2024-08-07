<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bressol.nl
 */

get_header();
$lang = isset($_COOKIE['site_language']) ? $_COOKIE['site_language'] : 'en';
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();
        // Lógica de idioma personalizada aquí
        if ($lang == 'nl') {
            $product_name = get_post_meta(get_the_ID(), 'product_name_nl', true);
            $product_description = get_post_meta(get_the_ID(), 'product_description_nl', true);
        } else if ($lang == 'es') {
            $product_name = get_the_title(); // Usar el título predeterminado en español
            $product_description = get_the_content(); // Usar el contenido predeterminado en español
        } else {
            $product_name = get_post_meta(get_the_ID(), 'product_name_en', true);
            $product_description = get_post_meta(get_the_ID(), 'product_description_en', true);
        }

        // Mostrar el contenido traducido
        echo '<h1>' . esc_html($product_name) . '</h1>';
        echo '<p>' . esc_html($product_description) . '</p>';

        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'bressol-nl') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'bressol-nl') . '</span> <span class="nav-title">%title</span>',
            )
        );

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
