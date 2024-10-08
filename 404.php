<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/header' ); ?>

    <div class="job-offer-single-page">
        <div class="container">
            <div class="breadcrumb-wrapper first-things">
                <?php 
                    saeiTheme_breadcrumb();
                    ?>
            </div>
            <div class="page-wrapper Internal-pages" id="job-offer-single">
                <div class="page-content-wrapper job-offer-single-content-wrapper">
                    <div class="404-content">
                        ارور 404 - صفحه پیدا نشد ...
                    </div>
                </div>
                <aside class="job-offer-single-sidebar">
                    <div class="job-offer-single-sidebar-sticky">

                    </div>
                </aside>
            </div>
        </div>
    </div>

    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>

</html>