<?php
/**
 * inc/class-wp-bootstrap-navwalker.php
 *
 * WP Bootstrap Navwalker — compatível com Bootstrap 5
 * Fonte: https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 *
 * Esta classe substitui o walker padrão do WordPress para gerar
 * marcação compatível com os componentes de navegação do Bootstrap 5.
 *
 * NOTA: O mega menu da Custom Sistemas é construído separadamente
 * em template-parts/header/nav.php e controlado por assets/js/mega-menu.js,
 * pois possui uma estrutura multi-coluna customizada que vai além do
 * que o navwalker padrão oferece. O navwalker é utilizado nos demais
 * itens de menu (links simples) e no menu mobile.
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WP_Bootstrap_Navwalker' ) ) {

    class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {

        /**
         * Inicia o nível da lista.
         */
        public function start_lvl( &$output, $depth = 0, $args = null ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = str_repeat( $t, $depth );
            $classes = [ 'dropdown-menu' ];
            $class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
            $output .= "{$n}{$indent}<ul class=\"{$class_names}\">{$n}";
        }

        /**
         * Inicia o elemento (item de menu).
         */
        public function start_el( &$output, $data_object, $depth = 0, $args = null, $id = 0 ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

            $item = $data_object;

            $classes   = empty( $item->classes ) ? [] : (array) $item->classes;
            $classes[] = 'nav-item';

            // Dropdown
            if ( $args->walker->has_children ) {
                $classes[] = 'dropdown';
            }

            $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $class_names . '>';

            $atts = [];
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
            $atts['href']   = ! empty( $item->url )        ? $item->url        : '#';

            if ( $args->walker->has_children ) {
                $atts['class']         = 'nav-link dropdown-toggle';
                $atts['data-bs-toggle'] = 'dropdown';
                $atts['aria-expanded'] = 'false';
                $atts['role']          = 'button';
            } else {
                $atts['class'] = 'nav-link';
            }

            if ( in_array( 'current-menu-item', $classes, true ) || in_array( 'current-menu-parent', $classes, true ) ) {
                $atts['class'] .= ' active';
                $atts['aria-current'] = 'page';
            }

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                    $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $title = apply_filters( 'the_title', $item->title, $item->ID );
            $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

            $item_output  = isset( $args->before ) ? $args->before : '';
            $item_output .= '<a' . $attributes . '>';
            $item_output .= ( isset( $args->link_before ) ? $args->link_before : '' ) . $title . ( isset( $args->link_after ) ? $args->link_after : '' );
            $item_output .= '</a>';
            $item_output .= isset( $args->after ) ? $args->after : '';

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }
}
