<?php
/*
Template Name: Digital Transform
*/
?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<?php get_template_part( 'parts/header' ); ?>

<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/header' ); ?>

    <div class="digital-transform-page">
        <div class="container">
            <div class="page-wrapper Internal-pages" id="digital-transform">
                <aside class="page-sticky-sidebar">
                    <div class="sa-scrollspy-nav sticky-navbar" id="sticky-navbar">
                        <a class="sa-ss-nav-item active" href="#solutions-1" data-target="#solutions-1">راهکارها</a>
                        <a class="sa-ss-nav-item" href="#consulting-2" data-target="#consulting-2">مشاوره</a>
                        <a class="sa-ss-nav-item" href="#products-3" data-target="#products-3">خدمات</a>
                        <a class="sa-ss-nav-item" href="#case-study-4" data-target="#case-study-4">بررسی موردی</a>
                    </div>
                </aside>

                <div class="page-content-wrapper">
                    <section class="section-scroll solutions page-section-bottom" id="solutions-1">
                        <div class="sa-paragraph-box first-things">
                            <div class="title">
                                <h1 class="sa-strong-title">راهکارها</h1>
                            </div>
                            <div class="description">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است، و برای شرایط فعلی تکنولوژی
                                    مورد نیاز، و کاربردهای متنوع می باشد.
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است، و برای شرایط فعلی تکنولوژی
                                    مورد نیاز، و کاربردهای متنوع می باشد.
                                </p>
                            </div>
                        </div>
                        <div class="sa-thumbnail-layout">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="sa-tl-item">
                                            <div class="img-wrapper">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                    alt="" />
                                                <div class="sa-tl-title">
                                                    <p>راهکار اول</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    لورم ایپسوم متن ساختگی
                                                    با تولید سادگی نامفهوم
                                                    از صنعت چاپ، و با
                                                    استفاده از طراحان گرافیک
                                                    است.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="sa-tl-item">
                                            <div class="img-wrapper">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                    alt="" />
                                                <div class="sa-tl-title">
                                                    <p>راهکار دوم</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    لورم ایپسوم متن ساختگی
                                                    با تولید سادگی نامفهوم
                                                    از صنعت چاپ، و با
                                                    استفاده از طراحان گرافیک
                                                    است.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="sa-tl-item">
                                            <div class="img-wrapper">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                    alt="" />
                                                <div class="sa-tl-title">
                                                    <p>راهکار سوم</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    لورم ایپسوم متن ساختگی
                                                    با تولید سادگی نامفهوم
                                                    از صنعت چاپ، و با
                                                    استفاده از طراحان گرافیک
                                                    است.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section-scroll consulting page-section-bottom page-section-top" id="consulting-2">
                        <div class="sa-paragraph-box">
                            <div class="title">
                                <h1 class="sa-strong-title">مشاوره</h1>
                            </div>
                            <div class="description">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است، و برای شرایط فعلی تکنولوژی
                                    مورد نیاز، و کاربردهای متنوع می باشد.
                                </p>
                            </div>
                        </div>
                        <div class="sa-cons-img-wrapper">
                            <div class="sa-img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
                                    alt="" />
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها
                                </p>
                            </div>
                            <div class="sa-img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
                                    alt="" />
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="section-scroll products page-section-bottom page-section-top" id="products-3">
                        <div class="sa-paragraph-box">
                            <div class="title">
                                <h1 class="sa-strong-title">خدمات</h1>
                            </div>
                            <div class="description">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ، و با استفاده از
                                    طراحان گرافیک است، چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است، و برای شرایط فعلی تکنولوژی
                                    مورد نیاز، و کاربردهای متنوع می باشد.
                                </p>
                            </div>
                        </div>
                        <div class="sa-thumbnail-layout">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="sa-tl-item">
                                            <div class="img-wrapper">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                    alt="" />
                                                <div class="sa-tl-title">
                                                    <p>خدمت اول</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    لورم ایپسوم متن ساختگی
                                                    با تولید سادگی نامفهوم
                                                    از صنعت چاپ، و با
                                                    استفاده از طراحان گرافیک
                                                    است.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="sa-tl-item">
                                            <div class="img-wrapper">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                    alt="" />
                                                <div class="sa-tl-title">
                                                    <p>خدمت دوم</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    لورم ایپسوم متن ساختگی
                                                    با تولید سادگی نامفهوم
                                                    از صنعت چاپ، و با
                                                    استفاده از طراحان گرافیک
                                                    است.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="sa-tl-item">
                                            <div class="img-wrapper">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
                                                    alt="" />
                                                <div class="sa-tl-title">
                                                    <p>خدمت سوم</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    لورم ایپسوم متن ساختگی
                                                    با تولید سادگی نامفهوم
                                                    از صنعت چاپ، و با
                                                    استفاده از طراحان گرافیک
                                                    است.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section-scroll case-study page-section-top last-things" id="case-study-4">
                        <div class="sa-paragraph-box no-padding">
                            <div class="title">
                                <h1 class="sa-strong-title">
                                    بررسی موردی(Case Study)
                                </h1>
                            </div>
                        </div>
                        <div class="tab-content-wrapper">
                            <div class="tab-content-item border-bottom-light">
                                <div class="tci-description">
                                    <div class="sa-paragraph-box">
                                        <div class="title">
                                            <h5>عنوان Case Study</h5>
                                        </div>
                                        <div class="description">
                                            <p>
                                                لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت
                                                چاپ، و با استفاده از طراحان
                                                گرافیک است، چاپگرها و متون
                                                بلکه روزنامه و مجله در ستون
                                                و سطرآنچنان که لازم است، و
                                                برای شرایط فعلی تکنولوژی
                                                مورد نیاز، و کاربردهای متنوع
                                                با هدف بهبود ابزارهای
                                                کاربردی می باشد، کتابهای
                                                زیادی در شصت و سه درصد گذشته
                                                حال و آینده، شناخت فراوان
                                                جامعه و متخصصان را می طلبد.
                                            </p>
                                            <span class="key-moments-date">12 آبان 1402</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tci-img">
                                    <div class="sa-img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content-item border-bottom-light">
                                <div class="tci-description">
                                    <div class="sa-paragraph-box">
                                        <div class="title">
                                            <h5>عنوان رویداد</h5>
                                        </div>
                                        <div class="description">
                                            <p>
                                                لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت
                                                چاپ، و با استفاده از طراحان
                                                گرافیک است، چاپگرها و متون
                                                بلکه روزنامه و مجله در ستون
                                                و سطرآنچنان که لازم است، و
                                                برای شرایط فعلی تکنولوژی
                                                مورد نیاز، و کاربردهای متنوع
                                                با هدف بهبود ابزارهای
                                                کاربردی می باشد، کتابهای
                                                زیادی در شصت و سه درصد گذشته
                                                حال و آینده، شناخت فراوان
                                                جامعه و متخصصان را می طلبد.
                                            </p>
                                            <span class="key-moments-date">12 آبان 1402</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tci-img">
                                    <div class="sa-img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
                                            alt="" />
                                    </div>
                                </div>
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