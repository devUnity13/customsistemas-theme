<?php
/**
 * archive-solucao.php
 * Arquivo / listagem de todas as Soluções agrupadas por categoria.
 */

defined( 'ABSPATH' ) || exit;

get_header();

$megamenu = custom_get_megamenu_data();
?>

<section class="solucao-archive">
    <div class="solucao-archive-hero">
        <div class="solucao-archive-hero-inner">
            <span class="section-label"><?php esc_html_e( 'Nosso Portfólio', 'custom-sistemas' ); ?></span>
            <h1><?php esc_html_e( 'Todas as Soluções', 'custom-sistemas' ); ?></h1>
            <p><?php esc_html_e( 'Plataformas completas para cada área da gestão pública municipal.', 'custom-sistemas' ); ?></p>
        </div>
    </div>

    <div class="solucao-archive-body">
        <div class="solucao-archive-inner">

            <?php foreach ( $megamenu['categorias'] as $categoria ) :
                $posts_cat = $megamenu['solucoes'][ $categoria->term_id ] ?? [];
                if ( empty( $posts_cat ) ) continue;
                $cor = custom_get_categoria_cor( $categoria->term_id );
            ?>
                <div class="solucao-archive-group">
                    <h2 class="solucao-archive-group-title" style="border-color:<?php echo esc_attr( $cor ); ?>;color:<?php echo esc_attr( $cor ); ?>">
                        <?php echo esc_html( $categoria->name ); ?>
                    </h2>
                    <div class="solucao-archive-grid">
                        <?php foreach ( $posts_cat as $solucao ) :
                            $icone = custom_get_solucao_icone( $solucao->ID );
                            $url   = custom_get_solucao_url( $solucao->ID );
                        ?>
                            <a href="<?php echo esc_url( $url ); ?>" class="solucao-card">
                                <div class="solucao-card-icon" style="background:<?php echo esc_attr( $cor . '1a' ); ?>">
                                    <i class="bi <?php echo esc_attr( $icone ); ?>" style="color:<?php echo esc_attr( $cor ); ?>"></i>
                                </div>
                                <h3><?php echo esc_html( $solucao->post_title ); ?></h3>
                                <?php if ( $solucao->post_excerpt ) : ?>
                                    <p><?php echo esc_html( wp_trim_words( $solucao->post_excerpt, 15 ) ); ?></p>
                                <?php endif; ?>
                                <span class="solucao-card-cta">
                                    <?php esc_html_e( 'Saiba mais', 'custom-sistemas' ); ?>
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
