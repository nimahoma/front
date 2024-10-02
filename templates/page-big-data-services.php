<?php
/*
Template Name: Big Data Services
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

	<div class="page skill-page big-data-services-page">
		<div class="page-wrapper">
			<div class="container">
				<div class="skills-content-wrapper">
					<div class="skills-main-content-wrapper">
						<section class="skill-title">
							<div
								class="sa-paragraph-box page-section-bottom first-things"
							>
								<div class="title">
									<h1 class="sa-strong-title">
										Big Data Services
									</h1>
								</div>
								<div class="description">
									<p>
										متن مورد نظر در حال تهیه می باشد.
										متن مورد نظر در حال تهیه می باشد.
										متن مورد نظر در حال تهیه می باشد.
										متن مورد نظر در حال تهیه می باشد.
										متن مورد نظر در حال تهیه می باشد.
										متن مورد نظر در حال تهیه می باشد.
										متن مورد نظر در حال تهیه می باشد.
										متن مورد نظر در حال تهیه می باشد.
									</p>
								</div>
							</div>
						</section>
						<section class="skill-content">
							<div
								class="sa-paragraph-box border-bottom-light"
							>
								<div class="title">
									<h4>خدمات پیاده سازی بیگ دیتا</h4>
								</div>
								<div class="description">
									<ul>
										<li>
											طراحی معماری پلتفرم و توسعه
											پروتوتایپ
										</li>
										<li>
											ارائه best practice های صنایع
											مختلف
										</li>
										<li>
											استخراج داده های بی ساختار و
											تحلیل و تزریق در لحظه
										</li>
										<li>
											استقرار نظام حاکمیت بر دیتا و
											امن سازی پلتفرم
										</li>
									</ul>
								</div>
							</div>
							<div
								class="sa-paragraph-box border-bottom-light"
							>
								<div class="title">
									<h4>خدمات انبار داده ها</h4>
								</div>
								<div class="description">
									<ul>
										<li>مشاوره و طراحی انبار داده</li>
										<li>
											نصب، راه اندازی، پیکربندی و
											مدیریت تکنولوژی
										</li>
										<li>
											مشاوره در طراحی و توسعه Data
											Marts 
										</li>
										<li>
											بهبود عملکرد و پایدار سازی انبار
											داده
										</li>
									</ul>
								</div>
							</div>
							<div
								class="sa-paragraph-box border-bottom-light"
							>
								<div class="title">
									<h4>
										خدمات نگهداری و پشتیبانی بیگ دیتا
									</h4>
								</div>
								<div class="description">
									<ul>
										<li>
											پشتیبانی 24*7 از فناوریهای مبتنی
											بر Hadoop
										</li>
										<li>
											بهبود عملکرد و شاخصهای کلیدی
											عملکرد سیستم
										</li>
										<li>
											ارائه گزارشهای منظم سطح سلامت و
											در دسترس بودن سیستم 
										</li>
										<li>
											طراحی و پیاده سازی توافقنامه سطح
											خدمات SLA
										</li>
									</ul>
								</div>
							</div>
							<div
								class="sa-paragraph-box border-bottom-light"
							>
								<div class="title">
									<h4>خدمات مشاوره ییگ دیتا</h4>
								</div>
								<div class="description">
									<ul>
										<li>
											ارزیابی سطح تعالی سازمان در حوزه
											دیتا
										</li>
										<li>
											مشاوره و طراحی نقشه راه ارتقاء
											سازمان در حوزه دیتا
										</li>
										<li>
											مشاوره و طراحی معماری Data Lake
										</li>
										<li>
											پیاده سازی الگوهای حاکمیت داده
										</li>
									</ul>
								</div>
							</div>
						</section>
					</div>
					<div
						class="skills-sidebar-content-wrapper first-things"
					>
						<div class="sa-skills-sidebar-wrapper">
							<div class="title">
								<h4>سایر توانمندی‌ها</h4>
							</div>
							<div class="sa-skill-sidebar-item">
								<a href="https://gold3d.ir/saei/digital-security-solutions/">
									<div class="title">
										<h4 class="en-font">
											Digital Security Solutions
										</h4>
									</div>
								</a>
							</div>
							<div class="sa-skill-sidebar-item">
								<a href="#">
									<div class="title">
										<h4 class="en-font">
											Managed Services
										</h4>
									</div>
								</a>
							</div>
							<div class="sa-skill-sidebar-item">
								<a href="#">
									<div class="title">
										<h4 class="en-font">
											Digital Enterprise Application
										</h4>
									</div>
								</a>
							</div>
							<div class="sa-skill-sidebar-item">
								<a href="#">
									<div class="title">
										<h4 class="en-font">
											Telecom Solution
										</h4>
									</div>
								</a>
							</div>
							<div class="sa-skill-sidebar-item">
								<a href="#">
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
					</div>
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