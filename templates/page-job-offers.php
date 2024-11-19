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
                                <h1 class="sa-strong-title">
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
                                    <div class="ovc-item">
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-2.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>صداقت و شفافیت</p>
                                        </div>
                                    </div>
                                    <div class="ovc-item">
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-4.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>مسئولیت‌پذیری</p>
                                        </div>
                                    </div>
                                    <div class="ovc-item">
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-5.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>یادگیری و یاددهی</p>
                                        </div>
                                    </div>
                                    <div class="ovc-item">
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-6.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>مشتری مداری</p>
                                        </div>
                                    </div>
                                    <div class="ovc-item">
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-3.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="title-wrapper">
                                            <p>نوآوری</p>
                                        </div>
                                    </div>
                                    <div class="ovc-item">
                                        <div class="img-wrapper">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-1.png"
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
                                <h1 class="sa-strong-title">تیم‌ها</h1>
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
                                    <div class="sa-employment-steps-item">
                                        ۱<span class="bottom"
                                            >بررسی رزومه</span
                                        >
                                    </div>
                                    <div class="sa-employment-steps-item">
                                        ۲<span class="top"
                                            >ارزیابی و مصاحبه عمومی
                                            (اولیه)</span
                                        >
                                    </div>
                                    <div class="sa-employment-steps-item">
                                        ۳<span class="bottom"
                                            >مصاحبه تخصصی با معاونت‌های فنی
                                            یا اجرایی</span
                                        >
                                    </div>
                                    <div class="sa-employment-steps-item">
                                        ۴<span class="top">مصاحبه جذب</span>
                                    </div>
                                    <div class="sa-employment-steps-item">
                                        ۵<span class="bottom"
                                            >تکمیل مدارک استخدام</span
                                        >
                                    </div>
                                    <div class="sa-employment-steps-item">
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
                <h3 class="modal-title" id="categoryModalLabel<?php echo esc_attr($category->term_id); ?>">Related Job
                    Offers for <?php echo esc_html($category->name); ?></h3>
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
                                <h1 class="sa-strong-title">
                                    به ما بپیوندید
                                </h1>
                            </div>
                        </div>

                        <div class="sa-joinus-form">
                            <div class="wrapper">
                                <form id="sa_joinus_form">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    id="name-label"
                                                    for="name"
                                                    >نام کامل خود را وارد
                                                    کنید</label
                                                >
                                                <input
                                                    type="text"
                                                    name="name"
                                                    id="name"
                                                    placeholder="نام و نام خانوادگی"
                                                    class="form-control"
                                                    required=""
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    id="email-label"
                                                    for="email"
                                                    >ایمیل</label
                                                >
                                                <input
                                                    type="email"
                                                    name="email"
                                                    id="email"
                                                    placeholder="example@example.com"
                                                    class="form-control"
                                                    required=""
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    id="file-label"
                                                    for="file"
                                                    >آپلود رزومه</label
                                                >
                                                <input
                                                    type="file"
                                                    name="file"
                                                    id="file"
                                                    placeholder="روزمه خود را آپلود کنید"
                                                    class="form-control"
                                                    required=""
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="phone"
                                                    >شماره تماس</label
                                                >
                                                <div class="relative">
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        maxlength="11"
                                                        oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                                                        required=""
                                                        placeholder="09123456789"
                                                        name="phone"
                                                        id="phone"
                                                        aria-describedby="phone-help"
                                                        aria-invalid="false"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label
                                                    >اطلاعات تکمیلی</label
                                                >
                                                <textarea
                                                    id="comments"
                                                    class="form-control"
                                                    name="comment"
                                                    rows="5"
                                                    placeholder="لطفا توضیحات خود را در این قسمت بنویسید"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sa-dt-btn">
                                        <button
                                            class="saei-btn"
                                            type="submit"
                                            id="submit"
                                        >
                                            <span>ارسال درخواست</span>
                                        </button>
                                    </div>
                                </form>
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