<?php
/**
 * index.php
 * Template padrão — lista de posts ou conteúdo genérico.
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="container py-5" style="padding-top: 120px !important;">
    <?php if ( have_posts() ) : ?>
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-12 mb-4' ); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        </div>
        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <p><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'custom-sistemas' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
