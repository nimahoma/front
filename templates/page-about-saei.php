<?php
/*
Template Name: About Saei
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

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/header' ); ?>

	<div class="page about-saei-page">
		<div class="container">
			<div class="page-wrapper Internal-pages" id="about-us">
				<aside class="page-sticky-sidebar">
					<div
						class="sa-scrollspy-nav sticky-navbar"
						id="sticky-navbar"
					>
						<a
							class="sa-ss-nav-item active"
							href="#our-history-1"
							data-target="#our-history-1"
							>داستان ما</a
						>
						<a
							class="sa-ss-nav-item"
							href="#key-moments-3"
							data-target="#key-moments-3"
							>لحظات شاخص</a
						>
						<a
							class="sa-ss-nav-item"
							href="#sa-resources-4"
							data-target="#sa-resources-4"
							>منابع</a
						>
					</div>
				</aside>

				<div class="page-content-wrapper overflow-hidden">
					<section
						class="section-scroll our-history page-section-bottom"
						id="our-history-1"
					>
						<div
							class="sa-paragraph-box page-section-bottom first-things"
						>
							<div class="title">
								<h1
									class="sa-strong-title sa-aos"
									data-aos="fade-up"
								>
									داستان ما
								</h1>
							</div>
							<div class="description">
								<p>
									شرکت ساعی که در سال ۱۳۸۹ تاسیس شده است،
									با بهره‌گیری از تیمی متشکل از بیش از ۱۵۰
									نیروی جوان، متخصص و متعهد، به عنوان یکی
									از شرکت‌های پیشرو در حوزه فناوری اطلاعات
									و ارتباطات و مخابرات در ایران فعالیت
									می‌کند. این شرکت با تکیه بر دانش فنی
									پیشرفته و تجربه‌های موفق در مدیریت و
									اجرای پروژه‌های بزرگ، توانسته است جایگاه
									خود را به عنوان یک شریک استراتژیک برای
									شرکت‌ها و سازمان‌های بزرگ، به ویژه در
									همکاری با شرکت‌های بین‌المللی برتر در
									زمینه‌ی مخابرات، تثبیت کند.
								</p>
							</div>
						</div>
						<div class="sa-paragraph-box page-section-bottom">
							<div
								class="title sa-aos"
								data-aos="fade-right"
								data-aos-offset="300"
								data-aos-easing="ease-in-sine"
							>
								<h4>ماموریت</h4>
							</div>
							<div class="description">
								<p>
									ماموريت ما ارایه ی راه حلهای نوآورانه
									برای تسهيل تحول دیجیتال در کسب و کارها و
									ارتقای ارزشهای فناورانه در کشور است.
								</p>
							</div>
						</div>
						<div class="sa-paragraph-box page-section-bottom">
							<div
								class="title sa-aos"
								data-aos="fade-right"
								data-aos-offset="300"
								data-aos-easing="ease-in-sine"
							>
								<h4>چشم انداز</h4>
							</div>
							<div class="description">
								<p>
									ما قصد داریم با تمرکز بر نوآوری و جلب
									رضایت مشتری در تمامی بازارها، تبدیل به
									شريک برتر سازمان ها در تحول دیجیتال در
									سطح کشور گردیم.
								</p>
							</div>
						</div>
						<div class="sa-paragraph-box">
							<div class="title sa-aos" data-aos="fade-up">
								<h4>ارزش های ما در ساعی</h4>
							</div>
							<div class="description">
								<p class="mb-4">
									ارزش‌های‌ ما در ساعی پایه و اساس
									تمامی‌فعالیت‌ها‌ و‌ تصمیم‌گیری‌های‌
									ماست. این‌ ارزش‌ها‌ به بخش‌
									جدایی‌ناپذیری‌ از فرهنگ ساعی تبدیل‌
									شده‌اند‌ و‌ همه‌ی‌ افراد در ساعی در جهت
									تحقق‌ آن‌ها‌ تلاش خواهند کرد.
								</p>
								<ul class="oh-our-value">
									<li
										class="sa-aos"
										data-aos="fade-right"
										data-aos-offset="100"
										data-aos-easing="ease-in-sine"
										data-aos-duration="900"
									>
										<div class="oh-ov">
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-1.svg"
												alt=""
											/>
										</div>
										<p>
											<span class="sa-strong"
												>صداقت و شفافیت در رفتار و
												گفتار:</span
											>
											صداقت و شفافیت در رفتار و گفتار
											در ساعی به مفهوم ایجاد یک محیط
											کاری است که در آن
											اعتماد، امانت‌داری و ارتباطات
											روشن و قابل فهم میان همه‌ی
											ذینفعان داخلی و خارجی برقرار
											است.
										</p>
									</li>
									<li
										class="sa-aos"
										data-aos="fade-right"
										data-aos-offset="100"
										data-aos-easing="ease-in-sine"
										data-aos-duration="900"
									>
										<div class="oh-ov">
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-2.svg"
												alt=""
											/>
										</div>
										<p>
											<span class="sa-strong"
												>مسئولیت‌پذیری:</span
											>
											مسئولیت‌پذیری به عنوان یک ارزش
											سازمانی به معنای تاکید بر پذیرش
											مسئولیت امور محوله با
											رعایت امانت‌داری است. این ارزش
											پایه و اساس ایجاد اعتماد و
											اعتبار داخل و خارج از سازمان
											است.
										</p>
									</li>
									<li
										class="sa-aos"
										data-aos="fade-right"
										data-aos-offset="100"
										data-aos-easing="ease-in-sine"
										data-aos-duration="900"
									>
										<div class="oh-ov">
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-3.svg"
												alt=""
											/>
										</div>
										<p>
											<span class="sa-strong"
												>یادگیری و یاددهی:</span
											>
											تاکید بر اهمیت رشد فردی و جمعی
											از طریق فرایند دایمی آموزش و به
											اشتراک‌گذاری دانش.
										</p>
									</li>
									<li
										class="sa-aos"
										data-aos="fade-right"
										data-aos-offset="100"
										data-aos-easing="ease-in-sine"
										data-aos-duration="900"
									>
										<div class="oh-ov">
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-4.svg"
												alt=""
											/>
										</div>
										<p>
											<span class="sa-strong"
												>مشتری مداری:</span
											>
											توجه به مشتری و رفع نیازهایش به
											عنوان رکن اصلی شرکت.
										</p>
									</li>
									<li
										class="sa-aos"
										data-aos="fade-right"
										data-aos-offset="100"
										data-aos-easing="ease-in-sine"
										data-aos-duration="900"
									>
										<div class="oh-ov">
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-5.svg"
												alt=""
											/>
										</div>
										<p>
											<span class="sa-strong"
												>نوآوری مداوم:</span
											>
											نوآوری مداوم به عنوان یک ارزش
											سازمانی به معنای تعهد به خلق و
											پیاده‌سازیایده‌ها، محصولات و
											خدمات جدید و بهبود مستمر
											آن‌هاست.
										</p>
									</li>
									<li
										class="sa-aos"
										data-aos="fade-right"
										data-aos-offset="100"
										data-aos-easing="ease-in-sine"
										data-aos-duration="900"
									>
										<div class="oh-ov">
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-6.svg"
												alt=""
											/>
										</div>
										<p>
											<span class="sa-strong"
												>احترام به ارزش‌های
												انسانی:</span
											>
											احترام به شان و ارزش‌های انسانی
											در ساعی خارج از توجه به دین،
											مذهب، ملیت، جایگاه شغلی و
											ویژگی‌های شخصیتی افراد است.
										</p>
									</li>
								</ul>

								<div
									class="accordion oh-our-value-mobile"
									id="HR_accordion"
								>
									<div class="accordion-item">
										<h2
											class="accordion-header"
											id="head_HR"
										>
											<button
												class="accordion-button collapsed"
												type="button"
												data-bs-toggle="collapse"
												data-bs-target="#HR_teams-xxx"
												aria-expanded="true"
												aria-controls="HR_teams-xxx"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-1.svg"
													alt=""
												/>
												<span
													>صداقت و شفافیت در رفتار
													و گفتار</span
												>
											</button>
										</h2>
										<div
											id="HR_teams-xxx"
											class="accordion-collapse collapse"
											aria-labelledby="head_HR"
											data-bs-parent="#HR_accordion"
										>
											<div class="accordion-body">
												<p>
													صداقت و شفافیت در رفتار
													و گفتار در ساعی به مفهوم
													ایجاد یک محیط کاری است
													که در آن
													اعتماد، امانت‌داری و
													ارتباطات روشن و قابل فهم
													میان همه‌ی ذینفعان داخلی
													و خارجی برقرار است.
												</p>
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
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-2.svg"
													alt=""
												/>
												<span>مسئولیت‌پذیری</span>
											</button>
										</h2>
										<div
											id="collapseTwo"
											class="accordion-collapse collapse"
											aria-labelledby="headingTwo"
											data-bs-parent="#HR_accordion"
										>
											<div class="accordion-body">
												<p>
													مسئولیت‌پذیری به عنوان
													یک ارزش سازمانی به معنای
													تاکید بر پذیرش مسئولیت
													امور محوله با
													رعایت امانت‌داری است.
													این ارزش پایه و اساس
													ایجاد اعتماد و اعتبار
													داخل و خارج از سازمان
													است.
												</p>
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
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-3.svg"
													alt=""
												/>
												<span
													>یادگیری و یاددهی</span
												>
											</button>
										</h2>
										<div
											id="collapseThree"
											class="accordion-collapse collapse"
											aria-labelledby="headingThree"
											data-bs-parent="#HR_accordion"
										>
											<div class="accordion-body">
												<p>
													تاکید بر اهمیت رشد فردی
													و جمعی از طریق فرایند
													دایمی آموزش و به
													اشتراک‌گذاری دانش.
												</p>
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
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-4.svg"
													alt=""
												/>
												<span>مشتری مداری</span>
											</button>
										</h2>
										<div
											id="collapseFour"
											class="accordion-collapse collapse"
											aria-labelledby="headingFour"
											data-bs-parent="#HR_accordion"
										>
											<div class="accordion-body">
												<p>
													توجه به مشتری و رفع
													نیازهایش به عنوان رکن
													اصلی شرکت.
												</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2
											class="accordion-header"
											id="headingFive"
										>
											<button
												class="accordion-button collapsed"
												type="button"
												data-bs-toggle="collapse"
												data-bs-target="#collapseFive"
												aria-expanded="false"
												aria-controls="collapseFive"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-5.svg"
													alt=""
												/>
												<span>نوآوری مداوم</span>
											</button>
										</h2>
										<div
											id="collapseFive"
											class="accordion-collapse collapse"
											aria-labelledby="headingFive"
											data-bs-parent="#HR_accordion"
										>
											<div class="accordion-body">
												<p>
													نوآوری مداوم به عنوان یک
													ارزش سازمانی به معنای
													تعهد به خلق و
													پیاده‌سازیایده‌ها،
													محصولات و خدمات جدید و
													بهبود مستمر آن‌هاست.
												</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2
											class="accordion-header"
											id="headingSix"
										>
											<button
												class="accordion-button collapsed"
												type="button"
												data-bs-toggle="collapse"
												data-bs-target="#collapseSix"
												aria-expanded="false"
												aria-controls="collapseSix"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/our-values-6.svg"
													alt=""
												/>
												<span
													>احترام به ارزش‌های
													انسانی</span
												>
											</button>
										</h2>
										<div
											id="collapseSix"
											class="accordion-collapse collapse"
											aria-labelledby="headingSix"
											data-bs-parent="#HR_accordion"
										>
											<div class="accordion-body">
												<p>
													احترام به شان و ارزش‌های
													انسانی در ساعی خارج از
													توجه به دین، مذهب، ملیت،
													جایگاه شغلی و ویژگی‌های
													شخصیتی افراد است.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="section-scroll key-moments test-tab page-section-bottom page-section-top"
						id="key-moments-3"
					>
						<div class="sa-paragraph-box no-padding">
							<div class="title">
								<h1
									class="sa-strong-title sa-aos"
									data-aos="fade-up"
								>
									لحظات شاخص
								</h1>
							</div>
						</div>

						<div class="tabs-container">
							<div class="arrow" id="prev-arrow">
								<i class="fa-light fa-chevron-right"></i>
							</div>
							<div class="tabs-wrapper" id="tabs-wrapper">
								<div class="tab active" data-target="#tab1">
									۱۳۸۹
								</div>
								<div class="tab" data-target="#tab2">
									۱۳۹۲
								</div>
								<div class="tab" data-target="#tab3">
									۱۴۰۲
								</div>
								<div class="tab" data-target="#tab4">
									۱۴۰۳
								</div>
								<!-- <div class="tab" data-target="#tab5">
									۲۰۲۰
								</div> -->
							</div>
							<div class="arrow" id="next-arrow">
								<i class="fa-light fa-chevron-left"></i>
							</div>
						</div>
						<div class="tab-content">
							<div id="tab1" class="tab-pane active">
								<div class="tab-content-wrapper">
									<div class="tab-content-item full">
										<div
											class="sa-paragraph-box full-width-box-tab"
										>
											<div class="title">
												<h5>
													ساعی در شب یلدای سال
													۱۳۸۹
												</h5>
											</div>
											<div class="description">
												<p>
													شرکت ساعی در شب یلدای
													سال ۱۳۸۹ با حضور جمعی از
													متخصصین حوزه فناوری
													اطلاعات و مخابرات تأسیس
													شد. هدف این شرکت از همان
													ابتدا ارائه خدمات
													نوآورانه و تخصصی در حوزه
													فناوری اطلاعات و مخابرات
													بود. ساعی با تمرکز بر
													بومی‌سازی فناوری‌های
													پیشرفته و تطبیق آن‌ها با
													نیازهای محلی، توانست به
													یکی از بازیگران کلیدی
													این حوزه تبدیل شود.
												</p>
												<!-- <span
													class="key-moments-date"
													>12 آبان 1402</span
												> -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab2" class="tab-pane">
								<div class="tab-content-wrapper">
									<div class="tab-content-item full">
										<div
											class="sa-paragraph-box full-width-box-tab"
										>
											<div class="title">
												<h5>
													افزایش سه برابری تعداد
													نفرات ساعی با اضافه شدن
													پروژه VAS ایرانسل
												</h5>
											</div>
											<div class="description">
												<p>
													در سال ۱۳۹۲، شرکت ساعی
													با افزودن پروژه‌های
													(VAS) خدمات ارزش افزوده
													به حوزه فعالیت‌های خود،
													گامی مهم در توسعه خدمات
													و افزایش توانمندی‌های
													خود برداشت. این
													پروژه‌ها، که با هدف
													ارائه خدمات نوآورانه و
													پیشرفته در صنعت مخابرات
													طراحی و اجرا شدند، تأثیر
													قابل‌توجهی بر رشد و
													توسعه شرکت داشتند. با
													آغاز پروژه‌های (VAS) ،
													شرکت ساعی با بهره‌گیری
													از فناوری‌های روز دنیا و
													تیمی متخصص، موفق به
													ارتقای سطح خدمات خود شد.
													این تحول استراتژیک باعث
													شد که تعداد کارکنان
													شرکت، در مقایسه با زمان
													تأسیس، برابر افزایش
													یابد. این رشد چشمگیر
													نشان‌دهنده توانایی ساعی
													در مدیریت پروژه‌های بزرگ
													و پیچیده و همچنین تعهد
													آن به توسعه پایدار منابع
													انسانی و زیرساخت‌های
													سازمانی است.
												</p>
												<!-- <span
													class="key-moments-date"
													>12 آبان 1402</span
												> -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab3" class="tab-pane">
								<div class="tab-content-wrapper">
									<div class="tab-content-item full">
										<div
											class="sa-paragraph-box full-width-box-tab"
										>
											<div class="title">
												<h5>
													اجرای پروژه Big Data
												</h5>
											</div>
											<div class="description">
												<p>
													شرکت ساعی از سال ۱۴۰۰ با
													آغاز پروژه‌های پیشرفته
													در حوزه Big Data تحولی
													مهم در ارائه خدمات خود
													ایجاد کرد. این پروژه که
													با بهره‌گیری از آخرین
													فناوری‌های روز جهان و
													تجربه موفق در طراحی،
													توسعه و نگهداری
													سیستم‌های هوش تجاری BI و
													انبار داده‌های سازمانی
													(EDW) اجرا شد، ساعی را
													به یکی از پیشگامان حوزه
													مدیریت داده‌های کلان در
													منطقه تبدیل کرد. تیم
													متخصص ساعی با اتکا به
													دانش بومی و تعامل با
													بزرگ‌ترین پروژه‌های
													داده‌ای خاورمیانه،
													توانست زیرساخت‌هایی
													پیشرفته برای مدیریت حجم
													عظیمی از داده‌های
													سازمانی فراهم کند. این
													دستاورد، نه تنها جایگاه
													شرکت را در بازار داخلی
													تثبیت کرد، بلکه امکان
													توسعه راهکارهای مبتنی بر
													داده برای مشتریان مختلف
													را نیز فراهم ساخت.
												</p>
												<!-- <span
													class="key-moments-date"
													>12 آبان 1402</span
												> -->
											</div>
										</div>
									</div>
									<div class="tab-content-item full">
										<div
											class="sa-paragraph-box full-width-box-tab"
										>
											<div class="title">
												<h5>ریبرندینگ ساعی</h5>
											</div>
											<div class="description">
												<p>
													شرکت ساعی در سال‌های
													اخیر فرآیند ری‌برندینگ
													خود را به عنـــوان بخشی
													از استـــراتژی توســـعه
													و بهبــود هویت
													سازمـــانی آغــاز کرده
													است. این اقدام با هدف
													بازتعریف مأموریت،
													چشم‌انداز و ارزش‌های
													اصلی شرکت و همچنین تطبیق
													بهتر با روندهای روز
													بازار انجام شد. در
													فرآیند ری‌برندینگ، تلاش
													شد تا تصویر شرکت از یک
													واسطه فناوری به یک
													ارائه‌دهنده جامع خدمات
													مهندسی و راهکارهای
													دیجیتال تغییر یابد.
													همچنین هویت بصری ساعی
													مدرن‌تر شده و انسجام
													برند در تمامی پلتفرم‌ها
													و ارتباطات سازمانی تقویت
													گردید. این تغییرات نه
													تنها جایگاه ساعی را در
													بازار تقویت کرد، بلکه
													تأثیر قابل‌توجهی بر
													ارتقای روحیه و انگیزه
													کارکنان شرکت نیز داشت.
													یکی از نتایج مهم این
													تحول، افزودن واحد
													مارکتینگ به ساختار
													سازمانی ساعی بود. این
													واحد با هدف تقویت
													ارتباطات بازاریابی،
													گسترش سهم بازار و افزایش
													شناخت برند در میان
													مشتریان و شرکای تجاری
													ایجاد شد. ری‌برندینگ
													ساعی همچنین با بازنگری
													اهداف و ارزش‌های شرکت
													همراه بود تا تعهد آن به
													پیشرفت فناوری، شفافیت، و
													یادگیری مستمر برای
													مشتریان و شرکای تجاری
													نمایان‌تر شود. این حرکت
													استراتژیک توانست پایه‌ای
													قوی برای ورود ساعی به
													عصر دیجیتال و تقویت
													جایگاه آن در میان رقبا
													فراهم کند.
												</p>
												<!-- <span
													class="key-moments-date"
													>12 آبان 1402</span
												> -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab4" class="tab-pane">
								<div class="tab-content-wrapper">
									<div class="tab-content-item full">
										<div
											class="sa-paragraph-box full-width-box-tab"
										>
											<div class="title">
												<h5>پروژه CRM رایتل</h5>
											</div>
											<div class="description">
												<p>
													اجرای پروژه CRM رایتل
													توسط ساعی یکی از
													دستاوردهای مهم این شرکت
													در حوزه مدیریت ارتباط با
													مشتری بود. این پروژه با
													هدف ارتقای تعاملات رایتل
													با مشترکین خود و ارائه
													خدمات شخصی‌سازی‌شده و
													باکیفیت، طراحی و اجرا
													شد. ساعی با بهره‌گیری از
													تجربه تیم متخصص خود و
													استفاده از فناوری‌های
													پیشرفته در حوزه Customer
													Relationship Management
													موفق به ایجاد سیستمی
													جامع برای مدیریت
													داده‌های مشتریان، تحلیل
													رفتار آن‌ها و بهبود
													کارایی فرآیندهای ارتباطی
													شد. این پروژه توانست
													زیرساختی یکپارچه برای
													مدیریت ارتباطات مشتریان
													فراهم کند که نتیجه آن
													افزایش رضایت مشتریان،
													کاهش زمان پاسخگویی به
													درخواست‌ها و بهبود
													بهره‌وری در فرآیندهای
													سازمانی رایتل بود. اجرای
													موفق این پروژه، بار دیگر
													توانایی ساعی را در
													مدیریت و پیاده‌سازی
													پروژه‌های پیچیده فناوری
													اطلاعات و ارتباطات به
													نمایش گذاشت.
												</p>
												<!-- <span
													class="key-moments-date"
													>12 آبان 1402</span
												> -->
											</div>
										</div>
									</div>
									<div class="tab-content-item full">
										<div
											class="sa-paragraph-box full-width-box-tab"
										>
											<div class="title">
												<h5>
													ورود به سیستم های امنیتی
													در ساعی با نام ZERO
													TRUST
												</h5>
											</div>
											<div class="description">
												<p class="mb-3">
													ساعی با هدف ارتقای سطح
													امنیت داده‌ها و تطبیق با
													نیازهای روزافزون صنعت
													فناوری اطلاعات و
													مخابرات، پروژه Zero
													Trust را به عنوان
													رویکردی نوین در حوزه
													امنیت سایبری آغاز کرده
													است. این مدل امنیتی به
													جای اعتماد به کاربران یا
													دستگاه‌ها براساس موقعیت
													یا شبکه آن‌ها، اصل "عدم
													اعتماد، حتی پس از تأیید"
													را اعمال می‌کند. در این
													رویکرد، هر کاربر و
													دستگاه باید پیش از
													دریافت دسترسی، مجدداً
													اعتبارسنجی و تأیید شود.
													ساعی در این پروژه بر روی
													سه حوزه کلیدی تمرکز کرده
													است:
												</p>
												<ul class="sa-tabs-list">
													<li>
														<strong
															>مدیریت هویت و
															دسترسی (IAM) :
														</strong>
														برای کنترل برای
														کنترل دسترسی‌ها و
														اطمینان از اینکه فقط
														افراد مجاز به منابع
														سازمانی دسترسی
														دارند.
													</li>
													<li>
														<strong
															>حفاظت از نقاط
															انتهایی:
														</strong>
														به منظور ایجاد
														لایه‌های امنیتی
														اضافی برای
														دستگاه‌های متصل به
														شبکه.
													</li>
													<li>
														<strong
															>دسترسی ایمن از
															راه دور:
														</strong>
														به‌ویژه برای تأمین
														امنیت کارکنانی که به
														صورت دورکاری فعالیت
														می‌کنند. مزایای این
														پروژه شامل کاهش سطح
														حملات، محافظت از
														داده‌های حساس
														مشتریان، و افزایش
														اعتماد به
														توانایی‌های ساعی در
														تأمین امنیت اطلاعات
														است. ساعی با استفاده
														از فناوری‌های
														متن‌باز و با
														قابلیت‌های شخصی‌سازی
														بالا، نه تنها
														هزینه‌ها را بهینه
														کرده، بلکه از قفل
														شدن به پلتفرم‌های
														خاص جلوگیری کرده
														است. این استراتژی
														نه‌تنها امنیت داخلی
														شرکت را ارتقا
														می‌دهد، بلکه
														می‌تواند به‌عنوان یک
														راهکار امنیتی برای
														مشتریان ساعی معرفی
														شده و به شکل محصولی
														مستقل در بازار عرضه
														شود.
													</li>
												</ul>
												<!-- <span
													class="key-moments-date"
													>12 آبان 1402</span
												> -->
											</div>
										</div>
									</div>
									<div class="tab-content-item full">
										<div
											class="sa-paragraph-box full-width-box-tab"
										>
											<div class="title">
												<h5>ثبت دانش بنیان</h5>
											</div>
											<div class="description">
												<p>
													ثبت شرکت سامانه جامع
													ساعی به عنوان یک شرکت
													دانش‌بنیان، نقطه عطفی در
													مسیر رشد و توسعه این
													مجموعه است. این موفقیت
													با تمرکز بر ارائه
													محصولات و خدمات فناورانه
													با پیچیدگی فنی بالا و
													بهره‌مندی از دانش تخصصی
													تیم متخصص ساعی به دست
													آمده است.
												</p>
												<!-- <span
													class="key-moments-date"
													>12 آبان 1402</span
												> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div
							class="accordion oh-our-value-mobile sa-aos-mobile"
							id="Key_Moments"
						>
							<div class="accordion-item">
								<h2 class="accordion-header" id="head_KM">
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#KM_teams-xxx"
										aria-expanded="true"
										aria-controls="KM_teams-xxx"
									>
										<span>سال ۱۳۸۹</span>
									</button>
								</h2>
								<div
									id="KM_teams-xxx"
									class="accordion-collapse collapse"
									aria-labelledby="head_KM"
									data-bs-parent="#Key_Moments"
								>
									<div class="accordion-body">
										<div class="tab-content-wrapper">
											<div
												class="tab-content-item full"
											>
												<div
													class="sa-paragraph-box full-width-box-tab"
												>
													<div class="title">
														<h5>
															ساعی در شب یلدای
															سال ۱۳۸۹
														</h5>
													</div>
													<div
														class="description"
													>
														<p>
															شرکت ساعی در شب
															یلدای سال ۱۳۸۹
															با حضور جمعی از
															متخصصین حوزه
															فناوری اطلاعات و
															مخابرات تأسیس
															شد. هدف این شرکت
															از همان ابتدا
															ارائه خدمات
															نوآورانه و تخصصی
															در حوزه فناوری
															اطلاعات و
															مخابرات بود.
															ساعی با تمرکز بر
															بومی‌سازی
															فناوری‌های
															پیشرفته و تطبیق
															آن‌ها با نیازهای
															محلی، توانست به
															یکی از بازیگران
															کلیدی این حوزه
															تبدیل شود.
														</p>
														<!-- <span
															class="key-moments-date"
															>12 آبان 1402</span
														> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2
									class="accordion-header"
									id="headingTwo_KM"
								>
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#collapseTwo_KM"
										aria-expanded="false"
										aria-controls="collapseTwo_KM"
									>
										<span>سال ۱۳۹۲</span>
									</button>
								</h2>
								<div
									id="collapseTwo_KM"
									class="accordion-collapse collapse"
									aria-labelledby="headingTwo_KM"
									data-bs-parent="#Key_Moments"
								>
									<div class="accordion-body">
										<div class="tab-content-wrapper">
											<div
												class="tab-content-item full"
											>
												<div
													class="sa-paragraph-box full-width-box-tab"
												>
													<div class="title">
														<h5>
															افزایش سه برابری
															تعداد نفرات ساعی
															با اضافه شدن
															پروژه VAS
															ایرانسل
														</h5>
													</div>
													<div
														class="description"
													>
														<p>
															در سال ۱۳۹۲،
															شرکت ساعی با
															افزودن پروژه‌های
															(VAS) خدمات ارزش
															افزوده به حوزه
															فعالیت‌های خود،
															گامی مهم در
															توسعه خدمات و
															افزایش
															توانمندی‌های خود
															برداشت. این
															پروژه‌ها، که با
															هدف ارائه خدمات
															نوآورانه و
															پیشرفته در صنعت
															مخابرات طراحی و
															اجرا شدند، تأثیر
															قابل‌توجهی بر
															رشد و توسعه شرکت
															داشتند. با آغاز
															پروژه‌های (VAS)
															، شرکت ساعی با
															بهره‌گیری از
															فناوری‌های روز
															دنیا و تیمی
															متخصص، موفق به
															ارتقای سطح خدمات
															خود شد. این تحول
															استراتژیک باعث
															شد که تعداد
															کارکنان شرکت، در
															مقایسه با زمان
															تأسیس، برابر
															افزایش یابد. این
															رشد چشمگیر
															نشان‌دهنده
															توانایی ساعی در
															مدیریت پروژه‌های
															بزرگ و پیچیده و
															همچنین تعهد آن
															به توسعه پایدار
															منابع انسانی و
															زیرساخت‌های
															سازمانی است.
														</p>
														<!-- <span
															class="key-moments-date"
															>12 آبان 1402</span
														> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2
									class="accordion-header"
									id="headingThree_KM"
								>
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#collapseThree_KM"
										aria-expanded="false"
										aria-controls="collapseThree_KM"
									>
										<span>سال ۱۴۰۲</span>
									</button>
								</h2>
								<div
									id="collapseThree_KM"
									class="accordion-collapse collapse"
									aria-labelledby="headingThree_KM"
									data-bs-parent="#Key_Moments"
								>
									<div class="accordion-body">
										<div class="tab-content-wrapper">
											<div
												class="tab-content-item full"
											>
												<div
													class="sa-paragraph-box full-width-box-tab"
												>
													<div class="title">
														<h5>
															اجرای پروژه Big
															Data
														</h5>
													</div>
													<div
														class="description"
													>
														<p>
															شرکت ساعی از سال
															۱۴۰۰ با آغاز
															پروژه‌های
															پیشرفته در حوزه
															Big Data تحولی
															مهم در ارائه
															خدمات خود ایجاد
															کرد. این پروژه
															که با بهره‌گیری
															از آخرین
															فناوری‌های روز
															جهان و تجربه
															موفق در طراحی،
															توسعه و نگهداری
															سیستم‌های هوش
															تجاری BI و انبار
															داده‌های سازمانی
															(EDW) اجرا شد،
															ساعی را به یکی
															از پیشگامان حوزه
															مدیریت داده‌های
															کلان در منطقه
															تبدیل کرد. تیم
															متخصص ساعی با
															اتکا به دانش
															بومی و تعامل با
															بزرگ‌ترین
															پروژه‌های
															داده‌ای
															خاورمیانه،
															توانست
															زیرساخت‌هایی
															پیشرفته برای
															مدیریت حجم عظیمی
															از داده‌های
															سازمانی فراهم
															کند. این
															دستاورد، نه تنها
															جایگاه شرکت را
															در بازار داخلی
															تثبیت کرد، بلکه
															امکان توسعه
															راهکارهای مبتنی
															بر داده برای
															مشتریان مختلف را
															نیز فراهم ساخت.
														</p>
														<!-- <span
															class="key-moments-date"
															>12 آبان 1402</span
														> -->
													</div>
												</div>
											</div>
											<div
												class="tab-content-item full"
											>
												<div
													class="sa-paragraph-box full-width-box-tab"
												>
													<div class="title">
														<h5>
															ریبرندینگ ساعی
														</h5>
													</div>
													<div
														class="description"
													>
														<p>
															شرکت ساعی در
															سال‌های اخیر
															فرآیند
															ری‌برندینگ خود
															را به عنـــوان
															بخشی از
															استـــراتژی
															توســـعه و
															بهبــود هویت
															سازمـــانی
															آغــاز کرده است.
															این اقدام با هدف
															بازتعریف
															مأموریت،
															چشم‌انداز و
															ارزش‌های اصلی
															شرکت و همچنین
															تطبیق بهتر با
															روندهای روز
															بازار انجام شد.
															در فرآیند
															ری‌برندینگ، تلاش
															شد تا تصویر شرکت
															از یک واسطه
															فناوری به یک
															ارائه‌دهنده جامع
															خدمات مهندسی و
															راهکارهای
															دیجیتال تغییر
															یابد. همچنین
															هویت بصری ساعی
															مدرن‌تر شده و
															انسجام برند در
															تمامی پلتفرم‌ها
															و ارتباطات
															سازمانی تقویت
															گردید. این
															تغییرات نه تنها
															جایگاه ساعی را
															در بازار تقویت
															کرد، بلکه تأثیر
															قابل‌توجهی بر
															ارتقای روحیه و
															انگیزه کارکنان
															شرکت نیز داشت.
															یکی از نتایج مهم
															این تحول، افزودن
															واحد مارکتینگ به
															ساختار سازمانی
															ساعی بود. این
															واحد با هدف
															تقویت ارتباطات
															بازاریابی، گسترش
															سهم بازار و
															افزایش شناخت
															برند در میان
															مشتریان و شرکای
															تجاری ایجاد شد.
															ری‌برندینگ ساعی
															همچنین با
															بازنگری اهداف و
															ارزش‌های شرکت
															همراه بود تا
															تعهد آن به
															پیشرفت فناوری،
															شفافیت، و
															یادگیری مستمر
															برای مشتریان و
															شرکای تجاری
															نمایان‌تر شود.
															این حرکت
															استراتژیک توانست
															پایه‌ای قوی برای
															ورود ساعی به عصر
															دیجیتال و تقویت
															جایگاه آن در
															میان رقبا فراهم
															کند.
														</p>
														<!-- <span
															class="key-moments-date"
															>12 آبان 1402</span
														> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2
									class="accordion-header"
									id="headingFour_KM"
								>
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#collapseFour_KM"
										aria-expanded="false"
										aria-controls="collapseFour_KM"
									>
										<span>سال ۱۴۰۳</span>
									</button>
								</h2>
								<div
									id="collapseFour_KM"
									class="accordion-collapse collapse"
									aria-labelledby="headingFour_KM"
									data-bs-parent="#Key_Moments"
								>
									<div class="accordion-body">
										<div class="tab-content-wrapper">
											<div
												class="tab-content-item full"
											>
												<div
													class="sa-paragraph-box full-width-box-tab"
												>
													<div class="title">
														<h5>
															پروژه CRM رایتل
														</h5>
													</div>
													<div
														class="description"
													>
														<p>
															اجرای پروژه CRM
															رایتل توسط ساعی
															یکی از
															دستاوردهای مهم
															این شرکت در حوزه
															مدیریت ارتباط با
															مشتری بود. این
															پروژه با هدف
															ارتقای تعاملات
															رایتل با مشترکین
															خود و ارائه
															خدمات
															شخصی‌سازی‌شده و
															باکیفیت، طراحی و
															اجرا شد. ساعی با
															بهره‌گیری از
															تجربه تیم متخصص
															خود و استفاده از
															فناوری‌های
															پیشرفته در حوزه
															Customer
															Relationship
															Management موفق
															به ایجاد سیستمی
															جامع برای مدیریت
															داده‌های
															مشتریان، تحلیل
															رفتار آن‌ها و
															بهبود کارایی
															فرآیندهای
															ارتباطی شد. این
															پروژه توانست
															زیرساختی یکپارچه
															برای مدیریت
															ارتباطات مشتریان
															فراهم کند که
															نتیجه آن افزایش
															رضایت مشتریان،
															کاهش زمان
															پاسخگویی به
															درخواست‌ها و
															بهبود بهره‌وری
															در فرآیندهای
															سازمانی رایتل
															بود. اجرای موفق
															این پروژه، بار
															دیگر توانایی
															ساعی را در
															مدیریت و
															پیاده‌سازی
															پروژه‌های پیچیده
															فناوری اطلاعات و
															ارتباطات به
															نمایش گذاشت.
														</p>
														<!-- <span
															class="key-moments-date"
															>12 آبان 1402</span
														> -->
													</div>
												</div>
											</div>
											<div
												class="tab-content-item full"
											>
												<div
													class="sa-paragraph-box full-width-box-tab"
												>
													<div class="title">
														<h5>
															ورود به سیستم
															های امنیتی در
															ساعی با نام ZERO
															TRUST
														</h5>
													</div>
													<div
														class="description"
													>
														<p class="mb-3">
															ساعی با هدف
															ارتقای سطح امنیت
															داده‌ها و تطبیق
															با نیازهای
															روزافزون صنعت
															فناوری اطلاعات و
															مخابرات، پروژه
															Zero Trust را به
															عنوان رویکردی
															نوین در حوزه
															امنیت سایبری
															آغاز کرده است.
															این مدل امنیتی
															به جای اعتماد به
															کاربران یا
															دستگاه‌ها براساس
															موقعیت یا شبکه
															آن‌ها، اصل "عدم
															اعتماد، حتی پس
															از تأیید" را
															اعمال می‌کند. در
															این رویکرد، هر
															کاربر و دستگاه
															باید پیش از
															دریافت دسترسی،
															مجدداً
															اعتبارسنجی و
															تأیید شود. ساعی
															در این پروژه بر
															روی سه حوزه
															کلیدی تمرکز کرده
															است:
														</p>
														<ul
															class="sa-tabs-list"
														>
															<li>
																<strong
																	>مدیریت
																	هویت و
																	دسترسی
																	(IAM) :
																</strong>
																برای کنترل
																برای کنترل
																دسترسی‌ها و
																اطمینان از
																اینکه فقط
																افراد مجاز
																به منابع
																سازمانی
																دسترسی
																دارند.
															</li>
															<li>
																<strong
																	>حفاظت
																	از نقاط
																	انتهایی:
																</strong>
																به منظور
																ایجاد
																لایه‌های
																امنیتی اضافی
																برای
																دستگاه‌های
																متصل به
																شبکه.
															</li>
															<li>
																<strong
																	>دسترسی
																	ایمن از
																	راه دور:
																</strong>
																به‌ویژه برای
																تأمین امنیت
																کارکنانی که
																به صورت
																دورکاری
																فعالیت
																می‌کنند.
																مزایای این
																پروژه شامل
																کاهش سطح
																حملات،
																محافظت از
																داده‌های
																حساس
																مشتریان، و
																افزایش
																اعتماد به
																توانایی‌های
																ساعی در
																تأمین امنیت
																اطلاعات است.
																ساعی با
																استفاده از
																فناوری‌های
																متن‌باز و با
																قابلیت‌های
																شخصی‌سازی
																بالا، نه
																تنها
																هزینه‌ها را
																بهینه کرده،
																بلکه از قفل
																شدن به
																پلتفرم‌های
																خاص جلوگیری
																کرده است.
																این استراتژی
																نه‌تنها
																امنیت داخلی
																شرکت را
																ارتقا
																می‌دهد، بلکه
																می‌تواند
																به‌عنوان یک
																راهکار
																امنیتی برای
																مشتریان ساعی
																معرفی شده و
																به شکل
																محصولی مستقل
																در بازار
																عرضه شود.
															</li>
														</ul>
														<!-- <span
															class="key-moments-date"
															>12 آبان 1402</span
														> -->
													</div>
												</div>
											</div>
											<div
												class="tab-content-item full"
											>
												<div
													class="sa-paragraph-box full-width-box-tab"
												>
													<div class="title">
														<h5>
															ثبت دانش بنیان
														</h5>
													</div>
													<div
														class="description"
													>
														<p>
															ثبت شرکت سامانه
															جامع ساعی به
															عنوان یک شرکت
															دانش‌بنیان، نقطه
															عطفی در مسیر رشد
															و توسعه این
															مجموعه است. این
															موفقیت با تمرکز
															بر ارائه محصولات
															و خدمات فناورانه
															با پیچیدگی فنی
															بالا و بهره‌مندی
															از دانش تخصصی
															تیم متخصص ساعی
															به دست آمده است.
														</p>
														<!-- <span
															class="key-moments-date"
															>12 آبان 1402</span
														> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2
									class="accordion-header"
									id="headingFive_KM"
								>
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#collapseFive_KM"
										aria-expanded="false"
										aria-controls="collapseFive_KM"
									>
										<span>سال ۱۴۰۴</span>
									</button>
								</h2>
								<div
									id="collapseFive_KM"
									class="accordion-collapse collapse"
									aria-labelledby="headingFive_KM"
									data-bs-parent="#Key_Moments"
								>
									<div class="accordion-body">
										<p>
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="section-scroll sa-resources last-things page-section-top"
						id="sa-resources-4"
					>
						<div class="sa-paragraph-box no-padding">
							<div class="title">
								<h1
									class="sa-strong-title sa-aos"
									data-aos="fade-up"
								>
									منابع
								</h1>
							</div>
						</div>
						<div class="sa-resources-item-wrapper">
							<div class="sa-resources-item">
								<div class="sa-ri-img mb-2">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-resources-item-2.svg"
										alt=""
									/>
								</div>
								<div class="sa-ri-decription">
									<div class="title">
										<h5>گزارش سالانه ۱۴۰۲</h5>
									</div>
									<div class="sa-dt-btn sa-ri-btn">
										<a href="<?php echo get_site_url(); ?>/wp-content/uploads/2024/05/BrandBook.pdf"
										download="BrandBook.pdf">
											<button class="saei-btn">
												<i class="fas fa-download"></i>
												<span>دانلود</span>
											</button>
										</a>
									</div>
								</div>
							</div>
							<div class="sa-resources-item">
								<div class="sa-ri-img mb-2">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-resources-item-3.svg"
										alt=""
									/>
								</div>
								<div class="sa-ri-decription">
									<div class="title">
										<h5>برندبوک ساعی</h5>
									</div>
									<div class="sa-dt-btn sa-ri-btn">
										<a href="<?php echo get_site_url(); ?>/wp-content/uploads/2024/05/BrandBook.pdf"
										download="BrandBook.pdf">
											<button class="saei-btn">
												<i class="fas fa-download"></i>
												<span>دانلود</span>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="sa-resources-item-wrapper-mobile">
							<div class="sa-resources-item-mobile">
								<div class="sa-r-i-m-content">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-resources-item-3.svg"
										alt=""
									/>
									<h5>برندبوک ساعی</h5>
								</div>
								<div class="sa-r-i-m-btn">
									<a href="<?php echo get_site_url(); ?>/wp-content/uploads/2024/05/BrandBook.pdf"
									download="BrandBook.pdf">
										<button class="saei-btn">
											<i class="fas fa-download"></i>
											<span>دانلود</span>
										</button>
									</a>
								</div>
							</div>
							<div class="sa-resources-item-mobile">
								<div class="sa-r-i-m-content">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-resources-item-2.svg"
										alt=""
									/>
									<h5>گزارش سالانه ۱۴۰۲</h5>
								</div>
								<div class="sa-r-i-m-btn">
									<a
										href="https://gold3d.ir/saei/wp-content/uploads/2024/10/SAEI-BrandBook-2.pdf"
										download=""
									>
										<button class="saei-btn">
											<i class="fas fa-download"></i>
											<span>دانلود</span>
										</button>
									</a>
								</div>
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