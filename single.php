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

                    <section class="section-scroll sa-join-us last-things pt-3" id="sa-join-us-3">
                        <div class="sa-paragraph-box no-padding">
                            <div class="title mb-0">
                                <h1 class="sa-strong-title">
                                    علاقه‌مند هستید؟
                                </h1>
                            </div>
                            <div class="description">
                                <p>
                                    با تکمیل فرم زیر کارشناسان ما در اولین
                                    فرصت با شما در ارتباط خواهند بود.
                                </p>
                            </div>
                        </div>
                        <div class="sa-joinus-form">
                            <div class="wrapper">
                                <?php echo do_shortcode('[contact-form-7 id="94b3bf1" title="فرم تماس"]'); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <aside class="job-offer-single-sidebar">
                    <div class="job-offer-single-sidebar-sticky">
                        <?php get_sidebar(); ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>

</html>