<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            if ( has_custom_logo() ) :
                the_custom_logo();
            else :
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                </a>
                <?php
            endif;
            ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php esc_html_e( 'Primary Menu', 'bressol-nl' ); ?>
            </button>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
