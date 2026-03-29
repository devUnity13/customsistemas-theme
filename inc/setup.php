<?php
/**
 * inc/setup.php
 * Configurações e suporte do tema WordPress.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'custom_theme_setup' );

function custom_theme_setup() {

    load_theme_textdomain( 'custom-sistemas', CUSTOM_THEME_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ] );

    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );

    register_nav_menus( [
        'primary'  => __( 'Menu Principal', 'custom-sistemas' ),
        'footer'   => __( 'Menu Rodapé', 'custom-sistemas' ),
        'solucoes' => __( 'Menu Soluções (Mega Menu)', 'custom-sistemas' ),
    ] );
}

// ── Sidebars do rodapé ────────────────────────────────────────────────────────
add_action( 'widgets_init', 'custom_theme_widgets_init' );

function custom_theme_widgets_init() {
    $shared = [
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ];

    register_sidebar( array_merge( $shared, [
        'name' => __( 'Rodapé — Soluções', 'custom-sistemas' ),
        'id'   => 'footer-col-1',
    ] ) );

    register_sidebar( array_merge( $shared, [
        'name' => __( 'Rodapé — Institucional', 'custom-sistemas' ),
        'id'   => 'footer-col-2',
    ] ) );

    register_sidebar( array_merge( $shared, [
        'name' => __( 'Rodapé — Contato', 'custom-sistemas' ),
        'id'   => 'footer-col-3',
    ] ) );
}
