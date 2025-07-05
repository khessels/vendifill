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
                            @c(['mimetype' => 'text/plain', 'key' => 'copyright', 'default' =>"Copyright © 2023 - 25 VendiFill.com"])
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                    <div class="footer__item">
                        <address class="footer__address">
                            @c([['mimetype' => 'text/html', 'key' => 'address', 'default' =>"address"])

                            <p><a href="@c(['mimetype' => 'text/plain', 'key' => 'email_address_info_link'])">@c(['mimetype' => 'text/plain', 'key' => 'email_address_info_text'])</a></p>
                        </address>
                    </div>

                    <div class="footer__item">
                        <!-- start social buttons -->
                        <div class="s-btns s-btns--white">
                            <ul class="d-flex flex-row flex-wrap align-items-center">
                                @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_facebook_link'])"))
                                    <li><a class="f" href="@c(['mimetype' => 'text/plain', 'key' => 'link_facebook_link'])"><i class="fontello-facebook"></i></a></li>
                                @endif
                                @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_x_link'])"))
                                    <li><a class="t" href="@c(['mimetype' => 'text/plain', 'key' => 'link_x_link'])"><i class="fontello-twitter"></i></a></li>
                                @endif
                                @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_youtube_link'])"))
                                    <li><a class="y" href="@c(['mimetype' => 'text/plain', 'key' => 'link_youtube_link'])"><i class="fontello-youtube-play"></i></a></li>
                                @endif
                                @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_blsky_link'])"))
                                    <li><a class="i" href="@c(['mimetype' => 'text/plain', 'key' => 'link_blsky_link'])"><i class="fontello-instagram"></i></a></li>
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
                                        @c(['key' => 'footer.column-3', 'default'=>'
                                            <!-- li class="active" -->
                                            <li><a href="javascript:void(0)">Documents</a></li>
                                            <li><a href="javascript:void(0)">Services</a></li>
                                            <li><a href="javascript:void(0)">Vending Info</a></li>
                                            <li><a href="javascript:void(0)">News</a></li>
                                            <li><a href="javascript:void(0)">Support</a></li>
                                        '])
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-auto col-md-6">
                            <div class="footer__item">
                                <nav class="footer__navigation">
                                    <ul>
                                        <!-- li class="active" -->
                                        @c(['key' => 'footer.column-4', 'default'=> '
                                            <li><a href="javascript:void(0)">Snack Vending Machines</a></li>
                                            <li><a href="javascript:void(0)">Beverage Vending Machines</a></li>
                                            <li><a href="javascript:void(0)">Combo Vending Machines</a></li>
                                            <li><a href="javascript:void(0)">Coffee Machines</a></li>
                                            <li><a href="javascript:void(0)">ATMs Machines</a></li>
                                        '])
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
