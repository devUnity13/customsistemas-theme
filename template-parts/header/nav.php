<?php
/**
 * template-parts/header/nav.php
 * Navbar principal com mega menu DINÂMICO de Soluções (CPT + ACF).
 */
defined( 'ABSPATH' ) || exit;

$megamenu        = custom_get_megamenu_data();
$categorias_menu = $megamenu['categorias'];
$solucoes_menu   = $megamenu['solucoes'];
?>

<nav class="site-nav" id="siteNav">
    <div class="nav-inner">

        <a class="nav-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if ( has_custom_logo() ) : the_custom_logo();
            else : ?><img src="<?php echo custom_img( 'custom_logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>"><?php endif; ?>
        </a>

        <ul class="nav-links">
            <?php if ( has_nav_menu( 'primary' ) ) :
                wp_nav_menu( [ 'theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s', 'walker' => new WP_Bootstrap_Navwalker(), 'fallback_cb' => false ] );
            else : ?>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li>
                <li><a href="<?php echo esc_url( home_url( '/sobre/' ) ); ?>">Sobre</a></li>
                <li id="solucoesItem"><button onclick="toggleMega()"><span>Soluções</span><i class="bi bi-chevron-down chevron"></i></button></li>
                <li><a href="#">Carreira</a></li>
                <li><a href="#">Treinamentos</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Contato</a></li>
            <?php endif; ?>
        </ul>

        <div class="nav-actions">
            <a href="<?php echo esc_url( home_url( '/suporte/' ) ); ?>" class="btn-custom-primary">
                <i class="bi bi-people-fill"></i>
                <span class="nav-actions-text">Suporte Técnico</span>
            </a>
        </div>

        <div class="nav-mobile-actions">
            <button class="nav-search-trigger" onclick="openSearch()" aria-label="Buscar"><i class="bi bi-search"></i></button>
            <button class="nav-hamburger" id="hamburger" onclick="toggleMobile()" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

<div class="search-overlay" id="searchOverlay">
    <div class="search-box">

        <?php get_search_form(); ?>

        <button class="search-close"
                onclick="closeSearch()"
                aria-label="Fechar busca">
            <i class="bi bi-x-lg"></i>
        </button>

    </div>
</div>



<!-- MEGA MENU DINÂMICO -->
<div class="mega-overlay" id="megaOverlay" onclick="closeMega()">
    <div class="mega-panel" id="megaPanel">
        <div class="mega-inner">

            <div class="mega-intro">
                <i class="bi bi-columns-gap mega-intro-icon-outline"></i>
                <h3>Nossas Soluções</h3>
                <p>Plataformas completas para cada área da gestão pública municipal.</p>
                <a href="<?php echo esc_url( get_post_type_archive_link( 'solucao' ) ?: '#' ); ?>" class="mega-all-link">
                    Ver todas as soluções <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="mega-cols">
                <?php if ( ! empty( $categorias_menu ) ) :
                    foreach ( $categorias_menu as $categoria ) :
                        $posts_cat = $solucoes_menu[ $categoria->term_id ] ?? [];
                        if ( empty( $posts_cat ) ) continue;
                        $cor = custom_get_categoria_cor( $categoria->term_id );
                ?>
                    <div class="mega-col-group <?php echo esc_attr( sanitize_html_class( $categoria->slug ) ); ?>">
                        <h6 style="color:<?php echo esc_attr( $cor ); ?>;border-color:<?php echo esc_attr( $cor ); ?>;">
                            <?php echo esc_html( $categoria->name ); ?>
                        </h6>
                        <ul>
                            <?php foreach ( $posts_cat as $solucao ) :
                                $icone     = custom_get_solucao_icone( $solucao->ID );
                                $url       = custom_get_solucao_url( $solucao->ID );
                                $destaque  = function_exists( 'get_field' ) ? get_field( 'solucao_destaque', $solucao->ID ) : false;
                                $subtitulo = function_exists( 'get_field' ) ? get_field( 'solucao_subtitulo', $solucao->ID ) : '';
                            ?>
                                <li>
                                    <a href="<?php echo esc_url( $url ); ?>"<?php if ( $destaque ) echo ' class="mega-link-destaque"'; ?>>
                                        <i class="bi <?php echo esc_attr( $icone ); ?>"></i>
                                        <?php echo esc_html( $solucao->post_title ); ?>
                                        <?php if ( $subtitulo ) : ?>
                                            <span class="mega-badge"><?php echo esc_html( $subtitulo ); ?></span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach;
                else : ?>
                    <p class="mega-empty">Nenhuma solução cadastrada ainda.</p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>


<!-- MOBILE DRAWER DINÂMICO -->
<div class="mobile-drawer" id="mobileDrawer">
    <ul class="mobile-nav-list">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li>
        <li><a href="<?php echo esc_url( home_url( '/sobre/' ) ); ?>">Sobre</a></li>
        <li>
            <button onclick="toggleMobileSub(this)">Soluções <i class="bi bi-chevron-down"></i></button>
            <div class="mobile-sub">
                <?php if ( ! empty( $categorias_menu ) ) :
                    foreach ( $categorias_menu as $categoria ) :
                        $posts_cat = $solucoes_menu[ $categoria->term_id ] ?? [];
                        if ( empty( $posts_cat ) ) continue;
                ?>
                    <div class="mobile-sub-group">
                        <h6><?php echo esc_html( $categoria->name ); ?></h6>
                        <?php foreach ( $posts_cat as $solucao ) : ?>
                            <a href="<?php echo esc_url( custom_get_solucao_url( $solucao->ID ) ); ?>">
                                <?php echo esc_html( $solucao->post_title ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; endif; ?>
            </div>
        </li>
        <li><a href="#">Carreira</a></li>
        <li><a href="#">Treinamentos</a></li>
        <li><a href="#">Eventos</a></li>
        <li><a href="#">Contato</a></li>
    </ul>
    <div class="mobile-cta">
        <a href="<?php echo esc_url( home_url( '/suporte/' ) ); ?>" class="btn-custom-primary">
            <i class="bi bi-people-fill"></i> Suporte Técnico
        </a>
    </div>
</div>
