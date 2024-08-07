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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-3">
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
                </div>
                <div class="col-6 d-md-none text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'bressol-nl' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-md-9">
                    <nav id="site-navigation" class="main-navigation navbar navbar-expand-md">
                        <div class="collapse navbar-collapse" id="primary-menu">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container'      => false,
                                'menu_class'     => 'navbar-nav ml-auto',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                        </div>
                        <ul class="navbar-nav ml-auto d-none d-md-flex">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i></a>
                            </li>
                        </ul>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        </div>
        <ul class="navbar-nav ml-auto d-md-none text-center">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i></a>
            </li>
        </ul>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
