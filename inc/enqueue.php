<?php
/**
 * inc/enqueue.php
 * Registro e enfileiramento de scripts e estilos.
 */

defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', 'custom_theme_enqueue_assets');

function custom_theme_enqueue_assets()
{
    $v = CUSTOM_THEME_VERSION;
    $uri = CUSTOM_THEME_URI;

    // ── Fontes Google ─────────────────────────────────────────────────────────
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap',
        [],
        null
    );

    // ── Bootstrap 5 CSS ───────────────────────────────────────────────────────
    wp_enqueue_style(
        'bootstrap-5',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        [],
        '5.3.0'
    );

    // ── Bootstrap Icons ───────────────────────────────────────────────────────
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
        [],
        null
    );

    // ── CSS base do tema ──────────────────────────────────────────────────────
    wp_enqueue_style('theme-loader', $uri . '/assets/css/loader.css', [], $v);
    wp_enqueue_style('theme-base', $uri . '/assets/css/base.css', ['theme-loader'], $v);
    wp_enqueue_style('theme-components', $uri . '/assets/css/components.css', ['theme-base'], $v);

    // ── CSS de seções (encadeado para garantir ordem) ─────────────────────────
    $sections = ['navbar', 'hero', 'stats', 'especialidades', 'tecnologias', 'carreiras', 'faq', 'newsletter', 'footer'];
    $dep = 'theme-components';
    foreach ($sections as $s) {
        $handle = 'theme-section-' . $s;
        wp_enqueue_style($handle, $uri . '/assets/css/sections/' . $s . '.css', [$dep], $v);
        $dep = $handle;
    }
    wp_enqueue_style('theme-responsive', $uri . '/assets/css/responsive.css', [$dep], $v);

    // ── CSS do mega menu dinâmico (badges, destaque) — global ─────────────────
    // Carregado em todas as páginas pois o mega menu aparece no header global.
    wp_enqueue_style('theme-solucao-menu', $uri . '/assets/css/pages/solucao.css', ['theme-responsive'], $v);

    // ── CSS por página ────────────────────────────────────────────────────────
    if (is_page_template('page-templates/template-sobre.php')) {
        wp_enqueue_style('theme-page-about', $uri . '/assets/css/pages/about.css', ['theme-responsive'], $v);
    }

    if (is_page_template('page-templates/template-suporte.php')) {
        wp_enqueue_style('theme-page-support', $uri . '/assets/css/pages/support.css', ['theme-responsive'], $v);
    }

    if (is_page_template('page-templates/template-carreira.php')) {
        wp_enqueue_style('theme-page-career', $uri . '/assets/css/pages/career.css', ['theme-responsive'], $v);
    }
    if (is_page_template('page-templates/template-treinamentos.php')) {
        wp_enqueue_style('theme-page-trainings', $uri . '/assets/css/pages/trainings.css', ['theme-responsive'], $v);
    }

    if (is_page_template('page-templates/template-eventos.php')) {
        wp_enqueue_style('theme-page-events', $uri . '/assets/css/pages/events.css', ['theme-responsive'], $v);
    }

    if (is_page_template('page-templates/template-contato.php')) {
        wp_enqueue_style('theme-page-contact', $uri . '/assets/css/pages/contact.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado do Contábil (single-solucao-contabil.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'contabilidade') {
        wp_enqueue_style('theme-page-contabilidade', $uri . '/assets/css/pages/contabilidade.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado da Tesouraria (single-solucao-tesouraria.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'tesouraria') {
        wp_enqueue_style('theme-page-tesouraria', $uri . '/assets/css/pages/tesouraria.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado do Planejamento (single-solucao-planejamento.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'planejamento') {
        wp_enqueue_style('theme-page-planejamento', $uri . '/assets/css/pages/planejamento.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado da Folha de Pagamento (single-solucao-folha-de-pagamento.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'folha-de-pagamento') {
        wp_enqueue_style('theme-page-folha-de-pagamento', $uri . '/assets/css/pages/folha-de-pagamento.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado do Controle de Ponto (single-solucao-ponto.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'ponto') {
        wp_enqueue_style('theme-page-ponto', $uri . '/assets/css/pages/ponto.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado dos Recursos Humanos (single-solucao-recursos-humanos.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'recursos-humanos') {
        wp_enqueue_style('theme-page-recursos-humanos', $uri . '/assets/css/pages/recursos-humanos.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Compras (single-solucao-compras.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'compras') {
        wp_enqueue_style('theme-page-compras', $uri . '/assets/css/pages/compras.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Almoxarifado (single-solucao-almoxarifado.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'almoxarifado') {
        wp_enqueue_style('theme-page-almoxarifado', $uri . '/assets/css/pages/almoxarifado.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Contratos (single-solucao-contratos.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'contratos') {
        wp_enqueue_style('theme-page-contratos', $uri . '/assets/css/pages/contratos.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Tributos (single-solucao-tributos.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'tributos') {
        wp_enqueue_style('theme-page-tributos', $uri . '/assets/css/pages/tributos.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Procuradoria (single-solucao-procuradoria.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'procuradoria') {
        wp_enqueue_style('theme-page-procuradoria', $uri . '/assets/css/pages/procuradoria.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Gestão Fiscal (single-solucao-gestao-fiscal.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'gestao-fiscal') {
        wp_enqueue_style('theme-page-gestao-fiscal', $uri . '/assets/css/pages/gestao-fiscal.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Educação (single-solucao-educacao.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'educacao') {
        wp_enqueue_style('theme-page-educacao', $uri . '/assets/css/pages/educacao.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Professores (single-solucao-professores.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'professores') {
        wp_enqueue_style('theme-page-professores', $uri . '/assets/css/pages/professores.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Pais e Alunos (single-solucao-pais-e-alunos.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'pais-e-alunos') {
        wp_enqueue_style('theme-page-pais-e-alunos', $uri . '/assets/css/pages/pais-e-alunos.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Portal da Transparência (single-solucao-portal-da-transparencia.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'portal-da-transparencia') {
        wp_enqueue_style('theme-page-portal-da-transparencia', $uri . '/assets/css/pages/portal-da-transparencia.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Protocolo (single-solucao-protocolo.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'protocolo') {
        wp_enqueue_style('theme-page-protocolo', $uri . '/assets/css/pages/protocolo.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Portal do Gestor (single-solucao-portal-do-gestor.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'portal-do-gestor') {
        wp_enqueue_style('theme-page-portal-do-gestor', $uri . '/assets/css/pages/portal-do-gestor.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Conecta (single-solucao-conecta.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'conecta') {
        wp_enqueue_style('theme-page-conecta', $uri . '/assets/css/pages/conecta.css', ['theme-responsive'], $v);
    }

    // CSS do layout dedicado de Documentos (single-solucao-documentos.php)
    if (is_singular('solucao') && get_post_field('post_name', get_queried_object_id()) === 'documentos') {
        wp_enqueue_style('theme-page-documentos', $uri . '/assets/css/pages/documentos.css', ['theme-responsive'], $v);
    }

    // ── Bootstrap 5 JS ───────────────────────────────────────────────────────
    wp_enqueue_script(
        'bootstrap-5',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.0',
        true
    );

    // ── JS do tema ────────────────────────────────────────────────────────────
    wp_enqueue_script('theme-navbar', $uri . '/assets/js/navbar.js', ['bootstrap-5'], $v, true);
    wp_enqueue_script('theme-megamenu', $uri . '/assets/js/mega-menu.js', ['theme-navbar'], $v, true);
    wp_enqueue_script('theme-faq', $uri . '/assets/js/faq.js', ['bootstrap-5'], $v, true);
    wp_enqueue_script('theme-loader', $uri . '/assets/js/loader.js', ['bootstrap-5'], $v, true);
    wp_enqueue_script('theme-career', $uri . '/assets/js/career.js', ['theme-loader'], $v, true);
    wp_enqueue_script('theme-trainings', $uri . '/assets/js/trainings.js', ['theme-loader'], $v, true);

    if (is_page_template('page-templates/template-sobre.php')) {
        wp_enqueue_script('theme-about', $uri . '/assets/js/about.js', ['theme-loader'], $v, true);
    }

    if (is_page_template('page-templates/template-suporte.php')) {
        wp_enqueue_script('theme-support', $uri . '/assets/js/support.js', ['theme-faq'], $v, true);
    }

    // ── Dados PHP → JS ────────────────────────────────────────────────────────
    wp_localize_script('theme-navbar', 'customTheme', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'themeUri' => $uri,
        'siteUrl' => home_url(),
    ]);
}
