<ul>
    <li>
        <a class="nav-link" href="/">@c(['key' => 'top-bar.home'])</a>
    </li>
    <li><a href="{{ route('view.about-us')}}">@c(['key' => 'top-bar.about_us'])</a></li>
    <li class="has-submenu">
        <a class="nav-link" href="{{route('view.services')}}">@c(['key' => 'top-bar.service'])</a>
        <ul class="submenu">
            <li><a href="{{route('view.services.machines')}}">@c(['key' => 'top-bar.want-a-machine'])</a></li>
            <li><a href="{{route('view.services.refill')}}">@c(['key' => 'top-bar.service-refill'])</a></li>
{{--            <li><a href="{{ $content['top-bar']['link_products'] ?? "/services/products"}}">{{ $content['top-bar']['products'] ?? __("products")}}</a></li>--}}
        </ul>
    </li>
    <li><a href="{{ route('view.article.request')}}">@c(['key' => 'top-bar.article-request'])</a></li>
    <li><a href="{{ route('view.faqs')}}">@c(['key' => 'top-bar.faq'])</a></li>

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
        <a class="nav-link" href="{{route('view.contact')}}">@c(['key' => 'top-bar.contact-us'])</a>
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
