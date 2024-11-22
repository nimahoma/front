<?php
/*
Template Name: Job Offers
*/
?>

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

	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/header' ); ?>

    <div class="job-offers-page">
        <div class="container">
            <div class="page-wrapper Internal-pages" id="job-offers">
                <aside class="page-sticky-sidebar">
                    <div
                        class="sa-scrollspy-nav sticky-navbar"
                        id="sticky-navbar"
                    >
                        <a
                            class="sa-ss-nav-item active"
                            href="#know-us-1"
                            data-target="#know-us-1"
                            >ما را بشناسید</a
                        >
                        <a
                            class="sa-ss-nav-item"
                            href="#sa-teams-2"
                            data-target="#sa-teams-2"
                            >تیم‌ها</a
                        >
                        <a
                            class="sa-ss-nav-item"
                            href="#sa-join-us-4"
                            data-target="#sa-join-us-4"
                            >به ما بپیوندید</a
                        >
                    </div>
                </aside>

                <div class="page-content-wrapper">
                    <section
                        class="section-scroll know-us page-section-bottom"
                        id="know-us-1"
                    >
                        <div class="sa-paragraph-box first-things">
                            <div class="title">
                                <h1
                                    class="sa-strong-title sa-aos"
                                    data-aos="fade-up"
								>
                                    ما را بشناسید
                                </h1>
                            </div>
                            <div
                                class="sa-paragraph-box page-section-bottom"
                            >
                                <div class="title">
                                    <h4>فضای کاری ساعی</h4>
                                </div>
                                <div class="description">
                                    <p>
                                        در ساعی، با تعهد به اصول اخلاق
                                        حرفه‌ای، همواره می‌کوشیم محیط کاری
                                        پویا، امن و انسان‌محور برای کارکنان
                                        خود فراهم سازیم برای پیوستن به این
                                        تیم، علاوه بر تعهد به ارزش‌های
                                        سازمانی، باید به یادداشته باشیم که
                                        رضایت مشتریان، ارزشمندترین بخش از هر
                                        سازمان است بر این اساس، فرهنگ و
                                        روحیه مشتری‌مداری باید به طور جدی در
                                        سراسر سازمان و توسط تمامی کارکنان
                                        رعایت شود.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sa-paragraph-box">
                            <div class="title mb-4">
                                <h4>ارزش‌های ما در ساعی</h4>
                            </div>
                            <div
                                class="sa-thumbnail-layout our-values-cards mb-0"
                            >
                                <div class="wrapper">
                                    <div
											class="ovc-item sa-aos"
											data-aos="fade-right"
											data-aos-offset="50"
											data-aos-easing="ease-in-sine"
											data-aos-duration="900"
										>
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-1.svg"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>صداقت و شفافیت</p>
                                        </div>
                                    </div>
                                    <div
											class="ovc-item sa-aos"
											data-aos="fade-right"
											data-aos-offset="50"
											data-aos-easing="ease-in-sine"
											data-aos-duration="1000"
										>
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-2.svg"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>مسئولیت‌پذیری</p>
                                        </div>
                                    </div>
                                    <div
											class="ovc-item sa-aos"
											data-aos="fade-right"
											data-aos-offset="50"
											data-aos-easing="ease-in-sine"
											data-aos-duration="1100"
										>
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-3.svg"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>یادگیری و یاددهی</p>
                                        </div>
                                    </div>
                                    <div
											class="ovc-item sa-aos"
											data-aos="fade-right"
											data-aos-offset="50"
											data-aos-easing="ease-in-sine"
											data-aos-duration="1200"
										>
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-4.svg"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>مشتری مداری</p>
                                        </div>
                                    </div>
                                    <div
											class="ovc-item sa-aos"
											data-aos="fade-right"
											data-aos-offset="50"
											data-aos-easing="ease-in-sine"
											data-aos-duration="1300"
										>
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-5.svg"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>نوآوری</p>
                                        </div>
                                    </div>
                                    <div
											class="ovc-item sa-aos"
											data-aos="fade-right"
											data-aos-offset="50"
											data-aos-easing="ease-in-sine"
											data-aos-duration="1400"
										>
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-6.svg"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>احترام به ارزش‌های انسانی</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section
                        class="section-scroll sa-teams page-section-bottom page-section-top"
                        id="sa-teams-2"
                    >
                        <div class="sa-paragraph-box no-padding">
                            <div class="title">
                                <h1
                                    class="sa-strong-title sa-aos"
                                    data-aos="fade-up"
                                >
                                    تیم‌ها
                                </h1>
                            </div>
                        </div>
                        <div
                            class="sa-teams-item-layout page-section-bottom"
                        >


                        
                        <?php
                            $categories = get_categories(array(
                                'taxonomy' => 'category',
                                'hide_empty' => false,
                            ));

                            if ($categories) {
                                
                                $index = 0;
                                $args = [
                                    'taxonomy'   => 'category',
                                    'hide_empty' => false,
                                    'exclude'    => [1],
                                    'orderby'    => 'term_id', // یا 'term_id', 'slug', 'count'
                                ];
                                $categories = get_terms($args);
                                foreach ($categories as $category) {
                                    ?>
                            <div class="sa-teams-item">
                                <div class="sa-ti-wrapper">
                                    <div class="title">
                                        <h5 class="en-font sa-teams-titles"><?php echo esc_html($category->name); ?></h5>
                                    </div>

                                    <div class="subtitle">
                                    <p><?php echo esc_html($category->description); ?></p>
                                    </div>
                                    
                                    <div class="sa-ti-btn">
                                        <button type="button" class="sa-ti-modal-link" data-bs-toggle="modal"
                                            data-bs-target="#categoryModal<?php echo esc_attr($category->term_id); ?>">
                                            <span>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/chevron-vector.png"
                                                    alt=""
                                                />
                                                فرصت‌های شغلی
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <?php   
                                $index++;
                                }
                            }
                        ?>


                        </div>

                        
                        <div class="sa-employment-steps page-section-top">
                            <div class="sa-paragraph-box no-padding">
                                <div class="title mb-5">
                                    <h4>مراحل استخدام و ورود به ساعی</h4>
                                </div>
                            </div>
                            <div class="sa-employment-steps-box">
                                <div class="wrapper">
                                    <div
                                        class="sa-employment-steps-item"
                                        data-aos="fade-up"
                                        data-aos-duration="1000"
                                        data-aos-anchor-placement="top-bottom"
                                    >
                                        ۱<span class="bottom"
                                            >بررسی رزومه</span
                                        >
                                    </div>
                                    <div
                                        class="sa-employment-steps-item"
                                        data-aos="fade-down"
                                        data-aos-duration="1200"
                                        data-aos-anchor-placement="top-bottom"
                                    >
                                        ۲<span class="top"
                                            >ارزیابی و مصاحبه عمومی
                                            (اولیه)</span
                                        >
                                    </div>
                                    <div
                                        class="sa-employment-steps-item"
                                        data-aos="fade-up"
                                        data-aos-duration="1300"
                                        data-aos-anchor-placement="top-bottom"
                                    >
                                        ۳<span class="bottom"
                                            >مصاحبه تخصصی با معاونت‌های فنی
                                            یا اجرایی</span
                                        >
                                    </div>
                                    <div
                                        class="sa-employment-steps-item"
                                        data-aos="fade-down"
                                        data-aos-duration="1500"
                                        data-aos-anchor-placement="top-bottom"
                                    >
                                        ۴<span class="top">مصاحبه جذب</span>
                                    </div>
                                    <div
                                        class="sa-employment-steps-item"
                                        data-aos="fade-up"
                                        data-aos-duration="1600"
                                        data-aos-anchor-placement="top-bottom"
                                    >
                                        ۵<span class="bottom"
                                            >تکمیل مدارک استخدام</span
                                        >
                                    </div>
                                    <div
                                        class="sa-employment-steps-item"
                                        data-aos="fade-down"
                                        data-aos-duration="1800"
                                        data-aos-anchor-placement="top-bottom"
                                    >
                                        ۶<span class="top"
                                            >شروع به کار و معرفی به
                                            تیم</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php   

                    // Loop through categories again to create modals (outside of the grid)
                    foreach ($categories as $category) {
                        ?>
                    <!-- Modal Structure -->
                    <div class="modal fade" id="categoryModal<?php echo esc_attr($category->term_id); ?>" tabindex="-1"
                        aria-labelledby="categoryModalLabel<?php echo esc_attr($category->term_id); ?>" aria-hidden="true">
                        <div class="sa-modal-teams modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="categoryModalLabel<?php echo esc_attr($category->term_id); ?>">
                                        <?php echo esc_html($category->name); ?></h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa-sharp-duotone fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        // Call the function to generate the accordion for this category
                                        saeiTheme_category_jobs_accordion($category->term_id);
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?>

                    <section
                        class="section-scroll sa-join-us last-things page-section-top"
                        id="sa-join-us-4"
                    >
                        <div class="sa-paragraph-box no-padding">
                            <div class="title">
                                <h1
                                    class="sa-strong-title sa-aos"
                                    data-aos="fade-up"
                                >
                                    به ما بپیوندید
                                </h1>
                            </div>
                        </div>

                        <div class="sa-joinus-form">
                            <div class="wrapper">
                            <?php
                                echo do_shortcode('[contact-form-7 id="94b3bf1" title="فرم تماس"]');
                            ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    
    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>