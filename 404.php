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

    <div class="page 404-page">
        <div class="wrapper-404">
            <div class="vector-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.webp" alt="" />
            </div>
            <div class="content-wrapper-404">
                <p>
                    متأسفانه صفحه‌ای که به دنبال آن هستید وجود ندارد یا حذف
                    شده
                </p>
                <h5>گشتم نبود نگرد نیست!</h5>
                <a href="https://3dsun.ir/">
                    <div class="arrow">
                        <span></span>
                        <span></span>
                    </div>
                    <span class="home-404">صفحه اصلی</span>
                </a>
            </div>
        </div>
    </div>

    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>

</html>