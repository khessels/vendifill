<!DOCTYPE html>
<html class="no-js" lang="en">

	<head>
		<title>VendGO</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

		<meta name="theme-color" content="#056EB9" />
		<meta name="msapplication-navbutton-color" content="#056EB9" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico">
		<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/png" sizes="32x32">
		<link rel="icon" href="img/favicon/favicon-16x16.png" type="image/png" sizes="16x16">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" sizes="180x180">
		<link rel="manifest" href="img/favicon/manifest.json">

		<!-- Critical styles
		================================================== -->
		<link rel="stylesheet" href="css/critical.min.css" type="text/css">

		<!-- Load google font
		================================================== -->
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Assistant:200,300,400,600,700,800', 'Raleway:600&display=swap'] }
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();
		</script>

		<!-- Load other scripts
		================================================== -->
		<script type="text/javascript">
			var _html = document.documentElement,
				isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

			_html.className = _html.className.replace("no-js","js");
			_html.classList.add( isTouch ? "touch" : "no-touch");
		</script>
		<script type="text/javascript" src="js/device.min.js"></script>
	</head>

	<body class="page-elements-counters">
		<div id="app">
			<!-- start header -->
			<header id="top-bar" class="top-bar top-bar--s1" data-nav-fixed="true" data-nav-anchor="false">
				<div class="top-bar__line-contacts">
					<div class="container-fluid">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-auto">
								<div class="top-bar__contacts">
									<ul>
										<li>
											<a href="tel:+19981503020">+1 998 150 30 20</a>
											&nbsp;
											<a href="tel:+31859644725">+31 85 964 47 25</a>
										</li>

										<li>
											<a href="mailto:support@vendgo.com">support@vendgo.com</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-auto">
								<div class="row">
									<div class="col-auto">
										<nav class="top-bar__subnav">
											<ul>
												<li><a href="#">Delivery</a></li>
												<li><a href="#">Payment</a></li>
												<li><a href="#">Return</a></li>
											</ul>
										</nav>
									</div>

									<div class="col-auto">
										<div class="top-bar__socials">
											<!-- start social buttons -->
											<div class="s-btns s-btns--gray">
												<ul class="d-flex flex-row flex-wrap justify-content-center align-items-center">
													<li><a class="f" href="#"><i class="fontello-facebook"></i></a></li>
													<li><a class="t" href="#"><i class="fontello-twitter"></i></a></li>
													<li><a class="y" href="#"><i class="fontello-youtube-play"></i></a></li>
													<li><a class="i" href="#"><i class="fontello-instagram"></i></a></li>
												</ul>
											</div>
											<!-- end social buttons -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- class "compensate-for-scrollbar" from fancybox.js, use if data-fixed="true" -->
				<div class="top-bar__line-menu    compensate-for-scrollbar">
					<div class="top-bar__side-menu-button js-side-menu-toggler">
						<span></span>
					</div>

					<a class="top-bar__logo site-logo" href="index">
						<img class="img-fluid" src="img/site_logo/logo_1.svg" width="155" height="40" alt="demo" />
					</a>

					<a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler" href="javascript:void(0);">
						<span></span>
					</a>

					<div class="top-bar__collapse">
						<div>
							<nav id="top-bar__navigation" class="top-bar__navigation" role="navigation">
								<ul>
									<li class="has-submenu">
										<a class="nav-link" href="javascript:void(0);">Home</a>

										<ul class="submenu">
											<li><a href="index">Home Page 1</a></li>
											<li><a href="index">Home Page 2</a></li>
											<li><a href="index_3">Shop</a></li>
										</ul>
									</li>

									<li class="has-submenu">
										<a class="nav-link" href="javascript:void(0);">Pages</a>

										<ul class="submenu">
											<li><a href="about_us">About Us</a></li>
											<li><a href="services">Services</a></li>
											<li><a href="product_details">Product Single</a></li>
											<li><a href="gallery_masonry">Gallery Masonry</a></li>
											<li><a href="gallery_classic">Gallery Classic</a></li>
											<li><a href="faq">FAQ</a></li>
											<li><a href="typography">Typography</a></li>
											<li><a href="404">404 Page</a></li>
										</ul>
									</li>

									<li>
										<a class="nav-link" href="products">Products</a>
									</li>

									<li>
										<a class="nav-link" href="blog">Blog</a>
									</li>

									<li class="has-submenu">
										<a class="nav-link" href="javascript:void(0);">Shop</a>

										<ul class="submenu">
											<li><a href="shop_catalog">Catalog</a></li>
											<li><a href="product_single">Single Product</a></li>
											<li><a href="/cart/checkout">Cart & Checkout</a></li>
											<li><a href="account">Account</a></li>
										</ul>
									</li>

									<li>
										<a class="nav-link" href="contact">Contacts</a>
									</li>

									<li class="has-submenu">
										<a class="nav-link active" href="javascript:void(0);">Elements</a>

										<ul class="submenu">
											<li><a href="/element/accordions">Accordion</a></li>
											<li><a href="/element/alerts">Alerts</a></li>
											<li><a class="active" href="elements-counters">Counters</a></li>
											<li><a href="elements-form">Forms</a></li>
											<li><a href="elements-icons">IconList</a></li>
											<li><a href="elements-info_tables">Tables</a></li>
											<li><a href="elements-media_embeds">Media Embeds</a></li>
											<li><a href="elements-pricing_tables">Pricing Tables</a></li>
											<li><a href="elements-tabs">Tabs</a></li>
										</ul>
									</li>
								</ul>
							</nav>

							<div class="top-bar__address">
								<ul class="contact-info">
									<li>
										<div class="__label">Address</div>

										<p>
											5272 Lyngate Ct Burke,<br>
											VA 2015-1688
										</p>
									</li>

									<li>
										<div class="__label">Phone</div>

										<p>
											+1 998 150 30 20 <br>
											+31 85 964 47 25
										</p>
									</li>

									<li>
										<div class="__label">Social</div>

										<!-- start social buttons -->
										<div class="s-btns s-btns--gray">
											<ul class="d-flex flex-row flex-wrap align-items-center">
												<li><a class="f" href="#"><i class="fontello-facebook"></i></a></li>
												<li><a class="t" href="#"><i class="fontello-twitter"></i></a></li>
												<li><a class="y" href="#"><i class="fontello-youtube-play"></i></a></li>
												<li><a class="i" href="#"><i class="fontello-instagram"></i></a></li>
											</ul>
										</div>
										<!-- end social buttons -->
									</li>
								</ul>
							</div>

							<div class="top-bar__action">
								<a class="custom-btn" href="#">Get in Touch</a>

								<a class="custom-btn custom-btn--big custom-btn--s2" href="#">Get in Touch</a>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- end header -->

			<!-- start side menu -->
			<div id="side-menu" class="side-menu  d-none">
				<div class="side-menu__inner">
					<ul class="side-menu__menu">
						<li class="active"><a href="#">Documents</a></li>
						<li><a href="#">Downloads</a></li>
						<li><a href="#">Useful links</a></li>
					</ul>

					<div class="side-menu__contacts">
						<ul class="contact-info">
							<li>
								<div class="__label">Address</div>

								<p>
									5272 Lyngate Ct Burke,
									VA 2015-1688
								</p>
							</li>

							<li>
								<div class="__label">Phone</div>

								<p>
									+1 998 150 30 20 <br>
									+31 85 964 47 25
								</p>
							</li>

							<li>
								<div class="__label">Social</div>

								<!-- start social buttons -->
								<div class="s-btns s-btns--gray">
									<ul class="d-flex flex-row flex-wrap align-items-center">
										<li><a class="f" href="#"><i class="fontello-facebook"></i></a></li>
										<li><a class="t" href="#"><i class="fontello-twitter"></i></a></li>
										<li><a class="y" href="#"><i class="fontello-youtube-play"></i></a></li>
										<li><a class="i" href="#"><i class="fontello-instagram"></i></a></li>
									</ul>
								</div>
								<!-- end social buttons -->
							</li>
						</ul>
					</div>

					<div>
						<a class="custom-btn custom-btn--big custom-btn--s2 wide" href="#">Get in Touch</a>
					</div>
				</div>
			</div>
			<!-- end side menu -->

			<!-- start hero -->
			<div
				id="hero"
				class="hero jarallax"
				data-speed="0.6"
				data-img-position="50% 48%"
				style="background-image: url(img/hero_img/1.jpg);background-position: 15% center;background-color: #2d69b9">

				<div class="hero__inner">
					<div class="container">
						<div class="row">
							<div class="col-11 col-sm-12">
								<h4 class="hero__subtitle">VendGo</h4>
								<h1 class="hero__title">Counters</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end hero -->

			<!-- start main -->
			<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading">
									<h5 class="__subtitle">Counters</h5>

									<h2 class="__title">Variation 1</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start counter -->
								<div class="counter counter--s1">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-12 col-md-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="2000">0</div>

														<h4 class="__title">Machines installed</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-md-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="500" data-after-text="+">0</div>

														<h4 class="__title">Partners in the World</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-md-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="1" data-after-text="bil">0</div>

														<h4 class="__title">Happy Clients</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-md-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="100" data-after-text="k">0</div>

														<h4 class="__title">Companies</h4>
													</div>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end counter -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--bg-img jarallax" data-speed="0.3" data-img-position="50% 70%" style="background-image: url(img/bg_7.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading section-heading--white">
									<h5 class="__subtitle">Counters</h5>

									<h2 class="__title">Variation 2</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start counter -->
								<div class="counter counter--s3">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="2000">0</div>

														<h4 class="__title text-white">Machines installed</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="500" data-after-text="+">0</div>

														<h4 class="__title text-white">Partners in the World</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="1" data-after-text="bil">0</div>

														<h4 class="__title text-white">Happy Clients</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="100" data-after-text="k">0</div>

														<h4 class="__title text-white">Companies</h4>
													</div>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end counter -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading">
									<h5 class="__subtitle">Counters</h5>

									<h2 class="__title">Variation 3</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start counter -->
								<div class="counter counter--s2">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item text-center">
													<i class="__ico"><svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g><path d="M54 2H10a1 1 0 0 0-1 1v54a1 1 0 0 0 1 1h1v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3h30v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3h1a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM15 60h-2v-2h2zm36 0h-2v-2h2zm2-4H11V4h42z"/><path d="M14 38h24a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H14a1 1 0 0 0-1 1v30a1 1 0 0 0 1 1zm23-12H15v-8h22zm0 10H15v-8h22zM15 8h22v8H15zM36 44H16a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H17v-4h18z"/><path d="M17 10h2v4h-2zM21 10h2v4h-2zM25 10h2v4h-2zM29 10h2v4h-2zM33 10h2v4h-2zM17 20h2v4h-2zM21 20h2v4h-2zM25 20h2v4h-2zM29 20h2v4h-2zM33 20h2v4h-2zM17 30h2v4h-2zM21 30h2v4h-2zM25 30h2v4h-2zM29 30h2v4h-2zM33 30h2v4h-2zM42 26h8a1 1 0 0 0 1-1V13a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1zm1-12h6v10h-6z"/><path d="M45 16h2v2h-2zM45 20h2v2h-2zM23 47h6v2h-6zM43 29h2v4h-2zM47 29h2v4h-2zM43 35h6v2h-6z"/></g></svg></i>

													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="2000">0</div>

														<h4 class="__title">Machines installed</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item text-center">
													<i class="__ico"><svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 -24 480 480"><path d="M472 96H365.336L327.383 4.922A7.997 7.997 0 0 0 320 0H184a8 8 0 0 0-8 8v32a8 8 0 0 0 8 8h106.457l18 48H248a8 8 0 0 0-8 8v48a8 8 0 0 0 8 8h8.457L272 424.473a8 8 0 0 0 8 7.527h160a8 8 0 0 0 8-7.527L463.543 160H472a8 8 0 0 0 8-8v-48a8 8 0 0 0-8-8zM303.496 37.191A7.998 7.998 0 0 0 296 32H192V16h122.664L348 96h-22.457zM437.16 336h-34.969C416.051 323.898 424 306.398 424 288s-7.95-35.898-21.809-48h40.618zM408 288c0 26.508-21.492 48-48 48s-48-21.492-48-48 21.492-48 48-48c26.5.027 47.973 21.5 48 48zm-112 0a63.82 63.82 0 0 0 21.809 48h-34.97l-5.648-96h40.618A63.82 63.82 0 0 0 296 288zm-8.457 128l-3.758-64h152.43l-3.758 64zm156.21-192H276.247l-3.758-64h175.024zM464 144H256v-32h208zm0 0"/><path d="M408 384h-24a8 8 0 0 0 0 16h24a8 8 0 0 0 0-16zm0 0M352 384h-8a8 8 0 0 0 0 16h8a8 8 0 0 0 0-16zm0 0M24 432h208c13.254 0 24-10.746 24-24v-32a23.95 23.95 0 0 0-11.2-20.23 23.212 23.212 0 0 0 0-23.54A23.95 23.95 0 0 0 256 312c0-43.258-29.922-88-80-88H88c-57.777 0-88 44.273-88 88a23.95 23.95 0 0 0 11.2 20.23 23.212 23.212 0 0 0 0 23.54A23.95 23.95 0 0 0 0 376v32c0 13.254 10.746 24 24 24zm216-24a8 8 0 0 1-8 8H24a8 8 0 0 1-8-8v-32a8 8 0 0 1 8-8h62.953l118.984 31.727a7.993 7.993 0 0 0 9.223-4.153L228.945 368H232a8 8 0 0 1 8 8zM24 344a8 8 0 0 1 8-8h192a8 8 0 0 1 0 16H32a8 8 0 0 1-8-8zm187.055 24l-7.293 14.594L149.047 368zM88 240h88c44.145 0 64 42.105 64 72a8 8 0 0 1-8 8H24a8 8 0 0 1-8-8c0-28.945 19.2-72 72-72zm0 0"/><path d="M88 272h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M56 304h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M96 296a8 8 0 0 0 8 8h8a8 8 0 0 0 0-16h-8a8 8 0 0 0-8 8zm0 0M152 304h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M200 304h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M128 272h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M168 272h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0"/></svg></i>

													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="500" data-after-text="+">0</div>

														<h4 class="__title">Products & Ingredients</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item text-center">
													<i class="__ico"><svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.65 380.65"><path d="M310.805 268.65h-44.84a53.568 53.568 0 0 0-26.44 6.96 54.529 54.529 0 0 0-17.4 15.64 53.75 53.75 0 0 0-9.28-.8h-44.88a53.651 53.651 0 0 0-9.28.8 54.484 54.484 0 0 0-17.4-15.64 53.568 53.568 0 0 0-26.44-6.96h-44.84c-29.796.066-53.934 24.204-54 54v30.44a5.8 5.8 0 0 0 5.8 5.76h92v16a5.8 5.8 0 0 0 5.8 5.8h141.44a5.8 5.8 0 0 0 5.8-5.8v-16h92a5.8 5.8 0 0 0 5.8-5.8v-30.4c-.066-29.734-24.107-53.846-53.84-54zm-196.4 70.6V347.25h-86.8v-24.6c.066-23.39 19.01-42.334 42.4-42.4h44.84a41.998 41.998 0 0 1 20.72 5.44 43.083 43.083 0 0 1 11.24 9.16 54.281 54.281 0 0 0-32.4 44.4zm140.72 5.2v24.64h-129.56v-25.08-1.32-3.12-4.2l.24-.96.4-1.44.28-.96c5.746-17.415 21.982-29.206 40.32-29.28l1.16-.64h44.88c21.297.078 39.258 15.885 42.04 37 0 .88 0 1.76.24 2.64v2.72zm98.08 2.84h-86.4v-3.48-1.32-1.36V330.49l-.28-1v-1.96l-.56-1.56a54.44 54.44 0 0 0-29.44-30.84 43.081 43.081 0 0 1 8.68-9.44 41.998 41.998 0 0 1 20.72-5.44h44.88c23.389.066 42.334 19.01 42.4 42.4v24.64z"/><circle cx="190.645" cy="77.85" r="6.56"/><path d="M121.285 189.17a40.682 40.682 0 0 0-28.88-12c-22.555-.02-40.856 18.248-40.876 40.804-.02 22.555 18.248 40.856 40.804 40.876s40.856-18.248 40.876-40.804a40.841 40.841 0 0 0-11.924-28.876zm-8.2 49.48c-11.417 11.421-29.93 11.425-41.352.008-11.421-11.417-11.425-29.93-.008-41.352 11.417-11.421 29.93-11.425 41.352-.008a29.24 29.24 0 0 1 8.568 20.672 29.157 29.157 0 0 1-8.56 20.68z"/><circle cx="233.045" cy="77.85" r="6.56"/><path d="M258.725 22.73A109.64 109.64 0 0 0 190.405.01a109.642 109.642 0 0 0-68.32 22.72c-17.92 14.32-29 34.24-29 56.28a66.478 66.478 0 0 0 8.28 32 80.804 80.804 0 0 0 20.36 24l-4.6 30.6a5.76 5.76 0 0 0 8.6 5.84l31.28-18.24a114.317 114.317 0 0 0 15.12 3.4 120.053 120.053 0 0 0 18.32 1.4 109.64 109.64 0 0 0 68.32-22.72c17.88-14.36 28.96-34.24 28.96-56.28s-11.08-41.96-29-56.28zm-7.2 103.6a98.038 98.038 0 0 1-61.12 20c-5.53.008-11.053-.406-16.52-1.24a102.766 102.766 0 0 1-16-3.72 5.76 5.76 0 0 0-4.64.52l-22.84 13.48 3.32-22a5.799 5.799 0 0 0-2.36-5.56 70.206 70.206 0 0 1-20-22.4 54.964 54.964 0 0 1-6.8-26.4c0-18.4 9.4-35.12 24.6-47.28a98.038 98.038 0 0 1 61.12-20 98.038 98.038 0 0 1 61.12 20c15.2 12 24.6 28.88 24.6 47.28 0 18.4-9.28 35.12-24.48 47.32zM288.438 177.13c-22.555-.02-40.856 18.248-40.876 40.804a40.835 40.835 0 0 0 11.924 28.876 40.682 40.682 0 0 0 28.88 12c22.555.02 40.856-18.248 40.876-40.804s-18.249-40.856-40.804-40.876zm20.647 61.503c-11.417 11.421-29.93 11.425-41.352.008a29.24 29.24 0 0 1-8.568-20.672 29.157 29.157 0 0 1 8.56-20.68c11.417-11.421 29.93-11.425 41.352-.008 11.421 11.417 11.425 29.931.008 41.352z"/><circle cx="148.245" cy="77.85" r="6.56"/><path d="M219.225 210.83a40.8 40.8 0 0 0-28.82-11.9 40.682 40.682 0 0 0-28.88 12c-15.906 15.961-15.861 41.794.1 57.7 15.961 15.906 41.794 15.861 57.7-.1s15.861-41.794-.1-57.7zm-28.828 58.212c-16.149-.005-29.236-13.1-29.232-29.248s13.1-29.236 29.248-29.232a29.24 29.24 0 0 1 20.672 8.568 29.157 29.157 0 0 1 8.56 20.68c-.005 16.149-13.1 29.236-29.248 29.232z"/></svg></i>

													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="100" data-after-text="k">0</div>

														<h4 class="__title">Happy Clients</h4>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item text-center">
													<i class="__ico">
														<svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M476.158 231.363l-13.259-53.035c3.625-.77 6.345-3.986 6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136 0-16.568 7.432-16.568 16.568V256a8.017 8.017 0 0 0 16.034 0V110.63c0-.295.239-.534.534-.534h307.841c.295 0 .534.239.534.534v145.372a8.017 8.017 0 0 0 16.034 0v-9.088h94.569l.021.002.022-.001c11.637.008 21.518 7.646 24.912 18.171h-24.928a8.017 8.017 0 0 0-8.017 8.017v17.102c0 13.851 11.268 25.119 25.119 25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097 14.322-47.982 34.205h-3.86v-60.393a8.017 8.017 0 0 0-16.034 0v60.391H192.817c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097 14.322-47.982 34.205H50.772a.534.534 0 0 1-.534-.534v-17.637h34.739a8.017 8.017 0 0 0 0-16.034H8.017a8.017 8.017 0 0 0 0 16.034h26.188v17.637c0 9.136 7.432 16.568 16.568 16.568h43.304c-.002.178-.014.355-.014.534 0 27.996 22.777 50.772 50.772 50.772s50.772-22.776 50.772-50.772c0-.18-.012-.356-.014-.534h180.67c-.002.178-.014.355-.014.534 0 27.996 22.777 50.772 50.772 50.772 27.995 0 50.772-22.776 50.772-50.772 0-.18-.012-.356-.014-.534h26.203a8.017 8.017 0 0 0 8.017-8.017v-85.511c.001-21.112-15.576-38.653-35.841-41.738zm-100.976-87.062h60.392c9.725 0 17.637 7.912 17.637 17.637v.534h-78.029v-18.171zm0 86.58v-52.376h71.235l13.094 52.376h-84.329zM144.835 401.904c-19.155 0-34.739-15.583-34.739-34.739s15.584-34.739 34.739-34.739c19.155 0 34.739 15.583 34.739 34.739s-15.584 34.739-34.739 34.739zm282.188 0c-19.155 0-34.739-15.583-34.739-34.739s15.584-34.739 34.739-34.739c19.155 0 34.739 15.583 34.739 34.739s-15.584 34.739-34.739 34.739zm68.944-102.614h-9.086c-5.01 0-9.086-4.076-9.086-9.086v-9.086h18.171v18.172z"/><path d="M144.835 350.597c-9.136 0-16.568 7.432-16.568 16.568 0 9.136 7.432 16.568 16.568 16.568 9.136 0 16.568-7.432 16.568-16.568 0-9.136-7.432-16.568-16.568-16.568zM427.023 350.597c-9.136 0-16.568 7.432-16.568 16.568 0 9.136 7.432 16.568 16.568 16.568 9.136 0 16.568-7.432 16.568-16.568 0-9.136-7.432-16.568-16.568-16.568zM332.96 316.393H213.244a8.017 8.017 0 0 0 0 16.034H332.96a8.017 8.017 0 0 0 0-16.034zM127.733 282.188H25.119a8.017 8.017 0 0 0 0 16.034h102.614a8.017 8.017 0 0 0 0-16.034zM278.771 173.37a8.017 8.017 0 0 0-11.337.001l-71.292 71.291-37.087-37.087a8.016 8.016 0 0 0-11.337 0 8.016 8.016 0 0 0 0 11.337l42.756 42.756c1.565 1.566 3.617 2.348 5.668 2.348s4.104-.782 5.668-2.348l76.96-76.96a8.018 8.018 0 0 0 .001-11.338z"/></svg>
													</i>

													<div class="__content">
														<div class="__count js-count" data-from="0" data-to="1200">0</div>

														<h4 class="__title">Delivered Machine</h4>
													</div>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end counter -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->
			</main>
			<!-- end main -->

			<!-- start footer -->
			<footer class="footer footer--s1">
				<div class="container">
					<div class="footer__line footer__line--first">
						<div class="row">
							<div class="col-12 col-md-5 col-lg-4 col-xl-3">
								<div class="footer__item">
									<address class="footer__address">
										<p>5272 Lyngate Ct Burke, VA 2015-1688</p>
										<p>+1 998 150 30 20 &nbsp; +31 85 964 47 25</p>
										<p><a href="mailto:info@vendgo.co">info@vendgo.co</a></p>
									</address>
								</div>

								<div class="footer__item">
									<!-- start social buttons -->
									<div class="s-btns s-btns--white">
										<ul class="d-flex flex-row flex-wrap align-items-center">
											<li><a class="f" href="#"><i class="fontello-facebook"></i></a></li>
											<li><a class="t" href="#"><i class="fontello-twitter"></i></a></li>
											<li><a class="y" href="#"><i class="fontello-youtube-play"></i></a></li>
											<li><a class="i" href="#"><i class="fontello-instagram"></i></a></li>
										</ul>
									</div>
									<!-- end social buttons -->
								</div>
							</div>

							<div class="col-12 col-md-7 col-lg-5 col-xl-6">
								<div class="row justify-content-sm-between justify-content-xl-start">
									<div class="col-auto col-lg-3">
										<div class="footer__item">
											<nav class="footer__navigation">
												<ul>
													<!-- li class="active" -->
													<li><a href="#">About Us</a></li>
													<li><a href="#">Pages</a></li>
													<li><a href="#">Blog</a></li>
													<li><a href="#">Shop</a></li>
													<li><a href="#">Contacts</a></li>
												</ul>
											</nav>
										</div>
									</div>

									<div class="col-auto col-lg-3">
										<div class="footer__item">
											<nav class="footer__navigation">
												<ul>
													<!-- li class="active" -->
													<li><a href="#">Documents</a></li>
													<li><a href="#">Services</a></li>
													<li><a href="#">Vending Info</a></li>
													<li><a href="#">News</a></li>
													<li><a href="#">Support</a></li>
												</ul>
											</nav>
										</div>
									</div>

									<div class="col-auto col-md-5">
										<div class="footer__item">
											<nav class="footer__navigation">
												<ul>
													<!-- li class="active" -->
													<li><a href="#">Snack Vending Machines</a></li>
													<li><a href="#">Beverage Vending Machines</a></li>
													<li><a href="#">Combo Vending Machines</a></li>
													<li><a href="#">Coffee Machines</a></li>
													<li><a href="#">ATMs Machines</a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-lg-3 col-xl-3">
								<div class="footer__item">
									<form class="footer__form-subscribe" action="#">
										<div class="input-wrp">
											<i class="fontello-envelope"></i>
											<input class="textfield" type="text" value="" placeholder="Email" inputmode="email" x-inputmode="email" />
										</div>

										<button class="custom-btn custom-btn--big custom-btn--s2 wide" type="submit" role="button">Subscribe</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="footer__line footer__line--second">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="footer__item">
									<a class="footer__logo site-logo" href="index">
										<img class="lazy" src="img/blank.gif" data-src="img/site_logo/logo_2.svg" width="155" height="40" alt="demo" />
									</a>
								</div>
							</div>

							<div class="col-auto">
								<div class="footer__item">
									<p class="__copy">
										Copyright © 2019 VendGo | <a href="#">Terms & Privacy</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- end footer -->
		</div>

		<div id="btn-to-top-wrap" class="compensate-for-scrollbar">
			<a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
		</div>

		<script>
			(function(w, d){
				var b = d.getElementsByTagName('body')[0],
					s = d.createElement("script"),
					v = !("IntersectionObserver" in w) ? "8.17.0" : "12.3.0",
					o = {
						elements_selector: ".lazy",
						threshold: 500,
						callback_enter: function (element) {

						},
						callback_set: function (element) {

							oTimeout = setTimeout(function ()
							{
								clearTimeout(oTimeout);

								AOS.refresh();
							}, 1000);
						},
						callback_loaded: function (element) {

						},
						callback_error: function(element) {
							element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
						}
					};
				s.type = 'text/javascript';
				s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
				s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
				b.appendChild(s);
				w.lazyLoadOptions = o;

				w.addEventListener('LazyLoad::Initialized', function (event)
				{
					w.lazyLoadInstance = event.detail.instance;
				}, false);
			}(window, document));
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script type="text/javascript" src="js/main.min.js"></script>
	</body>
</html>
