<!-- start side menu -->
<div id="side-menu" class="side-menu  d-none">
    <div class="side-menu__inner">
        <ul class="side-menu__menu">
            {{ $content['side-menu']['column_1'] ?? "column_1"}}
{{--            <li class="active"><a href="javascript:void(0)">Documents</a></li>--}}
{{--            <li><a href="javascript:void(0)">Downloads</a></li>--}}
{{--            <li><a href="javascript:void(0)">Useful links</a></li>--}}
        </ul>

        <div class="side-menu__contacts">
            <ul class="contact-info">
                <li>
                    <div class="__label">{{ $content['side-menu']['address'] ?? "address"}}</div>

                    <p>
                        {{ $content['side-menu']['html_address'] ?? "html_address"}}
                    </p>
                </li>

                <li>
                    <div class="__label">{{ $content['side-menu']['phone'] ?? "phone"}}</div>

                    <p>
                        {{ $side_menu['phone_1'] ?? "phone_1"}}<br>
                        {{ $side_menu['phone_2'] ?? "phone_2"}}
                    </p>
                </li>

                <li>
                    <div class="__label">{{ $content['side-menu']['social'] ?? "social"}}</div>

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

        <div>
            <a class="custom-btn custom-btn--big custom-btn--s2 wide" href="{{ route('view.red-button') }}">{{ $content['top-bar']['red-button'] ?? "red-button"}}</a>
        </div>
    </div>
</div>
<!-- end side menu -->
