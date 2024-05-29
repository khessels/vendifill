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
