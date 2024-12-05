<!DOCTYPE html>
<html class="no-js" lang="en">

	<head>
		<title>VendiFill</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

		<meta name="theme-color" content="#056EB9" />
		<meta name="msapplication-navbutton-color" content="#056EB9" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="/img/favicon/favicon.ico">
		<link rel="icon" href="/img/favicon/favicon-32x32.png" type="image/png" sizes="32x32">
		<link rel="icon" href="/img/favicon/favicon-16x16.png" type="image/png" sizes="16x16">
		<link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png" sizes="180x180">
		<link rel="manifest" href="/img/favicon/manifest.json">

		<!-- Critical styles
		================================================== -->
		<link rel="stylesheet" href="/css/critical.min.css" type="text/css">

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
		<script type="text/javascript" src="/js/device.min.js"></script>
	</head>

	<body class="page-product-details">
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
											<a href="mailto:support@VendiFill.com">support@VendiFill.com</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-auto">
								<div class="row">
									<div class="col-auto">
										<nav class="top-bar__subnav">
											<ul>
												<li><a href="javascript:void(0)">Delivery</a></li>
												<li><a href="javascript:void(0)">Payment</a></li>
												<li><a href="javascript:void(0)">Return</a></li>
											</ul>
										</nav>
									</div>

									<div class="col-auto">
										<div class="top-bar__socials">
											<!-- start social buttons -->
											<div class="s-btns s-btns--gray">
												<ul class="d-flex flex-row flex-wrap justify-content-center align-items-center">
													<li><a class="f" href="javascript:void(0)"><i class="fontello-facebook"></i></a></li>
													<li><a class="t" href="javascript:void(0)"><i class="fontello-twitter"></i></a></li>
													<li><a class="y" href="javascript:void(0)"><i class="fontello-youtube-play"></i></a></li>
													<li><a class="i" href="javascript:void(0)"><i class="fontello-instagram"></i></a></li>
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

					<a class="top-bar__logo site-logo" href="/index">
						<img class="img-fluid" src="/img/site_logo/logo_1.svg" width="155" height="40" alt="demo" />
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
											<li><a href="/index">Home Page 1</a></li>
											<li><a href="/index">Home Page 2</a></li>
											<li><a href="/index_3">Shop</a></li>
										</ul>
									</li>

									<li class="has-submenu">
										<a class="nav-link active" href="javascript:void(0);">Pages</a>

										<ul class="submenu">
											<li><a href="/about_us">About Us</a></li>
											<li><a href="/services">Services</a></li>
											<li><a class="active" href="/product_details">Product Single</a></li>
											<li><a href="/gallery_masonry">Gallery Masonry</a></li>
											<li><a href="/gallery_classic">Gallery Classic</a></li>
											<li><a href="/faq">FAQ</a></li>
											<li><a href="/typography">Typography</a></li>
											<li><a href="/404">404 Page</a></li>
										</ul>
									</li>

									<li>
										<a class="nav-link" href="/products">Products</a>
									</li>

									<li>
										<a class="nav-link" href="/blog">Blog</a>
									</li>

									<li class="has-submenu">
										<a class="nav-link" href="javascript:void(0);">Shop</a>

										<ul class="submenu">
											<li><a href="/shop_catalog">Catalog</a></li>
											<li><a href="/product_single">Single Product</a></li>
											<li><a href="/cart/checkout">Cart & Checkout</a></li>
											<li><a href="/account">Account</a></li>
										</ul>
									</li>

									<li>
										<a class="nav-link" href="/contact">Contacts</a>
									</li>

									<li class="has-submenu">
										<a class="nav-link" href="javascript:void(0);">Elements</a>

										<ul class="submenu">
											<li><a href="/element/accordions">Accordion</a></li>
											<li><a href="/element/alerts">Alerts</a></li>
											<li><a href="/elements-counters">Counters</a></li>
											<li><a href="/elements-form">Forms</a></li>
											<li><a href="/elements-icons">IconList</a></li>
											<li><a href="/elements-info_tables">Tables</a></li>
											<li><a href="/elements-media_embeds">Media Embeds</a></li>
											<li><a href="/elements-pricing_tables">Pricing Tables</a></li>
											<li><a href="/elements-tabs">Tabs</a></li>
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
												<li><a class="f" href="javascript:void(0)"><i class="fontello-facebook"></i></a></li>
												<li><a class="t" href="javascript:void(0)"><i class="fontello-twitter"></i></a></li>
												<li><a class="y" href="javascript:void(0)"><i class="fontello-youtube-play"></i></a></li>
												<li><a class="i" href="javascript:void(0)"><i class="fontello-instagram"></i></a></li>
											</ul>
										</div>
										<!-- end social buttons -->
									</li>
								</ul>
							</div>

							<div class="top-bar__action">
								<a class="custom-btn" href="javascript:void(0)">Get in Touch</a>

								<a class="custom-btn custom-btn--big custom-btn--s2" href="javascript:void(0)">Get in Touch</a>
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
						<li class="active"><a href="javascript:void(0)">Documents</a></li>
						<li><a href="javascript:void(0)">Downloads</a></li>
						<li><a href="javascript:void(0)">Useful links</a></li>
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
										<li><a class="f" href="javascript:void(0)"><i class="fontello-facebook"></i></a></li>
										<li><a class="t" href="javascript:void(0)"><i class="fontello-twitter"></i></a></li>
										<li><a class="y" href="javascript:void(0)"><i class="fontello-youtube-play"></i></a></li>
										<li><a class="i" href="javascript:void(0)"><i class="fontello-instagram"></i></a></li>
									</ul>
								</div>
								<!-- end social buttons -->
							</li>
						</ul>
					</div>

					<div>
						<a class="custom-btn custom-btn--big custom-btn--s2 wide" href="javascript:void(0)">Get in Touch</a>
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
								<h4 class="hero__subtitle">VendiFill</h4>
								<h1 class="hero__title">Snack Machine</h1>
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
				<link rel="stylesheet" href="/css/style.min.css" type="text/css">

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-6">

								<div class="content-container">
									<h2>Snack Machine by VendiFill</h2>

									<p>
										Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish. Pineconefish ribbonbearer climbing perch tenpounder . Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Pacific hake
									</p>

									<article class="mt-6 mt-sm-12">
										<h4>Snack Machine Key Features</h4>

										<ul>
											<li>500 cup daily capacity</li>
											<li>Large LED lit serving area to enhance the user experience </li>
											<li>Jug facility for those all-important meetings</li>
											<li>Machine works with both cash and cashless payment systems</li>
										</ul>

										<div class="spacer py-2"></div>

										<div class="row">
											<div class="col-12 col-sm-6">
												<ul class="check-list">
													<li><i class="ico-checked fontello-ok"></i><strong>Machine Installation</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Eco Vending</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Quick Delivery</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Healthy Potato Chips</strong></li>
												</ul>
											</div>

											<div class="col-12 col-sm-6">
												<div class="spacer py-2 d-sm-none"></div>

												<ul class="check-list">
													<li><i class="ico-checked fontello-ok"></i><strong>Healthy Energy Bars</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Gluten-Free Snacks</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Kosher Snacks</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Healthy Snacks</strong></li>
												</ul>
											</div>
										</div>
									</article>

									<article class="mt-6 mt-sm-12">
										<h4>Technical specifications of our snack vending machines</h4>

										<div class="info-table info-table--s1">
											<table>
												<thead>
													<tr>
														<td></td>
														<td>4-wide</td>
														<td>6-wide</td>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>Height</td>
														<td>72″</td>
														<td>72″</td>
													</tr>
													<tr>
														<td>Width</td>
														<td>33″</td>
														<td>44″</td>
													</tr>
													<tr>
														<td>Depth</td>
														<td>35″</td>
														<td>35″</td>
													</tr>
													<tr>
														<td>Weight</td>
														<td>510 lbs.</td>
														<td>610 lbs.</td>
													</tr>
													<tr>
														<td>Electrical</td>
														<td>115 VAC 60Hz, 3A</td>
														<td>120 VAC 60Hz, 3A</td>
													</tr>
													<tr>
														<td>Certifications</td>
														<td>UL, cUL, FCC</td>
														<td>CE, NAMA</td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class="mt-8">
											<a class="custom-btn custom-btn--big custom-btn--s1" href="javascript:void(0)">Get Free Vending Machine</a>
										</div>
									</article>
								</div>

							</div>

							<div class="col-12 col-lg-6">

								<div class="spacer py-4 d-lg-none"></div>

								<div class="content-container">
									<img class="lazy" src="/img/blank.gif" data-src="/img/img_1.png" width="563" height="568" alt="demo" />

									<div class="row justify-content-lg-end">
										<div class="col-12 col-lg-10">

											<p>
												<strong>Ingredients</strong>
											</p>

											<p>
												<img class="lazy" src="/img/blank.gif" data-src="/img/img_ingredients.png" width="361" height="81" alt="demo">
											</p>

											<div class="spacer py-2"></div>

											<p>
												<strong>Brands</strong>
											</p>

											<!-- start brands list -->
											<div class="brands-list">
												<div class="__inner">
													<div class="row justify-content-sm-around align-items-center">
														<!-- start item -->
														<div class="col-6 col-sm">
															<div class="__item">
																<figure class="__image">
																	<img class="lazy" src="/img/blank.gif" data-src="/img/brands_img/5.png" width="126" height="64" alt="demo" />
																</figure>
															</div>
														</div>
														<!-- end item -->

														<!-- start item -->
														<div class="col-6 col-sm">
															<div class="__item">
																<figure class="__image">
																	<img class="lazy" src="/img/blank.gif" data-src="/img/brands_img/4.png" width="100" height="89" alt="demo" />
																</figure>
															</div>
														</div>
														<!-- end item -->

														<!-- start item -->
														<div class="col-6 col-sm">
															<div class="__item">
																<figure class="__image">
																	<img class="lazy" src="/img/blank.gif" data-src="/img/brands_img/3.png" width="127" height="60" alt="demo" />
																</figure>
															</div>
														</div>
														<!-- end item -->

														<!-- start item -->
														<div class="col-6 col-sm">
															<div class="__item">
																<figure class="__image">
																	<img class="lazy" src="/img/blank.gif" data-src="/img/brands_img/2.png" width="132" height="47" alt="demo" />
																</figure>
															</div>
														</div>
														<!-- end item -->
													</div>
												</div>
											</div>
											<!-- end brands list -->

											<div class="spacer py-4"></div>

											<!-- start product brochure -->
											<div class="product-brochure">
												<div class="product-brochure__inner">
													<p>Download Brochure (PDF)</p>

													<p><a class="custom-btn custom-btn--big" href="javascript:void(0)">Download</a></p>
												</div>
											</div>
											<!-- end product brochure -->

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pt">
					<!-- start promo banner -->
					<div class="promo-banner promo-banner--s1 promo-banner--with-offset">
						<div class="promo-banner__inner">
							<div class="container">
								<div class="row align-items-md-center">
									<div class="col-12 col-lg-5 col-xl-8">
										<h2 class="__title">Profit from your Venue with No Cost Up-Front?</h2>

										<p>Start with a full vending machine service and a $500 signing bonus.</p>
									</div>

									<div class="col-12 col-lg-4">
										<div class="spacer py-3 py-lg-2"></div>

										<a class="custom-btn custom-btn--big custom-btn--s5" href="javascript:void(0)">Get my Free Machine</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end promo banner -->
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pt">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading">
									<h5 class="__subtitle">Features</h5>

									<h2 class="__title">Why is it so safe to start my vending machine business?</h2>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<!-- start feature -->
								<div class="feature">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<i class="__ico">
														<svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 -24 494 494"><path d="M441.906 0H122.47C94.746 0 72.19 22.344 72.19 49.719L70.133 331H7.793C3.375 331 0 334.906 0 339.324v38.711c0 36.238 29 65.875 64 67.5V446h269v-.523c2 .082 3.21.523 4.586.523h.191c37.328-.219 67.418-30.645 67.223-67.973V132h81.207c4.418 0 7.793-4 7.793-8.414V52.559C494.05 23.69 470.773.207 441.906 0zM67.5 430h-.055C38.988 430 16 406.48 16 378.027V347h254v30.895a67.709 67.709 0 0 0 19.766 48.046c1.351 1.36 2.765 2.059 4.21 4.059zM389 378.02c0 28.46-22.766 51.98-51.234 51.98h-.164c-28.61-.207-51.668-23.492-51.602-52.102v-38.574a8.287 8.287 0 0 0-8-8.324H86.133L88.19 49.773C88.191 31.168 103.566 16 122.47 16h281.668C395.02 26 389 38.652 389 52.773zM478 52.7V116h-73V52.758C405 32.734 421.656 16 441.672 16h.223c20.066.2 36.199 16.57 36.105 36.64zm0 0"/><path d="M187.855 196.914l41.247 28.2a7.877 7.877 0 0 0 8.941 0l41.121-28.192C293.45 187.176 304 166.8 304 149.523V92.47a7.82 7.82 0 0 0-4.266-7.184l-62.8-30.89a7.86 7.86 0 0 0-6.993 0l-62.683 30.804A7.807 7.807 0 0 0 163 92.383v57.14c0 17.278 10.574 37.653 24.855 47.391zM179 97.375l54.5-26.89L288 97.448v52.074c0 12.051-7.898 27.38-17.863 34.172l-36.73 25.121L196.82 183.7c-9.965-6.8-17.82-22.125-17.82-34.176zm0 0"/><path d="M219.969 161.602a7.989 7.989 0 0 0 5.664 2.398h.02a8.01 8.01 0 0 0 5.656-2.367l31.824-31.836a8.003 8.003 0 0 0 .004-11.32c-3.121-3.13-8.192-3.13-11.317-.004l-26.14 26.136-10.45-10.55a8.003 8.003 0 0 0-11.32-.051 8.007 8.007 0 0 0-.05 11.32zm0 0M333 248H141a8 8 0 0 0 0 16h192a8 8 0 0 0 0-16zm0 0M333 285H141a8 8 0 0 0 0 16h192a8 8 0 0 0 0-16zm0 0"/></svg>
													</i>

													<h4 class="__title">Guarntee 100%</h4>

													<p>Redfin perch rock beauty snake mudhead boafish rock bass pompano dolphinfish onecat beachsal.</p>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<i class="__ico">
														<svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.997 511.997"><circle cx="366.436" cy="147.111" r="8.245"/><path d="M319.099 217.409c.072-.076-.076.073 0 0zM296.128 194.448c-.057.059.059-.058 0 0z"/><path d="M489.835 128.821H479.76a132.964 132.964 0 0 0-15.411-37.183l7.131-7.131c8.038-8.039 8.037-21.118 0-29.155l-16.38-16.38c-8.038-8.038-21.117-8.038-29.154 0l-7.131 7.131a132.98 132.98 0 0 0-37.184-15.411V20.615C381.631 9.248 372.382 0 361.014 0h-23.166c-11.367 0-20.615 9.248-20.615 20.615V30.69a132.972 132.972 0 0 0-37.184 15.411l-7.131-7.131c-8.038-8.036-21.116-8.036-29.154 0l-16.38 16.38c-8.038 8.038-8.038 21.117 0 29.156l7.131 7.13a132.996 132.996 0 0 0-15.411 37.183h-10.075c-11.367 0-20.615 9.248-20.615 20.616V172.6c0 11.367 9.248 20.615 20.615 20.615h10.075a133.228 133.228 0 0 0 15.306 37.011l1.775 3.053L99.911 369.553c-26.488-9.535-56.799-2.954-76.881 17.126-20.479 20.479-27 51.197-16.614 78.258a7.468 7.468 0 0 0 12.247 2.604l38.269-38.269 18.908 7.777 8.378 19.611-38.217 38.217a7.462 7.462 0 0 0 2.603 12.247 73.35 73.35 0 0 0 26.299 4.874c19.146 0 37.949-7.477 51.96-21.488 20.082-20.082 26.661-50.393 17.126-76.881l25.279-25.279a7.465 7.465 0 0 0-10.556-10.557l-28.759 28.759a7.465 7.465 0 0 0-1.545 8.306c9.741 21.959 4.878 48.117-12.101 65.095-13.418 13.418-32.351 19.31-50.65 16.381l32.688-32.688a7.463 7.463 0 0 0 1.586-8.211L88.37 428.373a7.461 7.461 0 0 0-4.025-3.971l-26.333-10.831a7.465 7.465 0 0 0-8.117 1.625l-32.688 32.688c-2.932-18.297 2.964-37.233 16.38-50.65 16.978-16.98 43.137-21.841 65.095-12.1a7.466 7.466 0 0 0 8.306-1.545l189.14-189.14a7.465 7.465 0 0 0 1.545-8.306c-9.741-21.958-4.878-48.117 12.101-65.095 13.417-13.418 32.352-19.315 50.65-16.38l-.024.023-32.762 32.762c-.059.059-.115.118-.172.178l-.024.026-.031.034a6.495 6.495 0 0 0-.158.178l-.035.042-.056.066-.054.067-.033.041-.051.064-.037.048-.051.068-.032.042-.046.064-.037.051-.043.062-.035.051-.042.063-.036.055-.042.066-.031.048-.046.075-.027.044-.042.072-.028.048-.038.066-.031.055-.036.066-.029.055-.04.078-.022.043-.037.074-.025.052-.033.069-.026.055-.034.075-.022.049-.029.067a4.137 4.137 0 0 0-.027.064l-.026.063a3.912 3.912 0 0 1-.024.061l-.03.078-.019.05-.028.078-.018.051-.028.083a.621.621 0 0 1-.016.046l-.025.077-.018.057a1.7 1.7 0 0 0-.039.132l-.019.066-.018.064a1.555 1.555 0 0 0-.019.073l-.015.059-.02.08-.012.05-.019.085a.928.928 0 0 0-.011.051l-.016.077-.011.057-.015.08-.01.054-.013.078-.01.059-.011.074-.009.06-.011.086-.006.045-.01.092-.005.045a2.452 2.452 0 0 0-.008.089l-.005.05-.006.082-.004.055-.005.084-.003.053-.003.086-.002.048a2.948 2.948 0 0 0-.002.094l-.001.042v.138l.001.098.001.036.003.098.002.042a2.958 2.958 0 0 0 .007.136l.007.1.003.034.009.1.004.04.011.099.004.037.012.098.005.041.014.099a.445.445 0 0 1 .005.036l.016.101a.532.532 0 0 0 .007.039l.018.096.007.038.02.101a3.049 3.049 0 0 0 .031.138l.007.032.023.097.011.045.024.09.011.042.027.096.011.038.028.093.014.046.027.086.017.05.028.083.018.052.028.077.023.062.027.071.024.06.029.072.012.029 10.931 26.233a7.46 7.46 0 0 0 3.927 3.98l26.963 11.661a7.465 7.465 0 0 0 8.241-1.573l32.786-32.787c2.932 18.297-2.964 37.234-16.38 50.65-16.978 16.979-43.138 21.84-65.095 12.101a7.464 7.464 0 0 0-8.306 1.545L179.83 356.677a7.465 7.465 0 0 0 10.556 10.557l90.692-90.692a133.242 133.242 0 0 0 36.161 14.8v10.076c0 11.367 9.248 20.615 20.615 20.615h23.166c11.367 0 20.615-9.248 20.615-20.615v-10.076a132.945 132.945 0 0 0 37.184-15.411l7.131 7.131a20.481 20.481 0 0 0 14.577 6.037 20.483 20.483 0 0 0 14.577-6.037l16.38-16.38a20.478 20.478 0 0 0 6.038-14.577 20.482 20.482 0 0 0-6.038-14.578l-7.131-7.13a132.99 132.99 0 0 0 15.411-37.184h10.075c11.367 0 20.615-9.248 20.615-20.615v-23.165c-.003-11.364-9.251-20.612-20.619-20.612zm-105.516 27.74l-15.115 15.115-19.63-9.019-7.808-18.217 18.78-18.781 21.028 6.31 6.309 21.028-3.564 3.564zm111.203 16.041a5.693 5.693 0 0 1-5.686 5.686h-13.864c-4.754 0-8.937 3.383-9.941 8.044a118.241 118.241 0 0 1-16.26 39.233c-2.582 4.006-2.016 9.355 1.345 12.716l9.808 9.808a5.648 5.648 0 0 1 1.665 4.02 5.646 5.646 0 0 1-1.666 4.021l-16.38 16.38a5.692 5.692 0 0 1-8.042 0l-9.808-9.808c-3.36-3.36-8.709-3.926-12.718-1.344a118.233 118.233 0 0 1-39.23 16.26c-4.662 1.005-8.045 5.186-8.045 9.941v13.865a5.693 5.693 0 0 1-5.686 5.686H337.85a5.693 5.693 0 0 1-5.686-5.686V287.56c0-4.755-3.384-8.937-8.043-9.942a118.211 118.211 0 0 1-32.106-12.01l14.171-14.17a100.456 100.456 0 0 0 43.248 9.797c47.843 0 89.206-34.036 98.354-80.93a7.464 7.464 0 0 0-5.897-8.755 7.46 7.46 0 0 0-8.755 5.898c-7.782 39.899-42.984 68.86-83.7 68.86a85.548 85.548 0 0 1-31.928-6.19l8.665-8.665c26.491 9.534 56.8 2.956 76.881-17.126 20.479-20.479 27-51.197 16.614-78.26a7.462 7.462 0 0 0-5.416-4.626 7.473 7.473 0 0 0-6.831 2.022l-7.544 7.544-5.154-17.178a7.462 7.462 0 0 0-5.004-5.004l-17.178-5.154 7.543-7.543a7.465 7.465 0 0 0-2.604-12.247c-27.062-10.385-57.779-3.864-78.258 16.613-20.081 20.083-26.661 50.393-17.126 76.881l-9.881 9.881a85.203 85.203 0 0 1-8.065-36.235c0-47.028 38.259-85.287 85.287-85.287 42.749 0 79.108 31.916 84.577 74.242a7.464 7.464 0 1 0 14.805-1.912c-6.427-49.745-49.152-87.258-99.383-87.258-55.258 0-100.216 44.957-100.216 100.216 0 16.593 4.092 32.843 11.879 47.351l-13.994 13.993a118.31 118.31 0 0 1-14.267-36.032c-1.007-4.661-5.188-8.044-9.943-8.044h-13.863a5.693 5.693 0 0 1-5.686-5.686v-23.165a5.694 5.694 0 0 1 5.686-5.687h13.864c4.754 0 8.935-3.382 9.941-8.043a118.241 118.241 0 0 1 16.26-39.233c2.584-4.009 2.016-9.358-1.345-12.716l-9.808-9.807a5.695 5.695 0 0 1 0-8.043l16.38-16.38a5.692 5.692 0 0 1 8.042 0l9.807 9.807c3.361 3.363 8.71 3.929 12.719 1.346a118.23 118.23 0 0 1 39.236-16.26c4.658-1.009 8.039-5.189 8.039-9.94V20.615a5.693 5.693 0 0 1 5.686-5.686h23.166a5.693 5.693 0 0 1 5.686 5.686V34.48c0 4.75 3.381 8.932 8.043 9.941a118.213 118.213 0 0 1 39.23 16.258c4.007 2.584 9.356 2.017 12.72-1.343l9.808-9.808a5.692 5.692 0 0 1 8.042 0l16.38 16.38a5.693 5.693 0 0 1 0 8.042l-9.806 9.806c-3.364 3.361-3.931 8.71-1.347 12.721a118.236 118.236 0 0 1 16.259 39.23c1.006 4.662 5.186 8.044 9.941 8.044h13.864a5.693 5.693 0 0 1 5.686 5.687v23.164z"/><path d="M153.399 147.85h-4.182a61.592 61.592 0 0 0-2.783-6.728l2.956-2.955c4.364-4.366 4.364-11.469-.001-15.836l-13.019-13.018c-2.115-2.115-4.927-3.279-7.918-3.279s-5.803 1.165-7.917 3.279l-2.955 2.955a61.708 61.708 0 0 0-6.728-2.783v-4.182c0-6.175-5.023-11.198-11.198-11.198H81.242c-6.175 0-11.198 5.023-11.198 11.198v4.182a61.592 61.592 0 0 0-6.728 2.783l-2.954-2.954a11.125 11.125 0 0 0-7.918-3.28 11.124 11.124 0 0 0-7.918 3.279l-13.02 13.019c-4.364 4.366-4.364 11.469.001 15.836l2.955 2.954a61.708 61.708 0 0 0-2.783 6.728h-4.182c-6.175 0-11.198 5.023-11.198 11.198v18.411c.001 6.175 5.024 11.198 11.199 11.198h4.182a61.592 61.592 0 0 0 2.783 6.728l-2.956 2.955c-4.364 4.366-4.364 11.469.001 15.836l13.019 13.018a11.124 11.124 0 0 0 7.918 3.279c2.992 0 5.803-1.165 7.917-3.279l2.955-2.955a61.708 61.708 0 0 0 6.728 2.783v4.182c0 6.175 5.023 11.198 11.198 11.198h18.411c6.175 0 11.198-5.023 11.198-11.198v-4.182a61.592 61.592 0 0 0 6.728-2.783l2.954 2.954a11.125 11.125 0 0 0 7.918 3.28c2.991 0 5.803-1.164 7.918-3.279l13.02-13.019c4.364-4.366 4.364-11.469-.001-15.836l-2.955-2.954a61.708 61.708 0 0 0 2.783-6.728h4.182c6.175 0 11.198-5.023 11.198-11.198v-18.411c0-6.174-5.023-11.198-11.198-11.198zm-3.735 25.877h-6.031a7.466 7.466 0 0 0-7.255 5.706 46.884 46.884 0 0 1-5.543 13.397 7.464 7.464 0 0 0 1.095 9.166l4.26 4.259-7.741 7.741-4.26-4.26a7.47 7.47 0 0 0-9.164-1.095 46.897 46.897 0 0 1-13.398 5.543 7.464 7.464 0 0 0-5.706 7.255v6.031H84.972v-6.031a7.465 7.465 0 0 0-5.706-7.255 46.897 46.897 0 0 1-13.398-5.543 7.46 7.46 0 0 0-9.164 1.095l-4.26 4.26-7.741-7.741 4.26-4.259a7.468 7.468 0 0 0 1.095-9.166 46.884 46.884 0 0 1-5.543-13.397 7.465 7.465 0 0 0-7.255-5.706h-6.031v-10.948h6.031a7.466 7.466 0 0 0 7.255-5.706 46.884 46.884 0 0 1 5.543-13.397 7.464 7.464 0 0 0-1.095-9.166l-4.26-4.259 7.741-7.741 4.26 4.26a7.467 7.467 0 0 0 9.164 1.095 46.897 46.897 0 0 1 13.398-5.543 7.464 7.464 0 0 0 5.706-7.255v-6.031H95.92v6.031a7.465 7.465 0 0 0 5.706 7.255 46.897 46.897 0 0 1 13.398 5.543 7.465 7.465 0 0 0 9.164-1.095l4.26-4.26 7.741 7.741-4.26 4.259a7.468 7.468 0 0 0-1.095 9.166 46.884 46.884 0 0 1 5.543 13.397 7.465 7.465 0 0 0 7.255 5.706h6.031v10.948z"/><path d="M90.447 131.926c-20.031 0-36.327 16.297-36.327 36.327s16.297 36.327 36.327 36.327 36.327-16.297 36.327-36.327-16.296-36.327-36.327-36.327zm0 57.726c-11.799 0-21.398-9.599-21.398-21.398s9.599-21.398 21.398-21.398 21.398 9.599 21.398 21.398c.001 11.798-9.599 21.398-21.398 21.398zM414.158 394.678h-4.182a61.592 61.592 0 0 0-2.783-6.728l2.956-2.955c4.364-4.366 4.364-11.469-.001-15.836l-13.019-13.018c-2.115-2.115-4.927-3.279-7.918-3.279s-5.803 1.165-7.917 3.279l-2.955 2.955a61.708 61.708 0 0 0-6.728-2.783v-4.182c0-6.175-5.023-11.198-11.198-11.198h-18.41c-6.175 0-11.198 5.023-11.198 11.198v4.182a61.592 61.592 0 0 0-6.728 2.783l-2.954-2.954a11.125 11.125 0 0 0-7.918-3.28 11.124 11.124 0 0 0-7.918 3.279l-13.02 13.019c-4.364 4.366-4.364 11.469.001 15.836l2.955 2.954a61.708 61.708 0 0 0-2.783 6.728h-4.182c-6.175 0-11.198 5.023-11.198 11.198v18.411c0 6.175 5.023 11.198 11.198 11.198h4.182a61.592 61.592 0 0 0 2.783 6.728l-2.956 2.955c-4.364 4.366-4.364 11.469.001 15.836l13.019 13.018c2.115 2.115 4.927 3.279 7.918 3.279s5.803-1.165 7.917-3.279l2.955-2.955a61.708 61.708 0 0 0 6.728 2.783v4.182c0 6.175 5.023 11.198 11.198 11.198h18.41c6.175 0 11.198-5.023 11.198-11.198v-4.182a61.592 61.592 0 0 0 6.728-2.783l2.954 2.954a11.125 11.125 0 0 0 7.918 3.28c2.991 0 5.803-1.164 7.918-3.279l13.02-13.019c4.364-4.366 4.364-11.469-.001-15.836l-2.955-2.954a61.708 61.708 0 0 0 2.783-6.728h4.182c6.175 0 11.198-5.023 11.198-11.198v-18.411c0-6.175-5.024-11.198-11.198-11.198zm-3.731 25.877h-6.031a7.466 7.466 0 0 0-7.255 5.706 46.884 46.884 0 0 1-5.543 13.397 7.464 7.464 0 0 0 1.095 9.166l4.26 4.259-7.741 7.741-4.26-4.26a7.468 7.468 0 0 0-9.164-1.095 46.897 46.897 0 0 1-13.398 5.543 7.464 7.464 0 0 0-5.706 7.255v6.031h-10.948v-6.031a7.465 7.465 0 0 0-5.706-7.255 46.897 46.897 0 0 1-13.398-5.543 7.46 7.46 0 0 0-9.164 1.095l-4.26 4.26-7.741-7.741 4.26-4.259a7.468 7.468 0 0 0 1.095-9.166 46.884 46.884 0 0 1-5.543-13.397 7.465 7.465 0 0 0-7.255-5.706h-6.031v-10.948h6.031a7.466 7.466 0 0 0 7.255-5.706 46.884 46.884 0 0 1 5.543-13.397 7.464 7.464 0 0 0-1.095-9.166l-4.26-4.259 7.741-7.741 4.26 4.26a7.467 7.467 0 0 0 9.164 1.095 46.897 46.897 0 0 1 13.398-5.543 7.464 7.464 0 0 0 5.706-7.255v-6.031h10.948v6.031a7.465 7.465 0 0 0 5.706 7.255 46.897 46.897 0 0 1 13.398 5.543 7.465 7.465 0 0 0 9.164-1.095l4.26-4.26 7.741 7.741-4.26 4.259a7.468 7.468 0 0 0-1.095 9.166 46.884 46.884 0 0 1 5.543 13.397 7.465 7.465 0 0 0 7.255 5.706h6.031v10.948z"/><path d="M351.208 378.753c-20.031 0-36.327 16.297-36.327 36.327s16.297 36.327 36.327 36.327 36.327-16.297 36.327-36.327-16.296-36.327-36.327-36.327zm0 57.726c-11.799 0-21.398-9.599-21.398-21.398s9.599-21.398 21.398-21.398 21.398 9.599 21.398 21.398-9.599 21.398-21.398 21.398z"/></svg>
													</i>

													<h4 class="__title">Repair and Service</h4>

													<p>Denticle herring flyingfish trevally Black pickere l squirrelfish, candiru leatherjacket pencilsmelt flier short</p>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<i class="__ico">
														<svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 -24 480 480"><path d="M472 96H365.336L327.383 4.922A7.997 7.997 0 0 0 320 0H184a8 8 0 0 0-8 8v32a8 8 0 0 0 8 8h106.457l18 48H248a8 8 0 0 0-8 8v48a8 8 0 0 0 8 8h8.457L272 424.473a8 8 0 0 0 8 7.527h160a8 8 0 0 0 8-7.527L463.543 160H472a8 8 0 0 0 8-8v-48a8 8 0 0 0-8-8zM303.496 37.191A7.998 7.998 0 0 0 296 32H192V16h122.664L348 96h-22.457zM437.16 336h-34.969C416.051 323.898 424 306.398 424 288s-7.95-35.898-21.809-48h40.618zM408 288c0 26.508-21.492 48-48 48s-48-21.492-48-48 21.492-48 48-48c26.5.027 47.973 21.5 48 48zm-112 0a63.82 63.82 0 0 0 21.809 48h-34.97l-5.648-96h40.618A63.82 63.82 0 0 0 296 288zm-8.457 128l-3.758-64h152.43l-3.758 64zm156.21-192H276.247l-3.758-64h175.024zM464 144H256v-32h208zm0 0"/><path d="M408 384h-24a8 8 0 0 0 0 16h24a8 8 0 0 0 0-16zm0 0M352 384h-8a8 8 0 0 0 0 16h8a8 8 0 0 0 0-16zm0 0M24 432h208c13.254 0 24-10.746 24-24v-32a23.95 23.95 0 0 0-11.2-20.23 23.212 23.212 0 0 0 0-23.54A23.95 23.95 0 0 0 256 312c0-43.258-29.922-88-80-88H88c-57.777 0-88 44.273-88 88a23.95 23.95 0 0 0 11.2 20.23 23.212 23.212 0 0 0 0 23.54A23.95 23.95 0 0 0 0 376v32c0 13.254 10.746 24 24 24zm216-24a8 8 0 0 1-8 8H24a8 8 0 0 1-8-8v-32a8 8 0 0 1 8-8h62.953l118.984 31.727a7.993 7.993 0 0 0 9.223-4.153L228.945 368H232a8 8 0 0 1 8 8zM24 344a8 8 0 0 1 8-8h192a8 8 0 0 1 0 16H32a8 8 0 0 1-8-8zm187.055 24l-7.293 14.594L149.047 368zM88 240h88c44.145 0 64 42.105 64 72a8 8 0 0 1-8 8H24a8 8 0 0 1-8-8c0-28.945 19.2-72 72-72zm0 0"/><path d="M88 272h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M56 304h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M96 296a8 8 0 0 0 8 8h8a8 8 0 0 0 0-16h-8a8 8 0 0 0-8 8zm0 0M152 304h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M200 304h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M128 272h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0M168 272h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16zm0 0"/></svg>
													</i>

													<h4 class="__title">Provision of Ingredients</h4>

													<p>Armoured catfish Rasbora snook pearl danio tetra. Blue shark marlin yellow-edged moray wels catfish </p>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<i class="__ico">
														<svg width="60" height="60" fill="#f95a3f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M98.086 83.654H79.225c-6.556 0-11.889 5.333-11.889 11.889v18.861c0 6.556 5.333 11.889 11.889 11.889h18.861c6.556 0 11.889-5.333 11.889-11.889V95.543c0-6.556-5.333-11.889-11.889-11.889zm-3.349 27.401H82.574V98.892h12.163v12.163zM164.411 83.654h-18.86c-6.556 0-11.889 5.333-11.889 11.889v18.861c0 6.556 5.333 11.889 11.889 11.889h18.86c6.556 0 11.889-5.333 11.889-11.889V95.543c.001-6.556-5.333-11.889-11.889-11.889zm-3.349 27.401H148.9V98.892h12.162v12.163zM229.103 83.654h-18.861c-6.556 0-11.889 5.333-11.889 11.889v18.861c0 6.556 5.333 11.889 11.889 11.889h18.861c6.556 0 11.889-5.333 11.889-11.889V95.543c0-6.556-5.334-11.889-11.889-11.889zm-3.349 27.401H213.59V98.892h12.163v12.163zM233.374 34.838H74.955a7.619 7.619 0 1 0 0 15.238h158.418a7.619 7.619 0 0 0 7.619-7.619 7.618 7.618 0 0 0-7.618-7.619zM233.374 302.805h-29.091a7.619 7.619 0 1 0 0 15.238h29.091a7.619 7.619 0 1 0 0-15.238z"/><path d="M461.566 210.198l-28.305-1.277a169.364 169.364 0 0 0-18.993-45.773l19.092-20.895a16.249 16.249 0 0 0-.506-22.485L398.546 85.46a16.252 16.252 0 0 0-22.467-.523l-20.95 19.085a169.357 169.357 0 0 0-45.735-18.969l-1.278-28.305a16.246 16.246 0 0 0-16.257-15.54H275.07V18.486C275.071 8.293 266.777 0 256.585 0H53.377C43.185 0 34.892 8.293 34.892 18.486v42.72a7.619 7.619 0 1 0 15.238 0v-42.72a3.25 3.25 0 0 1 3.247-3.248h203.207a3.25 3.25 0 0 1 3.247 3.248v252.12h-18.84V145.086a7.619 7.619 0 0 0-7.619-7.619H74.955a7.619 7.619 0 0 0-7.619 7.619V270.606H50.13V91.273a7.619 7.619 0 1 0-15.238 0v386.194c0 .264.013.524.04.781.414 10.19 8.81 18.359 19.1 18.359h4.335v7.774a7.619 7.619 0 1 0 15.238 0v-7.774h115.134a7.619 7.619 0 1 0 0-15.238H54.033a3.906 3.906 0 0 1-3.902-3.902V285.845H99.85a7.619 7.619 0 1 0 0-15.238H82.574v-21.114h143.179v21.114H129.31a7.619 7.619 0 1 0 0 15.238h130.522v191.621a3.906 3.906 0 0 1-3.902 3.902h-37.103a7.619 7.619 0 1 0 0 15.238h15.9v7.774a7.619 7.619 0 1 0 15.238 0v-7.774h5.965c10.29 0 18.686-8.169 19.1-18.359.026-.257.04-.517.04-.781v-16.949h16.789a16.246 16.246 0 0 0 16.257-15.541l1.278-28.304a169.426 169.426 0 0 0 45.735-18.969l20.95 19.085a16.25 16.25 0 0 0 22.467-.523l34.309-34.31a16.247 16.247 0 0 0 .506-22.484l-19.092-20.895a169.303 169.303 0 0 0 19.058-46.03l28.265-1.317a16.252 16.252 0 0 0 15.515-16.256v-48.519a16.247 16.247 0 0 0-15.541-16.256zm-299.869 24.057h-15.382l-2.485-39.885h20.614l-2.747 39.885zm64.057 0h-48.782l3.236-46.98a7.615 7.615 0 0 0-2.032-5.723 7.614 7.614 0 0 0-5.569-2.42h-36.884a7.62 7.62 0 0 0-7.605 8.093l2.93 47.03H82.574v-81.549h13.868v2.615a7.619 7.619 0 1 0 15.238 0v-2.615h34.864v2.615a7.619 7.619 0 1 0 15.238 0v-2.615h34.88v2.615a7.619 7.619 0 1 0 15.238 0v-2.615h13.853v81.549zm235.128 41.754l-34.027 1.586a7.62 7.62 0 0 0-7.095 6.018c-3.944 18.441-11.147 35.837-21.408 51.704a7.618 7.618 0 0 0 .773 9.276l22.987 25.159c.375.41.361 1.039-.032 1.431l-34.309 34.309a1.034 1.034 0 0 1-1.43.034l-25.211-22.967a7.622 7.622 0 0 0-9.266-.767 154.397 154.397 0 0 1-51.428 21.33 7.618 7.618 0 0 0-6.005 7.104l-1.538 34.065a1.033 1.033 0 0 1-1.035.989h-16.789v-82.978c58.051-3.929 104.077-52.41 104.077-111.438 0-37.891-18.971-72.887-50.747-93.615a7.62 7.62 0 0 0-8.326 12.764c27.447 17.903 43.834 48.128 43.834 80.851 0 50.622-39.2 92.26-88.839 96.157v-192.31c6.89.538 13.681 1.8 20.269 3.785a7.618 7.618 0 0 0 9.493-5.096 7.617 7.617 0 0 0-5.096-9.493 111.336 111.336 0 0 0-24.666-4.482V56.447h16.789c.556 0 1.01.434 1.035.988l1.538 34.067a7.62 7.62 0 0 0 6.006 7.105c18.339 3.953 35.642 11.129 51.427 21.327a7.622 7.622 0 0 0 9.266-.767l25.212-22.966a1.033 1.033 0 0 1 1.429.034l34.309 34.308c.393.393.407 1.022.032 1.432l-22.987 25.157a7.62 7.62 0 0 0-.773 9.277c10.215 15.799 17.401 33.115 21.356 51.469a7.62 7.62 0 0 0 7.105 6.006l34.067 1.537c.555.025.988.48.988 1.036v48.518h.002a1.036 1.036 0 0 1-.987 1.034z"/></svg>
													</i>

													<h4 class="__title">Additional Equipment</h4>

													<p>Pilchard white croaker upside-down catfish lagena soapfish naked-back knifefish, Mozambique tilapia darter</p>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end feature -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pt">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md">
								<div class="section-heading section-heading--left">
									<h5 class="__subtitle">Best match</h5>

									<h2 class="__title">Vend<span>GO</span> Featured Products</h2>
								</div>
							</div>

							<div class="col-12 col-lg-auto">
								<div id="slick-dots--container-2" class="mt-10 text-right"></div>
							</div>
						</div>

						<div class="spacer py-3 py-lg-6"></div>
					</div>

					<!-- start goods -->
					<div class="goods goods--slider">
						<div class="slider-special-layout">
							<div class="slider-special-layout__inner">
								<div class="slider-special-layout__container">

									<div class="js-slick disable-not-active"
										data-slick='{
											"autoplay": true,
											"dots": true,
											"speed": 1200,
											"appendDots": "#slick-dots--container-2",
											"responsive": [
											{
												"breakpoint": 575,
												"settings":{
													"slidesToShow": 2,
													"slidesToScroll": 2
												}
											},
											{
												"breakpoint": 767,
												"settings":{
													"slidesToShow": 3,
													"slidesToScroll": 3
												}
											},
											{
												"breakpoint": 991,
												"settings":{
													"slidesToShow": 4,
													"slidesToScroll": 2
												}
											},
											{
												"breakpoint": 1199,
												"settings":{
													"slidesToShow": 4,
													"slidesToScroll": 2
												}
											}]
										}'>
										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/1.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">1 500$</span>
													<span class="product-price__item product-price__item--old">2200$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Combo Machine TB 100</a></h4>
											</div>

											<span class="product-label product-label--discount">Sale</span>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/2.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">2 250$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Snack Machine Claus 1</a></h4>
											</div>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/3.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">1 150$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Coffe Machine CF96</a></h4>
											</div>

											<span class="product-label product-label--new">New</span>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/4.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">3 500$</span>
													<span class="product-price__item product-price__item--old">4200$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Water Machine WM 2500</a></h4>
											</div>

											<span class="product-label product-label--discount">Sale</span>
										</div>
										<!-- end item -->


										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/1.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">1 500$</span>
													<span class="product-price__item product-price__item--old">2200$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Combo Machine TB 100</a></h4>
											</div>

											<span class="product-label product-label--discount">Sale</span>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/2.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">2 250$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Snack Machine Claus 1</a></h4>
											</div>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/3.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">1 150$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Coffe Machine CF96</a></h4>
											</div>

											<span class="product-label product-label--new">New</span>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--bg-gray">
												<img src="/img/goods_img/4.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">3 500$</span>
													<span class="product-price__item product-price__item--old">4200$</span>
												</div>

												<h4 class="__title"><a href="javascript:void(0)">Water Machine WM 2500</a></h4>
											</div>

											<span class="product-label product-label--discount">Sale</span>
										</div>
										<!-- end item -->
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- end goods -->
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pb section--bg-img jarallax" data-speed="0.3" data-img-position="50% 50%" style="background-image: url(img/bg_1.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-heading section-heading--white section-heading--center">
									<h5 class="__subtitle">Pricing tables</h5>

									<h2 class="__title">Pricing Plans</h2>

									<p>
										Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth
									</p>
								</div>

								<div class="spacer py-6"></div>
							</div>

							<div class="col-12">

								<div class="content-container">
									<!-- start pricing table -->
									<div class="pricing-table pricing-table--s2">
										<div class="__inner">
											<div class="row no-gutters justify-content-sm-center justify-content-md-start">
												<!-- start item -->
												<div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
													<div class="__item">
														<div class="__header">
															<div class="__title h4">Machine Installation</div>

															<div class="__price">$ 585</div>
														</div>

														<div class="__body  pt-8 pb-9">
															<ul class="__desc-list">
																<li><i class="fontello-ok"></i>Prepare for Installation</li>
																<li><i class="fontello-ok"></i>Canthigaster rostrata</li>
																<li><i class="fontello-ok"></i>Spikefish brown trout </li>
																<li><i class="fontello-ok"></i>Loach summer flounder </li>
															</ul>
														</div>

														<div class="__footer">
															<a class="custom-btn custom-btn--medium custom-btn--s1" href="javascript:void(0)">Get Started</a>
														</div>
													</div>
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
													<div class="__item">
														<div class="__header">
															<div class="__title h4">Add Ingredients</div>

															<div class="__price">$ 630</div>
														</div>

														<div class="__body  pt-8 pb-9">
															<ul class="__desc-list">
																<li><i class="fontello-ok"></i>Prepare for Installation</li>
																<li><i class="fontello-ok"></i>Canthigaster rostrata</li>
																<li><i class="fontello-ok"></i>Spikefish brown trout </li>
																<li><i class="fontello-ok"></i>Loach summer flounder </li>
															</ul>
														</div>

														<div class="__footer">
															<a class="custom-btn custom-btn--medium custom-btn--s1" href="javascript:void(0)">Get Started</a>
														</div>
													</div>
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
													<div class="__item">
														<div class="__header">
															<span class="__label"><i class="fontello-star"></i></span>

															<div class="__title h4">Global Energy Network</div>

															<div class="__price">$ 720</div>
														</div>

														<div class="__body  pt-8 pb-9">
															<ul class="__desc-list">
																<li><i class="fontello-ok"></i>Prepare for Installation</li>
																<li><i class="fontello-ok"></i>Canthigaster rostrata</li>
																<li><i class="fontello-ok"></i>Spikefish brown trout </li>
																<li><i class="fontello-ok"></i>Loach summer flounder </li>
															</ul>
														</div>

														<div class="__footer">
															<a class="custom-btn custom-btn--medium custom-btn--s1" href="javascript:void(0)">Get Started</a>
														</div>
													</div>
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
													<div class="__item">
														<div class="__header">
															<div class="__title h4">Sun Energy Analitics</div>

															<div class="__price">$ 950</div>
														</div>

														<div class="__body  pt-8 pb-9">
															<ul class="__desc-list">
																<li><i class="fontello-ok"></i>Prepare for Installation</li>
																<li><i class="fontello-ok"></i>Canthigaster rostrata</li>
																<li><i class="fontello-ok"></i>Spikefish brown trout </li>
																<li><i class="fontello-ok"></i>Loach summer flounder </li>
															</ul>
														</div>

														<div class="__footer">
															<a class="custom-btn custom-btn--medium custom-btn--s1" href="javascript:void(0)">Get Started</a>
														</div>
													</div>
												</div>
												<!-- end item -->
											</div>
										</div>
									</div>
									<!-- end pricing table -->
								</div>

							</div>
						</div>
					</div>

					<div class="shape">
						<svg xmlns="http://www.w3.org/2000/svg" width="1920" height="200" viewBox="0 0 1920 400" preserveAspectRatio="none" style="min-height: 180px">
							<path fill="#fff" fill-rule="evenodd" d="M-3-3h1925v403H-3z" style="mix-blend-mode:screen"/>
						</svg>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row justify-content-lg-center">
							<div class="col-12 col-md-auto col-lg-2">
								<div class="mb-7 mb-md-0">
									<i class="testimonial-ico" data-text="">“</i>
								</div>
							</div>

							<div class="col-12 col-md">
								<div class="section-heading section-heading--left">
									<h5 class="__subtitle">Testimonials</h5>

									<h2 class="__title">People Says About Vend<span>GO</span></h2>
								</div>
							</div>

							<div class="col-12 col-lg-auto">
								<div id="slick-dots--container-0" class="mt-10 text-right"></div>
							</div>

							<div class="col-12 col-lg-8">
								<div class="spacer py-3 py-lg-4"></div>

								<!-- start review -->
								<div class="review review--slider">
									<div class="js-slick"
										data-slick='{
											"autoplay": true,
											"dots": true,
											"speed": 1200,
											"appendDots": "#slick-dots--container-0"
										}'>

										<!-- start item -->
										<div class="review__item">
											<p>
												Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.
											</p>

											<div class="review__item__author-name h4">Sam Peters, Vending Corp LLC</div>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="review__item">
											<p>
												2 Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.
											</p>

											<div class="review__item__author-name h4">Lauren Golf, Programmer</div>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="review__item">
											<p>
												3 Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.
											</p>

											<div class="review__item__author-name h4">Lauren Golf, Programmer</div>
										</div>
										<!-- end item -->
									</div>
								</div>
								<!-- end review -->
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--bg-img jarallax" data-speed="0.3" data-img-position="50% 60%" style="background-image: url(img/bg_4.jpg);background-color: #f95a3f;">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-10 col-lg-8 col-xl-6">
								<div class="section-heading section-heading--white section-heading--center">
									<h5 class="__subtitle">Main products</h5>

									<h2 class="__title">Get in Touch</h2>
								</div>

								<div class="spacer py-6"></div>

								<form class="form-subscribe js-contact-form" action="#">
									<div class="input-wrp">
										<input class="textfield" placeholder="Name" name="name" type="text" />
									</div>

									<div class="input-wrp">
										<input class="textfield" placeholder="Email" name="email" type="text" inputmode="email" x-inputmode="email" />
									</div>

									<label class="input-wrp">
										<textarea class="textfield" placeholder="Message" name="message"></textarea>
									</label>

									<button class="custom-btn custom-btn--big custom-btn--s4 wide" type="submit" role="button">Subscribe</button>

									<div class="form__note"></div>
								</form>
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
										<p><a href="mailto:info@VendiFill.co">info@VendiFill.co</a></p>
									</address>
								</div>

								<div class="footer__item">
									<!-- start social buttons -->
									<div class="s-btns s-btns--white">
										<ul class="d-flex flex-row flex-wrap align-items-center">
											<li><a class="f" href="javascript:void(0)"><i class="fontello-facebook"></i></a></li>
											<li><a class="t" href="javascript:void(0)"><i class="fontello-twitter"></i></a></li>
											<li><a class="y" href="javascript:void(0)"><i class="fontello-youtube-play"></i></a></li>
											<li><a class="i" href="javascript:void(0)"><i class="fontello-instagram"></i></a></li>
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
													<li><a href="javascript:void(0)">About Us</a></li>
													<li><a href="javascript:void(0)">Pages</a></li>
													<li><a href="javascript:void(0)">Blog</a></li>
													<li><a href="javascript:void(0)">Shop</a></li>
													<li><a href="javascript:void(0)">Contacts</a></li>
												</ul>
											</nav>
										</div>
									</div>

									<div class="col-auto col-lg-3">
										<div class="footer__item">
											<nav class="footer__navigation">
												<ul>
													<!-- li class="active" -->
													<li><a href="javascript:void(0)">Documents</a></li>
													<li><a href="javascript:void(0)">Services</a></li>
													<li><a href="javascript:void(0)">Vending Info</a></li>
													<li><a href="javascript:void(0)">News</a></li>
													<li><a href="javascript:void(0)">Support</a></li>
												</ul>
											</nav>
										</div>
									</div>

									<div class="col-auto col-md-5">
										<div class="footer__item">
											<nav class="footer__navigation">
												<ul>
													<!-- li class="active" -->
													<li><a href="javascript:void(0)">Snack Vending Machines</a></li>
													<li><a href="javascript:void(0)">Beverage Vending Machines</a></li>
													<li><a href="javascript:void(0)">Combo Vending Machines</a></li>
													<li><a href="javascript:void(0)">Coffee Machines</a></li>
													<li><a href="javascript:void(0)">ATMs Machines</a></li>
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
									<a class="footer__logo site-logo" href="/index">
										<img class="lazy" src="/img/blank.gif" data-src="/img/site_logo/logo_2.svg" width="155" height="40" alt="demo" />
									</a>
								</div>
							</div>

							<div class="col-auto">
								<div class="footer__item">
									<p class="__copy">
										Copyright © 2019 VendiFill | <a href="javascript:void(0)">Terms & Privacy</a>
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
		<script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script type="text/javascript" src="/js/main.min.js"></script>
	</body>
</html>
