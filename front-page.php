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



	<div class="page home-page">
			<div class="page-wrapper">
				<section class="about-us">
					<div class="wrapper">
						<video
							class="hero-video"
							autoplay
							muted
							loop
							playsinline
						>
							<source
								src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg.webm"
								type="video/webm"
							/>
							مرورگر شما از ویدیو پشتیبانی نمی‌کند.
						</video>
						<div class="hero-banner sa-banner">
							<div class="container">
								<div class="sa-b-content">
									<h1
										class="sa-strong-title mb-0 en-font"
										data-aos="fade-up"
										data-aos-offset="-250"
										data-aos-delay="85"
										data-aos-duration="1100"
										data-aos-easing="ease-in-out"
										data-aos-anchor-placement="top-center"
									>
										Your Partner in Digital
									</h1>
									<h1
										class="sa-strong-title mb-3 en-font"
										data-aos="fade-up"
										data-aos-offset="-250"
										data-aos-delay="85"
										data-aos-duration="1300"
										data-aos-easing="ease-in-out"
										data-aos-anchor-placement="top-center"
									>
										Transformation Journey
									</h1>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="about-us-plus">
					<div class="aup-title">
						<h5 class="wow animate__fadeInLeft">
							در ساعی، با ارائه پیشرفته‌ترین و مناسب‌ترین
							راه‌کارهای فناوری، کسب و کارها را در مسیر رشد و تحول
							دیجیتال همراهی می‌کنیم.
						</h5>
					</div>
				</div>

				<section class="sa-mission">
					<div class="container">
						<div class="container-fluid">
							<div class="wrapper sec-padding">
								<div class="sa-mission-card mission-box">
									<div class="sa-m-c-img wow animate__zoomIn">
										<img
											src="<?php echo get_template_directory_uri(); ?>/assets/img/saei-mission.png"
											alt=""
										/>
									</div>
									<div class="sa-m-c-content">
										<div class="title">
											<h4 class="wow animate__pulse">
												ماموريت
											</h4>
										</div>
										<div class="desc">
											<p class="wow animate__fadeInUp">
												ماموريت ما ارایه ی راه حلهای
												نوآورانه برای تسهيل تحول دیجیتال
												در کسب و کارها و ارتقای ارزشهای
												فناورانه در کشور است.
											</p>
										</div>
									</div>
								</div>
								<div class="sa-mission-card perspective-box">
									<div class="sa-m-c-img wow animate__zoomIn">
										<img
											src="<?php echo get_template_directory_uri(); ?>/assets/img/saei-perspective.png"
											alt=""
										/>
									</div>
									<div class="sa-m-c-content">
										<div class="title">
											<h4 class="wow animate__pulse">
												چشم انداز
											</h4>
										</div>
										<div class="desc">
											<p class="wow animate__fadeInUp">
												ما قصد داریم با تمرکز بر نوآوری
												و جلب رضایت مشتری در تمامی
												بازارها، تبدیل به شريک برتر
												سازمان ها در تحول دیجیتال در سطح
												کشور گردیم.
											</p>
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
								<div class="sa-t-c-title">
									<h2
										class="sa-strong-title mb-0"
										data-aos="fade-left"
										data-aos-offset="-100"
										data-aos-duration="700"
									>
										تیــــم ها
									</h2>
									<div
										data-aos="fade-left"
										data-aos-offset="-100"
										data-aos-duration="900"
									>
										<p class="mb-2">
											<span class="sa-strong"
												>سرمایه انسانی؛ قلب تپنده‌ی
												موفقیت ساعی</span
											>
										</p>
										<p>
											ما همواره در جستجوی استعدادهای نوآور
											و خلاق در حیطه‌های مختلف کاری هستیم.
											یادگیری مداوم و وجود فرصتهای برابر
											برای رشد در کنار هم از ارزشهای اصلی
											ساعی است.
										</p>
									</div>
									<div
										class="sa-t-c-btn"
										data-aos="fade-left"
										data-aos-offset="-100"
										data-aos-duration="900"
									>
										<a href="https://saeigroup.ir/job-offers/" class="saei-btn">
											به ما بپیوندید
										</a>
									</div>
								</div>
								<div class="sa-teams-items-wrapper">
									<div class="wrapper">
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													NOC (Network
													<br />
													Operation System)
												</h5>
											</div>
											<p>
												واحد خدمات مدیریت شده و امنیت به
												ارائه پشتیبانی جامع در تمامی
												نیازهای زیرساختی و امنیتی به
												سازمانهای بزرگ اختصاص دارد.
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Digital Security
												</h5>
											</div>
											<p>
												این تیم وظیفه حفاظت از سیستمها و
												داده های مشتریان را بر عهده دارد
												و با استفاده از محصولات روز دنیا
												بالاترین سطح امنیت را تضمین می
												کند.
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Data Services
												</h5>
											</div>
											<p>
												این تیم با جمع‌آوری داده‌ها
												تضمین صحت آن‌ها، تحلیل و پردازش
												داده‌ها، خروجیهای ارزشمندی برای
												مشتریان ارائه می‌دهد.
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Back Office
												</h5>
											</div>
											<p>
												ستون فقرات شرکت! یک تیم چابک،
												صمیمی، حرفه ای و همواره در دسترس
												که عملیات روزانه را هدایت میکند.
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													PMO (Project
													<br />
													Managment Office)
												</h5>
											</div>
											<p>
												ترکیبی از تجربه، دانش و تعهد تیم
												مدیریت پروژه را به یکی از
												مهمترین موتورهای پیش برنده ساعی
												تبدیل کرده است.
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Managed Services
												</h5>
											</div>
											<p>
												این تیم به عنوان یک بازوی
												استراتژیک، همراه مشتریان است تا
												از بهره‌برداری بهینه و کارآمد از
												سیستمها اطمینان حاصل شود.
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
								<h1
									class="sa-strong-title"
									data-aos="fade-up"
									data-aos-offset="-150"
									data-aos-delay="85"
									data-aos-duration="900"
									data-aos-easing="ease-in-out"
									data-aos-anchor-placement="top-center"
								>
									توانمندی ها
								</h1>
								<p
									class="mb-5"
									data-aos="fade-up"
									data-aos-offset="-150"
									data-aos-delay="85"
									data-aos-duration="900"
									data-aos-easing="ease-in-out"
									data-aos-anchor-placement="top-center"
								>
									ما مجموعه‌ای گسترده از راهکارهای دیجیتال و
									پلتفرم‌های برتر را ارائه می‌دهیم تا نتایجی
									معنادار ایجاد
									<br />
									کنیم، تجربه مشتریان را بهبود بخشیم و با سرعت
									و مقیاسی کم‌نظیر صنایع را متحول سازیم.
								</p>
							</div>
							<div class="sa-skills-tiles">
								<div class="sa-skills-tiles-wrapper">
									<div class="sa-skills-tiles-item">
										<a
											href="https://saeigroup.ir/skills/"
										>
											<div
												class="sa-background-img skill-dss"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/data-services.webp"
													alt=""
												/>
											</div>
											<div class="title">
												<h4 class="en-font">
													Data Services
												</h4>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a
											href="https://saeigroup.ir/skills/"
										>
											<div
												class="sa-background-img skill-dss"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/managed-services.webp"
													alt=""
												/>
											</div>
											<div class="title">
												<h4 class="en-font">
													Managed Services
												</h4>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a
											href="https://saeigroup.ir/skills/"
										>
											<div
												class="sa-background-img skill-dss"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/digital-security-solutions.webp"
													alt=""
												/>
											</div>
											<div class="title">
												<h4 class="en-font">
													Digital Security
													<br />
													Solutions
												</h4>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a
											href="https://saeigroup.ir/skills/"
										>
											<div
												class="sa-background-img skill-dss"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/digital-enterprise-application.webp"
													alt=""
												/>
											</div>
											<div class="title">
												<h4 class="en-font">
													Digital Enterprise
													<br />
													Application
												</h4>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a
											href="https://saeigroup.ir/skills/"
										>
											<div
												class="sa-background-img skill-dss"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/telecome-solutions.webp"
													alt=""
												/>
											</div>
											<div class="title">
												<h4 class="en-font">
													Telecome
													<br />
													Solutions
												</h4>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a
											href="https://saeigroup.ir/skills/"
										>
											<div
												class="sa-background-img skill-dss"
											>
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/digital-transformation-consulting-services.webp"
													alt=""
												/>
											</div>
											<div class="title">
												<h4 class="en-font">
													Digital Transformation
													<br />
													Consulting Services
												</h4>
											</div>
										</a>
									</div>
								</div>
								<div class="sa-skills-tiles-wrapper-mobile">
									<div class="sa-skills-tiles-item-mobile">
										<a href="https://saeigroup.ir/skills/">
											<img
												class="icon"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/data-services.webp"
												alt=""
											/>
											<h3 class="title en-font">
												Data Services
											</h3>
											<img
												class="arrow"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-skills-arrow.svg"
												alt=""
											/>
										</a>
									</div>
									<div class="sa-skills-tiles-item-mobile">
										<a href="https://saeigroup.ir/skills/">
											<img
												class="icon"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/digital-enterprise-application.webp"
												alt=""
											/>
											<h3 class="title en-font">
												Digital Enterprise Application
											</h3>
											<img
												class="arrow"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-skills-arrow.svg"
												alt=""
											/>
										</a>
									</div>
									<div class="sa-skills-tiles-item-mobile">
										<a href="https://saeigroup.ir/skills/">
											<img
												class="icon"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/managed-services.webp"
												alt=""
											/>
											<h3 class="title en-font">
												Managed Services
											</h3>
											<img
												class="arrow"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-skills-arrow.svg"
												alt=""
											/>
										</a>
									</div>
									<div class="sa-skills-tiles-item-mobile">
										<a href="https://saeigroup.ir/skills/">
											<img
												class="icon"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/digital-security-solutions.webp"
												alt=""
											/>
											<h3 class="title en-font">
												Digital Security Solutions
											</h3>
											<img
												class="arrow"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-skills-arrow.svg"
												alt=""
											/>
										</a>
									</div>
									<div class="sa-skills-tiles-item-mobile">
										<a href="https://saeigroup.ir/skills/">
											<img
												class="icon"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/digital-transformation-consulting-services.webp"
												alt=""
											/>
											<h3 class="title en-font">
												Digital Transformation
												Consulting Services
											</h3>
											<img
												class="arrow"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-skills-arrow.svg"
												alt=""
											/>
										</a>
									</div>
									<div class="sa-skills-tiles-item-mobile">
										<a href="https://saeigroup.ir/skills/">
											<img
												class="icon"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/telecome-solutions.webp"
												alt=""
											/>
											<h3 class="title en-font">
												Telecome Solutions
											</h3>
											<img
												class="arrow"
												src="<?php echo get_template_directory_uri(); ?>/assets/img/sa-skills-arrow.svg"
												alt=""
											/>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

    <?php get_template_part( 'parts/footer' ); ?>
    <?php wp_footer(); ?>
</body>

</html>