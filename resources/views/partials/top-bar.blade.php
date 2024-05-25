<!-- start header -->
<header id="top-bar" class="top-bar top-bar--s1" data-nav-fixed="true" data-nav-anchor="false">
    <div class="top-bar__line-contacts">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-auto">
                    <div class="top-bar__contacts">
                        <ul>
                            <li>
                                <a href="tel:{{ $content['top-bar']['phone_1'] ?? "phone_1"}}">{{ $content['top-bar']['phone_1'] ?? "phone_1"}}</a>
                                <a href="tel:{{ $content['top-bar']['phone_2'] ?? "phone_2"}}">{{ $content['top-bar']['phone_2'] ?? "phone_2"}}</a>
                            </li>

                            <li>
                                <a href="mailto:{{$content['top-bar']['email_support'] ?? 'email_support'}}">{{$content['top-bar']['email_support'] ?? 'email_support'}}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <nav class="top-bar__subnav">
                                <ul class="d-flex flex-row flex-wrap justify-content-center align-items-center">
                                    <li>
                                        @include('partials.language')
                                    </li>

                                    @guest
                                    <li><a href="{{ $content['top-bar']['link_login'] ?? "/login"}}">{{ $content['top-bar']['login'] ?? "login"}}</a></li>
                                    @endguest
                                    @auth
                                        <li><a href="{{ $content['top-bar']['link_logout'] ?? "/logout"}}">{{ $content['top-bar']['logout'] ?? "logout"}}</a></li>
                                        <li><a href="{{ $content['top-bar']['link_profile'] ?? "/profile"}}">{{ $content['top-bar']['profile'] ?? "profile"}}</a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>

                        <div class="col-auto">
                            <div class="top-bar__socials">
                                <!-- start social buttons -->
                                <div class="s-btns s-btns--gray">
                                    <ul class="d-flex flex-row flex-wrap justify-content-center align-items-center">
                                        <li><a class="f" target="_blank" href="https://www.facebook.com/vendifill"><i class="fontello-facebook"></i></a></li>
                                        @if(!empty($content['top-bar']['link_facebook']))
                                            <li><a class="f" href="{{ $content['top-bar']['link_facebook'] }}"><i class="fontello-facebook"></i></a></li>
                                        @endif
                                        @if(!empty($content['top-bar']['link_twitter']))
                                            <li><a class="t" href="{{ $content['top-bar']['link_twitter'] }}"><i class="fontello-twitter"></i></a></li>
                                        @endif
                                        @if(!empty($content['top-bar']['link_youtube']))
                                            <li><a class="y" href="{{ $content['top-bar']['link_youtube'] }}"><i class="fontello-youtube-play"></i></a></li>
                                        @endif
                                        @if(!empty($content['top-bar']['link_instagram']))
                                            <li><a class="i" href="{{ $content['top-bar']['link_instagram'] }}"><i class="fontello-instagram"></i></a></li>
                                        @endif
{{--                                        <li><a class="t" href="javascript:void(0)"><i class="fontello-twitter"></i></a></li>--}}
{{--                                        <li><a class="y" href="javascript:void(0)"><i class="fontello-youtube-play"></i></a></li>--}}
{{--                                        <li><a class="i" href="javascript:void(0)"><i class="fontello-instagram"></i></a></li>--}}
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
{{--        <div class="top-bar__side-menu-button js-side-menu-toggler">--}}
{{--            <span></span>--}}
{{--        </div>--}}

        <a class="top-bar__logo site-logo" href="/">
            <img class="img-fluid" src="/img/site_logo/logo_1.svg" width="155" height="40" alt="demo" />
        </a>

        <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler" href="javascript:void(0);">
            <span></span>
        </a>

        <div class="top-bar__collapse">
            <div>
                <nav id="top-bar__navigation" class="top-bar__navigation" role="navigation">
                    <ul>
                        <li>
                            <a class="nav-link" href="/">{{ $content['top-bar']['home'] ?? "home"}}</a>
                        </li>
                        <li><a href="{{ $content['top-bar']['link_about_us'] ?? "/about_us"}}">{{ $content['top-bar']['about_us'] ?? "about_us"}}</a></li>
                        <li class="has-submenu">
                            <a class="nav-link" href="{{ $content['top-bar']['link_services'] ?? "javascript:void(0);"}}">{{ $content['top-bar']['services'] ?? "services"}}</a>
                            <ul class="submenu">
                                <li><a href="{{ $content['top-bar']['link_machines'] ?? "/services/machines"}}">{{ $content['top-bar']['machines'] ?? "machines"}}</a></li>
                                <li><a href="{{ $content['top-bar']['link_products'] ?? "/services/products"}}">{{ $content['top-bar']['products'] ?? "products"}}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ $content['top-bar']['link_article_request'] ?? "/article/request"}}">{{ $content['top-bar']['article_request'] ?? "article_request"}}</a></li>
                        <li><a href="{{ $content['top-bar']['link_faq'] ?? "/faq"}}">{{ $content['top-bar']['faq'] ?? "faq"}}</a></li>
{{--                        --}}

{{--                        <li>--}}
{{--                            <a class="nav-link" href="/products">Products</a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="nav-link" href="/blog">Blog</a>--}}
{{--                        </li>--}}

{{--                        <li class="has-submenu">--}}
{{--                            <a class="nav-link" href="javascript:void(0);">Shop</a>--}}

{{--                            <ul class="submenu">--}}
{{--                                <li><a href="/shop_catalog">Catalog</a></li>--}}
{{--                                <li><a href="/product_single">Single Product</a></li>--}}
{{--                                <li><a href="/cart/checkout">Cart & Checkout</a></li>--}}
{{--                                <li><a href="/account">Account</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

                        <li>
{{--                            <a class="nav-link active" href="/contact">Contact Us</a>--}}
                            <a class="nav-link" href="{{ $content['top-bar']['link_contact_us'] ?? "/contact"}}">{{ $content['top-bar']['contact_us'] ?? "contact_us"}}</a>
                        </li>

{{--                        <li class="has-submenu">--}}
{{--                            <a class="nav-link" href="javascript:void(0);">Elements</a>--}}

{{--                            <ul class="submenu">--}}
{{--                                <li><a href="/element/accordions">Accordion</a></li>--}}
{{--                                <li><a href="/element/alerts">Alerts</a></li>--}}
{{--                                <li><a href="/elements-counters">Counters</a></li>--}}
{{--                                <li><a href="/elements-form">Forms</a></li>--}}
{{--                                <li><a href="/elements-icons">IconList</a></li>--}}
{{--                                <li><a href="/elements-info_tables">Tables</a></li>--}}
{{--                                <li><a href="/elements-media_embeds">Media Embeds</a></li>--}}
{{--                                <li><a href="/elements-pricing_tables">Pricing Tables</a></li>--}}
{{--                                <li><a href="/elements-tabs">Tabs</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                    </ul>
                </nav>

                <div class="top-bar__address">
                    <ul class="contact-info">
                        <li>
                            <div class="__label">{{ $content['top-bar']['address'] ?? "address"}}</div>

                            <p>
                                {{ $content['top-bar']['html_address'] ?? "html_address"}}
{{--                                5272 Lyngate Ct Burke,<br>--}}
{{--                                VA 2015-1688--}}
                            </p>
                        </li>

                        <li>
                            <div class="__label">{{ $content['top-bar']['phone'] ?? "phone"}}</div>

                            <p>
                                {{ $content['top-bar']['phone_1'] ?? "phone_1"}} <br>
                                {{ $content['top-bar']['phone_2'] ?? "phone_2"}}
                            </p>
                        </li>

                        <li>
                            <div class="__label">{{ $content['top-bar']['social'] ?? "social"}}</div>

                            <!-- start social buttons -->
                            <div class="s-btns s-btns--gray">
                                <ul class="d-flex flex-row flex-wrap align-items-center">
                                    @if(!empty($content['top-bar']['link_facebook']))
                                        <li><a class="f" href="{{ $content['top-bar']['link_facebook'] }}"><i class="fontello-facebook"></i></a></li>
                                    @endif
                                    @if(!empty($content['top-bar']['link_twitter']))
                                        <li><a class="t" href="{{ $content['top-bar']['link_twitter'] }}"><i class="fontello-twitter"></i></a></li>
                                    @endif
                                    @if(!empty($content['top-bar']['link_youtube']))
                                        <li><a class="y" href="{{ $content['top-bar']['link_youtube'] }}"><i class="fontello-youtube-play"></i></a></li>
                                    @endif
                                    @if(!empty($content['top-bar']['link_instagram']))
                                        <li><a class="i" href="{{ $content['top-bar']['link_instagram'] }}"><i class="fontello-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- end social buttons -->
                        </li>
                    </ul>
                </div>

                <div class="top-bar__action">
                    <a class="custom-btn" href="javascript:void(0)">{{ $content['top-bar']['get_in_touch'] ?? "get_in_touch"}}</a>
                    <a class="custom-btn custom-btn--big custom-btn--s2" href="{{ $content['top-bar']['link_get_in_touch'] ?? "/contact"}}">{{ $content['top-bar']['get_in_touch'] ?? "get_in_touch"}}</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
