<!-- start header -->

<header id="top-bar" class="top-bar top-bar--s1" data-nav-fixed="true" data-nav-anchor="false">
    <div class="top-bar__line-contacts">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-auto">
                    <div class="top-bar__contacts">
                        <ul>
                            <li>
                                <a href="@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-1-link'])">@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-1-text'])</a>
                                <a href="@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-2-link'])">@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-2-text'])</a>
                            </li>

                            <li>
                                <a href="@c(['mimetype' => 'text/plain', 'key' => 'email_address_support_link'])">@c(['mimetype' => 'text/plain', 'key' => 'email_address_support_text'])</a>
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
                                        <li><a href="/login">@c(['mimetype' => 'text/plain', 'key' => 'login', 'default' => 'Login'])</a></li>
                                        <li><a href="/signup">@c(['mimetype' => 'text/plain', 'key' => 'signup', 'default' => 'Signup'])</a></li>
                                    @endguest
                                    @auth
                                        <li>
                                            <form method="post" action="/logout">
                                                @csrf
                                                <a style="cursor: pointer;" onclick="this.parentNode.submit();">@c(['key' => 'logout', 'default' => 'Logout'])</a>
                                            </form>
                                        </li>
                                        <li><a href="/profile">@c(['key' => 'profile', 'default' => 'Profile'])</a></li>
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
{{--                                            <li><a class="f" href="https://www.facebook.com/vendifill"><i class="fontello-facebook"></i></a></li>--}}
{{--                                            <li><a class="t" href="{{ $content['top-bar']['link_twitter'] }}"><i class="fontello-twitter"></i></a></li>--}}
{{--                                            <li><a class="y" href="{{ $content['top-bar']['link_youtube'] }}"><i class="fontello-youtube-play"></i></a></li>--}}
{{--                                            <li><a class="i" href="{{ $content['top-bar']['link_instagram'] }}"><i class="fontello-instagram"></i></a></li>--}}
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

    <div class="top-bar__line-menu    compensate-for-scrollbar">
        <a class="top-bar__logo site-logo" href="/">
            <img class="img-fluid" src="/img/site_logo/logo_1.svg" width="155" height="40" alt="demo" />
            <span style="margin-left: -120px; color: #0d1116; font-weight: bolder; font-size: 180%">VendiFill</span>
        </a>

        <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler" href="javascript:void(0);">
            <span></span>
        </a>

        <div class="top-bar__collapse">
            <div>
                <script>
                    $('body').on('click', '.switch_language_link', function(e) {
                        e.preventDefault();
                        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        $('#switch_language_csrf_token').val( csrfToken);
                        document.getElementById( 'switchLanguage').submit();
                    });

                    let activePage = '{{ $page ?? '' }}';
                    console.log( activePage)
                    $(document).ready(function() {
                        $('.page_' + activePage).addClass('active');
                    });
                </script>
                <nav id="top-bar__navigation" class="top-bar__navigation" role="navigation">
                    @guest
                        @include('partials.guest.menu')
                    @endguest
                    @auth
                        @switch( Cookie::get('menuType', 'web'))
                            @case('web')
                                @include('partials.web.menu')
                                @break
                            @case('guest')
                                @include('partials.guest.menu')
                                @break
                            @default
                                @include('partials.web.menu')
                        @endswitch
                    @endauth
                </nav>

                <div class="top-bar__address">
                    @guest
                        @include('partials.guest.top-bar-address')
                    @endguest
                    @auth
                        @include('partials.web.top-bar-address')
                    @endauth
                </div>

                <div class="top-bar__action">
                    @guest
{{--                        <a class="custom-btn" href="{{ route('view.red-button') }}">{{ $content['top-bar']['red_button'] ?? "red_button"}}</a>--}}
{{--                        <a class="custom-btn custom-btn--big custom-btn--s2" href="{{ route('view.red-button') }}">{{ $content['top-bar']['red_button'] ?? "red_button"}}</a>--}}
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
