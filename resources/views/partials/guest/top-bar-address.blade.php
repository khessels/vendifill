<ul class="contact-info">
    <li>
        {{-- <div class="__label">{{ $content['top-bar']['address'] ?? "address"}}</div> --}}

        <p>
            {{-- {{ $content['top-bar']['html_address'] ?? "html_address"}} --}}
            {{--                                5272 Lyngate Ct Burke,<br>--}}
            {{--                                VA 2015-1688--}}
        </p>
    </li>

    <li>
        <div class="__label">@c(['mimetype' => 'text/plain', 'key' => 'phone', 'default' => 'Phone'])</div>

        <a href="@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-1-link'])">@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-1-text'])</a>
        <br>
        <a href="@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-2-link'])">@c(['mimetype' => 'text/plain', 'key' => 'top-bar.phone-2-text'])</a>
    </li>
    <li style="display: none;" class="switchLanguageMenu">
        <form id="switchLanguage" action="/switch-menu" method="POST">
            <input type="hidden" id="switch_language_csrf_token" name="_token" value="" />
            <a href="#" class="nav-link switch_language_link">Switch</a>
        </form>
    </li>
    <li>
        {{-- <div class="__label">{{ $content['top-bar']['social'] ?? "social"}}</div> --}}

        <!-- start social buttons -->
        {{-- <div class="s-btns s-btns--gray">
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
        </div> --}}
        <!-- end social buttons -->
    </li>
</ul>
