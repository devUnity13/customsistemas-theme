<?php
/**
 * 404.php
 * Página de erro 404.
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="container text-center py-5" style="padding-top: 160px !important;">
    <div style="max-width:520px;margin:0 auto;">
        <h1 style="font-size:6rem;color:var(--blue);line-height:1;">404</h1>
        <h2><?php esc_html_e( 'Página não encontrada', 'custom-sistemas' ); ?></h2>
        <p class="text-muted mb-4"><?php esc_html_e( 'A página que você procura não existe ou foi movida.', 'custom-sistemas' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-custom-primary">
            <i class="bi bi-house"></i> <?php esc_html_e( 'Voltar ao início', 'custom-sistemas' ); ?>
        </a>
    </div>
</main>

<?php get_footer(); ?>
