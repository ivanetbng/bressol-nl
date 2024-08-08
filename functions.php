<?php
/**
 * bressol.nl functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bressol.nl
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function bressol_nl_setup() {
    load_theme_textdomain( 'bressol-nl', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'bressol-nl' ),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support(
        'custom-background',
        apply_filters(
            'bressol_nl_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'bressol_nl_setup' );

function bressol_nl_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'bressol_nl_content_width', 640 );
}
add_action( 'after_setup_theme', 'bressol_nl_content_width', 0 );

function bressol_nl_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'bressol-nl' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'bressol-nl' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'bressol_nl_widgets_init' );

function bressol_nl_scripts() {
    wp_enqueue_style( 'bressol-nl-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'bressol-nl-style', 'rtl', 'replace' );

    wp_enqueue_script( 'bressol-nl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bressol_nl_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//Cargar el archivo css compilado
function bressol_nl_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css', array(), _S_VERSION );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bressol-nl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bressol_nl_enqueue_scripts' );

// Función para manejar la suscripción a la newsletter
function handle_newsletter_subscription() {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['optin'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);

        // Validar que el email no exista ya en la base de datos
        global $wpdb;
        $table_name = $wpdb->prefix . 'contactos';
        $email_exists = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM $table_name WHERE email = %s",
            $email
        ));

        if ($email_exists) {
            wp_redirect(home_url() . '?subscription=exists');
            exit;
        }

        // Insertar datos en la base de datos de manera segura
        $inserted = $wpdb->insert(
            $table_name,
            array(
                'name'         => $name,
                'email'        => $email,
                'double_optin' => 0, // Inicialmente no confirmado
                // Aquí se pueden agregar más datos en el futuro
            ),
            array(
                '%s',
                '%s',
                '%d',
                // Aquí se deben agregar los formatos de datos adicionales
            )
        );

        if ($inserted) {
            wp_redirect(home_url() . '?subscription=success');
        } else {
            wp_redirect(home_url() . '?subscription=error');
        }
        exit;
    }
}
add_action('admin_post_newsletter_subscription', 'handle_newsletter_subscription');
add_action('admin_post_nopriv_newsletter_subscription', 'handle_newsletter_subscription');

// Función para crear la tabla personalizada
function create_contacts_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contactos';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20),
        country varchar(50),
        prefix varchar(5),
        language varchar(20),
        address text,
        type varchar(20),
        company_name varchar(100),
        job_title varchar(100),
        birthday date,
        interests text,
        double_optin boolean DEFAULT FALSE,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_setup_theme', 'create_contacts_table');

// Forzar a WooCommerce a usar plantillas del tema personalizado.
function bressol_nl_woocommerce_template( $template, $template_name, $template_path ) {
    $custom_template = get_stylesheet_directory() . '/woocommerce/' . $template_name;

    if ( file_exists( $custom_template ) ) {
        return $custom_template;
    }

    return $template;
}
add_filter( 'woocommerce_locate_template', 'bressol_nl_woocommerce_template', 10, 3 );
