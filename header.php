<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead" class="site-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/marca/logo-name.png" alt="Bressol Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav mx-auto',
                        'walker'         => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>
                <div class="navbar-icons">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                    <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                    <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i></a>
                </div>
            </nav>
        </div>
    </header>
    <div id="content" class="site-content">
