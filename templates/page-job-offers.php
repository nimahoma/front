<?php
/*
Template Name: Job Offers
*/
?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/header' ); ?>

    <div class="job-offers-page">
        <div class="container">
            <div class="page-wrapper Internal-pages" id="job-offers">
                <aside class="page-sticky-sidebar">
                    <div class="sa-scrollspy-nav sticky-navbar" id="sticky-navbar">
                        <a class="sa-ss-nav-item active" href="#know-us-1" data-target="#know-us-1">ما را بشناسید</a>
                        <a class="sa-ss-nav-item" href="#sa-teams-2" data-target="#sa-teams-2">تیم‌ها</a>
                        <a class="sa-ss-nav-item" href="#sa-join-us-3" data-target="#sa-join-us-3">به ما بپیوندید</a>
                    </div>
                </aside>

                <div class="page-content-wrapper">
                    <section class="section-scroll know-us page-section-bottom" id="know-us-1">
                        <div class="sa-paragraph-box first-things">
                            <div class="title">
                                <h1 class="sa-strong-title">
                                    ما را بشناسید
                                </h1>
                            </div>
                            <div class="sa-paragraph-box no-padding">
                                <div class="title">
                                    <h4>کار در ساعی به چه معنیست؟</h4>
                                </div>
                                <div class="description">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم از صنعت چاپ، و با
                                        استفاده از طراحان گرافیک است،
                                        چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان که لازم است، و
                                        برای شرایط فعلی تکنولوژی مورد نیاز،
                                        و کاربردهای متنوع با هدف بهبود
                                        ابزارهای کاربردی می باشد، کتابهای
                                        زیادی در شصت و سه درصد گذشته حال و
                                        آینده، شناخت فراوان جامعه و متخصصان
                                        را می طلبد.
                                    </p>
                                </div>
                            </div>
                            <div class="sa-img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-know-us.jpg"
                                    alt="" />
                            </div>
                        </div>
                        <div class="sa-paragraph-box">
                            <div class="title">
                                <h4>ارزش‌های ما</h4>
                            </div>
                            <div class="description mb-3">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است، و برای شرایط فعلی تکنولوژی
                                    مورد نیاز می باشد.
                                </p>
                            </div>
                            <div class="sa-thumbnail-layout mb-0">
                                <div class="wrapper">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="sa-tl-item">
                                                <div class="img-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                        alt="" />
                                                    <div class="sa-tl-title">
                                                        <p>ارزش اول</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="sa-tl-item">
                                                <div class="img-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                        alt="" />
                                                    <div class="sa-tl-title">
                                                        <p>ارزش دوم</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="sa-tl-item">
                                                <div class="img-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                        alt="" />
                                                    <div class="sa-tl-title">
                                                        <p>ارزش سوم</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section-scroll sa-teams page-section-bottom page-section-top" id="sa-teams-2">
                        <div class="sa-paragraph-box no-padding">
                            <div class="title">
                                <h1 class="sa-strong-title">تیم‌ها</h1>
                            </div>
                            <div class="description">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است، و برای شرایط فعلی تکنولوژی
                                    مورد نیاز،
                                </p>
                            </div>
                        </div>

                        <?php
						// Get all categories (departments)
						$categories = get_categories(array(
							'taxonomy' => 'category',
							'hide_empty' => false,
						));

						if ($categories) {
							echo '<div class="sa-teams-item-layout">';

							$index = 0;
							foreach ($categories as $category) {
								if ($category->slug === 'uncategorized' || $category->term_id == 1) {
									continue;
								}
						?>

                        <div class="sa-teams-item">
                            <div class="sa-ti-wrapper">
                                <div class="title">
                                    <h3><?php echo esc_html($category->name); ?></h3>
                                </div>

                                <div class="subtitle">
                                    <p><?php echo esc_html($category->description); ?></p>
                                </div>
                                <button type="button" class="sa-ti-modal-link" data-bs-toggle="modal"
                                    data-bs-target="#categoryModal<?php echo esc_attr($category->term_id); ?>">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chevron-vector.png"
                                            alt="" />
                                        فرصت‌های شغلی
                                    </span>
                                </button>
                            </div>
                        </div>

                        <?php   
							$index++;
							}

							echo '</div>'; // Close "sa-teams-item-layout"
						}

						foreach ($categories as $category) {
						?>
                        <!-- Modal Structure -->
                        <div class="modal fade" id="categoryModal<?php echo esc_attr($category->term_id); ?>"
                            tabindex="-1"
                            aria-labelledby="categoryModalLabel<?php echo esc_attr($category->term_id); ?>"
                            aria-hidden="true">
                            <div
                                class="sa-modal-teams modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title"
                                            id="categoryModalLabel<?php echo esc_attr($category->term_id); ?>">
                                            <?php echo esc_html($category->name); ?> موقعیت‌های شغلی تیم</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i class="fa-sharp-duotone fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php saeiTheme_category_jobs_accordion($category->term_id); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
						}
						?>
                    </section>

                    <section class="section-scroll sa-join-us last-things page-section-top" id="sa-join-us-3">
                        <div class="sa-infographic-banner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp" alt="" />
                        </div>
                        <div class="sa-paragraph-box no-padding">
                            <div class="title">
                                <h1 class="sa-strong-title">
                                    به ما بپیوندید
                                </h1>
                            </div>
                            <div class="description">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است.
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
            </div>
        </div>
    </div>

    <!-- Page JavaScript -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabsWrapper = document.getElementById("tabs-wrapper");
        const tabs = document.querySelectorAll(".tab");
        const prevArrow = document.getElementById("prev-arrow");
        const nextArrow = document.getElementById("next-arrow");
        const navbarLinks =
            document.querySelectorAll(".sticky-navbar a");

        let activeIndex = 0;

        // Scrollspy functionality
        function onScroll() {
            let currentSection = "";
            document
                .querySelectorAll(".section-scroll")
                .forEach((section) => {
                    const sectionTop = section.offsetTop;
                    if (pageYOffset >= sectionTop - 50) {
                        currentSection = section.getAttribute("id");
                    }
                });

            navbarLinks.forEach((link) => {
                link.classList.remove("active");
                if (
                    link.getAttribute("data-target") ===
                    `#${currentSection}`
                ) {
                    link.classList.add("active");
                }
            });
        }

        window.addEventListener("scroll", onScroll);

        navbarLinks.forEach((link) => {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                const targetId = this.getAttribute("data-target");
                document
                    .querySelector(targetId)
                    .scrollIntoView({
                        behavior: "smooth"
                    });
            });
        });
    });
    </script>

    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>