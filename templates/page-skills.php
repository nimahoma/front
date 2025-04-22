<?php
/*
Template Name: Skills Saei
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
	
	
	
	<div class="page skills-page">
			<div class="container">
				<div class="page-wrapper Internal-pages" id="skill-page">
					<div class="page-content-wrapper">
						<div class="sa-paragraph-box first-things">
							<div class="title">
								<h1
									class="sa-strong-title sa-aos aos-init aos-animate"
									data-aos="fade-up"
								>
									توانمندی‌ها
								</h1>
							</div>
						</div>
						<div class="accordion" id="HR_accordion">
							<div class="accordion-item">
								<h2 class="accordion-header" id="head_HR">
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#HR_teams-xxx"
										aria-expanded="true"
										aria-controls="HR_teams-xxx"
									>
										<i
											class="fa-sharp-duotone fa-solid fa-caret-left"
										></i>
										خدمــــات داده
									</button>
								</h2>
								<div
									id="HR_teams-xxx"
									class="accordion-collapse collapse"
									aria-labelledby="head_HR"
									data-bs-parent="#HR_accordion"
								>
									<div class="accordion-body">
										<div class="skill-content">
											<div class="sa-paragraph-box">
												<div class="title">
													<h4>
														خدمات پیاده سازی بیگ
														دیتا
													</h4>
												</div>
												<div class="description">
													<ul>
														<li>
															طراحی معماری پلتفرم
															و توسعه پروتوتایپ
														</li>
														<li>
															ارائه best practice
															های صنایع مختلف
														</li>
														<li>
															استخراج داده های بی
															ساختار و تحلیل و
															تزریق در لحظه
														</li>
														<li>
															استقرار نظام حاکمیت
															بر دیتا و امن سازی
															پلتفرم
														</li>
													</ul>
												</div>
											</div>
											<div class="sa-paragraph-box">
												<div class="title">
													<h4>خدمات انبار داده ها</h4>
												</div>
												<div class="description">
													<ul>
														<li>
															مشاوره و طراحی انبار
															داده
														</li>
														<li>
															نصب، راه اندازی،
															پیکربندی و مدیریت
															تکنولوژی
														</li>
														<li>
															مشاوره در طراحی و
															توسعه Data Marts
														</li>
														<li>
															بهبود عملکرد و
															پایدار سازی انبار
															داده
														</li>
													</ul>
												</div>
											</div>
											<div class="sa-paragraph-box">
												<div class="title">
													<h4>
														خدمات نگهداری و پشتیبانی
														بیگ دیتا
													</h4>
												</div>
												<div class="description">
													<ul>
														<li>
															پشتیبانی 24*7 از
															فناوریهای مبتنی بر
															Hadoop
														</li>
														<li>
															بهبود عملکرد و
															شاخصهای کلیدی عملکرد
															سیستم
														</li>
														<li>
															ارائه گزارشهای منظم
															سطح سلامت و در دسترس
															بودن سیستم
														</li>
														<li>
															طراحی و پیاده سازی
															توافقنامه سطح خدمات
															SLA
														</li>
													</ul>
												</div>
											</div>
											<div class="sa-paragraph-box">
												<div class="title">
													<h4>
														خدمات مشاوره ییگ دیتا
													</h4>
												</div>
												<div class="description">
													<ul>
														<li>
															ارزیابی سطح تعالی
															سازمان در حوزه دیتا
														</li>
														<li>
															مشاوره و طراحی نقشه
															راه ارتقاء سازمان در
															حوزه دیتا
														</li>
														<li>
															مشاوره و طراحی
															معماری Data Lake
														</li>
														<li>
															پیاده سازی الگوهای
															حاکمیت داده
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
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
										خدمات امنیت دیجیتال
									</button>
								</h2>
								<div
									id="collapseTwo"
									class="accordion-collapse collapse"
									aria-labelledby="headingTwo"
									data-bs-parent="#HR_accordion"
								>
									<div class="accordion-body">
										<div class="skill-content">
											<div class="sa-paragraph-box">
												<div class="description">
													<p>
														واحد امنیت سایبری در
														ساعی، محصولات و
														راه‌حل‌های پیشرفته‌ای را
														برای ارتقاء سطح امنیت و
														حفاظت از دارایی‌های
														دیجیتال سازمان‌ها ارائه
														می‌دهد.
													</p>
												</div>
												<div class="title">
													<h4>محصولات ما:</h4>
												</div>
												<div class="description">
													<ul>
														<li>
															پلتفرم ارائه سرویس
															یکپارچه سازی
														</li>
														<li>
															اتصال، یکپارچه سازی
															و تامین امنیت
															اپلیکیشنها و
															سیستمهای سازمان در
															محیطهای مختلف و
															تسهیل گردش اطلاعات
															در سازمان
														</li>
														<li>
															مدیریت هویت و
															دسترسیها IAM
															(Identity and access
															management)
														</li>
														<li>
															تسهیل و ایمن سازی
															دسترسی به اپلیکیشنها
															و داده های حساس از
															طریق مدیریت موثر
															فرآیندهای تخصیص هویت
															کاربران، احراز هویت
															و فرآیند تایید.
														</li>
														<li>
															معماری اعتماد صفر
															Zero trust
															Architecture
														</li>
														<li>
															طراحی و پیاده سازی
															معماری دیجیتال
															سازمان بر اساس فلسفه
															عدم اعتماد به هیچ
															کاربر یا دستگاهی و
															تعبیه مکانیزم
															ارزیابی و گزارش دهی
															مستمر
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
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
										مدیریت خدمات
									</button>
								</h2>
								<div
									id="collapseThree"
									class="accordion-collapse collapse"
									aria-labelledby="headingThree"
									data-bs-parent="#HR_accordion"
								>
									<div class="accordion-body">
										<div class="skill-content">
											<div class="sa-paragraph-box">
												<div class="description">
													<p>
														واحد خدمات مدیریت شده IT
														و امنیت ساعی به ارائه
														پشتیبانی جامع در تمامی
														نیازهای زیرساختی و
														امنیتی به سازمانهای بزرگ
														اختصاص دارد. با بیش از
														یک دهه تجربه در ارائه
														طیف گسترده‌ای از خدمات
														شامل مدیریت حرفه‌ای
														سرویس‌ها،مرکز عملیات
														شبکه (NOC) و مرکز عملیات
														امنیت شبانه روزی (SOC)
														میتوانید مطمئن باشید که
														سرویسهای دیجیتال سازمان
														شما همواره در دسترس،
														کارآمد امن و همسو با
														اهداف کسب‌وکار شما باشد.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
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
										برنامه‌های دیجیتال سازمانی
									</button>
								</h2>
								<div
									id="collapseFour"
									class="accordion-collapse collapse"
									aria-labelledby="headingFour"
									data-bs-parent="#HR_accordion"
								>
									<div class="accordion-body">
										<div class="skill-content">
											<div class="sa-paragraph-box">
												<div class="description">
													<p>
														ساعی با بهره گیری از
														برترین متخصصان داخلی و
														خارجی به سازمان‌ها کمک
														می‌کند تا فرآیندهای
														کسب‌وکار خود را
														بهینه‌سازی کرده و با
														استفاده از تکنولوژیهای
														روز جهان مانند SAP,
														SAGE, MicroSoft اقدام به
														پیاده سازی بهترین
														رویه‌های جهانی (Best
														Practices) نمایند.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFive">
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#collapseFive"
										aria-expanded="false"
										aria-controls="collapseFive"
									>
										<i
											class="fa-sharp-duotone fa-solid fa-caret-left"
										></i>
										راهکار‌های مخابرات
									</button>
								</h2>
								<div
									id="collapseFive"
									class="accordion-collapse collapse"
									aria-labelledby="headingFive"
									data-bs-parent="#HR_accordion"
								>
									<div class="accordion-body">
										<div class="skill-content">
											<div class="sa-paragraph-box">
												<div class="description">
													<p>
														واحد امنیت سایبری در
														ساعی، محصولات و
														راه‌حل‌های پیشرفته‌ای را
														برای ارتقاء سطح امنیت و
														حفاظت از دارایی‌های
														دیجیتال سازمان‌ها ارائه
														می‌دهد.
													</p>
												</div>
												<div class="title">
													<h4>محصولات ما:</h4>
												</div>
												<div class="description">
													<ul>
														<li>
															پلتفرم ارائه سرویس
															یکپارچه سازی
														</li>
														<li>
															اتصال، یکپارچه سازی
															و تامین امنیت
															اپلیکیشنها و
															سیستمهای سازمان در
															محیطهای مختلف و
															تسهیل گردش اطلاعات
															در سازمان
														</li>
														<li>
															مدیریت هویت و
															دسترسیها IAM
															(Identity and access
															management)
														</li>
														<li>
															تسهیل و ایمن سازی
															دسترسی به اپلیکیشنها
															و داده های حساس از
															طریق مدیریت موثر
															فرآیندهای تخصیص هویت
															کاربران، احراز هویت
															و فرآیند تایید.
														</li>
														<li>
															معماری اعتماد صفر
															Zero trust
															Architecture
														</li>
														<li>
															طراحی و پیاده سازی
															معماری دیجیتال
															سازمان بر اساس فلسفه
															عدم اعتماد به هیچ
															کاربر یا دستگاهی و
															تعبیه مکانیزم
															ارزیابی و گزارش دهی
															مستمر
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingSix">
									<button
										class="accordion-button collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#collapseSix"
										aria-expanded="false"
										aria-controls="collapseSix"
									>
										<i
											class="fa-sharp-duotone fa-solid fa-caret-left"
										></i>
										خدمات مشاوره تحول دیجیتال
									</button>
								</h2>
								<div
									id="collapseSix"
									class="accordion-collapse collapse"
									aria-labelledby="headingSix"
									data-bs-parent="#HR_accordion"
								>
									<div class="accordion-body">
										<div class="skill-content">
											<div class="sa-paragraph-box">
												<div class="description mb-3">
													<p>
														خدمات مشاوره‌ای ما به
														گونه‌ای طراحی شده است که
														شرکت‌ها را از طریق
														نوآوری‌های استراتژیک،
														بهینه‌سازی فرآیندها و
														پیاده‌سازی فناوری‌های
														پیشرفته، به سمت رشد و
														تحول هدایت نماید. با
														دسترسی به بهترین تجربیات
														بین‌المللی و بهره‌مندی
														از مشاوران متخصص داخلی و
														خارجی، ما آماده‌ایم تا
														کسب‌وکار شما را در هر
														مرحله از مسیر تحول
														دیجیتال همراهی کنیم
													</p>
												</div>
												<div class="description">
													<ul>
														<li>
															<strong
																>برنامه‌ریزی
																استراتژیک
																دیجیتال:</strong
															>
															همسو کردن اهداف
															کسب‌وکار شما با
															راهکارهای تحول
															دیجیتال
														</li>
														<li>
															<strong
																>نقشه راه
																فناوری:</strong
															>
															شناسایی و پیاده‌سازی
															فناوری‌های مناسب
															برای دستیابی به رشد
															پایدار
														</li>
														<li>
															<strong
																>بازمهندسی
																فرآیندهای
																کسب‌وکار:</strong
															>
															افزایش بهره‌وری
															عملیاتی از طریق
															اتوماسیون و بهبود
															فرآیندهای کاری
														</li>
														<li>
															<strong
																>تصمیم‌گیری
																مبتنی بر
																داده:</strong
															>
															استفاده از تحلیل
															داده و هوش مصنوعی
															برای شناسایی
															فرصت‌های جدید
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
	
	<?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>