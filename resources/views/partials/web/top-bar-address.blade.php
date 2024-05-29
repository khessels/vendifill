<ul class="contact-info">
    <li>
        <div class="__label">{{ __('Messages')}}: </div>
    </li>

    <li>
        <div class="__label">{{ $content['top-bar']['phone'] ?? "phone"}}</div>

{{--        <p>--}}
{{--            {{ $content['top-bar']['phone_1'] ?? "phone_1"}} <br>--}}
{{--            {{ $content['top-bar']['phone_2'] ?? "phone_2"}}--}}
{{--        </p>--}}
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
