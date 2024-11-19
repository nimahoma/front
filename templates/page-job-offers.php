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
                            <div class="sa-teams-item">
                                <div class="sa-ti-wrapper">
                                    <div class="title">
                                        <h5 class="en-font sa-teams-titles">
                                            NOC (Network
                                            <br />
                                            Operation System)
                                        </h5>
                                    </div>
                                    <div class="subtitle">
                                        <p>
                                            واحد خدمات مدیریت شده و امنیت
                                            ساعی به ارائه پشتیبانی جامع در
                                            تمامی نیازهای زیرساختی و امنیتی
                                            به سازمانهای بزرگ اختصاص دارد.
                                            با بیش از یک دهه تجربه در ارائه
                                            طیف گسترده‌ای از خدمات شامل
                                            مدیریت حرفه‌ای سرویس‌ها، مرکز
                                            عملیات شبکه و مرکز عملیات امنیت
                                            شبانه روزی ، میتوانید مطمئن
                                            باشید که سرویسهای دیجیتال سازمان
                                            شما همواره در دسترس، کارآمد امن
                                            و همسو با اهداف کسب‌وکار شما
                                            باشد
                                        </p>
                                    </div>
                                    <button class="sa-ti-modal-link">
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
                            <div class="sa-teams-item">
                                <div class="sa-ti-wrapper">
                                    <div class="title">
                                        <h5 class="en-font sa-teams-titles">
                                            Digital Security
                                        </h5>
                                    </div>
                                    <div class="subtitle">
                                        <p>
                                            این تیم وظیفه خطیر حفاظت از
                                            سیستمها و داده های مشتریان را بر
                                            عهده داشته و با استفاده از
                                            محصولات روز دنیا بالاترین سطح
                                            امنیت را تضمین میکند
                                        </p>
                                    </div>
                                    <div class="sa-ti-btn">
                                        <button class="sa-ti-modal-link">
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
                            <div class="sa-teams-item">
                                <div class="sa-ti-wrapper">
                                    <div class="title">
                                        <h5 class="en-font sa-teams-titles">
                                            Data Services
                                        </h5>
                                    </div>
                                    <div class="subtitle">
                                        <p>
                                            تیم دیتای ما با جمع‌آوری داده‌ها
                                            از منابع مختلف، تضمین صحت آن‌ها
                                            و تحلیل و پردازش داده‌ها،
                                            خروجیهای ارزشمندی برای
                                            تصمیم‌گیری‌های هوشمندانه به
                                            مشتریان ارائه می‌دهد
                                        </p>
                                    </div>
                                    <div class="sa-ti-btn">
                                        <button class="sa-ti-modal-link">
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
                            <div class="sa-teams-item">
                                <div class="sa-ti-wrapper">
                                    <div class="title">
                                        <h5 class="en-font sa-teams-titles">
                                            Back Office
                                        </h5>
                                    </div>
                                    <div class="subtitle">
                                        <p>
                                            ستون فقرات شرکت! یک تیم چابک،
                                            صمیمی، حرفه ای و همواره در دسترس
                                            که عملیات روزانه را هدایت میکند
                                        </p>
                                    </div>
                                    <div class="sa-ti-btn">
                                        <button class="sa-ti-modal-link">
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
                            <div class="sa-teams-item">
                                <div class="sa-ti-wrapper">
                                    <div class="title">
                                        <h5 class="en-font sa-teams-titles">
                                            PMO (Project
                                            <br />
                                            Management Office)
                                        </h5>
                                    </div>
                                    <div class="subtitle">
                                        <p>
                                            ترکیبی از تجربه، دانش و تعهد تیم
                                            مدیریت پروژه را به یکی از
                                            مهمترین موتورهای پیش برنده ساعی
                                            تبدیل کرده است. دهها پروژه موفق
                                            در طی سالهای اخیر دستاورد بی
                                            نظیر این تیم بوده است
                                        </p>
                                    </div>
                                    <div class="sa-ti-btn">
                                        <button
                                            type="button"
                                            class="sa-ti-modal-link"
                                            data-bs-toggle="modal"
                                            data-bs-target="#teams-hr_modal"
                                        >
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
                            <div class="sa-teams-item">
                                <div class="sa-ti-wrapper">
                                    <div class="title">
                                        <h5 class="en-font sa-teams-titles">
                                            Managed Services
                                        </h5>
                                    </div>
                                    <div class="subtitle">
                                        <p>
                                            این تیم به عنوان یک بازوی
                                            استراتژیک، همراه مشتریان است تا
                                            از بهره‌برداری بهینه و کارآمد از
                                            سیستمها اطمینان حاصل شود. یک
                                            دقیق تضمین می‌کند که سیستم‌ها
                                            همیشه در دسترس، ایمن و با
                                            بالاترین کارایی عمل کنند، تا
                                            مشتریان با آرامش خاطر به تمرکز
                                            روی هسته اصلی کسب‌وکار خود
                                            بپردازند
                                        </p>
                                    </div>
                                    <button class="sa-ti-modal-link">
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

                    <!-- <div
                        class="modal fade"
                        id="teams-hr_modal"
                        data-bs-keyboard="false"
                        tabindex="-1"
                        aria-hidden="true"
                    >
                        <div
                            class="sa-modal-teams modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
                        >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">
                                        HR موقعیت‌های شغلی تیم
                                    </h3>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    >
                                        <i
                                            class="fa-sharp-duotone fa-solid fa-xmark"
                                        ></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div
                                        class="accordion"
                                        id="HR_accordion"
                                    >
                                        <div class="accordion-item">
                                            <h2
                                                class="accordion-header"
                                                id="head_HR"
                                            >
                                                <button
                                                    class="accordion-button"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#HR_teams-xxx"
                                                    aria-expanded="true"
                                                    aria-controls="HR_teams-xxx"
                                                >
                                                    <i
                                                        class="fa-sharp-duotone fa-solid fa-caret-left"
                                                    ></i>
                                                    برنامه نویس ارشد
                                                    Front-End
                                                </button>
                                                <a
                                                    class="saei-btn"
                                                    href="#"
                                                >
                                                    <span>درخواست</span>
                                                </a>
                                            </h2>
                                            <div
                                                id="HR_teams-xxx"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="head_HR"
                                                data-bs-parent="#HR_accordion"
                                            >
                                                <div class="accordion-body">
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن
                                                    <br />اطلاعات مورد نیاز
                                                    برای این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2
                                                class="accordion-header"
                                                id="headingTwo"
                                            >
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo"
                                                >
                                                    <i
                                                        class="fa-sharp-duotone fa-solid fa-caret-left"
                                                    ></i>
                                                    برنامه نویس Back-End
                                                </button>
                                                <a
                                                    class="saei-btn"
                                                    href="#"
                                                >
                                                    <span>درخواست</span>
                                                </a>
                                            </h2>
                                            <div
                                                id="collapseTwo"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo"
                                                data-bs-parent="#HR_accordion"
                                            >
                                                <div class="accordion-body">
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن
                                                    <br />اطلاعات مورد نیاز
                                                    برای این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2
                                                class="accordion-header"
                                                id="headingThree"
                                            >
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree"
                                                >
                                                    <i
                                                        class="fa-sharp-duotone fa-solid fa-caret-left"
                                                    ></i>
                                                    برنامه نویس Python
                                                </button>
                                                <a
                                                    class="saei-btn"
                                                    href="#"
                                                >
                                                    <span>درخواست</span>
                                                </a>
                                            </h2>
                                            <div
                                                id="collapseThree"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingThree"
                                                data-bs-parent="#HR_accordion"
                                            >
                                                <div class="accordion-body">
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن
                                                    <br />اطلاعات مورد نیاز
                                                    برای این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2
                                                class="accordion-header"
                                                id="headingFour"
                                            >
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFour"
                                                >
                                                    <i
                                                        class="fa-sharp-duotone fa-solid fa-caret-left"
                                                    ></i>
                                                    برنامه نویس Python
                                                </button>
                                                <a
                                                    class="saei-btn"
                                                    href="#"
                                                >
                                                    <span>درخواست</span>
                                                </a>
                                            </h2>
                                            <div
                                                id="collapseFour"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingFour"
                                                data-bs-parent="#HR_accordion"
                                            >
                                                <div class="accordion-body">
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن
                                                    <br />اطلاعات مورد نیاز
                                                    برای این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                    اطلاعات مورد نیاز برای
                                                    این جاب پوزیشن<br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

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