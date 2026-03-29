<?php
/**
 * inc/mega-menu-helpers.php
 *
 * Funções auxiliares para montar os dados do mega menu de Soluções
 * a partir do CPT "solucao" + Taxonomy "categoria_solucao" + campos ACF.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Retorna as categorias de soluções ordenadas pelo campo ACF "cat_solucao_ordem".
 *
 * @return WP_Term[]
 */
function custom_get_solucao_categorias(): array {
    $terms = get_terms( [
        'taxonomy'   => 'categoria_solucao',
        'hide_empty' => true,   // só mostra se tiver soluções publicadas
        'orderby'    => 'name',
        'order'      => 'ASC',
    ] );

    if ( is_wp_error( $terms ) || empty( $terms ) ) {
        return [];
    }

    // Ordena pelo campo ACF "cat_solucao_ordem" (fallback: 10)
    usort( $terms, function ( WP_Term $a, WP_Term $b ): int {
        $ordem_a = (int) ( get_field( 'cat_solucao_ordem', 'categoria_solucao_' . $a->term_id ) ?: 10 );
        $ordem_b = (int) ( get_field( 'cat_solucao_ordem', 'categoria_solucao_' . $b->term_id ) ?: 10 );
        return $ordem_a <=> $ordem_b;
    } );

    return $terms;
}

/**
 * Retorna as soluções de uma categoria específica, ordenadas por menu_order.
 *
 * @param int $term_id  ID do termo da categoria.
 * @return WP_Post[]
 */
function custom_get_solucoes_por_categoria( int $term_id ): array {
    $posts = get_posts( [
        'post_type'      => 'solucao',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order title',
        'order'          => 'ASC',
        'tax_query'      => [ [
            'taxonomy' => 'categoria_solucao',
            'field'    => 'term_id',
            'terms'    => $term_id,
        ] ],
    ] );

    return $posts ?: [];
}

/**
 * Retorna o ícone de uma solução (campo ACF), com fallback seguro.
 *
 * @param int $post_id
 * @return string  Classe completa: "bi bi-calculator"
 */
function custom_get_solucao_icone( int $post_id ): string {
    $icone = '';
    if ( function_exists( 'get_field' ) ) {
        $icone = get_field( 'solucao_icone', $post_id );
    }
    $icone = $icone ? sanitize_html_class( $icone ) : 'grid';
    return 'bi bi-' . $icone;
}

/**
 * Retorna a cor de destaque de uma categoria (campo ACF), com fallback.
 *
 * @param int $term_id
 * @return string  Hex color: "#0A52CC"
 */
function custom_get_categoria_cor( int $term_id ): string {
    $cor = '';
    if ( function_exists( 'get_field' ) ) {
        $cor = get_field( 'cat_solucao_cor', 'categoria_solucao_' . $term_id );
    }
    return $cor ?: '#0A52CC';
}

/**
 * Retorna a URL de destino de uma solução (link externo ACF ou permalink WP).
 *
 * @param int $post_id
 * @return string
 */
function custom_get_solucao_url( int $post_id ): string {
    if ( function_exists( 'get_field' ) ) {
        $externo = get_field( 'solucao_link_externo', $post_id );
        if ( ! empty( $externo ) ) {
            return esc_url( $externo );
        }
    }
    return esc_url( get_permalink( $post_id ) );
}

/**
 * Cache em memória para os dados do mega menu dentro de uma mesma requisição.
 * Evita múltiplas queries em páginas que chamam o template duas vezes.
 *
 * @return array{categorias: WP_Term[], solucoes: array<int, WP_Post[]>}
 */
function custom_get_megamenu_data(): array {
    static $cache = null;

    if ( null !== $cache ) {
        return $cache;
    }

    $categorias = custom_get_solucao_categorias();
    $solucoes   = [];

    foreach ( $categorias as $cat ) {
        $solucoes[ $cat->term_id ] = custom_get_solucoes_por_categoria( $cat->term_id );
    }

    $cache = compact( 'categorias', 'solucoes' );
    return $cache;
}
