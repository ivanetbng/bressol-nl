<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bressol-nl' ) ); ?>">
            <?php printf( esc_html__( 'Proudly powered by %s', 'bressol-nl' ), 'WordPress' ); ?>
        </a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bressol-nl' ), 'bressol-nl', '<a href="https://developer.wordpress.org/" rel="designer">WordPress.org</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
