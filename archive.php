<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bressol.nl
 */

get_header();
$lang = isset($_COOKIE['site_language']) ? $_COOKIE['site_language'] : 'en';
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header><!-- .page-header -->

        <?php
        while (have_posts()) :
            the_post();
            if ($lang == 'nl') {
                $category_name = get_post_meta(get_the_ID(), 'category_name_dutch', true);
                $category_description = get_post_meta(get_the_ID(), 'category_description_dutch', true);
            } elseif ($lang == 'es') {
                $category_name = get_the_title();
                $category_description = get_the_content();
            } else {
                $category_name = get_post_meta(get_the_ID(), 'category_name_english', true);
                $category_description = get_post_meta(get_the_ID(), 'category_description_english', true);
            }

            echo '<h1>' . esc_html($category_name) . '</h1>';
            echo '<p>' . esc_html($category_description) . '</p>';

            // Include the Post-Type-specific template for the content.
            get_template_part('template-parts/content', get_post_type());

        endwhile;

        the_posts_navigation();

    else :

        get_template_part('template-parts/content', 'none');

    endif;
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
