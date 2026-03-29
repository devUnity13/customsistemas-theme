<?php
/**
 * single.php
 * Template para posts individuais do blog.
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="container py-5" style="padding-top: 120px !important;">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <p class="text-muted"><?php the_date(); ?> · <?php the_author(); ?></p>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="mb-4"><?php the_post_thumbnail( 'large', [ 'class' => 'img-fluid rounded' ] ); ?></div>
            <?php endif; ?>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
