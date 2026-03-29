<?php
/**
 * functions.php — Custom Sistemas Theme
 * Ponto de entrada principal. Carrega os arquivos de inc/.
 */

defined( 'ABSPATH' ) || exit;

// ── Constantes do tema ──────────────────────────────────────────────────────
define( 'CUSTOM_THEME_VERSION', '1.0.0' );
define( 'CUSTOM_THEME_DIR',     get_template_directory() );
define( 'CUSTOM_THEME_URI',     get_template_directory_uri() );

// ── Arquivos de suporte ──────────────────────────────────────────────────────
require_once CUSTOM_THEME_DIR . '/inc/class-wp-bootstrap-navwalker.php';
require_once CUSTOM_THEME_DIR . '/inc/cpt-solucao.php';
require_once CUSTOM_THEME_DIR . '/inc/mega-menu-helpers.php';
require_once CUSTOM_THEME_DIR . '/inc/enqueue.php';
require_once CUSTOM_THEME_DIR . '/inc/setup.php';
require_once CUSTOM_THEME_DIR . '/inc/helpers.php';
require_once CUSTOM_THEME_DIR . '/inc/customizer.php';

