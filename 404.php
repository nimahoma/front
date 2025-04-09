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



	<div class="page 404-page">
			<div class="wrapper-404">
				<div class="vector-wrapper">
					<img
						class="wow animate__zoomIn"
						src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png"
						alt=""
					/>
				</div>
				<div class="content-wrapper-404">
					<p>
						متأسفیم، صفحه مورد نظر شما یافت نشد یا در حال حاضر در
						دسترس نمی‌باشد.
						<br />
						لطفاً از منوی اصلی استفاده کرده یا به صفحه نخست
						بازگردید.
					</p>
					<!-- <h5>گشتم نبود نگرد نیست!</h5> -->
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