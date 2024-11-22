<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/web-app-manifest-192x192.png">
    <link rel="apple-touch-icon" sizes="512x512" href="<?php echo get_template_directory_uri(); ?>/assets/img/web-app-manifest-512x512.png">

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/header' ); ?>

    <div class="job-offer-single-page">
        <div class="container">
            <div class="breadcrumb-wrapper first-things">
                <?php saeiTheme_breadcrumb(); ?>
            </div>
            <div class="page-wrapper Internal-pages" id="job-offer-single">
                <div class="page-content-wrapper job-offer-single-content-wrapper">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                    ?>

                    <div <?php post_class(); ?>>
                        <section class="job-offer-single-content page-section-bottom">

                            <div class="sa-paragraph-box">
                                <div class="title">
                                    <?php the_title( '<h1 class="sa-strong-title">', '</h1>' ); ?>
                                </div>
                                <div class="single-thumbnail">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'full', array( 'class' => 'featured-image' ) );
                                        }
                                    ?>
                                </div>
                                <div class="entry-content">
                                    <?php
                                    the_content();
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>
                <aside class="job-offer-single-sidebar">

                </aside>
            </div>
        </div>
    </div>

    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>

</html>