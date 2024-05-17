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

	<body class="page-post-single">
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
										<a class="nav-link active" href="/blog">Blog</a>
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
								<h4 class="hero__subtitle">VendGo</h4>
								<h1 class="hero__title">Blog Post</h1>
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
						<div class="row justify-content-lg-center">
							<div class="col-12 col-lg-10 col-xl-8">

								<div class="pb-6 pb-lg-10">
									<div class="content-container">
										<!-- start posts -->
										<div class="posts">
											<div class="__item">
												<img class="lazy" width="770" height="415" src="/img/blank.gif" data-src="/img/posts_img/single_post.jpg" alt="demo" />

												<div class="mt-6 mt-lg-10 mb-lg-4">
													<div class="row align-items-sm-center justify-content-sm-between">
														<div class="col-12 col-sm-auto mb-4">
															<div class="post-author">
																<div class="d-table">
																	<div class="d-table-cell align-middle">
																		<div class="post-author__img">
																			<img class="lazy" width="50" height="50" src="/img/blank.gif" data-src="/img/ava_1.jpg" alt="demo" />
																		</div>
																	</div>

																	<div class="d-table-cell align-middle">
																		<span class="post-author__name">John Carter</span>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-auto mb-4">
															<div class="post-meta">
																<div class="row justify-content-between align-items-center">
																	<div class="col-auto">
																		<span class="post-meta__item __date-post">May 21, 2019</span>
																	</div>

																	<div class="col-auto">
																		<time class="post-meta__item __comment-post"><i class="fontello-chat"></i>10</time>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<h2>Combo Machine</h2>

												<p>
													<strong>Zebra tilapia ocean perch ocean sunfish bichir. Monkfish eel soapfish sabertooth fish whiptail gulper long-finned char hussar, Pacific hake yellowfin pike mud cat sand goby, mahseer round whitefish. Platyfish eelpout, blue danio Alaska blackfish dhufish sheepshead minnow warty angler ghost fish bamboo shark</strong>
												</p>

												<p>
													Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South tetra barreleye springfish chubsucker Pacific hake sea devil New <a href="javascript:void(0)">Zealand smelt grunt Redfin perch rock</a> beauty snake mudhead: boafish rock bass pompano dolphinfish. Pineconefish ribbonbearer climbing perch tenpounder emperor bream, labyrinth fish half-gill four-eyed fish Atlantic silverside
												</p>

												<p>
													<strong>Minnow arrowtooth eel darter Atlantic herring southern sandfish. Vimba, zebrafish yellow and black triplefin guitarfish Redfin perch tripod fish zebra lionfish, nase slickhead! Jewelfish angler <a href="javascript:void(0)">Devario gray reef shark forehead</a> brooder. Pike conger alewife sand lance orange roughy danio straptail jawfish.</strong>
												</p>

												<div class="spacer"></div>

												<ul>
													<li>Beauty snake mudhead boafish rock bass</li>
													<li>Pineconefish ribbonbearer climbing perch</li>
													<li>Tenpounder emperor bream labyrinth fish</li>
													<li>Half-gill four-eyed fish Atlantic silverside</li>
												</ul>

												<div class="spacer"></div>

												<p>
													Pineconefish ribbonbearer climbing perch tenpounder emperor bream, labyrinth fish half-gill four-eyed fish Atlantic silversideFlagfin Atlantic saury, stonecat beachsalmon, silver dollar South tetra barreleye springfish chubsucker Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish.
												</p>

												<blockquote class="blockquot">
													<p>
														Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet. Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel
													</p>
												</blockquote>

												<hr />

												<div class="d-sm-table">
													<div class="d-sm-table-cell align-baseline pb-4 pb-sm-0 pr-sm-6">
														<div class="h4">Tags</div>
													</div>

													<div class="d-sm-table-cell align-baseline">
														<div class="tags-list">
															<ul class="tags-list__list">
																<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Vending</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Snack Machine</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Ingredients</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Coffe Rent</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Vending Shop</a></li>
																<li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Business</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- end posts -->
									</div>
								</div>

								<div class="py-6 py-lg-10">
									<h3 class="mb-7">Recent Posts</h3>

									<!-- start posts -->
									<div class="posts">
										<div class="__inner">
											<div class="row">
												<!-- start item -->
												<div class="col-12 col-sm-6 col-xl-5 d-sm-flex">
													<div class="__item __item--preview __item--shadow">
														<div class="__body">
															<div class="__content">
																<h5 class="__category"><a href="javascript:void(0)">Snacks</a></h5>

																<h4 class="__title"><a href="javascript:void(0)">Corparate Problem in Vending Business</a></h4>

																<p>
																	Armoured catfish Rasbora snook pearl danio tetra. Blue shark marlin yellow-edged moray wels catfish queen triggerfish jellynose fish noodle
																</p>
															</div>
														</div>

														<div class="__footer">
															<div class="__content">
																<div class="post-meta">
																	<div class="row justify-content-between align-items-center">
																		<div class="col-auto">
																			<span class="post-meta__item __date-post">May 21, 2019</span>
																		</div>

																		<div class="col-auto">
																			<time class="post-meta__item __comment-post"><i class="fontello-chat"></i>10</time>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-sm-6 col-xl-5 d-sm-flex">
													<div class="__item __item--preview __item--shadow" style="background-image: url(img/posts_img/2.jpg);">
														<div class="__body  d-sm-flex align-items-sm-end">
															<div class="__content">
																<h5 class="__category"><a href="javascript:void(0)">Combo Machine</a></h5>

																<h4 class="__title"><a class="text-white" href="javascript:void(0)">Vending Solutions</a></h4>
															</div>
														</div>

														<div class="__footer">
															<div class="__content">
																<div class="post-meta text-white">
																	<div class="row justify-content-between align-items-center">
																		<div class="col-auto">
																			<span class="post-meta__item __date-post text-white" style="opacity: 0.75">May 21, 2019</span>
																		</div>

																		<div class="col-auto">
																			<time class="post-meta__item __comment-post text-white" style="opacity: 0.75"><i class="fontello-chat"></i>5</time>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- end item -->
											</div>
										</div>
									</div>
									<!-- end posts -->
								</div>

								<div class="py-6 py-lg-10">
									<h3 class="mb-7">Comments</h3>

									<!-- start comments list -->
									<ul class="comments-list">
										<li class="comment">
											<table>
												<tr>
													<td class="align-top">
														<div class="d-none d-lg-block">

															<div class="comment__author-img">
																<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_1.jpg" alt="demo" />
															</div>

														</div>
													</td>

													<td class="align-top w-100">
														<div class="row align-items-lg-end">
															<div class="col-12 col-lg-auto">
																<div class="d-flex align-items-center mb-3 mb-lg-0">
																	<div class="d-lg-none">

																		<div class="comment__author-img">
																			<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_1.jpg" alt="demo" />
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
																			<a class="post-meta__item __reply" href="javascript:void(0)"><i class="fontello-reply"></i></a>
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

											<ul class="comments-list">
												<li class="comment">
													<table>
														<tr>
															<td class="align-top">
																<div class="d-none d-lg-block">

																	<div class="comment__author-img">
																		<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_2.jpg" alt="demo" />
																	</div>

																</div>
															</td>

															<td class="align-top w-100">
																<div class="row align-items-lg-end">
																	<div class="col-12 col-lg-auto">
																		<div class="d-flex align-items-center mb-3 mb-lg-0">
																			<div class="d-lg-none">

																				<div class="comment__author-img">
																					<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_2.jpg" alt="demo" />
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
																					<a class="post-meta__item __reply" href="javascript:void(0)"><i class="fontello-reply"></i></a>
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

													<ul class="comments-list">
														<li class="comment">
															<table>
																<tr>
																	<td class="align-top">
																		<div class="d-none d-lg-block">

																			<div class="comment__author-img">
																				<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_1.jpg" alt="demo" />
																			</div>

																		</div>
																	</td>

																	<td class="align-top w-100">
																		<div class="row align-items-lg-end">
																			<div class="col-12 col-lg-auto">
																				<div class="d-flex align-items-center mb-3 mb-lg-0">
																					<div class="d-lg-none">

																						<div class="comment__author-img">
																							<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_1.jpg" alt="demo" />
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
																							<a class="post-meta__item __reply" href="javascript:void(0)"><i class="fontello-reply"></i></a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<p>
																			Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites to developing apps, beautiful design to adventure cinematography. Designers, engineers, creatives, makers, developers, artists, unite.
																		</p>
																	</td>
																</tr>
															</table>
														</li>
													</ul>
												</li>

												<li class="comment">
													<table>
														<tr>
															<td class="align-top">
																<div class="d-none d-lg-block">

																	<div class="comment__author-img">
																		<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_3.jpg" alt="demo" />
																	</div>

																</div>
															</td>

															<td class="align-top w-100">
																<div class="row align-items-lg-end">
																	<div class="col-12 col-lg-auto">
																		<div class="d-flex align-items-center mb-3 mb-lg-0">
																			<div class="d-lg-none">

																				<div class="comment__author-img">
																					<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_3.jpg" alt="demo" />
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
																					<a class="post-meta__item __reply" href="javascript:void(0)"><i class="fontello-reply"></i></a>
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
											</ul>
										</li>

										<li class="comment">
											<table>
												<tr>
													<td class="align-top">
														<div class="d-none d-lg-block">

															<div class="comment__author-img">
																<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_2.jpg" alt="demo" />
															</div>

														</div>
													</td>

													<td class="align-top w-100">
														<div class="row align-items-lg-end">
															<div class="col-12 col-lg-auto">
																<div class="d-flex align-items-center mb-3 mb-lg-0">
																	<div class="d-lg-none">

																		<div class="comment__author-img">
																			<img class="img-fluid lazy" width="70" height="70" src="/img/blank.gif" data-src="/img/ava_2.jpg" alt="demo" />
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
																			<a class="post-meta__item __reply" href="javascript:void(0)"><i class="fontello-reply"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<p>
															Minnow arrowtooth eel darter Atlantic herring southern sandfish.
														</p>
													</td>
												</tr>
											</table>
										</li>
									</ul>
									<!-- end comments list -->
								</div>

								<div class="pt-6 pt-lg-10">
									<h3 class="mb-6">Send Message</h3>

									<form action="#">
										<div class="row">
											<div class="col-12 col-sm-6">
												<div class="input-wrp">
													<input class="textfield" type="text" value="" placeholder="Name" />
												</div>
											</div>

											<div class="col-12 col-sm-6">
												<div class="input-wrp">
													<input class="textfield" type="text" value="" placeholder="Email" inputmode="email" x-inputmode="email" />
												</div>
											</div>
										</div>

										<div class="input-wrp">
											<textarea class="textfield" placeholder="Message"></textarea>
										</div>

										<button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Send Message</button>
									</form>
								</div>

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
