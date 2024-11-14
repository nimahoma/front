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

    <div class="page page-wrapper">
				<section class="about-us">
					<div class="wrapper">
						<div class="hero-banner sa-banner">
							<div class="container">
								<div class="sa-b-content">
									<h1
										class="sa-strong-title sa-slogan-color mb-0 en-font wow animate__slideInDown"
									>
										Your Partner in
									</h1>
									<h1
										class="sa-strong-title sa-slogan-color mb-3 en-font wow animate__slideInUp"
									>
										Digital Transformation Journey.
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
												ماموريت ساعی
											</h4>
										</div>
										<div class="desc">
											<p class="wow animate__fadeInUp">
												ماموريت ما ارایه ی راه حلهای
												نوآورانه برای تسهيل تحول دیجیتال
												در کسب و کارها و ارتقای ارزشهای
												فناورانه در کشور است
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
												چشم انداز ساعی
											</h4>
										</div>
										<div class="desc">
											<p class="wow animate__fadeInUp">
												ما قصد داریم با تمرکز بر نوآوری
												و جلب رضایت مشتری در تمامی
												بازارها، تبدیل به شريک برتر
												سازمان ها در تحول دیجیتال در سطح
												کشور گردیم
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
									<h2 class="sa-strong-title mb-0">
										تیــــم‌ها
									</h2>
									<div>
										<p class="mb-2">
											<strong
												>سرمایه انسانی؛ قلب تپنده‌ی
												موفقیت ساعی</strong
											>
										</p>
										<p>
											ما همواره در جستجوی استعدادهای نوآور
											و خلاق در حیطه‌های مختلف کاری هستیم.
											یادگیری مداوم و وجود فرصتهای برابر
											برای
										</p>
									</div>
									<div class="sa-t-c-btn">
										<button class="saei-btn">
											به ما بپیوندید
										</button>
									</div>
								</div>
								<div class="sa-teams-items-wrapper">
									<div class="wrapper">
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Back Office
												</h5>
											</div>
											<p>
												این تیم وظیفه خطیر حفاظت از
												سیستمها و داده های مشتریان را
												برعهده داشته و با استفاده از
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Digital Security
												</h5>
											</div>
											<p>
												این تیم وظیفه خطیر حفاظت از
												سیستمها و داده های مشتریان را
												برعهده داشته و با استفاده از
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Data Services
												</h5>
											</div>
											<p>
												این تیم وظیفه خطیر حفاظت از
												سیستمها و داده های مشتریان را
												برعهده داشته و با استفاده از
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													NOC (Network
													<br />
													Operation System)
												</h5>
											</div>
											<p>
												این تیم وظیفه خطیر حفاظت از
												سیستمها و داده های مشتریان را
												برعهده داشته و با استفاده از
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
												این تیم وظیفه خطیر حفاظت از
												سیستمها و داده های مشتریان را
												برعهده داشته و با استفاده از
											</p>
										</div>
										<div class="sa-teams-item">
											<div class="title">
												<h5 class="en-font">
													Managed Services
												</h5>
											</div>
											<p>
												این تیم وظیفه خطیر حفاظت از
												سیستمها و داده های مشتریان را
												برعهده داشته و با استفاده از
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
								<p class="mb-5">
									ما مجموعه‌ای گسترده از راهکارهای دیجیتال و
									پلتفرم‌های برتر را ارائه می‌دهیم تا نتایجی
									معنادار ایجاد
									<br />
									کنیم، تجربه مشتریان را بهبود بخشیم و با سرعت
									و مقیاسی کم‌نظیر صنایع را متحول سازیم
								</p>
							</div>
							<div class="sa-skills-tiles">
								<div class="sa-skills-tiles-wrapper">
									<div class="sa-skills-tiles-item">
										<a href="#">
											<div
												class="sa-background-img skill-dss"
											>
												<div class="title">
													<h4 class="en-font">
														Digital Security
														<br />
														Solutions
													</h4>
												</div>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a href="#">
											<div
												class="sa-background-img skill-ms"
											>
												<div class="title">
													<h4 class="en-font">
														Managed Services
													</h4>
												</div>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a
											href="file:///G:/HOME%20OFFICE/WebSite%20Projects/Saei/front/HTML/big-data-services.html"
										>
											<div
												class="sa-background-img skill-bds"
											>
												<div class="title">
													<h4 class="en-font">
														Data Services
													</h4>
												</div>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a href="#">
											<div
												class="sa-background-img skill-dt"
											>
												<div class="title">
													<h4 class="en-font">
														Digital Transformation
														<br />
														Consulting Services
													</h4>
												</div>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a href="#">
											<div
												class="sa-background-img skill-ts"
											>
												<div class="title">
													<h4 class="en-font">
														Telecom
														<br />
														Solution
													</h4>
												</div>
											</div>
										</a>
									</div>
									<div class="sa-skills-tiles-item">
										<a href="#">
											<div
												class="sa-background-img skill-dea"
											>
												<div class="title">
													<h4 class="en-font">
														Digital Enterprise
														Application
													</h4>
												</div>
											</div>
										</a>
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