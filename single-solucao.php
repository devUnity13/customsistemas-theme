<?php
/**
 * single-solucao.php
 * Template para a página individual de cada Solução (CPT).
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) : the_post();

    // ── Campos ACF ──────────────────────────────────────────────────────────
    $icone      = custom_get_solucao_icone( get_the_ID() );
    $cta_texto  = function_exists( 'get_field' ) ? get_field( 'solucao_cta_texto' ) : 'Solicitar demonstração';
    $cta_link   = function_exists( 'get_field' ) ? get_field( 'solucao_cta_link' )  : home_url( '/contato/' );
    $beneficios = function_exists( 'get_field' ) ? get_field( 'solucao_beneficios' ) : [];

    // ── Categoria da solução ────────────────────────────────────────────────
    $categorias = get_the_terms( get_the_ID(), 'categoria_solucao' );
    $categoria  = ( $categorias && ! is_wp_error( $categorias ) ) ? $categorias[0] : null;
    $cor_cat    = $categoria ? custom_get_categoria_cor( $categoria->term_id ) : '#0A52CC';
?>

<!-- HERO DA SOLUÇÃO -->
<section class="solucao-hero">
    <div class="solucao-hero-inner">

        <div class="solucao-hero-content">

            <?php if ( $categoria ) : ?>
                <a href="<?php echo esc_url( get_term_link( $categoria ) ); ?>" class="solucao-breadcrumb">
                    <i class="bi bi-arrow-left"></i>
                    <?php echo esc_html( $categoria->name ); ?>
                </a>
            <?php endif; ?>

            <div class="solucao-hero-icon" style="background:<?php echo esc_attr( $cor_cat . '1a' ); ?>">
                <i class="bi <?php echo esc_attr( $icone ); ?>" style="color:<?php echo esc_attr( $cor_cat ); ?>"></i>
            </div>

            <h1><?php the_title(); ?></h1>

            <?php if ( has_excerpt() ) : ?>
                <p class="solucao-hero-desc"><?php the_excerpt(); ?></p>
            <?php endif; ?>

            <?php if ( $cta_link ) : ?>
                <div class="solucao-hero-actions">
                    <a href="<?php echo esc_url( $cta_link ); ?>" class="btn-custom-primary">
                        <?php echo esc_html( $cta_texto ?: 'Solicitar demonstração' ); ?>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/suporte/' ) ); ?>" class="btn-custom-outline">
                        <?php esc_html_e( 'Falar com especialista', 'custom-sistemas' ); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>

        <?php if ( has_post_thumbnail() ) : ?>
            <div class="solucao-hero-image">
                <?php the_post_thumbnail( 'large', [ 'class' => 'solucao-featured-img' ] ); ?>
            </div>
        <?php endif; ?>

    </div>
</section>


<!-- BENEFÍCIOS -->
<?php if ( ! empty( $beneficios ) ) : ?>
<section class="solucao-beneficios">
    <div class="solucao-beneficios-inner">
        <span class="section-label"><?php esc_html_e( 'Principais benefícios', 'custom-sistemas' ); ?></span>
        <h2><?php esc_html_e( 'Por que escolher ', 'custom-sistemas' ); ?><?php the_title(); ?>?</h2>
        <ul class="feature-list">
            <?php foreach ( $beneficios as $item ) : ?>
                <li>
                    <span class="check">
                        <i class="bi bi-<?php echo esc_attr( sanitize_html_class( $item['icone'] ?: 'check-lg' ) ); ?>"></i>
                    </span>
                    <?php echo esc_html( $item['texto'] ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>


<!-- CONTEÚDO PRINCIPAL (editor WP) -->
<?php if ( ! empty( get_the_content() ) ) : ?>
<section class="solucao-content">
    <div class="solucao-content-inner">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- CTA FINAL -->
<div class="solucao-cta-block" style="--cta-color:<?php echo esc_attr( $cor_cat ); ?>">
    <div class="solucao-cta-inner">
        <div class="solucao-cta-icon" style="background:<?php echo esc_attr( $cor_cat ); ?>">
            <i class="bi <?php echo esc_attr( $icone ); ?>"></i>
        </div>
        <h2><?php printf( esc_html__( 'Pronto para implementar o %s?', 'custom-sistemas' ), get_the_title() ); ?></h2>
        <p><?php esc_html_e( 'Fale com nossos especialistas e descubra como podemos ajudar seu município.', 'custom-sistemas' ); ?></p>
        <div class="solucao-cta-actions">
            <?php if ( $cta_link ) : ?>
                <a href="<?php echo esc_url( $cta_link ); ?>" class="btn-custom-primary">
                    <?php echo esc_html( $cta_texto ?: 'Solicitar demonstração' ); ?>
                </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/suporte/' ) ); ?>" class="solucao-cta-link">
                <i class="bi bi-telephone"></i>
                <?php esc_html_e( 'Falar com um especialista', 'custom-sistemas' ); ?>
            </a>
        </div>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
