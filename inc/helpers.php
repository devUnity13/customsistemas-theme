<?php
/**
 * inc/helpers.php
 * Funções utilitárias reutilizáveis em todo o tema.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Retorna a URL do logo ou a URL padrão de fallback.
 */
function custom_get_logo_url(): string {
    if ( has_custom_logo() ) {
        $logo_id  = get_theme_mod( 'custom_logo' );
        $logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
        return esc_url( $logo_url );
    }
    return esc_url( CUSTOM_THEME_URI . '/assets/img/custom_logo.png' );
}

/**
 * Retorna a URL de uma imagem do tema.
 */
function custom_img( string $filename ): string {
    return esc_url( CUSTOM_THEME_URI . '/assets/img/' . $filename );
}

/**
 * Exibe o template part correto para o conteúdo.
 */
function custom_get_content_template(): void {
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content/content' );
        }
    } else {
        get_template_part( 'template-parts/content/content', 'none' );
    }
}

/**
 * Retorna classes CSS adicionais para o body.
 */
add_filter( 'body_class', 'custom_body_classes' );
function custom_body_classes( array $classes ): array {
    if ( is_page_template() ) {
        $template = basename( get_page_template_slug(), '.php' );
        $classes[] = 'template-' . sanitize_html_class( $template );
    }
    return $classes;
}

/**
 * Remove o prefixo "Categoria: " dos títulos de arquivo.
 */
add_filter( 'get_the_archive_title', function( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    }
    return $title;
} );

add_filter('walker_nav_menu_start_el', function($item_output, $item, $depth, $args) {

    if ($args->theme_location === 'primary' && in_array('menu-mega-solucoes', $item->classes)) {

        return '<li class="menu-mega-solucoes" id="solucoesItem">
                    <button type="button" onclick="toggleMega()">
                        <span>' . esc_html($item->title) . '</span>
                        <i class="bi bi-chevron-down chevron"></i>
                    </button>
                </li>';
    }

    return $item_output;

}, 10, 4);

