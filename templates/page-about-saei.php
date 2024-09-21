<?php
/*
Template Name: About Saei
*/
?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
</head>

<?php

/*get_header(); // Include the header*/
get_template_part( 'parts/header' );
?>

<body <?php body_class(); ?>>
	
		<div class="about-saei-page">
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
								href="#what-we-doing-2"
								data-target="#what-we-doing-2"
								>چه می‌کنیم؟</a
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

					<div class="page-content-wrapper">
						<section
							class="section-scroll our-history page-section-bottom page-section-top"
							id="our-history-1"
						>
							<div class="sa-paragraph-box border-bottom-light">
								<div class="title">
									<h1 class="sa-strong-title">داستان ما</h1>
								</div>
								<div class="description">
									<p>
										شرکت SAEI در سال 1389 توسط جمعی از
										متخصصان حوزه فناوری اطلاعات و مخابرات
										تاسیس شد. این شرکت با هدف اولیه ارائه
										خدمات به روز در بخش های فناوری اطلاعات و
										ارتباطات راه دور تاسیس شد.
									</p>
								</div>
							</div>
							<div class="sa-paragraph-box border-bottom-light">
								<div class="title">
									<h4>ماموریت</h4>
								</div>
								<div class="description">
									<p>
										برای ارائه آخرین فن آوری های جهانی به
										مشتریان خود و در عین حال بومی سازی و
										توسعه آنها برای رفع نیازهای خاص آنها.
										این ماموریت بر تعهد به ارائه راه‌حل‌های
										پیشرفته و بهبود مستمر این فناوری‌ها برای
										همسویی با الزامات محلی و افزایش رضایت
										مشتری تاکید دارد.
									</p>
								</div>
							</div>
							<div class="sa-paragraph-box border-bottom-light">
								<div class="title">
									<h4>چشم انداز</h4>
								</div>
								<div class="description">
									<p>
										تبدیل شدن به پلی برای انتقال فناوری و
										توسعه خدمات مهندسی بین ایران و اروپا.
									</p>
								</div>
							</div>
							<div class="sa-paragraph-box border-bottom-light">
								<div class="title">
									<h4>ارزش‌های ما</h4>
								</div>
								<div class="description">
									<p>
										لورم ایپسوم متن ساختگی با تولید سادگی
										نامفهوم از صنعت چاپ، و با استفاده از
										طراحان گرافیک است، چاپگرها و متون بلکه
										روزنامه و مجله در ستون و سطرآنچنان که
										لازم است، و برای شرایط فعلی تکنولوژی
										مورد نیاز، و کاربردهای متنوع با هدف
										بهبود ابزارهای کاربردی می باشد،
									</p>
								</div>
							</div>
							<div class="sa-tumbnails-box">
								<div class="title">
									<h4>تیم رهبری</h4>
								</div>
								<div class="tumbnails-wrapper">
									<div class="row">
										<div class="col-md-3 col-6">
											<div class="tumbnail-item">
												<div class="tumbnail-img">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
														alt=""
													/>
												</div>
												<div
													class="tumbnail-decription"
												>
													<div class="title">
														<h5>نام شخص</h5>
													</div>
													<div class="subtitle">
														<h6>پوزیشن کاری</h6>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-6">
											<div class="tumbnail-item">
												<div class="tumbnail-img">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
														alt=""
													/>
												</div>
												<div
													class="tumbnail-decription"
												>
													<div class="title">
														<h5>نام شخص</h5>
													</div>
													<div class="subtitle">
														<h6>پوزیشن کاری</h6>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-6">
											<div class="tumbnail-item">
												<div class="tumbnail-img">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
														alt=""
													/>
												</div>
												<div
													class="tumbnail-decription"
												>
													<div class="title">
														<h5>نام شخص</h5>
													</div>
													<div class="subtitle">
														<h6>پوزیشن کاری</h6>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-6">
											<div class="tumbnail-item">
												<div class="tumbnail-img">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-palceholder.webp"
														alt=""
													/>
												</div>
												<div
													class="tumbnail-decription"
												>
													<div class="title">
														<h5>نام شخص</h5>
													</div>
													<div class="subtitle">
														<h6>پوزیشن کاری</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="section-scroll what-we-doing page-section-bottom page-section-top"
							id="what-we-doing-2"
						>
							<div class="sa-paragraph-box">
								<div class="title">
									<h1 class="sa-strong-title">چه می‌کنیم؟</h1>
								</div>
								<div class="description">
									<p>
										لورم ایپسوم متن ساختگی با تولید سادگی
										نامفهوم از صنعت چاپ، و با استفاده از
										طراحان گرافیک است، چاپگرها و متون بلکه
										روزنامه و مجله در ستون و سطرآنچنان که
										لازم است، و برای شرایط فعلی تکنولوژی
										مورد نیاز، و کاربردهای متنوع با هدف
										بهبود ابزارهای کاربردی می باشد، کتابهای
										زیادی در شصت و سه درصد گذشته حال و
										آینده، شناخت فراوان جامعه و متخصصان را
										می طلبد.
									</p>
								</div>
							</div>
							<div class="sa-img-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp" alt="" />
							</div>
						</section>
						<section
							class="section-scroll key-moments test-tab page-section-bottom page-section-top"
							id="key-moments-3"
						>
							<div class="sa-paragraph-box no-padding">
								<div class="title">
									<h1 class="sa-strong-title">لحظات شاخص</h1>
								</div>
							</div>

							<div class="tabs-container">
								<div class="arrow" id="prev-arrow">
									<i class="fa-light fa-chevron-right"></i>
								</div>
								<div class="tabs-wrapper" id="tabs-wrapper">
									<div class="tab active" data-target="#tab1">
										۲۰۲۴
									</div>
									<div class="tab" data-target="#tab2">
										۲۰۲۳
									</div>
									<div class="tab" data-target="#tab3">
										۲۰۲۲
									</div>
									<div class="tab" data-target="#tab4">
										۲۰۲۱
									</div>
									<div class="tab" data-target="#tab5">
										۲۰۲۰
									</div>
								</div>
								<div class="arrow" id="next-arrow">
									<i class="fa-light fa-chevron-left"></i>
								</div>
							</div>
							<div class="tab-content">
								<div id="tab1" class="tab-pane active">
									<div class="tab-content-wrapper">
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>
															عنوان رویداد ۲۰۲۴
														</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>عنوان رویداد</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div class="tab-content-item full">
											<div
												class="sa-paragraph-box full-width-box-tab"
											>
												<div class="title">
													<h5>عنوان رویداد</h5>
												</div>
												<div class="description">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ، و با
														استفاده از طراحان گرافیک
														است، چاپگرها و متون بلکه
														روزنامه و مجله در ستون و
														سطرآنچنان که لازم است، و
														برای شرایط فعلی تکنولوژی
														مورد نیاز، و کاربردهای
														متنوع با هدف بهبود
														ابزارهای کاربردی می
														باشد، کتابهای زیادی در
														شصت و سه درصد گذشته حال
														و آینده، شناخت فراوان
														جامعه و متخصصان را می
														طلبد.
													</p>
													<span
														class="key-moments-date"
														>12 آبان 1402</span
													>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab2" class="tab-pane">
									<div class="tab-content-wrapper">
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>
															عنوان رویداد ۲۰۲۳
														</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>عنوان رویداد</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div class="tab-content-item full">
											<div
												class="sa-paragraph-box full-width-box-tab"
											>
												<div class="title">
													<h5>عنوان رویداد</h5>
												</div>
												<div class="description">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ، و با
														استفاده از طراحان گرافیک
														است، چاپگرها و متون بلکه
														روزنامه و مجله در ستون و
														سطرآنچنان که لازم است، و
														برای شرایط فعلی تکنولوژی
														مورد نیاز، و کاربردهای
														متنوع با هدف بهبود
														ابزارهای کاربردی می
														باشد، کتابهای زیادی در
														شصت و سه درصد گذشته حال
														و آینده، شناخت فراوان
														جامعه و متخصصان را می
														طلبد.
													</p>
													<span
														class="key-moments-date"
														>12 آبان 1402</span
													>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab3" class="tab-pane">
									<div class="tab-content-wrapper">
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>
															عنوان رویداد ۲۰۲۲
														</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>عنوان رویداد</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div class="tab-content-item full">
											<div
												class="sa-paragraph-box full-width-box-tab"
											>
												<div class="title">
													<h5>عنوان رویداد</h5>
												</div>
												<div class="description">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ، و با
														استفاده از طراحان گرافیک
														است، چاپگرها و متون بلکه
														روزنامه و مجله در ستون و
														سطرآنچنان که لازم است، و
														برای شرایط فعلی تکنولوژی
														مورد نیاز، و کاربردهای
														متنوع با هدف بهبود
														ابزارهای کاربردی می
														باشد، کتابهای زیادی در
														شصت و سه درصد گذشته حال
														و آینده، شناخت فراوان
														جامعه و متخصصان را می
														طلبد.
													</p>
													<span
														class="key-moments-date"
														>12 آبان 1402</span
													>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab4" class="tab-pane">
									<div class="tab-content-wrapper">
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>
															عنوان رویداد ۲۰۲۱
														</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>عنوان رویداد</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div class="tab-content-item full">
											<div
												class="sa-paragraph-box full-width-box-tab"
											>
												<div class="title">
													<h5>عنوان رویداد</h5>
												</div>
												<div class="description">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ، و با
														استفاده از طراحان گرافیک
														است، چاپگرها و متون بلکه
														روزنامه و مجله در ستون و
														سطرآنچنان که لازم است، و
														برای شرایط فعلی تکنولوژی
														مورد نیاز، و کاربردهای
														متنوع با هدف بهبود
														ابزارهای کاربردی می
														باشد، کتابهای زیادی در
														شصت و سه درصد گذشته حال
														و آینده، شناخت فراوان
														جامعه و متخصصان را می
														طلبد.
													</p>
													<span
														class="key-moments-date"
														>12 آبان 1402</span
													>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab5" class="tab-pane">
									<div class="tab-content-wrapper">
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>
															عنوان رویداد ۲۰۲۰
														</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div
											class="tab-content-item border-bottom-light"
										>
											<div class="tci-description">
												<div class="sa-paragraph-box">
													<div class="title">
														<h5>عنوان رویداد</h5>
													</div>
													<div class="description">
														<p>
															لورم ایپسوم متن
															ساختگی با تولید
															سادگی نامفهوم از
															صنعت چاپ، و با
															استفاده از طراحان
															گرافیک است، چاپگرها
															و متون بلکه روزنامه
															و مجله در ستون و
															سطرآنچنان که لازم
															است، و برای شرایط
															فعلی تکنولوژی مورد
															نیاز، و کاربردهای
															متنوع با هدف بهبود
															ابزارهای کاربردی می
															باشد، کتابهای زیادی
															در شصت و سه درصد
															گذشته حال و آینده،
															شناخت فراوان جامعه و
															متخصصان را می طلبد.
														</p>
														<span
															class="key-moments-date"
															>12 آبان 1402</span
														>
													</div>
												</div>
											</div>
											<div class="tci-img">
												<div class="sa-img-box">
													<img
														src="<?php echo get_template_directory_uri(); ?>/assets/img/palceholder.webp"
														alt=""
													/>
												</div>
											</div>
										</div>
										<div class="tab-content-item full">
											<div
												class="sa-paragraph-box full-width-box-tab"
											>
												<div class="title">
													<h5>عنوان رویداد</h5>
												</div>
												<div class="description">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ، و با
														استفاده از طراحان گرافیک
														است، چاپگرها و متون بلکه
														روزنامه و مجله در ستون و
														سطرآنچنان که لازم است، و
														برای شرایط فعلی تکنولوژی
														مورد نیاز، و کاربردهای
														متنوع با هدف بهبود
														ابزارهای کاربردی می
														باشد، کتابهای زیادی در
														شصت و سه درصد گذشته حال
														و آینده، شناخت فراوان
														جامعه و متخصصان را می
														طلبد.
													</p>
													<span
														class="key-moments-date"
														>12 آبان 1402</span
													>
												</div>
											</div>
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
									<h1 class="sa-strong-title">منابع</h1>
								</div>
							</div>
							<div class="sa-resources-item-wrapper">
								<div class="row">
									<div class="col-12 col-md-4">
										<div class="sa-resources-item">
											<div class="sa-ri-img mb-2">
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/resources-palceholder.webp"
													alt=""
												/>
											</div>
											<div class="sa-ri-decription">
												<div class="title">
													<h5>منشور اخلاقی</h5>
												</div>
												<div class="subtitle">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ،
													</p>
												</div>
												<div
													class="sa-dt-btn sa-ri-btn"
												>
													<button class="saei-btn">
														<i
															class="fas fa-download"
														></i>
														<span>دانلود</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4">
										<div class="sa-resources-item">
											<div class="sa-ri-img mb-2">
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/resources-palceholder.webp"
													alt=""
												/>
											</div>
											<div class="sa-ri-decription">
												<div class="title">
													<h5>گزارش سالانه ۱۴۰۲</h5>
												</div>
												<div class="subtitle">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ،
													</p>
												</div>
												<div
													class="sa-dt-btn sa-ri-btn"
												>
													<button class="saei-btn">
														<i
															class="fas fa-download"
														></i>
														<span>دانلود</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4">
										<div class="sa-resources-item">
											<div class="sa-ri-img mb-2">
												<img
													src="<?php echo get_template_directory_uri(); ?>/assets/img/resources-palceholder.webp"
													alt=""
												/>
											</div>
											<div class="sa-ri-decription">
												<div class="title">
													<h5>برندبوک ساعی</h5>
												</div>
												<div class="subtitle">
													<p>
														لورم ایپسوم متن ساختگی
														با تولید سادگی نامفهوم
														از صنعت چاپ،
													</p>
												</div>
												<div
													class="sa-dt-btn sa-ri-btn"
												>
													<button class="saei-btn">
														<i
															class="fas fa-download"
														></i>
														<span>دانلود</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>

		<script>
			document.addEventListener("DOMContentLoaded", function () {
				const tabsWrapper = document.getElementById("tabs-wrapper");
				const tabs = document.querySelectorAll(".tab");
				const prevArrow = document.getElementById("prev-arrow");
				const nextArrow = document.getElementById("next-arrow");
				const navbarLinks =
					document.querySelectorAll(".sticky-navbar a");

				let activeIndex = 0;

				function updateActiveTab(index) {
					tabs[activeIndex].classList.remove("active");
					document
						.querySelector(tabs[activeIndex].dataset.target)
						.classList.remove("active");
					activeIndex = index;
					tabs[activeIndex].classList.add("active");
					document
						.querySelector(tabs[activeIndex].dataset.target)
						.classList.add("active");
					tabs[activeIndex].scrollIntoView({
						behavior: "smooth",
						block: "nearest",
						inline: "center",
					});
					updateArrows();
				}

				function updateArrows() {
					if (activeIndex === 0) {
						prevArrow.classList.add("hidden");
					} else {
						prevArrow.classList.remove("hidden");
					}
					if (activeIndex === tabs.length - 1) {
						nextArrow.classList.add("hidden");
					} else {
						nextArrow.classList.remove("hidden");
					}
				}

				prevArrow.addEventListener("click", function () {
					if (activeIndex > 0) {
						updateActiveTab(activeIndex - 1);
					}
				});

				nextArrow.addEventListener("click", function () {
					if (activeIndex < tabs.length - 1) {
						updateActiveTab(activeIndex + 1);
					}
				});

				tabs.forEach((tab, index) => {
					tab.addEventListener("click", function (event) {
						event.preventDefault();
						event.stopPropagation();
						updateActiveTab(index);
					});
				});

				updateArrows();

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
					link.addEventListener("click", function (event) {
						event.preventDefault();
						const targetId = this.getAttribute("data-target");
						document
							.querySelector(targetId)
							.scrollIntoView({ behavior: "smooth" });
					});
				});
			});
		</script>
</body>


<?php get_template_part( 'parts/footer' ); ?>
<?php wp_footer(); ?>