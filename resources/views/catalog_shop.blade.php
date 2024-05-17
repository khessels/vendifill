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

	<body class="page-shop">
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

					<a class="top-bar__cart-btn" href="javascript:void(0)">
						<i class="cart-ico fontello-shopping-cart"><span class="total">1</span></i>
					</a>

					<a class="top-bar__profile-btn" href="/account">
						<i class="profile-ico fontello-user"></i>
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
										<a class="nav-link" href="javascript:void(0);">Pages</a>

										<ul class="submenu">
											<li><a href="/about_us">About Us</a></li>
											<li><a href="/services">Services</a></li>
											<li><a href="/product_details">Product Single</a></li>
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
										<a class="nav-link active" href="javascript:void(0);">Shop</a>

										<ul class="submenu">
											<li><a class="active" href="/shop_catalog">Catalog</a></li>
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
								<div class="d-sm-table">
									<div class="d-sm-table-cell align-middle">
										<a class="top-bar__profile-btn" href="/account"><i class="profile-ico fontello-user"></i></a>
									</div>

									<div class="d-sm-table-cell align-middle">
										<a class="custom-btn" href="javascript:void(0)">
											<i class="cart-ico fontello-shopping-cart"><span class="total">1</span></i>1 525.00$
										</a>
									</div>
								</div>
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
				data-img-position="50% 50%"
				style="background-image: url(img/hero_img/2.jpg);background-color: #f18226">

				<div class="hero__inner">
					<div class="container">
						<div class="row">
							<div class="col-11 col-sm-12">
								<h4 class="hero__subtitle">VendGo</h4>
								<h1 class="hero__title">Shop Catalog</h1>
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
				<section class="section section--gray-bg">
					<div class="container">
						<!-- start goods catalog -->
						<div class="goods-catalog">
							<div class="row">
								<div class="col-12 col-md-4 col-lg-3">

									<div class="__bg"></div>

									<!-- start sidebar -->
									<aside class="sidebar goods-filter">
										<span class="goods-filter-btn-close js-toggle-filter"><i class="fontello-cancel"></i></span>

										<div class="goods-filter__inner">
											<form action="#">
												<!-- start widget -->
												<div class="widget widget--categories">
													<h4 class="widget-title">Category</h4>

													<ul class="list">
														<li class="list__item">
															<a class="list__item__link" href="javascript:void(0)">Combo Machine</a>
															<i class="list__item__arrow js-toggle-submenu"></i>

															<ul class="list__submenu">
																<li class="list__item">
																	<a class="list__item__link active" href="javascript:void(0)">Vending Machine</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Ingredients</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
																</li>
															</ul>
														</li>

														<li class="list__item">
															<a class="list__item__link" href="javascript:void(0)">Coffe Machine</a>
															<i class="list__item__arrow js-toggle-submenu"></i>

															<ul class="list__submenu">
																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Ingredients</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
																</li>
															</ul>
														</li>

														<li class="list__item">
															<a class="list__item__link" href="javascript:void(0)">Snack Machine</a>
															<i class="list__item__arrow js-toggle-submenu"></i>

															<ul class="list__submenu">
																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Ingredients</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
																</li>
															</ul>
														</li>

														<li class="list__item">
															<a class="list__item__link" href="javascript:void(0)">Healthy Snacks</a>
															<i class="list__item__arrow js-toggle-submenu"></i>

															<ul class="list__submenu">
																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Ingredients</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
																</li>
															</ul>
														</li>

														<li class="list__item">
															<a class="list__item__link" href="javascript:void(0)">Eco Vending</a>
															<i class="list__item__arrow js-toggle-submenu"></i>

															<ul class="list__submenu">
																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Ingredients</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
																</li>
															</ul>
														</li>

														<li class="list__item">
															<a class="list__item__link" href="javascript:void(0)">Ingredients</a>
															<i class="list__item__arrow js-toggle-submenu"></i>

															<ul class="list__submenu">
																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Ingredients</a>
																</li>

																<li class="list__item">
																	<a class="list__item__link" href="javascript:void(0)">Parts for Machine</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- end widget -->

												<!-- start widget -->
												<div class="widget widget--price">
													<h4 class="widget-title">Price</h4>

													<div>
														<input type="text" class="js-range-slider" name="my_range" value=""
															data-type="double"
															data-min="0"
															data-max="1000"
															data-from="200"
															data-to="600"
															data-grid="true"
															data-skin="round"
															data-prefix="$"
															data-hide-min-max="true"
														/>

														<input class="range-slider-min-value" type="hidden" name="min-value">
														<input class="range-slider-max-value" type="hidden" name="max-value">
													</div>
												</div>
												<!-- end widget -->

												<!-- start widget -->
												<div class="widget widget--brands">
													<h4 class="widget-title">Brands</h4>

													<ul>
														<li>
															<label class="checkfield">
																<input type="checkbox" />
																<i></i>
																Combo Max
															</label>
														</li>

														<li>
															<label class="checkfield">
																<input type="checkbox" />
																<i></i>
																VendGo
															</label>
														</li>

														<li>
															<label class="checkfield">
																<input type="checkbox" />
																<i></i>
																Siesla Ven
															</label>
														</li>

														<li>
															<label class="checkfield">
																<input type="checkbox" />
																<i></i>
																Venselta
															</label>
														</li>

														<li>
															<label class="checkfield">
																<input type="checkbox" />
																<i></i>
																Cooffedan
															</label>
														</li>
													</ul>
												</div>
												<!-- end widget -->

												<!-- start widget -->
												<div class="widget widget--colors">
													<h4 class="widget-title">Colors</h4>

													<ul>
														<li>
															<label class="color-label">
																<input type="checkbox" value="color 1" checked/>

																<span style="background-color: #f95a3f"></span>
															</label>
														</li>

														<li>
															<label class="color-label">
																<input type="checkbox" value="color 2" />

																<span style="background-color: #3f9ff9"></span>
															</label>
														</li>

														<li>
															<label class="color-label">
																<input type="checkbox" value="color 3" />

																<span style="background-color: #21e280"></span>
															</label>
														</li>

														<li>
															<label class="color-label">
																<input type="checkbox" value="color 4" />

																<span style="background-color: #ffa619"></span>
															</label>
														</li>
													</ul>
												</div>
												<!-- end widget -->

												<!-- start widget -->
												<div class="widget widget--characteristics">
													<h4 class="widget-title">Other Characteristics</h4>

													<ul>
														<li>
															<label class="radiofield">
																<input type="radio" name="group1" checked/>
																<i></i>
																15 Kw
															</label>
														</li>

														<li>
															<label class="radiofield">
																<input type="radio" name="group1" />
																<i></i>
																25 Kw
															</label>
														</li>

														<li>
															<label class="radiofield">
																<input type="radio" name="group1" />
																<i></i>
																30 Kw
															</label>
														</li>
													</ul>
												</div>
												<!-- end widget -->

												<!-- start widget -->
												<div class="widget widget--tags">
													<h4 class="widget-title">Tags</h4>

													<div class="tags-list">
														<ul class="tags-list__list">
															<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Vending</a></li>
															<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Snack Machine</a></li>
															<li class="tags-list__item"><a class="tags-list__link active" href="javascript:void(0)">Ingredients</a></li>
															<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Coffe Rent</a></li>
															<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Vending Shop</a></li>
															<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Business</a></li>
														</ul>
													</div>
												</div>
												<!-- end widget -->

												<div class="spacer py-5 py-lg-6"></div>

												<button class="custom-btn custom-btn--big custom-btn--s3 wide" type="submit" role="button">Sort</button>
											</form>
										</div>
									</aside>
									<!-- end sidebar -->

								</div>

								<div class="col-12 col-md-8 col-lg-9">
									<div class="row align-items-center justify-content-between">
										<div class="col-auto">
											<span class="goods-filter-btn-open js-toggle-filter"><i class="fontello-filter"></i>Filter</span>
										</div>

										<div class="col-auto">
											<!-- start ordering -->
											<form class="ordering" action="">
												<div class="d-table">
													<div class="d-table-cell align-middle">
														<span>Sort by:</span>
													</div>

													<div class="d-table-cell align-middle">
														<select class="js-select">
															<option value="1">New</option>
															<option value="2">Sale</option>
															<option value="3">Hot</option>
														</select>
													</div>
												</div>
											</form>
											<!-- end ordering -->
										</div>
									</div>

									<div class="spacer py-3"></div>

									<!-- start goods -->
									<div class="goods">
										<div class="__inner">
											<div class="row">
												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/1.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/2.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/3.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/4.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/2.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/3.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/4.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/2.jpg" alt="demo" />

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
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-lg-4">
													<div class="__item">
														<figure class="__image __image--shadow __image--bg-white">
															<img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/3.jpg" alt="demo" />

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
												</div>
												<!-- end item -->
											</div>
										</div>
									</div>
									<!-- end goods -->

									<div class="spacer py-5 py-lg-7"></div>

									<!-- start pagination -->
									<nav aria-label="Page navigation example">
										<ul class="pagination justify-content-center justify-content-sm-end">
											<li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
										</ul>
									</nav>
									<!-- end pagination -->

								</div>
							</div>
						</div>
						<!-- end goods catalog -->
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
										Copyright © 2019 VendGo | <a href="javascript:void(0)">Terms & Privacy</a>
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
