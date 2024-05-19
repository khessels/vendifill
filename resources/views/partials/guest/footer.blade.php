<footer class="footer footer--s2">
    <div class="container">
        <div class="footer__line footer__line--first">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer__item">
                        <a class="footer__logo site-logo" href="/">
                            <img class="lazy" src="/img/blank.gif" data-src="/img/site_logo/logo_2.svg" width="155" height="40" alt="demo" />
                        </a>
                    </div>

                    <div class="footer__item">
                        <p class="__copy">
                            {{ $content['footer']['copyright'] ?? "Copyright © 2023 VendiFill.com"}}
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                    <div class="footer__item">
                        <address class="footer__address">
                            {{ $content['footer']['html_address'] ?? "html_address"}}
                            <p><a href="mailto:{{ $content['footer']['email_info'] ?? "email_info"}}"></a></p>
                        </address>
                    </div>

                    <div class="footer__item">
                        <!-- start social buttons -->
                        <div class="s-btns s-btns--white">
                            <ul class="d-flex flex-row flex-wrap align-items-center">
                                @if(!empty($content['footer']['link_facebook']))
                                    <li><a class="f" href="{{ $content['footer']['link_facebook'] }}"><i class="fontello-facebook"></i></a></li>
                                @endif
                                @if(!empty($content['footer']['link_twitter']))
                                    <li><a class="t" href="{{ $content['footer']['link_twitter'] }}"><i class="fontello-twitter"></i></a></li>
                                @endif
                                @if(!empty($content['footer']['link_youtube']))
                                    <li><a class="y" href="{{ $content['footer']['link_youtube'] }}"><i class="fontello-youtube-play"></i></a></li>
                                @endif
                                @if(!empty($content['footer']['link_instagram']))
                                    <li><a class="i" href="{{ $content['footer']['link_instagram'] }}"><i class="fontello-instagram"></i></a></li>
                                @endif

                            </ul>
                        </div>
                        <!-- end social buttons -->
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-5 offset-xl-1">
                    <div class="row">
                        <div class="col-auto col-md-6 col-lg-5">
                            <div class="footer__item">
                                <nav class="footer__navigation">
                                    <ul>
                                        {{ $content['footer']['column_3'] ?? "column_3"}}
                                        <!-- li class="active" -->
{{--                                        <li><a href="javascript:void(0)">Documents</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">Services</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">Vending Info</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">News</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">Support</a></li>--}}
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-auto col-md-6">
                            <div class="footer__item">
                                <nav class="footer__navigation">
                                    <ul>
                                        <!-- li class="active" -->
                                        {{ $content['footer']['column_4'] ?? "column_4"}}
{{--                                        <li><a href="javascript:void(0)">Snack Vending Machines</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">Beverage Vending Machines</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">Combo Vending Machines</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">Coffee Machines</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">ATMs Machines</a></li>--}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
