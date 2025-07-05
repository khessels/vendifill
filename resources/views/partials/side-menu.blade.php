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
                    <div class="__label">@c(['mimetype' => 'text/plain', 'key' => 'address', 'default' =>"Address"])</div>

                </li>

                <li>
                    <div class="__label">@c(['mimetype' => 'text/plain', 'key' => 'phone', 'default' =>"Phone"])</div>
                    <p>
                        <a href="@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-1-link'])">@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-1-text'])</a><br>
                        <a href="@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-2-link'])">@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-2-text'])</a>
                    </p>
                </li>

                <li>
                    <div class="__label">@c(['mimetype' => 'text/plain', 'key' => 'social', 'default' =>"Social media"])</div>

                    <!-- start social buttons -->
                    <div class="s-btns s-btns--gray">
                        <ul class="d-flex flex-row flex-wrap align-items-center">
                            @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_facebook_link'])"))
                                <li>
                                    <a class="f" href="@c(['mimetype' => 'text/plain', 'key' => 'link_facebook_link'])">
                                    <i class="fontello-facebook"></i></a>
                                </li>
                            @endif
                            @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_x_link'])"))
                                <li>
                                    <a class="t" href="@c(['mimetype' => 'text/plain', 'key' => 'link_x_link'])">
                                        <i class="fontello-twitter"></i>
                                    </a>
                                </li>
                            @endif
                            @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_youtube_link'])"))
                                <li>
                                    <a class="y" href="@c(['mimetype' => 'text/plain', 'key' => 'link_youtube_link'])">
                                        <i class="fontello-youtube-play"></i>
                                    </a>
                                </li>
                            @endif
                            @if(!empty("@c(['mimetype' => 'text/plain', 'key' => 'link_blsky_link'])"))
                                <li>
                                    <a class="i" href="@c(['mimetype' => 'text/plain', 'key' => 'link_blsky_link'])">
                                        <i class="fontello-instagram"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- end social buttons -->
                </li>
            </ul>
        </div>
{{--
        <div>
            <a class="custom-btn custom-btn--big custom-btn--s2 wide" href="{{ route('view.red-button') }}">{{ $content['top-bar']['red-button'] ?? "red-button"}}</a>
        </div> --}}
    </div>
</div>
<!-- end side menu -->
