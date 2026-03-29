<?php
/**
 * inc/cpt-solucao.php
 *
 * Registra o CPT "solucao" e a Taxonomy "categoria_solucao".
 * Integração com ACF Free para campos customizados.
 */

defined( 'ABSPATH' ) || exit;

// ─────────────────────────────────────────────────────────────────────────────
// 1. TAXONOMY: categoria_solucao
// ─────────────────────────────────────────────────────────────────────────────
add_action( 'init', 'custom_register_taxonomy_solucao' );

function custom_register_taxonomy_solucao(): void {
    register_taxonomy( 'categoria_solucao', 'solucao', [
        'labels' => [
            'name'              => 'Categorias de Soluções',
            'singular_name'     => 'Categoria de Solução',
            'menu_name'         => 'Categorias',
            'all_items'         => 'Todas as Categorias',
            'edit_item'         => 'Editar Categoria',
            'view_item'         => 'Ver Categoria',
            'update_item'       => 'Atualizar Categoria',
            'add_new_item'      => 'Adicionar Nova Categoria',
            'new_item_name'     => 'Nome da Nova Categoria',
            'search_items'      => 'Buscar Categorias',
            'not_found'         => 'Nenhuma categoria encontrada.',
        ],
        'hierarchical'      => false,   // false = tags; true = categorias
        'show_in_rest'      => true,    // Gutenberg / REST API
        'show_admin_column' => true,
        'rewrite'           => [ 'slug' => 'solucoes/categoria' ],

        // ── Ordem exibida no mega menu ─────────────────────────────────────
        // Use o campo "Ordem" (menu_order) da categoria para controlar a sequência.
        // Instale "Category Order and Taxonomy Terms Order" ou defina via ACF abaixo.
    ] );
}

// ─────────────────────────────────────────────────────────────────────────────
// 2. CPT: solucao
// ─────────────────────────────────────────────────────────────────────────────
add_action( 'init', 'custom_register_cpt_solucao' );

function custom_register_cpt_solucao(): void {
    register_post_type( 'solucao', [
        'labels' => [
            'name'               => 'Soluções',
            'singular_name'      => 'Solução',
            'menu_name'          => 'Soluções',
            'add_new'            => 'Adicionar Nova',
            'add_new_item'       => 'Adicionar Nova Solução',
            'edit_item'          => 'Editar Solução',
            'new_item'           => 'Nova Solução',
            'view_item'          => 'Ver Solução',
            'search_items'       => 'Buscar Soluções',
            'not_found'          => 'Nenhuma solução encontrada.',
            'not_found_in_trash' => 'Nenhuma solução na lixeira.',
        ],
        'public'             => true,
        'show_in_rest'       => true,   // Gutenberg
        'menu_icon'          => 'dashicons-grid-view',
        'menu_position'      => 5,
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ],
        'has_archive'        => 'solucoes',
        'rewrite'            => [ 'slug' => 'solucoes', 'with_front' => false ],
        'taxonomies'         => [ 'categoria_solucao' ],

        // Permalink: /solucoes/contabilidade  etc.
    ] );
}

// ─────────────────────────────────────────────────────────────────────────────
// 3. FLUSH REWRITE RULES (apenas uma vez na ativação)
// ─────────────────────────────────────────────────────────────────────────────
register_activation_hook( CUSTOM_THEME_DIR . '/functions.php', function () {
    custom_register_taxonomy_solucao();
    custom_register_cpt_solucao();
    flush_rewrite_rules();
} );

// ─────────────────────────────────────────────────────────────────────────────
// 4. CAMPOS ACF — Registrados via PHP (portável, sem depender de export JSON)
// ─────────────────────────────────────────────────────────────────────────────
add_action( 'acf/init', 'custom_register_acf_fields_solucao' );

function custom_register_acf_fields_solucao(): void {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

    // ── Grupo de campos para o CPT Solução ────────────────────────────────
    acf_add_local_field_group( [
        'key'      => 'group_solucao_fields',
        'title'    => 'Dados da Solução',
        'location' => [ [ [
            'param'    => 'post_type',
            'operator' => '==',
            'value'    => 'solucao',
        ] ] ],
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'fields' => [

            // ── Ícone Bootstrap Icons ──────────────────────────────────────
            [
                'key'           => 'field_solucao_icone',
                'label'         => 'Ícone (Bootstrap Icons)',
                'name'          => 'solucao_icone',
                'type'          => 'text',
                'instructions'  => 'Classe do Bootstrap Icons sem "bi-". Exemplo: <code>calculator</code> → exibe <i class="bi bi-calculator"></i>. Lista completa: <a href="https://icons.getbootstrap.com/" target="_blank">icons.getbootstrap.com</a>',
                'required'      => 0,
                'default_value' => 'grid',
                'placeholder'   => 'calculator',
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Destaque no mega menu ──────────────────────────────────────
            [
                'key'           => 'field_solucao_destaque',
                'label'         => 'Destaque no mega menu?',
                'name'          => 'solucao_destaque',
                'type'          => 'true_false',
                'instructions'  => 'Marque para exibir esta solução em destaque (negrito / badge) no mega menu.',
                'required'      => 0,
                'default_value' => 0,
                'ui'            => 1,       // toggle bonito
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Texto curto para o mega menu ──────────────────────────────
            [
                'key'           => 'field_solucao_subtitulo',
                'label'         => 'Subtítulo / Tag (mega menu)',
                'name'          => 'solucao_subtitulo',
                'type'          => 'text',
                'instructions'  => 'Texto curto opcional exibido abaixo do nome no mega menu. Ex: "Novo", "Beta", "Mais popular".',
                'required'      => 0,
                'placeholder'   => 'Novo',
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Link externo (opcional) ────────────────────────────────────
            [
                'key'           => 'field_solucao_link_externo',
                'label'         => 'Link externo (opcional)',
                'name'          => 'solucao_link_externo',
                'type'          => 'url',
                'instructions'  => 'Se preenchido, o link no mega menu aponta para esta URL externa em vez da página WP da solução.',
                'required'      => 0,
                'placeholder'   => 'https://app.customsistemas.com.br/contabilidade',
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Seção: Página da Solução ───────────────────────────────────
            [
                'key'     => 'field_solucao_tab_pagina',
                'label'   => 'Página da Solução',
                'name'    => '',
                'type'    => 'tab',
                'placement' => 'top',
            ],

            // ── Benefícios (repeater) ──────────────────────────────────────
            [
                'key'          => 'field_solucao_beneficios',
                'label'        => 'Benefícios',
                'name'         => 'solucao_beneficios',
                'type'         => 'repeater',
                'instructions' => 'Lista de benefícios exibida na página individual da solução.',
                'min'          => 0,
                'max'          => 6,
                'layout'       => 'table',
                'button_label' => 'Adicionar benefício',
                'sub_fields'   => [
                    [
                        'key'           => 'field_solucao_beneficio_icone',
                        'label'         => 'Ícone',
                        'name'          => 'icone',
                        'type'          => 'text',
                        'placeholder'   => 'check-circle',
                        'wrapper'       => [ 'width' => '25' ],
                    ],
                    [
                        'key'           => 'field_solucao_beneficio_texto',
                        'label'         => 'Texto',
                        'name'          => 'texto',
                        'type'          => 'text',
                        'wrapper'       => [ 'width' => '75' ],
                    ],
                ],
            ],

            // ── CTA da página ─────────────────────────────────────────────
            [
                'key'           => 'field_solucao_cta_texto',
                'label'         => 'Texto do CTA',
                'name'          => 'solucao_cta_texto',
                'type'          => 'text',
                'default_value' => 'Solicitar demonstração',
                'wrapper'       => [ 'width' => '50' ],
            ],
            [
                'key'           => 'field_solucao_cta_link',
                'label'         => 'Link do CTA',
                'name'          => 'solucao_cta_link',
                'type'          => 'url',
                'placeholder'   => 'https://customsistemas.com.br/contato',
                'wrapper'       => [ 'width' => '50' ],
            ],
        ],
    ] );

    // ── Grupo de campos para a Taxonomy Categoria ─────────────────────────
    acf_add_local_field_group( [
        'key'      => 'group_categoria_solucao_fields',
        'title'    => 'Dados da Categoria',
        'location' => [ [ [
            'param'    => 'taxonomy',
            'operator' => '==',
            'value'    => 'categoria_solucao',
        ] ] ],
        'fields' => [

            // ── Ícone da categoria ─────────────────────────────────────────
            [
                'key'           => 'field_cat_solucao_icone',
                'label'         => 'Ícone da categoria (Bootstrap Icons)',
                'name'          => 'cat_solucao_icone',
                'type'          => 'text',
                'instructions'  => 'Ícone exibido no cabeçalho do grupo no mega menu. Ex: <code>calculator</code>',
                'placeholder'   => 'grid',
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Cor do tema ────────────────────────────────────────────────
            [
                'key'           => 'field_cat_solucao_cor',
                'label'         => 'Cor de destaque (HEX)',
                'name'          => 'cat_solucao_cor',
                'type'          => 'color_picker',
                'instructions'  => 'Cor usada no título da coluna do mega menu.',
                'default_value' => '#0A52CC',
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Ordem no mega menu ─────────────────────────────────────────
            [
                'key'           => 'field_cat_solucao_ordem',
                'label'         => 'Ordem no mega menu',
                'name'          => 'cat_solucao_ordem',
                'type'          => 'number',
                'instructions'  => 'Número inteiro. Categorias são ordenadas do menor para o maior.',
                'default_value' => 10,
                'min'           => 1,
                'wrapper'       => [ 'width' => '50' ],
            ],
        ],
    ] );
}
