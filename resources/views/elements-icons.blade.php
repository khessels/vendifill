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

	<body class="page-elements-icons">
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
											<li><a href="elements-counters">Counters</a></li>
											<li><a href="elements-form">Forms</a></li>
											<li><a class="active" href="elements-icons">IconList</a></li>
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
								<h1 class="hero__title">Icons</h1>
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
				<section class="section section--no-pb">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading">
									<h2 class="__title">Isometric Icons</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start icon list -->
								<div class="icon-list icon-list--s1">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="113" height="195" data-src="img/icon-list_img/1/1.png" alt="demo" />
													</figure>

													<h4><a href="#">Snack Vending Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="94" height="195" data-src="img/icon-list_img/1/2.png" alt="demo" />
													</figure>

													<h4><a href="#">Coffee Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="116" height="201" data-src="img/icon-list_img/1/3.png" alt="demo" />
													</figure>

													<h4><a href="#">Water Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="91" height="200" data-src="img/icon-list_img/1/4.png" alt="demo" />
													</figure>

													<h4><a href="#">Coffe  Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="87" height="192" data-src="img/icon-list_img/1/5.png" alt="demo" />
													</figure>

													<h4><a href="#">ATM Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="130" height="196" data-src="img/icon-list_img/1/6.png" alt="demo" />
													</figure>

													<h4><a href="#">Candy Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="121" height="206" data-src="img/icon-list_img/1/7.png" alt="demo" />
													</figure>

													<h4><a href="#">Coffe Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="116" height="193" data-src="img/icon-list_img/1/8.png" alt="demo" />
													</figure>

													<h4><a href="#">Candy Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="116" height="195" data-src="img/icon-list_img/1/9.png" alt="demo" />
													</figure>

													<h4><a href="#">Petrol Station</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="178" height="169" data-src="img/icon-list_img/1/10.png" alt="demo" />
													</figure>

													<h4><a href="#">Parking Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="97" height="165" data-src="img/icon-list_img/1/11.png" alt="demo" />
													</figure>

													<h4><a href="#">Electricity Station</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="119" height="207" data-src="img/icon-list_img/1/12.png" alt="demo" />
													</figure>

													<h4><a href="#">Combobox  Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="45" height="181" data-src="img/icon-list_img/1/13.png" alt="demo" />
													</figure>

													<h4><a href="#">Parking Meter</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="72" height="177" data-src="img/icon-list_img/1/14.png" alt="demo" />
													</figure>

													<h4><a href="#">ATM Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="145" height="153" data-src="img/icon-list_img/1/15.png" alt="demo" />
													</figure>

													<h4><a href="#">ATM</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="65" height="174" data-src="img/icon-list_img/1/16.png" alt="demo" />
													</figure>

													<h4><a href="#">Bank  Machine</a></h4>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end icon list -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pb">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading">
									<h2 class="__title">Flat Icons</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start icon list -->
								<div class="icon-list icon-list--s2">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="145" height="245" data-src="img/icon-list_img/2/1.png" alt="demo" />
													</figure>

													<h4><a href="#">Snack Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="147" height="246" data-src="img/icon-list_img/2/2.png" alt="demo" />
													</figure>

													<h4><a href="#">Beverage Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="130" height="250" data-src="img/icon-list_img/2/3.png" alt="demo" />
													</figure>

													<h4><a href="#">Combo Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-3">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="103" height="248" data-src="img/icon-list_img/2/4.png" alt="demo" />
													</figure>

													<h4><a href="#">Coffe Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="91" height="181" data-src="img/icon-list_img/2/5.png" alt="demo" />
													</figure>

													<h4><a href="#">Medcine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="77" height="176" data-src="img/icon-list_img/2/6.png" alt="demo" />
													</figure>

													<h4><a href="#">Popcorn</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="84" height="186" data-src="img/icon-list_img/2/7.png" alt="demo" />
													</figure>

													<h4><a href="#">Water</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="97" height="189" data-src="img/icon-list_img/2/8.png" alt="demo" />
													</figure>

													<h4><a href="#">Healthy Food</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="98" height="183" data-src="img/icon-list_img/2/9.png" alt="demo" />
													</figure>

													<h4><a href="#">Toys</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="81" height="191" data-src="img/icon-list_img/2/10.png" alt="demo" />
													</figure>

													<h4><a href="#">Candy</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="86" height="175" data-src="img/icon-list_img/2/11.png" alt="demo" />
													</figure>

													<h4><a href="#">Candy</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="133" height="177" data-src="img/icon-list_img/2/12.png" alt="demo" />
													</figure>

													<h4><a href="#">Fresh Fruits</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="119" height="183" data-src="img/icon-list_img/2/13.png" alt="demo" />
													</figure>

													<h4><a href="#">Snack Machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="112" height="179" data-src="img/icon-list_img/2/14.png" alt="demo" />
													</figure>

													<h4><a href="#">Icecream</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="84" height="176" data-src="img/icon-list_img/2/15.png" alt="demo" />
													</figure>

													<h4><a href="#">Parking Meter</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-md-4 col-lg-2">
												<div class="__item">
													<figure class="__image">
														<img class="lazy" src="img/blank.gif" width="84" height="185" data-src="img/icon-list_img/2/16.png" alt="demo" />
													</figure>

													<h4><a href="#">Water Syrup</a></h4>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end icon list -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pb">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading">
									<h2 class="__title">Flat Icons</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start icon list -->
								<div class="icon-list icon-list--s3">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M16.004 60.998h2.002V63a1 1 0 0 0 1 1h7.998a1 1 0 0 0 1-1v-2.002h7.991V63a1 1 0 0 0 1 1h7.998a1 1 0 0 0 1-1v-2.002h2.003a1 1 0 0 0 1-1V5a1 1 0 0 0-.294-.708L44.704.293A1 1 0 0 0 43.996 0H20.004a1 1 0 0 0-.708.294l-3.998 3.999a.99.99 0 0 0-.217.326.982.982 0 0 0-.077.381v54.998a1 1 0 0 0 1 1zM20.418 2h23.164l2 2H18.418zm5.586 60h-5.998v-1.002h5.998zm17.989 0h-5.998v-1.002h5.998zm3.003-3.002H17.004V6h29.992z"/><path d="M27 17.001h.131l.879 6.141A1 1 0 0 0 29 24h5.998a1 1 0 0 0 .99-.858l.879-6.141h.132a1 1 0 0 0 1-1v-2.999a1 1 0 0 0-1-1V9c0-.043-.02-.08-.024-.122-.005-.041.004-.08-.006-.121-.006-.025-.024-.043-.032-.068a.964.964 0 0 0-.089-.186.984.984 0 0 0-.102-.152.992.992 0 0 0-.141-.126 1.03 1.03 0 0 0-.159-.107c-.054-.027-.11-.044-.169-.062a.994.994 0 0 0-.205-.042c-.025-.001-.047-.014-.073-.014-.042 0-.078.019-.118.024-.042.005-.082-.005-.124.006l-8 2c-.026.006-.045.025-.07.034a.946.946 0 0 0-.182.086.88.88 0 0 0-.155.105.97.97 0 0 0-.125.139.911.911 0 0 0-.107.16c-.028.055-.045.112-.063.172a.898.898 0 0 0-.04.2c-.002.026-.016.049-.016.076l.001 1a1 1 0 0 0-1 1v2.999a1 1 0 0 0 1 1zM34.131 22h-4.264l-.715-4.998h5.693zm1.868-7.998v.999H28v-.999h.001zm-6.999-2l-.001-.221 6-1.5v1.721zM19.999 31.999h6.998a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-6.998a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1zm1-3h4.998v1h-4.998zM30.028 30.499a1 1 0 0 0 0-2h-.011c-.552 0-.994.448-.994 1s.453 1 1.005 1zM36.001 27.999v3a1 1 0 0 0 1 1h6.998a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-6.998a1 1 0 0 0-1 1zm2 1h4.998v1h-4.998zM34.03 30.499a1 1 0 0 0 0-2h-.01c-.552 0-.994.448-.994 1s.452 1 1.004 1zM19.999 38.998h6.998a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-6.998a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1zm1-3h4.998v1h-4.998zM30.028 37.498a1 1 0 1 0 0-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zM43.999 33.998h-6.998a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6.998a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm-1 3h-4.998v-1h4.998zM34.03 37.498a1 1 0 1 0 0-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zM38 42.002h-5.995L32 42.001l-.005.001h-5.997a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1H38a1 1 0 0 0 1-1v-10a1 1 0 0 0-1-1zm-7.779 7h3.559l-.6 3h-2.354zm6.779 3h-1.781l.761-3.804c.007-.033-.003-.065 0-.099s.02-.063.02-.098-.017-.065-.021-.1a.991.991 0 0 0-.216-.524.978.978 0 0 0-.476-.318c-.032-.011-.058-.032-.092-.039s-.066.003-.102 0c-.032-.004-.061-.02-.095-.02h-6c-.034 0-.063.016-.096.02-.034.003-.067-.007-.102 0s-.06.028-.093.039a1.046 1.046 0 0 0-.34.182.9.9 0 0 0-.133.136.92.92 0 0 0-.177.328.949.949 0 0 0-.04.199c-.003.033-.02.063-.02.097s.017.063.02.097-.007.066 0 .101l.767 3.803h-1.787v-8H31v.999a1 1 0 1 0 2 0v-.999h4z"/></svg>
													</i>

													<h4><a href="#">Coffe machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M11.004 30V63a1 1 0 0 0 1 1h39.992a1 1 0 0 0 1-1v-.002V3.021a.998.998 0 0 0-.289-.728l-2-2a.999.999 0 0 0-1.414 0L48 1.586 46.707.293a.999.999 0 0 0-1.414 0L44 1.586 42.707.293a.999.999 0 0 0-1.414 0L40 1.586 38.707.293a.999.999 0 0 0-1.414 0L36 1.586 34.707.293a.999.999 0 0 0-1.414 0L32 1.586 30.707.293a.999.999 0 0 0-1.414 0L28 1.586 26.707.293a.999.999 0 0 0-1.414 0L24 1.586 22.707.293a.999.999 0 0 0-1.414 0L20 1.586 18.707.293a.999.999 0 0 0-1.414 0L16 1.586 14.707.293a.999.999 0 0 0-1.414 0l-2 2c-.2.2-.294.465-.289.728zM14 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L18 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L22 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L26 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L30 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L34 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L38 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L42 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L46 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L50 2.414l.996.996v1.592H13.004V3.41zm36.996 35.588H15.011l-.01-.002-.01.002h-1.987V31h37.992zm-2.997 2a1 1 0 0 1-1 .998h-12a1 1 0 0 1-1-.998zm-19 0a1 1 0 0 1-1 .998h-2a1 1 0 0 1-1-.998zm-8.998 0a1 1 0 0 1-1 .998h-2a1 1 0 0 1-1-.998zm-4-11.002a1 1 0 0 1 1-.998h2a1 1 0 0 1 1 .998zm8.998 0a1 1 0 0 1 1-.998h2a1 1 0 0 1 1 .998zm9 0a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm16 0c0-1.654-1.346-3-3-3h-12c-1.654 0-3 1.346-3 3h-1a3.004 3.004 0 0 0-3-2.998h-2a3.004 3.004 0 0 0-3 2.998h-.998a3.004 3.004 0 0 0-3-2.998h-2a3.004 3.004 0 0 0-3 2.998h-.997V7.002h37.992V29zM13.004 40.002h.997a3.004 3.004 0 0 0 3 2.998h2a3.004 3.004 0 0 0 3-2.998h.998a3.004 3.004 0 0 0 3 2.998h2a3.004 3.004 0 0 0 3-2.998h1a3.004 3.004 0 0 0 3 2.998h12a3.004 3.004 0 0 0 3-2.998h.997V62H13.004z"/><path d="M29.001 8h-12c-1.654 0-3 1.346-3 3v2c0 1.654 1.346 3 3 3h12c1.654 0 3-1.346 3-3v-2c0-1.654-1.346-3-3-3zm1 5a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM29.001 17h-12c-1.654 0-3 1.346-3 3v2c0 1.654 1.346 3 3 3h12c1.654 0 3-1.346 3-3v-2c0-1.654-1.346-3-3-3zm1 5a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM46.999 8.002h-2c-1.654 0-3 1.346-3 3V22c0 1.654 1.346 3 3 3h2c1.654 0 3-1.346 3-3V11.002c0-1.654-1.346-3-3-3zm1 13.998a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V11.002a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM38.001 8.002h-2c-1.654 0-3 1.346-3 3V22c0 1.654 1.346 3 3 3h2c1.654 0 3-1.346 3-3V11.002c0-1.654-1.346-3-3-3zm1 13.998a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V11.002a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM29.001 44.002h-12c-1.654 0-3 1.346-3 3v2c0 1.654 1.346 3 3 3h12c1.654 0 3-1.346 3-3v-2c0-1.654-1.346-3-3-3zm1 5a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM29.001 53.002h-12c-1.654 0-3 1.346-3 3v2c0 1.654 1.346 3 3 3h12c1.654 0 3-1.346 3-3v-2c0-1.654-1.346-3-3-3zm1 5a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM46.999 44.004h-2c-1.654 0-3 1.346-3 3v10.998c0 1.654 1.346 3 3 3h2c1.654 0 3-1.346 3-3V47.004c0-1.654-1.346-3-3-3zm1 13.998a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V47.004a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM38.001 44.004h-2c-1.654 0-3 1.346-3 3v10.998c0 1.654 1.346 3 3 3h2c1.654 0 3-1.346 3-3V47.004c0-1.654-1.346-3-3-3zm1 13.998a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V47.004a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM44 32H20a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zM38 35H26a1 1 0 1 0 0 2h12a1 1 0 1 0 0-2z"/></svg>
													</i>

													<h4><a href="#">Snack machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M8.502 64h46.996a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H54.5V1a1 1 0 0 0-1-1h-43a1 1 0 0 0-1 1v57h-.998a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1zm1-2v-2h.993l.005.001.005-.001h2.99l.005.001.005-.001h24.972l.022.001.005-.001h10.991l.005.001.005-.001h3.99l.005.001.005-.001h.993v2zM29.5 31v-1h4v1zm-1 2h2a1 1 0 1 0 2 0h2a1 1 0 0 0 1-1v-2h13v28h-8.906l1.902-20.905a1 1 0 0 0-.996-1.091h-18a1.002 1.002 0 0 0-.996 1.091L23.406 58H14.5V30h13v2a1 1 0 0 0 1 1zm-3.085 25l-.546-6h13.262l-.546 6zm-1.82-19.996h15.811L39.133 41H23.867zM24.05 43h14.9l-.637 7H24.687zM11.5 2h41v56h-2V29a1 1 0 0 0-1-1h-36a1 1 0 0 0-1 1v29h-1z"/><path d="M13.5 26.997h7a1 1 0 0 0 1-1V3.999a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v21.998a1 1 0 0 0 1 1zm6-5.001h-5v-8.992h5zm0-10.992h-5V8.002h5zm-5 13.993v-1.001h5v1.001zm5-19.998v1.003h-5V4.999zM23.5 26.997h7a1 1 0 0 0 1-1V3.999a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v21.998a1 1 0 0 0 1 1zm6-5.001h-5v-3.998h5zm0-5.998h-5V8.002h5zm-5 8.999v-1.001h5v1.001zm5-19.998v1.003h-5V4.999zM33.498 26.997h7a1 1 0 0 0 1-1V3.999a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v21.998a1 1 0 0 0 1 1zm6-5.001h-5v-6.994h5zm0-8.994h-5v-5h5zm-5 11.995v-1.001h5v1.001zm5-19.998v1.003h-5V4.999zM43.5 26.997h7a1 1 0 0 0 1-1V3.999a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v21.998a1 1 0 0 0 1 1zm6-5.001h-5v-3.998h5zm0-5.998h-5V8.002h5zm-5 8.999v-1.001h5v1.001zm5-19.998v1.003h-5V4.999z"/></svg>
													</i>

													<h4><a href="#">Vending machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M11.004 60.979a.998.998 0 0 0 .289.728l2 2a.997.997 0 0 0 1.414 0L16 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L20 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L24 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L28 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L32 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L36 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L40 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L44 62.414l1.293 1.293a.997.997 0 0 0 1.414 0L48 62.414l1.293 1.293a.997.997 0 0 0 1.414 0l2-2c.2-.2.294-.465.289-.728V3.02a.996.996 0 0 0-.289-.727l-2-2a.999.999 0 0 0-1.414 0L48 1.586 46.707.293a.999.999 0 0 0-1.414 0L44 1.586 42.707.293a.999.999 0 0 0-1.414 0L40 1.586 38.707.293a.999.999 0 0 0-1.414 0L36 1.586 34.707.293a.999.999 0 0 0-1.414 0L32 1.586 30.707.293a.999.999 0 0 0-1.414 0L28 1.586 26.707.293a.999.999 0 0 0-1.414 0L24 1.586 22.707.293a.999.999 0 0 0-1.414 0L20 1.586 18.707.293a.999.999 0 0 0-1.414 0L16 1.586 14.707.293a.999.999 0 0 0-1.414 0l-2 2a.996.996 0 0 0-.289.727zM14 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L18 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L22 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L26 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L30 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L34 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L38 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L42 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L46 2.414l1.293 1.293a.997.997 0 0 0 1.414 0L50 2.414l.996.996V4H13.004v-.59zm36 59.172l-1.293-1.293a.995.995 0 0 0-.702-.292h2.991v.589zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-.996-.996v-.589h2.991a.995.995 0 0 0-.702.292zm-.996-3.585V6h37.992v52.001z"/><path d="M24.199 30.993h15.602c3.418 0 6.199-2.69 6.199-5.998s-2.781-6-6.199-6c-2.03 0-3.509.521-4.813.98-1.048.369-1.952.687-2.988.687s-1.94-.318-2.988-.687c-1.304-.459-2.782-.98-4.813-.98-3.418 0-6.199 2.691-6.199 6 0 3.308 2.781 5.998 6.199 5.998zM44 24.996c0 2.204-1.884 3.998-4.199 3.998H28.847c1.938-1.37 3.566-2.992 3.865-3.295 1.794-1.818 5.304-4.702 7.089-4.702C42.116 20.996 44 22.79 44 24.996zm-19.801-4c1.688 0 2.938.44 4.148.866 1.118.394 2.274.801 3.652.801.406 0 .789-.042 1.162-.103a31.861 31.861 0 0 0-1.874 1.733c-1.794 1.817-5.304 4.7-7.089 4.7-2.314 0-4.198-1.793-4.198-3.997 0-2.206 1.884-4 4.199-4zM45 34.999H19a1 1 0 1 0 0 2h26a1 1 0 1 0 0-2zM45 37.999H19a1 1 0 1 0 0 2h26a1 1 0 1 0 0-2zM39 40.999H25a1 1 0 1 0 0 2h14a1 1 0 1 0 0-2zM27.031 51h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 1 0 0-2zM32.03 51h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 1 0-.001-2zM37.029 51h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 1 0 0-2z"/></svg>
													</i>

													<h4><a href="#">Crisps</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M41.003 25.995A3.008 3.008 0 0 1 44.008 29a1 1 0 1 0 2 0 5.01 5.01 0 0 0-5.005-5.005 1 1 0 1 0 0 2z"/><path d="M13.991 40.004c0 .014.007.025.008.039.021 6.047 4.945 10.961 10.998 10.961h5.005a2.98 2.98 0 0 0 2.001-.781 2.98 2.98 0 0 0 2.003.781h5.003c6.065 0 11-4.935 11-11v-10.99l-.001-.007.001-.007c0-4.966-4.04-9.006-9.006-9.006l-.01.002h-4.995a4.96 4.96 0 0 0-2.999 1.024l.003-9.024a1 1 0 1 0-2 0l-.001 1.998h-1.145c-.447-1.721-2-3-3.858-3-1.141 0-8.004 1.152-8.004 4s6.863 4 8.004 4c1.858 0 3.411-1.279 3.858-3h1.145l-.002 5.028a4.949 4.949 0 0 0-3.001-1.026h-4.983l-.01-.002c-4.97 0-9.014 4.043-9.014 9.012l.001.004-.001.004zm12.007-23.01c-1.648 0-5.496-1.21-5.982-2 .485-.79 4.333-2 5.982-2 .736 0 1.375.405 1.722 1h-2.722a1 1 0 1 0 0 2h2.722c-.347.595-.986 1-1.722 1zm-3.001 5l.008.002h4.993c1.654 0 3 1.346 3 3a1 1 0 1 0 2 0c0-1.654 1.346-3 3-3h5.005l.008-.002c3.859.005 6.998 3.146 6.998 7.006l.001.007-.001.007v10.99c0 4.963-4.037 9-9 9h-5.003c-.554 0-1.004-.449-1.004-1.002a1 1 0 1 0-2 0v.002a1 1 0 0 1-1 1h-5.005c-4.963 0-9-4.037-9-9 0-.011-.006-.019-.006-.029V29.014l-.001-.004.001-.004c0-3.863 3.143-7.007 7.006-7.012z"/><path d="M57.002 5c0-.007-.004-.013-.004-.02V3c0-.13-.026-.26-.077-.382a.99.99 0 0 0-.217-.326L54.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L50.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L46.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L42.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L38.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L34.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L30.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L26.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L22.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L18.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L14.705.293a.999.999 0 0 0-1.414 0l-1.293 1.293L10.705.293a.999.999 0 0 0-1.414 0l-2 2c-.2.2-.295.465-.289.728V60.98a.994.994 0 0 0 .289.728l2 2a1 1 0 0 0 1.414-.001l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.999-1.999a.99.99 0 0 0 .217-.326.991.991 0 0 0 .077-.382v-1.979c0-.007.004-.013.004-.02s-.004-.013-.004-.02V5.02c0-.007.004-.013.004-.02zm-3.004 56.586l-1.293-1.293a.995.995 0 0 0-.702-.292h2.995v.585zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-1.293-1.293a.995.995 0 0 0-.702-.292h3.99a.995.995 0 0 0-.702.292zm-4 0l-.996-.996v-.589h2.991a.995.995 0 0 0-.702.292zm0-59.172l1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1.293 1.293a.997.997 0 0 0 1.414 0l1.293-1.293 1 1V4H9.002v-.59zm45 3.586v52.001H9.002V6z"/></svg>
													</i>

													<h4><a href="#">Apple</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M53 13.5h-.051c-.519-7.254-6.57-13-13.954-13l-.005.001H25.005L25 .5c-7.382 0-13.433 5.747-13.949 13H11a1 1 0 0 0-1 1v2.997a1 1 0 0 0 1 1h.06l2.391 39.066c.182 3.273 2.996 5.937 6.275 5.937h24.549c3.279 0 6.094-2.663 6.275-5.931l2.391-39.072H53a1 1 0 0 0 1-1V14.5a1 1 0 0 0-1-1zm-41 2.997V15.5h4.979c.007 0 .013.004.02.004s.013-.004.02-.004h5.959c.007 0 .013.004.02.004H23c.007 0 .013-.004.02-.004h5.959c.007 0 .013.004.02.004h.002c.007 0 .013-.004.02-.004h5.959c.007 0 .013.004.02.004h.002c.007 0 .013-.004.02-.004h5.959c.007 0 .013.004.02.004h.002c.007 0 .013-.004.02-.004h5.959c.007 0 .013.004.02.004s.013-.004.02-.004h4.96c.009 0 .016.005.024.005v.992zm6.997-3.993a1 1 0 0 1 2-.005l-.018.135a.993.993 0 0 0 .323.866h-2.611a.993.993 0 0 0 .323-.866c.001-.002-.017-.128-.017-.13zm3.001-6.001a1 1 0 0 1 2-.005l-.018.135a.999.999 0 0 0 .501 1.005.988.988 0 0 1 .516.865c0 .72-.808 1.261-1.495.858a.999.999 0 0 0-1.008 0c-.687.401-1.495-.139-1.495-.858 0-.359.192-.684.516-.865a.999.999 0 0 0 .501-1.005l-.018-.13zm6 0a1 1 0 0 1 2-.005l-.018.135a.999.999 0 0 0 .501 1.005.988.988 0 0 1 .516.865c0 .72-.807 1.261-1.495.858a.999.999 0 0 0-1.008 0c-.686.401-1.495-.139-1.495-.858 0-.359.192-.684.516-.865a.999.999 0 0 0 .501-1.005l-.018-.13zm6 0a1 1 0 0 1 2-.005l-.018.135a.999.999 0 0 0 .501 1.005.988.988 0 0 1 .516.865c0 .72-.809 1.261-1.495.858a.999.999 0 0 0-1.008 0c-.686.401-1.495-.139-1.495-.858 0-.359.192-.684.516-.865a.999.999 0 0 0 .501-1.005l-.018-.13zm6 0a1 1 0 0 1 2-.005l-.018.135a.999.999 0 0 0 .501 1.005.988.988 0 0 1 .516.865c.001.72-.809 1.261-1.495.858a.999.999 0 0 0-1.008 0c-.686.402-1.494-.138-1.495-.858 0-.359.192-.684.516-.865a.999.999 0 0 0 .501-1.005l-.018-.13zm5.305 6.997h-2.611a.993.993 0 0 0 .323-.866l-.018-.13a1 1 0 0 1 2-.005l-.018.135a.994.994 0 0 0 .324.866zm-4.297-1.228l-.009.01-.009-.01a2.934 2.934 0 0 0-.221-.886c.077-.021.155-.034.23-.062.074.027.152.04.229.062a2.962 2.962 0 0 0-.22.886zm-6 0l-.009.01-.009-.01a2.934 2.934 0 0 0-.221-.886c.077-.021.155-.034.23-.062.074.027.152.04.229.062a2.962 2.962 0 0 0-.22.886zm-6 0l-.009.01-.009-.01a2.934 2.934 0 0 0-.221-.886c.077-.021.155-.034.23-.062.074.027.152.04.229.062a2.962 2.962 0 0 0-.22.886zm-6 0l-.009.01-.009-.01a2.934 2.934 0 0 0-.221-.886c.077-.021.155-.034.23-.062.074.027.152.04.229.062a2.962 2.962 0 0 0-.22.886zm2.009.362l-.018-.13a1 1 0 0 1 2-.005l-.018.135a.993.993 0 0 0 .323.866h-2.611a.99.99 0 0 0 .324-.866zm6 0l-.018-.13a1 1 0 0 1 2-.005l-.018.135a.993.993 0 0 0 .323.866h-2.611a.99.99 0 0 0 .324-.866zm6 0l-.018-.13a1 1 0 0 1 2-.005l-.018.135a.993.993 0 0 0 .323.866h-2.611a.99.99 0 0 0 .324-.866zM24.996 2.5l.004.001h13.995l.004-.001c6.278.002 11.437 4.852 11.95 11h-3.146a2.99 2.99 0 0 0-.815-1.228 3 3 0 0 0-2.212-2.653c.14-.346.221-.721.221-1.116 0-.859-.375-1.669-1.008-2.231-.119-1.547-1.415-2.769-2.991-2.769s-2.872 1.222-2.991 2.769l-.009.01-.009-.01c-.119-1.547-1.415-2.769-2.991-2.769s-2.872 1.222-2.991 2.769l-.009.01-.009-.01c-.119-1.547-1.415-2.769-2.991-2.769s-2.872 1.222-2.991 2.769l-.009.01-.009-.01c-.119-1.547-1.415-2.769-2.991-2.769s-2.872 1.222-2.991 2.769a2.99 2.99 0 0 0-1.008 2.231c0 .396.081.771.221 1.116a2.998 2.998 0 0 0-2.214 2.653 2.99 2.99 0 0 0-.815 1.228h-3.14c.511-6.148 5.668-10.998 11.945-11zm23.558 54.952c-.124 2.233-2.044 4.048-4.28 4.048H19.726c-2.235 0-4.155-1.815-4.279-4.054l-2.384-38.949h37.875z"/><path d="M25 37.501h13.995c2.206 0 4-1.794 4-4s-1.794-4-4-4H25c-2.206 0-4 1.794-4 4s1.794 4 4 4zm0-6h13.995c1.103 0 2 .897 2 2s-.897 2-2 2H25c-1.103 0-2-.897-2-2s.897-2 2-2z"/><path d="M25 34.501h13.995a1 1 0 1 0 0-2H25a1 1 0 1 0 0 2zM21.995 43.503H42a1 1 0 1 0 0-2H21.995a1 1 0 1 0 0 2zM21.995 46.503H42a1 1 0 1 0 0-2H21.995a1 1 0 1 0 0 2zM37.998 47.503H25.997a1 1 0 1 0 0 2h12.001a1 1 0 1 0 0-2z"/></svg>
													</i>

													<h4><a href="#">Popcorn</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M12 60.998h2.002V63a1 1 0 001 1h10a1 1 0 001-1v-2.002h11.994V63a1 1 0 001 1h10a1 1 0 001-1v-2.002H52a1 1 0 001-1V5c0-.13-.026-.26-.077-.382a.99.99 0 00-.217-.326L48.708.294a.99.99 0 00-.326-.217A.991.991 0 0048 0H16c-.13 0-.26.026-.382.077a.99.99 0 00-.326.217l-3.998 3.998a.99.99 0 00-.217.326A.991.991 0 0011 5v54.998a1 1 0 001 1zM16.414 2h31.172l2 2H14.414zM13 6h18v52.998H13zm11.002 56h-8v-1.002h8zm23.994 0h-8v-1.002h8zM51 58.998H33V6h18z"/><path d="M36 28.006h12a1 1 0 001-1v-8a1 1 0 00-1-1H36a1 1 0 00-1 1v8a1 1 0 001 1zm1-8h10v6H37zm-.97 10h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm3 2a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm3 0a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm5.97-2h-3a1 1 0 100 2h3a1 1 0 100-2zm-11.97 3h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm3 2a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm3 0a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm5.97-2h-3a1 1 0 100 2h3a1 1 0 100-2zm-11.97 3h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm3 2a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm3 0a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm5.97-2h-3a1 1 0 100 2h3a1 1 0 100-2zm-3 4.998h-6a1 1 0 100 2v5c0 .011.006.02.006.03.002.066.024.13.04.196.016.065.024.131.052.19.004.01.003.021.008.03a.977.977 0 00.179.248c.015.015.033.024.049.039a.993.993 0 00.323.196c.109.04.224.068.342.069h.003l.006-.001a.991.991 0 00.413-.098c.009-.005.019-.003.027-.007L42 48.122l1.553.776c.009.004.019.002.027.007a.991.991 0 00.413.098l.006.001h.003a1.027 1.027 0 00.431-.107c.085-.042.163-.094.234-.158.016-.015.034-.024.049-.039.069-.072.132-.153.179-.248.005-.01.004-.021.008-.029.028-.061.036-.127.052-.191.016-.066.038-.13.04-.196 0-.011.006-.02.006-.03v-5A1.002 1.002 0 0045 41.004zm-2 5.382l-.553-.276c-.021-.011-.046-.009-.067-.019a1.023 1.023 0 00-.197-.053c-.062-.012-.121-.024-.183-.023-.062-.001-.121.012-.183.023a.956.956 0 00-.197.053c-.021.01-.046.008-.067.019l-.553.276v-3.382h2zM16 43h12a1 1 0 001-1V19a1 1 0 00-1-1H16a1 1 0 00-1 1v23a1 1 0 001 1zm5.756-16.003h.488l1.429 5.004h-3.347zM20 34.001h3.999V41H20zM17 20h4v1a1 1 0 102 0v-1h4v21h-1.001v-7.999c0-.048-.021-.089-.027-.135-.006-.047.003-.092-.011-.139l-1.654-5.792c.4-.13.693-.495.693-.938a1 1 0 00-1-1h-4a1 1 0 00-1 1 .99.99 0 00.692.938l-1.654 5.791c-.014.047-.005.094-.011.141-.006.046-.027.086-.027.134V41h-1z"/></svg>
													</i>

													<h4><a href="#">Milk</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M12 60.998h2.002V63a1 1 0 001 1h10a1 1 0 001-1v-2.002h11.994V63a1 1 0 001 1h10a1 1 0 001-1v-2.002H52a1 1 0 001-1V5c0-.13-.026-.26-.077-.382a.99.99 0 00-.217-.326L48.708.294a.99.99 0 00-.326-.217A.991.991 0 0048 0H16c-.13 0-.26.026-.382.077a.99.99 0 00-.326.217l-3.998 3.998a.99.99 0 00-.217.326A.991.991 0 0011 5v54.998a1 1 0 001 1zM16.414 2h31.172l2 2H14.414zm7.588 60h-8v-1.002h8zm23.994 0h-8v-1.002h8zM51 58.998H13V6h38z"/><path d="M15 58h34a1 1 0 001-1v-7a1 1 0 00-1-1H15a1 1 0 00-1 1v7a1 1 0 001 1zm1-7h32v5H16zm-1-3h34a1 1 0 001-1V8a1 1 0 00-1-1H15a1 1 0 00-1 1v39a1 1 0 001 1zm4.998-29.999c0-1.102.895-1.997 1.995-2l.007.001.007-.001a2.001 2.001 0 11-2.009 2zM48 22.002V33h-4.109A6.98 6.98 0 0046 28.002v-4.001a1 1 0 10-2 0v.142c-1.72.447-2.999 2-3 3.857v.001c0 1.103-.897 2-2 2h-1c-.058 0-.106.023-.161.032-.052.009-.104.002-.155.02-.013.004-.021.014-.032.019-.07.026-.129.068-.19.109-.048.031-.1.056-.141.095-.049.045-.081.102-.12.155-.036.051-.076.097-.103.152-.025.055-.033.115-.049.175-.018.068-.038.133-.041.204 0 .014-.008.025-.008.039 0 .058.023.107.033.162.008.052.002.104.019.154l.56 1.683H33.89A6.976 6.976 0 0036 28.002v-4.001a1 1 0 10-2 0v.142c-1.72.447-2.999 2-3 3.857v.001c0 1.103-.897 2-2 2h-1c-.058 0-.106.023-.161.032-.053.009-.104.002-.155.02-.013.004-.021.014-.032.019-.07.026-.129.068-.19.109-.048.031-.1.056-.141.095-.049.045-.081.102-.12.155-.036.051-.076.097-.103.152-.025.055-.033.115-.049.175-.018.068-.038.133-.041.204 0 .014-.008.025-.008.039 0 .058.023.107.033.162.008.052.002.104.019.154l.56 1.683H23.89A6.976 6.976 0 0026 28.002v-4.001a1 1 0 10-2 0v.142c-1.72.447-2.999 2-3 3.857v.001c0 1.103-.897 2-2 2h-1c-.058 0-.107.023-.162.032-.052.009-.103.002-.154.02-.013.004-.021.014-.032.019-.07.026-.129.068-.19.109-.048.031-.1.056-.141.095-.049.045-.081.102-.12.155-.036.051-.076.097-.103.152-.025.055-.033.115-.049.175-.018.068-.038.133-.041.204 0 .014-.008.025-.008.039 0 .058.023.107.033.162.008.052.002.104.019.154l.56 1.683H16V22.002zm-18.002-4.001c0-1.102.895-1.997 1.995-2l.007.001.007-.001a2.001 2.001 0 11-2.009 2zm10 0c0-1.102.895-1.997 1.995-2l.007.001.007-.001a2.001 2.001 0 11-2.009 2zM43 28.003c0-.738.405-1.376 1-1.724v1.722c0 2.519-1.878 4.587-4.303 4.93l-.323-.968c2.028-.192 3.625-1.883 3.626-3.96zm-10 0c0-.738.405-1.376 1-1.724v1.722c0 2.519-1.878 4.587-4.303 4.93l-.323-.968c2.028-.192 3.625-1.883 3.626-3.96zm-10 0c0-.738.405-1.376 1-1.724v1.722c0 2.519-1.878 4.587-4.303 4.93l-.323-.968c2.028-.192 3.625-1.883 3.626-3.96zM20 44c0-1.695 1.246-3.057 1.998-3.724C22.75 40.946 24 42.314 24 44c0 1.103-.897 2-2 2s-2-.897-2-2zm9.998 0c0-1.695 1.246-3.057 1.998-3.724.752.67 2.002 2.038 2.002 3.724 0 1.103-.897 2-2 2s-2-.897-2-2zm10 0c0-1.695 1.246-3.057 1.998-3.724.752.67 2.002 2.038 2.002 3.724 0 1.103-.897 2-2 2s-2-.897-2-2zm5.443 2a3.953 3.953 0 00.557-2c0-2.768-2.067-4.746-3-5.499V38a1 1 0 10-2 0v.501c-.933.753-3 2.731-3 5.499 0 .731.212 1.409.557 2h-3.113a3.953 3.953 0 00.557-2c0-2.768-2.067-4.746-3-5.499V38a1 1 0 10-2 0v.501c-.933.753-3 2.731-3 5.499 0 .731.212 1.409.557 2h-3.111A3.97 3.97 0 0026 44c0-2.768-2.067-4.746-3-5.499V38a1 1 0 10-2 0v.501c-.933.753-3 2.731-3 5.499 0 .731.212 1.409.557 2H16V35h2.994l.006.001.02-.001h9.975l.006.001.02-.001h9.975l.006.001.02-.001H48v11zM48 9v11.002h-2.557A3.953 3.953 0 0046 18.001c0-1.858-1.279-3.411-3-3.859v-.139a1 1 0 10-2 0v.139c-1.722.447-3.002 2.001-3.002 3.859 0 .732.212 1.41.557 2.001h-3.111A3.963 3.963 0 0036 18.001c0-1.858-1.279-3.411-3-3.859v-.139a1 1 0 10-2 0v.139c-1.722.447-3.002 2.001-3.002 3.859 0 .732.212 1.41.557 2.001h-3.111A3.963 3.963 0 0026 18.001c0-1.858-1.279-3.411-3-3.859v-.139a1 1 0 10-2 0v.139c-1.722.447-3.002 2.001-3.002 3.859 0 .732.212 1.41.557 2.001H16V9z"/></svg>
													</i>

													<h4><a href="#">Fruits</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M50.997 63v-2.002h2.004a1 1 0 001-1V5c0-.13-.026-.26-.077-.382a.99.99 0 00-.217-.326L49.709.294a.99.99 0 00-.326-.217.991.991 0 00-.382-.077H14.999c-.13 0-.26.026-.382.077a.99.99 0 00-.326.217l-3.998 3.998a.99.99 0 00-.217.326.991.991 0 00-.077.382v54.998a1 1 0 001 1h2.002V63a1 1 0 001 1h7.998a1 1 0 001-1v-2.002h18V63a1 1 0 001 1h7.998a1 1 0 001-1zm1.004-4.002H40V6h12.001zM15.413 2h33.174l2 2H13.413zm-3.414 4H38v52.998H11.999zm9 56h-5.998v-1.002h5.998zm27.998-1.002V62h-5.998v-1.002z"/><path d="M43.001 26.006h6a1 1 0 001-1v-6a1 1 0 00-1-1h-6a1 1 0 00-1 1v6a1 1 0 001 1zm1-6h4v4h-4zm-.974 8.009h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm3 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm3 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-6 3h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm3 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm3 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-6 3h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm3 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm3 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-6.028 7.984h.002v4c0 .011.006.02.006.03.002.066.024.131.04.197.016.064.024.131.052.189.004.01.003.021.008.03a.977.977 0 00.179.248c.015.015.033.024.049.039a1.024 1.024 0 00.323.196c.109.04.224.068.342.069h.003l.006-.001a.991.991 0 00.413-.098c.009-.005.019-.002.027-.007L46 46.115l1.555.776c.009.005.019.002.027.007a.991.991 0 00.413.098l.006.001h.003a1.037 1.037 0 00.667-.267c.016-.013.032-.022.046-.037a.963.963 0 00.18-.248c.005-.01.004-.021.008-.03.028-.06.036-.126.052-.19.016-.066.038-.13.04-.196 0-.011.006-.02.006-.03v-4a1 1 0 100-2h-6.002c-.553 0-1 .447-1 1s.445 1 .998 1zm4.002 2.383l-.555-.277c-.021-.011-.046-.009-.067-.019a1.023 1.023 0 00-.197-.053c-.062-.012-.121-.024-.183-.023-.062-.001-.121.012-.183.023a.939.939 0 00-.197.053c-.022.01-.046.008-.067.019l-.551.275v-2.381h2zM16.999 26.004h16c1.654 0 3-1.346 3-3v-8c0-1.654-1.346-3-3-3h-16c-1.654 0-3 1.346-3 3v8c0 1.654 1.346 3 3 3zm3-7a1 1 0 112 0 1 1 0 01-2 0zm4-4a1 1 0 112 0 1 1 0 01-2 0zm9-1a1 1 0 011 1v5.185a2.962 2.962 0 00-1-.185c-.476 0-.919.121-1.318.318.197-.399.318-.843.318-1.318 0-1.654-1.346-3-3-3-.476 0-.919.121-1.318.318.197-.399.318-.843.318-1.318 0-.353-.072-.686-.185-1zm-13 9a1 1 0 112 0 1 1 0 01-2 0zm9-3a1 1 0 110-2 1 1 0 010 2zm-3-1a1 1 0 11-2 0 1 1 0 012 0zm-2 4a1 1 0 112 0 1 1 0 01-2 0zm4 0a1 1 0 112 0 1 1 0 01-2 0zm-11 1a1 1 0 110-2 1 1 0 010 2zm16 0a1 1 0 110-2 1 1 0 010 2zm-16-10h5.185a2.962 2.962 0 00-.185 1c0 .476.121.919.318 1.318a2.966 2.966 0 00-1.318-.318c-1.654 0-3 1.346-3 3 0 .476.121.919.318 1.318a2.966 2.966 0 00-1.318-.318c-.353 0-.686.072-1 .185v-5.185a1 1 0 011-1zM31.001 33h-12a1 1 0 00-1 1v13.998a1 1 0 001 1h12a1 1 0 001-1V34a1 1 0 00-1-1zm-7.847 8.999h3.693l-.714 4.999h-2.266zm6.847 4.999h-1.846l.836-5.857c.004-.025-.006-.048-.004-.072.001-.024.014-.045.014-.069 0-.044-.02-.081-.025-.124a1.084 1.084 0 00-.039-.198c-.021-.061-.051-.113-.082-.168a.948.948 0 00-.106-.158.933.933 0 00-.14-.126.961.961 0 00-.157-.106.92.92 0 00-.187-.065c-.042-.013-.077-.037-.122-.044-.024-.003-.047.006-.071.004-.024-.001-.046-.014-.07-.014h-6c-.024 0-.045.012-.068.014-.025.002-.048-.008-.073-.004-.045.007-.08.031-.122.044-.065.018-.127.035-.187.065a.92.92 0 00-.157.106.984.984 0 00-.14.126.991.991 0 00-.106.158c-.031.055-.061.107-.081.168-.022.064-.031.13-.04.198-.006.043-.025.08-.025.124 0 .024.013.045.014.069.002.024-.008.047-.004.072l.837 5.857h-1.847V35h3.998v.001a1 1 0 102 0V35h4.002v11.998z"/></svg>
													</i>

													<h4><a href="#">Juice</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 64c6.617 0 12-5.383 12-12V4c0-2.206-1.794-4-4-4H24c-2.206 0-4 1.794-4 4v48c0 6.617 5.383 12 12 12zm0-2c-3.35 0-6.313-1.662-8.129-4.198C26.012 59.78 28.862 61 32 61s5.988-1.22 8.129-3.198C38.313 60.338 35.35 62 32 62zm0-44c-4.283 0-7.937-2.713-9.357-6.507C24.844 14.236 28.217 16 32 16s7.157-1.764 9.357-4.507C39.937 15.287 36.283 18 32 18zm9.357-2.507C39.937 19.287 36.283 22 32 22s-7.937-2.713-9.357-6.507C24.844 18.236 28.217 20 32 20s7.157-1.764 9.357-4.507zM32 24c3.138 0 5.988-1.22 8.129-3.198C38.313 23.338 35.35 25 32 25s-6.313-1.662-8.129-4.198C26.012 22.78 28.862 24 32 24zM24 2h16c1.103 0 2 .897 2 2 0 5.514-4.486 10-10 10S22 9.514 22 4c0-1.103.897-2 2-2zm8 25c4.172 0 7.849-2.142 10-5.381V49c0 5.514-4.486 10-10 10s-10-4.486-10-10V21.619C24.151 24.858 27.828 27 32 27z"/><path d="M32 42c2.757 0 5-2.243 5-5s-2.243-5-5-5-5 2.243-5 5 2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm-6 12.001h12a1 1 0 100-2H26a1 1 0 100 2zm9 1h-6a1 1 0 100 2h6a1 1 0 100-2z"/><path d="M32.023 38.016a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1z"/></svg>
													</i>

													<h4><a href="#">Crisps</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M24.121 42.002h15.758C45.46 42.002 50 37.464 50 31.887v-3.404c0-5.228-4.262-9.48-9.5-9.48a9.444 9.444 0 00-7.37 3.512c-.36.441-.698.944-1.003 1.495l-.007.01-.12.194-.12-.194a9.453 9.453 0 00-8.38-5.018c-5.238 0-9.5 4.253-9.5 9.48v3.404c0 5.578 4.54 10.116 10.121 10.116zM16 28.482c0-4.125 3.364-7.48 7.5-7.48a7.457 7.457 0 015.821 2.777c.293.358.569.772.821 1.232h.001c.015.026.03.053.047.078l.633 1.025-1.175 1.9-1.147-1.855a.671.671 0 00-.061-.102 6.08 6.08 0 00-.671-1.019A5.475 5.475 0 0023.499 23c-3.032 0-5.5 2.459-5.5 5.48v3.404c0 3.372 2.746 6.115 6.121 6.115h15.758c3.375 0 6.121-2.743 6.121-6.115V28.48c0-3.021-2.468-5.48-5.5-5.48a5.47 5.47 0 00-4.267 2.036c-.26.317-.486.66-.635.953a.914.914 0 00-.076.131L29.412 36H27.06l6.747-10.911c.018-.025.033-.053.048-.079h.001c.252-.46.528-.874.824-1.235a7.453 7.453 0 015.818-2.774c4.136 0 7.5 3.355 7.5 7.48v3.404c0 4.475-3.644 8.115-8.121 8.115H24.121C19.643 40 16 36.359 16 31.885zm8.121 7.52A4.123 4.123 0 0120 31.887v-3.404c0-1.919 1.57-3.48 3.5-3.48 1.058 0 2.047.473 2.718 1.3.174.214.325.443.442.667.016.03.043.079.067.117.017.032.035.066.049.089l1.696 2.743-3.763 6.084h-.588zm15.758 0h-.589l-3.763-6.085 1.689-2.731c.016-.025.038-.066.058-.104.021-.033.045-.073.057-.098.126-.239.277-.469.454-.685a3.48 3.48 0 012.715-1.298c1.93 0 3.5 1.562 3.5 3.48v3.404a4.123 4.123 0 01-4.121 4.117zm-5.526-4.184l2.586 4.184h-2.352l-1.411-2.282zm-2.352 3.803l.235.381h-.471zM44 46.008H20a1 1 0 100 2h24a1 1 0 100-2zm0 2.996H20a1 1 0 100 2h24a1 1 0 100-2zm-5 2.998H25a1 1 0 100 2h14a1 1 0 100-2z"/><path d="M55.706 6.294l-5.997-6a.99.99 0 00-.326-.217.991.991 0 00-.382-.077H14.999c-.13 0-.26.026-.382.077a.99.99 0 00-.326.217l-5.997 6a.99.99 0 00-.217.326.991.991 0 00-.077.382V63a1 1 0 001 1h46a1 1 0 001-1V7.002c0-.13-.026-.26-.077-.382a.99.99 0 00-.217-.326zM15.413 2h33.174l4 4.002H11.413zM54 62H10V8.002h44z"/></svg>
													</i>

													<h4><a href="#">Pretzel</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M11.004 60.979a.998.998 0 00.289.728l2 2a.997.997 0 001.414 0L16 62.414l1.293 1.293a.997.997 0 001.414 0L20 62.414l1.293 1.293a.997.997 0 001.414 0L24 62.414l1.293 1.293a.997.997 0 001.414 0L28 62.414l1.293 1.293a.997.997 0 001.414 0L32 62.414l1.293 1.293a.997.997 0 001.414 0L36 62.414l1.293 1.293a.997.997 0 001.414 0L40 62.414l1.293 1.293a.997.997 0 001.414 0L44 62.414l1.293 1.293a.997.997 0 001.414 0L48 62.414l1.293 1.293a.997.997 0 001.414 0l2-2c.2-.2.294-.465.289-.728V3.021a.998.998 0 00-.289-.728l-2-2a.999.999 0 00-1.414 0L48 1.586 46.707.293a.999.999 0 00-1.414 0L44 1.586 42.707.293a.999.999 0 00-1.414 0L40 1.586 38.707.293a.999.999 0 00-1.414 0L36 1.586 34.707.293a.999.999 0 00-1.414 0L32 1.586 30.707.293a.999.999 0 00-1.414 0L28 1.586 26.707.293a.999.999 0 00-1.414 0L24 1.586 22.707.293a.999.999 0 00-1.414 0L20 1.586 18.707.293a.999.999 0 00-1.414 0L16 1.586 14.707.293a.999.999 0 00-1.414 0l-2 2c-.2.2-.294.465-.289.728zM14 2.414l1.293 1.293a.997.997 0 001.414 0L18 2.414l1.293 1.293a.997.997 0 001.414 0L22 2.414l1.293 1.293a.997.997 0 001.414 0L26 2.414l1.293 1.293a.997.997 0 001.414 0L30 2.414l1.293 1.293a.997.997 0 001.414 0L34 2.414l1.293 1.293a.997.997 0 001.414 0L38 2.414l1.293 1.293a.997.997 0 001.414 0L42 2.414l1.293 1.293a.997.997 0 001.414 0L46 2.414l1.293 1.293a.997.997 0 001.414 0L50 2.414l.996.996V4H13.004v-.59zm36 59.172l-1.293-1.293a.995.995 0 00-.702-.292h2.991v.589zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-.996-.996v-.589h2.991a.995.995 0 00-.702.292zm-.996-3.585V6h37.992v52.001z"/><path d="M17.001 26c.005 8.267 6.731 14.989 14.999 14.989 8.265 0 14.987-6.717 14.999-14.979a1 1 0 00-.305-.738l-3.982-3.982a.999.999 0 00-1.414 0l-3.293 3.294-5.295-5.294a.999.999 0 00-1.414 0l-5.294 5.294-3.293-3.294a.999.999 0 00-1.414 0l-3.971 3.971a.987.987 0 00-.324.728v.008l.001.003zm5.001-2.589l1.586 1.586h-3.172zm10.001-2l3.586 3.586h-7.172zm10.001 2l1.586 1.586h-3.172zM32 38.989c-6.828 0-12.432-5.295-12.949-11.992h25.898C44.432 33.694 38.828 38.989 32 38.989z"/><path d="M22.079 19.379a1.003 1.003 0 00.923.618h5a1 1 0 001-1v-5a1.003 1.003 0 00-1.382-.923.99.99 0 00-.326.217l-4.998 4.998a1.001 1.001 0 00-.217 1.09zm3.337-1.382l1.586-1.586v1.586zm10.584 2h5a1.003 1.003 0 00.923-1.382.99.99 0 00-.217-.326l-4.998-4.998a.99.99 0 00-.326-.217 1.003 1.003 0 00-1.382.923v5a1 1 0 001 1zm1-3.586l1.586 1.586H37zm5 27.597H22a1 1 0 100 2h20a1 1 0 100-2zm0 3.003H22a1 1 0 100 2h20a1 1 0 100-2zm-5 3.003H27a1 1 0 100 2h10a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Nachos</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M63 23.002h-2.139a4 4 0 00-3.088-2.928 1.991 1.991 0 00-1.764-1.078h-2.156a4 4 0 00-3.086-2.926 1.994 1.994 0 00-1.765-1.078h-6.006a5 5 0 00-4.144 2.205 3.995 3.995 0 00-2.082-1.127 1.991 1.991 0 00-1.764-1.078H29a5 5 0 00-4.144 2.205 3.996 3.996 0 00-2.081-1.127 1.994 1.994 0 00-1.765-1.078h-6.006a5.007 5.007 0 00-4.899 4.004H8.016a5.007 5.007 0 00-4.899 4.006H1a1 1 0 00-1 1v8.004c0 9.374 7.626 17 17 17h29.99l.01.002c9.374 0 17-7.626 17-17v-8.006a1 1 0 00-1-1zm-4.274 0h-1.281a4.01 4.01 0 00.363-.832c.388.172.707.467.918.832zm-40.689-2.006c-.054.071-.12.132-.17.206-.073-.075-.157-.137-.236-.206zm-2.218 1.174c.389.172.707.467.918.832h-1.281c.152-.261.273-.539.363-.832zm6.193-1.174h5.997l.002.01a2.001 2.001 0 01-1.999 1.99c-.011 0-.019.006-.029.006h-6.788a2.994 2.994 0 012.817-2.006zm10.021 0c-.054.071-.12.132-.17.206-.073-.075-.157-.137-.236-.206zm-2.218 1.174c.389.172.707.467.918.832h-1.281c.152-.261.273-.539.363-.832zm6.193-1.174h5.997l.002.01a2.001 2.001 0 01-1.999 1.99c-.011 0-.019.006-.029.006H33.19a2.997 2.997 0 012.818-2.006zm10.021 0c-.054.071-.12.132-.17.206-.073-.075-.157-.137-.236-.206zm-2.217 1.174c.389.172.707.467.918.832h-1.281a4.01 4.01 0 00.363-.832zm6.192-1.174h5.997l.002.01a2.001 2.001 0 01-1.999 1.99c-.011 0-.019.006-.029.006h-6.788a2.995 2.995 0 012.817-2.006zm1.714-2h-1.279c.152-.26.272-.537.362-.83.387.172.706.466.917.83zm-8.721-2.004h5.997l.002.01a2.002 2.002 0 01-1.999 1.99c-.007 0-.013.004-.02.004H40.18a2.995 2.995 0 012.817-2.004zm-5.274 2.004h-1.279c.152-.26.271-.537.362-.83.387.172.706.466.917.83zm-8.721-2.004h5.997l.002.01a2.001 2.001 0 01-1.999 1.99c-.007 0-.013.004-.02.004h-6.798a2.997 2.997 0 012.818-2.004zm-5.274 2.004h-1.279c.152-.26.272-.537.362-.83.387.172.706.466.917.83zm-8.721-2.004h5.997l.002.01a2.002 2.002 0 01-1.999 1.99c-.007 0-.013.004-.02.004h-6.798a2.997 2.997 0 012.818-2.004zm-6.991 4.004h5.997l.002.01a2.001 2.001 0 01-1.999 1.99c-.011 0-.019.006-.029.006H5.198a2.996 2.996 0 012.818-2.006zm38.992 26.012L47 47.006H17c-8.271 0-15-6.729-15-15v-7.004h60v7.006c0 8.268-6.725 14.995-14.992 15z"/><path d="M59 26.998a1 1 0 00-1 1v4.008c0 6.065-4.935 11-11 11a1 1 0 100 2c7.168 0 13-5.832 13-13v-4.008a1 1 0 00-1-1z"/></svg>
													</i>

													<h4><a href="#">Pistachio</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M52.994 3c0-1.654-1.346-3-3-3h-35.99c-1.654 0-3 1.346-3 3v58c0 1.654 1.346 3 3 3h35.99c1.654 0 3-1.346 3-3V8.01l.002-.01-.002-.01zm-39.99 3h37.99v1h-37.99zm1-4h35.99a1 1 0 011 1v1h-37.99V3a1 1 0 011-1zm35.99 60h-35.99a1 1 0 01-1-1V9h37.99v52a1 1 0 01-1 1z"/><path d="M24.002 26.996h15.994c3.859 0 7-3.141 7-7s-3.141-7-7-7H24.002c-3.859 0-7 3.141-7 7s3.141 7 7 7zm0-12h1.378l-1.276 2.553a1 1 0 101.789.894l1.724-3.447h3.764l-1.276 2.553a1 1 0 101.789.894l1.724-3.447h3.764l-1.276 2.553a1 1 0 101.789.894l1.724-3.447h.38c2.757 0 5 2.243 5 5s-2.243 5-5 5H24.002c-2.757 0-5-2.243-5-5s2.243-5 5-5zm16.994 16.005a1 1 0 00-1-1H24.002a1 1 0 100 2h15.994a1 1 0 001-1zM28 33.004a1 1 0 100 2h7.998a1 1 0 100-2zm21.004 21.997V40.003a1 1 0 00-1-1H15.996a1 1 0 00-1 1v19a1 1 0 001 1h32.008a1 1 0 001-1v-3.982l.002-.01-.002-.01zm-2-.99h-2.006V44.02c0-.007.004-.013.004-.02s-.004-.013-.004-.02v-2.978h2.006zM42.998 43h-2v-1.997h2zm-4 11.011h-2V44.01L37 44l-.002-.01v-2.987h2zm-4-11.011h-2v-1.997h2zm-4 11.011h-2V44.01L29 44l-.002-.01v-2.987h2zm-4-11.011h-2v-1.997h2zm-4 11.011h-2V41.003h2zm-2 2h2v1.992h-2zm4-.981c0-.007.004-.013.004-.02s-.004-.013-.004-.02V45h2v13.003h-2zm4 .981h2v1.992h-2zm4-.971c0-.011.006-.019.006-.029s-.006-.019-.006-.029V45h2v13.003h-2zm4 .971h2v1.992h-2zm4-.971c0-.011.006-.019.006-.029s-.006-.019-.006-.029V45h2v13.003h-2zm-22-14.037V43h-2.002v-1.997zM16.996 45h2.002v13.003h-2.002zm28.002 13.003v-1.992h2.006v1.992z"/></svg>
													</i>

													<h4><a href="#">Cracker</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 64c5.514 0 10-4.486 10-10V22a9.988 9.988 0 00-1.087-4.49A9.917 9.917 0 0042 13v-3c0-5.514-4.486-10-10-10S22 4.486 22 10v3c0 1.624.397 3.153 1.087 4.51A9.988 9.988 0 0022 22v32c0 5.514 4.486 10 10 10zm0-62c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm6.64 15.457C37.202 19.592 34.763 21 32 21s-5.202-1.408-6.64-3.543C27.129 19.033 29.451 20 32 20s4.871-.967 6.64-2.543zM32 23a9.97 9.97 0 007.583-3.5c.265.805.417 1.645.417 2.5 0 4.411-3.589 8-8 8s-8-3.589-8-8c0-.854.152-1.695.417-2.5A9.97 9.97 0 0032 23zm-8 4.975C25.825 30.412 28.728 32 32 32s6.175-1.588 8-4.025V54c0 4.411-3.589 8-8 8s-8-3.589-8-8z"/><path d="M32 45.001c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm5 10.001a1 1 0 100-2H27a1 1 0 100 2zm-2 1h-6a1 1 0 100 2h6a1 1 0 100-2zM28.032 7.001a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1zM32.03 11a1 1 0 000-2h-.01c-.552 0-.994.448-.994 1s.452 1 1.004 1zm3.998 3.999a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.453 1 1.005 1zm-8.007 0a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1zm8.007-8.004a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.453 1 1.005 1zm0 20.007a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.453 1 1.005 1zm-8.007 0a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1z"/></svg>
													</i>

													<h4><a href="#">Cracker</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M6.001 64h51.998a1 1 0 001-1V1a1 1 0 00-1-1H6.001a1 1 0 00-1 1v62a1 1 0 001 1zm1-57H13v55H7.001zm49.998 55H15V2h41.999zM13 2v3H7.001V2z"/><path d="M36 36.992c7.724 0 14.008-6.284 14.008-14.008v-2.002a1 1 0 00-1-1h-.596l-.993-.992 4.291-4.292a.999.999 0 10-1.414-1.414l-4.292 4.292-.293-.293a.999.999 0 00-1.414 0l-2.296 2.295-2.296-2.295a.999.999 0 00-1.414 0l-2.296 2.295-2.296-2.295a.999.999 0 00-1.414 0l-2.29 2.289-2.29-2.289a.999.999 0 00-1.414 0l-2.701 2.699h-.598a1 1 0 00-1 1v2.002c0 7.724 6.284 14.008 14.008 14.008zm-3.008-17.588l.579.578h-1.158zm6.006 0l.579.578h-1.158zm6.006 0l.579.578h-1.158zm-18.006 0l.579.578h-1.158zm-3.006 2.58l.008.002c.007 0 .014-.004.02-.004h5.94c.014.001.026.008.04.008s.026-.007.04-.008h5.914c.014.001.026.008.04.008s.026-.007.04-.008h5.926c.014.001.026.008.04.008s.026-.007.04-.008h5.926c.014.001.026.008.04.008h.002v.994c0 6.621-5.387 12.008-12.008 12.008s-12.008-5.387-12.008-12.008z"/><path d="M32.289 13.711l3.002 2.988a.998.998 0 001.414-.004c.004-.003.004-.008.008-.012l2.986-2.973a.996.996 0 00.292-.721.997.997 0 00-.292-.721L36.697 9.28a1 1 0 00-1.414.004c-.004.003-.004.008-.008.012l-2.986 2.973a.996.996 0 00-.292.721.996.996 0 00.292.721zm3.705-2.308l1.595 1.587-1.595 1.587-1.595-1.587zM22.992 42.002h26.016a1 1 0 100-2H22.992a1 1 0 100 2zm0 3.003h26.016a1 1 0 100-2H22.992a1 1 0 100 2zM30 48.002h12a1 1 0 100-2H30a1 1 0 100 2zM30.027 54h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm6.006 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm6.006 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Cereals</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M36.504 36.018c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.141-7-7s3.141-7 7-7 7 3.141 7 7-3.141 7-7 7z"/><path d="M35.759 40.349c-.543.606-3.255 3.73-3.255 5.669 0 2.206 1.794 4 4 4s4-1.794 4-4c0-1.938-2.712-5.063-3.255-5.669-.381-.424-1.109-.424-1.49 0zm.745 7.669c-1.103 0-2-.897-2-2 0-.636.939-2.125 2-3.452 1.063 1.334 2 2.834 2 3.452 0 1.102-.898 2-2 2z"/><path d="M58.083.092l-13.003 6c-.047.021-.078.061-.12.088-.063.041-.129.078-.181.132-.047.049-.075.107-.11.163-.033.053-.072.101-.096.159-.029.074-.036.153-.047.232-.006.046-.027.086-.027.134v.033l.003 13.559-2.998-2.998v-3.586a3.002 3.002 0 00-2.998-2.998h-22a3.002 3.002 0 00-2.998 2.998v3.578l-8.716 8.716a.99.99 0 00-.217.326.991.991 0 00-.077.382v35.989c0 .131.026.261.078.384.035.086.095.157.152.229.023.03.034.066.063.095.048.048.107.071.161.107.054.035.1.081.16.105a.975.975 0 00.386.081l.01-.002h17.984l.01.002.01-.002h25.994a1 1 0 001-1V27.01c0-.13-.026-.26-.077-.382a.99.99 0 00-.217-.326l-3.71-3.71-.003-14.952 12.422-5.731A1 1 0 0059.41.582a.998.998 0 00-1.327-.49zM16.506 13.01h22c.551 0 .998.447.998.998v3H15.508v-3c0-.551.447-.998.998-.998zM14.5 19.422l6.588 6.588H7.912zm-1 34.162l-7.002 7.002V28.01H13.5zm2-25.574h7.002v32.576L15.5 53.584zm-1 27.402l6.586 6.586H7.914zM24.502 28.01h24.004v33.988H24.502zm-.586-2l-7.002-7.002H40.09l4.705 4.705 2.297 2.297z"/></svg>
													</i>

													<h4><a href="#">Milk box</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M19.998 0a1 1 0 00-1 1v62a1 1 0 001 1h24.004a1 1 0 001-1V1a1 1 0 00-1-1zm1 5.001h22.004V59H20.998zM43.002 2v1.001H20.998V2zM20.998 62v-1h22.004v1z"/><path d="M31.998 6c-5.514 0-10 4.486-10 10v6c0 5.511 4.481 9.994 9.99 10-5.509.005-9.99 4.488-9.99 9.999v6c0 5.514 4.486 10 10 10s10-4.486 10-10v-6c0-5.511-4.481-9.994-9.99-9.999 5.509-.006 9.99-4.489 9.99-10v-6c0-5.514-4.486-10-10-10zm0 2c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm6.64 15.456C37.2 25.592 34.761 27 31.998 27s-5.202-1.408-6.64-3.544c1.768 1.577 4.09 2.544 6.64 2.544s4.872-.967 6.64-2.544zm-6.64 32.543a7.997 7.997 0 01-6.64-3.544c1.768 1.577 4.09 2.544 6.64 2.544s4.872-.967 6.64-2.544a7.997 7.997 0 01-6.64 3.544zm-6.64-6.544c1.768 1.577 4.09 2.544 6.64 2.544s4.872-.967 6.64-2.544c-1.438 2.136-3.877 3.544-6.64 3.544s-5.202-1.408-6.64-3.544zm14.64-7.456c0 4.411-3.589 8-8 8s-8-3.589-8-8 3.589-8 8-8 8 3.589 8 8zm-8-11.999a7.997 7.997 0 01-6.64-3.544c1.768 1.577 4.09 2.544 6.64 2.544s4.872-.967 6.64-2.544A7.997 7.997 0 0131.998 30z"/><path d="M31.998 20c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .898-2 2-2zm.03-3a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm0 10h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-4.242-8.243a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm8.485 6.485h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-9.243-3.243a1 1 0 00-1-1h-.011a.995.995 0 00-.994 1 1.003 1.003 0 002.005 0zm11 1a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1z"/><path d="M32.028 16.999a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-4.242 2.243h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm8.485-6.486a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm-8.273 29.243c0 2.206 1.794 4 4 4s4-1.794 4-4-1.794-4-4-4-4 1.794-4 4zm6 0c0 1.103-.897 2-2 2s-2-.897-2-2 .897-2 2-2 2 .897 2 2zm-2.975-6a1.003 1.003 0 002.005 0 1 1 0 00-1-1h-.011a.995.995 0 00-.994 1zm1.005 11h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-4.242-8.243a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm8.485 6.485h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-10.243-4.243h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm12 2a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1z"/><path d="M31.023 41.998a1.003 1.003 0 002.005 0 1 1 0 00-1-1h-.011a.995.995 0 00-.994 1zm-3.237 3.243h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm8.485-6.486a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1z"/></svg>
													</i>

													<h4><a href="#">Cookies</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M15.994 0a1 1 0 00-1 1v62a1 1 0 001 1h32.012a1 1 0 001-1V1a1 1 0 00-1-1zm1 9.005h30.012v24.998H16.994zM32.003 2h15.003v5.005H16.994V2zM16.994 62V36.003h30.012V62z"/><path d="M45.778 16.376a1.002 1.002 0 00-.773-.366h-.081c-.487-3.388-3.402-6.003-6.923-6.003H26.005c-3.521 0-6.436 2.615-6.923 6.003h-.081a1.001 1.001 0 00-.98 1.196l3.003 14.993a1 1 0 00.98.804h19.998a.998.998 0 00.98-.804l3.003-14.993a.998.998 0 00-.207-.83zm-12.053-4.369c-.347.595-.985 1-1.722 1s-1.375-.405-1.722-1zm-7.72 0h2.14c.447 1.721 2 3 3.858 3s3.411-1.279 3.858-3h2.14a5.009 5.009 0 014.901 4.003H21.104a5.009 5.009 0 014.901-4.003zm15.178 18.996h-18.36L20.221 18.01h23.564z"/><path d="M32.003 29.001a1 1 0 001-1v-6.997a1 1 0 10-2 0v6.997a1 1 0 001 1zm4.857-.01a1 1 0 001.132-.848l1.001-6.997a1 1 0 00-1.981-.283l-1.001 6.997a1 1 0 00.849 1.131zm-9.855.01a1 1 0 00.992-1.142l-1.001-6.997a1 1 0 00-1.981.283l1.001 6.997a1 1 0 00.989.859zm18 14.008h-.081c-.487-3.388-3.402-6.003-6.923-6.003H26.005c-3.521 0-6.436 2.615-6.923 6.003h-.081a.996.996 0 00-.983 1.184l3.003 15.994a.998.998 0 00.982.815h19.998a.998.998 0 00.982-.815l3.003-15.994a.996.996 0 00-.981-1.184zm-11.28-4.003c-.347.595-.985 1-1.722 1s-1.375-.405-1.722-1zm-7.72 0h2.14c.447 1.721 2 3 3.858 3s3.411-1.279 3.858-3h2.14a5.009 5.009 0 014.901 4.003H21.104a5.009 5.009 0 014.901-4.003zm15.167 19.997H22.834l-2.628-13.994H43.8z"/><path d="M32.003 57.001a1 1 0 001-1v-7.998a1 1 0 10-2 0v7.998a1 1 0 001 1zm4.875-.008a1 1 0 001.116-.868l1.001-7.998a1 1 0 10-1.984-.248l-1.001 7.998a.999.999 0 00.868 1.116zm-9.873.008a.999.999 0 00.993-1.124l-1.001-7.998a.999.999 0 10-1.984.248l1.001 7.998a1 1 0 00.991.876zM29.503 4.5c0 1.379 1.121 2.5 2.5 2.5s2.5-1.121 2.5-2.5-1.121-2.5-2.5-2.5-2.5 1.121-2.5 2.5zm2.5-.5c.275 0 .5.225.5.5s-.225.5-.5.5-.5-.225-.5-.5.225-.5.5-.5zm-10 1.5h5a1 1 0 100-2h-5a1 1 0 100 2zm15 0h5a1 1 0 100-2h-5a1 1 0 100 2z"/></svg>
													</i>

													<h4><a href="#">Muffin</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M10.996 59c0 2.757 2.243 5 5 5h32.008c2.757 0 5-2.243 5-5V15.002a1 1 0 001-1v-3a1 1 0 00-1-1h-.049C52.538 4.418 47.872 0 42.184 0c-.035 0-.064.017-.099.02-.03-.003-.058-.018-.089-.018h-5.997l-.005-.001a1 1 0 00-1.002 1.001l.001.006A3.002 3.002 0 0131.996 4c-1.654 0-3-1.346-3-2.999V1a1 1 0 00-1-1h-6.061C16.206 0 11.49 4.404 10.984 10.004a.998.998 0 00-.988.998v3a1 1 0 001 1zm37.047-4.996c-.014 0-.025-.004-.039-.004s-.025.004-.039.004a3 3 0 01-2.961-2.996c0-1.654 1.346-3 3-3s3 1.346 3 3a3.002 3.002 0 01-2.961 2.996zm2.961.978v.043l-.026-.021.026-.022zM20.996 59a3 3 0 012.961-2.996c.014 0 .025.004.039.004s.025-.004.039-.004A3 3 0 0126.996 59c0 1.654-1.346 3-3 3s-3-1.346-3-3zm-.975 3h-.051l.025-.031c.009.01.019.02.026.031zm-1.051-6.996a4.994 4.994 0 001.026-1.027c.291.392.636.736 1.026 1.027a4.994 4.994 0 00-1.026 1.027 5.019 5.019 0 00-1.026-1.027zM15.996 54c-.014 0-.025.004-.039.004a3 3 0 01-2.961-2.996c0-1.654 1.346-3 3-3s3 1.346 3 3a3 3 0 01-2.961 2.996c-.014 0-.025-.004-.039-.004zm-2.974 1.004l-.026.021v-.043l.026.022zm6.974-9.027c.292.393.639.739 1.031 1.031a5.013 5.013 0 00-1.031 1.031 5.013 5.013 0 00-1.031-1.031 5.037 5.037 0 001.031-1.031zm4-13.938c-.009-.012-.02-.022-.028-.034.01 0 .019.003.028.003l.028-.003c-.008.012-.019.022-.028.034zm4-.031c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm11 3c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm.972-3.003c.01 0 .019.003.028.003l.028-.003c-.009.012-.02.022-.028.034l-.028-.034zM44 48.044a5.007 5.007 0 00-1.035-1.036A5.007 5.007 0 0044 45.972c.293.395.641.743 1.035 1.036A5.007 5.007 0 0044 48.044zm-3.965 5.96c-.014 0-.025-.004-.039-.004s-.025.004-.039.004a3 3 0 01-2.961-2.996c0-1.654 1.346-3 3-3s3 1.346 3 3a3.002 3.002 0 01-2.961 2.996zm-4.039 2.027a4.994 4.994 0 00-1.026-1.027 4.994 4.994 0 001.026-1.027c.291.392.636.736 1.026 1.027-.39.291-.735.636-1.026 1.027zm-4-2.031c-.014 0-.025.004-.039.004a3 3 0 01-2.961-2.996c0-1.654 1.346-3 3-3s3 1.346 3 3a3 3 0 01-2.961 2.996c-.014 0-.025-.004-.039-.004zm-4 2.031a4.994 4.994 0 00-1.026-1.027 4.994 4.994 0 001.026-1.027c.291.392.636.736 1.026 1.027-.39.291-.735.636-1.026 1.027zm-4-2.031c-.014 0-.025.004-.039.004a3 3 0 01-2.961-2.996c0-1.654 1.346-3 3-3s3 1.346 3 3a3 3 0 01-2.961 2.996c-.014 0-.025-.004-.039-.004zm4-8.023c.292.393.639.739 1.031 1.031a5.013 5.013 0 00-1.031 1.031 5.013 5.013 0 00-1.031-1.031 5.037 5.037 0 001.031-1.031zm15-2.969c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm-7 5.031a5.013 5.013 0 00-1.031-1.031 5.013 5.013 0 001.031-1.031c.292.393.639.739 1.031 1.031a5.013 5.013 0 00-1.031 1.031zm0-8c-.009-.012-.02-.022-.028-.034.01 0 .019.003.028.003l.028-.003c-.008.012-.019.022-.028.034zm-8 0c-.009-.012-.02-.022-.028-.034.01 0 .019.003.028.003l.028-.003c-.008.012-.019.022-.028.034zm4-.031c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm-.028-1.997c.009-.012.02-.022.028-.034.009.012.02.022.028.034-.01 0-.019-.003-.028-.003s-.018.003-.028.003zM44 40.044c-.01-.014-.021-.025-.032-.039.01 0 .019.003.028.003.013 0 .023-.004.036-.004l-.032.04zm-4.004-2.036c-.01 0-.019.003-.028.003.009-.012.02-.022.028-.034.009.012.02.022.028.034-.009 0-.018-.003-.028-.003zm-8-5.969c-.009-.012-.02-.022-.028-.034.01 0 .019.003.028.003l.028-.003c-.008.012-.019.022-.028.034zm-7.972 5.972c-.01 0-.019-.003-.028-.003l-.028.003c.009-.012.02-.022.028-.034.009.011.02.022.028.034zm-4.028 2.028c-.009-.012-.02-.022-.028-.034.01 0 .019.003.028.003l.028-.003c-.008.012-.019.022-.028.034zm4-.031c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm4 21.961l.025.031h-.051l.026-.031zm1-2.969a3 3 0 012.961-2.996c.014 0 .025.004.039.004s.025-.004.039-.004A3 3 0 0134.996 59c0 1.654-1.346 3-3 3s-3-1.346-3-3zm7 2.969l.025.031h-.051l.026-.031zm1-2.969a3 3 0 012.961-2.996c.014 0 .025.004.039.004s.025-.004.039-.004A3 3 0 0142.996 59c0 1.654-1.346 3-3 3s-3-1.346-3-3zM44 61.964c.009.013.021.023.029.036h-.059c.009-.013.021-.023.03-.036zm0-5.928a5.013 5.013 0 00-1.03-1.032A5.013 5.013 0 0044 53.972c.292.394.638.739 1.03 1.032A5.037 5.037 0 0044 56.036zm6.973-9.028l.031-.025v.051l-.031-.026zm-2.969-1c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-4.008-8c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-4-8c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-3.972.003c-.01 0-.019-.003-.028-.003l-.028.003c.009-.012.02-.022.028-.034.009.011.02.022.028.034zm-4.028-.003c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-3.972.003c-.01 0-.019-.003-.028-.003l-.028.003c.009-.012.02-.022.028-.034.009.011.02.022.028.034zm-4.028-.003c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-1 5c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm-4 8c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm-5.969 4l-.031.025v-.051l.031.026zM12.996 59a3 3 0 012.961-2.996c.014 0 .025.004.039.004s.025-.004.039-.004A3 3 0 0118.996 59c0 1.654-1.346 3-3 3s-3-1.346-3-3zm35.008 3c-1.654 0-3-1.346-3-3a3 3 0 012.961-2.996c.014 0 .025.004.039.004s.025-.004.039-.004A3 3 0 0151.004 59c0 1.654-1.346 3-3 3zM12.04 13.002c-.016-.001-.028-.009-.044-.009v-.991h40.008v.992c-.014 0-.025.007-.039.008zM21.936 2h5.161a5.009 5.009 0 004.899 4 5.005 5.005 0 004.896-3.998h5.104c.035 0 .064-.017.099-.02.03.003.057.018.089.018 4.586 0 8.36 3.521 8.771 8.002H12.992C13.492 5.508 17.31 2 21.936 2zm29.068 13.002v24.031a4.947 4.947 0 00-3-1.025c-.013 0-.023.004-.036.004a4.953 4.953 0 001.028-3.004c0-2.757-2.243-5-5-5-.01 0-.019.003-.028.003a4.946 4.946 0 001.028-3.003c0-2.757-2.243-5-5-5-1.642 0-3.088.806-4 2.031-.912-1.226-2.358-2.031-4-2.031s-3.088.806-4 2.031c-.912-1.226-2.358-2.031-4-2.031-2.757 0-5 2.243-5 5 0 1.131.392 2.164 1.028 3.003-.01 0-.019-.003-.028-.003-2.757 0-5 2.243-5 5 0 1.131.392 2.164 1.028 3.003-.01 0-.019-.003-.028-.003-1.13 0-2.162.391-3 1.025V15.002z"/></svg>
													</i>

													<h4><a href="#">Cheese balls</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M63 40.021h-2.004v-1.979a1 1 0 00-1-1h-2.002v-2.04a1 1 0 00-1-1H54.99v-2.003a1 1 0 00-1-1h-1.992V20a1 1 0 00-1-1H1a1 1 0 00-1 1v24a1 1 0 001 1h62a1 1 0 001-1v-2.979a1 1 0 00-1-1zm-4.004 0h-17v-.979h17zm-3.002-2.98H41.996v-1.04h13.998zm-3.004-3.04H41.996v-1.003H52.99zm-10.994-3.003V21h8.002v9.998zM2 21h37.996v22H2zm60 22H41.996v-.979H62z"/><path d="M21.002 34.002c2.757 0 5-2.243 5-5s-2.243-5-5-5-5 2.243-5 5 2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zM29 35.001H13a1 1 0 100 2h16a1 1 0 100-2zm-3.998 3H17a1 1 0 100 2h8.002a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Loaf</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M20.995 64h35.999a1 1 0 001-1V1a1 1 0 00-1-1H7.006a1 1 0 00-1 1v62a1 1 0 001 1zm-9.993-2V2h8.993v60zM55.994 2v60H38.99V2h2.003zM36.99 2v60h-.996V2zm-2.996 0v60h-9.003V2h2.013zM22.991 2v60h-.996V2zM8.006 2h.996v60h-.996z"/><path d="M44.023 8.999a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm7.008 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-7.008 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm7.008 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-7.008 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm7.008 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-7.008 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm7.008 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-7.008 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm7.008 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-7.008 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm7.008 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-7.008 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm7.008 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-20.998-48a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm0 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm0 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm0 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm0 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm0 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm0 8a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm-14.013-48a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm0 6h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm0 8h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm0 8h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm0 8h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm0 8h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm0 8h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Bread</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M50 63V1a1 1 0 00-1-1H15a1 1 0 00-1 1v62a1 1 0 001 1h34a1 1 0 001-1zM48 2v12.001H16V2zM16 62V16.001h32V62z"/><path d="M45.999 52.999h-3a1 1 0 00-1 1c0 .345-.035.683-.103 1.008a6.974 6.974 0 00-4.897-2.008H18.001a1 1 0 00-1 1c0 3.859 3.141 7 7 7h12.998a6.972 6.972 0 004.897-2.008c.067.325.103.663.103 1.008a1 1 0 001 1h3a1 1 0 001-1v-6a1 1 0 00-1-1zm-2.686 4a6.906 6.906 0 00.605-2h1.08v4h-1.08a6.906 6.906 0 00-.605-2zm-24.211-2h3.826a.987.987 0 00-.907.982 1.003 1.003 0 002.005 0 .99.99 0 00-.913-.982h1.883v4h-.994a5.009 5.009 0 01-4.9-4zm17.897 4H26.995v-4h10.004c1.627 0 3.061.793 3.975 2-.914 1.207-2.348 2-3.975 2zm9-14.999H27.001a6.972 6.972 0 00-4.897 2.008A5.002 5.002 0 0122.001 45a1 1 0 00-1-1h-3a1 1 0 00-1 1v6a1 1 0 001 1h3a1 1 0 001-1c0-.345.035-.682.103-1.008A6.972 6.972 0 0027.001 52h12.998c3.859 0 7-3.141 7-7a1 1 0 00-1-1zm-25.312 4a6.906 6.906 0 00-.605 2h-1.08v-4h1.08c.101.706.308 1.378.605 2zm2.339 0c.914-1.207 2.348-2 3.975-2h10.004v4H27.001c-1.627 0-3.061-.793-3.975-2zm16.973 2h-.994v-4h1.933a.987.987 0 00-.907.982 1.003 1.003 0 002.005 0 .99.99 0 00-.913-.982h3.776a5.01 5.01 0 01-4.9 4zm6-15h-3a1 1 0 00-1 1c0 .345-.035.682-.103 1.008A6.972 6.972 0 0036.999 35H18.001a1 1 0 00-1 1c0 3.859 3.141 7 7 7h12.998a6.972 6.972 0 004.897-2.008c.067.326.103.663.103 1.008a1 1 0 001 1h3a1 1 0 001-1v-6a1 1 0 00-1-1zm-2.686 4a6.906 6.906 0 00.605-2h1.08v4h-1.08a6.906 6.906 0 00-.605-2zm-24.211-2h3.826a.987.987 0 00-.907.982 1.003 1.003 0 002.005 0 .99.99 0 00-.913-.982h1.883v4h-.994a5.009 5.009 0 01-4.9-4zm17.897 4H26.995v-4h10.004c1.627 0 3.061.793 3.975 2-.914 1.207-2.348 2-3.975 2zm9-24h-3a1 1 0 00-1 1c0 .345-.035.682-.103 1.008A6.972 6.972 0 0036.999 17H18.001a1 1 0 00-1 1c0 3.859 3.141 7 7 7h12.998a6.972 6.972 0 004.897-2.008c.067.326.103.663.103 1.008a1 1 0 001 1h3a1 1 0 001-1v-6a1 1 0 00-1-1zm-2.686 4a6.906 6.906 0 00.605-2h1.08v4h-1.08a6.906 6.906 0 00-.605-2zm-24.211-2h3.826a.987.987 0 00-.907.982 1.003 1.003 0 002.005 0 .99.99 0 00-.913-.982h1.883v4h-.994a5.009 5.009 0 01-4.9-4zm17.897 4H26.995v-4h10.004c1.627 0 3.061.793 3.975 2-.914 1.207-2.348 2-3.975 2zm9 3.001H27.001a6.972 6.972 0 00-4.897 2.008 4.995 4.995 0 01-.103-1.008 1 1 0 00-1-1h-3a1 1 0 00-1 1v6a1 1 0 001 1h3a1 1 0 001-1c0-.345.035-.683.103-1.008a6.974 6.974 0 004.897 2.008h12.998c3.859 0 7-3.141 7-7a1 1 0 00-1-1zm-25.312 4a6.906 6.906 0 00-.605 2h-1.08v-4h1.08c.101.706.308 1.378.605 2zm2.339 0c.914-1.207 2.348-2 3.975-2h10.004v4H27.001c-1.627 0-3.061-.793-3.975-2zm16.973 2h-.994v-4h1.933a.987.987 0 00-.907.982 1.003 1.003 0 002.005 0 .99.99 0 00-.913-.982h3.776a5.01 5.01 0 01-4.9 4zM32 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM20 8h5a1 1 0 100-2h-5a1 1 0 100 2zm0 3h5a1 1 0 100-2h-5a1 1 0 100 2zm19-3h5a1 1 0 100-2h-5a1 1 0 100 2zm0 3h5a1 1 0 100-2h-5a1 1 0 100 2z"/></svg>
													</i>

													<h4><a href="#">Dried fish</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M31.999 9.001c-6.617 0-12 5.383-12 12V24c0 4.92 2.979 9.153 7.226 11.004-4.247 1.85-7.226 6.083-7.226 11.003v2.999c0 6.617 5.383 12 12 12s12-5.383 12-12v-2.999c0-4.92-2.979-9.153-7.226-11.003C41.02 33.153 43.999 28.92 43.999 24v-2.999c0-6.617-5.383-12-12-12zm0 50.005c-3.349 0-6.311-1.66-8.127-4.195 2.141 1.978 4.99 3.196 8.127 3.196s5.986-1.219 8.127-3.196c-1.816 2.535-4.778 4.195-8.127 4.195zm10-12.999c0 5.514-4.486 10-10 10s-10-4.486-10-10 4.486-10 10-10 10 4.486 10 10zM31.999 34c-3.349 0-6.311-1.66-8.127-4.195 2.141 1.978 4.99 3.196 8.127 3.196s5.986-1.219 8.127-3.196C38.31 32.34 35.348 34 31.999 34zm0-2.999c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10z"/><path d="M31.999 16.001c-2.757 0-5 2.243-5 5 0 .857.237 1.653.619 2.359.037.096.08.188.146.269.884 1.418 2.445 2.372 4.235 2.372 1.789 0 3.349-.952 4.233-2.368a.988.988 0 00.156-.289 4.93 4.93 0 00.61-2.343 5.004 5.004 0 00-4.999-5zm0 2c1.654 0 3 1.346 3 3l-.001.011a5 5 0 00-2.999-1.007A5.006 5.006 0 0029 21.011l-.001-.01c0-1.654 1.346-3 3-3zm0 6c-.88 0-1.665-.388-2.214-.993a2.991 2.991 0 012.214-1.003c.854 0 1.65.381 2.214 1.003a2.983 2.983 0 01-2.214.993z"/><path d="M38.099 14.589a1 1 0 00-.851-.714l-1.071-.118-.64-.869a1.008 1.008 0 00-1.044-.38l-1.05.258-.893-.597a.999.999 0 00-1.111.001l-.896.599-1.049-.256a.988.988 0 00-1.042.38l-.638.867-1.072.119a1.002 1.002 0 00-.85.714l-.302 1.032-.967.479c-.362.18-.581.559-.555.962l.07 1.073-.746.781a1.002 1.002 0 00-.191 1.094l.434.984-.435.99a.999.999 0 00.194 1.093l.743.776-.069 1.078c-.025.403.193.783.556.962l.966.476.303 1.035a1 1 0 00.851.713l1.07.117.64.87c.239.325.652.473 1.044.379l1.04-.255.901.601a.998.998 0 001.11 0l.897-.599 1.047.256a1 1 0 001.043-.38l.639-.868 1.072-.118c.401-.044.737-.326.851-.714l.303-1.036.967-.476c.362-.18.582-.559.556-.962l-.07-1.077.745-.778a.999.999 0 00.193-1.094L40.358 21l.434-.988a.999.999 0 00-.193-1.094l-.745-.778.07-1.077a1 1 0 00-.557-.962l-.966-.476zm.252 6.813l.342.778-.587.613a1 1 0 00-.276.757l.056.849-.763.375a1.007 1.007 0 00-.518.617l-.238.817-.846.093a1 1 0 00-.696.402l-.504.685-.825-.202a1.015 1.015 0 00-.792.14l-.708.473-.713-.475a1.005 1.005 0 00-.793-.14l-.818.201-.505-.687a.997.997 0 00-.696-.401l-.843-.092-.239-.817a1.002 1.002 0 00-.518-.616l-.761-.374.055-.851a1 1 0 00-.276-.756l-.586-.612.343-.781a1.002 1.002 0 00-.001-.805l-.342-.775.589-.616c.193-.202.292-.477.274-.756l-.056-.846.763-.377c.251-.124.438-.348.517-.616l.238-.814.846-.094a1 1 0 00.695-.402l.502-.683.828.201a1 1 0 00.792-.141l.705-.471.703.47c.233.155.519.205.794.14l.829-.204.504.686a.996.996 0 00.696.402l.845.093.239.818a1 1 0 00.519.617l.761.374-.056.85a1 1 0 00.276.756l.587.613-.342.779a.99.99 0 000 .805zM26.999 46.007c0 .857.237 1.653.619 2.359.037.096.08.188.146.269.884 1.418 2.445 2.372 4.235 2.372 1.789 0 3.349-.952 4.233-2.368a.988.988 0 00.156-.289 4.93 4.93 0 00.61-2.343c0-2.757-2.243-5-5-5s-4.999 2.243-4.999 5zm5 3c-.88 0-1.665-.388-2.214-.993a2.991 2.991 0 012.214-1.003c.854 0 1.65.381 2.214 1.003a2.983 2.983 0 01-2.214.993zm0-6c1.654 0 3 1.346 3 3l-.001.011a5 5 0 00-2.999-1.007A5.006 5.006 0 0029 46.017l-.001-.01c0-1.654 1.346-3 3-3z"/><path d="M31.439 37.176l-.896.599-1.049-.256a.988.988 0 00-1.042.38l-.638.867-1.072.119a1.002 1.002 0 00-.85.714l-.302 1.032-.967.479c-.362.18-.581.559-.555.962l.07 1.073-.746.781a1.002 1.002 0 00-.191 1.094l.434.984-.435.99a.999.999 0 00.194 1.093l.743.776-.069 1.078c-.025.403.193.783.556.962l.966.476.303 1.035a1 1 0 00.851.713l1.07.117.64.87c.239.325.652.471 1.044.379l1.04-.255.901.601a.998.998 0 001.11 0l.897-.599 1.047.256a1 1 0 001.043-.38l.639-.868 1.072-.118c.401-.044.737-.326.851-.714l.303-1.036.967-.476c.362-.18.582-.559.556-.962l-.07-1.077.745-.778a.999.999 0 00.193-1.094l-.434-.987.434-.988a.999.999 0 00-.193-1.094l-.745-.778.07-1.077a1 1 0 00-.557-.962l-.966-.476-.303-1.036a1 1 0 00-.851-.714l-1.071-.118-.64-.869a1.008 1.008 0 00-1.044-.38l-1.05.258-.893-.597a.997.997 0 00-1.11.001zm1.259 2.504c.233.155.519.205.794.14l.829-.204.504.686a.996.996 0 00.696.402l.845.093.239.818a1 1 0 00.519.617l.761.374-.056.85a1 1 0 00.276.756l.587.613-.342.779a.998.998 0 000 .805l.342.778-.587.613a1 1 0 00-.276.757l.056.849-.763.375a1.007 1.007 0 00-.518.617l-.238.817-.846.093a1 1 0 00-.696.402l-.504.685-.825-.202a1.011 1.011 0 00-.792.14l-.708.473-.713-.475a1.005 1.005 0 00-.793-.14l-.818.201-.505-.687a.997.997 0 00-.696-.401l-.843-.092-.239-.817a1.002 1.002 0 00-.518-.616l-.761-.374.055-.851a1 1 0 00-.276-.756l-.586-.612.343-.781a1.002 1.002 0 00-.001-.805l-.342-.775.589-.616c.193-.202.292-.477.274-.756l-.056-.846.763-.377c.251-.124.438-.348.517-.616l.238-.814.846-.094a1 1 0 00.695-.402l.502-.683.828.201a1 1 0 00.792-.141l.705-.471z"/><path d="M45.999 64a1 1 0 001-1V1a1 1 0 00-1-1H18.001a1 1 0 00-1 1v62a1 1 0 001 1zm-26.998-2V8h25.998v54zM44.999 2v4H19.001V2z"/><path d="M35 5h7a1 1 0 100-2h-7a1 1 0 100 2zM21.997 5h7a1 1 0 100-2h-7a1 1 0 100 2zm10.027 0a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1z"/></svg>
													</i>

													<h4><a href="#">Donut</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M59 17.997H36.99c-.222 0-.434.037-.647.065a.974.974 0 00-.324-.065H5c-2.757 0-5 2.243-5 5v18.006c0 2.757 2.243 5 5 5h31.019a.969.969 0 00.324-.065c.214.028.426.065.647.065H59c2.757 0 5-2.243 5-5V22.997c0-2.757-2.243-5-5-5zM43.025 44.003H36.99c-1.654 0-3-1.346-3-3V22.997c0-1.654 1.346-3 3-3h6.035a4.947 4.947 0 00-1.025 3v18.006c0 1.13.391 2.162 1.025 3zM2 41.003V22.997c0-1.654 1.346-3 3-3h28.016a4.947 4.947 0 00-1.025 3v18.006c0 1.13.391 2.162 1.025 3H5c-1.654 0-3-1.346-3-3zm60 0c0 1.654-1.346 3-3 3H47c-1.654 0-3-1.346-3-3V22.997c0-1.654 1.346-3 3-3h12c1.654 0 3 1.346 3 3z"/><path d="M49.032 23.997h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm3.998 7h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm3.998 7.002h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-8.007 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm8.007-14.008h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm-17.996.006h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm-.011 14.002h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-28.02-6.001h13a1 1 0 001-1v-4a1 1 0 00-1-1h-13a1 1 0 00-1 1v4a1 1 0 001 1zm1-3.999h11v2h-11zm14.998 6h-19a1 1 0 100 2h19a1 1 0 100-2zm-5 3h-9a1 1 0 100 2h9a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Cracker</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M4.5 29.006h.065l2.372 29.052c.182 3.273 2.996 5.937 6.275 5.937h26.551c3.279 0 6.094-2.663 6.274-5.911l2.373-29.077h.085a1 1 0 001-1v-3a1 1 0 00-1-1H41.57c-.138-.394-.076-.879.188-1.188l1.002-1.174.001-.002c.988-1.157.987-2.968-.001-4.123l-1.003-1.175c-.348-.406-.348-1.119.001-1.526l1.002-1.174.001-.002c.988-1.157.987-2.968-.001-4.123l-.448-.524h2.187a3.002 3.002 0 002.999-2.998v-.004H59.5a1 1 0 100-2h-12A3.001 3.001 0 0044.518.998c-.007 0-.012-.004-.019-.004H33.5a1 1 0 100 2h7.999v1H33.5a1 1 0 00-1 1c0 .063.024.116.035.176l-.297.348c-.58.678-.811 1.579-.711 2.443 0 .012-.007.021-.007.033 0 .028.014.053.017.08.009.063.024.125.037.188.014.046.017.095.036.139.115.451.317.881.627 1.243l1.003 1.175c.348.406.348 1.119 0 1.525l-.001.001-1.001 1.173c-.99 1.157-.99 2.97-.001 4.126l1.003 1.175c.348.406.348 1.119 0 1.525l-.001.001-1.001 1.173c-.59.689-.82 1.61-.707 2.488H14.293c8.932-3.817 15.207-12.688 15.207-23a1 1 0 10-2 0c0 12.683-10.317 23-23 23a1 1 0 00-1 1v3a1 1 0 001 1zm39.543 28.94c-.124 2.232-2.044 4.048-4.279 4.048H13.213c-2.235 0-4.155-1.815-4.28-4.073l-2.36-28.915h39.83zm3.453-30.94H5.5v-1h41.996zM40.237 9.644l1.003 1.175c.348.406.348 1.119 0 1.525l-.001.001-1.001 1.173c-.99 1.157-.99 2.97-.001 4.126l1.003 1.175c.348.406.348 1.119 0 1.525l-.001.001-1.001 1.173c-.59.689-.82 1.61-.707 2.488H37.57c-.138-.394-.076-.879.188-1.188l1.002-1.174.001-.002c.988-1.157.987-2.968-.001-4.123l-1.003-1.175c-.348-.406-.348-1.119.001-1.526l1.002-1.174.001-.002c.988-1.157.987-2.968-.001-4.123l-.448-.524h1.515c.111.229.241.45.41.649zm-6.577-2.65c.033-.06.055-.126.099-.177l.702-.823h1.445c-.176.312-.293.65-.355 1zm4.099-.177l.702-.823h1.445c-.176.312-.293.65-.355 1H37.66c.033-.059.055-.126.099-.177zm6.731-3.823l.01.002c.55 0 .996.444.999.993l-.001.005v2.002a1 1 0 01-.999.998h-1v-4zM33.759 22.817l1.002-1.174.001-.002c.988-1.157.987-2.968-.001-4.123l-1.003-1.175c-.348-.406-.348-1.119.001-1.526l1.002-1.174.001-.002c.988-1.157.987-2.968-.001-4.123l-.448-.524h1.515c.111.229.241.451.41.649l1.003 1.175c.348.406.348 1.119 0 1.525l-.001.001-1.001 1.173c-.99 1.157-.99 2.97-.001 4.126l1.003 1.175c.348.406.348 1.119 0 1.525l-.001.001-1.001 1.173c-.59.689-.82 1.61-.707 2.488H33.57c-.137-.393-.076-.878.189-1.188z"/><path d="M26.497 55.996c6.065 0 11-4.935 11-11s-4.935-11-11-11-11 4.935-11 11 4.935 11 11 11zm0-20c4.963 0 9 4.037 9 9s-4.037 9-9 9-9-4.037-9-9 4.037-9 9-9z"/><path d="M26.497 50.996c3.309 0 6-2.691 6-6s-2.691-6-6-6-6 2.691-6 6 2.691 6 6 6zm0-10c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"/></svg>
													</i>

													<h4><a href="#">Instant noodles</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M20.051 62.685c-.018.054-.012.107-.02.161-.009.052-.031.099-.031.154 0 .014.007.024.008.038.003.073.023.14.042.209.015.058.022.117.048.17.026.058.067.104.104.154.038.054.071.109.119.154.042.04.095.065.144.097.061.04.117.081.187.107.013.005.021.016.034.02.103.034.21.051.314.051h22c.104 0 .211-.017.315-.051.013-.004.021-.015.034-.02.069-.026.126-.067.187-.107.049-.031.102-.058.144-.097.049-.045.081-.101.119-.154.036-.051.077-.097.104-.153.025-.054.033-.113.048-.171.019-.069.039-.137.042-.209 0-.014.007-.024.007-.038 0-.055-.022-.103-.031-.154-.009-.055-.002-.107-.02-.161l-.948-2.85V24.994a1 1 0 00-1-1h-.072c.032-.16.05-.325.05-.494v-3c0-.565-.195-1.081-.513-1.5.317-.419.513-.935.513-1.5s-.195-1.081-.513-1.5c.317-.419.513-.935.513-1.5s-.195-1.081-.513-1.5c.317-.419.513-.935.513-1.5v-3c0-.565-.195-1.081-.513-1.5.317-.419.513-.935.513-1.5s-.196-1.081-.513-1.5c.317-.419.513-.935.513-1.5 0-1.379-1.121-2.5-2.5-2.5h-3c-.565 0-1.081.195-1.5.513C34.559.195 34.043 0 33.478 0s-1.081.195-1.5.513a2.471 2.471 0 00-1.5-.513c-.564 0-1.08.195-1.499.512a2.48 2.48 0 00-1.5-.512h-3a2.502 2.502 0 00-2.5 2.5c0 .565.195 1.081.513 1.5-.317.419-.513.935-.513 1.5s.195 1.081.513 1.5a2.477 2.477 0 00-.513 1.5v3c0 .565.195 1.081.513 1.5-.317.419-.513.935-.513 1.5s.195 1.081.513 1.5c-.317.419-.513.935-.513 1.5s.195 1.081.513 1.5a2.477 2.477 0 00-.513 1.5v3c0 .169.018.334.05.494h-.042a1 1 0 00-1 1c0 .022.012.041.013.063v34.778zM23.979 17.5c0-.275.225-.5.5-.5h3a.5.5 0 01.499.495v.008a.5.5 0 01-.499.497h-3a.5.5 0 01-.5-.5zm0-3c0-.275.225-.5.5-.5h3a.5.5 0 01.499.497v.008a.5.5 0 01-.499.495h-3a.5.5 0 01-.5-.5zm0-9c0-.275.225-.5.5-.5h3a.5.5 0 01.499.495v.008a.5.5 0 01-.499.497h-3a.5.5 0 01-.5-.5zm0-3c0-.275.225-.5.5-.5h3a.5.5 0 01.499.497v.008a.5.5 0 01-.499.495h-3a.5.5 0 01-.5-.5zm15.5-.5c.275 0 .5.225.5.5s-.225.5-.5.5h-3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5zm.5 3.5c0 .275-.225.5-.5.5h-3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5h3c.275 0 .5.225.5.5zm0 9c0 .275-.225.5-.5.5h-3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5h3c.275 0 .5.225.5.5zm0 3c0 .275-.225.5-.5.5h-3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5h3c.275 0 .5.225.5.5zM22.721 60.998H41.28L41.613 62H22.387zm16.728-37.004a.498.498 0 01-.471-.494v-3c0-.275.225-.5.5-.5s.5.225.5.5v3c0 .266-.21.479-.471.494zm-3 0a.498.498 0 01-.471-.494v-3c0-.275.225-.5.5-.5s.5.225.5.5v3c0 .266-.21.479-.471.494zm-9 0a.498.498 0 01-.471-.494v-3c0-.275.225-.5.5-.5s.5.225.5.5v3c0 .266-.21.479-.471.494zm-3 0a.498.498 0 01-.471-.494v-3c0-.275.225-.5.5-.5s.5.225.5.5v3c0 .266-.21.479-.471.494zm-.47-12.494v-3c0-.275.225-.5.5-.5s.5.225.5.5v3c0 .275-.225.5-.5.5s-.5-.225-.5-.5zm3 0v-3c0-.275.225-.5.5-.5s.5.225.5.5v3c0 .275-.225.5-.5.5s-.5-.225-.5-.5zm13-3v3c0 .275-.225.5-.5.5s-.5-.225-.5-.5v-3c0-.275.225-.5.5-.5s.5.225.5.5zm-3 0v3c0 .275-.225.5-.5.5s-.5-.225-.5-.5v-3c0-.275.225-.5.5-.5s.5.225.5.5zm-3.471 15.494h-3.059a.498.498 0 01.029-.994h3c.275 0 .5.225.5.5a.495.495 0 01-.47.494zM33.479 11c.275 0 .5.225.5.5s-.225.5-.5.5h-3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5zm0 10h-3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5h3c.275 0 .5.225.5.5s-.225.5-.5.5zm-3.501-3.51v-2.98l.001-.01v-.003a.5.5 0 01.999.003v3a.5.5 0 01-.999.003V17.5l-.001-.01zm4 .01c0 .275-.225.5-.5.5s-.5-.225-.5-.5v-3c0-.275.225-.5.5-.5s.5.225.5.5zm.001-9c0 .275-.225.5-.5.5h-3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5h3c.275 0 .5.225.5.5zm-9.558 17.494c.02 0 .038.006.058.006s.038-.006.058-.006h2.885c.02 0 .038.006.058.006s.038-.006.058-.006h2.885c.02 0 .038.006.058.006h3c.02 0 .038-.006.058-.006h2.885c.02 0 .038.006.058.006s.038-.006.058-.006h2.885c.02 0 .038.006.058.006s.038-.006.058-.006h1.465v33.004H22.999V25.994zM33.478 2c.275 0 .5.225.5.5v3c0 .275-.225.5-.5.5s-.5-.225-.5-.5v-3a.5.5 0 01.5-.5zm-3 0c.275 0 .5.225.5.5v3a.5.5 0 01-.999.003V5.5l-.001-.01V2.51l.001-.01v-.003A.5.5 0 0130.478 2z"/><path d="M32 42.004c2.757 0 5-2.243 5-5s-2.243-5-5-5-5 2.243-5 5 2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm-6 11.997h11.999a1 1 0 100-2H26a1 1 0 100 2zm0 3h11.999a1 1 0 100-2H26a1 1 0 100 2zm9 1h-6.001a1 1 0 100 2H35a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Kozinaki</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M60.994 3.03a.99.99 0 00-.287-.737l-2-2a.999.999 0 00-1.414 0L56 1.586 54.707.293a.999.999 0 00-1.414 0L52 1.586 50.707.293a.999.999 0 00-1.414 0L48 1.586 46.707.293a.999.999 0 00-1.414 0L44 1.586 42.707.293a.999.999 0 00-1.414 0L40 1.586 38.707.293a.999.999 0 00-1.414 0L36 1.586 34.707.293a.999.999 0 00-1.414 0L32 1.586 30.707.293a.999.999 0 00-1.414 0L28 1.586 26.707.293a.999.999 0 00-1.414 0L24 1.586 22.707.293a.999.999 0 00-1.414 0L20 1.586 18.707.293a.999.999 0 00-1.414 0L16 1.586 14.707.293a.999.999 0 00-1.414 0L12 1.586 10.707.293a.999.999 0 00-1.414 0L8 1.586 6.707.293a.999.999 0 00-1.414 0l-2 2a.988.988 0 00-.285.747v1.955L3.007 5l.001.005v53.991l-.001.005.001.005v1.954a.987.987 0 00.285.747l2 2a.997.997 0 001.414 0L8 62.414l1.293 1.293a.997.997 0 001.414 0L12 62.414l1.293 1.293a.997.997 0 001.414 0L16 62.414l1.293 1.293a.997.997 0 001.414 0L20 62.414l1.293 1.293a.997.997 0 001.414 0L24 62.414l1.293 1.293a.997.997 0 001.414 0L28 62.414l1.293 1.293a.997.997 0 001.414 0L32 62.414l1.293 1.293a.997.997 0 001.414 0L36 62.414l1.293 1.293a.997.997 0 001.414 0L40 62.414l1.293 1.293a.997.997 0 001.414 0L44 62.414l1.293 1.293a.997.997 0 001.414 0L48 62.414l1.293 1.293a.997.997 0 001.414 0L52 62.414l1.293 1.293a.997.997 0 001.414 0L56 62.414l1.293 1.293a.997.997 0 001.414 0l2-2a.99.99 0 00.287-.737zM58 61.586l-1.293-1.293a.995.995 0 00-.702-.292h2.989v.591zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-.992-.992v-.593h2.987a.995.995 0 00-.702.292zM6 2.414l1.293 1.293a.997.997 0 001.414 0L10 2.414l1.293 1.293a.997.997 0 001.414 0L14 2.414l1.293 1.293a.997.997 0 001.414 0L18 2.414l1.293 1.293a.997.997 0 001.414 0L22 2.414l1.293 1.293a.997.997 0 001.414 0L26 2.414l1.293 1.293a.997.997 0 001.414 0L30 2.414l1.293 1.293a.997.997 0 001.414 0L34 2.414l1.293 1.293a.997.997 0 001.414 0L38 2.414l1.293 1.293a.997.997 0 001.414 0L42 2.414l1.293 1.293a.997.997 0 001.414 0L46 2.414l1.293 1.293a.997.997 0 001.414 0L50 2.414l1.293 1.293a.997.997 0 001.414 0L54 2.414l1.293 1.293a.997.997 0 001.414 0L58 2.414l.994.994V4H5.008v-.594zM58.994 6v52.001H5.008V6z"/><path d="M15.001 15.077c-4.322 4.343-6.998 10.325-6.998 16.921 0 6.6 2.679 12.586 7.006 16.929.011.013.015.029.027.042s.029.017.042.028c4.343 4.324 10.327 7.001 16.925 7.001 6.594 0 12.573-2.674 16.915-6.992.018-.016.039-.021.056-.037s.021-.038.037-.056c4.316-4.339 6.989-10.315 6.992-16.904l.002-.011-.002-.011C56 25.402 53.33 19.431 49.019 15.092c-.017-.021-.023-.046-.043-.065s-.045-.027-.066-.044c-4.341-4.314-10.317-6.985-16.907-6.985-6.596 0-12.578 2.676-16.921 6.998-.016.014-.034.018-.049.032s-.018.034-.032.049zm38.977 15.921h-1.025a20.88 20.88 0 00-5.434-13.101l.725-.724a21.93 21.93 0 015.734 13.825zm-5.736 15.825l-.723-.723a20.89 20.89 0 005.434-13.102h1.025a21.915 21.915 0 01-5.736 13.825zM10.028 32.999h1.025a20.886 20.886 0 005.436 13.103l-.724.724a21.918 21.918 0 01-5.737-13.827zm20.975 17.948a18.893 18.893 0 01-11.687-4.846l11.687-11.687zm2-16.535L44.691 46.1a18.9 18.9 0 01-11.688 4.848zm1.414-1.414h16.535a18.892 18.892 0 01-4.847 11.688zm.002-2L46.106 19.31a18.903 18.903 0 014.847 11.688zm-1.416-1.412V13.049a18.885 18.885 0 0111.688 4.848zm-2-.002L19.314 17.896a18.9 18.9 0 0111.688-4.848v16.536zm-1.413 1.415H13.054a18.884 18.884 0 014.847-11.688zm.001 2L17.902 44.688A18.9 18.9 0 0113.053 33h16.538zM17.903 47.516a20.885 20.885 0 0013.1 5.432v1.025A21.914 21.914 0 0117.18 48.24zm15.1 5.431a20.884 20.884 0 0013.102-5.434l.724.724a21.913 21.913 0 01-13.825 5.735v-1.025zm13.102-36.464a20.883 20.883 0 00-13.103-5.435v-1.025a21.917 21.917 0 0113.826 5.736zm-15.102-5.434a20.884 20.884 0 00-13.102 5.434l-.724-.724a21.913 21.913 0 0113.825-5.735v1.025zm-14.516 6.847a20.887 20.887 0 00-5.434 13.103h-1.025a21.914 21.914 0 015.735-13.826z"/><path d="M27.045 20.989a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm9.95 22.023h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zM20.01 28.025a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm24.021 7.952h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zM20.01 37.976a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm24.022-11.95h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zM27.046 45.012a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm9.952-24.022a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1z"/></svg>
													</i>

													<h4><a href="#">Pizza</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M59 14.996H5c-2.757 0-5 2.243-5 5V40a5.007 5.007 0 004.004 4.899V59c0 2.757 2.243 5 5 5h45.992c2.757 0 5-2.243 5-5V44.899A5.007 5.007 0 0064 40V19.996c0-2.757-2.243-5-5-5zM57.996 45v10.004H6.004V45zm-3 17H9.004c-1.654 0-3-1.346-3-3v-1.996h51.992V59c0 1.654-1.346 3-3 3zM62 40c0 1.654-1.346 3-3 3H5c-1.654 0-3-1.346-3-3V19.996c0-1.654 1.346-3 3-3h54c1.654 0 3 1.346 3 3z"/><path d="M59 19H5a1 1 0 00-1 1v20a1 1 0 001 1h54a1 1 0 001-1V20a1 1 0 00-1-1zm-1 20H6V21h52z"/><path d="M32 37.006c3.859 0 7-3.141 7-7s-3.141-7-7-7-7 3.141-7 7 3.141 7 7 7zm0-12c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5z"/><path d="M32 33.006c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm11-1h10a1 1 0 100-2H43a1 1 0 100 2zm0 3h10a1 1 0 100-2H43a1 1 0 100 2zm6.997 1h-3.994a1 1 0 100 2h3.994a1 1 0 100-2zm-38.999-4h10a1 1 0 100-2h-10a1 1 0 100 2zm0 3h10a1 1 0 100-2h-10a1 1 0 100 2zm6.997 1h-3.994a1 1 0 100 2h3.994a1 1 0 100-2zM10.505 13a6.51 6.51 0 005.999-4h44.995c1.379 0 2.5-1.121 2.5-2.5S62.878 4 61.499 4H16.504a6.51 6.51 0 00-5.999-4C7.387 0 .001 2.522.001 6.5S7.387 13 10.505 13zm50.994-7c.275 0 .5.225.5.5s-.225.5-.5.5h-44.52c.013-.166.025-.331.025-.5s-.012-.334-.025-.5zM10.505 2c2.481 0 4.5 2.019 4.5 4.5s-2.019 4.5-4.5 4.5c-2.956 0-8.504-2.384-8.504-4.5S7.549 2 10.505 2z"/></svg>
													</i>

													<h4><a href="#">Cottage</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M20 63.998h24c2.757 0 5-2.243 5-5V25.002c0-.034-.016-.063-.02-.096a1.016 1.016 0 00-.118-.382c-.017-.029-.02-.062-.038-.089-.018-.025-.044-.038-.063-.062a1 1 0 00-.672-.355c-.03-.003-.057-.018-.088-.018h-1.034c-.35-9.826-5.816-18.905-14.469-23.867a.992.992 0 00-.994 0C22.852 5.095 17.385 14.174 17.035 24H16a1 1 0 00-1 1v33.996a5.006 5.006 0 005 5.002zm24-2H20c-1.654 0-3-1.346-3-3v-11.47l30-20.625v32.095c0 1.654-1.346 3-3 3zM32 2.162c7.744 4.665 12.624 12.918 12.967 21.84h-11.36c.462-1.559.192-3.353-.827-4.625-.814-1.017-.814-2.733 0-3.75 1.404-1.752 1.404-4.497 0-6.25a1 1 0 10-1.56 1.25c.814 1.017.814 2.733 0 3.748l-.005.009c-1.398 1.753-1.397 4.493.005 6.243.722.901.801 2.351.243 3.375h-12.43C19.376 15.08 24.256 6.827 32 2.162zm12.78 23.84L17 45.101V26.002z"/></svg>
													</i>

													<h4><a href="#">Pirozhki</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M27 26.998l.01-.002h9.979l.01.002c4.412 0 8.001-3.589 8.001-8 0-4.412-3.589-8.002-8.001-8.002l-.01.002H27c-4.411 0-8 3.589-8 8s3.589 8 8 8zm-1-13.91v.91a1 1 0 102 0v-1h8.999l.008-.002A6.009 6.009 0 0143 18.998c0 2.967-2.168 5.432-5.001 5.91v-.912a1 1 0 10-2 0v1H27l-.008.002a6.007 6.007 0 01-5.992-6c0-2.967 2.167-5.432 5-5.91z"/><path d="M32.03 19.986a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm-5.006 4.004a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm10-7.998a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1z"/><path d="M51 0H13a1 1 0 00-1 1v58c0 2.757 2.243 5 5 5h30c2.757 0 5-2.243 5-5V1a1 1 0 00-1-1zM14 4.998h36v.998H14zm0-2V2h36v.998zM47 62H17c-1.654 0-3-1.346-3-3V7.996h36V59c0 1.654-1.346 3-3 3z"/><path d="M48 55.985V39a1 1 0 00-1-1H17a1 1 0 00-1 1v20a1 1 0 001 1h30a1 1 0 001-1v-2.985l.003-.015-.003-.015zM46 55h-1V40h1zm-3-14h-1v-1h1zm-3 14h-1V40h1zm-3-14h-1v-1h1zm-3 14h-1V40h1zm-3-14h-1v-1h1zm-3 14h-1V40h1zm-3-14h-1v-1h1zm-3 14h-1V40h1zm-1 2h1v1h-1zm3-.985l.003-.015-.003-.015V43h1v15h-1zM27 57h1v1h-1zm3-.985l.003-.015-.003-.015V43h1v15h-1zM33 57h1v1h-1zm3-.985l.003-.015-.003-.015V43h1v15h-1zM39 57h1v1h-1zm3-.985l.003-.015-.003-.015V43h1v15h-1zM19 40v1h-1v-1zm-1 3h1v15h-1zm27 15v-1h1v1zM19 32.01h25.999a1 1 0 100-2H19a1 1 0 100 2zm5.999.99a1 1 0 100 2H39a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Sticks</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M0 18c0 9.925 8.075 18 18 18 1.616 0 3.176-.234 4.666-.636.021-.006.041-.008.062-.016a18.04 18.04 0 0012.606-12.564c.004-.01.004-.021.008-.03.417-1.518.658-3.107.658-4.754 0-1.562-.221-3.069-.597-4.515-.002-.022-.012-.041-.016-.063a17.992 17.992 0 00-4.576-8.046l-.003-.004A18.01 18.01 0 0022.786.665c-.004-.002-.009-.002-.014-.003A17.94 17.94 0 0018 0c-1.563 0-3.072.221-4.52.598L13.47.6C5.735 2.616 0 9.642 0 18zM27.968 5.506l-3.831 1.027a12.866 12.866 0 00-3.922-1.334l2.491-2.491a15.982 15.982 0 015.262 2.798zm4.914 6.658l-3.855-1.033a13.012 13.012 0 00-1.831-2.322 13.004 13.004 0 00-.873-.791l3.37-.904a16.008 16.008 0 013.189 5.05zm-2.388 15.804l-1.029-3.843a12.934 12.934 0 001.333-3.919l2.495 2.495a15.98 15.98 0 01-2.799 5.267zm-3.301-.775c.28-.28.54-.574.789-.873l.903 3.372a16.009 16.009 0 01-5.051 3.19l1.031-3.854a12.984 12.984 0 002.328-1.835zm3.781-9.639a13.01 13.01 0 00-.787-4.041l3.396.909C33.847 15.574 34 16.769 34 18c0 .812-.08 1.604-.197 2.383zM17.999 7c2.939 0 5.703 1.145 7.782 3.223 4.287 4.289 4.286 11.268-.002 15.557A10.932 10.932 0 0118.001 29a10.928 10.928 0 01-7.778-3.222 10.924 10.924 0 01-3.22-7.762v-.031a10.926 10.926 0 013.22-7.764A10.93 10.93 0 0117.999 7zM8.026 30.49l3.833-1.027a12.838 12.838 0 003.927 1.337l-2.492 2.492a16.002 16.002 0 01-5.268-2.802zm-4.911-6.662L6.97 24.86a13.108 13.108 0 001.839 2.331c.277.278.569.537.867.786l-3.372.903a15.97 15.97 0 01-3.189-5.052zm1.908-5.396a12.94 12.94 0 00.783 4.047l-3.39-.909A15.917 15.917 0 012 18c0-.815.081-1.61.199-2.393zm3.786-9.625a13.08 13.08 0 00-.787.866l-.903-3.37a16.026 16.026 0 015.052-3.188l-1.032 3.854a13.014 13.014 0 00-2.33 1.838zm-2.272 3.051a12.867 12.867 0 00-1.336 3.923L2.71 13.29a15.985 15.985 0 012.801-5.265zm9.075 21.944l2.824-2.824a12.976 12.976 0 004.048-.784l-.907 3.389A15.98 15.98 0 0118 34c-.813 0-1.606-.08-2.388-.198zm4.776-31.604l-2.823 2.823c-1.4.046-2.76.313-4.044.783l.908-3.389A15.984 15.984 0 0118 2c.813 0 1.606.08 2.388.198z"/><path d="M18.024 16.99h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm4.998-2.998a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-5.003-2.062a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm-4.997 2.08a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-2.062 5.002a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm2.08 2.996h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm5.002 2.064h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm4.998-2.08h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm2.063-3.002a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm38.283 22.425a18.041 18.041 0 00-12.603-12.75l-.004-.001A17.917 17.917 0 0046 28c-1.563 0-3.07.221-4.517.597-.011.001-.021.006-.031.008C33.727 30.628 28 37.648 28 46c0 9.925 8.075 18 18 18 1.625 0 3.192-.236 4.691-.642l.024-.007C58.357 61.271 64 54.291 64 46c0-1.562-.221-3.069-.597-4.516-.003-.023-.012-.045-.017-.069zm-4.892 14.553l-1.03-3.842a12.946 12.946 0 001.333-3.921l2.496 2.496a15.98 15.98 0 01-2.799 5.267zm-22.47 2.52l3.835-1.027a12.85 12.85 0 003.929 1.337l-2.494 2.494a15.979 15.979 0 01-5.27-2.804zm-4.91-6.662l3.856 1.035a13.128 13.128 0 001.838 2.328c.277.277.568.537.866.786l-3.373.903a15.983 15.983 0 01-3.187-5.052zm2.396-15.799l1.026 3.831a12.85 12.85 0 00-1.335 3.925l-2.492-2.492a15.98 15.98 0 012.801-5.264zm3.299.778c-.278.278-.538.57-.787.868l-.903-3.369a16.045 16.045 0 015.05-3.188l-1.032 3.852a13.031 13.031 0 00-2.328 1.837zm-3.786 9.629c.046 1.4.313 2.761.783 4.045l-3.392-.91A16.024 16.024 0 0130 46c0-.814.081-1.609.199-2.391zm12.979 10.563a10.93 10.93 0 01-7.779-3.222 10.926 10.926 0 01-3.221-7.768v-.017a10.93 10.93 0 013.221-7.772A10.927 10.927 0 0146 35l.004-.001a10.93 10.93 0 017.775 3.222c4.288 4.289 4.288 11.269 0 15.559a10.935 10.935 0 01-7.777 3.217zm9.963-23.493l-3.83 1.027a12.843 12.843 0 00-3.92-1.333l2.489-2.49a15.981 15.981 0 015.261 2.796zm4.917 6.658l-3.857-1.033a12.967 12.967 0 00-1.831-2.322 12.989 12.989 0 00-.872-.791l3.369-.904a16.013 16.013 0 013.191 5.05zm-5.689 15.031c.28-.28.539-.574.788-.873l.904 3.372a16.014 16.014 0 01-5.054 3.191l1.032-3.854a12.968 12.968 0 002.33-1.836zm3.781-9.639a13.046 13.046 0 00-.788-4.043l3.396.909c.265 1.152.418 2.348.418 3.58 0 .812-.08 1.604-.197 2.383zM48.387 30.198l-2.821 2.822a12.998 12.998 0 00-4.047.783l.907-3.387A15.952 15.952 0 0146 30c.813 0 1.605.08 2.387.198zm-4.775 31.604l2.826-2.826a12.98 12.98 0 004.044-.783l-.908 3.391A15.952 15.952 0 0146 62c-.813 0-1.606-.08-2.388-.198z"/><path d="M46.022 46.988a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm4.999-4.998a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm-5.002-2.062a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm-4.997 2.08a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1zm-2.062 3.004h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm2.078 4.996h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm5.004 2.062h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm4.996-2.078h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm3.065-4.004a1 1 0 00-1-1h-.011a.995.995 0 00-.994 1 1.003 1.003 0 002.005 0z"/></svg>
													</i>

													<h4><a href="#">Cracker</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M27.001 8.998h10.001c1.654 0 3-1.346 3-3s-1.346-3-3-3H27.001c-1.654 0-3 1.346-3 3s1.346 3 3 3zm0-4h10.001a1 1 0 010 2H27.001a1 1 0 010-2z"/><path d="M44.967 62.837c-.008-.051-.002-.103-.019-.153L44 59.838V26a1 1 0 00-1-1h-.001V5.999A6.004 6.004 0 0037.008.001L37.001 0h-9.999a6.008 6.008 0 00-6.001 6.001V25H21a1 1 0 00-1 1v33.838l-.948 2.846c-.017.051-.011.103-.019.154-.01.055-.033.104-.033.162 0 .014.008.025.008.039.003.071.023.137.041.204.016.06.023.12.049.175.026.057.066.102.103.152.039.054.071.11.12.155.041.039.093.063.141.095.062.041.12.083.19.109.012.005.02.015.032.019A1 1 0 0020 64h24a1 1 0 00.316-.052c.013-.004.021-.014.032-.019.07-.026.129-.068.19-.109.048-.031.1-.056.141-.095.049-.045.081-.102.12-.155.036-.051.076-.097.103-.152.025-.055.033-.115.049-.175.018-.068.038-.133.041-.204 0-.014.008-.025.008-.039 0-.058-.023-.107-.033-.163zm-7.966-50.84a5.968 5.968 0 003.998-1.539v.535a4.003 4.003 0 01-3.998 3.998h-9.999a5.969 5.969 0 00-4.001 1.542v-.531l.003-.015a3.998 3.998 0 013.914-3.989c.028 0 .056.004.084.004.009 0 .016-.005.024-.005zM42 27v31.999H22V27zm-4.999-2.013c-.022 0-.041.011-.063.013H23.144c.444-1.724 1.998-3.007 3.858-3.007h9.999c.009 0 .017-.005.026-.005a5.971 5.971 0 003.972-1.538v.539a4.003 4.003 0 01-3.998 3.998zm0-4.998c-.007 0-.013.004-.02.004h-9.979a5.969 5.969 0 00-4.001 1.542v-.531l.003-.015a4.003 4.003 0 013.998-3.998h9.999a5.968 5.968 0 003.998-1.539v.539a4.003 4.003 0 01-3.998 3.998zm-14-8.458v-1.07c.215.192.44.374.682.535-.242.16-.467.342-.682.535zm-1.28 49.468H42.28L42.613 62H21.387zM27.002 2h9.994l.005.001c2.204 0 3.998 1.794 3.998 3.998s-1.794 3.998-3.998 3.998h-9.96c-.014-.001-.025-.008-.039-.008-.028 0-.056.004-.084.004a4 4 0 01-3.917-3.992A4.006 4.006 0 0127.002 2z"/><path d="M32 42c2.757 0 5-2.243 5-5s-2.243-5-5-5-5 2.243-5 5 2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm-7 12.008h14a1 1 0 100-2H25a1 1 0 100 2zm0 2.993h14a1 1 0 100-2H25a1 1 0 100 2zm11 .993h-8a1 1 0 100 2h8a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Biscuit</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M12 15.002V59c0 2.757 2.243 5 5 5h30c2.757 0 5-2.243 5-5V15.002c0-2.757-2.243-5-5-5h-8.999V9h1a1 1 0 001-1V3.002A3.006 3.006 0 0037 0l-.01.002H27a3.003 3.003 0 00-2.999 3V8a1 1 0 001 1H26v1.002h-9c-2.757 0-5 2.243-5 5zm38 0V59c0 1.654-1.346 3-3 3H17c-1.654 0-3-1.346-3-3V15.002c0-1.654 1.346-3 3-3h30c1.654 0 3 1.346 3 3zM38.001 7h-12V3.002a1 1 0 01.999-1h10l.005-.001c.55.003.996.45.996 1.001zM28 9h8.001v1.002H28z"/><path d="M32 40.004c5.514 0 10-4.486 10-10 0-5.176-3.954-9.445-9-9.949v-.059a1 1 0 10-2 0v.059c-5.046.504-9 4.773-9 9.949 0 5.514 4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z"/><path d="M36.039 34.988a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zM32.03 55.002h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm5 0h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm-10 0h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm9.009-23.016a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm-3.003 3.002a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1zm4.962 11.026H26.002a1 1 0 100 2h11.996a1 1 0 100-2zm-17.996-1.016h23.996a1 1 0 100-2H20.002a1 1 0 100 2z"/></svg>
													</i>

													<h4><a href="#">Fruit</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M6.001 44.002h19.996c2.757 0 5-2.243 5-5V5c0-2.757-2.243-5-5-5H6.001c-2.757 0-5 2.243-5 5v34.002c0 2.757 2.243 5 5 5zm19.996-2H6.001c-1.654 0-3-1.346-3-3v-.025a4.947 4.947 0 003 1.025h19.996c1.13 0 2.162-.391 3-1.025v.025c0 1.654-1.346 3-3 3zM3.001 5c0-1.654 1.346-3 3-3h19.996c1.654 0 3 1.346 3 3v30.002c0 1.654-1.346 3-3 3H6.001c-1.654 0-3-1.346-3-3v-.99z"/><path d="M6.005 35.998h19.996a1 1 0 001-1V5.002a1 1 0 00-1-1H6.005a1 1 0 00-1 1v29.996a1 1 0 001 1zm1-29.996h17.996v27.996H7.005z"/><path d="M12.033 10h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm-.006 9.001h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm8.008 0h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm-.006 9.004h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm-8.008 0h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm8.008-16.01a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.453 1 1.005 1zM38.003 64h19.996c2.757 0 5-2.243 5-5V24.999c0-2.757-2.243-5-5-5H38.003c-2.757 0-5 2.243-5 5V59c0 2.757 2.243 5 5 5zm19.996-2H38.003c-1.654 0-3-1.346-3-3v-.025a4.947 4.947 0 003 1.025h19.996c1.13 0 2.162-.391 3-1.025V59c0 1.654-1.346 3-3 3zM35.003 24.999c0-1.654 1.346-3 3-3h19.996c1.654 0 3 1.346 3 3V55c0 1.654-1.346 3-3 3H38.003c-1.654 0-3-1.346-3-3v-.988z"/><path d="M38.007 55.998h19.996a1 1 0 001-1V25.001a1 1 0 00-1-1H38.007a1 1 0 00-1 1v29.997a1 1 0 001 1zm1-29.997h17.996v27.997H39.007z"/><path d="M44.035 30h-.011c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm-.006 9.002h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm8.008 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-.006 9.002h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm-8.008 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm8.008-16.01a1 1 0 000-2h-.011c-.552 0-.994.448-.994 1s.453 1 1.005 1z"/></svg>
													</i>

													<h4><a href="#">Cracker</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M51.467 62.837c-.008-.051-.002-.103-.019-.153l-.949-2.849V17a.999.999 0 00-.999-1V1a1 1 0 00-1-1h-6a1 1 0 00-1 1v15h-1V1a1 1 0 00-1-1h-6a1 1 0 00-1 1v15h-1V1a1 1 0 00-1-1h-6a1 1 0 00-1 1v15h-1V1a1 1 0 00-1-1h-6a1 1 0 00-1 1v15a1 1 0 00-1 1v42.833l-.949 2.852c-.018.054-.012.107-.02.161-.009.052-.031.099-.031.154 0 .014.007.024.008.038.003.073.023.14.042.209.015.058.022.117.048.17.026.058.067.104.104.154.038.054.071.109.119.154.042.04.095.065.144.097.061.04.118.081.187.107.013.005.021.016.034.02.103.034.21.051.314.051h37a1 1 0 00.316-.052c.013-.004.021-.014.032-.019.07-.026.129-.068.19-.109.048-.031.1-.056.141-.095.049-.045.081-.102.12-.155.036-.051.076-.097.103-.152.025-.055.033-.115.049-.175.018-.068.038-.133.041-.204 0-.014.008-.025.008-.039 0-.058-.023-.107-.033-.163zM24.5 18h23.999v40.996H15.5V18h6zm-9.278 42.996h33.557L49.113 62H14.887zM47.5 8a5.007 5.007 0 01-4 4.898V7.92a6.986 6.986 0 004-2.03zm-.102-6A5.01 5.01 0 0143.5 5.898V2zM43.5 14.92a6.986 6.986 0 004-2.03V16h-4zM38.5 8a5.007 5.007 0 01-4 4.898V7.92a6.986 6.986 0 004-2.03zm-.102-6A5.01 5.01 0 0134.5 5.898V2zM34.5 14.92a6.986 6.986 0 004-2.03V16h-4zM29.5 8a5.007 5.007 0 01-4 4.898V7.92a6.986 6.986 0 004-2.03zm-.102-6A5.01 5.01 0 0125.5 5.898V2zM25.5 14.92a6.986 6.986 0 004-2.03V16h-4zM20.5 8a5.007 5.007 0 01-4 4.898V7.92a6.986 6.986 0 004-2.03zm-.102-6A5.01 5.01 0 0116.5 5.898V2zM16.5 14.92a6.986 6.986 0 004-2.03V16h-4z"/><path d="M32.001 45c5.238 0 9.5-4.262 9.5-9.5s-4.262-9.5-9.5-9.5-9.5 4.262-9.5 9.5 4.262 9.5 9.5 9.5zm0-17c4.136 0 7.5 3.364 7.5 7.5s-3.364 7.5-7.5 7.5-7.5-3.364-7.5-7.5 3.364-7.5 7.5-7.5z"/><path d="M27.499 37h9.003a1 1 0 100-2h-9.003a1 1 0 100 2zm7.002 1H29.5a1 1 0 100 2h5.001a1 1 0 100-2zM21.493 49h21.015a1 1 0 100-2H21.493a1 1 0 100 2zm15.01 1h-9.005a1 1 0 100 2h9.005a1 1 0 100-2zm-4.472-16.998a1 1 0 100-2h-.011c-.552 0-.994.447-.994 1s.453 1 1.005 1z"/></svg>
													</i>

													<h4><a href="#">Wafer</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M51.5 0h-39a1 1 0 00-1 1v58c0 2.757 2.243 5 5 5h31c2.757 0 5-2.243 5-5V1a1 1 0 00-1-1zm-38 5h37v.998h-37zm0-2V2h37v1zm34 59h-31c-1.654 0-3-1.346-3-3V7.998h37V59c0 1.654-1.346 3-3 3z"/><path d="M32 36.996c5.79 0 10.501-4.711 10.501-10.502v-2.998c0-5.79-4.711-10.5-10.501-10.5s-10.501 4.71-10.501 10.5v2.998c0 5.791 4.711 10.502 10.501 10.502zm0-2a8.498 8.498 0 01-7.013-3.706c1.861 1.678 4.316 2.708 7.013 2.708s5.151-1.03 7.013-2.708A8.498 8.498 0 0132 34.996zm0-20c4.688 0 8.501 3.813 8.501 8.5 0 4.688-3.813 8.502-8.501 8.502s-8.501-3.813-8.501-8.502c0-4.686 3.814-8.5 8.501-8.5z"/><path d="M35.53 24.996a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm-7-3a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm2 6a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zM44.5 41.014h-25a1 1 0 100 2h25a1 1 0 100-2zm0 2.984h-25a1 1 0 100 2h25a1 1 0 100-2zm-7 2.982h-11a1 1 0 100 2h11a1 1 0 100-2zm-12.971 8.008h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm5.001 0h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm5.001 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2zm5.001 0h-.011c-.552 0-.994.447-.994 1s.452 1 1.005 1a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Chocolate chip</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M39.708 19.294a.99.99 0 00-.326-.217A.991.991 0 0039 19H25c-.13 0-.26.026-.382.077a.99.99 0 00-.326.217L12.294 31.292l-.002.002L.294 43.292a.99.99 0 00-.217.326A1.003 1.003 0 001 45h62a.999.999 0 00.707-1.707zM14.586 43H3.414l10-10h11.172zm10.828-22h2.172l-10 10h-2.172zm6.172 0l-10 10h-1.172l10-10zm-5 10h-2.172l10-10h2.172zm-9.172 12l10.292-10.292.002-.002L39 21.414 60.586 43z"/><path d="M30.5 34.999a1 1 0 001 1h15a1 1 0 100-2h-15a1 1 0 00-1 1zm12 2h-7a1 1 0 100 2h7a1 1 0 100-2zm-4.472-6.007a1.003 1.003 0 002.005 0 1 1 0 00-1-1h-.011a.995.995 0 00-.994 1z"/></svg>
													</i>

													<h4><a href="#">Sandwich</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M48.501 6.035h-2.372C45.06 2.562 41.821.03 38.002.03H24.555c-.018-.001-.031-.01-.049-.01-3.527 0-6.446 2.619-6.935 6.012h-2.072a1 1 0 00-1 1v55.947a1 1 0 001 1h33.002a1 1 0 001-1V7.035a1 1 0 00-1-1zm-1 2v12.952h-.997l-.006-12.341c.001-.038.006-.075.006-.114 0-.168-.016-.332-.025-.497zM16.499 20.987V8.032H17.5v12.955zm3.001-9.048a6.989 6.989 0 003.99 2.028v7.02H19.5zm5.99 5.095h12.512a8.485 8.485 0 006.498-3.031l.004 6.984H25.49zM24.474 2.023c.012.001.021.007.032.007h13.496a6.51 6.51 0 016.501 6.479c0 .009-.005.016-.005.023v.114c-.062 3.532-2.95 6.388-6.496 6.388H25.49v-1.002h12.512a5.508 5.508 0 005.502-5.5 5.508 5.508 0 00-5.502-5.502H24.506c-.014 0-.025.007-.039.008a4.002 4.002 0 00-3.961 3.996c0 2.206 1.794 4 4 4l.01-.002h13.486c1.379 0 2.5-1.121 2.5-2.5s-1.121-2.5-2.5-2.5H24.506a1 1 0 00-1 1v1.724c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2 .007 0 .013-.004.02-.004h13.477a3.506 3.506 0 013.502 3.502c0 1.93-1.571 3.5-3.502 3.5H24.506c-.021 0-.038.011-.058.012A5.012 5.012 0 0119.5 7.121v-.174a5.014 5.014 0 014.974-4.924zm13.528 6.009c.275 0 .5.225.5.5s-.225.5-.5.5H25.506v-1zm9.499 53.947H16.499V22.987h31.002z"/><path d="M27.501 40.985H36.5c2.206 0 4-1.794 4-4s-1.794-4-4-4h-8.999c-2.206 0-4 1.794-4 4s1.794 4 4 4zm0-6H36.5c1.103 0 2 .897 2 2s-.897 2-2 2h-8.999c-1.103 0-2-.897-2-2s.897-2 2-2z"/><path d="M27.501 37.985H36.5a1 1 0 100-2h-8.999a1 1 0 100 2zm-5 7H41.5a1 1 0 100-2H22.501a1 1 0 100 2zm0 3H41.5a1 1 0 100-2H22.501a1 1 0 100 2zm13.999 1h-8.999a1 1 0 100 2H36.5a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Jam</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M54.707 2.293l-2-2a.999.999 0 00-1.414 0L50 1.586 48.707.293a.999.999 0 00-1.414 0L46 1.586 44.707.293a.999.999 0 00-1.414 0L42 1.586 40.707.293a.999.999 0 00-1.414 0L38 1.586 36.707.293a.999.999 0 00-1.414 0L34 1.586 32.707.293a.999.999 0 00-1.414 0L30 1.586 28.707.293a.999.999 0 00-1.414 0L26 1.586 24.707.293a.999.999 0 00-1.414 0L22 1.586 20.707.293a.999.999 0 00-1.414 0L18 1.586 16.707.293a.999.999 0 00-1.414 0L14 1.586 12.707.293a.999.999 0 00-1.414 0L9.294 2.292a.99.99 0 00-.217.326A.991.991 0 009 3v60a1 1 0 001 1h43.996a1 1 0 001-1V3.021a.996.996 0 00-.289-.728zM12 2.414l1.293 1.293a.997.997 0 001.414 0L16 2.414l1.293 1.293a.997.997 0 001.414 0L20 2.414l1.293 1.293a.997.997 0 001.414 0L24 2.414l1.293 1.293a.997.997 0 001.414 0L28 2.414l1.293 1.293a.997.997 0 001.414 0L32 2.414l1.293 1.293a.997.997 0 001.414 0L36 2.414l1.293 1.293a.997.997 0 001.414 0L40 2.414l1.293 1.293a.997.997 0 001.414 0L44 2.414l1.293 1.293a.997.997 0 001.414 0L48 2.414l1.293 1.293a.997.997 0 001.414 0L52 2.414l.996.996V4H11v-.586zM11 6h41.996v56H11z"/><path d="M19.001 7a6.006 6.006 0 00-6 5.993L13 13v3l.001.007A5.997 5.997 0 0015.691 21a5.995 5.995 0 00-2.69 4.993L13 26v3l.001.007A5.997 5.997 0 0015.691 34a5.995 5.995 0 00-2.69 4.993L13 39v3l.001.007A5.997 5.997 0 0015.691 47a5.995 5.995 0 00-2.69 4.993L13 52v3l.001.007c.004 3.306 2.693 5.993 6 5.993s5.996-2.688 6-5.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0022.311 47a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0022.311 34a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0022.311 21a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007a6.006 6.006 0 00-6-5.993zm0 2c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4zm0 50c-1.539 0-2.861-.883-3.53-2.159a5.956 5.956 0 007.06 0C21.862 58.117 20.54 59 19.001 59zm4-7c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C21.862 45.117 20.54 46 19.001 46s-2.861-.883-3.53-2.159zM23.001 39c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C21.862 32.117 20.54 33 19.001 33s-2.861-.883-3.53-2.159zM23.001 26c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C21.862 19.117 20.54 20 19.001 20s-2.861-.883-3.53-2.159z"/><path d="M19.001 16c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm13-5a6.006 6.006 0 00-6 5.993L26 13v3l.001.007A5.997 5.997 0 0028.691 21a5.995 5.995 0 00-2.69 4.993L26 26v3l.001.007A5.997 5.997 0 0028.691 34a5.995 5.995 0 00-2.69 4.993L26 39v3l.001.007A5.997 5.997 0 0028.691 47a5.995 5.995 0 00-2.69 4.993L26 52v3l.001.007c.004 3.306 2.693 5.993 6 5.993s5.996-2.688 6-5.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0035.311 47a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0035.311 34a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0035.311 21a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007a6.006 6.006 0 00-6-5.993zm0 2c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4zm0 50c-1.539 0-2.861-.883-3.53-2.159a5.956 5.956 0 007.06 0C34.862 58.117 33.54 59 32.001 59zm4-7c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C34.862 45.117 33.54 46 32.001 46s-2.861-.883-3.53-2.159zM36.001 39c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C34.862 32.117 33.54 33 32.001 33s-2.861-.883-3.53-2.159zM36.001 26c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C34.862 19.117 33.54 20 32.001 20s-2.861-.883-3.53-2.159z"/><path d="M32.001 16c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm13 4c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2z"/><path d="M51.001 16.007l.001-.007v-3l-.001-.007C50.997 9.688 48.308 7 45.001 7s-5.996 2.688-6 5.993L39 13v3l.001.007A5.997 5.997 0 0041.691 21a5.995 5.995 0 00-2.69 4.993L39 26v3l.001.007A5.997 5.997 0 0041.691 34a5.995 5.995 0 00-2.69 4.993L39 39v3l.001.007A5.997 5.997 0 0041.691 47a5.995 5.995 0 00-2.69 4.993L39 52v3l.001.007c.004 3.306 2.693 5.993 6 5.993s5.996-2.688 6-5.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0048.311 47a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0048.311 34a5.995 5.995 0 002.69-4.993l.001-.007v-3l-.001-.007A5.997 5.997 0 0048.311 21a5.997 5.997 0 002.69-4.993zm-6-7.007c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4zm0 50c-1.539 0-2.861-.883-3.53-2.159a5.956 5.956 0 007.06 0C47.862 58.117 46.54 59 45.001 59zm4-7c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C47.862 45.117 46.54 46 45.001 46s-2.861-.883-3.53-2.159zM49.001 39c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C47.862 32.117 46.54 33 45.001 33s-2.861-.883-3.53-2.159zM49.001 26c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4zm-7.53-8.159a5.956 5.956 0 007.06 0C47.862 19.117 46.54 20 45.001 20s-2.861-.883-3.53-2.159zM19.001 29c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm13 4c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2z"/><path d="M45.001 29c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm-26 17c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm13 4c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm13 4c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm-26 17c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm13 4c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2zm13 4c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 110 2 1 1 0 010-2z"/></svg>
													</i>

													<h4><a href="#">Bagel</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M30.501 14.01h-8.999a1 1 0 00-1 1v8.999a1 1 0 001 1h8.999a1 1 0 001-1V15.01a1 1 0 00-1-1zm-1 8.999h-6.999V16.01h6.999zm12.998-8.999H33.5a1 1 0 00-1 1v8.999a1 1 0 001 1h8.999a1 1 0 001-1V15.01a1 1 0 00-1-1zm-1 8.999H34.5V16.01h6.999z"/><path d="M49.468 62.838c-.009-.052-.002-.103-.02-.154l-.949-2.845V27.001a1 1 0 00-1-1h-1V8.006a1 1 0 00-1-1V6.001a1 1 0 001-1V1a1 1 0 00-1-1H18.502a1 1 0 00-1 1v4.001a1 1 0 001 1v1.005a1 1 0 00-1 1v17.995H16.5a1 1 0 00-1 1v32.838l-.948 2.845c-.017.051-.011.103-.019.154-.01.055-.033.104-.033.162 0 .014.008.025.008.039.003.071.023.137.041.204.016.06.023.12.049.175.026.057.066.102.103.152.039.054.071.11.12.155.041.039.093.063.141.095.062.041.12.083.19.109.012.005.02.015.032.019A1 1 0 0015.5 64h33a.996.996 0 00.316-.052c.013-.004.021-.014.032-.019.071-.026.13-.069.192-.11.047-.031.099-.056.139-.094.049-.046.082-.103.121-.156.035-.051.076-.096.102-.152.025-.054.033-.114.049-.174.018-.067.038-.133.041-.204.001-.014.008-.025.008-.039 0-.058-.023-.107-.032-.162zM17.221 61H46.78l.333 1H16.887zm2.281-51.994h24.997v2.001H19.502zm0-7.006h24.997v1.999l-.01.002H19.512l-.01-.002zm1 4.001h22.997v1.005H20.502zm-1 7.006h24.997v12.994H19.502zM17.5 28.001h28.999V59H17.5z"/><path d="M32 44.003c3.032 0 5.5-2.468 5.5-5.5s-2.468-5.5-5.5-5.5-5.5 2.468-5.5 5.5 2.468 5.5 5.5 5.5zm0-9c1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5-3.5-1.57-3.5-3.5 1.57-3.5 3.5-3.5zm7.501 11.001H24.5a1 1 0 100 2h15.001a1 1 0 100-2zm0 3H24.5a1 1 0 100 2h15.001a1 1 0 100-2zm-3 3H27.5a1 1 0 100 2h9.001a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Wafer</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M49 0H15a1 1 0 00-1 1v60c0 1.654 1.346 3 3 3h30c1.654 0 3-1.346 3-3V1a1 1 0 00-1-1zm-1 2.999H16V2h32zM47 62H17a1 1 0 01-1-1V4.999h32V61a1 1 0 01-1 1z"/><path d="M24 30.003c0 4.411 3.589 8 8 8s8-3.589 8-8l-.001-.007c-.003-1.298-.622-2.229-1.169-3.048-.447-.67-.833-1.249-.833-1.947 0-.63.315-1.174.715-1.861.572-.987 1.285-2.214 1.287-4.132l.001-.006c0-4.411-3.589-8-8-8s-8 3.589-8 8c0 1.921.714 3.149 1.287 4.138.399.688.715 1.231.715 1.861 0 .698-.386 1.277-.833 1.947-.548.822-1.169 1.753-1.169 3.055zm11-4.002h1.128c.211.809.642 1.463 1.038 2.057.22.329.423.636.574.945H35zm-2 3.002h-2.002v-3.002H33zm3.982-6.867c-.334.575-.665 1.172-.846 1.865H35v-3.999h2.898c-.169.836-.533 1.473-.916 2.134zM33 24.001h-2.002v-3.999H33zm-4.002 0h-1.136c-.181-.693-.512-1.29-.846-1.865-.383-.661-.747-1.298-.916-2.134h2.897v3.999zm-1.127 2h1.127v3.002h-2.739c.151-.31.354-.616.574-.945.396-.594.827-1.248 1.038-2.057zm-1.781 5.002h2.908v4.188a6.012 6.012 0 01-2.908-4.188zm4.908 4.909v-4.909H33v4.909c-.326.056-.658.091-1 .091s-.676-.035-1.002-.091zM35 35.191v-4.188h2.91A6.007 6.007 0 0135 35.191zm2.91-17.189H35v-4.188a6.007 6.007 0 012.91 4.188zM33 13.092v4.91h-2.002v-4.909c.326-.056.66-.091 1.002-.091s.674.035 1 .09zm-4.002.722v4.188H26.09a6.012 6.012 0 012.908-4.188zM24 54.999c-1.379 0-2.5 1.121-2.5 2.5s1.121 2.5 2.5 2.5 2.5-1.121 2.5-2.5-1.121-2.5-2.5-2.5zm0 3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5.5.225.5.5-.225.5-.5.5zm8-3c-1.379 0-2.5 1.121-2.5 2.5s1.121 2.5 2.5 2.5 2.5-1.121 2.5-2.5-1.121-2.5-2.5-2.5zm0 3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5.5.225.5.5-.225.5-.5.5zm8-3c-1.379 0-2.5 1.121-2.5 2.5s1.121 2.5 2.5 2.5 2.5-1.121 2.5-2.5-1.121-2.5-2.5-2.5zm0 3c-.275 0-.5-.225-.5-.5s.225-.5.5-.5.5.225.5.5-.225.5-.5.5zm2-16.996H22a1 1 0 100 2h20a1 1 0 100-2zm0 3H22a1 1 0 100 2h20a1 1 0 100-2zm-4 4a1 1 0 00-1-1H27a1 1 0 100 2h10a1 1 0 001-1z"/></svg>
													</i>

													<h4><a href="#">Peanut</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M59 26.491H44v-7.989c0-4.626-3.508-8.443-8.003-8.941V7.71c0-.037-.018-.068-.021-.104.004-.036.021-.067.021-.104a1 1 0 00-1-1h-.144a3.99 3.99 0 00-3.698-2.97c-.052-.01-.1-.032-.155-.032h-3V1.667c0-.029-.015-.055-.017-.083.002-.029.017-.055.017-.084a1 1 0 00-1-1h-6.999c-1.858 0-3.411 1.279-3.858 3h-3.142c-1.858 0-3.412 1.28-3.859 3.001h-.144a1 1 0 00-1 1v2.061C3.506 10.062 0 13.878 0 18.502V39.5c0 4.963 4.037 9 9 9h24.996v11a4.009 4.009 0 004.004 4h18c.014 0 .025-.007.039-.008A4.001 4.001 0 0060 59.5V39.398a5.007 5.007 0 004-4.898v-3.009c0-2.757-2.243-5-5-5zm3 5c0 1.654-1.346 3-3 3a1 1 0 00-1 1v21.004c0 1.103-.897 2-2 2-.007 0-.013.004-.02.004H38a2.007 2.007 0 01-2.004-2.004V47.52c0-.007.004-.013.004-.02s-.004-.013-.004-.02V35.491a1 1 0 00-1-1h-.002c-1.654 0-3-1.346-3-3s1.346-3 3-3H59c1.654 0 3 1.346 3 3zm-28.004 5.825a3.006 3.006 0 01-1.771-1.667c.529.354 1.127.61 1.771.741zm.998-10.825c-2.757 0-5 2.243-5 5V34.5c0 1.13.391 2.162 1.025 3H2V22.499h40v3.992zM32.995 9.502H9.998V8.501h23.93c.023.002.045.014.069.014v.987zM20.001 2.5H26v1h-7.722c.348-.595.986-1 1.723-1zm-7 3h3.994l.005.001.005-.001h13.918c.026.002.05.016.077.016.73 0 1.364.398 1.714.985H11.278A1.994 1.994 0 0113.001 5.5zM9 11.502h26c3.859 0 7 3.141 7 7v1.997H2v-1.997c0-3.859 3.141-7 7-7zM9 46.5c-3.859 0-7-3.141-7-7h31.996v7zm47 14.996c-.007 0-.013.004-.02.004H38a2.003 2.003 0 01-1.939-1.523 3.963 3.963 0 001.939.522h18c.014 0 .025-.007.039-.008a3.937 3.937 0 001.896-.518A1.995 1.995 0 0156 61.496zm4-24.181v-.925a5.008 5.008 0 001.77-.741A3.005 3.005 0 0160 37.315z"/><path d="M29 28.501H15a1 1 0 100 2h14a1 1 0 100-2zM26 31.5h-8a1 1 0 100 2h8a1 1 0 100-2zm-3.97-4a1 1 0 100-2h-.01c-.552 0-.994.447-.994 1s.452 1 1.004 1zm30.969 4.993c-.829 0-1.6.254-2.238.687-.546-1.56-2.018-2.688-3.762-2.688-2.206 0-4 1.794-4 4v.561a3.953 3.953 0 00-2-.557c-2.206 0-4 1.794-4 4V50.5l.002.01A4.003 4.003 0 0041 54.5c.829 0 1.6-.254 2.238-.687.546 1.56 2.018 2.688 3.762 2.688 2.206 0 4-1.794 4-4v-.561a3.953 3.953 0 002 .557c2.206 0 4-1.794 4-4V36.493l-.002-.01a4.004 4.004 0 00-3.999-3.99zM53 50.497c-1.103 0-2-.897-2-2a1 1 0 10-2 0v4.004c0 1.103-.897 2-2 2s-2-.897-2-2v-2.002a1 1 0 10-2 0c0 1.103-.897 2-2 2s-2-.897-2-2l-.001-.005V38.495c0-1.103.897-2 2-2s2 .897 2 2a1 1 0 102 0v-4.004c0-1.103.897-2 2-2s2 .897 2 2v2.002a1 1 0 102 0c0-1.103.897-2 2-2s2 .897 2 2l.001.005v11.999c0 1.103-.897 2-2 2z"/></svg>
													</i>

													<h4><a href="#">Peanut butter</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M57.002 5c0-.007-.004-.013-.004-.02V3c0-.13-.026-.26-.077-.382a.99.99 0 00-.217-.326L54.705.293a.999.999 0 00-1.414 0l-1.293 1.293L50.705.293a.999.999 0 00-1.414 0l-1.293 1.293L46.705.293a.999.999 0 00-1.414 0l-1.293 1.293L42.705.293a.999.999 0 00-1.414 0l-1.293 1.293L38.705.293a.999.999 0 00-1.414 0l-1.293 1.293L34.705.293a.999.999 0 00-1.414 0l-1.293 1.293L30.705.293a.999.999 0 00-1.414 0l-1.293 1.293L26.705.293a.999.999 0 00-1.414 0l-1.293 1.293L22.705.293a.999.999 0 00-1.414 0l-1.293 1.293L18.705.293a.999.999 0 00-1.414 0l-1.293 1.293L14.705.293a.999.999 0 00-1.414 0l-1.293 1.293L10.705.293a.999.999 0 00-1.414 0l-2 2c-.2.2-.294.465-.289.728V60.98a.998.998 0 00.289.728l2 2a1 1 0 001.414-.001l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.999-1.999a.99.99 0 00.217-.326.991.991 0 00.077-.382v-1.979c0-.007.004-.013.004-.02s-.004-.013-.004-.02V5.02c0-.007.004-.013.004-.02zm-3.004 56.586l-1.293-1.293a.995.995 0 00-.702-.292h2.995v.585zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-.996-.996v-.589h2.991a.995.995 0 00-.702.292zm0-59.172l1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1.293 1.293a.997.997 0 001.414 0l1.293-1.293 1 1V4H9.002v-.59zm45 3.586v52.001H9.002V6z"/><path d="M31 30.922v.08a1 1 0 102 0v-.08c3.387-.488 6-3.401 6-6.92a6.992 6.992 0 00-3-5.736v-7.059c0-.025-.013-.047-.015-.072a.966.966 0 00-.04-.198c-.018-.062-.034-.121-.063-.178a.868.868 0 00-.101-.149 1.011 1.011 0 00-.139-.153c-.02-.017-.029-.039-.05-.055l-3-2.208c-.031-.022-.068-.028-.101-.047a1.086 1.086 0 00-.186-.086.945.945 0 00-.196-.039c-.037-.005-.07-.023-.109-.023-.025 0-.048.013-.073.015a.975.975 0 00-.199.04c-.061.018-.119.034-.174.063a.817.817 0 00-.154.104.928.928 0 00-.15.137c-.017.02-.039.029-.055.05-.023.031-.028.068-.047.102a.984.984 0 00-.085.183.975.975 0 00-.04.199c-.005.036-.023.068-.023.107v1.278l-2.321.772c-.013.004-.021.015-.034.02-.069.026-.126.067-.187.107-.049.032-.102.058-.144.097-.048.045-.081.101-.119.154-.036.051-.077.097-.104.154-.025.053-.033.112-.048.17-.019.069-.039.136-.042.209-.001.014-.008.024-.008.038v6.271A7 7 0 0025 24.002c0 3.519 2.613 6.432 6 6.92zm2-13.84v-6.105l1 .736v5.584a6.886 6.886 0 00-1-.215zm-3.006-4.361L31 12.386v4.696a6.811 6.811 0 00-1.006.217zM32 19.002c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5zM10.999 57.001h42.002a1 1 0 001-1V34.999a1 1 0 00-1-1H10.999a1 1 0 00-1 1v21.002a1 1 0 001 1zm1-21.002h40.002v19.002H11.999z"/><path d="M27.507 40a2.502 2.502 0 00-2.5 2.5v5.999c0 1.379 1.121 2.5 2.5 2.5s2.5-1.121 2.5-2.5V42.5c0-1.379-1.121-2.5-2.5-2.5zm0 8.999a.501.501 0 01-.5-.5V42.5c0-.275.225-.5.5-.5s.5.225.5.5v5.999c0 .275-.225.5-.5.5zM18.502 40a2.502 2.502 0 00-2.5 2.5v5.999c0 1.379 1.121 2.5 2.5 2.5s2.5-1.121 2.5-2.5V42.5c0-1.379-1.121-2.5-2.5-2.5zm0 8.999a.501.501 0 01-.5-.5V42.5c0-.275.225-.5.5-.5s.5.225.5.5v5.999c0 .275-.225.5-.5.5zM36.504 40a2.502 2.502 0 00-2.5 2.5v5.999c0 1.379 1.121 2.5 2.5 2.5s2.5-1.121 2.5-2.5V42.5c0-1.379-1.121-2.5-2.5-2.5zm0 8.999a.501.501 0 01-.5-.5V42.5c0-.275.225-.5.5-.5s.5.225.5.5v5.999c0 .275-.225.5-.5.5z"/><path d="M45.501 37c-1.858 0-3.503.93-4.499 2.346C40.006 37.93 38.362 37 36.504 37s-3.502.93-4.498 2.346A5.497 5.497 0 0027.507 37a5.495 5.495 0 00-4.503 2.352A5.492 5.492 0 0018.502 37a5.507 5.507 0 00-5.5 5.5v5.999c0 3.032 2.468 5.5 5.5 5.5a5.492 5.492 0 004.502-2.352 5.495 5.495 0 004.503 2.352c1.858 0 3.503-.93 4.499-2.346.996 1.416 2.64 2.346 4.498 2.346s3.502-.93 4.498-2.346a5.497 5.497 0 004.499 2.346c3.032 0 5.5-2.468 5.5-5.5V42.5c0-3.032-2.468-5.5-5.5-5.5zM18.502 51.999c-1.93 0-3.5-1.57-3.5-3.5V42.5c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5v5.999c0 1.93-1.57 3.5-3.5 3.5zm9.005 0c-1.93 0-3.5-1.57-3.5-3.5V42.5c0-1.93 1.57-3.5 3.5-3.5a3.504 3.504 0 013.498 3.48l-.001.02v5.999l.001.02a3.503 3.503 0 01-3.498 3.48zm8.997 0a3.503 3.503 0 01-3.498-3.48l.001-.02V42.5l-.001-.02c.011-1.92 1.575-3.48 3.498-3.48s3.487 1.561 3.498 3.48l-.001.02v5.999l.001.02a3.503 3.503 0 01-3.498 3.48zm8.997 0a3.503 3.503 0 01-3.498-3.48l.001-.02V42.5l-.001-.02A3.503 3.503 0 0145.501 39c1.93 0 3.5 1.57 3.5 3.5v5.999c0 1.93-1.57 3.5-3.5 3.5z"/><path d="M45.501 40a2.502 2.502 0 00-2.5 2.5v5.999c0 1.379 1.121 2.5 2.5 2.5s2.5-1.121 2.5-2.5V42.5c0-1.379-1.121-2.5-2.5-2.5zm0 8.999a.501.501 0 01-.5-.5V42.5c0-.275.225-.5.5-.5s.5.225.5.5v5.999c0 .275-.225.5-.5.5zM12.998 19.001h9a1 1 0 100-2h-9a1 1 0 100 2zm0 3h9a1 1 0 100-2h-9a1 1 0 100 2zm3 1a1 1 0 100 2h3a1 1 0 100-2zm26-4h9a1 1 0 100-2h-9a1 1 0 100 2zm0 3h9a1 1 0 100-2h-9a1 1 0 100 2zm3 1a1 1 0 100 2h3a1 1 0 100-2z"/></svg>
													</i>

													<h4><a href="#">Onion rings</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M13 56a1 1 0 001 1v4c0 1.654 1.346 3 3 3s3-1.346 3-3v-4a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2V9a1 1 0 100-2V3c0-1.654-1.346-3-3-3s-3 1.346-3 3v4a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 00-1 1zm4 6a1 1 0 01-1-1V5.815c.314.113.647.185 1 .185s.686-.072 1-.184v6.034a.988.988 0 00-.97-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.701A.99.99 0 0017.03 35h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851V61c-.001.552-.449 1-1.001 1zm0-60a1.001 1.001 0 11-1 1c0-.551.448-1 1-1zm6 54a1 1 0 001 1v4c0 1.654 1.346 3 3 3s3-1.346 3-3v-4a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2V9a1 1 0 100-2V3c0-1.654-1.346-3-3-3s-3 1.346-3 3v4a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 00-1 1zm4 6a1 1 0 01-1-1V5.815c.314.113.647.185 1 .185s.686-.072 1-.184v6.034a.988.988 0 00-.97-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.701A.99.99 0 0027.03 35h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851V61c-.001.552-.449 1-1.001 1zm0-60a1.001 1.001 0 11-1 1c0-.551.448-1 1-1zm6 54a1 1 0 001 1v4c0 1.654 1.346 3 3 3s3-1.346 3-3v-4a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2V9a1 1 0 100-2V3c0-1.654-1.346-3-3-3s-3 1.346-3 3v4a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 00-1 1zm4 6a1 1 0 01-1-1V5.815c.314.113.647.185 1 .185s.686-.072 1-.184v6.034a.988.988 0 00-.97-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.701A.99.99 0 0037.03 35h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851V61c-.001.552-.449 1-1.001 1zm0-60a1.001 1.001 0 11-1 1c0-.551.448-1 1-1zm6 54a1 1 0 001 1v4c0 1.654 1.346 3 3 3s3-1.346 3-3v-4a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2v-6a1 1 0 100-2V9a1 1 0 100-2V3c0-1.654-1.346-3-3-3s-3 1.346-3 3v4a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 100 2v6a1 1 0 00-1 1zm4 6a1 1 0 01-1-1V5.815c.314.113.647.185 1 .185s.686-.072 1-.184v6.034a.988.988 0 00-.97-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.7a.99.99 0 00-.971-.85h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a.988.988 0 00.97-.85v7.701A.99.99 0 0047.03 35h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851v7.701a.99.99 0 00-.971-.85h-.01c-.552 0-.994.447-.994 1s.452 1 1.005 1a.988.988 0 00.97-.851V61c-.001.552-.449 1-1.001 1zm0-60a1.001 1.001 0 11-1 1c0-.551.448-1 1-1z"/></svg>
													</i>

													<h4><a href="#">Sticks</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M63.707 19.293L62.414 18l1.293-1.293a.999.999 0 000-1.414l-2-2a.986.986 0 00-.768-.281H59.02c-.007 0-.013-.004-.02-.004s-.013.004-.02.004H5.02c-.007 0-.013-.004-.02-.004s-.013.004-.02.004H3.06a.987.987 0 00-.768.281l-2 2a.999.999 0 000 1.414L1.586 18 .293 19.293a.999.999 0 000 1.414L1.586 22 .293 23.293a.999.999 0 000 1.414L1.586 26 .293 27.293a.999.999 0 000 1.414L1.586 30 .293 31.293a.999.999 0 000 1.414L1.586 34 .293 35.293a.999.999 0 000 1.414L1.586 38 .293 39.293a.999.999 0 000 1.414L1.586 42 .293 43.293a.999.999 0 000 1.414L1.586 46 .293 47.293a.999.999 0 000 1.414l2 2A.997.997 0 003 51c.007 0 .014-.004.02-.004h57.96c.006 0 .013.004.02.004a.997.997 0 00.707-.293l2-2a.999.999 0 000-1.414L62.414 46l1.293-1.293a.999.999 0 000-1.414L62.414 42l1.293-1.293a.999.999 0 000-1.414L62.414 38l1.293-1.293a.999.999 0 000-1.414L62.414 34l1.293-1.293a.999.999 0 000-1.414L62.414 30l1.293-1.293a.999.999 0 000-1.414L62.414 26l1.293-1.293a.999.999 0 000-1.414L62.414 22l1.293-1.293a.999.999 0 000-1.414zM60.59 48.996h-.589v-2.991a.995.995 0 00.292.702L61.586 48zm-57.18 0L2.414 48l1.293-1.293a.997.997 0 000-1.414L2.414 44l1.293-1.293a.997.997 0 000-1.414L2.414 40l1.293-1.293a.997.997 0 000-1.414L2.414 36l1.293-1.293a.997.997 0 000-1.414L2.414 32l1.293-1.293a.997.997 0 000-1.414L2.414 28l1.293-1.293a.997.997 0 000-1.414L2.414 24l1.293-1.293a.997.997 0 000-1.414L2.414 20l1.293-1.293a.997.997 0 000-1.414L2.414 16l.988-.988H4v33.984zM6 15.012h52.001v33.984H6zm54.598 0l.988.988-1.293 1.293a.995.995 0 00-.292.702v-2.983zm-.305 30.281a.995.995 0 00-.292.702v-3.99a.995.995 0 00.292.702L61.586 44zm0-4a.995.995 0 00-.292.702v-3.99a.995.995 0 00.292.702L61.586 40zm0-4a.995.995 0 00-.292.702v-3.99a.995.995 0 00.292.702L61.586 36zm0-4a.995.995 0 00-.292.702v-3.99a.995.995 0 00.292.702L61.586 32zm0-4a.995.995 0 00-.292.702v-3.99a.995.995 0 00.292.702L61.586 28zm0-4a.995.995 0 00-.292.702v-3.99a.995.995 0 00.292.702L61.586 24zm0-4a.995.995 0 00-.292.702v-3.99a.995.995 0 00.292.702L61.586 20z"/><path d="M55.005 27.956a1 1 0 00-.19-.725l-2.128-2.859a.995.995 0 00-.731-.4.98.98 0 00-.78.293l-4.958 4.998c-7.445 7.233-19.562 7.234-27.011-.002-.007-.007-.017-.009-.024-.016s-.01-.016-.017-.021c-3.168-2.752-5.177-10.397-5.197-10.475a1.002 1.002 0 00-.49-.628.992.992 0 00-.794-.069l-3 1a.999.999 0 00-.653 1.191l1.354 5.408c-.487 1.583-2.465 8.993 1.739 12.905.003.002.003.006.006.008l.016.015.004.004.002.001c5.084 4.93 11.756 7.396 18.429 7.396 6.67 0 13.34-2.464 18.422-7.39l.003-.002.02-.019.005-.005v-.001c5.157-4.706 5.942-10.368 5.973-10.607zm-42.681-7.677c.092.306.206.67.34 1.074l-1.2.376-.269-1.074zm1.2 16.852c-.003-.003-.008-.004-.012-.008-.003-.003-.004-.008-.008-.011-3.701-3.409-1.161-11.026-1.135-11.104a.992.992 0 00.023-.566l-.443-1.771 1.387-.434c.983 2.559 2.5 5.711 4.473 7.452l.004.006.026.022.015.015.004.002c4.103 3.964 9.479 5.947 14.855 5.947 5.396 0 10.791-1.996 14.898-5.987l.005-.008.008-.005 4.151-4.185 1.177 1.581c-.26 1.267-1.379 5.472-5.294 9.028-.005.004-.006.011-.011.015-.004.004-.01.005-.014.009-9.401 9.141-24.704 9.141-34.109.002z"/></svg>
													</i>

													<h4><a href="#">Banana</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M17.5 64h29a1 1 0 001-1V5a1 1 0 00-.294-.708L43.208.293A1 1 0 0042.5 0h-21a1 1 0 00-.708.294l-3.998 3.999a.99.99 0 00-.217.326A.982.982 0 0016.5 5v58a1 1 0 001 1zm4.414-62h20.172l2 2H19.914zM45.5 62h-27V6h27z"/><path d="M21.5 60h21a1 1 0 001-1V37a1 1 0 00-1-1h-21a1 1 0 00-1 1v22a1 1 0 001 1zm14-2h-1V38h1zm2-20h1v20h-1zm-5 20h-1V38h1zm-3 0h-1V38h1zm-3 0h-1V38h1zm15 0h-1V38h1zm-19-20h1v20h-1zm9.506-18c2.481 0 4.5-2.019 4.5-4.5s-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5 2.018 4.5 4.5 4.5zm0-7c1.379 0 2.5 1.122 2.5 2.5s-1.121 2.5-2.5 2.5-2.5-1.122-2.5-2.5 1.121-2.5 2.5-2.5zM25.5 24.001h13a1 1 0 100-2h-13a1 1 0 100 2zm11.004 2a1 1 0 00-1-1h-7.008a1 1 0 100 2h7.008a1 1 0 001-1zM27.53 31h-.01c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 10-.001-2zm4.493 0c-.552 0-.994.448-.994 1s.452 1 1.005 1a1 1 0 000-2zm4.507 2a1 1 0 000-2h-.01c-.552 0-.994.448-.994 1s.452 1 1.004 1z"/></svg>
													</i>

													<h4><a href="#">Sticks</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M11.008 60.96a.987.987 0 00.285.747l2 2a.997.997 0 001.414 0L16 62.414l1.293 1.293a.997.997 0 001.414 0L20 62.414l1.293 1.293a.997.997 0 001.414 0L24 62.414l1.293 1.293a.997.997 0 001.414 0L28 62.414l1.293 1.293a.997.997 0 001.414 0L32 62.414l1.293 1.293a.997.997 0 001.414 0L36 62.414l1.293 1.293a.997.997 0 001.414 0L40 62.414l1.293 1.293a.997.997 0 001.414 0L44 62.414l1.293 1.293a.997.997 0 001.414 0L48 62.414l1.293 1.293a.997.997 0 001.414 0l1.999-1.999a.99.99 0 00.217-.326A.991.991 0 0053 61V3a1 1 0 00-.294-.708l-1.999-2a.999.999 0 00-1.414 0L48 1.586 46.707.293a.999.999 0 00-1.414 0L44 1.586 42.707.293a.999.999 0 00-1.414 0L40 1.586 38.707.293a.999.999 0 00-1.414 0L36 1.586 34.707.293a.999.999 0 00-1.414 0L32 1.586 30.707.293a.999.999 0 00-1.414 0L28 1.586 26.707.293a.999.999 0 00-1.414 0L24 1.586 22.707.293a.999.999 0 00-1.414 0L20 1.586 18.707.293a.999.999 0 00-1.414 0L16 1.586 14.707.293a.999.999 0 00-1.414 0l-2 2a.988.988 0 00-.285.747zM14 2.414l1.293 1.293a.997.997 0 001.414 0L18 2.414l1.293 1.293a.997.997 0 001.414 0L22 2.414l1.293 1.293a.997.997 0 001.414 0L26 2.414l1.293 1.293a.997.997 0 001.414 0L30 2.414l1.293 1.293a.997.997 0 001.414 0L34 2.414l1.293 1.293a.997.997 0 001.414 0L38 2.414l1.293 1.293a.997.997 0 001.414 0L42 2.414l1.293 1.293a.997.997 0 001.414 0L46 2.414l1.293 1.293a.997.997 0 001.414 0L50 2.414l1 1V4H13.008v-.594zm36 59.172l-1.293-1.293a.995.995 0 00-.702-.292H51v.585zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-1.293-1.293a.995.995 0 00-.702-.292h3.99a.995.995 0 00-.702.292zm-4 0l-.992-.992v-.593h2.987a.995.995 0 00-.702.292zm-.992-3.585V6H51v52.001z"/><path d="M21 25h22a1 1 0 100-2H21a1 1 0 100 2zm0 3h22a1 1 0 100-2H21a1 1 0 100 2zm6.002 1a1 1 0 100 2h9.996a1 1 0 100-2zm21.997 14.005L49 43l-.001-.005v-3.99L49 39l-.001-.005v-1.996A3.003 3.003 0 0046 34H18a3.003 3.003 0 00-2.999 2.999v16.002a3 3 0 002.96 2.995c.014.001.025.008.039.008h28.001c.014 0 .025-.008.04-.008a3 3 0 002.958-2.995v-1.996L49 51l-.001-.005v-3.988l.001-.005-.001-.005zM46 54c-.007 0-.013.004-.02.004H34.02c-.007 0-.013-.004-.02-.004a1 1 0 010-1.998l.01-.002h11.98l.01.002A1 1 0 0146 54zm-27.98.004c-.007 0-.013-.004-.02-.004a1 1 0 010-1.998l.01-.002h11.98l.01.002A1 1 0 0130 54c-.007 0-.013.004-.02.004zM18 36h12a1 1 0 010 1.998l-.01.002H18.01l-.01-.002A1 1 0 0118 36zm28 0a1 1 0 010 1.998l-.01.002H34.01l-.01-.002A1 1 0 0134 36zm-4 14a1 1 0 010-1.998h4.999V50zm-16.001 0a1 1 0 010-1.998h12a1 1 0 010 1.998zm-8.998 0v-1.998h5a1 1 0 010 1.998zm4.995-10l.005.001a1 1 0 010 1.998l-.005.001h-4.995v-2zm15.998 0l.005.001a1 1 0 010 1.998l-.005.001h-11.99l-.005-.001a1 1 0 010-1.998l.005-.001zM18 44.001l.005-.001h11.99l.005.001a1 1 0 010 1.998l-.015.003h-11.97L18 45.999a1 1 0 010-1.998zm28 1.998l-.015.003h-11.97L34 45.999a1 1 0 010-1.998l.005-.001h11.99l.005.001a1 1 0 010 1.998zM42.005 42L42 41.999a1 1 0 010-1.998l.005-.001h4.994v2zM32.001 21c3.309 0 6-2.691 6-6s-2.691-6-6-6-6 2.691-6 6 2.691 6 6 6zm0-10c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"/><path d="M32.001 18c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1.001 1.001 0 11-1 1c0-.551.448-1 1-1z"/></svg>
													</i>

													<h4><a href="#">Sticks</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M12.5 60.998h2.002V63a1 1 0 001 1h10a1 1 0 001-1v-2.002h10.994V63a1 1 0 001 1h10a1 1 0 001-1v-2.002H51.5a1 1 0 001-1V5a1 1 0 00-.294-.708L48.208.293A1 1 0 0047.5 0h-31a1 1 0 00-.708.294l-3.998 3.999a.99.99 0 00-.217.326A.982.982 0 0011.5 5v54.998a1 1 0 001 1zM16.914 2h30.172l2 2H14.914zm7.588 60h-8v-1.002h8zm22.994 0h-8v-1.002h8zm3.004-3.002h-37V6h37z"/><path d="M15.5 58h33a1 1 0 001-1v-7a1 1 0 00-1-1h-33a1 1 0 00-1 1v7a1 1 0 001 1zm1-7h31v5h-31zm-1-3h4.99l.01.001h3l.01-.001h16.98l.01.001h3l.01-.001h4.99a1 1 0 001-1V8a1 1 0 00-1-1h-33a1 1 0 00-1 1v39a1 1 0 001 1zm4-33h5v2h-5zm0-2c0-.551.448-1 1-1h3c.552 0 1 .449 1 1zm0 6.002V19h5v.002c0 .551-.448 1-1 1h-3c-.552 0-1-.449-1-1zm1 3h27V33h-2v-3.999c0-.011-.006-.02-.006-.03-.002-.066-.024-.13-.04-.196-.016-.065-.023-.131-.052-.19-.004-.01-.003-.021-.008-.03l-.894-1.79V24a1 1 0 00-1-1h-3a1 1 0 00-1 1v2.765l-.895 1.789c-.005.01-.004.021-.008.03-.028.059-.036.125-.052.19-.016.066-.038.13-.04.197 0 .011-.006.02-.006.03V33h-2.182c.11-.312.182-.643.182-.992v-6.002c0-1.654-1.346-3-3-3h-3c-1.654 0-3 1.346-3 3v6.002c0 .35.071.68.182.992H25.5v-3.999c0-.011-.006-.02-.006-.03-.002-.066-.024-.13-.04-.196-.016-.065-.023-.131-.052-.19-.004-.01-.003-.021-.008-.03l-.894-1.79V24a1 1 0 00-1-1h-3a1 1 0 00-1 1v2.765l-.895 1.789c-.005.01-.004.021-.008.03-.028.059-.036.125-.052.19-.016.066-.038.13-.04.197 0 .011-.006.02-.006.03V33h-2V22.002zm10-5.772l.618-1.236h1.764l.618 1.236v3.771h-3zm1-3.236v-1h1v1zm8 2.006h5v2h-5zm0-2c0-.551.448-1 1-1h3c.552 0 1 .449 1 1zm0 6.002V19h5v.002c0 .551-.448 1-1 1h-3c-.552 0-1-.449-1-1zM40.5 33v-3.763l.618-1.236h1.764l.618 1.236V33zm1-6.999V25h1v1.001zM30.457 33a.997.997 0 01-.957-.992v-.002h5v.002a.997.997 0 01-.957.992zm-.957-4.994h5v2h-5zm0-2c0-.551.448-1 1-1h3c.552 0 1 .449 1 1zM20.5 33v-3.763l.618-1.236h1.764l.618 1.236V33zm1-6.999V25h1v1.001zm-2 14.998h5v2h-5zm0-2a1 1 0 011-1h3a1 1 0 011 1zm0 6.002v-.002h5v.002a1 1 0 01-.995.999h-3.01a1 1 0 01-.995-.999zm12.01-3.999h1v1.999h-1zm1-2h-1v-1.001h1zm-1 6.998v-.999h1V46zm7.99-5.001h5v2h-5zm0-2a1 1 0 011-1h3a1 1 0 011 1zm0 6.002v-.002h5v.002a1 1 0 01-.995.999h-3.01a1 1 0 01-.995-.999zm6.816.999c.111-.314.184-.647.184-.999v-6.002c0-1.654-1.346-3-3-3h-3c-1.654 0-3 1.346-3 3v6.002c0 .352.072.685.184.999H34.51v-8.999a1 1 0 00-1-1h-3a1 1 0 00-1 1V46h-3.193c.111-.314.184-.647.184-.999v-6.002c0-1.654-1.346-3-3-3h-3c-1.654 0-3 1.346-3 3v6.002c0 .352.072.685.184.999H16.5V35h13.913c.029.001.058.009.087.009h3c.029 0 .058-.008.087-.009H47.5v11zM47.5 9v11.002h-1.185c.112-.314.185-.647.185-1V13c0-1.654-1.346-3-3-3h-3c-1.654 0-3 1.346-3 3v6.002c0 .353.072.686.185 1H35.5v-4.008c0-.011-.006-.02-.006-.03-.002-.066-.024-.13-.04-.196-.016-.065-.023-.131-.052-.19-.004-.01-.003-.021-.008-.03l-.894-1.79v-2.764a1 1 0 00-1-1h-3a1 1 0 00-1 1v2.764l-.895 1.789c-.005.01-.004.021-.008.03-.028.059-.036.125-.052.19-.016.066-.038.13-.04.197 0 .011-.006.02-.006.03v4.008h-2.185c.112-.314.185-.647.185-1V13c0-1.654-1.346-3-3-3h-3c-1.654 0-3 1.346-3 3v6.002c0 .353.072.686.185 1H16.5V9z"/></svg>
													</i>

													<h4><a href="#">Vending machine</a></h4>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-6 col-sm-4 col-lg-2">
												<div class="__item">
													<i class="__ico">
														<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M56.447 20.547a27.113 27.113 0 00-5.939-8.182 1 1 0 00-.141-.135C45.545 7.749 39.091 5 32.004 5h-5.996c-2.404 0-4.75.32-7.008.923V1a1 1 0 00-1-1H5.996a1 1 0 00-1 1v62a1 1 0 001 1H18a1 1 0 001-1v-4.923c2.259.603 4.604.923 7.008.923h5.996c7.054 0 13.481-2.722 18.296-7.167a.954.954 0 00.243-.231 27.112 27.112 0 005.884-8.104.913.913 0 00.08-.177A26.819 26.819 0 0059.004 32c0-4.046-.9-7.885-2.503-11.333a.918.918 0 00-.054-.12zm-1.544 21.468h-3.829A26.808 26.808 0 0052.982 33h3.996a24.805 24.805 0 01-2.075 9.015zM44.105 52.019h2.857a24.924 24.924 0 01-9.275 4.322 27.123 27.123 0 006.418-4.322zM26.008 57c-5.48 0-10.656-1.745-15.012-5.025V12.026a25.204 25.204 0 013.133-2.033.987.987 0 00.594-.292 24.615 24.615 0 013.209-1.373c.023.002.044.014.068.014a.971.971 0 00.58-.208A25.02 25.02 0 0126.008 7c13.785 0 25 11.215 25 25s-11.215 25-25 25zM12.998 8.336a26.84 26.84 0 00-2.002 1.228V6.99a1.002 1.002 0 012.002 0zm-2.002 46.099c.653.439 1.319.851 2.002 1.229v1.346a1 1 0 01-2.002 0zM44.127 12a27.094 27.094 0 00-6.439-4.34A24.896 24.896 0 0146.987 12zm8.855 19a26.82 26.82 0 00-1.902-9h3.83a24.807 24.807 0 012.068 9zm.947-11h-3.744a27.07 27.07 0 00-4.074-6h3.216a25.173 25.173 0 014.602 6zM17 62H6.996V2H17v4.538c-.678.24-1.346.505-2.002.799V6.99c0-1.654-1.346-3-3-3a3.005 3.005 0 00-3.002 3v50.019c0 1.654 1.347 3 3.002 3 1.654 0 3-1.346 3-3v-.347c.656.295 1.324.56 2.002.799zm32.307-11.981h-3.212a27.108 27.108 0 004.083-6.004h3.742a25.147 25.147 0 01-4.613 6.004z"/><path d="M31 40.002h-2.004V19.999a1.003 1.003 0 00-1.382-.923 1 1 0 00-.326.217l-3.872 3.873a.973.973 0 00-.213.212l-2.916 2.917a.999.999 0 101.414 1.414l1.295-1.295v13.589h-2a1 1 0 100 2H31a1 1 0 100-2.001zm-6.004-15.589l2-2v17.589h-2z"/></svg>
													</i>

													<h4><a href="#">Insert coin</a></h4>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end icon list -->

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
									<h2 class="__title">Set of Snacks</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start icon list -->
								<div class="icon-list icon-list--s4">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-12 col-md-6">
												<div class="__item">
													<img class="lazy" src="img/blank.gif" width="402" height="247" data-src="img/icon-list_img/4/1.png" alt="demo" />
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-md-6">
												<div class="__item">
													<img class="lazy" src="img/blank.gif" width="439" height="241" data-src="img/icon-list_img/4/2.png" alt="demo" />
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-md-6">
												<div class="__item">
													<img class="lazy" src="img/blank.gif" width="465" height="243" data-src="img/icon-list_img/4/3.png" alt="demo" />
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-md-6">
												<div class="__item">
													<img class="lazy" src="img/blank.gif" width="333" height="265" data-src="img/icon-list_img/4/4.png" alt="demo" />
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end icon list -->

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
