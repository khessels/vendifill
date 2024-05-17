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
											<li><a href="product_single">Single Product</a></li>
											<li><a href="/cart/checkout">Cart & Checkout</a></li>
											<li><a class="active" href="accountblade.php">Account</a></li>
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
								<h1 class="hero__title">Account</h1>
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
				<section class="section section--gray-bg">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-6 col-lg-4">

								<!-- start auth form -->
								<form class="auth-form" action="#">
									<h4>Sign in</h4>

									<div class="input-wrp">
										<input class="textfield" placeholder="Username" type="text" />
									</div>

									<div class="input-wrp">
										<i class="textfield-ico fontello-eye"></i>
										<input class="textfield" placeholder="Password" type="text" />
									</div>

									<div class="row justify-content-between no-gutters pt-1">
										<div class="col-auto">
											<label class="checkfield align-bottom">
												<input type="checkbox" checked="">
												<i></i>
												Remember me
											</label>
										</div>

										<div class="col-auto">
											<a class="__link" href="#">I forgot my password</a>
										</div>
									</div>

									<button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Sign in</button>

									<div class="text-center"><a href="#">Sign up</a> if you don’t have an account</div>
								</form>
								<!-- end auth form -->

							</div>

							<div class="col-12 col-md-6 col-lg-4">
								<div class="spacer py-5 d-md-none"></div>

								<!-- start auth form -->
								<form class="auth-form" action="#">
									<h4>Sign up</h4>

									<div class="input-wrp">
										<input class="textfield" placeholder="Username" type="text" />
									</div>

									<div class="input-wrp">
										<input class="textfield" placeholder="Email" type="text" inputmode="email" x-inputmode="email"/>
									</div>

									<div class="input-wrp">
										<i class="textfield-ico fontello-eye"></i>
										<input class="textfield" placeholder="Password" type="text" />
									</div>

									<div class="input-wrp">
										<i class="textfield-ico fontello-eye"></i>
										<input class="textfield" placeholder="Confirm Password" type="text" />
									</div>

									<div class="pt-1">I agree with <a href="#">Term of Services</a></div>

									<button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Sign up</button>

									<div class="text-center"><a href="#">Sign in</a> if you an account</div>
								</form>
								<!-- end auth form -->

							</div>

							<div class="col-12 col-md-6 col-lg-4">
								<div class="spacer py-5 d-lg-none"></div>

								<!-- start auth form -->
								<form class="auth-form" action="#">
									<h4>Password Recovery</h4>

									<div class="input-wrp">
										<input class="textfield" placeholder="Email" type="text" inputmode="email" x-inputmode="email"/>
									</div>

									<div class="pt-1"><a href="#">Didn’t get email?</a></div>

									<button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Submit</button>

									<div class="text-center">Back to <a href="#">Sign in</a></div>
								</form>
								<!-- end auth form -->

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
