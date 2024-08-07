<footer id="colophon" class="site-footer bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="site-info">
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bressol-nl' ) ); ?>" class="text-white">
                        <?php
                        printf( esc_html__( 'Proudly powered by %s', 'bressol-nl' ), 'WordPress' );
                        ?>
                    </a>
                    <span class="sep"> | </span>
                    <?php
                    printf( esc_html__( 'Theme: %1$s by %2$s.', 'bressol-nl' ), 'bressol-nl', '<a href="http://underscores.me/" class="text-white">Underscores.me</a>' );
                    ?>
                </div><!-- .site-info -->
            </div>
            <div class="col-md-6 text-md-end">
                <nav class="footer-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'nav justify-content-end',
                        'container'      => false,
                        'depth'          => 1,
                        'walker'         => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </nav>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
