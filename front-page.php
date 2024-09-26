<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if ( is_home() || is_front_page() ) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
        } else {
            wp_title('|', true, 'right');
            bloginfo('name');
        }
        ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/header' ); ?>

    <div class="page-wrapper">
        <section class="about-us">
            <div class="wrapper">
                <div class="hero-banner sa-banner">
                    <div class="container">
                        <div class="sa-b-content">
                            <h1 class="sa-strong-title sa-slogan-color mb-3 en-font">
                                Your Partner in <br />
                                Digital Transformation Journey.
                            </h1>
                            <p class="sa-slogan-color">
                                در ساعی، با ارائه پیشرفته‌ترین و مناسب‌ترین
                                راهکارهای فناوری، کسب و کارها را در مسیر رشد
                                و تحول دیجیتال همراهی می‌کنیم. با ترسیم
                                افق‌های استراتژیک و بلندمدت، اطمینان می‌دهیم
                                که از مراحل اولیه تأمین فناوری تا رسیدن به
                                موفقیت پایدار، در تمامی گام‌ها به عنوان شریک
                                تجاری قابل اعتماد در کنار شما خواهیم بود.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="about-us-plus">
            <div class="aup-title">
                <h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h4>
            </div>
            <div class="aup-btn">
                <button class="saei-btn sa-revers">
                    <span>بیشتر بخوانید...</span>
                </button>
            </div>
        </div>

        <section class="sa-services">
            <div class="container">
                <div class="wrapper sec-padding">
                    <div class="sa-s-title">
                        <h1 class="sa-strong-title">
                            لورم ایپسوم متن ساختگی
                        </h1>
                    </div>
                    <div class="sa-s-content">
                        <div class="sa-s-c-top">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="sa-s-c-t-img w-100">
                                        <img class="w-100"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="sa-s-c-t-text">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم از صنعت چاپ، و با
                                            استفاده از طراحان گرافیک است،
                                            چاپگرها و متون بلکه روزنامه و
                                            مجله در ستون و سطرآنچنان که لازم
                                            است، و برای شرایط فعلی تکنولوژی
                                            مورد نیاز، و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می
                                            باشد،
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-s-c-bottom">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="sa-s-c-b-text">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم از صنعت چاپ، و با
                                            استفاده از طراحان گرافیک است،
                                            چاپگرها و متون بلکه روزنامه و
                                            مجله در ستون و سطرآنچنان که لازم
                                            است، و برای شرایط فعلی تکنولوژی
                                            مورد نیاز، و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می
                                            باشد،
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="sa-s-c-t-img w-100">
                                        <img class="w-100"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sa-team-banner">
            <div class="container">
                <div class="wrapper">
                    <div class="sa-t-content">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="sa-t-c-title">
                                    <h2 class="sa-strong-title mb-0">
                                        تیم‌ها
                                    </h2>
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم از صنعت چاپ، و با
                                        استفاده از طراحان لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ، و با استفاده از طراحان
                                    </p>
                                    <div class="sa-t-c-btn">
                                        <button class="saei-btn">
                                            به ما بپیوندید
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="sa-t-c-card">
                                    <h5 class="mb-2 en-font">
                                        WEB DEVELOPMENT
                                    </h5>
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم از صنعت چاپ، و با
                                        استفاده از طراحان لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ، و با استفاده از طراحان با
                                        تولید سادگی نامفهوم از صنعت چاپ،
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="sa-t-c-card">
                                    <h5 class="mb-2 en-font">VAS</h5>
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم از صنعت چاپ، و با
                                        استفاده از طراحان لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ، و با استفاده از طراحان با
                                        تولید سادگی نامفهوم از صنعت چاپ،
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="sa-t-c-card">
                                    <h5 class="mb-2 en-font">BigData</h5>
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید
                                        سادگی نامفهوم از صنعت چاپ، و با
                                        استفاده از طراحان لورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ، و با استفاده از طراحان با
                                        تولید سادگی نامفهوم از صنعت چاپ،
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sa-skills sec-padding">
            <div class="container">
                <div class="wrapper">
                    <div class="sa-dt-about text-center">
                        <h1 class="sa-strong-title">توان‌مندی‌ها</h1>
                        <p class="mb-4">
                            لورم ایپسوم متن ساختگی است. لورم ایپسوم متن
                            ساختگی استلورم ایپسوم متن ساختگی<br />
                            استلورم ایپسوم متن ساختگی استلورم ایپسوم متن
                            ساختگی استلورم ایپسوم متن ساختگی<br />
                            استلورم ایپسوم متن ساختگی استلورم ایپسوم متن
                            ساختگی استلورم ایپسوم متن ساختگی<br />
                        </p>
                    </div>
                    <div class="sa-skills-tiles">
                        <div class="sa-skills-tiles-wrapper">
                            <div class="sa-skills-tiles-item">
                                <div class="sa-background-img skill-dss">
                                    <div class="title">
                                        <h4 class="en-font">
                                            Digital Security Solutions
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="sa-skills-tiles-item">
                                <div class="sa-background-img skill-ms">
                                    <div class="title">
                                        <h4 class="en-font">
                                            Managed Services
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="sa-skills-tiles-item">
                                <div class="sa-background-img skill-bds">
                                    <div class="title">
                                        <h4 class="en-font">
                                            Big Data Services
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="sa-skills-tiles-item">
                                <div class="sa-background-img skill-dt">
                                    <div class="title">
                                        <h4 class="en-font">
                                            Digital Transformation
                                            <br />
                                            Consulting Services
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="sa-skills-tiles-item">
                                <div class="sa-background-img skill-ts">
                                    <div class="title">
                                        <h4 class="en-font">
                                            Telecom Solution
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="sa-skills-tiles-item">
                                <div class="sa-background-img skill-dea">
                                    <div class="title">
                                        <h4 class="en-font">
                                            Digital Enterprise
                                            Application
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>

</html>