<?php
/**
 * template-parts/footer/footer-widgets.php
 * Seção newsletter + footer completo.
 */
defined( 'ABSPATH' ) || exit;
?>

<!-- ══════════════════ NEWSLETTER ══════════════════ -->
<!-- <section class="newsletter">
    <div class="newsletter-inner">
        <div class="chip"><?php esc_html_e( 'Newsletter', 'custom-sistemas' ); ?></div>
        <h2><?php echo esc_html( get_theme_mod( 'newsletter_title', 'Receba conteúdos sobre gestão pública' ) ); ?></h2>
        <p><?php echo esc_html( get_theme_mod( 'newsletter_desc', 'Insights, novidades e tecnologia direto no seu e-mail. Sem spam.' ) ); ?></p>
        <form class="newsletter-form" onsubmit="return false;">
            <input type="email" placeholder="<?php esc_attr_e( 'Seu melhor e-mail', 'custom-sistemas' ); ?>">
            <button class="btn-custom-primary" type="submit"><?php esc_html_e( 'Inscrever', 'custom-sistemas' ); ?></button>
        </form>
    </div>
</section> -->

<!-- ══════════════════ FOOTER ══════════════════ -->
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-top">

            <div class="footer-brand">
                <div class="brand-name">
                    <?php bloginfo( 'name' ); ?>
                </div>
                <p><?php esc_html_e( 'Soluções inteligentes para gestão pública. Tecnologia que transforma cidades.', 'custom-sistemas' ); ?></p>
                <div class="social-links">
                    <?php if ( $url = get_theme_mod( 'social_linkedin', '#' ) ) : ?>
                        <a href="<?php echo esc_url( $url ); ?>" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <?php endif; ?>
                    <?php if ( $url = get_theme_mod( 'social_instagram', '#' ) ) : ?>
                        <a href="<?php echo esc_url( $url ); ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <?php endif; ?>
                    <?php if ( $url = get_theme_mod( 'social_youtube', '#' ) ) : ?>
                        <a href="<?php echo esc_url( $url ); ?>" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <?php endif; ?>
                    <?php if ( $url = get_theme_mod( 'social_facebook', '#' ) ) : ?>
                        <a href="<?php echo esc_url( $url ); ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Coluna 1 — Soluções (Widget) -->
            <div class="footer-col">
                    <h6><?php esc_html_e( 'Soluções', 'custom-sistemas' ); ?></h6>
                    <ul>
                        <?php
                            $terms = get_terms( array(
                                'taxonomy' => 'categoria_solucao', // nome da taxonomia
                                'hide_empty' => true,
                            ) );

                            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

                                foreach ( $terms as $term ) {

                                    echo '<li>';
                                    echo '<a href="' . esc_url( get_term_link( $term ) ) . '">';
                                    echo esc_html( $term->name );
                                    echo '</a>';
                                    echo '</li>';
                                }
                            }
                        ?>
                    </ul>
               
            </div>

            <!-- Coluna 2 — Institucional (Widget ou fallback) -->
            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-col-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-col-2' ); ?>
                <?php else : ?>
                    <h6><?php esc_html_e( 'Institucional', 'custom-sistemas' ); ?></h6>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/sobre/' ) ); ?>"><?php esc_html_e( 'Sobre a Custom', 'custom-sistemas' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Carreira', 'custom-sistemas' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Blog', 'custom-sistemas' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Eventos', 'custom-sistemas' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Coluna 3 — Contato (Widget ou fallback) -->
            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-col-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-col-3' ); ?>
                <?php else : ?>
                    <h6><?php esc_html_e( 'Contato', 'custom-sistemas' ); ?></h6>
                    <ul>
                        <li><a href="mailto:contato@customsistemas.com.br">contato@customsistemas.com.br</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/suporte/' ) ); ?>"><?php esc_html_e( 'Suporte Técnico', 'custom-sistemas' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Treinamentos', 'custom-sistemas' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>

        </div>

        <div class="footer-bottom">
            <p><?php echo wp_kses_post( get_theme_mod( 'footer_copyright', '© 2025 Custom Sistemas. Todos os direitos reservados.' ) ); ?></p>
            <p>
                <a href="#"><?php esc_html_e( 'Política de Privacidade', 'custom-sistemas' ); ?></a>
                &nbsp;·&nbsp;
                <a href="#"><?php esc_html_e( 'Termos de Uso', 'custom-sistemas' ); ?></a>
            </p>
        </div>
    </div>
</footer>
