<?php
/**
 * inc/customizer.php
 * Opções do tema no Personalizador do WordPress.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'customize_register', 'custom_theme_customizer' );

function custom_theme_customizer( WP_Customize_Manager $wp_customize ) {

    // ── Seção: Identidade Social ──────────────────────────────────────────────
    $wp_customize->add_section( 'custom_social', [
        'title'    => __( 'Redes Sociais', 'custom-sistemas' ),
        'priority' => 120,
    ] );

    $social_links = [
        'linkedin'  => 'LinkedIn URL',
        'instagram' => 'Instagram URL',
        'youtube'   => 'YouTube URL',
        'facebook'  => 'Facebook URL',
    ];

    foreach ( $social_links as $key => $label ) {
        $wp_customize->add_setting( 'social_' . $key, [ 'default' => '#', 'sanitize_callback' => 'esc_url_raw' ] );
        $wp_customize->add_control( 'social_' . $key, [
            'label'   => $label,
            'section' => 'custom_social',
            'type'    => 'url',
        ] );
    }

    // ── Seção: Footer ─────────────────────────────────────────────────────────
    $wp_customize->add_section( 'custom_footer', [
        'title'    => __( 'Rodapé', 'custom-sistemas' ),
        'priority' => 130,
    ] );

    $wp_customize->add_setting( 'footer_copyright', [
        'default'           => '© 2025 Custom Sistemas. Todos os direitos reservados.',
        'sanitize_callback' => 'wp_kses_post',
    ] );
    $wp_customize->add_control( 'footer_copyright', [
        'label'   => __( 'Texto de Copyright', 'custom-sistemas' ),
        'section' => 'custom_footer',
        'type'    => 'text',
    ] );

    // ── Seção: Newsletter ─────────────────────────────────────────────────────
    $wp_customize->add_section( 'custom_newsletter', [
        'title'    => __( 'Newsletter', 'custom-sistemas' ),
        'priority' => 125,
    ] );

    $wp_customize->add_setting( 'newsletter_title', [
        'default'           => 'Receba conteúdos sobre gestão pública',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'newsletter_title', [
        'label'   => __( 'Título da Newsletter', 'custom-sistemas' ),
        'section' => 'custom_newsletter',
        'type'    => 'text',
    ] );

    $wp_customize->add_setting( 'newsletter_desc', [
        'default'           => 'Insights, novidades e tecnologia direto no seu e-mail. Sem spam.',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'newsletter_desc', [
        'label'   => __( 'Descrição da Newsletter', 'custom-sistemas' ),
        'section' => 'custom_newsletter',
        'type'    => 'textarea',
    ] );
}
