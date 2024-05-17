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

					<a class="top-bar__cart-btn" href="#">
						<i class="cart-ico fontello-shopping-cart"><span class="total">1</span></i>
					</a>

					<a class="top-bar__profile-btn" href="account">
						<i class="profile-ico fontello-user"></i>
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
										<a class="nav-link active" href="javascript:void(0);">Shop</a>

										<ul class="submenu">
											<li><a href="shop_catalog">Catalog</a></li>
											<li><a class="active" href="product_single">Single Product</a></li>
											<li><a href="/cart/checkout">Cart & Checkout</a></li>
											<li><a href="account">Account</a></li>
										</ul>
									</li>

									<li>
										<a class="nav-link" href="contact">Contacts</a>
									</li>

									<li class="has-submenu">
										<a class="nav-link" href="javascript:void(0);">Elements</a>

										<ul class="submenu">
											<li><a href="/element/accordions">Accordion</a></li>
											<li><a href="/element/alerts">Alerts</a></li>
											<li><a href="elements-counters">Counters</a></li>
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
								<div class="d-sm-table">
									<div class="d-sm-table-cell align-middle">
										<a class="top-bar__profile-btn" href="account"><i class="profile-ico fontello-user"></i></a>
									</div>

									<div class="d-sm-table-cell align-middle">
										<a class="custom-btn" href="#">
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
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<div class="product-single">
									<div class="content-container">

										<div class="row justify-content-xl-between">
											<div class="col-12 col-md-6 col-xl-5">
												<!-- start gallery -->
												<div class="__gallery">
													<div class="js-slick"
														data-slick='{
															"autoplay": true,
															"dots": true,
															"speed": 1200
														}'>

														<figure class="__img">
															<img src="img/product-single__img/1.png" width="222" alt="demo" />
														</figure>

														<figure class="__img">
															<img src="img/product-single__img/2.png" width="200" alt="demo" />
														</figure>
													</div>

													<span class="product-label product-label--discount">Sale</span>
												</div>
												<!-- end gallery -->

												<div class="spacer py-5 d-md-none"></div>
											</div>

											<div class="col-12 col-md-6">
												<h3 class="__name">VendGo Snack Machine</h3>

												<div class="__categories">
													Category
													<span>Snack</span>
												</div>

												<div class="__review">
													<div class="d-table">
														<div class="d-table-cell align-middle">
															<div class="rating">
																<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																<span class="rating__item"><i class="fontello-star"></i></span>
															</div>
														</div>

														<div class="d-table-cell align-middle">
															<span class="pl-3">(3 Review)</span>
														</div>
													</div>
												</div>

												<p>
													Pacific hake yellowfin pike mud cat sand goby, mahseer round whitefish. Platyfish eelpout, blue danio Alaska blackfish dhufish sheepshead minnow warty angler ghost fish bamboo shark
												</p>

												<div class="spacer py-1"></div>

												<ul class="check-list">
													<li><i class="ico-checked fontello-ok"></i><strong>Fresh Sandwiches & Wraps</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Bagels & Submarines</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Soups & Cereals</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Fresh Fruit & Veggies</strong></li>
													<li><i class="ico-checked fontello-ok"></i><strong>Pastries & Muffins</strong></li>
												</ul>

												<div class="spacer py-3"></div>

												<div class="d-sm-table">
													<div class="d-sm-table-cell align-baseline pb-4 pb-sm-0 pr-sm-3">
														<div class="h4">Tags</div>
													</div>

													<div class="d-sm-table-cell align-baseline">
														<div class="tags-list">
															<ul class="tags-list__list">
																<li class="tags-list__item"><a class="tags-list__link" href="#">Vending</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="#">Snack Machine</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="#">Ingredients</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="#">Coffe Rent</a></li>
															</ul>
														</div>
													</div>
												</div>

												<div class="product-price">
													<span class="product-price__item product-price__item--old">$1 600.00</span>
													<span class="product-price__item product-price__item--new">$1 500.00</span>
												</div>

												<form class="__add-to-cart" action="#">
													<div class="d-table">
														<div class="d-table-cell align-top">
															<div class="quantity-counter js-quantity-counter">
																<span class="__btn __btn--minus"></span>
																<input class="__q-input" type="text" value="1" />
																<span class="__btn __btn--plus"></span>
															</div>
														</div>

														<div class="d-table-cell align-top">
															<button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button"><i class="fontello-shopping-cart"></i>Add to Cart</button>
														</div>
													</div>
												</form>
											</div>

											<div class="col-12">
												<div class="spacer py-5 py-md-10"></div>

												<!-- start tab -->
												<div class="tab-container tab-container--hor tab-container--s2">
													<nav class="tab-nav tab-nav--top">
														<ul class="tab-nav__list">
															<li class="tab-nav__item">
																<a class="tab-nav__link" href="#">Description</a>
															</li>

															<li class="tab-nav__item">
																<a class="tab-nav__link" href="#">Reviews</a>
															</li>
														</ul>
													</nav>

													<div class="tab-content">
														<div class="tab-content__item is-visible">
															<div class="row justify-content-xl-between">
																<div class="col-12 col-md-6">
																	<h3>Specifications Snack Machine by VendGo</h3>

																	<p>
																		Pacific hake yellowfin pike mud cat sand goby, mahseer round whitefish. Platyfish eelpout, blue danio Alaska blackfish dhufish sheepshead minnow warty angler ghost fish bamboo shark.
																	</p>

																	<p>
																		Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth tetra barreleye springfish chubsucker Pacific hake. Threadfin bream sandburrower; bigmouth buffalo beluga sturgeon. Ronquil southern sandfish smalleye squaretail hoki four-eyed fish.
																	</p>

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

																	<div class="spacer py-3 d-md-none"></div>
																</div>

																<div class="col-12 col-md-6 col-xl-5">
																	<h4>Snack Machine Key Features</h4>

																	<ul>
																		<li>500 cup daily capacity</li>
																		<li>Large LED lit serving area to enhance the user experience </li>
																		<li>Jug facility for those all-important meetings</li>
																		<li>Machine works with both cash and cashless payment</li>
																	</ul>

																	<div class="spacer py-2"></div>

																	<div class="row">
																		<div class="col-12 col-sm-6 col-md-12 col-lg-6">
																			<ul class="check-list">
																				<li><i class="ico-checked fontello-ok"></i><strong>Machine Installation</strong></li>
																				<li><i class="ico-checked fontello-ok"></i><strong>Eco Vending</strong></li>
																				<li><i class="ico-checked fontello-ok"></i><strong>Quick Delivery</strong></li>
																				<li><i class="ico-checked fontello-ok"></i><strong>Healthy Potato Chips</strong></li>
																			</ul>
																		</div>

																		<div class="col-12 col-sm-6 col-md-12 col-lg-6">
																			<div class="spacer py-2 d-sm-none d-md-block d-lg-none"></div>

																			<ul class="check-list">
																				<li><i class="ico-checked fontello-ok"></i><strong>Healthy Energy Bars</strong></li>
																				<li><i class="ico-checked fontello-ok"></i><strong>Gluten-Free Snacks</strong></li>
																				<li><i class="ico-checked fontello-ok"></i><strong>Kosher Snacks</strong></li>
																				<li><i class="ico-checked fontello-ok"></i><strong>Healthy Snacks</strong></li>
																			</ul>
																		</div>
																	</div>

																	<div class="spacer py-2"></div>

																	<p>
																		<strong>Ingredients</strong>
																	</p>

																	<p>
																		<img class="lazy" src="img/blank.gif" data-src="img/img_ingredients.png" width="361" height="81" alt="demo">
																	</p>

																	<div class="spacer py-2"></div>

																	<!-- start product brochure -->
																	<div class="product-brochure">
																		<div class="product-brochure__inner">
																			<p>Download Brochure (PDF)</p>

																			<p><a class="custom-btn custom-btn--big" href="#">Download</a></p>
																		</div>
																	</div>
																	<!-- end product brochure -->
																</div>
															</div>
														</div>

														<div class="tab-content__item">
															<h3>Reviews of  Vendgo Snack Machine</h3>
															<div class="spacer py-2"></div>

															<div class="row justify-content-xl-between">
																<div class="col-12 col-md-7 col-lg-8 col-xl-7">
																	<!-- start comments list -->
																	<ul class="comments-list">
																		<li class="comment">
																			<table>
																				<tr>
																					<td class="align-top">
																						<div class="d-none d-lg-block">

																							<div class="comment__author-img">
																								<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_1.jpg" alt="demo" />
																							</div>

																						</div>
																					</td>

																					<td class="align-top w-100">
																						<div class="row align-items-lg-end">
																							<div class="col-12 col-lg-auto">
																								<div class="d-flex align-items-center mb-3 mb-lg-0">
																									<div class="d-lg-none">

																										<div class="comment__author-img">
																											<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_1.jpg" alt="demo" />
																										</div>

																									</div>

																									<span class="comment__author-name">Jason Smith</span>
																								</div>
																							</div>

																							<div class="col-12 col-lg">
																								<div class="post-meta">
																									<div class="row justify-content-between align-items-center">
																										<div class="col-auto">
																											<time class="post-meta__item __date-post">May 21, 2019 23:45:58</time>
																										</div>

																										<div class="col-auto">
																											<div class="rating">
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item"><i class="fontello-star"></i></span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<p>
																							Armoured catfish Rasbora snook pearl danio tetra. Blue shark marlin yellow-edged moray wels catfish queen triggerfish jellynose fish noodlefish
																						</p>
																					</td>
																				</tr>
																			</table>
																		</li>

																		<li class="comment">
																			<table>
																				<tr>
																					<td class="align-top">
																						<div class="d-none d-lg-block">

																							<div class="comment__author-img">
																								<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_2.jpg" alt="demo" />
																							</div>

																						</div>
																					</td>

																					<td class="align-top w-100">
																						<div class="row align-items-lg-end">
																							<div class="col-12 col-lg-auto">
																								<div class="d-flex align-items-center mb-3 mb-lg-0">
																									<div class="d-lg-none">

																										<div class="comment__author-img">
																											<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_2.jpg" alt="demo" />
																										</div>

																									</div>

																									<span class="comment__author-name">Alan Coper</span>
																								</div>
																							</div>

																							<div class="col-12 col-lg">
																								<div class="post-meta">
																									<div class="row justify-content-between align-items-center">
																										<div class="col-auto">
																											<time class="post-meta__item __date-post">May 21, 2019 23:45:58</time>
																										</div>

																										<div class="col-auto">
																											<div class="rating">
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<p>
																							Yellowbelly tail catfish yellowbanded perch, madtom Long-finned sand diver turkeyfish lake chub, warty angler oilfish orangespine unicorn fish. Dwarf gourami gopher rockfish tailor summer flounder shark; whale shark silver dollar, cobia sheatfish, bat ray Redhorse sucker
																						</p>
																					</td>
																				</tr>
																			</table>
																		</li>

																		<li class="comment">
																			<table>
																				<tr>
																					<td class="align-top">
																						<div class="d-none d-lg-block">

																							<div class="comment__author-img">
																								<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_3.jpg" alt="demo" />
																							</div>

																						</div>
																					</td>

																					<td class="align-top w-100">
																						<div class="row align-items-lg-end">
																							<div class="col-12 col-lg-auto">
																								<div class="d-flex align-items-center mb-3 mb-lg-0">
																									<div class="d-lg-none">

																										<div class="comment__author-img">
																											<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_3.jpg" alt="demo" />
																										</div>

																									</div>

																									<span class="comment__author-name">Sam Peters</span>
																								</div>
																							</div>

																							<div class="col-12 col-lg">
																								<div class="post-meta">
																									<div class="row justify-content-between align-items-center">
																										<div class="col-auto">
																											<time class="post-meta__item __date-post">May 21, 2019 23:45:58</time>
																										</div>

																										<div class="col-auto">
																											<div class="rating">
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<p>
																							Armoured catfish Rasbora snook pearl danio tetra. Blue shark marlin yellow-edged moray wels catfish queen triggerfish jellynose fish noodlefish
																						</p>
																					</td>
																				</tr>
																			</table>
																		</li>


																		<li class="comment">
																			<table>
																				<tr>
																					<td class="align-top">
																						<div class="d-none d-lg-block">

																							<div class="comment__author-img">
																								<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_1.jpg" alt="demo" />
																							</div>

																						</div>
																					</td>

																					<td class="align-top w-100">
																						<div class="row align-items-lg-end">
																							<div class="col-12 col-lg-auto">
																								<div class="d-flex align-items-center mb-3 mb-lg-0">
																									<div class="d-lg-none">

																										<div class="comment__author-img">
																											<img class="img-fluid lazy" width="70" height="70" src="img/blank.gif" data-src="img/ava_1.jpg" alt="demo" />
																										</div>

																									</div>

																									<span class="comment__author-name">Jason Smith</span>
																								</div>
																							</div>

																							<div class="col-12 col-lg">
																								<div class="post-meta">
																									<div class="row justify-content-between align-items-center">
																										<div class="col-auto">
																											<time class="post-meta__item __date-post">May 21, 2019 23:45:58</time>
																										</div>

																										<div class="col-auto">
																											<div class="rating">
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
																												<span class="rating__item"><i class="fontello-star"></i></span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<p>
																							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum soluta aliquam non at, corporis labore illum possimus id. Fugiat numquam dignissimos libero consequuntur, ut autem sed ab. Temporibus, sapiente, incidunt.</span>
																							<span>Eaque nulla possimus, unde reprehenderit impedit nobis ex, asperiores, quae porro a id quidem illo! Recusandae eveniet, nobis veritatis obcaecati ducimus itaque quaerat nihil voluptatem voluptatum quia, tenetur quod. Ipsa!</span>
																							<span>Saepe consequuntur adipisci earum odio nihil reprehenderit deserunt numquam nesciunt quod, eaque totam, magnam quam omnis autem nostrum officiis recusandae ut, sunt quos ullam consectetur vero architecto accusamus aperiam cupiditate?</span>
																						</p>
																					</td>
																				</tr>
																			</table>
																		</li>
																	</ul>
																	<!-- end comments list -->
																</div>

																<div class="col-12 col-md-5 col-lg-4">
																	<div class="spacer py-5 d-md-none"></div>

																	<div class="__add-review sticky-top">
																		<h4>Leave Review</h4>

																		<form action="#">
																			<div class="input-wrp">
																				<input class="textfield" type="text" value="" placeholder="Name *" />
																			</div>

																			<div class="input-wrp">
																				<input class="textfield" type="text" value="" placeholder="Email *" inputmode="email" x-inputmode="email" />
																			</div>

																			<div class="input-wrp">
																				<textarea class="textfield" placeholder="Your review *"></textarea>
																			</div>

																			<fieldset class="rating">
																				<span class="__note">Please rate:</span>

																				<input type="radio" id="star5" name="rating" value="5" />
																				<label class="rating__item" for="star5" title="Awesome - 5 stars"><i class="fontello-star"></i></label>

																				<input type="radio" id="star4" name="rating" value="4" />
																				<label class="rating__item" for="star4" title="Pretty good - 4 stars"><i class="fontello-star"></i></label>

																				<input type="radio" id="star3" name="rating" value="3" />
																				<label class="rating__item" for="star3" title="Meh - 3 stars"><i class="fontello-star"></i></label>

																				<input type="radio" id="star2" name="rating" value="2" />
																				<label class="rating__item" for="star2" title="Kinda bad - 2 stars"><i class="fontello-star"></i></label>

																				<input type="radio" id="star1" name="rating" value="1" />
																				<label class="rating__item" for="star1" title="Sucks big time - 1 star"><i class="fontello-star"></i></label>
																			</fieldset>

																			<button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Send</button>
																		</form>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- end tab -->
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--bg-img section--bg-gray-2 jarallax" data-speed="0.3" data-img-position="50% 60%" style="background-image: url(img/bg_6.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<div class="section-heading section-heading--left">
									<h2 class="__title">Vend<span>GO</span> Featured Products</h2>
								</div>

								<div class="spacer py-6"></div>

								<!-- start goods -->
								<div class="goods goods--slider">
									<div class="js-slick"
										data-slick='{
											"autoplay": true,
											"dots": true,
											"speed": 1200,
											"slidesToShow": 1,
											"slidesToScroll": 1,
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
													"slidesToScroll": 1
												}
											},
											{
												"breakpoint": 991,
												"settings":{
													"slidesToShow": 4,
													"slidesToScroll": 1
												}
											},
											{
												"breakpoint": 1199,
												"settings":{
													"slidesToShow": 4,
													"slidesToScroll": 1
												}
											}]
										}'>
										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--shadow __image--bg-white">
												<img src="img/goods_img/1.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="#">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">1 500$</span>
													<span class="product-price__item product-price__item--old">2200$</span>
												</div>

												<h4 class="__title"><a href="#">Combo Machine TB 100</a></h4>
											</div>

											<span class="product-label product-label--discount">Sale</span>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--shadow __image--bg-white">
												<img src="img/goods_img/2.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="#">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">2 250$</span>
												</div>

												<h4 class="__title"><a href="#">Snack Machine Claus 1</a></h4>
											</div>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--shadow __image--bg-white">
												<img src="img/goods_img/3.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="#">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">1 150$</span>
												</div>

												<h4 class="__title"><a href="#">Coffe Machine CF96</a></h4>
											</div>

											<span class="product-label product-label--new">New</span>
										</div>
										<!-- end item -->

										<!-- start item -->
										<div class="__item">
											<figure class="__image __image--shadow __image--bg-white">
												<img src="img/goods_img/4.jpg" alt="demo" />

												<div class="__btn">
													<a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="#">Add to Cart</a>
												</div>
											</figure>

											<div class="__content">
												<div class="product-price">
													<span class="product-price__item product-price__item--new">3 500$</span>
													<span class="product-price__item product-price__item--old">4200$</span>
												</div>

												<h4 class="__title"><a href="#">Water Machine WM 2500</a></h4>
											</div>

											<span class="product-label product-label--discount">Sale</span>
										</div>
										<!-- end item -->
									</div>
								</div>
								<!-- end goods -->

							</div>
						</div>
					</div>
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
