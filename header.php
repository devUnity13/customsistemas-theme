<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Page Loader -->
<div id="page-loader">
    <div class="loader-progress"></div>
    <img src="<?php echo custom_img( 'custom_logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="loader-logo">
    <div class="loader-spinner-wrap">
        <div class="loader-spinner"></div>
        <span class="loader-text"><?php esc_html_e( 'Carregando...', 'custom-sistemas' ); ?></span>
    </div>
</div>

<?php get_template_part( 'template-parts/header/nav' ); ?>
