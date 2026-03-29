<?php
/**
 * footer.php
 * Fecha o body, inclui newsletter + footer e chama wp_footer().
 */
defined( 'ABSPATH' ) || exit;
?>

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<?php wp_footer(); ?>
</body>
</html>
